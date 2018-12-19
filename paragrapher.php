<?php


//take the input
//reverse it
//display
$inputString = $_POST["chatMessage"];
$arrayOfWords = [];
function splitIntoWords($inputString){

    $arrayOfWords = explode(" ", $inputString);

    foreach($arrayOfWords as $word){
        return "<span>" . $word . "</span>";
    }
}
   

 
 ?>