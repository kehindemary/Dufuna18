<?php
include('header.php');
?>
<section>
        <div class = "main-container">
            <h3>Home</h3><br><br>
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
    <a href = "welcomesession1.php">(Read more)</a>

    </p>
            </h3>
        </div>
</section>

