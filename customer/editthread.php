
<?php
include"../includes/connection.php";
include"include/head.php";
session_start();

$id = $_GET['id'];
$sql = "SELECT * FROM thread where ThreadID = '$id';";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
?>

<?php



if(isset($_POST['create'])){
     $threadName = $_POST['Threadname'];
     $cusine = $_POST['Cusine'];
     $description = $_POST['Description'];
     $ingredient = $_POST['Ingredient'];
     $step = $_POST['step'];
     $id = $_SESSION['id'];
     //$photo = $_POST['filename'];


     $sql="UPDATE thread SET ThreadName = '$threadName' AND CusineType = '$cusine' AND Description = '$description' AND Ingredient = '$ingredient' AND Step = '$step' WHERE id = $id';";
     $result= mysqli_query($conn, $sql);


     if($result){
       echo "<script>alert('Thread UPDATED. Successfully!!')</script>";


    }else{
      echo"<script>alert('There is error, please try again')</script>";
  }

}
?>


  <body>
     <!-- Starting of website  -->
     <?php
     $name = $_SESSION['name'];
     $id = $_SESSION['id'];
$type = $_SESSION['User_Type'];
     include"include/header.php";
     include"include/nav.php";
     ?>
				 </nav>
		     </article>
         <?php

         include"include/topnav.php";
         ?>
			 </section>
	     </header>
       <div id="profilebox">
 		     <hr><hr>
         <div class="row">
          <div class="col-sm-2" >
            <?php

            include"include/aside.php";

            ?>
          </aside>
            </div>
          <div class="col-sm-9" >
            <h6> <a href="index.php"> Home Page </a> </h6>

            <form action = "editthread.php" method = "POST">

              <h1>  <i class = "glyphicon glyphicon-edit"> Edit a Thread </i></h1>


              <div class="col-sm-11">


            Thread Name: <input class="form-control" id="Fname" type="text" name="Threadname" value="<?php echo $row['ThreadName'];?>" required><br>
            Cusine Type: <input class="form-control" id="cusine" type="text" name="Cusine" value="<?php echo $row['CusineType'];?>"required><br>
            Description : <br />
                  <textarea class="form-control" name="Description" value="<?php echo $row['Description'];?>" >

                  </textarea> <br/>
            <!--Description: <input class="form-control" id="number" type = "number" name="PhoneNumber" required><br> -->
            Ingredient:<input class="form-control" id="username" type="description" name="Ingredient" value="<?php echo $row['Ingredient'];?>" required><br>
            Steps/Process:<input class="form-control" id="password" type="text" name="step" value="<?php echo $row['Step'];?>" required><br>
            Photo:<input type="file" id="myFile" name="filename"  value="<?php echo $row['Thread_Photo'];?>" >
            <br/>


            <input class="btn btn-primary" type="Submit" id="register" name="create" value="UPDATE">

            </div>

         </div>

        </div>


 			 </div>
     <?php

     include"include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
