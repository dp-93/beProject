<?php
session_start();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "hospitalms";

    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch posted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Protect against SQL injection
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check if username and password exist in the admin table
    $sql = "SELECT * FROM admintb WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // If a row is returned, login is successful
    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Login successful!');</script>"; // JavaScript alert for successful login
        header("Location: data.php"); // Redirect to next page after successful login
        exit();
    } else {
        $login_error = "Invalid username or password"; // Display error message if login fails
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0; /* Add margin to body to prevent default margin */
            padding: 0; /* Add padding to body to reset default padding */
        }
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .login-container {
            width: 300px;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        .login-container h2 {
            text-align: center;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        .login-container input[type="submit"] {
            width: 100%;
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            box-sizing: border-box;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<nav>
    <ul>
        <li><a href="index3.php">Home</a></li>
        <li><a href="ambulogin.php">Admin</a></li>
    </ul>
</nav>
<div class="login-container">
    <h2>Admin Login</h2>
    <?php if (isset($login_error)) { ?>
        <p class="error-message"><?php echo $login_error; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
