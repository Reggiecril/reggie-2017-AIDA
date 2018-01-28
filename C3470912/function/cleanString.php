<?php 
function cleanString($string){
    $string=trim($string);
    $string=filter_var($string,FILTER_SANITIZE_STRING);
    //or maybe stripslashes($string)
    //or elsewhere mysqli-real-escape_string()
    return $string;
}

?>