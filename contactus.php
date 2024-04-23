<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname = "major project";

$con = new mysqli($servername,$username,$password,$dbname);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $q = "INSERT INTO contactus (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    
    if ($con->query($q)) {
        header("Location: index.html");
        exit;
    } else {
        echo "Error: " . $q . "<br>" . $con->error;
    }
}

$con->close();

?>