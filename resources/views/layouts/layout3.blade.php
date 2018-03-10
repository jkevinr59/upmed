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
            <div class="col-xs-6 layout-title-box"></div>
        </div>
        <div class="row">
            <div class="col-xs-12 layout-image-box">
                <center><img src="https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p66749.png" class="img-responsive" alt="Cinque Terre" width="120" height="120"> </center>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2 layout-profile-info">
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2">
                <button class="layout-health-button"><i class="fa fa-angle-left"></i></button>
            </div>
            <div class="col-xs-8 layout-personal-health">
                
            </div>
            <div class="col-xs-2" style="padding-left:10px;">
                <button class="layout-health-button" style="margin-left:0px;"><i class="fa fa-angle-right"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 layout-edit-button-box">
                <center><a href="#" class="btn btn-default btn-round-lg btn-lg">Edit Profile&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></a></center>
            </div>
        </div>
    </div>
    <div class="col-xs-9 col-xs-offset-3">
        <div class="row layout-topbar">
                <div class="col-xs-9 col-xs-offset-3">
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-8 layout-tool-bar"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6 col-xs-offset-6 layout-menu-bar">
                           <ul>
                                <li><a href="home">Dashboard</a></li>
                                <li><a href="track">Track</a></li>
                                <li><a href="service">Layanan</a></li>
                                <li><a href="profile">Profile</a></li>
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
@yield('js')
</body>