<?php




function calcDistance($city, $basePrice) {

    $cities = [
        "Subotica" => 220, // Kilometraza grada od Beograda
        "Pancevo" => 10,
        "Sarajevo" => 292,
        "Split" => 799
    ];

    if (!array_key_exists($city, $cities)) {
        echo "Grad '{$city}' nije dostupan za dostavu.\n";
        return;
    }

    $distance = $cities[$city]; // Vraca value

    if ($distance <= 100) {
        $deliveryPrice = 200;
        $basePrice += $deliveryPrice; // Dodajemo 200 dinara na početnu cenu za udaljenosti do 100km
    } elseif ($distance <= 200) {
        $deliveryPrice = 350;
        $basePrice += $deliveryPrice; // Dodajemo 350 dinara na početnu cenu za udaljenosti od 101 do 200km
    } else {
        $deliveryPrice = 500;
        $basePrice += $deliveryPrice; // Dodajemo 500 dinara na početnu cenu za udaljenosti preko 200km
    }

    echo "Rastojanje {$city} - Beograd je {$distance} km, dostava je {$deliveryPrice} din. Ukupna cena sa dostavom je {$basePrice}din";
}

calcDistance('Pancevo', 2000); // Poziv funkcije za računanje

