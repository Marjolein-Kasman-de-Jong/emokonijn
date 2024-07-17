<?php

function createTableOfEmotions()
{
    global $emotions;

    // Create empty line
    echo "<br>";

    // Create table
    echo "<table style='width: 30%; border-spacing: 10px; text-align: left;'>";

    // Create table caption
    echo "<caption style='margin-left: 10px; text-align: left; font-size: 20px; font-weight: bold;'>How often do emotions occur?</caption>";

    // Create table header
    echo "<thead>";
        echo "<tr>";
            echo "<th style='width: 50%;'>Emotion</th>";
            echo "<th>Total occurences</th>";
        echo "</tr>";
    echo "</thead>";

    foreach ($emotions as $key => $value) {
        // Create table rows
        echo "<tr>";

            // Create data cells
            echo "<td>$key</td>";
            echo "<td>$value</td>";

        echo "</tr>";
    }

    echo "</table>";
}