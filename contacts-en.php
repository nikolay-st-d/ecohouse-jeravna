<?php
$lang = 'en';
$title = 'Ecohouse ZHERAVNA - Book your stay';
$description = 'Book a room at Ecohouse Zheravna. Contact us for current prices and reservation details!';
include 'includes/head.php';
?>

<body>

	<?php include 'includes/header_' . $lang . '.php'; ?>

	<main>
		<h2>Book your stay</h2>

		<div class="contact"><a target="_blank" title="Телефон" href="tel:+359889672732"><i class="fa-solid fa-phone"></i> 0889 67 27 32</a></div>
		<p class="xsmall phone-link-text">Push the button to make a direct call</p>

		<div class="contact"><a target="_blank" title="WhatsApp" href="https://wa.me/359889672732"><i class="fa-brands fa-whatsapp"></i> 0889 67 27 32</a></div>
		<p class="xsmall">Push the button to call or chat via WhatsApp (if you have it installed on your device)</p>

		<img src="images/contacts.jpg" title="Contact" />
	</main>

	<?php include 'includes/footer_' . $lang . '.php'; ?>

</body>

</html>