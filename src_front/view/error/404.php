<?php $this->setTitle('Page not found'); ?>
<section class="hero">
	<span class="hero-badge">Error 404</span>
	<h1 class="hero-title">Page not found</h1>
	<p class="hero-text">This page doesn't exist, or not anymore. It happens to the best of us.</p>
	<div class="hero-actions">
		<a class="btn btn-primary" href="<?= $this->url(['name' => 'home']) ?>">Back to home</a>
	</div>
</section>
