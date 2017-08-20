<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?=$home_url?>"><img class="logo-img" src="logo.png" alt="logo"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?=$home_url?>">Home</a></li>
        <li><a href="<?=$home_url.'?page=aboutus'?>">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?=$home_url.'?page=signup'?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?=$home_url.'?page=login'?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>