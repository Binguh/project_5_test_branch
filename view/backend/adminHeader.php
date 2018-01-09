<?php ob_start(); ?>
	
<div>
	<div id="logoutStripe">
		<div class="contentColumn">
			<p><a href="index.php?action=logout">DECONNEXION</a></p>
		</div>
	</div>
	<div id="nameStripe">
		<div class="contentColumn">
			<img src="" alt="logo">
			<h1>Nom du site</h1>
			<h2>Tagline</h2>
			<form action="index.php?action=searchGame" method="post">
				<div>
					<input type="search" name="searchGame" id="searchGame" placeholder="Rechercher un jeu">
					<button><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</form>
			<div id="menuStripe">
		<div class="contentColumn">
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="index.php?action=goToAddGame">Ajouter une fiche</a></li>
					<li><a href="">Modifier une fiche</a></li>
				</ul>
			</nav>
		</div>
	</div>
		</div>
	</div>
	
</div>

<?php $headerContent = ob_get_clean(); ?>