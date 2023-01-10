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

    for ($i = 1; $i <= 10; $i++) {
//se srivessi un echo qua verrebbe ripetuto per tutto il ciclo
        //echo "what";

        if (($i % 2) == 1) {
            echo " <p style=background-color:#eee >";
            echo " $i NON ";
        } else {
            echo " $i";
        }
            echo " multiplo di 2 <br>";
            echo "</p>";
        
    }

    echo "i=$i";
    $multipli = 0;
    $inizio = 1;
    $iterazioni = 10;
for($i=$inizio; $i<=$inizio + $iterazioni; $i++){
    //$i%3 ==1 -> non è multiplo
    //$i%3  -> non multiplo
    // ! ($i%3) -> negazione di quello sopra (è multiplo)
if( ! ($i%3) == 1) {//non è multiplo
            echo "$i : trovato multiplo di 3 <br>";
            $multipli++;

}


}
echo " i multipli da $inizio a $iterazioni volte sono $multipli "















    ?>
</body>

</html>
