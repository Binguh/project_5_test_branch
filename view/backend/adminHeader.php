<?php ob_start(); ?>
	
	<div>
		<div>
			<a href="index.php?action=logout">Déconnexion</a>
		</div>
		<div>
			<img src="" alt="logo">
			<h1>Titre du site</h1>
			<h2>Tagline</h2>
			<form action="index.php?action=searchGame" method="post">
				<div>
					<input type="search" name="searchGame" id="searchGame" placeholder="Rechercher un jeu">
					<button>loupe</button>
				</div>
			</form>
		</div>
		<div>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="index.php?action=goToAddGame">Ajouter une fiche</a></li>
					<li><a href="">Modifier une fiche</a></li>
				</ul>
			</nav>
		</div>
	</div>

<?php $headerContent = ob_get_clean(); ?>