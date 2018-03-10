<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Upmed</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/custom.css">
    <link rel="icon" type="image/x-icon" href="public/images/favicon.png">
</head>
<body class="login-bg">
<div class="container">
    <div class="row">
        <div class="col-xs-2 col-xs-offset-1 language-bar">
            <select id="lang-bar">
                <option value='id'>I N D O N E S I A</option>
                <option value='en'>E N G L I S H</option>
            </select>
            <img src="public/images/id-icon-small.png" style="display: inline-block;">
        </div>
    </div>
	<div class="row">
		<div class="col" style="height: 110px"></div>
	</div>
    <div class="row" style="height: 140px">
    	<div class="col-xs-4 col-xs-offset-4">
			<div class="logo" style="display: none"><img src="public/images/upmed-ico.png"></div>
    	</div>
    </div>
    <div class="row" style="height: 244px">
     <div class="col-md-3 col-md-offset-4 col-xs-4 col-xs-offset-3">
    	<p class="short-description">
    	upload your medical
		related events in case
		it would be necessary
		for medical purpose
    	</p>
     </div>
    </div>
	<div id="login-box" style="height: 100px;">
		<div class="row">
			<div class="col-xs-5 col-xs-offset-4">
                <button type="button" class="btn big-button" name="guest" id="guest-login">GET  STARTED</button>
                <a href="#" id="member-login" style="display: none">Already a member?</a>
              	<form role="form" method="post" action="input">
                        {{ csrf_field() }}
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" id="uname-login" name="User" placeholder="U S E R N A M E">
                	    <button type="button" class="btn button" id="next-btn" name="next" id="next-button" style="display: none">&rarr;</button>
                        <label for="password" class="sr-only">Password</label>
                        <input type="Password" id="pw-login" name="Password" placeholder="P A S S W O R  D">
                	    <button type="Submit" id="submit-btn" class="btn button" name="login-button">L O G I N</button>
                        <a class="back-link" href="#" style="display: none">Back to Previous Menu</a>
              	</form>
			</div>
		</div>
    </div>
    <div class="about-us">
    	<div class="row" style="margin-top:450px; margin-bottom:120px;height: 300px;">
    		<div class="col-md-4 col-md-offset-1">
    			<h1>ABOUT US</h1>
    			<p>platform agar anda bisa mencatat momen momen penting yang berhubungan dengan kesehatan anda seperti kapan terakhir anda demam, pada hari apa anda tergores besi berkarat, kapan anda mendapat  vaksinasi hepatitis, berapa kadar kolestrol anda terakhir hingga mencatat berapa batang rokok
				yang anda habiskan dalam sehari.</p>
    		</div>
    		<div class="col-md-4 col-md-push-1 col-md-offset-0 col-xs-offset-2">
    			<iframe width="480" height="277" src="https://www.youtube.com/embed/Q_Ru8Zzk6dw" frameborder="0" allowfullscreen></iframe>
    		</div>
    	</div>
    </div>
</div>
<script src="public/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var $pagePosition = 1;
    $(".logo,.short-description").hide();
    $("#guest-login,#member-login").hide();
    $("#uname-login,#next-btn,#pw-login,#submit-btn").hide();
    $(".about-us h1,.about-us p,.about-us iframe").hide();
   setTimeout(loading1,500);
   $(window).scroll(function(){
    var $temp = $pagePosition;
    var $scrollValue = $(window).scrollTop();
    if($scrollValue>700){$pagePosition = 2;}
    else if($scrollValue<300){$pagePosition = 1;}
    if($pagePosition != $temp){
        if($pagePosition == 2){loading2();}
        else{out1();}
    }
   });
});
$("#member-login").click(function(){
    $("#guest-login,#member-login").hide();
    $("#uname-login,#next-btn,.back-link").fadeIn("1500");
})
$(".back-link").click(function(){
    $("#guest-login,#member-login").fadeIn(1500);
    $("#uname-login,#next-btn,.back-link").hide();
    $("#pw-login,#submit-btn").hide();
})
$("#next-btn").click(function(){
    $("#uname-login,#next-btn").hide();
    $("#pw-login,#submit-btn").fadeIn("1500");
});
function loading1(){
    $(".logo").slideDown(1000);
    $(".short-description").delay(1000).fadeIn(600);
    $("#guest-login,#member-login").delay(1500).fadeIn(600);
}
function loading2(){
    $(".about-us h1,.about-us p").slideDown(600);
    $(".about-us iframe").delay(300).slideDown(600);
}
function out1(){
    $(".about-us h1,.about-us p,.about-us iframe").hide();
}
</script>
</body>
</html>
