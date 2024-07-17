<?php

function handleMatches() {
    global $rabbits, $matches, $scores;

    for ($i = 0; $i < count($rabbits[0]); $i++) {
        if ($rabbits[0][$i] === $rabbits[1][$i]) {
            $matches[$rabbits[0][$i]["emotion_description"]]++;
            array_push($scores, true);
        } else {
            array_push($scores, false);
        }
    }
}