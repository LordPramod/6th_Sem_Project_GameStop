<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Recommendation</title>
    <style>
        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            border-radius: 5px;
            max-width: 300px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: inline-block;
            vertical-align: top;
        }
        .product-name {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin: 10px 0;
            text-align: center;
        }
        .product-image {
            width: 200px;
            height: 200px;
            object-fit: contain;
            display: block;
            margin: 0 auto;
        }
        #productContainer {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div id="recommendation-result">
        <h2>Product Recommendations</h2>
        <div id="productContainer"></div>
    </div>

    <script>
        async function getProductPhoto(productName) {
            try {
                const response = await fetch(`http://localhost/gamestop/backend/functions/get_product_photo.php?name=${encodeURIComponent(productName)}`);
                if (!response.ok) throw new Error('Photo not found');
                const data = await response.json();
                return data.photo_url; // Assuming your API returns a photo_url
            } catch (error) {
                console.error("Error fetching photo:", error);
                return 'placeholder.jpg'; // Return a placeholder image path
            }
        }

        document.addEventListener("DOMContentLoaded", function () {
            const url = "http://127.0.0.1:5000/recommend/new?title=<?php echo urlencode(string: $pdt_name2); ?>";
            const productContainer = document.getElementById("productContainer");

            fetch(url, {
                method: "GET",
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.json();
            })
            .then(async data => {
                console.log("Received data:", data);
                
                productContainer.innerHTML = '';
                
                // Process each product
                for (const product of data) {
                    const productCard = document.createElement('div');
                    productCard.className = 'product-card';
                    productCard.style.cursor = 'pointer';
                    productCard.onclick = () => {
                        window.location.href = `../../frontend/pages/productview.php?id=<?php echo $id; ?>`;
                    };
                    
                    // product photo
                    const photoUrl = await getProductPhoto(product.pdt_name);
                    
                    //  card content
                    productCard.innerHTML = `
                        <img src="../../frontend/assets/images/${photoUrl}" alt="${product.pdt_name}" class="product-image">
                        <div class="product-name">${product.pdt_name}</div>
                    `;
                    
                    productContainer.appendChild(productCard);
                }
            })
            .catch(error => {
                console.error("Error:", error);
                productContainer.innerHTML = `<div class="product-card" style="color: red;">
                    Error getting recommendations: ${error.message}
                </div>`;
            });
        });
    </script>
</body>
</html>