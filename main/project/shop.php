<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical shop</title>
    
    <style>
        /* CSS styles remain the same */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
        }

        .product {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            cursor: pointer;
        }

        .product img {
            max-width: 200px;
            margin-right: 20px;
        }

        .product-info {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .product h2 {
            margin-top: 0;
            margin-bottom: 10px;
            cursor: pointer;
            color: #007bff;
        }

        .product h2:hover {
            text-decoration: underline;
        }

        .product p {
            margin: 0;
            margin-bottom: 10px;
        }

        .product .description {
            margin-bottom: 20px;
        }

        .info-block {
            margin-bottom: 10px;
        }

        /* Popup form styles */
        .popup-form {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 40px; /* Increase padding for larger size */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }

        .popup-form h2 {
            margin-top: 0;
        }

        .popup-form .info-block {
            margin-bottom: 10px;
        }

        .popup-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup-form button:hover {
            background-color: #0056b3;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #555;
        }

        .close-btn:hover {
            color: #000;
        }
    
    </style>
</head>
<body>

<div class="container">
    <h1>E-commerce Products</h1>
    <!-- Search input added to the top bar -->
    <input type="text" id="searchInput" class="search-input" style="padding: 10px; border-radius: 20px; border: 1px solid #ccc; font-size: 16px;" placeholder="Search by product name" onkeyup="searchProduct()">
<button class="search-btn" style="padding: 10px 20px; border-radius: 20px; border: none; background-color: #007bff; color: #fff; font-size: 16px; cursor: pointer;" onclick="searchProduct()">Search</button>


    <?php
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospitalms";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch products from the database
    $sql = "SELECT * FROM products";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product">';
            echo '<img src="' . $row["photo"] . '" alt="' . $row["name"] . '">';

            echo '<div class="product-info" onclick="showPopup(' . $row["id"] . ')">';
            echo '<div class="info-block">';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '</div>';

            echo '<div class="info-block">';
            echo '<p><strong>Cost:</strong> $' . $row["cost"] . '</p>';
            echo '</div>';

            echo '<div class="info-block">';
            echo '<p class="description">' . $row["description"] . '</p>';
            echo '</div>';

            echo '</div>'; // End of product-info
            echo '</div>'; // End of product

            // Popup form for each product remains the same
            echo '<div id="popup-' . $row["id"] . '" class="popup-form">';
            echo '<span class="close-btn" onclick="closePopup(' . $row["id"] . ')">&times;</span>';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '<div class="info-block">';
            echo '<p><strong>Cost:</strong> $' . $row["cost"] . '</p>';
            echo '</div>';

            echo '<div class="info-block">';
            echo '<p class="description">' . $row["description"] . '</p>';
            echo '</div>';

            echo '<button onclick="buyProduct(' . $row["id"] . ')">Buy</button>';
            echo '</div>';
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>

    <script>
        // Function to show the popup form remains the same
        function showPopup(productId) {
            var popup = document.getElementById("popup-" + productId);
            popup.style.display = "block";
        }

        // Function to close the popup form remains the same
        function closePopup(productId) {
            var popup = document.getElementById("popup-" + productId);
            popup.style.display = "none";
        }

        // Function to handle buying a product remains the same
        function buyProduct(productId) {
            // Here, you can implement your logic for buying the product, such as adding it to a cart or making a purchase
            alert("Product with ID " + productId + " is bought!");
            // For demonstration purposes, let's just close the popup
            var popup = document.getElementById("popup-" + productId);
            popup.style.display = "none";
        }

        // Function to search for a product by name
        function searchProduct() {
            var input, filter, products, product, productName, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            products = document.getElementsByClassName("product");

            for (i = 0; i < products.length; i++) {
                product = products[i];
                productName = product.getElementsByClassName("info-block")[0].getElementsByTagName("h2")[0];
                txtValue = productName.textContent || productName.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    product.style.display = "";
                } else {
                    product.style.display = "none";
                }
            }
        }
    </script>
</div>

</body>
</html>
