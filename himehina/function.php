<?php

declare(strict_types=1);

require __DIR__ .("/data.php");

function release() : string {
    $date = strtotime("November 5, 2021");
    $remaining = $date - time();
    
    $remaining_days = floor($remaining /86400); 
    $remaining_string = strval($remaining_days);
    
    return $remaining_string;
}

function random_video($array) {
    return($array[rand(0, count($array))]);
}


?>
