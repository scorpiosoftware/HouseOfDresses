<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeServices
{
    public static function execute($id){
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $order = Order::find($id);
        if(!$order){
            abort(404);
        }
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
}
