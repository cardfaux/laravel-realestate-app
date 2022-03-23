<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Helper\Helper;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $id)
    {
        $photos = Photo::where(['user_id' => auth()->user()->id, 'listing_id' => $id])->paginate(2);

        if($photos->total() < 1) {
            return redirect("/admin/listings/${slug}/${id}/photos/create");
        }

        return view('admin/listings/photos/index', [
            'photos' => $photos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($slug, $id)
    {
        return view('admin/listings/photos/create', ['slug' => $slug, 'id' => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $slug, $id)
    {
        // $this->authorize('create', Listing::class);

        request()->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg',
        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;

        $request->file('image')->move(public_path('img'), $name);
        
        $photo = new Photo();
        $photo->name = $name;
        $photo->size = $size;
        $photo->user_id = auth()->user()->id;
        $photo->listing_id = $id;

        $photo->save();
        
        // $listing->slug = Helper::slugify("{$request->address}-{$request->address2}-{$request->city}-{$request->state}-{$request->zipcode}");

        return redirect("/admin/listings/{$slug}/{$id}/photos")->with('success', 'Photo Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
