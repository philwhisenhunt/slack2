<?php
//take the input
//reverse it
//display
$inputString = $_POST["chatMessage"];
function reverseIt($inputString){

    return strrev($inputString);
}

 echo reverseIt($inputString) 
 
 ?>