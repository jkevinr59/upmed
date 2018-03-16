<!DOCTYPE html>
<html>
<head>
	<title>Upmed : Kenali, Pahami, Pelihara kesehatan Anda</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../../../public/css/home.css">
	@yield('css')
	<link rel="stylesheet" type="text/css" href="../../../public/css/superfish.css">
	<link rel="icon" type="image/x-icon" href="../../../public/images/favicon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="menu-bg">
	<div class="page-container"> 
		<div class="row" style="height: 20px;"></div>
		<div class="row" style="height: 40px;">
			<div class=" col-xs-1 col-xs-offset-1">
			<img class="logo" src="../../../public/images/whiteupmed2.png">
			</div>
			<div class="col-xs-2 col-xs-offset-8 language-bar">
            	<select id="lang-bar">
                <option value='id'>B A H A S A</option>
                <option value='en'>E N G L I S H</option>
            	</select>
            	<img class="lang-logo" src="../../../public/images/id.png" style="display:inline-block;">
       		</div>
		</div>
		<div class="row" style="height: 40px;">
					<div class="col-xs-7 col-xs-offset-2">
					<ul class="sf-menu sf-arrow custom-topnav">
     					<li><a href="../../../input">INPUT</a></li>
    					<li><a href="../../../track">TRACK</a></li>
    					<li><a href="../../../service">SERVICE</a></li>
    					<li><a href="../../../profile">PROFILE</a></li>
       				</ul>
					</div> 
		</div>
		<div class="row" style="height: 30px;">
				<div class="col-xs-7 col-xs-offset-2 nav-line"> 
				<!-- add selected class via js for white bullet -->
					<div id="nav-input" class="bullet"></div>
					<div class="line"></div>
					<div id="nav-track" class="bullet"></div>
					<div class="line"></div>
					<div id="nav-service" class="bullet"></div>
					<div class="line"></div>
					<div id="nav-profile" class="bullet"></div>
					
				</div>		
		</div>
		<div class="row" style="height: 15px;"></div>
		<div class="row">
			<div class="col-xs-2 side-bar"><!-- side bar -->
				<div class="row">
					<div class="col-xs-offset-4 col-xs-8">
						<img class="thumbnail" src="../../../public/images/thumbnail.png" style="display:inline-block">
					</div>
				</div>
				<div class="row" style="height:150px;">
					<div class="col-xs-offset-4 col-xs-8">
						<p>Joshua</p>
						<p>Wiraswasta</p>
						<p>Surakarta</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-offset-4 col-xs-8">
						<p>Age</p>
						<h1>23</h1>
						<p>Weight</p>
						<h1>91</h1>
						<p>Upmoney</p>
						<h1>-</h1>
						<button type="button" id="logout-button">Save &amp; Logout</button>
					</div>
				</div>
			</div><!-- side bar ends here -->
			<div class="col-xs-9"><!-- main page -->
				<script src="../../../public/js/jquery.min.js"></script>	
				<div class="basic-page-container page-container">
					@yield('content')
				</div>
			</div><!-- main page ends here -->
		</div>
	</div>
	
</body>