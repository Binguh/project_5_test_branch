<?php $title = 'Titre du site'; ?>

<?php include 'adminHeader.php'; ?>

<?php ob_start(); ?>

	<div>
		
		<?php
			while ($gameData = $lastGamesList->fetch()) {
		?>
				<div>
					<p><?= $gameData['gameName']; ?></p>
				</div>
		<?php
			}
		?>
	</div>

<?php $bodyContent = ob_get_clean(); ?>

<?php include 'adminFooter.php'; ?>

<?php require 'view/template.php'; ?>