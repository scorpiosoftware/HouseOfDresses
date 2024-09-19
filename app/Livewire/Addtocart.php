<?php

namespace App\Livewire;

use Livewire\Component;

class Addtocart extends Component
{
    public $product;
    public $color;
    public $size;
    public $selected_size;
    public $qty = 1;

    public function setSize($size){
        $this->size = $size;
        $this->selected_size = $size;
    }

    public function addToWishlist(){
        $product = $this->product;
        $color = $this->color;
        $size = $this->size;
        $id = $product->id;
        if (!$product) {

            abort(404);
        }
        $wishlist = session()->get('wishlist');

        if (!$wishlist) {
            $wishlist = [
                $id => [
                    "name" => $product->name_en,
                    "price" => empty($product->offer_price) ?  $product->price : $product->offer_price ,
                    "photo" =>  $color->main_image_url
                ]
            ];
            session()->put('wishlist', $wishlist);
            // return redirect()->back()->with('success', 'Product added to wishlist successfully!');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        $wishlist[$id] =
            [
                "name" => $product->name_en,
                "price" => empty($product->offer_price) ?  $product->price : $product->offer_price ,
                "photo" => $color->main_image_url
            ];

        session()->put('wishlist', $wishlist);

        if (request()->wantsJson()) {
            return response()->json(['message' => 'Product added to cart successfully!']);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function addToCart(){
        $product = $this->product;
        $color = $this->color;
        $size = $this->size;
        $qty = $this->qty;
        $id = $product->id;

        if (!$product) {

            abort(404);
        }
        $cart = session()->get('cart');
        $price = $product->price;
        if (!empty($product->offer_price) || $product->offer_price > 0) {
            $price = $product->offer_price;
        }
        if (!$cart) {
            $cart = [
                $id => [
                    "name" => $product->name_en,
                    "quantity" => $qty,
                    "price" => $price,
                    "photo" => $color->main_image_url,
                    "color" => $color->name,
                    "size" => $size,
                ]
            ];
            $cart[$id]['quantity'] = $qty;
            $cart[$id]['price'] = $cart[$id]['quantity'] * $price;
            session()->put('cart', $cart);
            $this->dispatch('refreshCart');
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        if (isset($cart[$id])) {

            if (!empty($qty)) {
                $cart[$id]['quantity'] = $qty;
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
            "size" => $size,
        ];

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
