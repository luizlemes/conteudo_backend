<?php
   
   //importa o arquivo de conexão
   require_once "conexao.php";
   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `usuario`";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   $resultados = $comando->get_result();

   $usuarios = [];
   while ($usuario = $resultados->fetch_object()){
      $usuarios[] = $usuario;
   }?>









