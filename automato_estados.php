<!DOCTYPE html>
<html lang="pt-br">
<!--
 @author Roni Deringer <ronideringer@gmail.com>
 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>

<body>
    <h5>Somente Palavras minisculas: <br>ele aceita 'whil' e 'fo' como palavras "qualquer"<br> fiz de um jeito q ele aceita essas palavras mesmo sendo "incompletas"</h5>
    <hr>
    <form action="" method="post">
        Entrada: <input type="text" name="entrada">
        <input type="submit" value="enviar">
    </form>
</body>

</html>
<?php
/*
Desenvolva um autômato que aceite as palavras abaixo:
IF
FOR
WHILE
ID ( qualquer nome de variável que não inicie com números)
CONSTANTE (qualquer número)
*/

if (isset($_POST["entrada"])) {
    $Q = array('q0', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7');
    $finais = array('q1' => 'Qualquer', 'q2' => 'IF', 'q3' => 'Qualquer', 'q4' => 'Número','q5' => 'Qualquer','q6' => 'Qualquer','q7' => 'FOR','q8' => 'Qualquer','q9' => 'Qualquer','q10' => 'Qualquer','q11' => 'Qualquer','q12' => 'WHILE');
    $q0 = 'q0';

    $delta = array(
        'q0' => array('a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3','f' => 'q5','g' => 'q3','h' => 'q3','i' => 'q1','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q8','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q4','1' => 'q4','2' => 'q4','3' => 'q4','4' => 'q4','5' => 'q4','6' => 'q4','7' => 'q4','8' => 'q4','9' => 'q4'),
        'q1' => array('f' => 'q2', 'a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3','e' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q2' => array('a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3','f' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q3' => array('a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3','f' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q4' => array('0' => 'q4', '1' => 'q4', '2' => 'q4', '3' => 'q4', '4' => 'q4','5' => 'q4','6' => 'q4','7' => 'q4','8' => 'q4','9' => 'q4'),
        'q5' => array('o' => 'q6', 'a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3','e' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3'),
        'q6' => array('r' => 'q7', 'a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3','e' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3'),
        'q7' => array('a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3','f' => 'q3','g' => 'q3','h' => 'q3','i' => 'q1','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q8' => array('h' => 'q9', 'a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3', 'f' => 'q3','g' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q9' => array('i' => 'q10', 'a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3','f' => 'q3','g' => 'q3','h' =>'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q10' => array('l' => 'q11', 'a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3','f' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q11' => array('e' => 'q12','a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'f' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),
        'q12' => array('a' => 'q3', 'b' => 'q3', 'c' => 'q3', 'd' => 'q3', 'e' => 'q3', 'f' => 'q3','g' => 'q3','h' => 'q3','i' => 'q3','j' => 'q3','k' => 'q3','l' => 'q3','m' => 'q3','n' => 'q3','o' => 'q3','p' => 'q3','q' => 'q3','r' => 'q3','s' => 'q3','t' => 'q3','u' => 'q3','v' => 'q3','w' => 'q3','x' => 'q3','y' => 'q3','z' => 'q3','0' => 'q3','1' => 'q3','2' => 'q3','3' => 'q3','4' => 'q3','5' => 'q3','6' => 'q3','7' => 'q3','8' => 'q3','9' => 'q3'),

    
    );

    $entrada = $_POST["entrada"];

    $estado = $q0;
    for ($i = 0; $i < strlen($entrada); $i++)
        if (array_key_exists($entrada[$i], $delta[$estado]))
            $estado = $delta[$estado][$entrada[$i]];
        else {
            $estado = 0;
            break;
        }
    if (array_key_exists($estado, $finais))
        echo "<em>Palavra aceita. TOKEN [" . $finais[$estado] . ',' . $entrada ."]";
    else {
        echo "Palavra inválida";
    }
}
?>