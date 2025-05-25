<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Requests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

       
        table {
            border-collapse: collapse;
            width: 80%;
            max-width: 800px;
            text-align: center;
            margin: auto;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            animation: fadeIn 1s ease;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            transition: background-color 0.3s ease;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #ffffff;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
        tr:hover td {
            background-color: #f9f9f9;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Map</th>
        </tr>
        <?php
        require 'connection.php';
        $rows = mysqli_query($conn, "SELECT * FROM tb_data ");
        foreach ($rows as $row) :
        ?>
        <tr>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td style="width: 450px; height: 450px;"><iframe src='https://www.google.com/maps?q=<?php echo $row["latitude"];?>,<?php echo $row["longitude"];?>&hl=en&z=14&output=embed' allowfullscreen="" loading="lazy"></iframe></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
