<?php 
	$title = 'Titre du site'; 
 	$description = 'description de la page'; 

 	include 'adminHeader.php'; 

 	ob_start(); 
?>

<section class="blockPage" id="homePageTopSection">
	
	<?php
		while ($gameData = $lastGamesList->fetch()) {
	?>
			<div class="homePageGameSheet">
				<img src="<?= $gameData['pathToGameSheetImage']; ?>">
				<a href="index.php?action=goToGame&amp;id=<?= $gameData['id'] ?>">
					<div class="sheetLogo">
						<p><i class="fa fa-file-text-o" aria-hidden="true"></i></p>
					</div>
				</a>
				<div class="blockNameAndType">
				<h3><?= strtoupper($gameData['gameName']); ?></h3>
				<?php
					$coopType = array('localCoop' => 'Local', 'onlineCoop' => 'En ligne', 'localOrOnlineCoop' => 'Local ou en ligne', 'localAndOnlineCoop' => 'Local et en ligne');
				?>
				<p><?= $coopType[$gameData['gameCoopType']]; ?></p>
				<p><?= $gameData['gameMaxPlayerNumber']; ?> Joueurs max</p>
				</div>
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