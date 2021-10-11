<?php
include 'includes/connection.php';
include 'includes/head.php';

?>

<body>

    <?php



    if(isset($_POST['create'])){
         $fullName = $_POST['Fname'];
         $email = $_POST['email'];
         $phoneNumber = $_POST['PhoneNumber'];
         $userName = $_POST['Username'];
         $password = sha1($_POST['Password']);

        $sql ="SELECT * FROM user WHERE E_mail = '$email'";
        $result = mysqli_query($conn, $sql);
        if(!$result->num_rows > 0){
         $sql="INSERT INTO user (FullName, E_mail, PhoneNumber, Username, Password) VALUES ('$fullName', '$email', '$phoneNumber', '$userName', '$password');";
         $result= mysqli_query($conn, $sql);

         if($result){
           echo "<script>alert('Successfully registered..')</script>";
           header ("location:login.php");

        }else{
          echo"<script>alert('There is error, please try again')</script>";
      }
    }else{
        echo "<script>alert('Woops! Email already exits. Try different email..')</script>";
      }
    }




    ?>
    <form action = "register.php" method = "POST">
  <div class="container">
    <div class="row">
      <h1> Registration </h1>

      <p> Provide the below information for registration.  </p>
      <div class="col-sm-11">


    FullName: <input class="form-control" id="Fname" type="text" name="Fname" required><br>
    E-mail: <input class="form-control" id="email" type="email" name="email" required><br>
    PhoneNumber: <input class="form-control" id="number" type = "number" name="PhoneNumber" required><br>
    Username:<input class="form-control" id="username" type="text" name="Username" required><br>
    Password:<input class="form-control" id="password" type="password" name="Password" required><br>


    <input class="btn btn-primary" type="Submit" id="register" name="create" value="Register">
    </div>
    <p> Already have a account. <a herf href="login.php">Login</a></p>

  </div>
   </div>
  </form>
<!--
$s="SELECT * FROM user;";
$res= mysqli_query($conn, $s);
$row = $res->fetch_assoc();

if (mysqli_num_rows($res) == 1){
  if ($userName == $row['Username'] ){
   echo "this user name already exit";
 }elseif ($email == $row['E_mail']) {
   echo "this email is already taken";
 }
}
?>-->

</body>
</html>
