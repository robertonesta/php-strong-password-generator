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

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Password Generator</title>
</head>
<body>
    <div class="appHeader text-center py-3">
        <h1>Strong Password Generator</h1>
    </div>
    <div class="appMain py-3">
        <h2 class="text-center text-light py-3">Genera una password sicura</h2>
        <div class="container py-5 px-4 rounded-3">
            <form action="" method="get">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="mb-0">Lunghezza Password:</p>
                    <div>
                        <input type="number" min="8" max="20" required name="passwordLength" id="passwordLength">
                        <label for="passwordLength"></label>
                    </div>
                </div>
                <div class="d-flex justify-content-between my-3">
                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                    <div class="d-flex flex-column text-start">
                        <div class="mb-3">
                            <input type="radio" id="repetition" name="repetition" value="1">
                            <label for="Si">Si</label><br>
                            <input type="radio" id="repetition" name="repetition" value="0">
                            <label for="No">No</label><br><br>                    
                            <input type="checkbox" id="Letters" name="Letters">
                            <label for="letters"> Lettere</label><br>
                            <input type="checkbox" id="Numbers" name="Numbers">
                            <label for="numbers"> Numeri</label><br>
                            <input type="checkbox" id="Simbols" name="Simbols">
                            <label for="simbols"> Simboli</label><br>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="reset" class="btn btn-secondary">Annulla</button>   
                </div>
            </form>
            <div>
                <span>La tua password è: <?= $password ?></span>
            </div>
        </div>
    </div>
    <div class="appFooter text-center text-light py-3">
        <span><i class="fa-solid fa-copyright"></i> 2023 Roberto Nesta</span>
    </div>
</body>
</html>