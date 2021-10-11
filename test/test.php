<?php
//for test purpose only...................
include 'includes/connection.php';

?>
<?php
//echo "hello from process";

    if(isset($_POST['create'])){
         $fullName = $_POST['Fname'];
         $email = $_POST['email'];
         $phoneNumber = $_POST['PhoneNumber'];
         $userName = $_POST['Username'];
         $password = sha1($_POST['Password']);

         $sql="INSERT INTO user (FullName, E_mail, PhoneNumber, Username, Password) VALUES ('$fullName', '$email', '$phoneNumber', '$userName', '$password');";
         $result= mysqli_query($conn, $sql);

         if($result){
           echo "Successfully registered..";
        }else{
          echo "There is error, please try again";
        }


    }









if (invalidUsername($conn, $username, $password)!== false){
  header("location:.../login.php?error=invalidusername&password");
}

}

function invalidUsername($conn, $username){
  $sql = "SELECT * FROM user WHERE username=? ;";
  $stmt = mysqli_stmt_init($conn);
  if(mysqli_stmt_prepare($stmt, $sql)){
    header("location:.../login.php?error=invalidpassword");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss", $username,);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);
  if($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }else{
    $result= false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}
