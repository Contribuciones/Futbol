<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Torneo de fútbol 7</title>
	<link href="<?php echo base_url("public/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url("public/css/style.css"); ?>" rel="stylesheet" type="text/css">
	
</head>
<body>
	<div class="container">
		<div class="align-middle row">	
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="card card-container">
					<blockquote class="blockquote">
						<p class="blockquote-footer text-center">Ingrese su correo y contraseña para ingresar al sistema.</p>
					</blockquote>
					<img class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" alt="" />
					<p id="profile-name" class="profile-name-card"></p>
					<?php echo form_open('login'); ?>
						<span id="reauth-email" class="reauth-email"></span>
						<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" required autofocus>
						<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
						
						<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Ingresar</button>
					</form>
					<?php 
						if($this->session->flashdata('error_login'))
						{
					?>
					<div class='alert alert-danger alert-dismissible' role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
						 </button>
						<?=$this->session->flashdata('error_login')?></div>
					<?php
						}
					?>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
    </div>
</body>
	<script src="<?php echo base_url(); ?>public/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>
</html>
