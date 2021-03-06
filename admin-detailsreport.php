<html>
<head>
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <meta charset="utf-8">
	
	<link rel="stylesheet" href="/css/master.css">
	<script src="https://kit.fontawesome.com/b50ade0183.js" crossorigin="anonymous"></script>
 <script src="https://kit.fontawesome.com/b50ade0183.js" crossorigin="anonymous"></script>
<style>
footer {
				color: #fff;
				background-attachment: fixed;
				background-color:#272c32;
				background-image: url(https://s7.postimg.org/uyf0oioaz/footer-bg.png);
				background-size: cover;
				background-position: bottom;
				height:10%;
			}
			footer p {
				color: #ccc;				
			}
	   footer a {
				color: #ccc;				
			}
			
			.recent-post li {
				display: block;
				color: #ccc;
				margin-bottom: 25px;
			}
			.recent-post li label {
				float: left;
				border: 2px solid #ccc;
				padding: 1px 7px;
				text-align: center;
			}
			.recent-post li label span {
				color: #fff;
			}
			footer .input-group-addon {
				background-color: #0141a2;
				padding: 10px;
			}
			.f-address li {
				display: inline-block;
			}
			.f-address li i {
				color: #2995de;
				font-size: 18px;
			}
			.f-address li a {
				color: #ccc;
			}
			/*=-Copyright-=*/
			.copyright {
				background-color: #111;
				padding: 12px 0;
				font-size:14px;
				color:white;
			}
			
			
/*social media*/
.middle
{
	position:bottom;
	top:50%;
	transform:translateY(-50%); 
	width:100%;
	text-align:center;
}
.btn1
{
		display:inline-block;
		width:60px;
		height:60px;
		background:#f1f1f1;
		margin:10px;
		border-radius:30%;   
		box-shadow:0 5px 15px -5px #00000070; 
		color: #3498db;
		overflow:hidden;
		position:relative;
}
.btn1 i 
{
	line-height:60px;
	font-size:25px;
	transition: 0.2s linear;
	
}
.btn1:hover i
{
	transform:scale(1.3);
	color: #f1f1f1;
}
.btn1::before
{
	content:"";
	position:absolute;
	width:120%;
	height:120%;
	background: #3498db;
	transform:rotate(45deg);
	left: -110%;
	top:90%;
}
.btn1:hover::before{
	
	animation: aaa 0.7s 1;
	top: -10%;
	left: -10%;
}
@keyframes aaa{
	0%
	{	left:-110%;
		top:90%;
		
	}
	50%
	{
			left:10%;
			top:-30%;
	}
	100%
	{	left:-10%;
		top:-10%;
	}
}

</style>
</head>
<body>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>
			<br>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="admin-home.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
					<h3 class="menu-title">Staff Details</h3><!-- /.menu-title -->
					<li>
					    <a href="admin-addstaff.php"> <i class="menu-icon fa fa-table"></i>Add Staff Member </a>
					</li>
					<li>
					    <a href="admin-updatestaff.html"> <i class="menu-icon fa fa-table"></i>Update Staff Member </a>
					</li>
					<li>
					    <a href="admin-deletestaff.html"> <i class="menu-icon fa fa-table"></i>Delete Staff Member </a>
					</li>
                    <h3 class="menu-title">Reports</h3><!-- /.menu-title -->
					<li>
					    <a href="admin-detailsreport.php"> <i class="menu-icon fa fa-bar-chart"></i>Details Report</a>
					</li>									<li>
					    <a href="admin-telephonenoreport.php"> <i class="menu-icon fa fa-bar-chart"></i>Telephone No Report</a>
					</li>

                </ul>
            </div><!-- /.navbar-collapse -->
			<br><br><br><br><br><br><br><br><br><br><br>
			<div class="col-10">
				<p class="mb-0"></p>
			</div>
        </nav>
    </aside><!-- /#left-panel -->
        <!-- Header-->
        <header id="header" class="header" >
            <div class="header-menu">
                <div class="col-sm-7">
                    </div>
                </div>
                <div class="col-sm-5" >
                    <div class="user-area dropdown float-right">
                        <br>
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle" src="images/admin.jpg" height="22% "alt="User Avatar">
                        </a>&nbsp;
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="index.html"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                    <div class="language-select dropdown" id="language-select">
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->
		
		
		
		
		
		<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Member Details</strong>
                            </div>

                                    <div class="card-body">
                                        
                                       <?php



$con=new mysqli("localhost","root","","nibm");

$sql="SELECT * FROM staff ";


$result=$con->query($sql);
   echo "<table border='2' cellpadding='15'>";
   echo "<tr>";
   echo "<th>Registration ID</th>";
   echo "<th>Name</th>";
   echo "<th>Telephone No</th>";
   echo "<th>Address</th>";
   echo "<th>Email</th>";
   echo "<th> Gender</th>";
   echo "</tr>";
	while($col=$result->Fetch_assoc())
	{
	
	echo "<tr>";	
	echo "<td>".$col['regid'] ."</td>";
	echo "<td>".$col['name']."</td>";
	echo "<td>".$col['telno']."</td>";
	echo "<td>".$col['address']."</td>";
	echo "<td>".$col['email']."</td>";
	echo "<td>".$col['gender']."</td>";
	echo "</tr>";
	
	}
	echo "</table>";
	

  
?>


                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
					
					</div>
					</div>
					</div>
		
		 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
				<div class="col-lg-1 col-md-6 col-sm-6 mt-2 mb-4">
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>NIBM, &nbsp;Vidya Mawatha, Colombo,<br>Sri Lanka</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<p><a>nibm.srilanka@gmail.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Contact No:</h6>
										<p><a>Tel   - 077 287 0143</a></p>
										<p><a>Office - 011 3133344</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>									
						<div class=" col-md-7 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold"></h5><br><br><br><br><br>
						<div class="middle">
					<a class="btn1" href="https://www.facebook.com/nibmofficialmatara/?ref=br_rs">
					<i class="fab fa-facebook-f"></i> 
					</a>
					<a class="btn1" href="https://nibm.lk">
					<i class="fas fa-envelope"></i>
					</a>
					<a class="btn1" href="https://www.instagram.com/explore/locations/1493969054203133/nibm-matara/">
					<i class="fab fa-instagram"></i> 
					</a>
					<a class="btn1" href="https://www.youtube.com/channel/UCiPesfrP9o0VW_TOgQpW0Hg">
					<i class="fab fa-youtube"></i> 
					</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2019 iSECURE. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
</body>
</html>