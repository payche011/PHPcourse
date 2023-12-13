<?php

// Napisati func koja racuna PDV
// Stopa PDV-a iznosi 22%
// echo "PDV iznosi XX%"
// Broj ne moze biti manji od 1

function calcVat($num)
{
    if (!is_numeric($num) || $num < 1) {
        return 'Broj mora biti numericka vrednost veća ili jednaka 1';
    }

    $vatAmount = $num * 0.22;
    return "PDV iznosi " . $vatAmount . " eur";
}

echo calcVat(100); // Ispisuje "PDV"


