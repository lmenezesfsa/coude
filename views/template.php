<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestor de Links</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        #parent{
          /* background-color: aqua; */
          height: 100%;
          width: 100%;
        }

        #child{
          /* background-color: blueviolet; */
          height: 100%;
          width: 70%;
          margin: auto;
        }
        body{
          margin-top: 20px;
        }
    </style>
  </head>
  <body>
  <div id="parent">
    <div id='child'>
      <?php
          $this->carregarViewNoTemplate($nomeView, $dadosModel);
      ?>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>

</html>