<?php
/**
 * PayMee Brasil 2018
 * https://www.paymee.com.br/
 * para maiores informações de request/response acesse:
 * https://documenter.getpostman.com/view/3199663/api-paymee-10/7TDmbJx
 * 0.0.1-snapshot
 */

require 'vendor/autoload.php';

use PayMee\Enums\CheckoutType;
use PayMee\Helpers\PayMeeCheckout;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("X_API_KEY", "2fa5289e-921e-35a5-ba63-5c3fd310beb8");
define("X_API_TOKEN", "cd84e7e1-2b10-3232-a2f1-b13ee3068a4c");
define("IS_SANDBOX", true);

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("HTTP/1.0 405 please post...");
    echo "method not allowed";
    return;
}

$data = json_decode(file_get_contents('php://input'));

if($data->shopper === null) {
    header("HTTP/1.0 400");
    echo "bad request shopper missing";
    return;
}

//Define os dados do comprador
$shopper = new PayMee\Model\Shopper();
$shopper
        //Email do comprador (preenchimento obrigatório)
        ->withEmail($data->shopper->email)
        //Celular do comprador (preenchimento obrigatório)
        ->withMobile($data->shopper->mobile)
        //Nome completo do comprador (preenchimento obrigatório)
        ->withFullName($data->shopper->fullName)
        //CPF ou CNPJ do comprador (preenchimento obrigatório)
        ->withCpf($data->shopper->cpf)
        //Agência do comprador (obrigátorio apenas para checkout transparente em alguns casos)
        ->withAgency($data->shopper->agency)
        //Conta do comprador (obrigátorio apenas para checkout transparente em alguns casos)
        ->withAccount($data->shopper->account);

//Cria uma instancia do PayMeeCheckout para criar a cobrança
//x-api-key, x-api-token, is_sandbox
$paymeeCheckout = new PayMeeCheckout(X_API_KEY, X_API_TOKEN, IS_SANDBOX);
try {
    $response = $paymeeCheckout
                //Moeda da transação
                ->withCurrency($data->currency)
                //Valor da transação
                ->withAmount($data->amount)
                //codigo identificador da venda
                ->withReferenceCode($data->referenceCode)
                //prazo maximo da venda em minutos
                ->withMaxAge($data->maxAge)
                //Forma de pagamento escolhido
                //Opções aceitas:
                //PaymentMethod::BB_TRANSFER
                //PaymentMethod::BRADESCO_TRANSFER
                //PaymentMethod::BRB_DI
                //PaymentMethod::ITAU_TRANSFER_GENERIC
                //PaymentMethod::ITAU_TRANSFER_PF
                //PaymentMethod::ITAU_TRANSFER_PJ
                //PaymentMethod::ITAU_DI
                //PaymentMethod::SANTANDER_TRANSFER
                //PaymentMethod::SANTANDER_DI
                ->withPaymentMethod($data->paymentMethod)
                //Endereço para notificação do pagamento
                ->withCallbackURL($data->callbackURL)
                //Informações do comprador
                ->withShopper($shopper)
                //Cria a solicitação da transação
                //true para transparente
                //false para redirecionamento
                ->create(CheckoutType::SEMI_TRANSPARENT, true);
                echo $response;
} catch(Exception $e) {
    echo "oops... " . $e->getMessage();
}
