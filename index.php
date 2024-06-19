<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP - Strong Password Generator</title>
    </head>

    <body>
        
        <form action="" method="GET">
            <label for="char_number">Di quanti caratteri vuoi la tua password?</label>
            <input id="char_number" name="char_number" type="number" placeholder="Inserisci un numero">
            <button type="submit">Genera password</button>
        </form>

        <?php 
            $char_number= $_GET['char_number'];

            function generatePassword($char_number) {
                
                $lowercase = 'abcdefghijklmnopqrstuvwxyz';
                $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $numbers = '0123456789';
                $symbols = '!@#$%^&*()_-+=<>?';
                
                $all_characters = $lowercase . $uppercase . $numbers . $symbols;
                
                $all_characters = str_shuffle($all_characters);
                
                $password = '';
                
                for ($i = 0; $i < $char_number; $i++) {
                    $password .= $all_characters[random_int(0, strlen($all_characters) - 1)];
                }
                
                return $password;
            }
        ?>

        <div>
            <p><?php echo "La tua password è: " . generatePassword($char_number); ?></p>
        </div>

    </body>
</html>