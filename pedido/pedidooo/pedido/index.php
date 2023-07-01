<?php 
    require "consultar_todos.php"; 
    require_once "../template/cabecalho.php";
    require_once "../template/menu.php";


?>

    <div class="container">
    <h1><br>Pedidos</h1> 
    <hr>
    <table class="table" id="tabela_dados">
    <thead>
        <tr>
            <th scope="col">Cliente</th>
            <th scope="col">Data</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($pedidos as $pedido): ?>
        <tr>
            <td><?= $pedido -> cliente ?></td>
            <td><?= $pedido -> data ?></td>
            <td><?= $pedido -> status ?></td>
            <td><?= $pedido -> total ?></td>

            <td class="text_end" width="25%">
              <a href="excluir.php?id=<?= $pedido -> idpedido ?>" class="btn btn-danger"> 
                <i class="fa-solid fa-trash-can"></i> 
                Excluir
              </a><ul></ul>

                <a href="formulario.php?id=<?= $pedido -> idpedido ?>" class="btn btn-primary"> 
                <i class="fa-solid fa-pen-to-square"></i> 
                Atualizar
              </a>
            </td>
        </tr>
        <?php endforeach; ?>

    </tbody>
    
    </table>
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success">
        Inserir novo
    </a>
    </div>
    </div>

    <?php require_once "../template/rodape.php"; ?>