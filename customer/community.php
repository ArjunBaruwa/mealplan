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
                <h6> <a href="index.html"> Home Page </a> </h6>
   			 <article>
   			     <div id="community">
   				     <section>
   					     <h6> <!--href="user.php?id=<?php //echo $row['user_ID']; ?>"--> by user </h6>
   						 <p> this is good website. this is good website.this is good website. this is good website. this is good website. this is good website. this is good website. </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> <!--href="user.php?id=<?php //echo $row['user_ID']; ?>"--> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   					 <section>
   					     <h6> by user </h6>
   						 <p> this is good website </p>
   					 </section>
   			     </div>
   			 <form>
   			     <input type="text" placeholder=". . . . . . . . . . . . . . . . . . . . . "> <button class="btn btn-primary">Send</button>
   			 </form>
   			 </article>
   		 </div>
     <?php

     include"include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
