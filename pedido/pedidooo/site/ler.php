<?php  
    include_once "../template/cabecalho.php";
    include_once "../template/menu.php";
    include_once "../pedido/consultar_por_id.php";
    //require_once "../template/menuzin.php";

?>

<div class="container">
   <h1><?php echo $pedido->cliente; ?></h1>
   <hr>
   <p>Data do pedido: <?php echo $pedido->data; ?></p>
   <p>Status do pedido: <?php echo $pedido->status; ?></p>
   <p>Valor total: <?php echo $pedido->total; ?> </p>

</div>

<?php  include_once "../template/rodape.php" ?>