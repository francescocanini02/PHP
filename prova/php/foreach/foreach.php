<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach</title>
</head>
<body>
    <?php
    //$a = []; inizializzo un array vuoto
    $a = ['mario'=> 3, 'giacomo'=> 10, 'maria'=>10, 'simone'=>5, 'giuseppe'=>8];
foreach($a as $chiave => $valore){
        echo "<br>[$chiave]=> $valore";
}
    echo "<hr>";
    // memorizzare in $risultato gli indici dell'array
    // $a delle chiavi in cui è memorizzato il valore $val
    // chi ha preso 10??
    $val = 10;
foreach ($a as $k => $v){
    // $v valore dell'alemento considerato
    //$k chiave dell'elemento considerato
    // $a [$k] è uguale a $v, sono la stesa cosa!!!!!
        if ($v == $val) {
            $risultato[] = $k; //trovato elemento da aggiungere in $risultato
        }

}
for ($i=0;$i<count($risultato);$i++){
echo "<br>". $risultato[$i];
}
foreach ($risultato as $r){
        echo "<br>" . $r;
}
?>
</body>
</html>