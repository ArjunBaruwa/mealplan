<?php
include"../includes/connection.php";
include"../customer/include/head.php";
session_start();
?>
  <body>
     <!-- Starting of website  -->
     <?php
     $name = $_SESSION['name'];
  $id = $_SESSION['id'];
$type = $_SESSION['User_Type'];
     include"../customer/include/header.php";
     include"../customer/include/nav.php";
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
            <h6> <a href="index.php"> Home Page </a> </h6>
    			 <div id="maincontent">
           <?php
             $sql = "SELECT * FROM user WHERE id = '$id';";
             $result = mysqli_query($conn, $sql);
             $row = $result->fetch_assoc();
           ?>
    				 <img  src="../images/user.png">
    				 <h5> <?php echo $name;?></h5>
    				 <p> <?php echo $row['E_mail'];?></p>
    				 <p><?php echo $row['PhoneNumber'];?></p>
    				 <hr>
    				 <p>Posts:30  ||  profile rating: 5 star </p></span>
    				 <p> Username: <?php echo $row['Username'];?></p>
    				 <p> Password:******</p>
    				 <p> </p>

    				 <button><a href="editprofile.php?id=<?php echo $row['id'];?>"> Edit details </a> </button>
    			 </div>
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
