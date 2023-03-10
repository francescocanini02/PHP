<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1° classe</title>
</head>

<body>
    <?php
  
    class sasso

    {
        public $francesco = "il mio nome";
        public $canini = "il mio cognome";

        function __construct($NomeDaAssegnare,$CognomeDaAssegnare)
        {
            $this-> francesco = $NomeDaAssegnare;
            $this-> canini = $CognomeDaAssegnare;
            echo  $this-> francesco; 
        }
    }

    $io = new sasso("sesso", "anale ");
    
    echo "<br>" . $io-> francesco; 
    echo "<br>" . $io-> canini; 








    





    ?>

</body>

</html>