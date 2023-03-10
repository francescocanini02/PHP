<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 2d</title>
</head>

<body>
    <?php
// Esercizio PHP
// Si chiede di svolgere le seguenti attività:
// 1. aggiungere il nuovo partecipante “Novella Novellini” al corso di Informatica
// 2. elencare i nomi di tutti i partecipanti (di tutti i corsi)
// 3. calcolare il numero medio dei partecipanti ai corsi
// 4. indicare il nome del corso con il maggior numero di partecipanti
// 5. tutti i partecipanti devono superare un esame di selezione, che si svolge nello stesso
// giorno e con la stessa commissione: scrivere il nome del partecipante che sarebbe il
// primo in ordine alfabetico a sostenere l&#39;esame (tra tutti i partecipanti di tutti i corsi).
// 6. si chiede di aggiungere in fondo ad ogni array dei partecipanti un ulteriore elemento, con
// chiave &#39;corso&#39; e valore il nome del corso, fornito nel secondo array.

$p1 = ["Primini Primo", "Secondini Secondo"];
$p2 = ["Giannini Gianni", "Stefanini Stefano", "Mariolini Maria","Giacomini Giacomo"];
$p3 = ["Violetti Viola","Gaietti Gaia"];
$partecipanti= [$p1, $p2, $p3];
$a = [1, 2, 3]; 
$corsi = ["Autocad","Informatica","Inglese"];




foreach ($partecipanti as $p) {
    foreach ( $p as $s)
    echo "<br>" . $s;
   
}
echo "<hr>";
//cerco l'indice dell'array relativo al corso di informatica
for($i = 0; $i < 3; $i++){
    if ($corsi[$i] == 'Informatica'){
        $indice = $i;
    }
}
//aggiungo il nuovo partecipante 'Novella Novellini' al corso di Informatica
$partecipanti[$indice][] = 'Novella Novellini';

    foreach ($partecipanti as $p) {
        foreach ( $p as $s)
        echo "<br>" . $s;

    }
    
    $numero_partecipanti = 0;
		foreach($partecipanti as $p){
			$numero_partecipanti += count($p);
		}

        $numero_corsi = count($corsi);
    
echo "<br>" . $media_partecipanti = $numero_partecipanti / $numero_corsi;

// indicare il nome del corso con il maggior numero di partecipanti
$massimo = 0;
for($i = 0; $i<count($corsi); $i++){
    if(count($partecipanti[$i])>$massimo){
        //il numero di partecipanti è superiore al massimo, segno i valori
        $massimo = count($partecipanti[$i]);
        $corso_massimo = $i;
    }
}

echo "<br> il corso con più iscritti è " . $corsi[$corso_massimo];






















// ---
// Svolgere le stesse attività richieste sopra (escluso il punto 6) con questi array:
// $s1=[‘cognome’=&gt;”Primini”, ‘nome’=&gt;”Primo”,’corso’ =&gt;
// “Autocad”];$s2=[‘cognome’=&gt;”Secondini”, ‘nome’=&gt;”Secondo”,’corso’ =&gt; “Autocad”];
// $s3=[‘cognome’=&gt;”Giannini”, ‘nome’=&gt;”Gianni”,’corso’ =&gt; “Informatica”];
// …
// $studenti = [$s1, $s2, $s3, …];

    ?>
</body>

</html>