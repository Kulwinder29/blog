<?php

// Important functions

if (!function_exists('p')) {
    function p($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}

if(! function_exists('format_date'))
{
    function format_date ($date , $format)
    {
        $formatDate = date($format , strtotime($date));
        return $formatDate;
    }
}
