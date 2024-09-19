<?php

namespace App\Http\Controllers;

use App\Actions\Size\DestroySize;
use App\Actions\Size\GetSize;
use App\Actions\Size\ListSize;
use App\Actions\Size\StoreSize;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $inputs = $request->all();
        $records = ListSize::execute($inputs);
        return view('dashboard.size.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $inputs = $request->all();
        $record = StoreSize::execute($inputs);
        if ($record) {
            return redirect()->back()->with("success", "Append Record Success !");
        } else {
            return redirect()->back()->with("error", "Check requirments error on validation !");
        }
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
        $record = GetSize::execute($id);
        return view("dashboard.size.edit", compact("record"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $inputs = $request->all();
        $record = GetSize::execute($id);

        $update = $record->update($inputs);
        if ($update) {
            return redirect()->back()->with("success", "Append Record Success !");
        } else {
            return redirect()->back()->with("error", "Check requirments error on validation !");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = GetSize::execute($id);
        $record = DestroySize::execute($record->id);
        if ($record) {
            return redirect()->back()->with("success", "Append Record Success !");
        } else {
            return redirect()->back()->with("error", "Error On delete Record !");
        }
    }
}
