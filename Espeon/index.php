<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Espeon</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
	
  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">
  <style>
	body,html{
		height:100%;
	}
	body{
		background-image:url('images/background.jpg');
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		
		opacity: 1;
		-webkit-animation: fadeIn 4s;
		animation: fadeIn 4s;
	}
	.frontPage{
		<!--background-color:rgba(0,0,0,.2); -->
		color:white;
	}
	@-webkit-keyframes fadeIn {
		from{opacity: 0;}
		to{opacity:1;}
	}

	@keyframes fadeIn {
		from{opacity: 0;}
		to{opacity:1;}
	}
  </style>

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	
	<div class="container">
	
		<div class = "row heading">
			<div class = "container">
				<div id="logged-in" style = "margin-top:2%"class = "three offset-by-ten columns">
					You are logged in as <span id="login-name"></span>.
					<button id="log-out">Log out</button>
				</div>
				<div id="logged-out" style = "margin-top:2%"class = "three offset-by-ten columns">
					You are not logged in.
					<button>Log in</button>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="half column frontPage" style="margin-top: 25%">
				<h4><strong>Espeon</strong></h4>
				<p style = "color:white"> A super intelligent, innovative, revolutionary, creative solution to note review. </p>
			</div>
		</div>
		
		<div class = "row">
			<div id="login-panel">
				<input type="button" onClick="location.href='https://login.live.com/oauth20_authorize.srf?client_id=000000004816F77B&scope=wl.signin&response_type=token&redirect_uri=https://espeon.azurewebsites.net'" value='Log In with MS'>
			</div>
			<?php
			var_dump($_GET);
			?>
		</div>
	</div>
   <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.4.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.4/angular.min.js"></script>  
    <script src="angular-websocket.js"></script>
    <script src='http://ajax.aspnetcdn.com/ajax/mobileservices/MobileServices.Web-1.2.5.min.js'></script>
    <script src="/scripts/app.js"></script>
    <script src="/scripts/controllers/main.ctrl.js?v=2.0"></script>


</body>
</html>
