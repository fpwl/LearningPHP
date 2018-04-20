<?php

$servername= "localhost";
$dbname="ShoppingList";
$username="root";
$password="root";

// mysqli format, the stuff inside () must be in this order. Because you need to login first before entering the database. 
$conn= new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Transactions (Name, Quantity, Amount) VALUES ('Potato', 3, 2.50)";

if ($conn->query($sql) === TRUE) {
    echo "Hello it works";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();


?>