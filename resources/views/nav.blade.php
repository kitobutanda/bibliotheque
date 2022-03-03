@extends('welcome')
@section('nav')
<div class="main-sidebar-nav default-navigation btn btn-imfo">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="assets/img/kit.PNG" width="80">
                        <p class="lead margin-b-0 toggle-none">
                        </p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <li class="nav-heading"><span>MAIN</span></li>
						<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Bibliotheque <span class="badge badge-pill badge-danger float-right mr-2"></span></span></a></li>						
                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0)" aria-expanded="false"><i class="fa fa-codepen"></i> <span class="toggle-none">Nos Livres<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                            <li class="nav-item"><a class="nav-link" href="livres.php"><i><span class=" fa fa-book">livres</span></i></a></li>
                            <li class="nav-item"><a class="nav-link" href="retour.php">  <i> <span class='fa fa-book'>Retour</span></i> </a></li>

								
                            </ul>
                        </li></li>	


                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0)" aria-expanded="false"><i class="fa fa-codepen"></i> <span class="toggle-none">Nos Sortis<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item "><a class="nav-link" href="emprunteur.php"><i class="fa fa-user"><span>Emprunteurs</span></i> </a></li>
                                <li class="nav-item"><a class="nav-link" href="emprunt.php"><i class="fa fa-book"><span>emprunts</span></i> </a></li>
            
								
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0)" aria-expanded="false"><i class="fa fa-codepen"></i> <span class="toggle-none">Parametres<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item "><a class="nav-link" href="utilisateurs.php"><i class="fa fa-users"><span>utilisateurs</span></i> </a></li>
                                <li class="nav-item "><a class="nav-link" href="emplacement.php"><i class="fa fa-home"><span>Emplacements</span></i> </a></li>
                                <li class="nav-item "><a class="nav-link" href="stocks.php"><i class="fa fa-end"><span>Stock de securite</span></i> </a></li>

  
								
                            </ul>
                        </li>
                        <li class="nav-heading"><span>FORMS, TABLE & LAYOUTS</span></li>

                        						
                     
						
                       
                        
                    </ul>
                </div>
            </div>
        </div>
@endsection
