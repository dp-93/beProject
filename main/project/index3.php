<?php
require 'connection.php';
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $latitude = $_POST["latitude"];
    $longitude = $_POST["longitude"];
    $query = "INSERT INTO tb_data VALUES ('$name','$phone','$latitude','$longitude')";
    mysqli_query($conn,$query);
    echo
    "<script>
    alert('data added');
    document.location.href= 'data.php';
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Insert Data With Geolocation Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-repeat: no-repeat;
        }
        .container {
            margin-top: 100px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            height: 400px;
            padding: 20px;
            background-image: url('../project/images/ambulance.png');
            border-radius: 8px;
            background-size: fit;
            background-repeat: no-repeat;
        }
        .myForm label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .myForm input[type="text"],
        .myForm input[type="tel"] {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .myForm button[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .myForm button[type="submit"]:hover {
            background-color: #0056b3;
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
    </style>
</head>
<body onload="getLocation();">
    <nav>
        <ul>
            <li><a href="index3.php">Home</a></li>
            <li><a href="ambulogin.php">Admin</a></li>
        </ul>
    </nav>
    <div class="container">
        <form class="myForm" action="" method="post" autocomplete="off">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required value=""> <br>
            <label for="contact">Contact</label>
            <input type="tel" id="contact" name="contact" required value=""> <br>
            
            <input type="text" name="latitude" value=""> <br>
            <input type="text" name="longitude" value=""> <br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <script type="text/javascript">
            function getLocation() {
                if(navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition, showError);
                }
            }
            function showPosition(position) {
                document.querySelector('.myForm input[name="latitude"]').value = position.coords.latitude;
                document.querySelector('.myForm input[name="longitude"]').value = position.coords.longitude;
            }
            function showError(error) {
                switch(error.code) {
                    case error.PERMISSION_DENIED:
                        alert("You must allow the request for geolocation to fill out the form");
                        location.reload();
                        break;
                }
            }
        </script>
    </div>
</body>
</html>
