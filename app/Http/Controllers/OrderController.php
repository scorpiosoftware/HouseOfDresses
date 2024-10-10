<?php

namespace App\Http\Controllers;
use App\Actions\Category\ListCategory;
use App\Models\Option;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use App\Models\Product;
use App\Services\StripeServices;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $inputs = $request->all();
        $records = new Order();

        if (!empty($inputs['search'])) {
            $records = $records->where('auto_nb','LIKE',"%{$inputs['search']}%");
        }

        if(!empty($inputs['status'])){
            $records =  $records->where('status',$inputs['status']);
        }else{
            $inputs['status'] = 'delivered';
            $records =  $records->where('status',$inputs['status']);
        }
        $records = $records->orderBy('id','desc')->paginate(10);
        return view("dashboard.invoice.index", compact("records",'inputs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ListCategory::execute();
        $posts = Post::all();
        return view('shipping.index', compact('categories','posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $order = new Order();
        $option = Option::first();
        if($option){
            $option->starter_number ++;
            $option->save();
            $option = Option::first();
            $order->auto_nb = $option->order_letter . $option->starter_number;
        }
     
        $totale = 0;
        $cart = session()->get('cart');
        if ($cart) {
            foreach (session('cart') as $id => $details) {
                $totale += $details['price'];
            }
        }
        $order->total_amount = $totale;
        $order->customer_name = $inputs['full_name'];
        $order->customer_email = !empty($inputs['email']) ? $inputs['email'] : "none email" ;
        $order->phone = $inputs['phone'];
        $order->street = $inputs['street'];
        $order->apartment = $inputs['apartment'];
        $order->country = $inputs['country'];
        $order->city = $inputs['city'];
        // $order->zip = $inputs['zip'];
        $order->status = 'pending';
        foreach (session('cart') as $id => $details) {
            $order->currency = $details['currency'];
            break;
        }
        $order->save();
          
        if ($cart) {
            foreach (session('cart') as $id => $details) {
                $item = new OrderItem();
                $item->product_id =  $details['product_id'];
                $item->color = $details['color'];
                $item->size = $details['size'];
                $item->order_id = $order->id;
                $item->quantity = $details['quantity'];
                $item->subtotal = $details['price'];
                $item->bust = $details['measurement']['bust'];
                $item->waist = $details['measurement']['waist'];
                $item->hips = $details['measurement']['hips'];
                $item->neck = $details['measurement']['neck'];
                $item->chest = $details['measurement']['chest'];
                $item->shoulder = $details['measurement']['shoulder'];
                $item->sleeve = $details['measurement']['sleeve'];
                $item->shoulder_floor = $details['measurement']['shoulder_floor'];
                $item->arm_hole = $details['measurement']['arm_hole'];
                $item->upper_arm = $details['measurement']['upper_arm'];
                $item->save();
            }
        }
        // StripeServices::execute($order->id);
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $order = Order::find($order->id);
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
            'success_url' => route('checkout.success',$order->id),
            'cancel_url' => route('checkout.canceled',$order->id),
        ]);

        if($session->status == "complete"){
            dd(1);
        }
        return redirect()->away($session->url);
        // return redirect()->to('/')->with('success','nice !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $record = Order::find($id);
       
       $items = OrderItem::where('order_id', $id)->get();
       return view('dashboard.invoice.show', compact('items','record'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = Order::find($id);
        $record->status = 'delivered';
        $record->save();
        return redirect()->back()->with('success','Order Confirmed');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = Order::find($id);
        $record->status = 'canceled';
        $record->save();
        return redirect()->back()->with('success','Order Canceled');
    }
}
