<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scolarys</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= css_url('app') ?>">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand">Scolarys</a>
		</div>
		<ul class="nav navbar-nav pull-right">
			<li><a href="<?= site_url('authentification') ?>">Authentification</a></li>
			<li><a href="<?= site_url('statistiques') ?>">Statistiques</a></li>
			<li><a href="<?= site_url('configuration') ?>"><img src="<?= img_url('settings.svg') ?>" width="25px" height="25px"></a></li>
			<li><a href="<?= site_url('publier') ?>">Publier</a></li>
		</ul>
	</div>

	<div class="diapo">
		<?= img('african-students.jpg') ?>
	</div>
</body>
</html>