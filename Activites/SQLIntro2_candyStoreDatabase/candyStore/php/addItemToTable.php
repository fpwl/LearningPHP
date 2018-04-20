 <?php
    $serverName = "localhost";
    $username = "root";
    $password = "root";
    $dbName = "CandyStore";
    $conn = new mysqli($serverName, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql1 = "INSERT INTO CandyItems (Name, Type, Price) VALUES ('$_POST[candyName]', '$_POST[candyType]', '$_POST[candyPrice]')";

    if ($conn->query($sql1) === TRUE) {
        echo "Added Item Successfully, " .  $_POST['candyName'] .  " to CandyItems Table";
    } else {
        echo "Error" . $sql2 . "<br>" . $conn->error;
    }
    $conn->close();

    echo "<br><a herf='addItemToTable.phtml'>Go Back</a>";
?>