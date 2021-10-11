<?php
include"../includes/connection.php";
include"include/head.php";
session_start();
?>
  <body>
     <!-- Starting of website  -->
     <?php
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
		 <div id="contentbox">
		     <hr><hr>
             <h6> <a href="index.php"> Home </a> > <a href="cusine.php"> Cusine </a> > </h6>

		<div id="recent">
			     <h2>Recent Post</h2>
				 <section>
				     <div id="box">
					     <img src="../images/dosa.jpg">
						 <h3> Dosa </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="../images/rice_appe.jpg">
						 <h3> Rice Appe </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="../images/hunter's_Chicken.jpg">
						 <h3> Hunter's Chicken </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="../images/hunter's_Chicken.jpg">
						 <h3> Hunter's Chicken </h3>
					 </div>
				 </section>


		 </div>
     <div id="recent">
         <h2>Recent Post</h2>
       <section>
           <div id="box">
             <img src="../images/dosa.jpg">
           <h3> Dosa </h3>
         </div>
       </section>
       <section>
           <div id="box">
             <img src="../images/rice_appe.jpg">
           <h3> Rice Appe </h3>
         </div>
       </section>
       <section>
           <div id="box">
             <img src="../images/hunter's_Chicken.jpg">
           <h3> Hunter's Chicken </h3>
         </div>
       </section>
       <section>
           <div id="box">
             <img src="../images/hunter's_Chicken.jpg">
           <h3> Hunter's Chicken </h3>
         </div>
       </section>
     </div>
     <?php

     //include"include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
