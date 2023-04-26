<?php

    //import o arquivo de conexao
     require_once "../conexao.php";


     $nome = $_POST["nome"];
     $login = $_POST["login"];
     $senha = $_POST["senha"];
     
     $SQL = "INSERT INTO `usuario` ( `nome`, `login`, `senha`) VALUES ( '$nome', '$login', '$senha');";

     echo $SQL;
     //PREPARA O COMANDO PARA SER EXECUTADO MYSQL
     $comando = $conexao->prepare($SQL);

     //EXECUTA O COMANDO
     $comando->execute();
     