<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://www.missaorh.com.br/favicon.ico">

    <title><?php echo $this->viewTitle(); ?></title>

    <!-- Principal CSS do Bootstrap -->
    <link href="https://getbootstrap.com.br/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="https://getbootstrap.com.br/docs/4.1/examples/checkout/form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container-fluid">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.missaorh.com.br/assets/userfiles/archives/63bb6750cfaf8.png" alt="" width="150" >
        <h2><?php echo $this->viewTitle(); ?></h2>
        <p class="lead">Por favor, preencha o formulário abaixo com suas informações para <BR />darmos continuidade ao processo de elaboração do contrato.</p>
        <!-- <p class="lead">Desde já agradecemos pela preferência.</p> -->
      </div>

      <?php self::loadViewInTemplate($viewName, $viewData); ?>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; <?php echo $this->viewCopyright(); ?> - <?= date('Y');?></p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacidade</a></li>
          <li class="list-inline-item"><a href="#">Termos</a></li>
          <li class="list-inline-item"><a href="#">Suporte</a></li>
        </ul>
      </footer>
    </div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   	<script src="<?=BASE_URL;?>assets/js/jquery.maskMoney.min.js" type="text/javascript"></script>
   	<script src="<?=BASE_URL;?>assets/js/jquery.mask.js" type="text/javascript"></script>
   	<script src="<?=BASE_URL;?>assets/js/scripts.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script>
      // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
          var forms = document.getElementsByClassName('needs-validation');

          // Faz um loop neles e previne envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
