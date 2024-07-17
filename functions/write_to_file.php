<?php

function writeToFile() {
    global $emotions, $matches;

    foreach ($emotions as $emotion => $occurrences) {
        $text_to_write = "$emotion => total occurrences: $occurrences matches: $matches[$emotion]\n";
        
        $fh = fopen("scores/$emotion.txt", "a") or die("Failed to create file");
        
        fseek($fh, 0, SEEK_END);
        fwrite($fh, $text_to_write) or die("Could not write to file");
        fclose($fh);
    }
}