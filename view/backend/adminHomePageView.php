<?php 
	$title = 'Titre du site'; 
 	$description = 'description de la page'; 

 	include 'adminHeader.php'; 

 	ob_start(); 
?>

<section>
	
	<?php
		while ($gameData = $lastGamesList->fetch()) {
	?>
			<div>
				<h3><a href="index.php?action=goToGame&amp;id=<?= $gameData['id'] ?>"><?= $gameData['gameName']; ?></a></h3>
				<p><?= $gameData['gameCoopType']; ?></p>
				<p><?= $gameData['gameMaxPlayerNumber']; ?> Joueurs max</p>
				<p>Sortie le <?= $gameData['gameReleaseDateFr']; ?></p>
				<p><?= $gameData['gameMicroLoot']; ?></p>
				<p><?= $gameData['gamePrice']; ?> €</p>
				<p><a href="<?= $gameData['gameOfficialWebsite']; ?>"><?= $gameData['gameOfficialWebsite']; ?></a></p>
			</div>
	<?php
		}
	?>

</section>

<?php 
	$bodyContent = ob_get_clean();

	include 'adminFooter.php';

 	require 'view/template.php'; 
?>