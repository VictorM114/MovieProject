<!DOCTYPE html>
<html>
<head>
<title>Recent Movies</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
		  <li><a href="#">Profile</a></li>
		            <li><a class="drop" href="#">Movies</a>
            <ul>
              <li><a href="pages/">Genre</a></li>
              <li><a href="pages/">Year</a></li>
              <li><a href="pages/">Top Searched</a></li>
              <li><a href="pages/">Most Viewed</a></li>
              <li><a href="recentMovies.php">Recent Movies</a></li>
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Movies</a></li>
        <li><a href="#">Recent Movies</a></li>
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
      <div id="gallery">
        <figure>
          <header class="heading">Recent Movies</header>
          <ul class="nospace clear">
            <li class="one_quarter first"><a href="#"><img src="../recentMovies/ralph.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/fantastic.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/hannah.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/creedII.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../recentMovies/robin.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/instant.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/overlord.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/queLeon.jpg" alt=""></a></li>
            <li class="one_quarter first"><a href="#"><img src="../recentMovies/widows.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/bohemian.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/greenBook.jpg" alt=""></a></li>
            <li class="one_quarter"><a href="#"><img src="../recentMovies/theGrinch.jpg" alt=""></a></li>
          </ul>
          </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li class="current"><strong>1</strong></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
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