<?php
        //connect to db
        $conn= mysqli_connect('localhost', 'root','mysql', 'register');
            if(isset ($_POST['submit_btn'])){
                $firstname = mysqli_real_escape_string ($conn, $_POST ['firstname'] );
                $lastname =mysqli_real_escape_string ($conn,$_POST['lastname']);
                $email = mysqli_real_escape_string ($conn,$_POST['email']);
                $password1 = mysqli_real_escape_string ($conn,$_POST['password1']);
                $confirmpassword = mysqli_real_escape_string ($conn,$_POST['confirmpassword']);
                $phoneno = mysqli_real_escape_string ($conn,$_POST['phoneno']);
                $gender = mysqli_real_escape_string ($conn, $_POST['gender']);
                $country = mysqli_real_escape_string ($conn,$_POST['country']);
                        if($password1 == $confirmpassword){
                                $password1 = md5 ($password1);
                                $confirmpassword = md5 ($confirmpassword);
                        }
                                else{
                                        die  ("Error: Password doesnt match" ."<br>". $sql."<br>".mysqli_error($conn));
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
                                echo "Record Saved Successfully";
                                                                }
                                else{
                                echo ("Record not saved" . mysqli_error($conn)); 
                                 }
                                header('location: success.html');
                                        
                                }


?>
                              

            

<!DOCTYPE html>
<html>
    <head>
            <title>Signup</title>
            <link rel="stylesheet" type="text/css" href="main.css">
    </head>
            <body>
                <form method="POST" >
                    <div class="container">
                        <h1>Create Account</h1>
                        <p><label for="firstname">Firstname:</label></p>
                                <input type="text" name="firstname"  class="text" placeholder="Enter Firstname" id="firstname">
                        <p><label for="lastname">Lastname:</label></p> 
                                <input type="text" name="lastname" class="text" placeholder="Enter Lastname" id="lastname"> 
                        <p><label for="email">email:</label></p> 
                                <input type="text" name="email" class="text" placeholder="Enter email" id="email">
                        <p><label for="password">Password:</label></p>
                                <input type="password" name="password1" class="text"  placeholder="Enter password" id="password1">     
                        <p><label for="confirmpassword">Confirm Password:</label></p>  
                                <input type="password" class="text" name="confirmpassword" placeholder="Confirm password" id="confirmpassword">     
                        <p><label for="phoneno">Phone Number:</label>
                        </p>  
                                <input type="text" name="phoneno" class="text" placeholder="Enter phone no" id="phoneno">                                 
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