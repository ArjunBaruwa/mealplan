
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
            $sql = "SELECT * FROM friend WHERE Type LIKE 'Accepted'";//UserID = '$id';";
            $result = mysqli_query($conn, $sql);
            $row = $result->fetch_assoc();
            $user1 = $row['User1']
            ?>
          </aside>
            </div>
          <div class="col-sm-8" >
            <h6> <a href="index.php"> Home Page </a> </h6>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

            <table id="myTable">
              <tr class="header">
                <th style="width:30%;">Photo</th>
                <th style="width:20%;">Name</th>
                <th style="width:10%;">Total Friend</th>
                <th style="width:10%;">Posts</th>
                <th style="width:10%;">Profile Rating</th>
                <th style="width:20%;">Action</th>

              </tr>
              <?php
              //   $sql = "SELECT * FROM friend WHERE User1 = '$row['id']' OR User2 = '$row['id']';";
                // $result = mysqli_query($conn, $sql);
                 //$row = $result->fetch_assoc();
              ?>
              <tr>
                <td></td>
                <td>Germany</td>
                <td>Alfreds Futterkiste</td>
                <td>Germany</td>
                <td>Alfreds Futterkiste</td>
                <td><button>Unfriend</button></td>
              </tr>
              <tr>
                <td>Berglunds snabbkop</td>
                <td>Sweden</td>
              </tr>
              <tr>
                <td>Island Trading</td>
                <td>UK</td>
              </tr>
              <tr>
                <td>Koniglich Essen</td>
                <td>Germany</td>
              </tr>
              <tr>
                <td>Laughing Bacchus Winecellars</td>
                <td>Canada</td>
              </tr>
              <tr>
                <td>Magazzini Alimentari Riuniti</td>
                <td>Italy</td>
              </tr>
              <tr>
                <td>North/South</td>
                <td>UK</td>
              </tr>
              <tr>
                <td>Paris specialites</td>
                <td>France</td>
              </tr>
            </table>

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
