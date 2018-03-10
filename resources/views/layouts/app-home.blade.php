<!DOCTYPE html>
<html>
<head>
	<title>Upmed</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
	@yield('css')
	<link rel="stylesheet" type="text/css" href="public/css/custom.css">
	<link rel="stylesheet" type="text/css" href="public/css/superfish.css">
	<link rel="icon" type="image/x-icon" href="public/images/favicon.png">
</head>
<body class="menu-bg">
	<div class="row">
		<div class="container col-lg-8 col-lg-offset-2">
			<div class="row" style="height: 80px;"></div>
			<div class="row">
    			<div class="col-md-4 col-md-offset-4" style="padding-left: 0px;">
					<div class="logo"><img src="public/images/whiteupmed2.png"></div>
    			</div>
			</div>
			<div class="row">
    			<div class="col-lg-9 col-lg-offset-2" style="margin-top: 44px;">
     				<ul class="sf-menu sf-arrow custom-topnav">
     				 	@yield('sidemenu')
       				</ul>
     			</div>
  			</div>
  			<div class="basic-page-container page-container">
  			<script type="text/javascript" src="public/js/jquery.min.js"></script>
			<script type="text/javascript">
    			$(document).ready(function(){
    			$(".logo,.sf-menu,.basic-page-container").hide();
    			$(".logo").fadeIn(1000);
    			$(".sf-menu").delay(500).fadeIn(1000);
    			$(".basic-page-container").delay(1000).slideDown(1000);
   				 });
			</script>
  				@yield('content')
  			</div>
		</div>
	</div>
</body>
</html>