require_once 'config.php';
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
    $name = $_POST['username'];
    $password = $_POST['password'];

    // Protect against SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $password = mysqli_real_escape_string($conn, $password);

    // Query to check if username and password exist in the admin table
    $sql = "SELECT name and password FROM combine WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);

    // If a row is returned, login is successful
    if ($result->num_rows > 0) {
        $_SESSION['name'] = $name;
        
        
        echo "<script>
                alert('Login successful!');
                window.location.href = 'http://localhost/main/project/services.html'; // Redirect to abc.php after clicking OK
              </script>";
    
    
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
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
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

<div class="login-container">
    <h2>Login</h2>
    <?php if (isset($login_error)) { ?>
        <p class="error-message"><?php echo $login_error; ?></p>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
    <p>Don't have an account? <a href="http://localhost/main/signup.php">Sign Up</a></p>
</div>

</body>
</html>
