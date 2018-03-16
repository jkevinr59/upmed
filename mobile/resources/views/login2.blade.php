<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Upmed</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/custom.css">
    <link rel="icon" type="image/x-icon" href="public/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="public/css/superfish.css">
</head>
<body class='login-bg'>
	<div class="row" style="height: 20px;"></div>
	<div class="row top-bar" style="height: 30px;">
        <div class="col-xs-2 col-xs-offset-2 language-bar">
            <select id="lang-bar">
                <option value='id'>B A H A S A</option>
                <option value='en'>E N G L I S H</option>
            </select>
            <img class="lang-logo" src="public/images/id.png" style="display:inline-block;">
        </div>
        <div class="col-xs-2 col-xs-offset-1">
			<img class="logo-main" src="public/images/logo2.png" style="display: none;">
        </div>
        <div class="col-xs-4 col-xs-offset-0">
					<ul class="topbar-menu">
     				 	<li><a href="#">H O M E</a></li>
     				 	<li><a id="about-goto" href="#">A B O U T</a></li>
     				 	<li><a href="#">F O L L O W</a></li>
       				</ul>
		</div>
    </div>
    <div class="row" style="height: 150px;"></div>
    <div class="row mid-page" style="height: 250px;">
    	<div class="col-xs-8 col-xs-offset-2">
    	<p style="opacity: 0">KAMI BANTU ANDA MEMAHAMI RIWAYAT MEDIS ANDA</p>
    	<h1 style="opacity: 0">UNGGAH DAN ANALISA DATA MEDIS ANDA DI SINI</h1>
    	</div>
    </div>
	<div id="login-box" style="height: 100px;">
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">
				<p class="warning1">User ID Anda tidak cocok, silahkan coba lagi</p>
				<p class="warning2">User ID/Password Anda tidak cocok, silahkan coba lagi</p>
              	<form role="form" method="post" action="input">
                        {{ csrf_field() }}
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" id="uname-login" name="username" placeholder="U S E R N A M E" style="display: none">
                	    <button type="button" class="btn button" id="next-btn" name="next" id="next-button" style="display: none">N E X T &rarr;</button>
                        <label for="password" class="sr-only">Password</label>
                        <input type="Password" id="pw-login" name="password" placeholder="P A S S W O R  D" style="display: none">
                	    <button type="button" id="submit-btn" class="btn button" name="login-button" style="display: none">L O G I N</button>
              	</form>
              	<div class="row" style="height: 10px;"></div>
              	<a class="back-link" href="#" style="display: none">Back to Previous Menu</a>
			</div>
		</div>
    </div>
    <div class="row" style="height: 200px;">
        <img src="public/images/big-logo.png" style="position:absolute;left:70%;top=20%;">
    </div>
    	<div class="row" style="height: 350px;">
    		<div class="col-xs-6 col-xs-offset-3 about-us" style=" display: none;">
    			<h1>ABOUT</h1>
    			<p>platform agar anda bisa mencatat momen momen penting yang berhubungan dengan kesehatan anda seperti kapan terakhir anda demam, pada hari apa anda tergores besi berkarat, kapan anda mendapat  vaksinasi hepatitis, berapa kadar kolestrol anda terakhir hingga mencatat berapa batang rokok
				yang anda habiskan dalam sehari.</p>
				<button id="guest-login">C O B A</button>
    		</div>
    	</div>
    	<div class="row" style="height: 120px;">
    		<div class="col-xs-10 col-xs-offset-1 about-us" style=" display: none;">
    			<h2>UNGGAH,SIMPAN,ANALISA,PAHAMI,PELIHARA KESEHATAN ANDA</h2>
    			<!--<a href="#" target="_blank">Video Selengkapnya &rarr;</a> -->
    		</div>
    	</div>
    <div class="row footbar" style="opacity: 0;">
    	<div class="col-xs-6 col-xs-offset-3">
    		<h2>#UPLOADNOW</h2>
    	</div>
    </div>
	<script src="public/js/jquery.min.js"></script>
	<script src="public/js/login.js"></script>
</body>
</html>