<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - Strong Password Generator</title>
    </head>

    <?php include 'functions.php'; ?>

    <body>
        
        <form action="" method="GET">
            <label for="char_number">Di quanti caratteri vuoi la tua password?</label>
            <input id="char_number" name="char_number" type="number" placeholder="Inserisci un numero">
            <button type="submit">Genera password</button>
        </form>

    </body>
</html>