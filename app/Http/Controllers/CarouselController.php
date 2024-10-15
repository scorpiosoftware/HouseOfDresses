<?php

namespace App\Http\Controllers;

use App\Actions\Carousel\GetCarousel;
use App\Actions\Carousel\StoreCarousel;
use App\Actions\Category\ListCategory;
use App\Actions\DeleteMedia;
use App\Actions\ImageCompresser;
use App\Actions\ImageInfo;
use App\Actions\StoreMedia;
use App\Models\Carousel;
use App\Models\CarouselImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $records = new Carousel();

        $records = $records->orderBy('id', 'asc')->get();
        return view('dashboard.carousel.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ListCategory::execute();
        return view('dashboard.carousel.create', compact('categories'));
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
        $record = StoreCarousel::execute($inputs);
        $record->save();
        if ($record) {
            $record = GetCarousel::execute($record->id);
            // add other product images
            if (!empty($request->file('images'))) {
                foreach ($request->file('images') as $imagefile) {
                    $image = new CarouselImage();
                    $path = StoreMedia::execute(
                        $imagefile,
                        'carousel/' . $record->id . '',
                        'public'
                    );
                    $image->url = $path;
                    $image->carousel_id = $record->id;
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
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $record = Carousel::with('images')->find(id: $id);
        $categories = ListCategory::execute();
        return view('dashboard.carousel.edit', compact('record', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([]);

        $inputs = $request->all();

        $width = '1920';
        $height = '1080';
        if(!empty($inputs['width'])){
            $width = $inputs['width'];
        }
        if(!empty($inputs['height'])){
            $height = $inputs['height'];
        }

        $record = Carousel::find($id);
        
        // add new image and delete old
        // if ($request->has('logo_url')) {
        //     $inputs['logo_url'] = StoreMedia::execute(
        //         $request->file('logo_url'),
        //         'carousel/' . $record->id . '/logo',
        //         'public'
        //     );
        //     DeleteMedia::execute($record->logo_url);
        //     $record->logo_url =  $inputs['logo_url'];
        //     $record->save();
        // }

        if ($request->has('images')) {

            $record = GetCarousel::execute($id);
            foreach ($record->images as $image) {
                DeleteMedia::execute($image->url);
            }
            $record->images()->delete();
            $record->save();
            // add other product images
            foreach ($request->file('images') as $imagefile) {

                $image = new CarouselImage();
                $path = StoreMedia::execute(
                    $imagefile,
                    'carousel/' . $record->id . '',
                    'public'
                );
                $image->url = $path;
                $image->carousel_id = $record->id;
                $scale = ImageInfo::execute('storage/'. $path);
                $width = 1920;
                $height = 1080;
                ImageCompresser::execute('storage/'. $path,$width,$height);
                $image->save();
            }
            //
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
    public function destroy(string $id) {}
}
