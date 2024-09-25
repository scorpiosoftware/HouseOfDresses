<?php

namespace App\Http\Controllers;

use App\Actions\Brand\ListBrand;
use App\Actions\Category\ListCategory;
use App\Actions\Collection\GetCollection;
use App\Actions\Color\ListColor;
use App\Actions\Product\GetProduct;
use App\Actions\Product\ListProduct;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Color;
use App\Models\Post;
use App\Models\Product;
use App\Models\ProductComments;
use App\View\Components\home\brands;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $inputs = $request->all();
        // dd($inputs);
        $request->visit();
        $products = ListProduct::execute($inputs);
        // dd($products);
        $posts = Post::all();
        $collection = !empty($inputs["collection"]) ? Collection::find($inputs["collection"])  : '';
        $categories = Category::all();
        $brands = Brand::all();
        return view('shop.index', compact('products','posts','collection', 'categories', 'brands', 'inputs'));
    }

    public function filterByCategory(Request $request)
    {
        $inputs = $request->all();
        $request->visit();
        $posts = Post::all();
        $products = ListProduct::execute($inputs);
        $collection = !empty($inputs["collection"]) ? Collection::find($inputs["collection"]) : '';
        $category = Category::find($inputs["category"]);
        $categories = Category::all();
        $brands = Brand::all();
        return view('shop.index', compact('products','posts','collection', 'categories','category', 'brands', 'inputs'));
    }

    public function addComment(Request $request)
    {
        $inputs = $request->all();
        $comment = new ProductComments();
        $comment->comment = $inputs['comment'];
        $comment->product_id = $inputs['id'];
        if (!empty($inputs['rate'])) {
            $comment->rate = $inputs['rate'];
        } else {
            $comment->rate = 0;
        }
        $comment->save();
        return redirect()->back()->with('success', 'Review Added successfuly');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $record = Color::find($id);
        // $comments = new ProductComments();
        // $comments = $comments->where('product_id', $record->id)->get();

        // $total_rates = $comments->sum('rate');
        $posts = Post::all();
        
        // $product_rate = $comments->count() > 0 ?($total_rates / $comments->count()) : 0;
        $cart = session()->get('cart');
        $categories = Category::all();
        return view("shop.show", compact("record",'posts', 'categories', 'cart'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
    public function filter(Request $request)
    {
        $inputs = $request->all();
        $products = ListProduct::execute($inputs);
        $collection = GetCollection::execute(1);
        $categories = Category::all();
        $brands = Brand::all();
        $request->visit();
        return view('shop.index', compact('products', 'categories', 'brands', 'inputs'));
    }
}
