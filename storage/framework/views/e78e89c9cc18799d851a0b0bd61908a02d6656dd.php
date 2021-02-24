<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Brunna Isabel Rosa">
    <title>Arquivo Musical</title>

    <link rel="stylesheet" href="css/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://www.w3schools.com/lib/w3data.js"></script>

  </head> 
  <body>    

    <header class="site-header sticky-top py-1">
      <div w3-include-html="header.html"></div>

    </header>

    <main>
      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
          <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">Arquivo Musical</h1>
            <p class="lead fw-normal">Suas faixas e álbuns preferidos em um só lugar.</p><br>
            <a class="btn btn-outline-primary" href="#">Cadastrar Faixas</a>
            <a id="albuns" class="btn btn-outline-secondary" href="#">Cadastrar Álbuns</a>
          </div>
      </div>
    </main>

    <!--  <div id='pginicial'></div>
          <div id='faixa'></div>
          <div id='album'></div> -->

    <!--  -->
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        w3IncludeHTML();
    </script>

<!--     <script>
        $("#pginicial").load("musical.php");
    </script> -->

  </body>
</html>
