<?php


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
            <div class="d-flex justify-content-between align-items-center">
                <p>Lunghezza Password:</p>
            </div>
            <div class="d-flex justify-content-between">
                <p>Consenti ripetizioni di uno o più caratteri:</p>
                <div class="d-flex flex-column text-start">
                    <div class="mb-3">
                        <form>
                            <input type="radio" id="html" name="fav_language" value="HTML">
                            <label for="Si">Si</label><br>
                            <input type="radio" id="css" name="fav_language" value="CSS">
                            <label for="No">No</label><br>
                        </form>
                    </div>
                    <div>
                        <form>
                            <input type="checkbox" id="Letters" name="Letters" value="Bike">
                            <label for="Letters"> Lettere</label><br>
                            <input type="checkbox" id="Numbers" name="Numbers" value="Car">
                            <label for="Numbers"> Numeri</label><br>
                            <input type="checkbox" id="Symbols" name="Symbols" value="Car">
                            <label for="Symbols"> Simboli</label><br>
                        </form>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button type="button" class="btn btn-primary">Invia</button>
                <button type="button" class="btn btn-secondary">Annulla</button>   
            </div>
        </div>
    </div>
    <div class="appFooter text-center text-light py-3">
        <span><i class="fa-solid fa-copyright"></i> 2023 Roberto Nesta</span>
    </div>
</body>
</html>