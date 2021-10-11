<?php
include"../includes/connection.php";
include"../customer/include/head.php";
session_start();
?>
  <body>
     <!-- Starting of website  -->
     <?php
     $id = $_GET['id'];
     $name = $_SESSION['name'];
     $type = $_SESSION['User_Type'];
     include"../customer/include/header.php";
     include"../customer/include/nav.php";
     ?>



<?php
     if(isset($_POST['create'])){
          $fullName = $_POST['Fname'];
          $email = $_POST['email'];
          $phoneNumber = $_POST['PhoneNumber'];
          $userName = $_POST['Username'];
          $name = $fullname;

          $sql="UPDATE user SET FullName = '$fullname', E_mail = '$email', PhoneNumber = '$phoneNumber', Username = '$userName' WHERE id = '$id';";

          $result= mysqli_query($conn, $sql);

              if($result){
                  echo "<script>alert('Details updated sucessfully..')</script>";


             }else{
                  echo"<script>alert('Oops! Somethings wrong. Try again..')</script>";

      }

    }







     ?>
				 </nav>
		     </article>
         <?php

         include"../customer/include/topnav.php";
         ?>
			 </section>
	     </header>
       <div id="profilebox">
 		     <hr><hr>
         <div class="row">
          <div class="col-sm-3" >
            <?php

            include"../customer/include/aside.php";
            ?></aside>
            </div>
          <div class="col-sm-6" >
            <h6> <a href="index.html"> Home Page </a> </h6>
    			 <div id="maincontent">
           <?php
             $sql = "SELECT * FROM user WHERE id = '$id';";
             $result = mysqli_query($conn, $sql);
             $row = $result->fetch_assoc();
           ?>
           <form action = "editprofile.php" method = "POST">
         <div class="container">
           <div class="row">

             <div class="col-sm-5">
               <h1> Update Details</h1>

               <p> Change the following details.  </p>

           FullName: <input class="form-control" id="Fname" type="text" name="Fname" value="<?php echo $row['FullName'];?>" required><br>
           E-mail: <input class="form-control" id="email" type="email" name="email" value="<?php echo $row['E_mail'];?>" required><br>
           PhoneNumber: <input class="form-control" id="number" type = "number" name="PhoneNumber" value="<?php echo $row['PhoneNumber'];?>" required><br>
           Username:<input class="form-control" id="username" type="text" name="Username" value="<?php echo $row['Username'];?>" required><br>
            Photo: <input type="file" id="myFile" name="filename" Value="<?php echo $row['Photo'];?>">



           <input class="btn btn-primary" type="Submit" id="register" name="create" value="Update">
           </div>

    			 </div>
         </div>
       </form>
     </div>
   </div>

          <div class="col-sm-3" ><aside>
   			     <h4> Your Post </h4>
   				 <article>
   				     <div id="sidebox">
   					     <img src="../images/dosa.jpg">
   						 <h3> Dosa </h3>
   					 </div>
   				 </article>
   				 <article>
   				 <div id="sidebox">
   					     <img src="../images/dosa.jpg">
   						 <h3> Dosa </h3>
   					 </div>
   				 </article>






   			 </aside>
       </div>
        </div>


 			 </div>
     <?php

     include"../customer/include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
