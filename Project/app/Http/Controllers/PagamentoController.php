<?php
/*
use MercadoPago\SDK;

SDK::setAccessToken(env('MERCADOPAGO_ACCESS_TOKEN'));

// Controlador
function store(Request $request)
{
    // ... validação dos dados do formulário ...

    $preference = new \MercadoPago\Preference();
    // ... configurar o objeto de preferência ...
    $preference->save();

    return redirect($preference->sandbox_init_point);
}

$preference = new \MercadoPago\Preference();

$item = new \MercadoPago\Item();
$item->title = 'Meu Produto';
$item->quantity = 1;
$item->unit_price = 100;

$preference->items = array($item);
$preference->back_urls = array(
    "success" => "http://your-site.com/success",
    "failure" => "http://your-site.com/failure",
    "pending" => "http://your-site.com/pending"
);

$preference->save();
$payment_url = $preference->sandbox_init_point;

return redirect($payment_url);

// Controlador
function createPayment()
{
    // ... código para criar o objeto de preferência ...

    $preference->save();
    return redirect($preference->sandbox_init_point);
}

// Rota para tratar o retorno do pagamento
Route::get('/success', function () {
    // Lógica para tratar o pagamento com sucesso
});*/