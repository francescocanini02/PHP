<?php
/**
 * Descrizione della funzione
 * @param [<Type>] [name] [<description>]
 * @return [<Type>]
 */



/**
 * 
 * Restituisce un colore in base al minuto corrente
 * @return string
 */
function colore()
{
    $w = date("i"); //giorno della settimana
    $colore = "";
    switch ($w) {
        case 10:
        case 15:
            $colore = "#ff0000";
            break;
        case 12:
            $colore = "#00ffff";
            break;
        case 13:
            $colore = "#00ff00";
            break;
        case 14:
            $colore = "#0000ff";
            break;
        default:
            $colore = "#000000";
    }

    return $colore;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    //Scrivere una funzione che restituisce una stringa contenente un codice colore in base al giorno corrente della settimana (es il lunedì restituisce il colore rosso, il martedì il colore giallo, ecc).
//Utilizzare la funzione appena descritta per realizzare un div html con un colore di sfondo diverso in funzione del giorno della settimana.
    
    $colore = colore();

    ?>

    <div style="background-color: <?php echo $colore ?>">
        div colorato
    </div>
</body>

</html>





