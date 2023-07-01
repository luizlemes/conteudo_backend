<?php 
    require "../pedido/consultar_todos.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu.php";
?>


<!-- pedidos -->
<div class="container">
  
  <div class="row row-cols-1 row-cols-md-3 g-3">
    <?php foreach($pedidos as $id => $pedido): ?>
          <div class="col">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $pedido->cliente; ?></h4>
                    <div><h5>Valor: <?php echo $pedido->total; ?></h5> </div>       
                    <a href="ler.php?id=<?php echo $pedido->idpedido; ?>" class="btn btn-primary">Ler mais</a>
                </div>
            </div>
          </div>
      <?php endforeach; ?>
  </div>

</div>

<!-- Fim pedidos -->
<?php include_once "../template/rodape.php" ?>