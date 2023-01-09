<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>

<body>
    <?php
    //ssegnare a $m il max tra x e y
    $x = 1;
    $y = 2;
    if ($x>$y) {
        echo "condizione vera!";
    } else {
        echo "condizione falsa!";
        $m = $y;
    }
    echo "<br> il max tra $x e $y è $m ";
    echo "<hr>";
    
    //Un supermercato offre una politica di sconto ai propri clienti: con l’acquisto di 3 prodotti
    // applica il 10% di sconto sull’oggetto meno costoso. Determinare il totale (imponibile + iva, supponendo l’iva al 22%)
    
    $p1 = 10; //conto prodotto 1
    $p2 = 9;
    $p3 = 8;

    //trovare il minore dei 3 numeri

    if ($p1>$p2) {
        echo "condizione vera!";
    } else {
        echo "condizione falsa!";
        $p2 > $p1;
    }
    echo "<br> il min tra $p1 e $p2 è $p2 ";
    echo "<br>";
    if ($p3>$p2) {
        echo "condizione vera!";
    } else {
        echo "condizione falsa!";
       $p2 > $p3;
    }
    echo "<br> il min tra $p3 e $p2 è $p3 ";
    echo "<br>";

    // $p1 = $p1 - (($p1 * 10)/100)


    echo '$p1=' . $p1;
    echo '<br> $p2=' . $p2;
    echo '<br> $p3=' . $p3;
    
    //totale
    $totale = $p1 + $p2 + $p3;
    echo "<br> il totale vale : " . $totale;

    // scorporare l'iva 
    $iva = 22;
    $imponibile = $totale / (1 + ($iva / 100));
    echo "<br>" . $imponibile;
    
    echo "<br>";
    
    
    
    
    
    
    
    
    
    
    ?>
</body>

</html>