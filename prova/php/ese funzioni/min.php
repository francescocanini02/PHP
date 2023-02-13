<?php
function min_in_array($a)
{
    //$min = 0; ottimizzazione, vedi sotto
    //$min = $a[0];
    
    
    foreach ($a as $v) {
        if( ! isset($min) ) {
            $min = $v;
        }

        if ($min > $v) {
            $min = $v;
        }
    }
    return $min;

}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./lezione11a.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <body>
    <?php
    $a = ["primo", "secondo", "terzo"];
    $primo = min_in_array($a);
    echo "il primo è: " . $primo;
    ?>
  </body>
</html>