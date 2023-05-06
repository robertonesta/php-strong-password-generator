<?php


$capitalLetters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W",    "X", "Y", "Z"];
$lowerCaseLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$simbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ';', ':', "'", '"', '<', '>', ',', '.', '/', '?'];
$numbers = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
$password = "";
function pswGenerator($capitalLetters, $lowerCaseLetters, $simbols, $numbers, $password){
    for ($i=0; $i < $_GET["passwordLength"]; $i++) {
        $number = rand(0, 3);
        if ($number === 0){
            $chosenArray = $capitalLetters;
        } elseif ($number === 1){
            $chosenArray = $lowerCaseLetters;
        } elseif ($number === 2){
            $chosenArray = $simbols;
        } else{
            $chosenArray = $numbers;
        };

        $password .= $chosenArray[array_rand($chosenArray)];

    } 
    return $password;
} 
$password = pswGenerator($capitalLetters, $lowerCaseLetters, $simbols, $numbers, $password);
