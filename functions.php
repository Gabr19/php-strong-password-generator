<?php
    $pwdVar = $_GET['pwd'];
    function generaStringaRandom($pwdVar) {
        $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?~@#-_+<>[]{}';
        $stringaRandom = '';
        for ($i = 0; $i < $pwdVar; $i++) {
            $stringaRandom .= $caratteri[rand(0, strlen($caratteri) - 1)];
        }
        return $stringaRandom;
    }
?>