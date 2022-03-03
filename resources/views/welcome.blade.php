

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
		
        <!-- Custom Css-->
        <link href="assets/scss/style.css" rel="stylesheet">
		<script src="chart.js/chart.min.js"></script>
    </head>
    <body>

			<!-- ============================================================== -->
			<!-- 						Topbar Start 							-->
			<!-- ============================================================== -->
			<div class="top-bar primary-top-bar">
			<div class="container-fluid">
                <!-- @yield('head')
			 -->
             @include('head');
			</div>
		</div>
               @yield('nav')
        <!-- ============================================================== -->
		<!-- 						Navigation End	 						-->
		<!-- ============================================================== -->

			
		<!-- ============================================================== -->
		<!-- 						Content Start	 						-->
		<!-- ============================================================== -->
		<div class="row page-header">
				<div class="col-lg-6 align-self-center ">
				  <h2 >BIENVENUE  DANS BIBLIOTHEQUE LIVRE MODERNE </h2>
					
				</div>
				
		</div>
		
        <section class="main-content">
            <div class="row w-no-padding margin-b-30">
			
			<div class="col-md-4">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Nos visiteurs</h2>
								<p class="text-muted">EMPRUNTEURS </p>
								
								 
								<span class="float-right text-primary widget-r-m"></span>
								
							</div>
							<div class="progress margin-b-10  progress-mini">
								
							</div>
							<!-- <p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">50%</p> -->
						
							                        </div>
                    </div>
                </div>

				<div class="col-md-4">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">livres</h2>
								<p class="text-muted">LIVRES  DISPONIBLES</p>
								
								
								 
								<span class="float-right text-primary widget-r-m"></span>
								
							</div>
							<div class="progress margin-b-10  progress-mini">
							</div>
							<!-- <p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">50%</p> -->
							
							                        </div>
                    </div>
                </div>
				
				
				
               
				
				<div class="col-md-4">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">livres</h2>
								<p class="text-muted"> LIVRES EMPRUNTER</p>
							
								 
								<span class="float-right text-primary widget-r-m"></span>
								
							</div>
							<div class="progress margin-b-10  progress-mini">
							</div>
							<!-- <p class="text-muted float-left margin-b-0">Change</p>
							<p class="text-muted float-right margin-b-0">50%</p> -->
				
                        </div>
						
                    </div>
				
					
                </div>
			

  <div class="row offset-4"  >
	  <div class="col-md-12 ">
	 
		<h3>STOCK DE SECURITE</h3>

	<table id="datatable2" class="table table-striped dt-responsive nowrap">
			<thead>
				<tr>
					<th>N°</th>
					<th>LIVRE</th>
					<th>STOCK DE SECURITE</th>

				</tr>
			</thead>
			<tbody>
				<tr>
					
						<td></td>
						<td></td>
				</tr>
				
			</tbody>
		</table>
	</div>
</div>

								
					
	  </div>
  </div>


			
	<div style="width:90%;">
  <canvas id="myc"></canvas>

   </div>

   <div>
   <!-- <p>
		 $t=$db->query("SELECT *  FROM NosLivres ");
		while($ok=$t->fetch())
		{
			echo $ok['id'];
		}
		?>
	 
	</p>
	<p>
		< $t=$db->query("SELECT *  FROM emprunt");
		while($ok=$t->fetch())
		{
			echo $ ok['id'];
		}
		?>
	 
	</p>
    <p>
		 $t=$db->query("SELECT *  FROM nossortis ");
		while($ok=$t->fetch())
		{
			echo $ok['id'];
		}
		
	 
	</p>


				</div>
            <footer class="footer">
                <span>Copyright &copy; 2022 bibliotheques</span>
            </footer>

        </section>
        <!-- ============================================================== -->
		<!-- 						Content End		 						-->
		<!-- ============================================================== -->

		
        <!-- Common Plugins -->
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

		<script>
			const config = {
  type: 'bar',
  data:{
	  labels: ['sortis', 'visiteurs','entrer'],
datasets:[{
	fill: true,
	data: [3,8,7],
	backgroundColor:['red','blue','yellow'],
    

}]

},
  options: {
	  legend:{
		  display:false,

	  }
  }
};
  // === include 'setup' then 'config' above ===
  var myChart = new Chart(
    document.getElementById('myc'),
    config
  );
</script>
		
    </body>

<!-- Mirrored from www.aksisweb.com/theme/fixed/layouts-1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 22:27:14 GMT -->
</html>