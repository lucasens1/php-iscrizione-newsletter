<?php
require_once __DIR__ . "/partials/functions.php";


if (!isset($_SESSION)) {
  session_start();
}

// Se nella sessione dell'utente non esiste la chiave auth oppure se è diversa da true
//    rimando l'utente all'index
check_auth();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in Successfull</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Congratulazioni e-mail corretta 
                    <?php echo var_dump($_SESSION) ?>
                </h1>
            </div>
        </div>
    </div>
</body>
</html>