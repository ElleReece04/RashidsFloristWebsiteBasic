<?php

$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $flowerType = $_POST["flower-type"];
    $flowerColor = $_POST["flower-color"];
    $balloons = $_POST["balloons"];
    $happyBirthdaySign = $_POST["happy-birthday-sign"];
    $ageNumber = $_POST["age-number"];

  
    $sql = "INSERT INTO your_table_name (flower_type, flower_color, balloons, happy_birthday_sign, age_number)
            VALUES ('$flowerType', '$flowerColor', '$balloons', '$happyBirthdaySign', '$ageNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully into the database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>