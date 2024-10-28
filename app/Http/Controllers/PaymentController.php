<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use ErrorException;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    //
    public function payByStripe(Request $request)
    {

        Stripe::setApiKey('sk_test_51OyLHARo6nhrN4h623RYuRgDDGCg5Pr9ejY6AKEWs6h3UfGKzMTkBh14KjH6dqtWuYJ4gyey5oYprIMPOXcCowMP008GLgb9qB');
        try {
            $line_items = [];
            foreach ($request->items as $item) {
                $line_items[] = [
                    'price_data' => [
                        'currency' => 'RON',
                        'product_data' => [
                            'name' => $item['name'], // Numele produsului din coș
                        ],
                        'unit_amount' => $item['sale_price'] * 100, // Prețul produsului din coș în unități minime (în cazul valutelor care nu au subdiviziuni, precum JPY, suma trebuie înmulțită cu 1)
                    ],
                    'quantity' => $item['quantity'], // Cantitatea produsului din coș
                ];
            }

            $checkout_session = Session::create([
                'line_items' => $line_items,
                'mode' => 'payment',
                'success_url' =>'https://vuestripe.com/stripe-checkout/sessions-generator?state=success'
            ]);

            return response()->json(['url' => $checkout_session->url]);

        } catch (ErrorException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
        
    }
    
}

