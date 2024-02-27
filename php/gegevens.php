<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style.css">

    
</head>

<body>
    
    <div class="navbar">
        <a href="../index.php">HomePage</a>
        <a href="ProductPage.php">Producten</a>
        <a href="winkelwagentje.php">Winkelwagentje</a>
    </div>

<div>
    <form action = "verwerken.php" method="post">
        <meta http-equiv= "Content - Type">
        Your name:
        <input type= "text" name= "name">
        <input type = "hidden" name = "Language" value = "false">
        <br> Choose a lang.
        <input type = "radio" name = "Language" value = "E"> English
        <input type = "radio" name = "Language" value = "D"> Dutch
        <input type = "radio" name = "Language" value = "F"> French
        <br>
        <input type = "submit" name = "submit" value = "Sendt">
</form>  
    </div>
</body>
</html>