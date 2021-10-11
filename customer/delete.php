<?php
include"../includes/connection.php";

     $id = $_GET['id'];
          $sql ="SELECT * FROM thread WHERE PostID = '$id'";
          $result = mysqli_query($conn, $sql);

              if($result){
                  echo "<script>alert('Details updated sucessfully..')</script>";

             }else{
                  echo"<script>alert('Oops! Somethings wrong. Try again..')</script>";
                }





     ?>
				
