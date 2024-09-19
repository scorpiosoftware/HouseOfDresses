<?php

namespace App\Http\Controllers;

use App\Actions\Collection\DestroyCollection;
use App\Actions\Collection\GetCollection;
use App\Actions\Collection\ListCollection;
use App\Actions\Collection\StoreCollection;
use App\Actions\DeleteMedia;
use App\Actions\StoreMedia;
use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = ListCollection::execute();
        return view("dashboard.collection.index", compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.collection.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required',
        ]);

        $inputs = $request->all();
        if (!empty($request->file('image_url'))) {
            $inputs['image_url'] = StoreMedia::execute(
                $request->file('image_url'),
                'collections/',
                'public'
            );
        }
        $record = StoreCollection::execute($inputs);
        if($record){
            return redirect()->back()->with("success","Append Record Success !");
        }else
        {
            return redirect()->back()->with("error","Check requirments error on validation !");
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
        $record = GetCollection::execute($id);

        return view("dashboard.collection.edit", compact("record"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name_en' => 'required',
        ]);

        $inputs = $request->all();
        $record = Collection::find($id);
        if(!empty($request->file('image_url'))){
            DeleteMedia::execute($record->image_url);
            $inputs['image_url'] = StoreMedia::execute(
                $request->file('image_url'),
                'collections/',
                'public'
            );
        }
        $update = $record->update($inputs);
        if($update){
            return redirect()->back()->with("success","Append Record Success !");
        }else
        {
            return redirect()->back()->with("error","Check requirments error on validation !");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $record = DestroyCollection::execute($id);

        if( $record ){  
            return redirect()->back()->with("success","Record deleted");
        }else{
            return redirect()->back()->with("error","Error on delete record");
        }
    }
}
