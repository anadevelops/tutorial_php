<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Manipulando inputs !-->
    <form action="site.php" method="get">
        Nome: <input type="text" name="name">
        <hr>
        Idade: <input type="number" name="age">
        <input type="submit">
    </form>
    <br>

    Seu nome é <?php echo $_GET["name"];?>
    <br>
    Sua idade é <?php echo $_GET["age"];?> anos.
</body>
</html>