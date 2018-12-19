<?php


//take the input
//reverse it
//display
$inputString = $_POST["chatMessage"];
function splitIntoWords($inputString){

    $arrayOfWords = explode(" ", $inputString);
    return $arrayOfWords;

}
   

 
 ?>