<h2>Estrutura de decisao</h2>
<p>
    As estrutura de condicao permitem executar
    blocos distintos de codigo dado um condicao.

    <strong>Exemplo</strong>
    <pre>
        if(condicao){
            //instrucoes executadas
            //caso a condicao seja verdadeira
        }if else{
            //instrucoes executadas
            //caso a condicao seja falsa
        }
    </pre>  
</p><?php
        $media = 7;

        if($media >= 6){
            echo "O aluno foi aprovado";
        }else if($media >= 3){
            echo "O aluno foi recuperacao";
        }else {
            echo "O aluno foi reprovado";
        }
?>
-------------------------------------------------------------
$media >=6  | aprovado
6 <  media  >= 3  | exame 
media < 3 | reprovado
<?php
        $media = 4;

        if($media = 6){
            echo "O aluno foi aprovado";
        }else{
            echo "O aluno foi reprovado";
        }
?>

<p>O PHP  faz conversao automatica de alguns tipos para verdadeiro ou falso.
     <strong> True</strong>
     <ul>
        <li>String com texto</li>
        <li>Numero maior que 0</li>
        <li>Vetor com elementos</li>
     </ul>
     <strong> False</strong>
     <ul>
        <li>String vale</li>
        <li>Numero igual 0</li>
        <li>Vetor vazio</li>
     </ul>
</p>
<?php
if(""){
    echo "Verdadeiro";
}
else{
    echo "Falso";
}
?>


<?php%media = 4;
// Falso E Verdadeiro(texto)
if($media >=6 && "Quero passar de ano"){
    echo "Huhuhu, sou esperto";
}else{
    echo "ihh, me dei mal"
}?>