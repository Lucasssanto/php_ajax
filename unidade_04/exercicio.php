<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
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
                $(arquivo),find('produto').each(function() {
                    var nome =  $(this).find('nomeproduto').tex();
                    elemento += "<li>" + nome + "</li>";
                });

                elemento = "</ul>";
                $('div#listagem').html(elemento);
            }

            function falha(){

            }
        </script>
    </body>
</html>