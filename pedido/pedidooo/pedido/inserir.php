<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   //var_dump ($_POST);

   // Verifica se o nome, login e senha foram enviados do formulario de cadastro
   if(isset($_POST['idpedido']) && isset($_POST['cliente']) && isset($_POST['data']) && isset($_POST['status'])  && isset($_POST['total']) ){

      //verifica se o nome, login e senha foram enviado
      //do formulario de cadastro
      //require_once "faz_upload.php";
      $idpedido = $_POST['idpedido'];
      $cliente = $_POST['cliente'];
      $data = $_POST['data'];
      $status = $_POST['status'];
      $total = $_POST['total'];

      //cria uma variável com um comando SQL
      $SQL = "INSERT INTO `pedido` (`cliente`, `data`, `status`, `total`) VALUES (?, ?, ?, ?)";
   
      //prepara o comando para ser executado no mysql
      $comando = $conexao->prepare($SQL);

      //faz a vinculação dos parâmetros ?, ?, ?
      $comando->bind_param("ssss", $cliente, $data, $status, $total);

      //executa o comando
      $comando->execute();
   }
   
   //volta para o formulário
   header("Location: index.php");

   







