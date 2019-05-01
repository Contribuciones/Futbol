<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Torneo de fútbol 7</title>
	<link href="<?php echo base_url("public/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("public/css/style.css"); ?>" rel="stylesheet" type="text/css">
	
</head>
<body>
	<!--Navbar -->
	<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
		<a class="navbar-brand" href="#">Torneo</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
		aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-user"></i> Perfil </a>
				<div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
					<a class="dropdown-item" href="<?php echo base_url(); ?>index.php/logout">Cerrar sesión</a>
				</div>
			</li>
			</ul>
		</div>
	</nav>
	<!--/.Navbar -->
	<div class="container">
		<div class="align-middle row">	
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<h1> Bienvenidos </h1>
			</div>
			<div class="col-md-2">
			</div>
		</div>
    </div>
</body>
	<script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
</html>
