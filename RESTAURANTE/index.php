<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="one"></div>
    <form action="validacao.php" method="post">
        <div id="header">
            <h1> Picanha de Ouro</h1>
            <nav class= "topo">
                <ul>
		            <li><a href="index.php">Inicio</a></li>
		            <li><a href="#">Cardapio</a></li>
		            <li><a href="#">Contato</a></li>
                    <li><a href="#">Sobre</a></li>
                </ul>
            </nav>
        </div>

        <section class="banner"> 
            <h2><br> <br> Churrasco é arte e sabor!</h2>
        
        </section>

        <br>

        <div class="menu">
            <div class="container">

                <h3> O melhor menu da cidade </h3>
                <br>

                <div class="prato" id="prato1">
                    <img src="files\picanha.jpg" alt="Picanha"><br><br>
                    <a href="carrinho.php">Picanha Bovina</a><br><br>
                    <p> Descrição:</p><br>
                    <p> Picanha Bovina Assada<br> </p><br>
                    <p> Acompanha: Molho e Farofa<br> </p><br>
                    <p> Valor da Porção: 30,00</p>
                </div>

                <div class="prato" id="prato2">
                    <img src="files\costela.jpg" alt="costela"><br><br>
                    <a href="carrinho2.php">Costela Suina</a><br><br>
                    <p> Descrição: </p><br>
                    <p> Costela Suina Assada </p><br>
                    <p> Acompanha: Molho e Farofa </p><br>
                    <p> Valor da Porção: 15,00</p>
                </div>

                <div class="prato" id="prato3">
                    <img src="files\arrozbranco.jpg" alt="Arroz"><br><br>
                    <a href="carrinho3.php">Arroz Branco</a><br><br>
                    <p>Descrição: </p><br>
                    <p> Arroz branco </p><br>
                    <p> Acompanha: Farofa e Salada </p><br>
                    <p> Valor da Porção: 6,00</p>
                </div>

                <div class="prato" id="prato4">
                    <img src="files\batatafrita.jpg" alt="Batata"><br><br>
                    <a href="carrinho4.php">Batata Frita</a><br><br>
                    <p> Descrição: </p><br>
                    <p> Batata Frita Simples </p><br>
                    <p> Acompanha: Molho Rosé </p><br>
                    <p> Valor da Porção: 9,00 </p>
                </div> 

            </div>
        </div>
    </form>
</body>
</html>
