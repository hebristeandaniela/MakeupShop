<?php

// Include the Stripe PHP library 
require_once 'stripe-php/init.php';

// Set API key
\Stripe\Stripe::setApiKey(getenv('STRIPE_API_KEY'));

$response = array(
    'status' => 0,
    'error' => array(
        'message' => 'Invalid Request!'
    )
);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = file_get_contents('php://input');
    $request = json_decode($input);
}

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);
    echo json_encode($response);
    exit;
}

if (!empty($request->createCheckoutSession)) {
    // Convert product price to cent 
    $stripeAmount = round($productPrice * 100, 2);

    // Create new Checkout Session for the order 
    try {
        $checkout_session = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'product_data' => [
                            'name' => $productName,
                            'metadata' => [
                                'pro_id' => $productID
                            ]
                        ],
                        'unit_amount' => $stripeAmount,
                        'currency' => $currency,
                    ],
                    'quantity' => 1
                ]
            ],
            'mode' => 'payment',
            'success_url' => STRIPE_SUCCESS_URL,
            'cancel_url' => STRIPE_CANCEL_URL,
        ]);
    } catch (Exception $e) {
        $api_error = $e->getMessage();
    }

    if (empty($api_error) && $checkout_session) {
        $response = array(
            'status' => 1,
            'message' => 'Comanda a fost completata cu succes!',
            'sessionId' => $checkout_session->id
        );
    } else {
        $response = array(
            'status' => 0,
            'error' => array(
                'message' => 'Comanda a esuat, va rugam sa incercati din nou! ' . $api_error
            )
        );
    }
}

// Return response 
echo json_encode($response);

?>