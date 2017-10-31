<?php if (isset($success)): ?>
	<script type="text/javascript">alert('Ajout reussi')</script>
<?php endif ?>
<button class="btn bnt-default" onclick="window.history.back()">&larr;</button>
<h4>Ajouter un professeur</h4>
<form method="post" class="col-md-6 col-md-offset-1" action="">
	<div class="field">
		<label for="" class="field-label">Nom du professeur</label>
		<input type="text" class="field-input" name="nom">
		<small><?= form_error('email') ?></small>
	</div>
	
	<div class="field">
		<label for="" class="field-label">Prenom du professeur</label>
		<input type="text" class="field-input" name="prenom">
		<small><?= form_error('mdp') ?></small>
	</div>

	<div>
		<label for="">Matiere</label>
		<select name="subj" id="">
			<?php foreach ($matieres as $matiere): ?>
				<option value="<?= $matiere->matiereText ?>"><?= $matiere->matiereText ?></option>
			<?php endforeach ?>
		</select>
	</div>

	<div>
		<label for="">Etablissement</label>
		<select name="etablissement" id="">
			<?php foreach ($etablissements as $etablissement): ?>
				<option value="<?= $etablissement->etablissementText ?>"> <?= $etablissement->etablissementText ?></option>
			<?php endforeach ?>
		</select>
	</div>

	<div class="field"><label for="" class="field-label">Email du professeur</label><input type="text" class="field-input" name="email"></div>

	<input type="submit" name="ajouter" value="Ajouter le professeur" class="btn btn-success">
	
</form>