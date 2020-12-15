<?php

Class Speedometer
{
    public static function convertKmToMiles($i) {
        return $i . " km donnent " . number_format(($i / 1.609344), 2) . " miles !";
    }

    public static function convertMilesToKm($i) {
        return $i . " miles donnent " . number_format(($i * 1.609344), 2) . " km !";
    }
}