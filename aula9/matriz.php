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
        $produto3];
