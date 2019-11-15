<?php

  $opslag  = array();

    echo "Hoeveel landen wil je toevoegen?".PHP_EOL;
    $input = readline();
    if (is_numeric($input))
    {
    for ($i = 0; $i < ($input); $i++)
    {
        echo "Hoe heet het land?".PHP_EOL;
        $land = readline();
        echo "Wat is de hoofdstad van $land?".PHP_EOL;
        $hoofdstad = readline();
        $opslag[$land] = $hoofdstad;
    }
    echo "De landen en hoofdsteden in de database zijn:".PHP_EOL;
    foreach ($opslag as $land => $hoofdstad) {
        echo "$land, $hoofdstad".PHP_EOL;
    }
}