<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
  <style type="text/css">
    img {
        vertical-align: middle;
        text-align: center;
        display: block;
        margin: 0 auto;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Exemplo PayMee Brasil</h2>
  <small><a href="https://documenter.getpostman.com/view/3199663/api-paymee-10/7TDmbJx" target="_blank">Referência</a></small>
  <div id="credentials">
    <div class="alert alert-danger">
        <strong>Atenção!</strong> Nunca trafegue suas credenciais pelo frontend, aqui é apenas para testes!
    </div>
    <div class="form-group">
        <label for="amount">x-api-key:</label>
        <input type="text" class="form-control" id="apiKey" placeholder="sua x-api-key sandbox" name="apiKey" required>
        <small><a href="https://apisandbox.paymee.com.br/register" target="_blank">Solicitar credenciais</a></small>
    </div>
    <div class="form-group">
        <label for="amount">x-api-token:</label>
        <input type="text" class="form-control" id="apiToken" placeholder="sua x-api-token sandbox" name="apiToken" required>
        <small><a href="https://apisandbox.paymee.com.br/register" target="_blank">Solicitar credenciais</a></small>
    </div>
</div>
  <p>Selecione o método de pagamento desejado:</p>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu1">Pagamento em dinheiro</a></li>
    <li><a data-toggle="tab" href="#menu2">Transferência bancária</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <h3>Selecione o banco desejado</h3>
      <ul class="list-inline" id="list-wire">
    </ul>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Selecione o banco desejado</h3>
      <ul class="list-inline" id="list-cash">
      </ul>
    </div>
  </div>

  <div id="fields" style="display:none">
    <div class="form-group">
        <label for="amount">Valor:</label>
        <input type="text" class="form-control" id="amount" placeholder="Valor do pedido" name="amount" required>
        <input type="hidden" id="method" name="method">
    </div>
    <div class="form-group">
            <label for="referenceCode">Código do pedido:</label>
            <input type="text" class="form-control" id="referenceCode" placeholder="Código unico do pedido" name="referenceCode" required>
        </div>
    <div class="form-group">
        <label for="cpf">CPF/CNPJ:</label>
        <input type="text" class="form-control" id="cpf" placeholder="Shopper CPF/CNPJ" name="shopper.cpf" required>
    </div>
    <div class="form-group">
        <label for="fullName">Full Name:</label>
        <input type="text" class="form-control" id="fullName" placeholder="Shopper FullName" name="shopper.fullName" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Shopper email" name="shopper.email" required>
    </div>
    <div class="form-group">
        <label for="phone">Mobile Phone:</label>
        <input type="tel" class="form-control" id="phone" placeholder="Shopper phone" name="shopper.mobile" required>
    </div>
    <div class="form-group" id="shopperAgency" style="display:none">
        <label for="agency">Shopper Bank Agency:</label>
        <input type="text" class="form-control" id="agency-bb" placeholder="Shopper agency" name="shopper.agency" required>
        <input type="text" class="form-control" id="agency-itau" placeholder="Shopper agency" name="shopper.agency" required>
        <input type="hidden" class="form-control" id="agency" >
    </div>
    <div class="form-group" id="shopperAccount" style="display:none">
        <label for="account">Shopper Bank Account:</label>
        <input type="text" class="form-control" id="account" placeholder="Shopper account" name="shopper.account" required>
    </div>
    <button type="button" id="btnTest" class="btn btn-default">Enviar</button>
  </div>
  
  <div>
     <div class="form-group">
        <label>Response</label>
        <br>
        <textarea id="response" rows="5" cols="100"></textarea>
    </div>
  </div>

</div>
</body>
<script type="text/javascript">
var availableMethods = [
        {
            method: "BB_TRANSFER",
            label: "Banco do Brasil",
            img: "https://www2.paymee.com.br/redir/images/resource_17987095.png", 
            isCash: false, 
            fields: {
                "agency": true,
                "account": true,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
        {
            method: "BRADESCO_TRANSFER",
            label: "Bradesco",
            img: "https://www2.paymee.com.br/redir/images/resource_17987096.png", 
            isCash: false, 
            fields: {
                "agency": false,
                "account": false,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
        {
            method: "ITAU_TRANSFER_PF",
            label: "Itaú - Pessoa Física",
            img: "https://www2.paymee.com.br/redir/images/resource_17987097.png", 
            isCash: false, 
            fields: {
                "agency": false,
                "account": false,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
        {
            method: "ITAU_TRANSFER_PJ",
            label: "Itaú - Pessoa Júridica",
            img: "https://www2.paymee.com.br/redir/images/resource_17987097.png", 
            isCash: false, 
            fields: {
                "agency": true,
                "account": true,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
        {
            method: "ITAU_DI",
            label: "Itaú - Depósito identificado",
            img: "https://www2.paymee.com.br/redir/images/resource_17987097.png", 
            isCash: true, 
            fields: {
                "agency": false,
                "account": false,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
        {
            method: "SANTANDER_TRANSFER",
            label: "Santander",
            img: "https://www2.paymee.com.br/redir/images/resource_17987098.png", 
            isCash: false, 
            fields: {
                "agency": false,
                "account": false,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
        {
            method: "SANTANDER_DI",
            label: "Santander - Depósito identificado",
            img: "https://www2.paymee.com.br/redir/images/resource_17987098.png", 
            isCash: true, 
            fields: {
                "agency": false,
                "account": false,
                "cpf": true,
                "fullName": true,
                "email": true,
                "mobile": true
            }
        },
    ];
$(document).ready(function() {
    $("#cpf").mask('000.000.000-00', {reverse: true});
    $('#phone').mask('(00) 00000-0000');
    $('#agency-bb').mask('9990-A', {reverse: true, onComplete: function(agencia) {
        $("#agency").val(agencia);
    }});
    $('#agency-itau').mask('0000', {reverse: true, onComplete: function(agencia) {
        $("#agency").val(agencia);
    }});
    $('#account').mask('99999999990-A', {reverse: true});
    $("#amount").mask("#.##0,00", {reverse: true});
    $.each(availableMethods, function(x) {
        var ulGroup = (this.isCash) ? $("#menu1 ul") : $("#menu2 ul");
        ulGroup.append(
            $('<li>').attr('class', 'list-inline-item').append(
                $('<a>').attr('href','javascript:void(0);').attr('onclick', 'showFields(' + x + ')').append(
                    $('<img>').attr('style', 'max-height: 65px;').attr('class', 'image-responsive').attr('src', this.img)).append(
                        $('<div>').attr('style', 'display:block;text-align:center;').append(this.label)
                    ))
        );
    });

    $("#btnTest").click(createTransaction);
});

var showFields = function(paymentMethodIndex) {
    $("#method").val(availableMethods[paymentMethodIndex].method)
    $("#fields").show();
    if(availableMethods[paymentMethodIndex].fields.agency && availableMethods[paymentMethodIndex].method === "ITAU_TRANSFER_PJ") {
        $("#shopperAgency").show();
        $("#agency-itau").show();
        $("#agency-bb").hide();
    } else if(availableMethods[paymentMethodIndex].fields.agency && availableMethods[paymentMethodIndex].method === "BB_TRANSFER") {
        $("#shopperAgency").show();
        $("#agency-bb").show();
        $("#agency-itau").hide();
    } else {
        $("#shopperAgency").hide();
        $("#agency-itau").hide();
        $("#agency-bb").hide();
    }

    if(availableMethods[paymentMethodIndex].fields.account) {
        $("#shopperAccount").show();
    } else {
        $("#shopperAccount").hide();
    }
};

var createTransaction = function() {
    
    var postData = JSON.stringify({
                currency: "BRL",
                amount: parseFloat($("#amount").val().replace(' ', '').replace('.', '').replace(',', '.')),
                referenceCode: $("#referenceCode").val(),
                maxAge: 1880,
                paymentMethod: $("#method").val(),
                callbackURL: null,
                //use suas credencias apenas para testes!!!!!!!
                //apiKey: $("#apiKey").val(),
                //use suas credencias apenas para testes!!!!!!!
                //apiToken: $("#apiToken").val(),
                shopper: {
                    id: null,
                    fullName: $("#fullName").val(),
                    cpf: $("#cpf").val(),
                    email: $("#email").val(),
                    mobile: $("#phone").val(),
                    agency: $("#agency").val(),
                    account: $("#account").val()
                }
            }
    );
    $("#response").text("aguarde... enviando o post:\r\n" + postData);
    console.log(postData);
    $.ajax({
        type: 'POST',
        url: 'simple_ajax_example.php',
        data: postData,
        success: function(data) { console.log(data);$("#response").text(JSON.stringify(data)) },
        error: function(XMLHttpRequest, textStatus, errorThrown) { console.log(errorThrown);$("#response").text(textStatus + " check your console") },
        contentType: "application/json",
        dataType: 'json'
    });
}
</script>
</html>
