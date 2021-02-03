<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css" type="text/css">
    <title>Carrinho</title>
</head>
<body>

    <?php
        if(isset($_GET['msg']) == "quant"){
            echo "Campo Quantidade não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg1']) == "pg"){
            echo "Campo Pagamento não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg2']) == "end"){
            echo "Campo Endereço não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg3']) == "bairro"){
            echo "Campo Bairro não pode ficar vazio!<br>";
        }
        elseif(isset($_GET['msg4']) == "num"){
            echo "Campo Número não pode ficar vazio!<br>";
        }
    ?>

    <form action="exibir.php" method="post">
        <div id="header">
            <h1>Carrinho</h1>
            <nav class= "topo">
                <ul>
		            <li><a href="index.php">Inicio</a></li>
		            <li><a href="#">Cardapio</a></li>
		            <li><a href="#">Contato</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </nav>

        </div>
        <div class="menu2"> <br>
            <div class="pedido">
                <label for=""><b>Produto:</b></label>
                <input type="text" name="nome" id="" value="Picanha Bovina"><br><br>

                <label for=""><b>Preço: </b></label>
                <input type="number" name="preco" id="" value="30.00"><br><br>

                <label for=""><b>Quantidade: </b></label>
                <input type="number" name="quantidade" id="" min="0" step="1" value="0"><br><br>

                <label for=""><b>Pagamento: </b></label><br>
                <input type="radio" name="pagamento" id="p1" value="Credito">
                <label for="" id="">Crédito</label>
                <input type="radio" name="pagamento" id="p2" value="Debito">
                <label for="" id="">Débito</label><br><br>
            
                <label for=""><b>Entrega:</b></label><br><br>

                <label for="" id="">Endereço: </label>
                <input type="text" name="endereco" id=""><br>

                <label for="" id="">Bairro: </label>
                <input type="text" name="bairro" id=""><br>

                <label for="" id="  ">Número: </label>
                <input type="text" name="num" id=""><br><br>

                <button type="submit" value="Confirmar" id="button">Comprar</button>
            </div>
        </div>
    </form>

    
</body>
</html>