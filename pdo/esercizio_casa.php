<!-- 
In particolare, le operazioni richieste sono le seguenti:
1. Collegarsi al db ifts
2. Elencare tutte il nome delle città del Sud
3. Indicare il numero di città elencate
4. Scrivere la regione del Sud con più città collegate
5. Definire la classe Regione con le proprietà nome (privata) e numeroCittaCollegate
(pubblica).
6. Definire il metodo che accede al database e valorizza la proprietà
numeroCittaCollegate. -->

<?php
include("include/con_db.php");
include("include/funzioni.php");
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


    // $nome_citta = "Rimini";
    // $sql = "SELECT * FROM regioni WHERE area_geografica = 'Sud' ";
    // echo "nomi delle citta del sud <br> $sql  <br>  ";
    // $citta = fz_sql($sql,
    //     [
    //         ['segnaposto'=>'Sud','var'=>$nome_citta]
    //     ]
    // );
    // elenca_records($citta, 'Sud');
    $citta = fz_sql("SELECT * FROM regioni WHERE area_geografica = 'Sud'");
    
    echo " <br> ";
    
    elenca_records($citta, 'regione');
    
    echo " <hr> ";
    
    $citta = fz_sql("SELECT COUNT(*) AS numero_citta FROM regioni WHERE area_geografica = 'Sud'");
    
    elenca_records($citta, 'numero_citta');
    
    echo " <hr> ";
    
    $citta = fz_sql("SELECT regione FROM regioni WHERE area_geografica = 'Sud' ORDER BY regione DESC LIMIT 0,1");
    
    elenca_records($citta, 'regione');
    
    

    ?>

</body>

</html>