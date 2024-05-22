<?php
#Funzione che controlla sia valida
function is_valid_address($check_address){
    #Da Documentazione filter_var -> filtra una variabile con uno specifico filtro
    #Caso specifico -> $address è una MAIL valida? (Standard RFC)
    return filter_var($check_address, FILTER_VALIDATE_EMAIL);
}

function in_page_address($mail){
    #Controllo che stampa in pagina i due output
    if(is_valid_address($mail)){
        echo "L'indirizzo inserito è valido";
    }else{
        echo "L'indirizzo inserito non è valido";
    }
}

function is_successful($mail_color){
    if(is_valid_address($mail_color)){
        echo "alert-success";
    }else {
        echo "alert-danger";
    }
}
?>