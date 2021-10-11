<?php
include 'includes/connection.php';
include 'includes/head.php';
session_start();

?>

<body>

    <?php

$id= $_SESSION['id'];

    if(isset($_POST['create'])){

         $password = sha1($_POST['Password']);
         $cpassword = sha1($_POST['CPassword']);
         if($password == $cpassword){

                $sql="UPDATE user SET Password = '$password' WHERE id = '$id';";

                $result= mysqli_query($conn, $sql);

                if($result){
                        echo "<script>alert('Password changed sucessfully..')</script>";

                 }else{
                        echo"<script>alert('Confirm Password does not match with password. Try again..')</script>";

            }

    }
  }




    ?>
    <form action = "resetpassword.php" method = "POST">
  <div class="container">
    <div class="row">
      <h1> Change Password </h1>
      <p> Type your new password.  </p>
      <div class="col-sm-11">



    Password:<input class="form-control" id="password" type="password" name="Password" required><br>
    Confirm Password:<input class="form-control" id="password" type="password" name="CPassword" required><br>


    <input class="btn btn-primary" type="Submit" id="register" name="create" value="Save">
      <p> Don't have a account. <a herf href="register.php">Register</a></p>
    </div>


  </div>
   </div>
  </form>


</body>
</html>
