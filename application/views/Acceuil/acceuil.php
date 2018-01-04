<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="<?= base_url().'Acceuil' ?>">Scolarys</a>
    </div>
    <ul class="nav navbar-nav pull-right">
        <li><a href="<?= site_url('authentification/connexion')?>" class="btn btn-default"><span class="connect">Connexion</span></a></li>
        
    </ul>
</div>
<section class="container-fluid col-md-9 col-md-offset-1 row">
	<div class="carousel slide" id="carousel" data-ride="carousel">
		<!-- carousel -->
		<ol class="carousel-indicators">
			<li data-target="#carousel" data-slide-to="0" class="active"></li>
			<li data-target="#carousel" data-slide-to="1"></li>
			<li data-target="#carousel" data-slide-to="2"></li>
			<li data-target="#carousel" data-slide-to="3"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<?= img('carousel/african-studentsm.jpg') ?>
			</div>
			<div class="item">
				<?= img('carousel/primarym.jpg') ?>
			</div>

			<div class="item">
				<?= img('carousel/primmairem.jpg') ?>
			</div>

			<div class="item">
				<?= img('carousel/secondairem.jpg') ?>
			</div>

		</div>
		<!-- controls -->
		<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Précédent</span>
		</a>

		<a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Suivant</span>
		 </a>
	</div>
</section>

