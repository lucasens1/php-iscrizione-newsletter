<?php 
#Inizializzo una variabile, che contiene l'e-mail, se non è settata la metto vuota
$mail_address = isset($_POST['mail']) ? $_POST['mail'] : "" ;
#Console log
var_dump($mail_address);

#Funzione che controlla sia valida
function is_valid_address($address){
    #Da Documentazione filter_var -> filtra una variabile con uno specifico filtro
    #Caso specifico -> $address è una MAIL valida? (Standard RFC)
    return filter_var($address, FILTER_VALIDATE_EMAIL);
}

#Controllo che stampa in pagina i due output
if(is_valid_address($mail_address)){
    echo "L'indirizzo inserito è valido";
}else{
    echo "L'indirizzo inserito non è valido";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row text-center p-4 border border-rounded my-5">
            <h1 class="p-2">Form di Registrazione : </h1>
            <div class="col justify-content-center my-4">
                <form action="index.php" method="POST" class="text-center d-flex justify-content-center align-items-center">
                    <label for="mail" class="mx-2">La tua e-mail : </label>
                    <input type="text" id="mail" name="mail">
                    <button type="submit" class="btn btn-primary mx-2">Invia</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>