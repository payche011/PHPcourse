<?php


// Definisanje osnovnih cena
$hrana_additional_price = 50;
$oprema_additional_price = 350;
$vat_rate = 10; // PDV je 10%

// Preuzimanje ulaznih vrednosti iz GET zahteva
$price = isset($_GET['price']) ? floatval($_GET['price']) : 0;
$option = isset($_GET['option']) ? $_GET['option'] : '';
$include_vat = isset($_GET['vat']); // Provera da li je PDV odabran

// Dodavanje cene u zavisnosti od izabrane opcije
if ($option === 'oprema') {
    $price += $oprema_additional_price;
} elseif ($option === 'hrana') {
    $price += $hrana_additional_price;
}

// Ako je PDV odabran, dodati PDV na ukupnu cenu
if ($include_vat) {
    $price += $price * ($vat_rate / 100);
}

echo $price; // Prikaz finalne cene






