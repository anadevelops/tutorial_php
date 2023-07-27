<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Uso de arrays em PHP !-->
    
    <?php 
        $friends = array("Maria", "Bianca", "Leticia");
        $friends[1] = "Camila";
        $friends[4] = "Bianca";
        echo $friends[1];
        echo count($friends);
    ?>

</body>
</html>