<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-container {
    width: 300px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    align-items: center;
}

        
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
input[type="password"],
input[type="submit"] {
    width: 85%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #007bff;
    border: none;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}
     
      
        .error-message {
            color: red;
            margin-top: 10px;
        }

        nav {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    text-align: center;
    margin: 0; /* Add this line */
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
    </style>
</head>
<body>
<
</nav>
    <div class="login-container">
        <h2>Login</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Login">
        </form>
        <?php
        // Database credentials
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "hospitalms";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Connect to the database
            $conn = new mysqli($host, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve username and password from the form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // SQL query to retrieve user with matching username and password
            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                // User authenticated successfully
                echo "<p class='success-message'>Login successful!</p>";
                header("Location: data.php");
                exit();
                // Here you can redirect the user to another page or perform any other action
            } else {
                // Authentication failed
                echo "<p class='error-message'>Invalid username or password</p>";
            }

            // Close database connection
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
