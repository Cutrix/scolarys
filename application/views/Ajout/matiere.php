<?php if (isset($success)): ?>
	<script type="text/javascript">alert('Ajout reussie')</script>
<?php endif ?>
<h3>Ajouter l'etablissement</h3>
<div class="col-md-8">
	
	<form action="" method="post">
		<div class="field">
			<label for="" class="field-label">Matiere</label>
			<input type="text" class="field-input" name="matiere">
		</div>		
		<input type="submit" name="ok" class="btn btn-success" value="Ajouter">
	</form>
</div>