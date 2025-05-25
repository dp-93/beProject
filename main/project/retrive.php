<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "bms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to select data from blood_bank_registration table
$sql = "SELECT blood_bank_name, blood_bank_id, address, contact_info FROM blood_bank_registration";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Blood Banks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Registered Blood Banks</h2>
    <table>
        <tr>
            <th>Blood Bank Name</th>
            <th>Blood Bank ID</th>
            <th>Address</th>
            <th>Contact Info</th>
        </tr>
        <?php
        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row["blood_bank_name"]. "</td>";
                echo "<td>". $row["blood_bank_id"]. "</td>";
                echo "<td>". $row["address"]. "</td>";
                echo "<td>". $row["contact_info"]. "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No blood banks registered yet.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
