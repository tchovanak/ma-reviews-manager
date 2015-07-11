<!DOCTYPE html>
<html lang="en" ng-app="app">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Mojandroid Reviews Manager</title>

    <!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	
    <link href="lib/magicsuggest/magicsuggest.css" rel="stylesheet">
    <script src="lib/jquery/jquery-1.11.1.min.js"></script>
	<script src="lib/jquery/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/helpers.js"></script>
    <script src="lib/magicsuggest/magicsuggest.js"></script>
	<script src="lib/angular/angular.js"></script>
	<script src="lib/angular/angular-route.js"></script>
	<script src="js/app.js"></script>
	<link rel="stylesheet" href="lib/jquery/jquery-ui.css">
	
	<script>
		  $(function() {
			$( ".datepicker" ).datepicker({
				dateFormat: "dd/mm/yy"
			});
		  });
		  @yield('head-script')
	</script>
  </head>
  <body>
	
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <img class="logo" src="images/logo.png" width="150px">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<p>Nothing here </p>
          <ul class="nav navbar-nav">
            <li id="reviewsTab"><a href="reviews">Recenzie </a></li>
            <li id="enumsTab"><a href="enums">Číselníky</a></li>
            <li><a href="kontakty.html">Kontakty</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Štatistiky <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Publikované recenzie</a></li>
                <li><a href="#">Ďalšie štatistiky</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-right" role="search" action="search.php" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Zadaj hľadané slovo">
            </div>
            <button type="submit" class="btn btn-success">Hľadaj</button>
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container main" ng-view>
      @yield('main-container')
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
   
  </body>
</html>
