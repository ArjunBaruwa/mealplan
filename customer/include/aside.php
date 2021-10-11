<aside>

  <img id="profile" src="../images/user.png" style="height:100px; width:100%; border-radius:40px;">
 <h5> <?php echo $name;?></h5>
 <hr>



     <?php
      if ($type == "Admin"){
     ?>
     <a href="dashboard.php">Dashboard</a>
     <a href="profile.php">Profile</a>

     <a href="user.php">Users</a>
     <a href="banuser.php">Ban Users</a>
     <a href="content.php">Posts</a>

     <?php
        }else{
     ?>
     <a href="dashboard.php">Dashboard</a>
      <a href="profile.php">Profile</a>
         <a href="friend.php">Friends</a>
         <a href="addthread.php">Post a thread</a>
         <a href="viewthreads.php">View a thread</a>

      <?php
     }
      ?>
