<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form - Admin Panel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Admin Panel - Contact Form Messages</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $dbname     = "major project";

        $con = new mysqli($servername, $username, $password, $dbname);

        $q = "SELECT * FROM contactus";
        $result = $con->query($q);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row['name']."</td><td>".$row['email']."</td><td>".$row['message']."</td></tr>";
            }
        }
        ?>
    </table>
</body>
</html>
