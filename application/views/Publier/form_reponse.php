<!--$baxkQ[0]['qestionText']-->

<form method="post">
<div class="col-md-8">
		<h3><?= $qB[0]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r1', 'r2', 'r3', 'q1', 'r1', 'q1', 'r2', 'q1', 'r3'); ?>

		<h3><?= $qB[1]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r4', 'r5', 'r6', 'q2', 'r4', 'q2', 'r5', 'q2', 'r6'); ?>

		<h3><?= $qB[2]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r7', 'r8', 'r9', 'q3', 'r7', 'q3', 'r8', 'q3', 'r9'); ?>

		<h3><?= $qB[3]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r10', 'r11', 'r12', 'q4', 'r10', 'q4', 'r11', 'q4', 'r12'); ?>

		<h3><?= $qB[4]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r13', 'r14', 'r15', 'q5', 'r13', 'q5', 'r14', 'q5', 'r15'); ?>

		<h3><?= $qB[5]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r16', 'r17', 'r18', 'q6', 'r16', 'q6', 'r17', 'q6', 'r18'); ?>

		<h3><?= $qB[6]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r19', 'r20', 'r21', 'q7', 'r19', 'q7', 'r20', 'q7', 'r21'); ?>

		<h3><?= $qB[7]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r22', 'r23', 'r24', 'q8', 'r22', 'q8', 'r24', 'q8', 'r24'); ?>

		<h3><?= $qB[8]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r25', 'r26', 'r27', 'q9', 'r25', 'q9', 'r26', 'q9', 'r27'); ?>

		<h3><?= $qB[9]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r28', 'r29', 'r30', 'q10', 'r28', 'q10', 'r29', 'q10', 'r30'); ?>

		<h3><?= $qB[10]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r31', 'r32', 'r33', 'q11', 'r31', 'q11', 'r32', 'q11', 'r33'); ?>

		<h3><?= $qB[11]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r34', 'r35', 'r36', 'q12', 'r34', 'q12', 'r35', 'q12', 'r36'); ?>

		<h3><?= $qB[12]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r37', 'r38', 'r39', 'q13', 'r37', 'q13', 'r38', 'q13', 'r39'); ?><h3>

		<h3><?= $qB[13]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r40', 'r41', 'r42', 'q14', 'r40', 'q14', 'r41', 'q14', 'r42'); ?>

		<h3><?= $qB[14]['qestionText'] ?? 'Pas de question' ?></h3>
		<?= propositions('r43', 'r44', 'r45', 'q15', 'r43', 'q15', 'r44', 'q15', 'r45'); ?> <br>

		<input type="submit" name="enr" value="Enregistrer les reponses" class="btn btn-success pull-right">
	
</div>
</form>

