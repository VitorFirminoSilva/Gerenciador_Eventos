<?php
    function clearInputs($input){
        $var = htmlspecialchars($input);   
        return $var;
    }
    
    function dateReturn($input){
       $var = new DateTime($input);
       $var = $var->setTimezone(new \DateTimeZone("America/Sao_Paulo"));
       return $var->format("Y-m-d h:i:s");
    }
?>
