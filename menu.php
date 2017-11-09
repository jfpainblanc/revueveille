<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">La Revue de Veille</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav navbar-left">
        <li ><a href="index.php">Accueil</a></li>
        <li ><a href="#">Veilles</a></li>
        <li ><a href="creation.php">Ajouter</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right" id="signlog">
        <button class="btn glyphicon glyphicon-user" type="button" data-toggle="modal" data-target="#modalSignup"><span class="signTxt">SignUp</span></button>
        <button class="btn glyphicon glyphicon-log-in" type="button" data-toggle="modal" data-target="#modalLogin"><span class="logTxt">Login</span></button>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

<!--Modal Login + form -->
<div class="modal fade" id="modalLogin" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="text">User:</label>
            <input type="text" class="form-control" id="user">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <div class="form-group">
            <a data-toggle="modal" data-target="#modalSignup" href="#">Sign Up</a>
          </div>
          <button type="submit" class="btn btn-default bModal">Log In</button>
        </form>
      </div>
    </div>

  </div>
</div>
<!--fin modal -->

<!--Modal Signup + form -->
<div class="modal fade" id="modalSignup" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Sign Up</h4>
    </div>
    <div class="modal-body">
      <form>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="text">Username:</label>
          <input type="text" class="form-control" id="username">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pwdsign">
        </div>
        <button type="submit" class="btn btn-default bModal">Sign Up</button>
      </form>
    </div>
  </div>

</div>
</div>
<!--fin modal signup-->
