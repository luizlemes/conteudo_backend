<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";
   
   $idpedido = $_POST['idpedido'];
   $cliente = $_POST['cliente'];
   $data = $_POST['data'];
   $status = $_POST['status'];
   $total = $_POST['total'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `pedido` SET `cliente`= ?, `data`= ? , `status`= ?, `total`=? WHERE  `idpedido`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $cliente, $data, $status, $total, $idpedido);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







