<?php 
// global variables
echo $_SERVER['PHP_SELF']; //The filename that is currently executing script //Result = /yoobee_CMS_module/Lessons/SQLIntro3_$SERVER_sercurity/server_sercurity.php
echo "<br>";
echo $_SERVER['SERVER_NAME']; // The name/address of the server you are on. //Result = 192.168.33.10
echo "<br>";
echo $_SERVER['HTTP_HOST']; //// The name/address of the hosting you are on. //Result = 192.168.33.10
echo "<br>";
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT']; // hardware/browser details i.e chrome, mac //Result = Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.181 Safari/537.36
echo "<br>";
echo "<br>";
echo $_SERVER['SCRIPT_NAME']; // The filename, file path. // Result = /yoobee_CMS_module/Lessons/SQLIntro3_$SERVER_sercurity/server_sercurity.php 
?>

<!-- ********************************************* -->

<br>
<br>

<!-- PHP_SELF prints whatever value you inputed on the same page, meaning php self is like linking the action to the same working file -->
<!-- 'htmlspecialchars' is used to prevent getting hacked -->
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
	<label>Enter Number: </label>
	<input type="text" name="enteredNumber">
	<br><br>
	<button type="submit">Submit</button>
</form>

<?php 
	echo $_POST['enteredNumber'];
?>

<br>
<!-- ************************************************ -->
<br>

<!-- this is using database to get data -->
<!-- enter id that u have on ur database and when u submit the value/record will show. -->
<form method="POST" action="">
	<label>Enter ID: </label>
	<input type="text" name="enteredID">
	<br><br>
	<button type="submit">Submit</button>
</form>

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
	$sql="SELECT * FROM Items WHERE ID = $_POST[enteredID]" ;
	echo "<ul>";
	try {
        $rows=$conn->query($sql);
        foreach ($rows as $row) {
        echo "<li>" . $row["Name"] . " is for: $" . $row["Price"] . ".</li>";
	}
	} catch (PDOException $e) {
	    echo "Query failed: " . $e->getMessage();
	}
	echo "</ul>";
	$conn=null;
?>
