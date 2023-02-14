<h2>Operadores de atribiução</h2>
<p>
    São utilizados para armazenar
    "atribuir valores e uma variavel"
</p>
<ol>
    <li>= | atributo simples</li>
    <li>+= | acumla o novo valor</li>
    <li>-= | subtrai o novo valor</li>
    <li>++ | incrementa 1 ao valor da variavel</li>
    <li>-- | subrai 1 do valor da variavel</li>
    <li>.= | concatena o texto ao valor da variavel</li>
</ol>
<strong>Exemplo</strong>
<?php
    $nota = 5 ; //atribui o número 5 na variavel
    echo $nota . "<br>"; //imprime o número 5

    $nota += 5; //soma +5 na variável nota
    echo $nota . "<br>"; //imprimi o número 10 (5 de antes + 5 de agora)

    $nota -= 2; //equivalente a $nota = $nota - 2;
    echo $nota . "<br>"; //imprime o valor 8

    $nota++; //soma 1 ao valor da variável = $nota = $nota + 1;
    echo $nota . "<br>"; //imprimi o valor 9

    $nota--; //subtrai 1 ao valor da variável = $nota = $nota - 1;
    echo $nota . "<br>"; //imprimi o valor 8

    $nome = "Luiz";
    $nome .= " Lemes";//concatena o valor anterior Iara, com o novo valor Ribeiro armazena na variável nome
    echo $nome . "<br>"; // imprime Luiz Lemes
?>