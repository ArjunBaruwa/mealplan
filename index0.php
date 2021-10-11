<?php
include"./includes/connection.php";

?>
<!DOCTYPE HTML>
<html>
<head>
   <meta charset="UTF-8">
   <title> Meal Plan</title>
   <link href="bootstrap/css/bootstrap/bootstrap.css" rel="stylesheet">
   <link href="css/style.css" rel="stylesheet">
</head>
  <body>
     <!-- Starting of website  -->
     <?php

     include"include/header.php";
     //include"./customer/include/nav.php";
     ?>
				 </nav>
		     </article>
         <?php

         //include"../customer/include/topnav.php";
         ?>
			 </section>
	     </header>
		 <div id="contentbox">
		     <hr><hr>
             <h6> <a href="index.php"> Home Page </a> > </h6>
			 <article>
			     <img class="mySlides" src="./images/dosa.jpg">
				 <img class="mySlides" src="./images/rice_appe.jpg">
				 <img class="mySlides" src="./images/hunter's_Chicken.jpg">
				 <img class="mySlides" src="./images/Logo.png">
			 </article>

			 <script>
			     var myIndex=0;
				 carousel();
				 function carousel() {
                     var i;
                     var x = document.getElementsByClassName("mySlides");
                     for (i = 0; i < x.length; i++) {
                         x[i].style.display = "none";
                     }
					 myIndex++;
					 if (myIndex > x.length) {myIndex = 1}
					     x[myIndex-1].style.display = "block";
					 setTimeout(carousel, 3000);
				 }
             </script>
             <h2>About us </h2>
			 <p> Preparing a meal is not always an easy task to many people especially for those who are health conscious. Having the same food over and over again is boring and annoying at the same time. Understanding this matter, the client wants to create a website where people can share their meal ideas with others so that everyone is able to find new recipes to diversify their meals.</p>
			 <div id="recent">
			     <h2>Recent Post</h2>
				 <section>
				     <div id="box">
					     <img src="./images/dosa.jpg">
						 <h3> Dosa </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="./images/rice_appe.jpg">
						 <h3> Rice Appe </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="./images/hunter's_Chicken.jpg">
						 <h3> Hunter's Chicken </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="./images/hunter's_Chicken.jpg">
						 <h3> Hunter's Chicken </h3>
					 </div>
				 </section>

			 </div>
			 <h2> How to post your meal </h2>
			 <p>Preparing a meal is not always an easy task to many people especially for those who are health conscious. Having the same food over and over again is boring and annoying at the same time. Understanding this matter, the client wants to create a website where people can share their meal ideas with others so that everyone is able to find new recipes to diversify their meals.</p>

		 </div>
     <?php

     include"include/footer.php";
     ?>

		 </footer>



	 </body>
</html>
