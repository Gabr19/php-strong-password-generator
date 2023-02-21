<?php

    $pwdVar = $_GET['pwd'];

    $password [] = '';

    for ($i=0; $i<=$pwdVar; $i++){
        $numero = rand(0,10);

        $password[] = $numero;
    };
    
        
    
    // creare una funzione che crei un numero casuale
    // incorsporare la funzione in un for con lunghezza -> pwd
    //pushamo ogni numero in un array
    //mostriamo array in pagina 

?>


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
        <input type="password" id="pwd" name="pwd" placeholder="lunghezza della password">
        <button>Invia</button>
    </form>

    <h1><?php echo "la lunghezza della password è: $pwdVar"?></h1>

    <?php
       var_dump($password) 
    ?> 
    


</body>
</html>