<?php

require '../app/libs/config.php';
require '../app/libs/functions.php';


spl_autoload_register ( function ($class) {

    $sources = array("../app/core/$class.php", "../app/models/$class.php");
    
        foreach ($sources as $source) {
            if (file_exists($source)) {
                require_once $source;
            } 
        } 
    });