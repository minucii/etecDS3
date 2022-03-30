<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Vinho</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>
    <form method = "post">
    <br><br><br><br><br><br><br><br><br>
        <h1>
            Vinho: 
        </h1><br>
        Nome:<br>
        <input type = "text" name = "nome">
        <br/>
        Preço:<br>
        <input type = "number" name = "preco">
        <br/>
        Safra:<br>
        <input type = "number" name = "safra">
        <br/>
        Tipo:<br>
        <input type = "text" name = "tipo">
        <br><br>
        <input type = "submit" name = "btnVinho" value = "Enviar">
    </form>
<?php
    require_once 'Vinho.php';
    if(isset($_POST["btnVinho"])){
        $vinho1 = new Vinho();
        $vinho1->setNome($_POST["nome"]);
        $vinho1->setPreco($_POST["preco"]);
        $vinho1->setSafra($_POST["safra"]);
        $vinho1->setTipo($_POST["tipo"]);
        $resultado = $vinho1->mostrarBebida();
        echo $resultado;
        $retorno = $vinho1->verificaPreco($vinho1->getPreco());
        if($retorno == true){
            echo '<br>'."Dentro do orçamento!";
        }else{
            echo '<br>'."Caro";
        }
    }
?>
</body>
</html>