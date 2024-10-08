<?php

namespace App\Http\Controllers;

use App\Actions\Dashboard\AppliedOrders;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role_id == 2){
            return redirect('/');
        }
        $applied_orders = AppliedOrders::execute();
        $revenue = new  Order();
        $revenue = $applied_orders->sum('total_amount');
        $unpaid = new Order();
        $unpaid = $unpaid->where('status','pending')->sum('total_amount');
        $total = new Order();
        $total = $total->sum('total_amount');
        $totalVisits = visitors()->uniqueCount();
        $facebook = visitors()->referrers('https://facebook.com','https://lm.facebook.com/')->uniqueCount();
        $instagram = visitors()->referrers('https://www.instagram.com/','https://l.instagram.com/')->uniqueCount();
        $snapchat = visitors()->referrers('https://www.snapchat.com/')->count();
        $tiktok = visitors()->referrers('https://www.tiktok.com/')->count();
        $google = visitors()->referrers('')->uniqueCount();
        return view('dashboard.dashboard',compact('applied_orders','revenue','unpaid','total','totalVisits','facebook','instagram','snapchat','tiktok','google'));
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
