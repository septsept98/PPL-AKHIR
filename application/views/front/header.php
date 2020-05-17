<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>CV. Welcome Camera</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/main.css" />
		<link href="<?= base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img src="<?= base_url(); ?>assets/frontend/images/logo.png" width="100px"></img><a class="logo"  href="#"> CV. Welcome Camera</a>
				<nav>
					<a href="<?= base_url('user/login'); ?>">Login</a>
				</nav>
				<nav>
					<a href="<?= base_url('user/register'); ?>">Register</a>
				</nav>
				<nav>
					<a href="<?= base_url('Login/logout'); ?>">Logout</a>
				</nav>
				<?php if ($this->session->userdata('is_logged_in')) { 
					echo '<b>Logged in as:</b> ' . $this->session->userdata('email');
					echo ' | ' . "<a href=" . site_url('user/logout') . ">Logout</a>";
				} else {
			?> 
			<?php } ?>
			</header>


		<!-- Nav -->
			

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<img src="<?= base_url(); ?>assets/frontend/images/welcome.png" width="150px">
					<h1>CV. Welcome Camera</h1>
				</div>
				<video autoplay loop muted playsinline src="<?= base_url(); ?>assets/frontend/images/banner.jpg"></video>
			</section>
			<br>

			<center><div>
        <a href="<?= base_url('barang'); ?>" class="btn btn-success btn-lg">Data barang</a>
        <a href="<?= base_url('stok'); ?>" class="btn btn-danger btn-lg">Data stok</a>
    </div></center>
    <br>