<form method="post" class="col-md-6 col-md-offset-1" action="">
	<div class="field">
		<label for="" class="field-label">Email</label>
		<input type="email" class="field-input" name="email">
		<small><?= form_error('email') ?></small>
	</div>
	
	<div class="field">
		<label for="" class="field-label">Mot de passe</label>
		<input type="password" class="field-input" name="pwd">
		<small><?= form_error('mdp') ?></small>
	</div>

	<input type="submit" class="btn btn-success" value="connexion" name="connexion">
</form>