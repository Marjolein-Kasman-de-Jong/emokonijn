<?php

function countEmotions() {
    global $rabbits, $emotions;

    foreach ($rabbits as $row) {
        foreach ($row as $item) {
            $emotions[$item["emotion_description"]]++; 
        }
    }
}