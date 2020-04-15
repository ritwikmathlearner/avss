<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>animals">AVSS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Aniamals
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?php echo base_url(); ?>animals">LIST OF ANIMALS</a>
					<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url(); ?>animals/count">ANIMAL COUNT</a>
					</div>
				</li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>conditions">CONDITIONS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>owners">OWNERS</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					TRAINEES
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="<?php echo base_url(); ?>trainees">LIST OF TRAINEES</a>
					<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url(); ?>trainees/count">VETERINARY COUNT</a>
					</div>
				</li>
				<li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>lessons">LESSONS</a>
                </li>
				<li class="nav-item">
					<?php if(empty($this->session->userdata('username'))) : ?>
						<a class="nav-link" href="<?php echo base_url(); ?>users/login">LOGIN</a>
					<?php else : ?>
						<a class="nav-link" href="<?php echo base_url(); ?>users/logout">LOGOUT</a>
					<?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container p-3">
