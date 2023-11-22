<?php

// Zadatak 1

$ime = 'administrator';
$lozinka = 'mojaSifraJeSigurna';

$trazenoIme = 'adminiSTRATOR'; // test Ime


if (strcasecmp($ime, $trazenoIme) == 0 && $lozinka) {
    echo "Dobrodošao $ime";
} else {
    echo 'Vase ime ili lozinka su pogrešni.';
}

echo '<br>';

// Zadatak 2
// Rucno postavljeno vreme (primer)
$sati = 20; // Ovde možete postaviti bilo koje vreme koje želite proveriti

if ($sati >= 5 && $sati < 12) {
    echo "Jutro";
} elseif ($sati >= 12 && $sati < 20) {
    echo "Podne";
} elseif ($sati >= 20 || $sati < 5) {
    echo "Noć";
}
