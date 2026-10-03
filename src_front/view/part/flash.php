<?php $flash = flash() ?? []; ?>

<?php if (!empty($flash)): ?>
<div class="flash-wrapper">
	<?php foreach ($flash as $v): ?>
	<div class="flash-message flash-<?= e($v['type']) ?>" onclick="remove(this)">
		<?= e($v['message']) ?>
	</div>
	<?php endforeach ?>
</div>
<?php endif ?>
