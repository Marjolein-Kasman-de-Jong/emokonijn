<?php

function createArrayOfRabbits() {
    $array_of_rabbits = array();
    $rabbit = new Rabbit;

    for ($i = 0; $i < 2; $i++) {
        $sub_array = array();
        
        for ($j = 0; $j < 15; $j++) {
            $instance_of_Rabbit = $rabbit->createRabbit();
            array_push($sub_array, $instance_of_Rabbit);
        }
        
        array_push($array_of_rabbits, $sub_array);
    }

    return $array_of_rabbits;
}