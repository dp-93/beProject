<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "bms";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle form data
    $blood_bank_name = $_POST['blood_bank_name'];
    $blood_bank_id = $_POST['blood_bank_id'];
    $address = $_POST['address'];
    $contact_info = $_POST['contact_info'];

    // Upload photo (document)
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['photo']['name'];
        $file_tmp = $_FILES['photo']['tmp_name'];
        $upload_dir = "uploads/";
        move_uploaded_file($file_tmp, $upload_dir . $file_name);
        $photo_path = $upload_dir . $file_name;
    } else {
        $photo_path = "No photo uploaded";
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL query to insert data into blood_bank_registration table
    $sql = "INSERT INTO blood_bank_registration (blood_bank_name, blood_bank_id, address, contact_info, photo_path)
    VALUES ('$blood_bank_name', '$blood_bank_id', '$address', '$contact_info', '$photo_path')";

    if ($conn->query($sql) === TRUE) {
        // Close connection
        $conn->close();
        // JavaScript alert pop-up message
        echo '<script>alert("Blood Bank Registration Successful!");</script>';
        // Show the button to view response
      //  echo '<button onclick="window.location.href = \'response.php?id=' . $blood_bank_id . '\';">View Response</button>';
    //} else {
       // echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Redirect to the registration form if accessed directly without submitting
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blood Bank Registration</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin-top: 90px;
            }
            .container {
                max-width: 400px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                background-image: url("../shubham/bg2.jpeg");
                background-size: cover; /* Cover the entire container */
                background-position: center; /* Center the background image */
                background-repeat: no-repeat; /* Do not repeat the background image */
            }
            .form-group {
                margin-bottom: 20px;
            }
            .form-group label {
                display: block;
                font-weight: bold;
            }
            .form-group input[type="text"],
            .form-group input[type="file"] {
                width: 75%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-left: 30px;
            }
            .form-group button {
                padding: 10px 20px;
                background-color: #007bff;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <h2>Blood Bank Registration</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="blood_bank_name">Blood Bank Name:</label>
                <input type="text" id="blood_bank_name" name="blood_bank_name" required>
            </div>
            <div class="form-group">
                <label for="blood_bank_id">Blood Bank ID:</label>
                <input type="text" id="blood_bank_id" name="blood_bank_id" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="contact_info">Contact Info:</label>
                <input type="text" id="contact_info" name="contact_info" required>
            </div>
            <div class="form-group">
                <label for="photo">Upload Photo (Document):</label>
                <input type="file" id="photo" name="photo" accept="image/*" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
       
    </div>
    </body>
    </html>
    <?php
}
?>
