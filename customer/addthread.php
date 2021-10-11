
<?php
include"../includes/connection.php";
include"include/head.php";
session_start();
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


     $sql="INSERT INTO thread (ThreadName, CusineType, Description, Ingredient, Step, id) VALUES ('$threadName', '$cusine', '$description', '$ingredient', '$step', '$id');";
     $result= mysqli_query($conn, $sql);


     if($result){
       echo "<script>alert('Thread added.Successfully!!')</script>";


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

            <form action = "addthread.php" method = "POST">

              <h1>  <i class = "glyphicon glyphicon-add"> Post a Thread </i></h1>


              <div class="col-sm-11">


            Thread Name: <input class="form-control" id="Fname" type="text" name="Threadname" required><br>
            Cusine Type: <input class="form-control" id="cusine" type="text" name="Cusine" required><br>
            Description : <br />
                  <textarea class="form-control" name="Description" >

                  </textarea> <br/>
            <!--Description: <input class="form-control" id="number" type = "number" name="PhoneNumber" required><br> -->
            Ingredient:<input class="form-control" id="username" type="description" name="Ingredient" required><br>
            Steps/Process:<input class="form-control" id="password" type="text" name="step" required><br>
            Photo:<input type="file" id="myFile" name="filename" >
            <br/>


            <input class="btn btn-primary" type="Submit" id="register" name="create" value="Post">

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
