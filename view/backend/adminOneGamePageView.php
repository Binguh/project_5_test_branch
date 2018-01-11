<?php 
	$title = 'Titre du site'; 
 	$description = 'description de la page'; 

 	include 'adminHeader.php'; 

 	ob_start(); 
?>

<section class="blockPage" id="oneGamePageTopSection">
	<div id="gameInformationBlock">
		<div id="gameNameBlock">
			<p><?= $oneGameSheet['gameName']; ?></p>
		</div>
		<div>
			<?php
				$coopType = array('localCoop' => 'Local', 'onlineCoop' => 'En ligne', 'localOrOnlineCoop' => 'Local ou en ligne', 'localAndOnlineCoop' => 'Local et en ligne');
			?>
			<p><?= $coopType[$oneGameSheet['gameCoopType']]; ?></p>
			<p><?= $oneGameSheet['gameMicroLoot']; ?></p>
			<p><?= $oneGameSheet['gameMaxPlayerNumber']; ?></p>
		</div>
	</div>
	<div id="moreGameInformationBlock">
		<div id="moreGameInformationImageBlock" style="background-image: url(<?= $oneGameSheet['pathToGameSheetImage']; ?>);">
			
		</div>
		<div>
			<p><a href="<?= $oneGameSheet['gameOfficialWebsite']; ?>">Site officiel</a></p>
			<p>Sortie : <?= $oneGameSheet['gameReleaseDateFr']; ?></p>
			<p><?= $oneGameSheet['gamePrice']; ?>€</p>
		</div>
	</div>	
</section>

<?php 
	$bodyContent = ob_get_clean();

	include 'adminFooter.php';

 	require 'view/template.php'; 
?>