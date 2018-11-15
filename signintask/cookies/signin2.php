<?php
if(isset($_POST['submit'])){
    include('connection.php');
    $email = mysqli_escape_string($conn, $_POST['email']);
    $password1 = mysqli_escape_string($conn, $_POST['password1']);
    if(empty($email) || empty($password1)){
    die ("All fields are Required");
    }
    else{
        $sql = "SELECT * FROM users WHERE email = '$email' and password1 ='$password1'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    }
        if($resultCheck > 0 ){
            $row = mysqli_fetch_assoc($result);
            echo  $row['firstname'];
            echo  $row['lastname'];
            echo  $row['gender'];
            echo  $row['country'];
            echo  $row['phoneno'];

            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $gender = $row['gender'];
            $country = $row['country'];
            $phoneno = $row['phoneno'];

            //cookies
            setcookie("firstname",$firstname, time()+3600, "/", "", 0);
            setcookie("lastname",$lastname, time()+3600, "/", "", 0);
            setcookie("email", $email, time()+3600, "/", "", 0);
            setcookie("gender", $gender, time()+3600, "/", "", 0);
            setcookie("country", $country, time()+3600, "/", "", 0);
            setcookie("phoneno", $firstname, time()+3600, "/", "", 0);

            header("Location:welcomecookies1.php");
    }
        else{
            die("Email or doesn't exist, please enter the correct Email");
            header("Location:home.php");
 }
}
?>
