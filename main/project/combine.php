<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up and Login</title>
</head>
<body>
    <?php
    // Database connection
    $host = "localhost"; // Host name
    $username = "root"; // Mysql username
    $password = ""; // Mysql password
    $database = "hospitalms"; // Database name

    // Connect to server and select database.
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["register"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Insert user data into the database
            $sql = "INSERT INTO services (username, password) VALUES ('$username', '$password')";
            if (mysqli_query($conn, $sql)) {
                echo "User registered successfully.";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } elseif (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Authenticate user from the database
            $sql = "SELECT * FROM services WHERE username='$username' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "Login successful. Welcome, $username!";
            } else {
                echo "Invalid username or password.";
            }
        }
    }
    ?>

    <h2>Sign Up</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="register" value="Sign Up">
    </form>

    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
