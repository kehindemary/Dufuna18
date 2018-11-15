<?php
include('header.php');
?>
<section>
        <div class = "main-container">
            <h3>Home </h3>
            <br><br>
            <b>
            <?php
                session_start();
                if ( isset($_SESSION['email'])) {
                    
                echo "<br><br>";
                echo "Firstname:" . " " . $_SESSION['firstname']; 
                echo "<br><br>";
                echo "Lastname: " ." ". $_SESSION['lastname'];
                echo "<br><br>";
                echo "Email: " ." ". $_SESSION['email'];
                echo "<br><br>";
                echo "Gender: "." ". $_SESSION['gender'];
                echo "<br><br>";
                echo "Phone no:" ." ". $_SESSION['phoneno'];
                echo "<br><br>";
                echo "Country:" ." ". $_SESSION['country'];
                }
                
            ?>
            </p>
            <b>
            <a href = "welcome.php"> back to the previous page</a><br>
    </p>
            
        </div>
</section>
