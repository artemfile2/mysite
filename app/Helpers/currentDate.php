<?php

function currentDate($date){
    if (empty($date)){
        return null;
    }
    if (strpos($date, '.') !== false) {
        $divider = '.';
    } else if (strpos($date, '-') !== false) {
        $divider = '-';
    } else if (strpos($date, '/') !== false) {
        $divider = '/';
    }


        $type = explode(' ', $date)[0];

        $date = str_replace($divider, ".", $type);

        $date = reverseDate($type);  // format DD/MM/YYYY

    return $date;
}

function reverseDate($date) {

    $date = implode(".", array_reverse(preg_split("/\D/", $date)));

    return $date;
}