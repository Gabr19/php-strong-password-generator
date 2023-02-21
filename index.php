<?php

    $pwdVar = $_GET['pwd'];


    //  for ($i=0; $i<$pwdVar; $i++){
    //      $numero = rand(0,10);

    //      $password[] = $numero;
    //  };

    // $arr=
    // ['a']; 
    // ['b']; 
    // ['c'];

      
    // $lettereMin["minuscole"] = 'abcdefghijklmnopqrstuvwxyz';
    // $lettereMaiusc["maiuscole"] = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    // $numeri["numeri"] = '1234567890';
    // $caratteriSpec["caratteri_speciali"] = '!?~@#-_+<>[]{}';

    // $totaleCaratteri = array_merge($lettereMin, $lettereMaiusc, $numeri, $caratteriSpec);

    // for ($i=0; $i<$pwdVar; $i++){
    //     foreach ($totaleCaratteri as $key => $value){
    //         $carattere = $totaleCaratteri[rand(0, strlen($value) )] ;

    //         $password[] = $carattere;
    //     }
    // };

    function generaStringaRandom($pwdVar) {

        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?~@#-_+<>[]{}';
        $stringaRandom = '';
        for ($i = 0; $i < $pwdVar; $i++) {
            $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
        return $stringaRandom;
        
    }



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

    <h1><?php echo "La lunghezza della password è: $pwdVar"?></h1>
    <h4>La tua password è: <?php print_r(generaStringaRandom($_GET['pwd'])) ?></h4>


     <!-- <?php
    foreach ($password as $key => $value){
        print_r($value);
        
    }
    ?>  -->

    <!-- <?php foreach ($totaleCaratteri as $key => $value){
        print_r($value);
        
    } ?> -->
    



</body>
</html>