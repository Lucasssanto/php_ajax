<?php
    // preparar o arquivo para callback
    $callback = isset($_GET['callback']) ? $_GET['callback'] : false;
    //abrir conexao
    $conecta = mysqli_connect("localhost","root","","andes2");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);

    $retotno = array();
    while($linha = mysqli_fetch_object($produtos)) {
        $retotno[] = $linha;
    }

    echo ($callback ? $callback . '(' : '') . json_encode($retotno).  ($callback? ')' : '');

    // fechar conecta
    mysqli_close($conecta);
?>