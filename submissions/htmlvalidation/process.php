<?php
        //connect to db
        $conn= mysqli_connect('localhost', 'root','mysql', 'register');
        $message = '';
            if(isset ($_POST['submit_btn'])){
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
                if($password1 == $confirmpassword){
                        $password1 = md5 ($password1);
                        $confirmpassword = md5 ($confirmpassword);
                }
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
                }
                else{
                $message .= '<p class="error">Record not Saved</p>';
                header('location: success.html');
                }
                }
        } 
               
                
                
                
               
        
                        
                

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup</title>
        <script type="text/javascript" src = "validation.js"></script>
        <link rel="stylesheet" type="text/css" href="main.css">
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
            <form method="POST" name="regForm" onsubmit = "return validateForm()">
                    <div class="container">
                        <h1>Create Account</h1>
                        <p>
                        <label for="firstname">Firstname:</label>
                        </p>
                        <input type="text" name="firstname"  class="text" placeholder="Enter Firstname" id="firstname">
                        <p>
                        <label for="lastname">Lastname:</label>
                        </p> 
                        <input type="text" name="lastname" class="text" placeholder="Enter Lastname" id="lastname"> 
                        <p>
                        <label for="email">email:</label>
                        </p> 
                        <input type="email" name="email" class="text" placeholder="Enter email" id="email">
                        <p>
                        <label for="password">Password:</label>
                        </p>
                        <input type="password" name="password1" class="text"  placeholder="Enter password" id="password1">     
                        <p>
                        <label for="confirmpassword">Confirm Password:</label>
                        </p>  
                        <input type="password" class="text" name="confirmpassword" placeholder="Confirm password" id="confirmpassword">     
                        <p>
                        <label for="phoneno">Phone Number:</label>
                        </p>  
                        <input type="number" name="phoneno" class="text" placeholder="Enter phone no" id="phoneno">                                 
                        <p>     
                        <label for="gender">Gender:</label>
                        <input type="radio" name="gender" value="male" id="male">  
                        <label for="male">Male:</label>
                        <input type="radio" name="gender" value="female" id="female">
                        <label for="female">Female:</label>
                        </p>
                
                        <p>
                                <label for="country">Country:</label>
                                <select name="country" id="country">
                                        <option value = "0" selected>Choose one</option>
                                        <option value="nigeria" selected>Nigeria</option>
                                        <option value="usa">USA</option>
                                        <option value="ghana">Ghana</option>
                                        <option value="korea">Korea</option>
                                </select>
                        </p>
                        <br>
                        <input type="submit"  class="button" name="submit_btn" value="SignUp" id="submit">
                    </div>
                </form>
            </body>
</html>