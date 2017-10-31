<?php if (isset($success) && ($success)): ?>
	<script type="text/javascript">alert('Mot de passe reinitialise')</script>
<?php endif ?>

<div class="col-md-6">
	<small class="error"><?= $error ?? '' ?></small>
	<form method="post">
		<div class="field">
			<label for="" class="field-label">Email du prof</label>
			<input type="text" class="field-input" name="email">
		</div>
		<input type="submit" name="reinit" value="Reinitialiser mot de passe" class="btn btn-success">
	</form>
</div>