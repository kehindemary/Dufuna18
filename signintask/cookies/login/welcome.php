<?php
include('header.php');
?>
<section>
        <div class = "main-container">
            <h3>Home<br><br>
            <?php
                session_start();
                if ( isset($_SESSION['email'])) {
                    echo "Login Successful ". "<br>";
                    echo "Welcome" . " ".  $_SESSION['firstname'] ." ". $_SESSION['lastname'];
                    
                echo "<br>";
                echo "Your Email Address is " . " " . $_SESSION['email'];
                }
            ?>
            <p>
    <a href = "welcome1.php">(Read more)</a>
    <a href = "welcome2.php">cookies here</a>

    </p>
            </h3>
        </div>
</section>

