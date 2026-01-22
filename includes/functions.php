<?php

function displayPrice($eur)
{
	$price_eur = number_format(round($eur, 2), 2, '.', '');
	$price_bgn = number_format(round($eur * 1.95583, 2), 2, '.', '');
	echo $price_eur . '€ (' . $price_bgn . ' лв.)';
}