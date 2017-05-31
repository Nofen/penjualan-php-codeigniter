<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Online</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	<style type="text/css">
		div{
			text-align: left;
			padding: 10px;
			color: black;
		}
		.header{
			padding: 0px;
			height: 100px;
			margin-bottom: 2px;
		}
		.konten{
			min-height: 300px;
		}
		.sidebar{
			height: 300px;
		}
		.footer{
			padding: 20px;
			background-color: #E5E5E5;
		}
		.info{
			font-size: 8pt;
		}
		.jarak{
			font-size: 10pt;
			padding: 20px 10px;			
		}
		.harga{
			font-weight: bold;
			font-size: 12pt;
			color: #F7931E;
		}
		.judul{
			font-weight: bold;
			font-size: 20pt;
			color: black;
		}
		.kolom{
			padding: 20px;
		}
		.katalog{
			margin: 5px 8px;
			text-align: center;
		/*	background-color: red; */
		}
		a:hover{
			color: blue;
			text-decoration: none;

		}
		.katalog:hover img{
    	border: 1px solid blue;
}
	</style>
</head>
<body>

	<div class="col-md-12 col-sm-12 col-xs-12 header">
		<nav class="navbar navbar-default">
	      <div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">Toko Online</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
					<span class="glyphicon glyphicon-log-in"></span> Login</a>
					<div class="dropdown-menu">
						<div class="form-group">
						  <form action="#" method="post">
							<label for="username">Username :</label>
							<input type="text" name="username" class="form-control" required> 
							<label for="username">Password :</label>
							<input type="password" name="password" class="form-control" required> <hr/>
							<input type="submit" class="btn btn-primary" value="Login">
				  		  </form>
						</div>
					</div>
				</li>
				<li><a href="<?php echo base_url().'index.php/member'; ?>"><span class="glyphicon glyphicon-user"></span>Daftar </a></li>
			</ul>
	  	  </div>
		</nav>
	</div>
	<div class="col-md-9 col-sm-8 col-xs-12 konten">