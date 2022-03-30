<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Refrigerante</title>
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
            Refrigerante: 
        </h1><br>
        Nome:<br>
        <input type = "text" name = "nome">
        <br/>
        Preço:<br>
        <input type = "number" name = "preco">
        <br/>
        Retornavel:<br>
        <input type = "text" name = "retornavel">
        <br><br>
        <input type = "submit" name = "btnRefri" value = "Enviar">
    </form>
<?php
    require_once 'Refrigerante.php';
    if(isset($_POST["btnRefri"])){
        $refri1 = new Refrigerante();
        $refri1->setNome($_POST["nome"]);
        $refri1->setPreco($_POST["preco"]);
        $refri1->setRetornavel($_POST["retornavel"]);
        $resultado = $refri1->mostrarBebida();
        echo $resultado;
        $retorno = $refri1->verificaPreco($refri1->getPreco());
        if($retorno == true){
            echo '<br>'."Dentro do orçamento!";
        }else{
            echo '<br>'."Caro";
        }
    }
?>
</body>
</html>
</html>