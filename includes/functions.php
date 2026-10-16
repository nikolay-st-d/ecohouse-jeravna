<?php

function displayPrice($eur)
{
	$price_eur = number_format(round($eur, 2), 2, '.', '');
	echo $price_eur . '€';
}