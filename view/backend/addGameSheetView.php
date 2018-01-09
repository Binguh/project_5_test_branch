<?php 
	$title = 'Titre du site';
	$description = 'description de la page';

	include 'adminHeader.php';

	ob_start(); 
?>

<section>
	<form action="index.php?action=addGameSheet" method="post">
		<div>
			<input type="text" name="name" id="gameName" placeholder="Nom du jeu">
			<label for="gameName">Nom du jeu</label>
		</div>
		<div>
			<fieldset>
  				<legend>Type de coop</legend>
				<div>
					<input type="checkbox" id="localCoop" name="coopType" value="localCoop">
					<label for="localCoop">Local</label>
				</div>
				<div>
					<input type="checkbox" id="onlineCoop" name="coopType" value="onlineCoop">
					<label for="onlineCoop">En ligne</label>
				</div>
				<div>
					<input type="checkbox" id="localOrOnlineCoop" name="coopType" value="localOrOnlineCoop">
					<label for="localOrOnlineCoop">Local ou en ligne</label>
				</div>
				<div>
					<input type="checkbox" id="localAndOnlineCoop" name="coopType" value="localAndOnlineCoop">
					<label for="localAndOnlineCoop">Local et en ligne</label>
				</div>
			</fieldset>
		</div>
		<div>
			<fieldset>
				<legend>Microtransaction</legend>
				<div>
					<input type="checkbox" id="lootbox" name="microLoot" value="lootbox">
					<label for="lootbox">Lootbox</label>
				</div>
				<div>
					<input type="checkbox" id="microtransaction" name="microLoot" value="microtransaction">
					<label for="microtransaction">Microtransaction</label>
				</div>
				<div>
					<input type="checkbox" id="lootboxAndMicro" name="microLoot" value="lootboxAndMicro">
					<label for="lootboxAndMicro">Lootbox et microtransaction</label>
				</div>
			</fieldset>
		</div>
		<div>
			<input type="number" name="minPlayerNumber" id="gameMinPlayerNumber" value="2">
			<label for="gameMinPlayerNumber">Nombre minimum de joueurs</label>
		</div>
		<div>
			<input type="number" name="maxPlayerNumber" id="gameMaxPlayerNumber">
			<label for="gameMaxPlayerNumber">Nombre maximum de joueurs</label>
		</div>
		<div>
			<input type="date" name="releaseDate" id="gameReleaseDate">
			<label for="gameReleaseDate">Date de sortie</label>
		</div>
		<div>
			<input type="number" name="price" id="gamePrice">
			<label for="gamePrice">Prix</label>
		</div>
		<div>
			<input type="text" name="officialWebsite" id="gameOfficialWebsite">
			<label for="gameOfficialWebsite">Site officiel</label>
		</div>
		<div>
			<button>Ajouter</button>
		</div>
	</form>
</section>

<?php 
	$bodyContent = ob_get_clean();

	include 'adminFooter.php';

	require 'view/template.php'; 
?>