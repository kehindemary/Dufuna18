<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer Detail</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">    
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/main1.css" />
    <script src="jquery/jquery.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="js/bootstrap.js"></script> 
</head>
<body>
      
      <table class="table table-bordered">
      <thead class="thead-dark">
      <tr>
      <th scope="col">Orderid</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Phone no</th>
      <th scope="col">Address</th>
      <th scope="col">Nearest Bustop</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Menu</th>
      <th scope="col">Quantity</th>
      <th scope="col">Order Date</th>
      </tr>
      </thead>
      <tbody>
      <?php
      $server = "localhost";
      $username = "admin";
      $password = "dufuna18";
      $database = "menu_order";
      //connect to database
      $conn = mysqli_connect($server, $username, $password, $database);
    //end of connection
      $sql = "SELECT * FROM orders";
      $run = mysqli_query($conn, $sql);
      while($_SESSION = mysqli_fetch_assoc($run)){
        ?>
      <tr>
      <th scope="row"><?php echo $_SESSION['order_id']?></th>
      <td><?php echo $_SESSION['firstname']?></td>
      <td><?php echo $_SESSION['lastname']?></td>
      <td><?php echo $_SESSION['email']?></td>
      <td><?php echo $_SESSION['gender']?></td>
      <td><?php echo $_SESSION['phoneno']?></td>
      <td><?php echo $_SESSION['address1']?></td>
      <td><?php echo $_SESSION['address2']?></td>
      <td><?php echo $_SESSION['city']?></td>
      <td><?php echo $_SESSION['state1']?></td>
      <td><?php echo $_SESSION['menu']?></td>
      <td><?php echo $_SESSION['quantity']?></td>
      <td><?php echo $_SESSION['order_date']?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<button class="btn"><a href ="customerdetail1.php" class = "nav-link">Back</a></button>
</div>
</body>
</html>
           
            
        
                    