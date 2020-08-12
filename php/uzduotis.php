<?php declare(strict_types=1);

$ceu = [
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Hungary" => "Budapest",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Austria" => "Vienna",
    "Poland" => "Warsaw",
];

function spausdinti(array $masyvas): void
{
    foreach ($masyvas as $key => $value) {
        echo "<span>$key sostine yra $value</span><br>";
    }
}

echo "a)<hr>";
spausdinti($ceu);

echo "b)<hr>";
ksort($ceu);
spausdinti($ceu);

echo "c)<hr>";
$x = 2;
foreach ($ceu as $vals => $sost) {
    if ($i % $x === 0) {
        $naujasMasyvas[$vals] = $sost;
    }
    $i++;
}
spausdinti($naujasMasyvas);

echo "d)<hr>";
$char = "A";
foreach ($ceu as $vals => $sost) {
    if (
        is_numeric(strpos($vals, $char))
        ||
        is_numeric(strpos($sost, $char))
    ) {
        $naujasMasyvas2[$vals] = $sost;
    }
}
spausdinti($naujasMasyvas2);

echo "e)<hr>";
$i = 0;
$masyvoIlgis = count($ceu);
foreach ($ceu as $vals => $sost) {
    if ($i < ceil($masyvoIlgis / 2)) {
        $A[$vals] = $sost;
    } else {
        $B[$vals] = $sost;
    }

    $i++;
}

function spausdintiSekcija(array $A): void
{
    echo "<section style='float: left'>";
    spausdinti($A);
    echo"</section>";
}

spausdintiSekcija($A);
spausdintiSekcija($B);
spausdintiSekcija($ceu);