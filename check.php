<?php
include 'includes/connection.php';
include 'includes/head.php';
session_start();
?>

<body>
  <?php
     if(isset($_POST['create'])){
       $username = $_POST['Username'];
       $mail = $_POST['Email'];

       $sql = "SELECT * FROM user WHERE Username LIKE '$username' AND E_mail LIKE '$mail' LIMIT 1 ;";
       $result = mysqli_query($conn, $sql);
       $row = $result->fetch_assoc();
       if (mysqli_num_rows($result) == 1){
           $_SESSION['id'] = $row['id'];
           header("location:resetpassword.php");

        }else{
         echo "<script>alert('You have enter incorrect username or E_mail.')</script>";
       }
    }
    ?>

<form action = "check.php" method = "post">
  <div class="container">
    <div class="row">
      <div class="col-sm-11">
    <h2> Provide Details </h2>
    <p> Provide the below information.  </p>
    Username:<input class="form-control" type="text" name="Username" placeholder="type your username" required><br>
    Email:<input class="form-control" type="email" name="Email" placeholder="type your Email" required><br>


    <input class = "btn btn-primary" type="submit" name="create" value="Next">


    <p> Don't have a account. <a herf href="register.php">Register</a></p>
  </div>
</div>
</div>

  </form>

</div>
</body>
</html>
