<?php
        
        $message = '';
            
                
                $firstname = $_POST ['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password1 = $_POST['password1'];
                $confirmpassword = $_POST['confirmpassword'];
                $phoneno = $_POST['phoneno'];
                $gender = $_POST['gender'];
                $country = $_POST['country'];
                if(empty ( $firstname ) || empty( $lastname ) || empty( $email ) || empty( $password1 ) || 
                empty( $confirmpassword ) || empty( $phoneno ) || empty( $gender ) || empty( $country )) {
                $message .= '<p class="error">All fields are required</p>';
                }
                elseif ( strlen ( $firstname ) < 3 || strlen ( $firstname ) > 20) {
                $message .= '<p class="error">Firstname must be between 3 and 20 characters</p>';
                }
                elseif ( strlen ( $lastname ) < 3 || strlen( $lastname ) > 30) {
                $message .= '<p class="error">Lastname must be between 3 and 30 characters</p>';
                }
                elseif ( strlen ( $email ) < 3 || strlen( $email ) > 50) {
                $message .= '<p class="error">Email must be between 3 and 50 characters</p>';
                }
                elseif ( strlen ( $password1) < 6) {
                $message .= '<p class="error">Password must not be less than 6 characters</p>';
                }
                elseif ( strlen ( $confirmpassword ) < 6) {
                $message .= '<p class="error">Password must not be less than 6 characters</p>';
                }
                elseif ($password1 != $confirmpassword){
                $message .= '<p class="error">Password doesnt match, please enter the correct password</p>';
                }
                elseif (!is_numeric ( $phoneno )) {
                $message .= '<p class="error">Phone number should be numeric</p>';
                }
                elseif ( strlen ( $phoneno ) != 11) {
                $message .= '<p class="error">Phone number should be 11 digits long</p>';
                }
                else  {
                $message .= '<p class="success">All inputs are valid, thank you</p>';
                $conn= mysqli_connect('localhost', 'root','mysql', 'register');
                $sql = "INSERT INTO users(firstname , lastname, email, password1, 
                confirmpassword, phoneno, gender, country, created_at)
                VALUES('$firstname', 
                        '$lastname',
                        '$email', 
                        '$password1',
                        '$confirmpassword','$phoneno',
                        '$gender', '$country', NOW())";
                        $result = mysqli_query($conn , $sql);
                if($result){
                $message .= '<p class="success">Record Saved Successfully</p>';
               // header('location: success.html');
                }
                else{
                $message .= '<p class="error">Record not Saved</p>';
                
                }
                }
        
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <style>
                .error {
                color: red;
                }
                .success {
                color: green;
                }
        </style>
</head>
<body>
      <?php echo $message; ?>  
</body>
</html>

