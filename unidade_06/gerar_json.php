<?php
    //abrir conexao
    $conecta = mysqli_connect("localhost","root","","andes2");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);

    $retotno = array();
    while($linha = mysqli_fetch_object($produtos)) {
        $retotno[] = $linha;
    }

    echo json_encode($retotno);

    // fechar conecta
    mysqli_close($conecta);
?>