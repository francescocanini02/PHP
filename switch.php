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
    //quanti giorni mancano alla fine del mese
    echo date("d/m/Y");
    $m = date("m");
switch($m){
        case 2:
            $giorni_del_mese = 28;
            break;
            case 4;
            case 6;
            case 9;
            case 11;
            $giorni_del_mese = 30;
            break;
            default: 
            $giorni_del_mese = 31;
}
    
    $giorni_mancanti = $giorni_del_mese - date("d");
    echo "giorni mancanti = $giorni_mancanti";
    
    //per casa
    //quanti giorni mancano al giorno del tuo compleanno?
    // prima valuto ilse poi i mesi di differenza poi giorni del mese
    
    
    
    
    ?>
</body>

</html>