<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
</head>
<body>
    <?php

$categoria1 = ['nome' => "calzature", 'n_prodotti'=>20, 'fatturato'=>1200];
$categoria2 = ['nome' => "camicie", 'n_prodotti'=>12, 'fatturato'=>800];
$categoria3 = ['nome' => "pantaloni", 'n_prodotti'=>5, 'fatturato'=>650];
$categorie = [$categoria1, $categoria2, $categoria3];

// elencare i nomi delle categorie

foreach($categorie as $categoria){
	$elenco_categorie = $categoria['nome'];
        echo "<br>" . $elenco_categorie;
}
echo "<hr>";






// calcolare il numero totale di prodotti

$somma= 0;

foreach($categorie as $categoria){
    $elenco_prodotti = $categoria['n_prodotti'];
        $somma += $categoria['n_prodotti']; 
}
echo $somma;
        
    
echo "<hr>";
        



// indicare qual e la categroia con il fatturato piu alto

function piu_alto($categorie)
{

    foreach ($categorie as $categoria) {
        $v = $categoria['fatturato'];
        if (!isset($max)) { 
            $max = $v; 
        }

        if ($max < $v) {
            $max = $v;
        }
    }
    return $max;

}
	echo piu_alto($categorie);
    
    echo "<hr>"; 

//punto 5

function ($arrays){


}
        
        
        
        
        


    ?>
</body>
</html>