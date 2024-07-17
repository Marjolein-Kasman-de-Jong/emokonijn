<?php

function createTableOfRabbits()
{
    global $rabbits, $emotions, $scores;

    // Create table
    echo "<table style='border-spacing: 10px; text-align: left;'>";
    
    foreach ($rabbits as $row) {
        // Create rabbit rows
        echo "<tr>";

        foreach ($row as $item) { 
            // Create rabbit cells
            echo "<td>";
                echo "<pre>";
                    echo "  " . $item["ears"]     . "  " . "\n";
                    echo "  " . $item["emotion"]  . "  " . "\n";
                    echo        $item["feet"]             . "\n";
                    echo "</pre>";
            echo "</td>";
        }

        echo "</tr>";
    }

    // Create score row
    echo "<tr>";

    foreach ($scores as $item) {
        // Create score cells
        echo "<td style='text-align: center;'>";
            echo $item === true ? "SCORE!" : "";
        echo "</td>";
    }

    echo "</tr>";

    echo "</table>";
}