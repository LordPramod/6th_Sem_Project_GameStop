import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
from sklearn.model_selection import train_test_split
from flask import Flask, request, jsonify
from flask_cors import CORS
import joblib

app = Flask(**name**)
CORS(app)

# Load data from CSV file or from a joblib file if it exists

try:
data = joblib.load('products_details.pkl')
except (FileNotFoundError, ValueError):
data = pd.read_csv('products_details.csv')
joblib.dump(data, 'products_details.pkl') # Saving data for future use

# Ensure the description column exists and fill NaN values if any

data['description'] = data['description'].fillna('') # Fill NaN values in description

# Split the data into training and testing sets

train_data, test_data = train_test_split(data, test_size=0.2, random_state=42)

# Text preprocessing and TF-IDF Vectorizer on the training data

tfidf = TfidfVectorizer(stop_words='english')
tfidf_matrix = tfidf.fit_transform(train_data['description']) # Transform the description to TF-IDF features

# Compute cosine similarity matrix

cosine_sim = cosine_similarity(tfidf_matrix, tfidf_matrix)

# Save the cosine similarity matrix using joblib

joblib.dump(cosine_sim, 'cosine_similarity.pkl')

# Map product names to indices only for products in train_data

indices = pd.Series(train_data.index, index=train_data['pdt_name']).drop_duplicates()

# Recommendation function

def get_recommendations(title, cosine_sim=cosine_sim):
if title not in indices:
return None # Product not found in the dataset

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
    return train_data[['pdt_name', 'description']].iloc[product_indices].to_dict(orient='records')

@app.route('/recommend', methods=['GET'])
def recommend_get():
title = request.args.get('title')
recommendations = get_recommendations(title)
if recommendations is None:
return jsonify({'error': 'Product not found in the dataset or index out of bounds.'}), 404
return jsonify(recommendations)

@app.route('/recommend', methods=['POST'])
def recommend_post():
data = request.get_json()
title = data.get('title')
if not title:
return jsonify({'error': 'Title is required'}), 400

    recommendations = get_recommendations(title)
    if recommendations is None:
        return jsonify({'error': 'Product not found in the dataset or index out of bounds.'}), 404
    return jsonify(recommendations)

@app.route('/recommend/new', methods=['POST'])
def recommend_new_product():
data = request.get_json()
description = data.get('description')
if not description:
return jsonify({'error': 'Description is required'}), 400

    recommendations = get_recommendations_for_new_product(description)
    return jsonify(recommendations)

if **name** == '**main**':
CORS(app)
app.run(debug=True)
