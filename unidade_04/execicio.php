<!DOCTYPE html>
<html lang="pt-br">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="_css/estilo.css" rel="stylesheet">
        <title>PHP com AJAX</title>
    
</head>
<body>
        <div id="listagem"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url:'_xml/produtos.xml'
            }).then(sucesso,falha);

            function sucesso(arquivo) {
                var elemento;
                elemento = "<ul>";
                $(arquivo).find('produto').each(function() {
                    var nome = $(this).find('nomeproduto').text();
                    var preco = $(this).find('precounitario').text();
                    elemento += "<li>" + nome + "-R$ " + "</li>";
                });
                elemento += "</ul>";
                $('div#listagem').html(elemento);
            }

            function falha() {

            }
        </script>
</body>
   
</html>
