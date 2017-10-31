<section class="container-fluid">
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

