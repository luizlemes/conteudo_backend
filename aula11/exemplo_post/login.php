<h1>Request Method : POST</h1>
<?php
if($_POST['usuario'] == 'adm'&& $_POST['senha']== '123'){
    echo "usuàrio logado";
}else{
    echo' usuàrio não identificado;
}