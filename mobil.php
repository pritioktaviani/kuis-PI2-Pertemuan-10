<?php 
include 'model_mobil.php';
$model = new Model();
?>


<head>
	<title>Data Mobil</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
            <div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
					<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>						
						<li><a href="member.php" class=""><i class="lnr lnr-dice"></i> <span>Member</span></a></li>
						<li><a href="mobil.php" class=""><i class="lnr lnr-dice"></i> <span>Mobil</span></a></li>
						<li><a href="rental.php" class=""><i class="lnr lnr-dice"></i> <span>Rental</span></a></li>
						</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Tables</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Mobil</h3>
								</div>
								<div class="panel-body">
								<a href=mobil-input.php> Tambah Data </a>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Merk Tipe</th>
												<th>Tahun Keluaran</th>
												<th>Tarif</th>
												<th>Aksi</th>
											</tr>
										</thead>
										</tbody>
                                        <?php
                                        $no = 1;
												
                                        $result = $model->tampil_data();
                                        if (!empty($result)) {
                                        foreach ($result as $data) : 
                                        
                                        ?>
                                        <tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data->merktipe?></td>
											<td><?php echo $data->thnkeluaran ?></td>
											<td><?php echo $data->tarif ?></td>
											<td><a name="edit" id="edit" href="edit_mobil.php
											?member_id=<?= $data->member_id ?>">Edit</a>
											<a name="hapus" id="hapus" href="proses.php?member_id=<?= $data->member_id ?>">Delete</a>
											</td>
											</tr>
										</tbody>
										<?php endforeach;
 											} else { ?>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
					</div>
				</div>
                <?php } ?>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
