<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        //Funções utilizadas em strings
       $string = "Funções de strings<br>";
       echo strtolower($string);
       echo strtoupper($string);
       echo strlen($string);
       echo $string[1];
       $string[0] = "x";
       echo $string;

       //Função 'replace' em strings
       $string = "Funções de strings<br>";
       echo str_replace("Funções", "Functions", $string);
       echo substr($string, 5, 7);

    ?>

</body>
</html>