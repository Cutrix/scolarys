<?php if (isset($success) && ($success)): ?>
	<script type="text/javascript">alert('Mot de passe change avec success')</script>
<?php endif ?>
<form method="post">
	<div class="col-md-6">
		<h4>Changer de mot de passe</h4>
		<small class="error"><?= $error ?? '' ?></small>
		<div class="field">
			<label for="" class="field-label">Ancien mot de passe</label>
			<input type="password" class="field-input" name="pwdold">
		</div>

		<div class="field">
			<label for="" class="field-label">Nouveau mot de passe</label>
			<input type="password" class="field-input" name="pwdnew">
		</div>

		<div class="field">
			<label for="" class="field-label">Resaisir nouveau mot de passe</label>
			<input type="password" class="field-input" name="rpwdnew">
		</div>
		<input type="submit" name="changer" class="btn btn-success" value="changer le mot de passe">
	</div>
</form>