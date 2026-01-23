<?php
$lang = 'bg';
$title = 'Error 404 - Еко-къща ЖЕРАВНА';
$description = 'Error 404 - Страницата не е намерена в сайта на къща за гости Еко-къща Жеравна.';
include 'includes/head.php';
?>

<body>

	<?php include 'includes/header_' . $lang . '.php'; ?>

	<main>
		<h2>Error 404</h2>
		<p>Търсената от Вас страница не е намерена на сървъра.</p>
		<p>Моля, използвайте менюто, за да намерите търсената от Вас информация!</p>
		<img src="images/404.jpg" alt="Къща за гости еко-къща Жеравна през нощта">
	</main>

	<?php include 'includes/footer_' . $lang . '.php'; ?>

</body>

</html>