<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="">
        <label for="pwd">Password:</label>
        <input type="number" id="pwd" name="pwd" placeholder="lunghezza della password">
        <button>Invia</button>
    </form>

    <h1><?php echo "La lunghezza della password è: $pwdVar"?></h1>
    <h4>La tua password è: <?php include 'functions.php'; print_r(generaStringaRandom($pwdVar)) ?></h4>
</body>
</html>