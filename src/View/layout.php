<?php
/**
 * @var string $content
 */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Задачки</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="/resources/css/style.css">
</head>
<body>
	<div class="position-absolute">
		<a href="/" class="navbar-brand">
			<img src="/resources/img/logo.png" alt="Логотип" width="100" height="100" class="img-fluid zoom" title="Вернуться на главную">
		</a>
	</div>
	<?= $content; ?>
</body>
</html>