<?php
   
   //importa o arquivo de conexão
   require_once "conexao.php";

   //verificsa se foi enviada o parem id pela URL
   if(isset($Get['id'])){
   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "DELETE FROM `usuario` WHERE  `idusuario`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   $resultados = $comando->get_result();
   $usuario = $resultados->fetch_object();
  

}







