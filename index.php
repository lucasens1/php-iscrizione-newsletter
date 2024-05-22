<?php 
$mail_address = $_POST['mail'];
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
        <div class="row">
            <h1>Form di Registrazione : </h1>
            <div class="col-6">
                <form action="index.php" method="POST">
                    <label for="mail">La tua E-mail : </label>
                    <input type="text" name="mail">
                </form>
                <button type="submit" class="btn btn-primary">Invia</button>
            </div>
        </div>
    </div>
</body>
</html>