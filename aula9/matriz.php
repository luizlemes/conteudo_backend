<h2>Matriz
</h2>
<p> São estruras de dados bidimensional,
    onde é necessario informar 2 indices para realizar o acesso de um valor. </p>

    <p>Na prática consiste de um vetor que armazena outros vetores.</p>
    <?php
    $produto1 = [
        "nome" => "Camera",
        "marca" => "LG",
        "preto" => 2500
    ];
    $produto2 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preto" => 7500
    ];
    $produto3 = [
        "nome" => "Smartphone",
        "marca" => "Sansung",
        "preto" => 3500
    ];
    $produtos = [
        $produto1,
        $produto2,
        $produto3,
    ];
    /*imprimir todos os valores da matriz, utilizando
    duas estruturas de repeitção, 1 para as linhas 
    outra para as colunas*/
    for($i=0; $i<=2; $i++){
        foreach($produtos[$i] as $key => $value){
            echo $value. "<br>";
        }
    }
    //outra forma
    foreach($produtos as $value){
        echo "<td>" . $produto["nome"]. "<br>";
        echo "<td>" . $produto["marca"]. "<br>";
        echo "<td>" . $produto["preco"]. "<br>";
    }
    echo "</table>";
    