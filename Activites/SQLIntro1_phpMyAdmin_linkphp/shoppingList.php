<?php
$dsn="mysql:dbname=ShoppingList";
$username="root";
$password="root";

try {
	$conn= new PDO($dsn,$username,$password);
	$conn->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
	    echo "connection failed:" . $e->getMessage();
	}
	$sql="SELECT * FROM Items";
	echo "<ul>";
	try {
        $rows=$conn->query($sql);
        foreach ($rows as $row) {
        echo "<li>" . $row["Name"] . " will cost $" . $row["Price"] . ".</li>";
	}
	} catch (PDOException $e) {
	    echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;
?>