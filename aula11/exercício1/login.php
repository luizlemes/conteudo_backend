<h1>Request Method : GET</h1>
<?php
IF (isset($_POST['usuario']){}
    if($_GET['usuario'] == 'adm'&& $_GET['senha']== '123'){
        echo "usuàrio logado";
    }else{
        echo "usuàrio não identificado";
    }
else{ header("Location: form_login.html");}
?>