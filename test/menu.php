<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap/glyphicons.css">
  <script href="../js/jquery.min.js"></script>
  <script href="../js/bootstrap.min.js"></script>
</head>
<body>


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class=".glyphicon-glyphicon-menu-down"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </nav>

  <div class="container">
    <h3>Navbar Forms</h3>
    <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
    <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
    <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
  </div>

  </body>
  </html>
