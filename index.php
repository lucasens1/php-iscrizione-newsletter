<?php 
#Apro la sessione
if(!isset($_SESSION)){
	session_start();
}

#Includo il file con le funzioni (Nota bene : Singolo Apice === WARNING a manetta)
include_once __DIR__ . "/partials/functions.php";

#Inizializzo una variabile, che contiene l'e-mail, se non è settata la metto vuota
$mail_address = isset($_POST['mail']) ? $_POST['mail'] : "" ;
#Console log
/* var_dump($mail_address); */
/* var_dump($valid_flag); */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="container">
        <div class="row text-center p-4 border border-rounded my-5">
            <h1 class="p-2">Form di Registrazione mail : </h1>
            <div class="col justify-content-center my-4">
                <form 
                    action="index.php" 
                    method="POST" 
                    class="text-center d-flex justify-content-center align-items-center">
                        <label for="mail" class="mx-2">La tua e-mail : </label>
                        <input type="text" id="mail" name="mail" value="<?php echo isset($_POST['mail']) ? $_POST['mail'] : "" ?>">
                        <button type="submit" class="btn btn-primary mx-2">Invia</button>
                </form>
            </div>
            <!-- Richiamo funzione in_page_address da functions.php -->
            <p class="<?php is_successful($mail_address)?>"><?php in_page_address($mail_address) ?></p>
        </div>
    </div>
</body>
</html>