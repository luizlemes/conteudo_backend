<h2>Array -  Vetor</h2>
<p>
    Vetores são estruturas de dados unidimensionais
    "variados compostas", que 
    permitem o amazenamento de mais de 1 valor.
    Para acessar os valores armazenados em Vetoré necessário informar
    o indice (key).
</p>
<strong>Aparência de um Vetor</strong>
<pre>
    +--------------+
    0|Maça         |
    +--------------+
    1|Uva          |
    +--------------+
    2|Pera         |
    +--------------+
    3|Laranja      |
    +--------------+
</pre>
<strong>Como criar um vetor</strong>
<pre>
    //opção 1
    $variavel = ["Maça", "Uva", "Pera", "Laranja"];

    //opção 2
    $variavel = array("Maça", "Uva", "Pera", "Laranja");

    //opção 3
    $variavel = [];
    $variavel[0] = "Maça";
    $variavel[1] = "Uva";
    $variavel[2] = "Pera";
    $variavel[3] = "Laranja";
</pre>
<?php
$variavel = ["Maça", "Uva", "Pera", "Laranja"];
var_dump($variavel);
echo"<p>$nbsp;</p>";
echo $variavel[0] . "<br>";
echo $variavel[1] . "<br>";
echo $variavel[2] . "<br>";
echo $variavel[3] . "<br>";

echo "<p>$nbsp;</p>";
for($i= 0; $<count($variavel); $i++){

    echo  $variavel[$i] . "<br>";

    // vetor notas
    $notas = array(5,6,8);
    // como calcular a media de notas do vetor?
    $media = 0;
    for ($i=0; $i < 3; $notas[$i]){

        $media = $media + $notas [$i];
    }
    $media =  $media/3;
    // imprimir a media
    echo $media;
}
?>