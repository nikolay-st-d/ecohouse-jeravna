<?php
$lang = 'en';
$title = 'Price list - Eco-house ZHERAVNA';
$description = 'Prices and conditions for staying at Eco-house ZHERAVNA, a guest house with authentic Bulgarian Revival architecture and atmosphere, located in the center of Zheravna.';
include 'includes/head.php';
?>

<body>

    <?php
    include 'includes/header_' . $lang . '.php';
    require 'includes/functions.php';
    ?>

    <main>
        <h2>Prices and Conditions</h2>

        <h3>Summer season:</h3>
        <p>May 07 - October 15</p>
        <ul>
            <li>double room - <?= displayPrice(40) ?></li>
            <li>tripple room - <?= displayPrice(58) ?></li>
            <li>all 13 beds - <?= displayPrice(250) ?></li>
        </ul>

        <h3>Winter season:</h3>
        <p>October 16 - May 6</p>
        <ul>
            <li>double room - <?= displayPrice(44) ?></li>
            <li>tripple room - <?= displayPrice(64) ?></li>
            <li>all 13 beds - <?= displayPrice(270) ?></li>
        </ul>

        <h3>Children and prolonged stays:</h3>
        <ul>
            <li>by arrangement</li>
        </ul>

        <h3>Accomodation conditions:</h3>
        <ul>
            <li>Accomodation: from 2.00 PM</li>
            <li>Leaving: till 11.30 AM</li>
        </ul>
        <fieldset class="fieldset">
            <legend>
                <h3>Special Offer</h3>
            </legend>
            <p>From May 7 to October 15, when you pay for more than 3 nights you get the one additional
                night for free. The offer is valid for the whole period apart from official
                holidays and the Festival of the Folklore Garb.</p>
        </fieldset>

        <img src="images/prices.jpg" alt="Eco house ZHERAVNA in winter">
    </main>

    <?php include 'includes/footer_' . $lang . '.php'; ?>

</body>

</html>