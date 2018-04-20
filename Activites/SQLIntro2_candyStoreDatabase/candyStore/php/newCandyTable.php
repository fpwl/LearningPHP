<?php
    $serverName = "localhost";
    $username = "root";
    $password = "root";
    $dbName = "CandyStore";
    $conn = new mysqli($serverName, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $tableName = $_POST["tableName"];
    $column1 = $_POST["column1"];
    $column2 = $_POST["column2"];
    $column3 = $_POST["column3"];
    $column4 = $_POST["column4"];

    $sql1 = 
    "CREATE TABLE  $tableName (
        ID int NOT NULL AUTO_INCREMENT,
        $column1 varchar(255),
        $column2 varchar(255),
        $column3 float(5,2),
        $column4 int,
        PRIMARY KEY (ID)
    )";

    if ($conn->query($sql1) === TRUE) {
        echo "Added Successfully, $tableName to CandyStore DataBase";
    } else {
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    echo "<br><a herf='addItemToTable.phtml'>Go Back</a>";
?>