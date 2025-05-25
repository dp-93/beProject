<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Products</title>
    <style>
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
            padding: 20px;
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
    </style>
</head>
<body>

<div class="container">
    <h1>E-commerce Products</h1>
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

            // Popup form for each product
            echo '<div id="popup-' . $row["id"] . '" class="popup-form">';
            echo '<h2>' . $row["name"] . '</h2>';
            echo '<div class="info-block">';
            echo '<p><strong>Cost:</strong> $' . $row["cost"] . '</p>';
            echo '</div>';

            echo '<div class="info-block">';
            echo '<p class="description">' . $row["description"] . '</p>';
            echo '</div>';

            echo '<button onclick="buyProduct(' . $row["id"] . ')">Buy</button>';
            echo '</div>'; // End of popup-form
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>

    <script>
        // Function to show the popup form
        function showPopup(productId) {
            var popup = document.getElementById("popup-" + productId);
            popup.style.display = "block";
        }

        // Function to handle buying a product
        function buyProduct(productId) {
            // Here, you can implement your logic for buying the product, such as adding it to a cart or making a purchase
            alert("Product with ID " + productId + " is bought!");
            // For demonstration purposes, let's just close the popup
            var popup = document.getElementById("popup-" + productId);
            popup.style.display = "none";
        }
    </script>
</div>

</body>
</html>
