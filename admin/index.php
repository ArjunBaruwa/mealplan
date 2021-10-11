<?php
include"../includes/connection.php";
include"../customer/include/head.php";
session_start();
?>
  <body>
     <!-- Starting of website  -->
     <?php
     $name = $_SESSION['name'];
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



 			 </div>
     <?php

     include"../customer/include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
