import requests

url = "http://127.0.0.1:5000/recommend"
data = {"title": "Google Gift Card 100$"}

response = requests.post(url, json=data)

if response.status_code == 200:
    recommendations = response.json()
    print(recommendations)
else:
    print(f"Error: {response.status_code}, {response.text}")
