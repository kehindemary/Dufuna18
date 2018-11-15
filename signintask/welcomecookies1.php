<?php
include('header.php');
?>
<section>
        <div class = "main-container">
            <h3>Home</h3><br><br>
            <?php
                if ( isset($_COOKIE['email'])) {
                    echo "Login Successful ". "<br>";
                    echo "Welcome" . " ".  $_COOKIE['firstname'] ." ". $_COOKIE['lastname'];
                    
                echo "<br>";
                echo "Your Email Address is " . " " . $_COOKIE['email'];
                }
            ?>
            <p>
    <a href = "welcomecookies.php">(Read more)</a>

    </p>
            </h3>
        </div>
</section>

