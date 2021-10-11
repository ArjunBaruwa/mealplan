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
       <div id="profilebox">
 		     <hr><hr>
         <div class="row">
          <div class="col-sm-3" >
            <?php

            include"include/aside.php";
            ?>
          </aside>
            </div>
          <div class="col-sm-6" >
            <div class="row">
      <div class="col-md-4" style="background-color:yellow;">

      </div>
      <div class="col-md-4" style="background-color:pink;">
        </div>
      <div class="col-md-4" style="background-color:yellow;">

      </div>
      <div class="col-md-4" style="background-color:pink;">

      </div>
      <div class="col-md-4" style="background-color:yellow;">

      </div>
      <div class="col-md-4" style="background-color:pink;">

      </div>
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
     <?php

     include"include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
