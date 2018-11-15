<?php
include('header.php');
?>
<section>
        <div class = "main-container">
            <h3>Home </h3>
            <br><br>
            <b>
            <?php

                if ( isset($_COOKIE['email'])) {
                echo "<br><br>";
                echo "Firstname:" . " " . $_COOKIE['firstname']; 
                echo "<br><br>";
                echo "Lastname: " ." ". $_COOKIE['lastname'];
                echo "<br><br>";
                echo "Email: " ." ". $_COOKIE['email'];
                echo "<br><br>";
                echo "Gender: "." ". $_COOKIE['gender'];
                echo "<br><br>";
                echo "Phone no:" ." ". $_COOKIE['phoneno'];
                echo "<br><br>";
                echo "Country:" ." ". $_COOKIE['country'];
                }
                
            ?>
            </p>
            <b>
            <a href = "welcome.php"> back to the previous page</a><br>
    </p>
            
        </div>
</section>
