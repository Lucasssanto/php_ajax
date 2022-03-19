<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <style>
            .curso {
                color:#F88;
            }
        </style>
    </head>

    <body> 
        <div id="curso"></div>

        <script src="jquery.js"></script>
        <script>
            $('div#curso:first').load('dados.txt');
        </script>
    </body>
</html>