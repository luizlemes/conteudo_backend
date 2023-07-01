<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabecalho.php";
    require_once "../template/menu.php";



?>

<div class="container">
    <br><h1>Cadastro de pedidos</h1>
    <hr>

    <form action="<?php echo isset($pedido) ? "atualizar.php" : "inserir.php";?>" method="post" enctype="multipart/form-cliente">

        <input type="hidden" name="idpedido" value="<?php echo $pedido->idpedido ?? "" ;?>"><br>

        <label class="form-label">Cliente</label><br>
        <input class="form-control" type="text" name="cliente" value="<?php echo $pedido->cliente ?? "" ;?>"><br>
        
        <label class="form-label">Data</label><br>
        <input class="form-control" type="text" name="data" value="<?php echo $pedido->data ?? "" ;?>"><br>

        <label class="form-label">Status</label><br>
        <select class="form-select" name="status" id="">
            <option value="Saiu para entrega" <?php echo isset($pedido->status) ? $pedido->status == "Saiu para entrega" ? "selected" : "" : ""; ?>>Saiu para entrega</option>
            <option value="Em andamento"<?php echo isset($pedido->status) ? $pedido->status == "Em andamento" ? "selected" : "" : ""; ?>>Em andamento</option>
            <option value="Entregue" <?php echo isset($pedido->status) ? $pedido->status == "Entregue" ? "selected" : "" : ""; ?>>Entregue</option>
        </select>
        <br>

        <label class="form-label">Total</label><br>
        <input class="form-control" type="text" name="total" value="<?php echo $pedido->total ?? "" ;?>"><br>
        
        <div class="text-end">
        <button class="btn btn-primary" type="submit">Inserir</button></div>
        
    </form>
    </div>
    <?php require_once "../template/rodape.php";?>