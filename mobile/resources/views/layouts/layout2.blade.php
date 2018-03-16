
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

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">UPMED</a>
            </div>
            <!-- /.navbar-header -->
			<ul class="nav navbar-top-links navbar-left">
                    <li><a href="home">Dashboard</a></li>
                    <li><a href="track">Track</a></li>
                    <li><a href="service">Layanan</a></li>
                    <li><a href="profile">Profile</a></li>
             </ul>						
            <ul class="nav navbar-top-links navbar-right">         
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    
                    <ul class="dropdown-menu">
                    <!--
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li> 
                    -->
                    </ul> 
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="resetpassword"><i class="fa fa-cog fa-fw"></i>Reset Password</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-power-off fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
              <!-- merubah width di sini = rubah margin left page wrapper -->
            <div class="navbar-default navbar-static-side" style ="width: 350px;" role="navigation">
                <div class="sidebar-collapse">
                	<br/>  <br/>
                   <center><img src="https://platform-static-files.s3.amazonaws.com/premierleague/photos/players/250x250/p66749.png" class="img-responsive" alt="Cinque Terre" width="100" height="100"> </center> <br/>  
                   <center><h4><b><?php echo $user['name'] ?></b></h4></center>
                   
                   <center>User</center>
                   <center><i class="glyphicon glyphicon-map-marker"><b>Surabaya</b></i></center>
                   <center></center>
                   <br/>  <br/>
                   <div class="row">
                     <center><b>Tentang Kondisi Tubuh</b></center>
                   </div>
                   <br/>
                   <div class="row" style="margin-bottom: 10px;margin-left: 5px;">
                    <div class="col-md-6">
                    Berat Badan
                    <br>
                    <b id="weight-value" class="pull-left">-</b></div>
                    <div class="col-md-3 col-md-offset-2">
                    Umur
                    <br>
                    <b id="age-value">-</b>
                    </div>
                   </div>
                   <div class="row">
                    <div class="col-md-3">
                      <img src="https://cdn.thinglink.me/api/image/860079451885535233/1240/10/scaletowidth" class="img-responsive" alt="Cinque Terre" width="50" height="100">
                    </div>
                      <div class="col-md-6">
                        Tinggi Badan
                        <br>
                        <b>-</b>
                      </div>
                    </div>
                   <br/>
                   <div class="col-md-6">
                   	Newest GDA
                    <br>
                    <b>-</b>
                   </div>
                   <div class="col-md-3 col-md-offset-2" style="margin-bottom: 10px;">
                   Lemak <br>
                   <b>-</b>
                   </div>
                   </div>
                   <center><a href="#" class="btn btn-default btn-round-lg btn-lg">Edit Profile&nbsp; &nbsp;<i class="fa fa-cog" aria-hidden="true"></i></a></center>
					<br/><br/>
					
                   <center>UPMED 2017</center>
                   <center>All Right Reserved</center>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper" style="margin-left: 350px;width: 1000px;">
            <!--<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>-->
                <!-- /.col-lg-12 -->
            <!--</div>-->
            <!-- /.row -->
                @yield('content')
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="public/js/raphael-2.1.0.min.js"></script>
    <script src="public/js/morris.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="public/js/sb-admin.js"></script>
    @yield('js')

</body>

</html>
