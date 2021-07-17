<html>
<meta charset="utf-8">
   <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="photos/home.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <style>

body {
  background: url("photos/ind1.jpg") no-repeat;
  background-position: center;
  background-size: cover;
}
.navbar-brand {
  font-size:21px;
  font-family:Bahnschrift SemiBold;
 
}
ul li {
  padding-left: 10px;
}
ul li a {
  font-size: 16.5px;
 letter-spacing: 0.5px;
  padding-left: 10px;
  font-family:Bahnschrift SemiBold;
}
ul li a i {
  margin-left: 15px;
}
#a:hover {
  color: #1A237E;

}



      </style>
  </head>
  <body>
  <!----------------------x-----------navbar part------------------x------------------->

  <nav class="navbar navbar-expand-lg navbar-light bg" style="background-color:white;">
  <a class="navbar-brand" href="#"><i class='fas fa-vote-yea'></i>&nbsp;Voter Poll</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto  mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#" id="a"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
      </li>
     
      <li class="nav-item active">
        <a class="nav-link" href="sign.php" id="a"><i class="fa fa-user-plus"></i>&nbsp;Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php" id="a"><i class="fa fa-sign-in-alt"></i>&nbsp;Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adminlog.php" id="a"><i class="fa fa-cog"></i>&nbsp;Admin</a>
      </li>
    </ul>
  </div>
</nav>


<!-------------------------------x-----end---------------------x------------>
  </body>

</html>