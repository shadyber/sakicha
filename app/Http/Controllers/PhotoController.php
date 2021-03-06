<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Album;
use App\Models\Station;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos=Photo::all();

        return view('back.photo.index')->with(['photos'=>$photos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $photos=Photo::all();
        $albums=Album::all();
        $stations=Station::all();

        return view('back.photo.create')->with(['photos'=>$photos,'albums'=>$albums,'stations'=>$stations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'photo' => 'mimes:jpeg,png|max:1024'

        ]);
        $url='/img/slide/slide1.jpg';
        //try uplodaing photo with for loop
        if($request->has('photo'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo->storeAs('/public', $validatedData['title'].time().".".$extension);
                $url = Storage::url($validatedData['title'].time().".".$extension);

            }catch(Exception $ex){
                print('Image not Uploaded'.$ex);
            }

        }else{
            print('Photo not found');
        }

        $photo = new Photo;
        $photo->title = $request->title;
        $photo->album_id = $request->album_id;
        $photo->station_id = $request->station_id;
        $photo->photo =$url;

        $photo->save();

        return redirect()->back()->with(['success'=>'Photo Created','photo'=>$photo]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {

        return view('admin.photo.index')->with(['photo'=>$photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {


        return view('back.photo.edit')->with([]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);

        $input = $request->all();
        $photo->fill($input)->save();
        return redirect()->back()->with('success','Photo Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {

        $photo->delete();
        return redirect()->back()->with('success','Removed');
    }
}
