<?php
     // WITHDRAWAL AND DEPOSIT AMOUNT ACTIVITY

        $accountBalance = 5000;

        function depositing ($money) {
            global $accountBalance;
            $accountBalance = ($accountBalance + $money);
            echo "<br> Money Deposited $" . $money . " Your balance is now " . $accountBalance;
        }

        function withdrawal ($money) {
            global $accountBalance;
            $accountBalance = ($accountBalance - $money);
            echo "<br> Money Withdrawn $" . $money . " Your balance is now " . $accountBalance;
        }

        depositing(3000);
        withdrawal(200);
?>