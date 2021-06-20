<?php

/*
Utilises the built in function "spl_autoload_register" 
to find the required files and include them
*/
function myAutoLoader($className){
    $path = "classes/";
    $extension = ".php";
    $fullPath = $path . $className . $extension;

    //Extra layer of validation which finds if the required file exists or not
    if(!file_exists($fullPath)){
        return false;
    }

    include_once $fullPath;
}
spl_autoload_register('myAutoLoader');
?>