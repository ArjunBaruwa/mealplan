<section>
			 <div id="profile">
			      <img src="../images/Logo.png" alt="picture of user profile" width="50"  height="50">
			 </div>

		     <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"> <?php echo $name;?> <i class="glyphicon glyphicon-chevron-down"></i> </button>
  <div id="myDropdown" class="dropdown-content">
   <?php
    if ($type == "Admin"){
	 ?>
	 <a href="profile.php">Profile</a>

	 <a href="user.php">Users</a>
<a href="banuser.php">Ban Users</a>
	 <a href="content.php">Posts</a>
	 <a href="../index.php">Signout</a>
	 <?php
      }else{
	 ?>
	 
		<a href="profile.php">Profile</a>

    <a href="friend.php">Friends</a>
	<a href="add.php">Post a thread</a>
    <a href="thread.php">View a thread</a>
    <a href="../index.php">Signout</a>

		<?php
	}
		?>
  </div>
</div>

<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
			 <form>

			     <input type="text" placeholder="Search"><button class"btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>

			 </form>
