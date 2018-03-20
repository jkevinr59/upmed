<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Upmed : Kenali, Pahami, Pelihara Kesehatan Anda</title>
    <!-- Core CSS - Include with every page -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/fontawesome-all.css" rel="stylesheet">
   
    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="public/css/morris-0.4.3.min.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="public/css/sb-admin.css" rel="stylesheet">
    <link href="public/css/sb-admin-2.css" rel="stylesheet">
    @yield('css')

</head>

<body style="background-color: #ffffff;padding-top: 0px;">
<div class="container-fluid" style="padding: 0px;">
    <div class="col-xs-3 layout-sidebar">
        <div class="row">
            <div class="col-xs-12 layout-title-box">
                <center><img src="public/images/whiteupmed2.png" width="84" height="14"></center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 layout-image-box">
                <center><img src="https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p66749.png" class="img-responsive" alt="Cinque Terre" width="80" height="80"> </center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 layout-profile-info">
                <div class="row">
                    <div class="col-xs-12">
                        <center class="txt-white"><b>User1</b></center>
                    </div>          
                </div>
                <div class="row" style="margin-top: 10px;">
                    <div class="col-xs-4 col-xs-offset-2">
                        <center class="txt-white"><b>Male</b></center>
                    </div>
                    <div class="col-xs-4">
                        <center class="txt-white"><b>29</b></center>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2">
                <button class="layout-health-button"><i class="txt-white fa fa-angle-left"></i></button>
            </div>

            <div class="col-xs-8 layout-personal-health">
                <!-- Group B-->
                <div id="health-group-b" class="row layout-personal-group">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6" style="height: 42px">
                                <center class="txt-white"><b>Blood Pressure</b></center>
                                
                            </div>
                            <div class="col-xs-6" style="height: 42px;line-height: 40px;">
                                <center class="txt-white"><b>Cholesterol</b></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <center class="txt-white">112</center>
                                
                            </div>
                            <div class="col-xs-6">
                                <center class="txt-white">155</center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Group B Ends Here-->
                <!-- Group C-->
                <div id="health-group-c" class="row layout-personal-group">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <hr>
                                <center><b class="txt-white">Alergi</b></center> 
                                    <p class="txt-gray">
                                       + Udang<br>
                                       + Analgesik<br>
                                       + Debu<br>
                                    </p> 
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="col-xs-10 col-xs-offset-1">
                                <center><b class="txt-white">Riwayat Opname</b></center> 
                                <p class="txt-gray">
                                    + 14 November 18 (3 hari)
                                    + 11 Maret 18 (2 hari)
                                </p>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-5 col-xs-offset-1">
                                <center><span class="txt-white">Asma <i class="fas fa-check"></i></span></center>
                            </div>
                            <div class="col-xs-5">
                                <center><span class="txt-white">Diabetes <i class="fas fa-times"></i></span></center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Group C Ends Here -->
            </div>
            <div class="col-xs-2" style="padding-left:10px;">
                <button class="layout-health-button" style="margin-left:0px;"><i class="fa fa-angle-right txt-white"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3 layout-edit-button-box">
                <center><a href="#" class="layout-edit-btn btn btn-default btn-round-md btn-md">E D I T</a></center>
            </div>
        </div>
    </div>
    <div class="col-xs-9 col-xs-offset-3 white-canvas">
        <div class="row layout-topbar">
                <div class="col-xs-12">
                    <div class="row">
                        <div class="col-xs-2 layout-right-toolbar">
                            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        I D
                                        <i class="fa fa-caret-down"></i>
                                    </a>   
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown" href="#">
                                        <i class="fa fa-play fa-fw"></i>
                                    </a>  
                                </li>   
                            </ul>   
                        </div>
                        <div class="col-xs-4 col-xs-offset-6 layout-tool-bar nav navbar-top-links">
                            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-newspaper fa-fw"></i>
                                        <i class="fa fa-caret-down"></i>
                                    </a>   
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-envelope fa-fw"></i>
                                        <i class="fa fa-caret-down"></i>
                                    </a>   
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown" href="logout">
                                        <i class="fa fa-power-off fa-fw"></i>
                                    </a>   
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-5 col-xs-offset-7 layout-menu-bar">
                           <ul class="nav navbar-top-links navbar-right">
                                <li><a href="home">UPLOAD</a></li>
                                <li><a href="track">TRACK</a></li>
                                <li><a href="service">LAYANAN</a></li>
                                <li><a href="profile">PROFIL</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
                
                  
        </div>
        <div class="row" style="padding-top: 130px;">
             @if (session('status'))
                            
                                <div id="registered" class="alert alert-success">
                                    <strong>{{ session('status') }}</strong> 
                                </div>
                            @endif
            @yield('content')
        </div>        
    </div>
</div>
    <script type="text/javascript">
            $("#registered").fadeTo(2000, 500).slideUp(500, function(){
                $(this).alert('close');
            });
        </script>
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="public/js/raphael-2.1.0.min.js"></script>
    <script src="public/js/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="public/js/sb-admin.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#health-group-b").hide();
        })
    </script>
    @yield('js')
</body>