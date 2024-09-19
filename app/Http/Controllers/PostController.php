<?php

namespace App\Http\Controllers;

use App\Actions\DeleteMedia;
use App\Actions\Post\DestroyPost;
use App\Actions\Post\GetPost;
use App\Actions\Post\ListPost;
use App\Actions\Post\StorePost;
use App\Actions\StoreMedia;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = ListPost::execute();
        return view("dashboard.post.index", compact("records"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.post.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_url' => 'required',
        ]);

        $inputs = $request->all();
        if (!empty($request->file('image_url'))) {
            $inputs['image_url'] = StoreMedia::execute(
                $request->file('image_url'),
                'posts/',
                'public'
            );
        }
        $record = StorePost::execute($inputs);

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
        $record = GetPost::execute($id);
        return view("dashboard.post.show", compact("record"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = GetPost::execute($id);

        return view("dashboard.post.edit", compact("record"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'post_url' => 'required',
        ]);

        $inputs = $request->all();
        $record = Post::find($id);
        if(!empty($request->file('image_url'))){
            DeleteMedia::execute($record->image_url);
            $inputs['image_url'] = StoreMedia::execute(
                $request->file('image_url'),
                'posts/',
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
        $record = DestroyPost::execute($id);

        if( $record ){  
            return redirect()->back()->with("success","Record deleted");
        }else{
            return redirect()->back()->with("error","Error on delete record");
        }
    }
}
