<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Processing;


use Stripe\Checkout\Session;
use Stripe\Stripe;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->get('product_id')) {
            return [
                'message' => 'Cart items returned',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }


        // Getting product details.

        $product = Product::where('id', $request->get('product_id'))->first();

        // $productFoundInCart = Cart::where('product_id', 
        // $request->get('product_id'))->pluck('id');

        $productFoundInCart = Cart::where('product_id', $request->get('product_id'))->where('user_id', auth()->user()->id)->get();


        if ($productFoundInCart->isEmpty()) {
            // Adding Product in cart.

            $cart = Cart::create([
                'product_id' => $product->id,
                'quantity' => 1,
                'price' => $product->sale_price,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            // Incrementing Product Quantity.

            $cart = Cart::where('product_id', $request->get('product_id'))->where('user_id', auth()->user()->id)->increment('quantity');
        }

        // Check user cart items.

        if ($cart) {
            return [
                'message' => 'Cart Updated',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * 
     */
    public function getCartItemsForCheckout()
    {
        $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
        $finalData = [];
        $amount = 0;

        foreach ($cartItems as $cartItem) {
            // Verificăm dacă există o relație validă cu produsul
            if ($cartItem->product) {
                // Folosim direct $cartItem->product pentru a accesa produsul asociat
                $cartProduct = $cartItem->product;

                // Asigurăm că $cartProduct este un obiect valid înainte de a accesa proprietățile sale
                if ($cartProduct) {
                    $finalData[$cartItem->product_id]['id'] = $cartProduct->id;
                    $finalData[$cartItem->product_id]['name'] = $cartProduct->name;
                    $finalData[$cartItem->product_id]['quantity'] = $cartItem->quantity;
                    $finalData[$cartItem->product_id]['sale_price'] = $cartItem->price;
                    $finalData[$cartItem->product_id]['total'] = $cartItem->price * $cartItem->quantity;
                    $amount += $cartItem->price * $cartItem->quantity;
                }
            }
        }

        $finalData['totalAmount'] = $amount;

        return response()->json($finalData);
    }
    /// test
    public function decrementProduct(Request $request)
    {
        $product = Product::where('id', $request->get('product_id'))->first();

        $productFoundInCart = Cart::where(
            'product_id',
            $request->get('product_id')
        )->where('user_id', auth()->user()->id)->pluck('id');



        if ($productFoundInCart->isEmpty()) {

        } else {
            // decrementing Product Quantity.

            $cart = Cart::where('product_id', $request->get('product_id'))->where('user_id', auth()->user()->id)->decrement('quantity');
            Cart::where('quantity', '0')->delete();
        }
        if ($cart) {
            return [
                'message' => 'Cart Updated',
                'items' => Cart::where('user_id', auth()->user()->id)->sum('quantity'),
            ];
        }

    }
    public function deleteProduct(Request $request)
    {
        Cart::where('user_id', auth()->user()->id)->delete();

        return ['success' => 'Produsele au fost sterse cu succes'];
    }
    // end test.



    //payment 
    public function processPayment(Request $request)
    {
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $address = $request->get('address');
        $city = $request->get('city');
        $state = $request->get('state');
        $zipCode = $request->get('zipCode');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $country = $request->get('country');

        $amount = $request->get('amount');
        $paymentMethod = $request->get('paymentMethod');

       



        if ($paymentMethod === 'CASH') {
            $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();

            foreach ($cartItems as $cartItem) {
                $product = $cartItem->product->first(); // Accesăm primul element al colecției


                if ($product) {

                    $ordersArray[] = [
                        'name' => $product->name,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->price,
                    ];
        
                }
            }
            // Procesează plata cu numerar
            $client_id = auth()->user()->id;
            $processingDetails = Processing::create([
                'client_id' => $client_id,
                'client_name' => $firstName . ' ' . $lastName,
                'client_address' => json_encode([
                    'line1' => $address,
                    'postal_code' => $zipCode,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                ]),
                'order_details' => json_encode($ordersArray),
                'amount' => $amount,
                'currency' => 'RON',
                'payment_method' => 'CASH',
                'payment_status'=>'success - cash',

            ]);

            if ($processingDetails) {

                if ($paymentMethod === 'CASH' || $paymentMethod === 'CARD') {
                // Golește coșul după succesul plății.
                Cart::where('user_id', $client_id)->delete();
                }
                return response()->json(['success' => 'Comanda a fost completata cu succes']);
            } else {
                return response()->json(['error' => 'Comanda a esuat, va rugam sa incercati din nou']);
            }



        } elseif ($paymentMethod === 'CARD') {
            $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
            $lineItems = [];
            $api_error = null;
            Stripe::setApiKey(env('STRIPE_KEY'));
            $firstName = $request->get('firstName');
            $lastName = $request->get('lastName');
            $address = $request->get('address');
            $city = $request->get('city');
            $state = $request->get('state');
            $zipCode = $request->get('zipCode');
            $email = $request->get('email');
            $phone = $request->get('phone');
            $country = $request->get('country');
            $amount = 0;
            foreach ($cartItems as $cartItem) {
                $product = $cartItem->product; 
                $productName = $product->name;
                if ($product) {
                    $lineItems[] = [
                        'price_data' => [
                            'currency' => 'ron',
                            'product_data' => [
                                'name' =>$productName, 
                            'images' => [$product->image_name]
                            ],
                            'unit_amount' => $cartItem->price * 100, 
                        ],
                        'quantity' => $cartItem->quantity,
                    ];
                    $ordersArray[] = [
                        'name' => $productName,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->price,
                    ];
                    $amount += $cartItem->price * $cartItem->quantity;
                }
            }

            $client_id = auth()->user()->id;
            $processingDetails = Processing::updateOrCreate(
               
                [
                'client_id' => $client_id,
                'client_name' => $firstName . ' ' . $lastName,
                'client_address' => json_encode([
                    'line1' => $address,
                    'postal_code' => $zipCode,
                    'city' => $city,
                    'state' => $state,
                    'country' => $country,
                ]),
                'order_details' => json_encode($ordersArray),
                'amount' => $amount,
                'currency' => 'RON',
                'payment_method' => 'CARD',
                'payment_status' => 'success - card', // Setează statusul plății la 'pending' sau altceva corespunzător
                'stripe_checkout_session_id' => null, // Inițializează ID-ul sesiunii Stripe cu null, va fi actualizat după crearea sesiunii
            ]);
            try {
                $checkout_processing_id = $processingDetails->id;

                $checkout_session = Session::create([
                'line_items' => $lineItems,
                'mode' => 'payment',
                'success_url' =>'http://127.0.0.1:8000/success',
                    'cancel_url' => 'http://127.0.0.1:8000/cancel',
                'metadata' => [
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'address' => $address,
                    'city' => $city,
                    'state' => $state,
                    'zipCode' => $zipCode,
                    'email' => $email,
                    'phone' => $phone,
                    'country' => $country,
                    'amount' =>$amount/100,
                    'paymentMethod'=>$paymentMethod,
                        'checkout_processing_id' => $checkout_processing_id, // Adăugați ID-ul procesării checkout-ului pentru a-l identifica în succes

                    ]]);
                $processingDetails->stripe_checkout_session_id = $checkout_session->id;
                $processingDetails->save();

                return response()->json([
                    'url' => $checkout_session->url,
                    'metadata' => [
                        'firstName' => $firstName,
                        'lastName' => $lastName,
                        'address' => $address,
                        'city' => $city,
                        'state' => $state,
                        'zipCode' => $zipCode,
                        'email' => $email,
                        'phone' => $phone,
                        'country' => $country,
                        'amount' => $amount / 100,
                        'paymentMethod' => $paymentMethod,
                    ],
                    'orderData' => $ordersArray, // Returnați datele comenzii către frontend
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




        } else {
            // Tratează cazurile neașteptate
            return response()->json(['error' => 'Metoda de plată invalidă']);
        }

    }

    public function success(Request $request)
    {
        $statusMsg = 'Comanda a fost finalizată cu succes!';
        $status = 'success';
        
        // Extrage informațiile tranzacției din parametrii URL
        $checkout_session_id = $request->query('checkout_session_id');
        $transData = Processing::where('stripe_checkout_session_id', $checkout_session_id)->first();

        if ($transData) {
            $client_name = $transData->client_name;
            $client_address = json_decode($transData->client_address, true);
            $line1 = $client_address['line1'];
            $postal_code = $client_address['postal_code'];
            $city = $client_address['city'];
            $state = $client_address['state'];
            $country = $client_address['country'];

            $amount = 0;
            $cartItems = Cart::with('product')->where('user_id', auth()->user()->id)->get();
            
          
            foreach ($cartItems as $cartItem) {
                $product = $cartItem->product->first(); // Accesăm primul element al colecției
                

                if ($product) {
                   
                    $ordersArray[] = [
                        'name' => $product->name,
                        'quantity' => $cartItem->quantity,
                        'price' => $cartItem->price,
                    ];
                    $amount += $cartItem->price * $cartItem->quantity;

                }
            }
            
           
            $client_id = auth()->user()->id;
            $transData->payment_status = 'success';
            $transData->update();
//dd($transData);
            // Inserează datele în baza de date
            Cart::where('user_id', $client_id)->delete();
        } else {
            $statusMsg = 'Eroare: Nu s-au putut găsi informațiile tranzacției!';
            $status = 'error';
        }
       
        // Afișează rezultatul către utilizator
        return view('success', compact('status', 'statusMsg', 'client_id', 'client_name','client_address','line1','postal_code','city','state','country', 'ordersArray','amount'));
    }

    public function cancel(Request $request)
    {
        $statusMsg = 'Comanda a fost anulată!';
        $status = 'error';

        // Afișează mesajul de eroare către utilizator
        return view('cancel', compact('status', 'statusMsg'));
    }



}
