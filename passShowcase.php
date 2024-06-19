<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Password generata</title>
    </head>
    <body>

        <p><?php echo "La tua password è: " . $_SESSION['password']; ?></p>

    </body>
</html>