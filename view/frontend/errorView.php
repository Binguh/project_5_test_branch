<?php $title = 'Titre du site'; ?>

<?php ob_start(); ?>

<div class="message_erreur">
	<p>Erreur : <?= $errorMessage ?></p>
</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php require('view/template.php'); ?>