<?php

    spl_autoload_register(function($nomeClass){
       $dirClass = "..";
       
       $fileName = $dirClass . DIRECTORY_SEPARATOR . $nomeClass.".php";
       if(file_exists($fileName)){
          require_once($fileName);
       }
    });
    
?>