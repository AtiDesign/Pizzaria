<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>
<body>
    <h1>Pizzaria</h1>
    <?php
    $nome = array("(Nenhum)", "Mussarela", "Calabresa", "Catupiry", "Aliche", "Frango", "Milho", "Atum", "Tomate", "Presunto");
    $preco = array(0.00, 9.00, 5.50, 6.50, 8.00, 6.00, 4.50, 7.00, 5.00, 8.00);
    $total = 0;
    $resposta = "A sua pizza de ";
    for ($i = 1; $i <= 9; $i++) {
        if (isset($_REQUEST["Ingrediente". $i])) {
            $ingrediente = $_REQUEST["Ingrediente". $i];
            $total += $preco[$ingrediente];
            $resposta .= $nome[$ingrediente]. ", ";
        }
    }
    $resposta .= " irá custar R$ ";
    echo $resposta. number_format($total, 2);
    ?>
    <p>
        <input type="button" value="Voltar" onclick="javascript:history.back();">
    </p>    
</body>
</html>