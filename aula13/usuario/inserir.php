<?php

    //import o arquivo de conexao
     require_once "../conexao.php";

     $SQL = "INSERT INTO `usuario` ( `nome`, `login`, `senha`) VALUES ( 'LuizLemes', 'admin123', '123');";

     //PREPARA O COMANDO PARA SER EXECUTADO MYSQL
     $comando = $conexao->prepare($SQL);

     //EXECUTA O COMANDO
     $comando->execute();
     