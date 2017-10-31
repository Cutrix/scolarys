<a href="<?= site_url('configuration/email') ?>">Changer d'email</a><br>
<a href="<?= site_url('configuration/pwd') ?>">Changer son mot de passe</a><br>
<?php if (($this->session->userdata('statut')) === "su"): ?>
	<a href="<?= site_url('configuration/set_dpwd') ?>">Definir mot de passe par defaut</a>
<?php endif ?>