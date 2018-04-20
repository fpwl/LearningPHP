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
    // Accessing two tables from database
    $sql="SELECT Items.ID, Items.Name, Items.Price, Stock.Quantity, Stock.Date FROM Items, Stock WHERE Items.ID = Stock.ID";

	echo "<ul>";
	try {
        $rows=$conn->query($sql);
        foreach ($rows as $row) {
        echo "<li>" . $row["Name"] . " will cost $" . $row["Price"] . " and there is " . $row["Quantity"] . " items in stock, and the date is " . $row["Date"] . ".</li>";
	}
	} catch (PDOException $e) {
	    echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;
?>