<?php $this->setTitle('Home'); ?>

<section class="hero">
	<span class="hero-badge"><?= __('app.home.work') ?></span>
	<h1 class="hero-title">Welcome to <span class="hero-accent">SkankyDev</span></h1>
	<p class="hero-text">
		A small homemade PHP MVC framework, built to do CRUD on MongoDB
		without the headache, and focus on the business logic with peace of mind.
	</p>
	<div class="hero-actions">
		<a class="btn btn-primary" href="https://github.com/skankydev/framework">The framework</a>
		<a class="btn btn-secondary" href="https://github.com/skankydev/starter">This starter</a>
	</div>
</section>

<section class="features">
	<article class="card p-m">
		<h3>Convention first</h3>
		<p>
			<code>/persona/show/42</code> calls <code>PersonaController::show</code>.
			No route to write as long as you follow the conventions (and if you
			don't, you've got named routes).
		</p>
	</article>
	<article class="card p-m">
		<h3>MongoDB, natively</h3>
		<p>
			A Document for the value, a Collection to talk to the database.
			Typed, hydrated on their own, with relations and dirty tracking.
		</p>
	</article>
	<article class="card p-m">
		<h3>Craft does the work</h3>
		<p>
			A complete CRUD (document, collection, controller, form, views) is
			generated with a single command. All that's left is to adapt it.
		</p>
	</article>
</section>

<section class="steps">
	<h2>Getting started</h2>
	<ol>
		<li>
			Copy the config and set up your database: <code>.env.dist</code> → <code>.env</code>
		</li>
		<li>
			Start a development server, from the project root:
			<pre><code>php -S localhost:8000 -t public</code></pre>
		</li>
		<li>
			Generate your first CRUD:
			<pre><code>php craft crud-maker Article</code></pre>
		</li>
		<li>
			Open the home page you're reading right now:
			<code>src_front/view/home/index.php</code>. It's yours, replace it.
		</li>
	</ol>
</section>
