<?php $this->setTitle('Accueil'); ?>

<section class="hero">
	<span class="hero-badge">Ça tourne. Bravo.</span>
	<h1 class="hero-title">Bienvenue dans <span class="hero-accent">SkankyDev</span></h1>
	<p class="hero-text">
		Un petit framework PHP MVC maison, pensé pour faire du CRUD sur MongoDB
		sans se prendre la tête, et se concentrer sur la logique métier l'esprit tranquille.
	</p>
	<div class="hero-actions">
		<a class="btn btn-primary" href="https://github.com/skankydev/framework">Le framework</a>
		<a class="btn btn-secondary" href="https://github.com/skankydev/starter">Ce starter</a>
	</div>
</section>

<section class="features">
	<article class="card p-m">
		<h3>La convention d'abord</h3>
		<p>
			<code>/persona/show/42</code> appelle <code>PersonaController::show</code>.
			Pas de route à écrire tant que tu respectes les conventions (et si tu
			ne les respectes pas, t'as les routes nommées).
		</p>
	</article>
	<article class="card p-m">
		<h3>MongoDB, nativement</h3>
		<p>
			Un Document pour la valeur, une Collection pour parler à la base.
			Typés, hydratés tout seuls, avec les relations et un dirty tracking.
		</p>
	</article>
	<article class="card p-m">
		<h3>Craft fait le boulot</h3>
		<p>
			Un CRUD complet (document, collection, controller, form, vues) se
			génère en une commande. Tu n'as plus qu'à l'adapter.
		</p>
	</article>
</section>

<section class="steps">
	<h2>Pour démarrer</h2>
	<ol>
		<li>
			Copie la config et règle ta base : <code>.env.dist</code> → <code>.env</code>
		</li>
		<li>
			Génère ton premier CRUD :
			<pre><code>php craft crud-maker</code></pre>
		</li>
		<li>
			Ouvre la page d'accueil que tu es en train de lire :
			<code>src_front/view/home/index.php</code>. Elle est à toi, remplace-la.
		</li>
	</ol>
</section>
