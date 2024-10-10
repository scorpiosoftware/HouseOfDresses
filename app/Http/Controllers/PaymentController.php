<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Services\TabbyService;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function applyPayment($id)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $order = Order::first();
        $items = OrderItem::where('order_id', $order->id)->get();
        $lineItems = [];
        foreach($items as $item){
          $currentProduct = Product::find($item->product_id);
          $lineItems[] = [
              'price_data' => [
                 'currency' => strtoupper($order->currency),
                 'product_data' => [
                  "name" => $currentProduct->name_en,
                 ],
                 'unit_amount' => $item->subtotal * 100,
              ],
              'quantity' => $item->quantity,
          ];
        }

        $session = Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('home'),
            'cancel_url' => route('home'),
        ]);   
        return redirect()->away($session->url);
    }
    // public function applyPayment($id)
    // {
    //     $items = collect([]); // array to save your products

    //     // add first product
    //     $items->push([
    //         'title' => 'title',
    //         'quantity' => 2,
    //         'unit_price' => 20,
    //         'category' => 'Clothes',
    //     ]);

    //     $order_data = [
    //         'amount' => 199,
    //         'currency' => 'SAR',
    //         'description' => 'description',
    //         'full_name' => 'ALi Omer',
    //         'buyer_phone' => '966500000001',
    //         'buyer_email' => 'card.success@tabby.ai',
    //         'address' => 'Saudi Riyadh',
    //         'city' => 'Riyadh',
    //         'zip' => '1234',
    //         'order_id' => '1234',
    //         // 'registered_since' => $customer->created_at,
    //         'loyalty_level' => 0,
    //         'success-url' => route('success-url'),
    //         'cancel-url' => route('cancel-url'),
    //         'failure-url' => route('failure-url'),
    //         'items' => $items,
    //     ];

    //     $tabby = new TabbyService();

    //     $payment = $tabby->createSession($order_data);

    //     $id = $payment->id;

    //     $redirect_url = $payment->configuration->available_products->installments[0]->web_url;

    //     return redirect($redirect_url);
    // }
}
