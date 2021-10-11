<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script href="../js/bootstrap.min.js"></script>
</head>
<body>
  </head>
  <body>
     <!-- Starting of website  -->
     <div id="container"  <!-- id for whole website  -->
         <header>
           <div class="row">
               <div class="col-sm-9" style="background-color:white;">
                 <div id="logo">
                     <img src="../images/Logo.png" alt="picture of logo" width="150"  height="100">
                </div>
                <h1> <a href="index.html">MEAL PLAN </a> </h1>
               </div>
               <div class="col-sm-3" style="background-color:white;">
                 <div id="profile">
          			      <img src="../images/Logo.png" alt="picture of user profile" width="50"  height="50">
          			 </div>

          		   <div id="dropdown">
                 <button onclick="myFunction()" class="dropbtn">Jiv Bohora <span class = "glyphicon glyphicon-drop-down"></span> </button>
                    <div id="myDropdown" id="dropdown-content">
                      <a href="profile.html">Profile</a>
                      <a href="dashboard.html">Dashboard</a>
                      <a href="friend.html">Friends</a>
          	          <a href="add.html">Post a thread</a>
                      <a href="thread.html">View a thread</a>
                      <a href="../index.html">Signout</a>
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
               </div>

          </div>




			     <nav>
				     <ul>
					     <li><a href="index.html">Home </a></li>
						 <li><div class="dropdown">                <!-- start of div id dropdown for secondary navigation  -->
                             <a><span> Cusine   </a></span>
                             <div class="dropdown-content">
                                 <ul>
					                 <li> <a href="chinese.html">Chinese </a></li>
						             <li> <a href="Chinese.html">Italian </a></li>
									 <li> <a href="chinese.html">Chinese </a></li>
						             <li> <a href="Chinese.html">Italian </a></li>
									 <li> <a href="chinese.html">Chinese </a></li>
						             <li> <a href="Chinese.html">Other </a></li>
					             </ul>
                             </div>                          <!-- end of div id dropdown  -->
                         </div></li>
						 <li><a href="community.html">Customer Community </a></li>
						 <li><a href="community.html">Dashboard </a></li>
					 </ul>
				 </nav>




			 <form>

			     <input type="text" placeholder="Search">

			 </form>
			 </section>


	     </header>
		 <div id="contentbox">
		     <hr><hr>
             <h6> <a href="index.html"> Home Page </a> > </h6>
			 <article>
			     <img class="mySlides" src="../dosa.jpg">
				 <img class="mySlides" src="../rice_appe.jpg">
				 <img class="mySlides" src="../hunter's_Chicken.jpg">
				 <img class="mySlides" src="../Logo.png">
			 </article>
			 <div id="text">
			     <h4> For more recipe... </h4>
			     <p>Register now</p>
			 </div>
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
					     <img src="../dosa.jpg">
						 <h3> Dosa </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="../rice_appe.jpg">
						 <h3> Rice Appe </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="../hunter's_Chicken.jpg">
						 <h3> Hunter's Chicken </h3>
					 </div>
				 </section>
				 <section>
				     <div id="box">
					     <img src="../hunter's_Chicken.jpg">
						 <h3> Hunter's Chicken </h3>
					 </div>
				 </section>

			 </div>
			 <h2> How to register </h2>
			 <p>Preparing a meal is not always an easy task to many people especially for those who are health conscious. Having the same food over and over again is boring and annoying at the same time. Understanding this matter, the client wants to create a website where people can share their meal ideas with others so that everyone is able to find new recipes to diversify their meals.</p>

		 </div>
		 <footer>

             <section>
			     <h5>TSS (Technology Service Solution)</h5>
			     <p> Meal Plan. Copyright ©.All rights are reserved.</p>
			 </section>
			 <section>
			     <p> We are on:</p>
			     <div id="social-media">
			         <img src="../f.png" />
			         <img src="../i.png" />
                     <img src="../t.png" />
                 </div>
			 </section>
			 <section>
			     <p>Contact us</p>
				 <p> Customer Community </p>
			 </section>


		 </footer>
	 </div>
	 </body>
</html>
