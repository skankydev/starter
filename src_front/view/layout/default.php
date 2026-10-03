<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="<?= csrf_token() ?>" />
	<title>
		<?php
			if (\SkankyDev\Config\Config::get('debug')) {
				echo '[🐞] Dev - ';
			}
			$titre = $this->getTitle();
			if (!empty($titre)) {
				echo ucwords($titre.' - ');
			}
		?>SkankyDev
	</title>
	<?php
		$this->addMeta('description', 'Un projet SkankyDev');
		$this->addJs('/dist/app.js', 'module');
		$this->addCss('/dist/styles.css');
		echo $this->getHeader();
	?>
</head>
<body id="MainBody">
	<?= $this->part('part.header'); ?>
	<?= $this->part('part.flash'); ?>
	<main id="MainContainer">
		<?= $this->fetch('content'); ?>
	</main>
	<footer id="Footer">
		<?= $this->part('part.footer'); ?>
	</footer>
	<?= $this->getScript(); ?>
</body>
</html>
