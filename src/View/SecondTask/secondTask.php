<?php
/**
 * @var array $csvData
 * @var bool $isSuccess
 */

?>

<?php if ((bool)$isSuccess === true): ?>
	<div class="alert alert-success" role="alert">
		Ваш файл успешно отправлен!
	</div>
<?php endif; ?>

<?php if ((bool)$isSuccess === false && $isSuccess !== NULL): ?>
	<div class="alert alert-danger" role="alert">
		Ошибка! Что-то пошло не так.
	</div>
<?php endif; ?>

<div class="container mt-5">
	<h2>Отправьте свой csv файл</h2>
	<form enctype="multipart/form-data" action="/task2/remember" method="post">
		<div class="mb-3">
			<input type="file" class="form-control" name="files" required>
		</div>
		<button type="submit" class="btn btn-primary">Отправить</button>
	</form>
</div>

<br>

<div class="container">
	<table class="table table-striped table-hover">
		<?php foreach ($csvData as $row): ?>
			<tr>
				<?php foreach ($row as $cell): ?>
					<td>
						<?= $cell; ?>
					</td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</table>
</div>