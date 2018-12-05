<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/bluelines.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="fl_right">
        <ul class="nospace">
          <li><a href="../index.php"><i class="fa fa-lg fa-home"></i></a></li>
          <li><a href="sign-in.php">Sign-In</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </div>

      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="../index.php">Movie Time</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
		  <li><a href="index.php">Profile</a></li>
          <li><a href="#">To Watch </a></li>
          <li><a href="#">Watched</a></li>
		            <li><a class="drop" href="#">Movies</a>
            <ul>
              <li><a href="">Genre</a></li>
              <li><a href="">Year</a></li>
              <li><a href="">Top Searched</a></li>
              <li><a href="">Most Viewed</a></li>
              <li><a href="">Recent Movies</a></li>
			  <li><a href="toprated.php">Top Rated</a></li>
            </ul>
          </li>
        </ul>
      </nav> 
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
        <li><a href="../index.php"">Home</a></li>
        <li><a href="register.php">Register</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
        <h2>Register</h2>
       <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">First name</label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" required>
    </div>
 <div class="col-md-6 mb-3">
      <label for="validationDefault03">E-Mail</label>
      <input type="email" class="form-control" id="validationDefault03" placeholder="someone@mail.com" required>
    </div>

  </div>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" required>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Country</label>
      <input type="text" class="form-control" id="validationDefault04" placeholder="Country" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Password</label>
      <input type="password" class="form-control" id="validationDefault05" placeholder="Password" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Re-enter password</label>
      <input type="password" class="form-control" id="validationDefault05" placeholder="Password" required>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Register</button>
</form>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved Victor and Alice - <a href="#">SICI4997</a></p
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>