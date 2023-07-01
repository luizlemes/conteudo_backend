<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM pedido WHERE cliente LIKE ?";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //pega o valor categoria enviado via GET pela URL ou um valor em branco
   $categoria = $_GET['categoria'] ?? "";
   $categoria =  "%$categoria%";

   //vinculo a avariavel $categoria com o param ? no SQL
   $comando->bind_param("s", $categoria);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultado
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $pedidos = [];
   while ($pedido = $resultados->fetch_object()){
      $pedidos[] = $pedido;
   }
   







