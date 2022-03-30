<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Suco</title>
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
            Suco: 
        </h1><br>
        Nome:<br>
        <input type = "text" name = "nome">
        <br/>
        Preço:<br>
        <input type = "number" name = "preco">
        <br/>
        Sabor:<br>
        <input type = "text" name = "sabor">
        <br><br>
        <input type = "submit" name = "btnSuco" value = "Enviar">
    </form>
<?php
    require_once 'Suco.php';
    if(isset($_POST["btnSuco"])){
        $suco1 = new Suco();
        $suco1->setNome($_POST["nome"]);
        $suco1->setPreco($_POST["preco"]);
        $suco1->setSabor($_POST["sabor"]);
        $resultado = $suco1->mostrarBebida();
        echo $resultado;
        $retorno = $suco1->verificaPreco($suco1->getPreco());
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