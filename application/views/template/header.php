<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assetss/style.css">
    <title>My Movie</title>
  </head>

  <body>  	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-3">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url();?>"><img src="<?= base_url();?>assetss/img/logo3.png" width="150"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav ml-auto">
					<a class="nav-item nav-link active" href="<?= base_url();?>">HOME </a>
					<a class="nav-item nav-link active" href="<?= base_url();?>Welcome/populer">POPULAR </a>
					<a class="nav-item nav-link active" href="<?= base_url();?>Welcome/upcoming">UPCOMING </a>
					<a class="nav-item nav-link active" href="<?= base_url();?>Welcome/nowplaying">NOW PLAYING </a>
					<a class="nav-item nav-link active" href="<?= base_url();?>Welcome/toprated">TOP RATED </a>
				</div>
			</div>
		</div>
	</nav>
<hr>