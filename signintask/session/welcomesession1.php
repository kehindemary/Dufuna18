<?php
include('header.php');
?>
<section>
        <div class = "main-container">
            <h3>Home </h3>
            <br><br>
            <b>
            <?php
    
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
            </b>
            <a href = "welcomesession.php"> back to the previous page</a><br>
    
            
        </div>
</section>
