<?php 
class Speedometer {
    const convert = 0.621371;
    public static function convertKmToMiles($km)
    {
         $miles = $km * self::convert;
         return round($miles, 2);
    }
    public static function convertMilesToKm($miles){
       $km = $miles / self::convert;
        return round($km, 2);
    }
}