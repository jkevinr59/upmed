<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Upmed</title>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap-theme.min.css">
    <link rel="icon" type="image/x-icon" href="public/images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class='login-bg'>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <div class="row">
        <!-- ilustration begins here-->
        <div class="col-md-7">
            <div class="row" style="height:30px; margin-top: 20px;">
                <div class="col-md-5 col-md-offset-1">
                    <div class="dropdown">
                        <button class="language-button dropdown-toggle" type="button" data-toggle="dropdown"><span class="menu-bar-icon" style="display: inline-block;"><div></div><div></div><div></div></span>Bahasa</button>
                            <ul class="dropdown-menu">
                                <li><a href="id">Indonesia</a></li>
                                <li><a href="en">English</a></li>
                             </ul>
                    </div>
                </div>
            </div>
            <div class="row" style="height:100px;"></div>
            <div class="row ilustration">
                <div class="col-md-10 col-md-offset-1">
                    <h2>SIMPAN, ANALISA & PAHAMI KESEHATAN ANDA. DI MANAPUN,KAPANPUN TANPA BIAYA.</h2>
                    <p>Catat momen-momen penting yang berhubungan dengan kesehatan Anda seperti demam, kadar kolesterol terakhir Anda hingga mencatat berapa rokok yang anda habiskan dalam sehari</p>
                </div>
            </div> 
        </div>
        <!-- side bar begins here -->    
        <div class="login-side-bar col-md-5">
            <div class="row" style="margin-top: 140px;">
                <div class="col-md-8 col-md-offset-2">
                            @if (session('status'))
                            
                                <div id="registered" class="alert alert-success">
                                    <strong>{{ session('status') }}</strong> 
                                </div>
                            @endif
                    <h2 style="text-align: center;">Masuk ke UpMed</h3>
                    <p class="sub-header">Catat kesehatan Anda, dimulai dari sini</p>                
                </div>
            </div>
            <div class="row">
                <div id="entry-login" class="col-md-6 col-md-offset-3">
                    <button id="trial1-button" type="button" class="free-trial-color round-button">Coba Sekarang</button>
                    <button id="login1-button" type="button" class="login-color round-button">Login dengan Akun</button>  
                </div>
            </div>
            <div id="login-panel" class="row" style="margin-top: 20px;display: none;">
                <div  class="col-md-9 col-md-offset-2">

                    <form role="form" method="post" action="home">
                        {{ csrf_field() }}
                        <label for="username" class="sr-only">Username</label>
                        <input class="login-namefield" type="text" name="username" placeholder="Username">
                        <label for="password" class="sr-only">Password</label>
                        <input class="login-namefield" type="password" name="password" placeholder="Password">
                        <input type="Submit" class="login-color round-button-small" name="login" value="Login">
                    </form>
                    <button id="trial2-button" type="button" class="free-trial-color round-button">Daftar Baru</button>
                </div>
            </div>
            <div id="trial-panel" class="row" style="margin-top: 20px;display: none;">
                <div  class="col-md-9 col-md-offset-2">
                    <form role="form" method="post" action="trial">
                        {{ csrf_field() }}
                        <label for="username" class="sr-only">Username</label>
                        <input class="login-namefield" type="text" name="username" placeholder="Username">
                        <label for="email" class="sr-only">Username</label>
                        <input class="login-namefield" type="text" name="email" placeholder="Email">
                        <input type="Submit" class="login-color round-button-small" name="register" value="Daftar">
                    </form>
                    <button id="login2-button" type="button" class="login-color round-button">Login dengan Akun</button>    
                </div>
            </div>
        </div>
    </div>
    <script src="public/js/login.js"></script>
    <script src=<?php echo '"'.url("/mobile-detection.js").'"';?>></script>
    <script type="text/javascript">
        $(document).ready(function(){
            autoRedirect(1);
        })
    </script>
    <script type="text/javascript">
            $("#registered").fadeTo(2000, 500).slideUp(500, function(){
                $(this).alert('close');
            });
        </script>
</body>
</html>