 <?php
    class UserNameAndPassword {
        private $username;
        private $password;

        function __construct() {
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];

            if (strlen($this->username) <= 0 || strlen($this->password) <= 0) {
                echo "<br>One or both inputs were not filled!";
                echo "<br><a href='login.phtml'>Go Back</a>";
            } else{
                echo "<br>You entered " . $this->username . " as your username. <br>You entered " . $this->password . " as your password. <br>";
                echo "<img src='img/reward.gif' alt='reward'/>";
                echo "<br><a href='login.phtml'>Go Back</a>";

            }
        }

        Public function __destruct() {
            echo "destruction has happened :D";
        }
    }

    $login = new UserNameAndPassword();
?>


