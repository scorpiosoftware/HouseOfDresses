<?php

namespace App\Http\Controllers;

use App\Actions\Color\DestroyColor;
use App\Actions\Color\ListColor;
use App\Actions\Color\StoreColor;
use App\Actions\DeleteMedia;
use App\Actions\ImageCompresser;
use App\Actions\Product\ListProduct;
use App\Actions\StoreMedia;
use App\Models\Color;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $inputs = $request->all();
        $records = ListColor::execute($inputs);
        $products = ListProduct::execute();

        return view("dashboard.color.index", compact("records", 'products', 'inputs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = ListProduct::execute();
        return view("dashboard.color.create", compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([]);

        $inputs = $request->all();
        $width = '400';
        $height = '400';
        if(!empty($inputs['width'])){
            $width = $inputs['width'];
        }
        if(!empty($inputs['height'])){
            $height = $inputs['height'];
        }
        $record = StoreColor::execute($inputs);
        if ($record) {
            if (!empty($request->file('main_image_url'))) {
                $main_image = StoreMedia::execute(
                    $request->file('main_image_url'),
                    'product/' . $record->id . '/main',
                    'public'
                );
                $record->main_image_url = $main_image;
                ImageCompresser::execute('storage/'.$record->main_image_url,$width,$height);
            }
            $record->save();
            // add other product images
            if (!empty($request->file('images'))) {
                foreach ($request->file('images') as $imagefile) {
                    $image = new ProductImage();
                    $path = StoreMedia::execute(
                        $imagefile,
                        'product/' . $record->id . '',
                        'public'
                    );
                    $image->image_url = $path;
                    $image->product_id = $record->product_id;
                    $image->color_id = $record->id;
                    ImageCompresser::execute('storage/'. $path,$width,$height);
                    $image->save();
                }
            }
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
        $record = Color::find($id);
        $products = ListProduct::execute();
        return view("dashboard.color.edit", compact("record", "products"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);

        $inputs = $request->all();
        $width = '400';
        $height = '400';
        if(!empty($inputs['width'])){
            $width = $inputs['width'];
        }
        if(!empty($inputs['height'])){
            $height = $inputs['height'];
        }
        $record = Color::find($id);

        // add new image and delete old
        if ($request->has('main_image_url')) {
            $inputs['main_image_url'] = StoreMedia::execute(
                $request->file('main_image_url'),
                'product/' . $record->id . '/main',
                'public'
            );
            DeleteMedia::execute($record->main_image_url);
            $record->main_image_url =  $inputs['main_image_url'];
            $record->save();
        }
        // delete images and add new images
        if ($request->has('images')) {
            $record = Color::find($id);
            foreach ($record->images as $image) {
                DeleteMedia::execute($image->image_url);
            }
            $record->images()->delete();
            $record->save();

            // add other product images
            foreach ($request->file('images') as $imagefile) {
                $image = new ProductImage();
                $path = StoreMedia::execute(
                    $imagefile,
                    'product/' . $record->id . '',
                    'public'
                );
                $image->image_url = $path;
                $image->product_id = $record->product_id;
                $image->color_id = $record->id;
                ImageCompresser::execute('storage/'. $path,$width,$height);
                $image->save();
            }
            //

        }
        
        if ($request->has('main_image_url')){
            $record->main_image_url =  $inputs['main_image_url'];
            ImageCompresser::execute('storage/'.$record->main_image_url,$width,$height);
        }
        if ($record->update($inputs)) {
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
        $record = Color::find($id);
        File::deleteDirectory('storage/' . $record->id);
        $record = DestroyColor::execute($id);
        if ($record) {
            return redirect()->back()->with("success", "Record deleted");
        } else {
            return redirect()->back()->with("error", "Error on delete record");
        }
    }
}
