<?php
/**
 * @var bool $isSuccess
 */
?>

<?php if ((bool)$isSuccess === true): ?>
<div class="alert alert-success" role="alert">
	Ваше сообщение успешно отправлено!
</div>
<?php endif; ?>

<?php if ((bool)$isSuccess === false && $isSuccess !== NULL): ?>
<div class="alert alert-danger" role="alert">
	Ошибка! Что-то пошло не так.
</div>
<?php endif; ?>

<div class="container mt-5">
	<h2>Форма обратной связи</h2>
	<form enctype="multipart/form-data" action="/task1/remember" method="post" >
		<div class="mb-3">
			<label for="name" class="form-label">ФИО <span class="text-danger">*</span></label>
			<input type="text" class="form-control" name="name" required>
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email <span class="text-danger">*</span></label>
			<input type="email" class="form-control" name="email" required>
		</div>
		<div class="mb-3">
			<label for="message" class="form-label">Сообщение <span class="text-danger">*</span></label>
			<textarea class="form-control" name="message" rows="4" required></textarea>
		</div>
		<div class="mb-3">
			<label for="files" class="form-label">Загрузите свою фотографию</label>
			<input type="file" class="form-control" name="files">
		</div>
		<button type="submit" class="btn btn-primary">Отправить</button>
	</form>
</div>