
<?php

include_once 'header.php';
if (isset($_SESSION["username"])) { // If there is a valid username in session, display game
   
    include 'wallet2.php';
    echo "<p> Congratulations! ,You are eligible to invest with us!</p>";
        echo "</section>";
} else {
    echo "<section class='failed-access'>"; // If no username detected, display prompt to sign up or log in
    echo "<h2>Sorry! You're not logged in!</h2>";
    echo "<span><p>To access this page, you need to be logged in to the website. This is because the website detects whether or not you are logged in via PHP session variables!</p><br/>";
    echo "<p>Click <a href='login.php'>here</a> to log in or <a href='signup.php'>here</a> to create an account.</p></span>";
    echo "</section>";
}

?>  
</div>
</body>
</html>

