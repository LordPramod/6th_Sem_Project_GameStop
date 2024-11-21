import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.model_selection import train_test_split
from flask import Flask, request, jsonify
from flask_cors import CORS
import joblib

app = Flask(__name__)
CORS(app)

# Load data from CSV file or from a joblib file if it exists
try:
    data = joblib.load('products_details.pkl')
except (FileNotFoundError, ValueError):
    data = pd.read_csv('products_details.csv')
    joblib.dump(data, 'products_details.pkl')  # Saving  data for future use

# Ensure the description column exists and fill NaN values if any
data['description'] = data['description'].fillna('')  # Fill NaN values in description

# Split the data into training and testing sets
train_data, test_data = train_test_split(data, test_size=0.2, random_state=42)

# Text preprocessing and TF-IDF Vectorizer on the training data
tfidf = TfidfVectorizer(stop_words='english')
tfidf_matrix = tfidf.fit_transform(data['description'])  # Changed to use full dataset instead of train_data

# Compute cosine similarity matrix
cosine_sim = cosine_similarity(tfidf_matrix, tfidf_matrix)

# Save the cosine similarity matrix using joblib
joblib.dump(cosine_sim, 'cosine_similarity.pkl')

# Map product names to indices for all products
indices = pd.Series(data.index, index=data['pdt_name']).drop_duplicates()  # Changed to use full dataset

# Recommendation function
def get_recommendations(title, cosine_sim=cosine_sim):
    if title not in indices:
        return None  # Product not found in the dataset

    # Get the index of the product that matches the title
    idx = indices[title]

    # Check if `idx` is within the bounds of `cosine_sim`
    if idx >= cosine_sim.shape[0]:
        return None  # Index is out of bounds

    # Get the pairwise similarity scores of all products with the given product
    sim_scores = list(enumerate(cosine_sim[idx]))

    # Sort the products based on similarity scores
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)

    # Get the scores of the 10 most similar products (excluding itself)
    sim_scores = sim_scores[1:6]

    # Get the product indices
    product_indices = [i[0] for i in sim_scores]

    # Return the top 10 most similar products
    return data[['pdt_name', 'description']].iloc[product_indices].to_dict(orient='records')

# Add new function for recommendations based on description
def get_recommendations_for_new_product(title):
    # If title exists in our data, use its description
    if title in data['pdt_name'].values:
        description = data[data['pdt_name'] == title]['description'].iloc[0]
    else:
        # If title doesn't exist, use it as a description
        description = title

    # Transform the text using the same TF-IDF vectorizer
    new_product_vector = tfidf.transform([description])
    
    # Calculate similarity between the new product and all existing products
    sim_scores = cosine_similarity(new_product_vector, tfidf_matrix)[0]
    
    # Create list of (index, similarity score) pairs
    sim_scores = list(enumerate(sim_scores))
    
    # Sort products based on similarity scores
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)
    
    # If title exists in database, exclude it from recommendations
    if title in data['pdt_name'].values:
        product_idx = data[data['pdt_name'] == title].index[0]
        sim_scores = [s for s in sim_scores if s[0] != product_idx]
    
    # Get the top 5 most similar products
    sim_scores = sim_scores[:5]
    
    # Get the product indices
    product_indices = [i[0] for i in sim_scores]
    
    # Return the top 5 most similar products
    return data[['pdt_name', 'description']].iloc[product_indices].to_dict(orient='records')

@app.route('/recommend', methods=['POST', 'GET'])
def recommend():
    # Get title from either POST or GET request
    if request.method == 'POST':
        data = request.get_json()
        title = data.get('title')
    else:  # GET method
        title = request.args.get('title')
    
    if not title:
        return jsonify({'error': 'Title is required'}), 400

    recommendations = get_recommendations(title)
    if recommendations is None:
        return jsonify({'error': 'Product not found in the dataset or index out of bounds.'}), 404
    return jsonify(recommendations)

@app.route('/recommend/new', methods=['POST', 'GET'])
def recommend_new_product():
    # Get title from either POST or GET request
    if request.method == 'POST':
        data = request.get_json()
        title = data.get('title')
    else:  # GET method
        title = request.args.get('title')
    
    if not title:
        return jsonify({'error': 'Title is required'}), 400
    
    recommendations = get_recommendations_for_new_product(title)
    return jsonify(recommendations)

if __name__ == '__main__':
    CORS(app)
    app.run(debug=True)
