<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scolarys</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login Page - Ace Admin</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= css_url('app') ?>">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link rel="stylesheet" href="<?= css_url('font-awesome.min') ?>">
    <link rel="stylesheet" href="<?= css_url('fonts.googleapis.com') ?>">
    <link rel="stylesheet" href="<?= css_url('ace.min') ?>">
    <link rel="stylesheet" href="<?= css_url('ace-part2.min') ?>">
    <link rel="stylesheet" href="<?= css_url('ace-rtl.min')  ?>">
    <link rel="stylesheet" href="<?= css_url('ace-ie.min') ?>">
    <link rel="stylesheet" href="<?= css_url('jquery-ui.custom.min') ?>">
    <link rel="stylesheet" href="<?= css_url('jquery.gritter.min') ?>">
    <link rel="stylesheet" href="<?= css_url('select2.min') ?>">
    <link rel="stylesheet" href="<?= css_url('bootstrap-datepicker3.min') ?>">
    <link rel="stylesheet" href="<?= css_url('bootstrap-editable.min') ?>">
    <link rel="stylesheet" href="<?= css_url('ace-skins.min') ?>">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= js_url('app') ?>"></script>
	<script type="text/javascript" src="<?= js_url('jquery.gritter.min') ?>"></script>
    <script src="<?=  js_url('html5shiv.min') ?>"></script>
    <script src="<?=  js_url('respond.min') ?>"></script>
    <script src="<?=  js_url('ace-elements.min') ?>"></script>
    <script src="<?=  js_url('jquery.maskedinput.min') ?>"></script>
    <script src="<?=  js_url('ace-editable.min') ?>"></script>
    <script src="<?=  js_url('bootstrap-editable.min') ?>"></script>
    <script src="<?=  js_url('spinbox.min') ?>"></script>
    <script src="<?=  js_url('select2.min') ?>"></script>
    <script src="<?=  js_url('jquery.hotkeys.index.min') ?>"></script>
    <script src="<?=  js_url('ace.min') ?>"></script>

</head>
<body>







	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= base_url().'Acceuil' ?>">Scolarys</a>
		</div>
		<ul class="nav navbar-nav pull-right">
			<li><a href="<?= site_url('authentification/connexion')?>" class="btn btn-default"><span class="connect">Connexion</span></a></li>			            
	        <?php if ($this->session->userdata('statut') === "su" ): ?>	
					<li><a href="<?= site_url('statistiques') ?>">Statistiques</a></li>
					<li><a href="<?= site_url('Ajout') ?>"><span class="plus"></span>Ajouter</a></li>
					<li><a href="<?= site_url('Voir') ?>">Voir les notes</a></li>
					<li><a href="<?= site_url('Deconnexion') ?>">Deconnexion</a></li>				
					<li><a href="<?= site_url('configuration') ?>"><img src="<?= img_url('settings.svg') ?>" width="25px" height="25px"></a></li>				
			<?php endif ?>

			<?php if ($this->session->userdata('statut') === "prof" ): ?>	
					<li><a href="<?= site_url('statistiques') ?>">Statistiques</a></li>					
					<li><a href="<?= site_url('Voir') ?>">Voir les notes</a></li>
					<li><a href="<?= site_url('Publier/question') ?>">Publier</a></li>
					<li><a href="<?= site_url('Deconnexion') ?>">Deconnexion</a></li>				
					<li><a href="<?= site_url('configuration') ?>"><img src="<?= img_url('settings.svg') ?>" width="25px" height="25px"></a></li>				
			<?php endif ?>				

			<?php if ($this->session->userdata('statut') === "parent" ): ?>						
					<li><a href="<?= site_url('Voir') ?>">Voir les notes</a></li>
					<li><a href="<?= site_url('Deconnexion') ?>">Deconnexion</a></li>				
					<li><a href="<?= site_url('configuration') ?>"><img src="<?= img_url('settings.svg') ?>" width="25px" height="25px"></a></li>				
			<?php endif ?>		
		</ul>
	</div>
