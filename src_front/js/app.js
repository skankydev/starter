"use strict";

// Ferme un message flash au clic (cf. part/flash.php).
window.remove = function(element) {
	if (element && element.parentNode) {
		element.parentNode.removeChild(element);
	}
};

// Ajoute automatiquement le token CSRF (header X-CSRF-Token) sur tous les fetch
// same-origin non-GET. Le token vient du <meta name="csrf-token"> du layout.
;(() => {
	const meta = document.querySelector('meta[name="csrf-token"]');
	if (!meta) return;
	const token = meta.getAttribute('content');
	const nativeFetch = window.fetch.bind(window);

	window.fetch = function (resource, options = {}) {
		const method = (options.method || 'GET').toUpperCase();
		const target = resource instanceof Request ? resource.url : resource;
		const sameOrigin = new URL(target, window.location.origin).origin === window.location.origin;

		if (sameOrigin && method !== 'GET' && method !== 'HEAD') {
			options.headers = { ...(options.headers || {}), 'X-CSRF-Token': token };
		}
		return nativeFetch(resource, options);
	};
})();

// Liens qui déclenchent un POST (ex. delete) : <a data-method="post" data-confirm="…">.
// Au clic, on construit et soumet un <form method=post> avec le token CSRF.
// Capture = true pour passer AVANT le handler des lignes cliquables.
document.addEventListener('click', (e) => {
	const link = e.target.closest('a[data-method]');
	if (!link) return;
	if ((link.dataset.method || '').toUpperCase() !== 'POST') return;

	e.preventDefault();
	e.stopPropagation();

	if (link.dataset.confirm && !confirm(link.dataset.confirm)) return;

	const form = document.createElement('form');
	form.method = 'POST';
	form.action = link.href;

	const meta = document.querySelector('meta[name="csrf-token"]');
	if (meta) {
		const input = document.createElement('input');
		input.type = 'hidden';
		input.name = '_token';
		input.value = meta.getAttribute('content');
		form.appendChild(input);
	}

	document.body.appendChild(form);
	form.submit();
}, true);

// Lignes de tableau cliquables (cf. part/table.php).
document.addEventListener('DOMContentLoaded', () => {
	document.querySelectorAll('.clickable-row').forEach(row => {
		row.addEventListener('click', function() {
			window.location.href = this.dataset.url;
		});
	});
});
