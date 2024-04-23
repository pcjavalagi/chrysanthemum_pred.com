<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "major project";

$con = new mysqli($servername,$username,$password,$dbname);
$name = $_POST['name'];
$password = $_POST['password'];

$q = "select*from authentication";
$res = $con->query($q);
while ($row=$res->fetch_assoc()) {
    if (($row["userId"]) == ($name) && ($row["password"]) == ($password)){
        echo "done";
    }
}
?>