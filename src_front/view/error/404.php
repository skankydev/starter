<?php $this->setTitle('Page introuvable'); ?>
<section class="hero">
	<span class="hero-badge">Erreur 404</span>
	<h1 class="hero-title">Page introuvable</h1>
	<p class="hero-text">Cette page n'existe pas, ou plus. Ça arrive aux meilleurs.</p>
	<div class="hero-actions">
		<a class="btn btn-primary" href="<?= $this->url(['name' => 'home']) ?>">Retour à l'accueil</a>
	</div>
</section>
