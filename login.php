<?php
include 'includes/connection.php';
include 'includes/head.php';
session_start();

?>

<body>
  <?php
     if(isset($_POST['create'])){
       $username = $_POST['Username'];
       $password = sha1($_POST['Password']);

       $sql = "SELECT * FROM user WHERE Username LIKE '$username' AND Password LIKE '$password' LIMIT 1 ;";
       $result = mysqli_query($conn, $sql);
       $row = $result->fetch_assoc();
       $_SESSION['Username'] = $row['Username'];
       $_SESSION['id'] = $row['id'];
       $_SESSION['User_Type'] = $row['User_Type'];
       if (mysqli_num_rows($result) == 1){
         $_SESSION['name'] = $row['FullName'];

         if ($row['User_Type'] == 'Admin'){
          header("location:admin/index.php");
         }else{
           header("location:./customer/index.php");
         }
        }else{
         echo "<script>alert ('You have enter incorrect username and password.')</script>";
       }
    }
    ?>

<form action = "login.php" method = "post">
  <div class="container">
    <div class="row">
      <div class="col-sm-11">
    <h2> LOGIN </h2>

    Username:  <input class="form-control" type="text" name="Username" required><br>
    Password:  </i><input class="form-control" type="password" name="Password" required><br>

    <input class = "btn btn-primary" type="submit" name="create" value="Login">

    <p> <a herf href="check.php"> Forgot Password?</a></p>
    <p> Don't have a account. <a herf href="register.php">Register</a></p>
  </div>
</div>
</div>

  </form>

</div>
</body>
</html>
