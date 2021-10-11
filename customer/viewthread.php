<?php
include"../includes/connection.php";
include"include/head.php";
session_start();
?>
  <body>
     <!-- Starting of website  -->
     <?php
     $id = $_GET['id'];
     $name = $_SESSION['name'];
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

          <div class="col-sm-8" >
            <h6> <a href="index.php"> Home Page </a> </h6>
    			 <div id="maincontent">
           <?php
             $sql = "SELECT * FROM thread WHERE threadid = '$id';";
             $result = mysqli_query($conn, $sql);
             $row = $result->fetch_assoc();
           ?>
    				 <img  src="../images/user.png">
    				 <h5> <?php echo $row['Name'];?></h5>
    				 <p> <?php echo $row['E_mail'];?></p>
    				 <p><?php echo $row['PhoneNumber'];?></p>
             <h5> <?php echo $row['Name'];?></h5>
    				 <p> <?php echo $row['E_mail'];?></p>
    				 <p><?php echo $row['PhoneNumber'];?></p>
             <h5> <?php echo $row['Name'];?></h5>
    				 <p> <?php echo $row['E_mail'];?></p>
    				 <p><?php echo $row['PhoneNumber'];?></p>

    				 <p> </p>


    			 </div>
         </div>
          <div class="col-sm-3" ><aside>
   			     <h4> Similar Post </h4>
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

     include"include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
