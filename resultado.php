<?php
function calcular ($n1, $n2,$acao){
    if($acao=="somar"){
        $resultado=$n1+$n2;
        echo "<br>A soma é $resultado<br/>";
        echo "<br><a href='form-calculadora.php'></a></br>";
    }
}
//fim da soma
//acessar o método via objeto:
?>