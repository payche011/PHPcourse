<?php


// Ime ne sme biti manje od 3 karaktera
// Bonus: Array sa definisanim imenima [ Toma , Petar , Marko ], proveriti da li postoji korisnik
// Provera da ime moze uneti i "tOmA"

$name = $_POST['username'];
$nameSet = isset($name);
$namesArray = ['Toma', 'Petar', 'Marko']; // Imena sa velikim početnim slovom

if(!$nameSet || strlen($name) < 3) {
    die('Ime nije prosledjeno ili je ime manje od 3 karaktera');
}
    $nameLower = strtolower($name); // Konvertovanje unetog imena u mala slova
    $lowercaseNamesArray = array_map('strtolower', $namesArray); // Konvertovanje imena u nizu u mala slova

    if(in_array($nameLower, $lowercaseNamesArray)) {
        die('Korisnik vec postoji, molim vas probajte drugo ime!');
    }

echo $name;

