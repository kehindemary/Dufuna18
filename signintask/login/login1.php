<?php
session_start(); 
?>
<html>


<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="mainstyle.css" />
    <script src="main.js"></script>
</head>
<body>
    <header>
        <nav>
            <div class="main-wrapper">
                <ul>
                    <li>
                        <a href="login1.php">Home</a>
                    </li>
                </ul>
            </div>
            <div class="nav-login">
            <a href="../login/signup/index.html">Signup</a>
                <form action="signin.php" method="POST" name="loginForm" id="loginForm">
                <input type="email" name="email" id="email" placeholder="Email" class="text-wrapper">
                <input type="password" name="password1" id="password1" placeholder="Password" class="text-wrapper">
                <input type="submit" name="submit" id="submit" value ="Login" class="button">
                </form>

            </div>
        </nav>
    </header>
    <section>
        <div class="main-container">
            <h3>Welcome</h3>
        </div>
    </section>
</body>
</html>