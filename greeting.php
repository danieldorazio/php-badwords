<?php
$paragraph = $_GET['paragraph'];
$ban_word = $_GET['ban_word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <div>
        <h2>Il paragrafo inserito è </h2>
        <p><?php echo "${paragraph}";?></p>
        <p> di lunghezza <?php echo strlen($paragraph);?></p>
    </div>

    <div>
        <h2>la ban word è </h2>
        <p><?php echo "${ban_word}";?></p>
    </div>

    <div>
        <h2>la nuova frase censurata</h2>
        <?php 
        $new_string = str_replace($ban_word, '***', $paragraph);
        ?>

        <p><?php echo $new_string ?></p>
        <p>di lunghezza <?php echo strlen($new_string) ?></p>

    </div>

    
</body>
</html>