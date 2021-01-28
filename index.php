<?php

require_once('vendor/autoload.php'); 

if (sizeof($argv) <= 1 || !in_array($argv[1], App\DesignPattern::LIST)) {
    echo "Please use one of the following pattern as argument: \n";
    foreach (DESIGN_PATTERNS as $pattern) {
        echo "$pattern \n";
    }
    return;
}

require_once('Controller/' . $argv[1] . '.php');
