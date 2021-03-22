<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
        <?php
        $name = htmlspecialchars($_POST["movie"]);
        $email = htmlspecialchars($_POST["actor"]);
        $hair = htmlspecialchars($_POST["show"]);
        $eye = htmlspecialchars($_POST["cartoon"]);
        $heigh = htmlspecialchars($_POST["service"]);
        
        ?>
        
        <h1>your favorite movie is <?= $_POST["movie"]?></h1>
        <h1>your favorite actor is  <?= $_POST["actor"]?></h1>
        <h1>your favorite tv show is <?= $_POST["show"]?></h1>
        <h1>you favorite cartoon is <?= $_POST["cartoon"]?></h1>
        <h1>you favorite streaming service is <?= $_POST["service"]?></h1>
    </body>
</html>