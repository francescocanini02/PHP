<?php
include("con_db.php");
include("funzioni.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio per casa del 10 marzo 2023</title>
</head>
<body>
    <?php


    //punto 1 - Connessione
   
    
    $dsn = "mysql:dbname=ifts;host=127.0.0.1";
    
    
    fz_connessione();
    
    echo "<hr>";
    //punto 2 
    function data_db_2_user($data)
    {
        //$data = "1990-12-31";
        $anno = substr($data, 0, 4);
        $mese = substr($data, 5, 2);
        $giorno = substr($data, 8); //fino alla fine
        return "$giorno/$mese/$anno";

    }

    
    $sql2 =
    "SELECT DISTINCT partenza 
    FROM prenotazioni
    "
    ;
    
    
    $data_partenza = fz_sql($sql2,[]);
    
    echo "Numero totale di prenotazioni sono : ".count($data_partenza)." <br>";
    
    echo "<ul>";
    foreach ($data_partenza as $partenza){
        echo "<li>".data_db_2_user($partenza['partenza'])."</li>";
        
    }
    echo "</ul>";
    


    echo "<hr>";
    // punto 3  
    
   
    
    $sql3 =
    "SELECT DISTINCT  nome , cognome
    FROM clienti
    INNER JOIN prenotazioni ON ID_cliente = cliente
    order by partenza DESC 
    LIMIT 0,1"
    ;
   
    
    $ultimo_cliente = fz_sql($sql3);

    foreach ($ultimo_cliente as $cliente){
        echo "L'ultimo cliente partito si chiama : " . $cliente['nome'] . " " . $cliente['cognome'];
        
    }
    
    
    echo "<hr>";
    
    
    //punto 4 
    
    $permanenza_totale = fz_sql("SELECT DISTINCT giorni_permanenza, SUM(importo) AS totale
    FROM prenotazioni
    GROUP BY prenotazioni.giorni_permanenza
    HAVING SUM(importo) ");
    
    echo " <br> ";
    
    elenca_records($permanenza_totale, 'totale');
    
    echo " <hr> ";
     
    //    punto 5
    
    class Prenotazione
{
    private $data_partenza= "";
    private $importo = 0;

    function __construct($data_partenza, $importo)
    {
        $this->data_partenza = $data_partenza;
        $this->importo = $importo;
    }
    function getData()
    {
        return $this->data_partenza;
    }
    function getImporto()
    {
        return $this->importo;
    }
}
    
    ?>
</body>
</html