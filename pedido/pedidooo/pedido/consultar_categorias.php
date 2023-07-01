<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //cria uma variável com um comando SQL
   $SQL = "SELECT distinct cliente FROM pedido";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta - todas as linhas de resultados
   $resultados = $comando->get_result();

   //pega todas linha de resultado da consulta
   $clientes = [];
   while ($cliente = $resultados->fetch_object()){
      $clientes[] = $cliente;
   }

   






   







