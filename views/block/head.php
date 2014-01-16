<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title><?= $title ?></title>
		<meta name="description" content="<?= $description ?>">
		
		<!-- Иконка -->
		<link rel="shortcut icon" href="/media/img/favicon.png" type="image/png">

		<!-- Стили -->
		<link rel="stylesheet" href="/media/css/normalize.css">
		<link rel="stylesheet" href="/media/css/style.css">
		<? foreach ($style as $value) :?>
			<link rel="stylesheet" href="<?= $value ?>">
		<? endforeach; ?>

		<!-- Скрипты -->
		<script src="/media/js/jquery-1.10.2.min.js"></script>
		<script src="/media/js/main.js"></script>
		<? foreach ($script as $value) :?>
			<script src="<?= $value ?>"></script>
		<? endforeach; ?>
	</head>

	<body>
