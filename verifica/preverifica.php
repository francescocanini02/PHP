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
    $domanda1 = array("categoria"=> "commerciale", "risposta_corretta" => 0);
    $domanda2 = array("categoria" => "assistenza", "risposta_corretta" => 1);
    $domanda3 = array("categoria" => "assistenza", "risposta_corretta"=> 0);
    $domande = [$domanda1, $domanda2, $domanda3];    
    // scorro larray bidimenionale
    
    echo " le categoria delle domande sono: " ; 
    foreach ($domande as $domanda){
        echo "<br>" . $domanda["categoria"] ;
    }
    echo " <br> le risposte corrette sono: " ;
    foreach ($domande as $domanda){
        if(! $domanda["risposta_corretta"]==0)
         echo $domanda["risposta_corretta"];
    }
    echo "<hr>";
    
    
// punto 3
// definire la funzione che ha come parametro d’ingresso 
// l’array $domande e restituisce il
// nome della categoria più utilizzata;

// modificare la funzione del punto precedente in modo che 
// restituisca anche il numero di volte
// che è stata utilizzata la categoria
//  (N.B. una funzione può restituire 2 valori solo restituendo
// un array)
function utilizzata($domande)
{
 
    foreach ($domande as $domanda) {
        
        
            $max = 1;
        if ($max < $domanda["categoria"]) {
            $max = $domanda["categoria"];
            
        }
        $n = count($domanda);
      
        
    }
    return $max . " per " .  $n . " volte";
}



$massimo = utilizzata($domande);
echo "la piu utilizzata è: " . $massimo;

echo "<hr>";
// punto4
// se ogni risposta alle domande costasse all’azienda 50 centesimi 
// di euro, quanto sarebbe
// costato rispondere alle domande? 
// (scrivere i numeri nel formato corretto!)


    foreach ( $domande as $domanda ){
        
      echo $domanda["risposta_corretta"];
    }
    $n = count($domanda);
    




?>
</body>
</html>
