<?php

$produto = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$pagamento = $_POST['pagamento'];
$rua = $_POST['endereco'];
$bairro = $_POST['bairro'];
$n = $_POST['num'];

if($produto == "Picanha Bovina"){
    echo "Produto: " . $produto . "<br>";
}elseif($produto == "Costela Suina"){
    echo "Produto: " . $produto . "<br>";
}elseif($produto == "Arroz Branco"){
    echo "Produto: " . $produto . "<br>";
}else{
    echo "Produto: " . $produto . "<br>";
}

if($preco == "30.00"){
    echo "Preço: " . $preco . "<br>";
}elseif($preco == "15.00"){
    echo "Preço: " . $preco . "<br>";
}elseif($preco == "6.00"){
    echo "Preço: " . $preco . "<br>";
}else{
    echo "Preço: " . $preco . "<br>";
}

if($quantidade != 0){
    echo "Quantidade: " . $quantidade . "<br>";
}else{
    header("Location: carrinho.php?msg=quant");
}

if($pagamento != ""){
    echo "Pagamento: " . $pagamento . "<br>";
}else{
    header("Location: carrinho.php?msg1=pg");
}

if($rua != ""){
    echo "Endereço: " . $rua . "<br>";
}else{
    header("Location: carrinho.php?msg2=end");
}

if($bairro != ""){
    echo "Bairro: " . $bairro . "<br>";
}else{
    header("Location: carrinho.php?msg3=bairro");
}

if($n != ""){
    echo "Número: " . $n . "<br>";
}else{
    header("Location: carrinho.php?msg4=num");
}




