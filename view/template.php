<!DOCTYPE html>
<html>

	<head>
		<title><?= $title; ?></title>
		<meta charset="utf-8">
		<meta name="description" content="<?= $description; ?>">
		<link rel="stylesheet" type="text/css" href="public\css\style.css">
		<link rel="stylesheet" type="text/css" href="public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>

	<body>

		<header>
			<?= $headerContent; ?>
		</header>

		<?= $bodyContent; ?>

		<footer>
			<?= $footerContent; ?>
		</footer>

	</body>

</html>