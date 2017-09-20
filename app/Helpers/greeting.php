<?php

    function greeting(){
        $currentTime = (int) date('H');
        if ($currentTime >= 0 && $currentTime < 6){
            $greetings = 'Доброй ночи!';
        }
        elseif ($currentTime >= 6 && $currentTime <= 12){
            $greetings = 'Доброе утро!';
        }
        elseif ($currentTime <= 18){
            $greetings = 'Добрый день!';
        }
        else {
            $greetings = 'Добрый вечер!';
        }
        return $greetings;
    }