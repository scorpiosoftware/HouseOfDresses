<?php

namespace App\Http\Controllers;

use App\Actions\Category\ListCategory;
use App\Models\Carousel;
use App\Models\Post;
use App\Models\ProductView;
use Illuminate\Http\Request;
use Spatie\Referer\Referer;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $request->visit();
        $referer = app(Referer::class)->get();
        dd($referer);
        $locale = session()->get('lang');
        $currency = session()->get('currency');

        if ($locale == 'en') {
            session()->forget('lang');
            session()->put('lang', 'en');
        } else if ($locale == 'ar') {
            session()->forget('lang');
            session()->put('lang', 'ar');
        } else {
            session()->forget('lang');
            session()->put('lang', 'en');
        }

        //set currency
        if ($currency == 'usd') {
            session()->forget('currency');
            session()->put('currency', 'usd');
        } else if ($currency == 'ade') {
            session()->forget('currency');
            session()->put('currency', value: 'ade');
        } else {
            session()->forget('currency');
            session()->put('currency', 'ade');
        }
        $categories = ListCategory::execute();
        $carousels = Carousel::with('images')->orderby('id', 'asc')->get();
        $posts = Post::all();
        $productViews = ProductView::all();
        return view('welcome', compact('posts', 'categories', 'carousels', 'productViews'));
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
        //
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
}
