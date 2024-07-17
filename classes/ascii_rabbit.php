<?php
class Rabbit {
    public $ears = "()_()";
    public $emotion;
    public $emotionDescription;
    public $feet = "(\"\") (\"\")";

    public function generateEmotion() {
        $emotions = array(
            "happy" => "(^.^)",
            "surprised" => "(o.o)",
            "angry" => "(@.@)",
            "disappointed" => "(>.<)",
            "questioning" => "(?.?)",
            "reflective" => "(&.&)"
        );

        $randomEmotion = array_rand($emotions);
        $this->emotionDescription = $randomEmotion;
        return $emotions[$randomEmotion];
    }

    public function createRabbit() {
        // Get emotion
        $this->emotion = $this->generateEmotion();
        
        // Return rabbit
        $created_rabbit = array(
            "ears" => $this->ears,
            "emotion" => $this->emotion,
            "emotion_description" => $this->emotionDescription,
            "feet" => $this->feet
        );

        return $created_rabbit;
    }
}