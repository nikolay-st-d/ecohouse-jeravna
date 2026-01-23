<?php
$lang = 'en';
$title = 'Gallery - Eco-house ZHERAVNA';
$description = 'Photo gallery of Eco-house ZHERAVNA in the historic village of Zheravna, Bulgaria.';
include 'includes/head.php';

$photos = [
	'eco-house-01.jpg' => 'Eco house Zheravna',
	'eco-house-02.jpg' => 'Eco house Zheravna',
	'eco-house-03.jpg' => 'Eco house Zheravna',
	'eco-house-04.jpg' => 'Eco house Zheravna',
	'eco-house-05.jpg' => 'Eco house Zheravna',
	'eco-house-06.jpg' => 'Eco house Zheravna',
	'eco-house-07.jpg' => 'Eco house Zheravna',
	'eco-house-08.jpg' => 'Eco house Zheravna',
	'eco-house-09.jpg' => 'Eco house Zheravna',
	'eco-house-10.jpg' => 'Eco house Zheravna',
	'eco-house-11.jpg' => 'Eco house Zheravna',
	'eco-house-12.jpg' => 'Eco house Zheravna',
	'eco-house-13.jpg' => 'Eco house Zheravna',
	'eco-house-14.jpg' => 'Eco house Zheravna',
	'eco-house-15.jpg' => 'Eco house Zheravna',
	'eco-house-16.jpg' => 'Eco house Zheravna',
	'eco-house-17.jpg' => 'Eco house Zheravna',
	'eco-house-18.jpg' => 'Eco house Zheravna',
	'eco-house-19.jpg' => 'Eco house Zheravna',
	'eco-house-20.jpg' => 'Eco house Zheravna',
	'eco-house-21.jpg' => 'Eco house Zheravna',
	'eco-house-22.jpg' => 'Eco house Zheravna',
	'eco-house-23.jpg' => 'Eco house Zheravna',
	'eco-house-24.jpg' => 'Eco house Zheravna',
	'eco-house-25.jpg' => 'Eco house Zheravna',
	'eco-house-26.jpg' => 'Eco house Zheravna',
	'eco-house-27.jpg' => 'Eco house Zheravna',
]
?>

<body>

	<?php include 'includes/header_' . $lang . '.php'; ?>

	<main>
		<h2>Gallery</h2>
		<p class="xsmall">Click a thumb to view the full size image, click the image or hit ESC to close it.</p>
		<div class="gallery-wrapper">
			<?php foreach ($photos as $filename => $alt): ?>
				<div class="gallery-thumb"><img src="photos/<?php echo $filename; ?>" alt="<?php echo $alt; ?>"></div>
			<?php endforeach; ?>
		</div>

		<p class="up-link"><a href="#" title="Up"><i class="fa-solid fa-angles-up"></i> up</a></p>
	</main>

	<?php include 'includes/footer_' . $lang . '.php'; ?>

	<div id="gallery-overlay"></div>

	<script src="js/gallery-1.0.js"></script>

</body>

</html>