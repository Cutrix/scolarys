<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scolarys</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= css_url('app') ?>">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= base_url().'Acceuil' ?>">Scolarys</a>
		</div>
		<ul class="nav navbar-nav pull-right">
			<li><a href="<?= site_url('authentification') ?>" class="btn btn-default"><span class="connect">Connexion</span></a></li>
			<li><a href="<?= site_url('statistiques') ?>">Statistiques</a></li>
			<li><a href="<?= site_url('Publier/question') ?>">Publier</a></li>
			<li><a href="<?= site_url('configuration') ?>"><img src="<?= img_url('settings.svg') ?>" width="25px" height="25px"></a></li>
		</ul>
	</div>