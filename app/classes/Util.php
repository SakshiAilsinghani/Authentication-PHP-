<?php
class Util
{
    public static function getCurrentTimeInMillis()
    {
        return round(microtime(true)*1000);
 
    }
    public static function dd($dump){
        die(var_dump($dump));
    }
}