<!DOCTYPE html>
<html>
    <head>
        <h1>Congratulations <?= $_GET["name"]?> you finally did it!</h1>
    </head>
    <body>
        
        <?php
        $name = htmlspecialchars($_GET["name"]);
        $email = htmlspecialchars($_GET["email"]);
        $hair = htmlspecialchars($_GET["hair"]);
        $eye = htmlspecialchars($_GET["eye"]);
        $heigh = htmlspecialchars($_GET["height"]);
        
        ?>
        
        <h2>your email is <?= $_GET["email"]?></h2>
        <h2>your hair color is <?= $_GET["hair"]?></h2>
        <h2>your eyes are <?= $_GET["eye"]?></h2>
        <h2>you are <?= $_GET["height"]?> tall</h2>
    </body>
</html>