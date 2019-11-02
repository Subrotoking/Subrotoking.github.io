<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>@yield('title')</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{asset('assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="{{('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{('http://fonts.googleapis.com/css?family=Roboto:400,700,300')}}" rel="stylesheet" type='text/css'>
    <link href="{{asset('asset/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>
<div class="wrapper">
	<div class="sidebar" data-color="#CC3300" data-image="asset('assets/img/sidebar-5.jpg')">
    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->
    	<div class="sidebar-wrapper">
      	<div class="logo">
          <a href="http://www.google.com" class="simple-text">
            Google
          </a>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="/admin/home">
              <i class="pe-7s-graph"></i>
              <p>Beranda</p>
            </a>
          </li>
					<li class="active">
            <a href="/admin/user">
              <i class="pe-7s-graph"></i>
              <p>User</p>
            </a>
          </li>
      	</ul>
    	</div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
        	<div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">apa ini</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Home</a>
            </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-left">
                <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-dashboard"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="">
                    Akun
                  </a>
                </li>
              </ul>
            </div>
        	</div>
        </nav>
        <div class="content">
        	<div class="container-fluid">
            <div class="row col-md-12 card">
							<div class="content">
									<form>
											<div class="row">
												<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
											    <div class="modal-dialog" role="document">
											      <div class="modal-content">
											        <div class="modal-header">
											          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											          <h4 class="modal-title" id="myModalLabel">Edit</h4>
											        </div>
											        <div class="modal-body">
											          <table class="table table-bordered table-hover table-striped">
											            <thead>
											              <tr>
											                <th>No</th>
											                <th>Nama Pengusul</th>
											                <th>Nama Artikel</th>
											                <th>Status</th>
											              </tr>
											            </thead>
											            <tbody>
											              <tr>
											                <td></td>
											                <td></td>
											                <td></td>
											                <td>
											                  <label class="switch">
											                    <input type="checkbox">
											                    <span class="slider round"></span>
											                  </label>
											                </td>
											              </tr>
											            </tbody>
											          </table>
											        </div>
											      </div>
											    </div>
											  </div>
											</div>
									</form>
							</div>
							@yield('content')
            </div>
          </div>
        </div>
        <footer class="footer">
					<div class="container-fluid">
            <nav class="pull-left">
              <ul>
                <li>
                  <a href="#">
                    Home
                  </a>
                </li>
              </ul>
            </nav>
            <p class="copyright pull-right">
              &copy; <script>document.write(new Date().getFullYear())</script>
            </p>
          </div>
        </footer>
    </div>
</div>
</body>
    <!--   Core JS Files   -->
    <script src={{('asset/assets/js/jquery.3.2.1.min.js')}} type="text/javascript"></script>
	<script src={{('asset/assets/js/bootstrap.min.js')}} type="text/javascript"></script>
	<!--  Charts Plugin -->
	<script src={{('asset/assets/js/chartist.min.js')}}></script>
    <!--  Notifications Plugin    -->
    <script src={{('asset/assets/js/bootstrap-notify.js')}}></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src={{('https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src={{('asset/assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src={{('asset/assets/js/demo.js')}}></script>
</html>
