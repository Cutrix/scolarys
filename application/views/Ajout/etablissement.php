<?php if (isset($success)): ?>
	<script type="text/javascript">alert('Ajout reussi')</script>
<?php endif ?>
<button class="btn bnt-default" onclick="window.history.back()">&larr;</button>
<h3>Ajouter l'etablissement</h3>
<div class="col-md-8">
	
	<form action="" method="post">
		<div class="field">
			<label for="" class="field-label">Etablissement</label>
			<input type="text" class="field-input" name="etablissement">
		</div>

		<div class="field">
			<label for="" class="field-label">Numero</label>
			<input type="text" class="field-input" name="numero">
		</div>
		<input type="submit" name="ok" class="btn btn-success" value="Ajouter">
	</form>
</div>