
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>bibliotheques</title>
		
        <!-- Common Plugins -->
        <link href="assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Vector Map Css-->
        <link href="assets/lib/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		
		<!-- Chart C3 -->
		<link href="assets/lib/chart-c3/c3.min.css" rel="stylesheet">
		<link href="assets/lib/chartjs/chartjs-sass-default.css" rel="stylesheet">

        <!-- DataTables -->
        <link href="assets/lib/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/lib/toast/jquery.toast.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		<script src="chart.js/chart.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
    <meta name="csrf-token" content="{{csrf_token()}}"/>

    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
		 <div class="top-bar primary-top-bar"> 
			<div class="container-fluid">
            <div class="row">
					<div class="col bg-info" >
						<a class="admin-logo" href="index.html">
						
						</a>				
						<div class="left-nav-toggle " >
							<a  href="#" class="nav-collapse"><i class="fa fa-bars"></i></a>
						</div>
						<div class="left-nav-collapsed" >
							<a  href="#" class="nav-collapsed"><i class="fa fa-bars"></i></a>
						</div>
						
                        <ul class="list-inline top-right-nav ">
					
                    <li class="dropdown">
                        <a class="" href="javascript:%20void(0);"><i class="fa fa-align-right"></i></a>
                    </li>
                    <li class="dropdown avtar-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img alt="" class="rounded-circle" src="assets/img/kit.PNG" width="30">
                            {{Auth::user()->username}}
                        </a>
                        <ul class="dropdown-menu top-dropdown">
                            <li>
                                <a class="dropdown-item" href="{{route('login')}}"><i class="icon-logout"></i>Deconnexion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
					</div>
                    
				</div>
                
                
                <a class="dropdown-item" href="{{route('login')}}"><i class="icon-logout"></i>Deconnexion</a>

        </div>
		</div>
	
        <div class="main-sidebar-nav default-navigation ">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="assets/img/kit.PNG" width="80">
                        <p class="lead margin-b-0 toggle-none"></p>
                        <p class="text-muted mv-0 toggle-none">Welcome   {{Auth::user()->username}}</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <li class="nav-heading"><span>MAIN</span></li>
						<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Bibliotheque <span class="badge badge-pill badge-danger float-right mr-2"></span></span></a></li>						
                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0)" aria-expanded="false"><i class="fa fa-codepen"></i> <span class="toggle-none">Nos Livres<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="{{route('livre')}}"><i><span class=" fa fa-book">livres</span></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('retour')}}">  <i> <span class='fa fa-book'>Retour</span></i> </a></li>

								
                            </ul>
                        </li></li>	


                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0)" aria-expanded="false"><i class="fa fa-codepen"></i> <span class="toggle-none">Nos Sortis<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item "><a class="nav-link" href="{{route('emprunteur')}}"><i class="fa fa-user"><span>Emprunteurs</span></i> </a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('emprunt')}}"><i class="fa fa-book"><span>emprunts</span></i> </a></li>
            
								
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0)" aria-expanded="false"><i class="fa fa-codepen"></i> <span class="toggle-none">Parametres<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item "><a class="nav-link" href=""><i class="fa fa-users"><span>utilisateurs</span></i> </a></li>
                                <li class="nav-item "><a class="nav-link" href=""><i class="fa fa-end"><span>Stock de securite</span></i> </a></li>

  
								
                            </ul>
                        </li>
                        <li class="nav-heading"><span>FORMS, TABLE & LAYOUTS</span></li>

                        						
                     
						
                       
                        
                    </ul>
                </div>
            </div>
        </div>
 @yield('head')
     <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->

			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
           
				<div class="col-lg-6 align-self-center fixed-t0p ">
				  <h2 >BIENVENUE  DANS BIBLIOTHEQUE LIVRE MODERNE </h2>
					
				</div>
				
		</div>
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
			 @yield('contenu')
             @yield('monscript')
		
					   </div>
                    </div>
                </div>
	  </div>
  </div>


			
	<div style="width:90%;">
  <canvas id="myc"></canvas>

   </div>

   <div>
 


			
		
        <!-- Common Plugins -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

        <script src="assets/lib/jquery/dist/jquery.min.js"></script>
		<script src="assets/lib/bootstrap/js/popper.min.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/lib/pace/pace.min.js"></script>
        <script src="assets/lib/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
        <script src="assets/lib/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/lib/nano-scroll/jquery.nanoscroller.min.js"></script>
        <script src="assets/lib/metisMenu/metisMenu.min.js"></script>
        <script src="assets/js/custom.js"></script>
			
        <!--Chart Script-->
        <script src="assets/lib/chartjs/chart.min.js"></script>
		<script src="assets/lib/chartjs/chartjs-sass.js"></script>

		<!--Vetor Map Script-->
		<script src="assets/lib/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="assets/lib/vectormap/jquery-jvectormap-us-aea-en.js"></script>
		
		<!-- Chart C3 -->
        <script src="assets/lib/chart-c3/d3.min.js"></script>
        <script src="assets/lib/chart-c3/c3.min.js"></script>
	
        <!-- Datatables-->
        <script src="assets/lib/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/lib/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/lib/toast/jquery.toast.min.js"></script>
        <script src="assets/js/dashboard.js"></script>

		

		
    </body>

</html>