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

<body style="background-color: #ffffff">
<div class="container-fluid" style="padding: 0px;">
    <div class="col-xs-3 layout-sidebar">
        <div class="row">
            <div class="col-xs-6 layout-title-box">
                <center><img src="public/images/logo2.png" width="84" height="14"></center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 layout-image-box">
                <center><img src="https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p66749.png" class="img-responsive" alt="Cinque Terre" width="100" height="100"> </center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 layout-profile-info">
                <div class="row">
                    <div class="col-xs-12">
                        <center><b>Username:</b></center>
                        <center>User1</center>
                    </div>          
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <center><b>Gender:</b></center>
                        <center>Male</center>
                    </div>
                    <div class="col-xs-6">
                        <center><b>Age:</b></center>
                        <center>22</center>
                    </div>    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2">
                <button class="layout-health-button"><i class="fa fa-angle-left"></i></button>
            </div>
            <div class="col-xs-8 layout-personal-health">
                <div class="row">
                    <div class="col-xs-12">
                        <center><h4>Personal Health</h4></center>
                    </div>
                </div>
                <!-- Group B-->
                <div id="health-group-b" class="row layout-personal-group">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6" style="height: 42px">
                                <center><b>Blood Pressure</b></center>
                                
                            </div>
                            <div class="col-xs-6" style="height: 42px;line-height: 40px;">
                                <center style=""><b>Cholesterol</b></center>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <center>112</center>
                                
                            </div>
                            <div class="col-xs-6">
                                <center>155</center>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Group B Ends Here-->
                <!-- Group C-->
                <div id="health-group-c" class="row layout-personal-group">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <b>Alergi:</b>
                                    <p>
                                       + Udang<br>
                                       + Analgesik<br>
                                       + Debu<br>
                                    </p>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <b>Riwayat Opname</b>
                                <p>
                                    + 14 November 18 (3 hari)
                                    + 11 Maret 18 (2 hari)
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <span>Asma <i class="fas fa-check"></i></span>
                            </div>
                            <div class="col-xs-6">
                                <span>Diabetes <i class="fas fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Group C Ends Here -->
            </div>
            <div class="col-xs-2" style="padding-left:10px;">
                <button class="layout-health-button" style="margin-left:0px;"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 layout-edit-button-box">
                <center><a href="#" class="layout-edit-btn btn btn-default btn-round-lg btn-lg">Edit Profile&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></a></center>
            </div>
        </div>
    </div>
    <div class="col-xs-9 col-xs-offset-3">
        <div class="row layout-topbar">
                <div class="col-xs-9 col-xs-offset-3">
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8 layout-tool-bar nav navbar-top-links">
                            <ul class="nav navbar-top-links navbar-right">
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-language fa-fw"></i>
                                        <i class="fa fa-caret-down"></i>
                                    </a>   
                                </li>
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
        <div class="row" style="margin-top: 110px;">
            @yield('content')
        </div>        
    </div>
</div>
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