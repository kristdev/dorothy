<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $description;?>">
    <meta name="author" content="kristdev">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">

	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mystylesheet.css">

	<!-- Les polices -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
	<!-- ubuntu police -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<!-- Open sans police -->
	
</head>
<body>
	
	<div class="navbar navbar-default my_transparent my_header" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="#">
					<span class="my_websitetitle my_blue">
						<i class="fa fa-graduation-cap fa-lg"></i> Dorothy
					</span>
					<span class="my_websitetitle">
						Search Engine
					</span>
		      	</a>
		    </div>
		    <div class="navbar-collapse collapse">
		    	<form class="navbar-form navbar-right" role="">
				  	<div class="form-group">
				    	<input type="text" name="identifiant" class="form-control" placeholder="IDentifiant">

				    	<input type="password" name="password" class="form-control" placeholder="password">
				  	</div>
				  	<button type="submit" class="btn btn-primary">Submit</button>
				</form>
		    </div>
		</div>
	</div>

	<!-- Coeur jquery -->
	<script src="<?php echo base_url(); ?>assets/jquery/dist/jquery.min.js"></script>

	<!-- Coeur Angularjs -->
	<script src="<?php echo base_url(); ?>assets/angular/angular.min.js"></script>

	<!-- Coeur framework bootstrap -->
	<script src="<?php echo base_url(); ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- Autres plugins -->

</body>
</html>