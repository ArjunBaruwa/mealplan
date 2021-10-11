
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
            $sql = "SELECT * FROM user WHERE NOT User_Type = 'Admin'";
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
                <th style="width:30%;">Photo</th>
                <th style="width:15%;">Name</th>
                <th style="width:8%;">Total Posts</th>
                <th style="width:10%;">Username</th>
                <th style="width:10%;">Email</th>
                <th style="width:7%;">Number</th>
                <th style="width:20%;">Action</th>

              </tr>
              <?php
               while($row = mysqli_fetch_array($result)){
              //   $sql = "SELECT COUNT(ThreadID) as post FROM thread GROUP BY id;";
                // $result = mysqli_query($conn, $sql);
                 //$row = $result->fetch_assoc();
              ?>
              <tr>
                <td><?php echo $row['User_Photo']; ?></td>
                <td><?php echo $row['FullName']; ?></td>
                <td><?php //echo $row['PhoneNumber']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['E_mail']; ?></td>
                <td><?php echo $row['PhoneNumber']; ?></td>
                <td>

                    <a href="user.php?id="<?php echo $row['id'];?>"">
                        <button class="btn btn-primary"> Ban </button>
                    </a>

                </td>
              </tr>


          <?php
        }
      }
       ?>
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

     include"../customer/include/footer.php";
     ?>

		 </footer>

	 </div>

	 </body>
</html>
