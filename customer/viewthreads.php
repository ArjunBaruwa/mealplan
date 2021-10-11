
<?php
include"../includes/connection.php";
include"include/head.php";
session_start();
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
          <div class="col-sm-3" >
            <?php

            include"include/aside.php";
            $sql = "SELECT * FROM thread WHERE UserID = '$id';";
            $result = mysqli_query($conn, $sql);

            ?>
          </aside>
            </div>
          <div class="col-sm-8" >
            <h6> <a href="index.php"> Home Page </a> </h6>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


              <?php
                   if (mysqli_num_rows($result)>0){
                     ?>
                     <table id="myTable">
                       <tr class="header">
                         <th style="width:25%;">Photo</th>
                         <th style="width:10%;">Name</th>
                         <th style="width:5%;">Cusine</th>
                         <th style="width:20%;">Description</th>
                         <th style="width:30%;">Recipe</th>
                         <th style="width:10%;">Action</th>

                       </tr>

                     <?php
                     while($row = mysqli_fetch_array($result)){
              ?>

              <tr>
                <td>
                  <img src = "../images/<?php echo $row['Thread_Photo'];?>" height="150px" width = "150px">
                </td>

                <td><?php echo $row['ThreadName'];?></td>
                <td><?php echo $row['CusineType'];?></td>
                <td><?php echo $row['Description'];?></td>
                <td><?php echo $row['Ingredient'];?></td>

                <td>
                  <button> <a herf="editthread.php?id=<?php echo $row['ThreadID'];?>"> Edit </a></button>
                  <button> <a herf="delete.php?id=<?php echo $row['ThreadID'];?>"> Delete </a></button>
                </td>
              </tr>
            </table>
            <?php
          }
        }else{
          ?>
          <p> You have not posted any thread till now.</p>

            <?php
          }?>

            <script>
            function myFunction() {
              var input, filter, table, tr, td, i, txtValue;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }
              }
            }
            </script>
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
