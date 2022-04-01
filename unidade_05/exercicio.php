<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="_css/estilo.css" rel="stylesheet">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <button id="botao">Carregar json</button>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $('button#botao').click(function() {
                $('div#listagem').css('display', 'block');
                carregarDados();
            });
            function carregarDados() {
                $.getJSON('_json/produtos.json', function(data) {
                var elemento;

                elemento = "<ul>";
                $.each(data, function(i, valor) {
                    elemento += "<li class='nome'>" + valor.nomeproduto +  "</li>";
                    elemento += "<li class='preco'>" + valor.precounitario +  "</li>";
                });
                elemento += "</ul>";

                $('div#listagem').html(elemento);
            }) 
            }
           
        </script>
    </body>
</html>