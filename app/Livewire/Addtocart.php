<?php

namespace App\Livewire;

use App\Models\General;
use Livewire\Attributes\On;
use Livewire\Component;

class Addtocart extends Component
{
    public $shipping;
    public $exchange;

    public $product;
    public $color;
    public $size;
    public $selected_size;
    public $qty = 1;

    public $bust = '', $waist = '', $hips = '', $neck = '', $chest = '', $shoulder = '', $sleeve = '', $shoulder_waist = '', $shoulder_floor = '', $arm_hole = '', $upper_arm = '';
    #[On('change-currency')]
    public function mount()
    {
        $general = General::first();
        if($general){
            $this->shipping = $general->shipping;
            $this->exchange = $general->exchange;
        }
        $this->selected_size = !empty($this->product) ? $this->product->sizes()->first()->name : '';
    }
    public function setSize($size)
    {
        $this->size = $size;
        $this->selected_size = $size;
    }

    public function addToWishlist()
    {
        $product = $this->product;
        $color = $this->color;
        $size = $this->size;
        $id = $product->id;
        $price = session('currency') == 'ade' ?  $product->price2 : $product->price;
        $currency = session('currency') == 'ade' ? 'AED' : 'USD';
        if (!$product) {

            abort(404);
        }
        $wishlist = session()->get('wishlist');

        if (!$wishlist) {
            $wishlist = [
                $id => [
                    "name" => $product->name_en,
                    "price" => $price,
                    "photo" =>  $color->main_image_url,
                    "currency" => $currency,
                ]
            ];
            session()->put('wishlist', $wishlist);
            // return redirect()->back()->with('success', 'Product added to wishlist successfully!');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $wishlist[$id] =
            [
                "name" => $product->name_en,
                "price" => $price,
                "photo" =>  $color->main_image_url,
                "currency" => $currency,
            ];

        session()->put('wishlist', $wishlist);

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Product added to cart successfully!']);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addToCart()
    {
        $product = $this->product;
        $color = $this->color;
        $color_id = $this->color->id;
        $size =  $this->size != null ? $this->size : $product->sizes->first()->name;
        $qty = $this->qty;
        $id = $color->id;
        $product_id = $product->id;
        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');
        $price = session('currency') == 'ade' ?  $product->price2 : $product->price;
        $currency = session('currency') == 'ade' ? 'AED' : 'USD';
        if (!empty($product->offer_price) || $product->offer_price > 0) {
            $price = $product->offer_price;
        }

        if (session('currency') == "ade") {
            $price = $product->price2;
        } else {
            $price = $product->price;
        }

        if (!$cart) {
            // dd(2);
            $cart = [
                $id => [
                    "name" => $product->name_en,
                    "quantity" => $qty,
                    "price" => $price,
                    "photo" => $color->main_image_url,
                    "color" => $color->name,
                    "color_id" => $color_id,
                    "product_id" => $product_id,
                    "size" => $size,
                    "currency" => $currency,
                    "measurement" => [
                        'bust' => $this->bust,
                        'waist' => $this->waist,
                        'hips' => $this->hips,
                        'neck' => $this->neck,
                        'chest' => $this->chest,
                        'shoulder' => $this->shoulder,
                        'sleeve' => $this->sleeve,
                        'shoulder_waist' => $this->shoulder_waist,
                        'shoulder_floor' => $this->shoulder_floor,
                        'arm_hole' => $this->arm_hole,
                        'upper_arm' => $this->upper_arm,
                    ],
                ]
            ];
            $cart[$id]['quantity'] = $qty;
            $cart[$id]['price'] = $cart[$id]['quantity'] * $price;
            session()->put('cart', $cart);
            $this->dispatch('refreshCart');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id]) && $cart[$id]['color_id'] == $color_id) {
            // dd(3);
            if (!empty($qty)) {
                $cart[$id]['quantity'] += $qty;
                $cart[$id]['price'] = $cart[$id]['quantity'] * $price;
            } else {
                $cart[$id]['quantity']++;
                $cart[$id]['price'] = $cart[$id]['quantity'] * $price;
            }

            session()->put('cart', $cart);
            $this->dispatch('refreshCart');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $cart[$id] = [
            "name" => $product->name_en,
            "quantity" => 1,
            "price" => $price,
            "photo" => $color->main_image_url,
            "color" => $color->name,
            "color_id" => $color_id,
            "product_id" => $product_id,
            "size" => $size,
            "currency" => $currency,
            "measurement" => [
                'bust' => $this->bust,
                'waist' => $this->waist,
                'hips' => $this->hips,
                'neck' => $this->neck,
                'chest' => $this->chest,
                'shoulder' => $this->shoulder,
                'sleeve' => $this->sleeve,
                'shoulder_waist' => $this->shoulder_waist,
                'shoulder_floor' => $this->shoulder_floor,
                'arm_hole' => $this->arm_hole,
                'upper_arm' => $this->upper_arm,
            ]
        ];
        // dd(4);
        session()->put('cart', $cart);
        if (request()->wantsJson()) {
            $this->dispatch('refreshCart');
            return response()->json(['message' => 'Product added to cart successfully!']);
        }
        $this->dispatch('refreshCart');
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function render()
    {
        return view('livewire.addtocart');
    }
}
