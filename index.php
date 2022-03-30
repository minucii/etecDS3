<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Bebidas</title>
    <style>
        *{
            text-align: center;
        }
    </style>
</head>
<body>
    <form method = "post">
    <br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>
            Bebidas: 
        </h1><br>
    <select name = "bebidas">
    <option value = "0" > Selecione</option>
    <option value = "1"> Vinho</option>
    <option value = "2"> Suco</option>
    <option value = "3"> Refrigerante</option>
    </select><br><br>
    <input type = "submit" name = "btnBebidas">
    </form>
<?php
if(isset($_POST["btnBebidas"])){
    switch ($_POST["bebidas"]){
        case 0:
            echo "Selecione uma bebida!";
            break;
        case 1:
            header("location: formVinho.php");
            break;
        case 2:
            header("location: formSuco.php");
            break;
        case 3:
            header("location: formRefri.php");
            break;
    }
}
?>
</body>
</html>  