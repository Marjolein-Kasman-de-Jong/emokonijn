<?php

// Imports
foreach ([
        "classes/ascii_rabbit.php",
        "functions/create_array_of_rabbits.php",
        "functions/count_emotions.php",
        "functions/handle_matches.php",
        "functions/create_table_of_rabbits.php",
        "functions/create_table_of_emotions.php",
        "functions/create_table_of_matches.php",
        "functions/write_to_file.php"
    ] as $file) {
    include_once $file;
}

// Array of rabbits
$rabbits = createArrayOfRabbits();

// Array of scores
$scores = array();

// Counters
$emotions = array(
    "happy" => 0,
    "surprised" => 0,
    "angry" => 0,
    "disappointed" => 0,
    "questioning" => 0,
    "reflective" => 0
);

$matches = array(
    "happy" => 0,
    "surprised" => 0,
    "angry" => 0,
    "disappointed" => 0,
    "questioning" => 0,
    "reflective" => 0
);

// Program flow
countEmotions();
handleMatches();
createTableOfRabbits();
createTableOfEmotions();
createTableOfMatches();
writeToFile();