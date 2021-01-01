<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
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
        $blogs=Blog::all();

        return view('back.blog.index')->with(['blogs'=>$blogs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blogs=Blog::all();
        $blogCategory=BlogCategory::all();

        return view('back.blog.create')->with(['blogs'=>$blogs,'blogCategory'=>$blogCategory]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required',
            'photo' => 'mimes:jpeg,png|max:1024'

        ]);
        $url='/img/slide/slide1.jpg';
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

        $blog = new Blog;
        $blog->title = $request->title;
        $blog->detail = $request->detail;
        $blog->tags = $request->tags;
        $blog->category = $request->category;
        $blog->photo =$url;

        $blog->save();
        return redirect()->back()->with(['success'=>'Blog Created','blog'=>$blog]);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {

        return view('back.blog.show')->with(['service'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $blogCategory=BlogCategory::all();

        return view('back.blog.edit')->with(['blog'=>$blog,'blogCategory'=>$blogCategory]);
   }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $blog = Blog::findOrFail($blog->id);

        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required'

        ]);

        $input = $request->all();
        $url='/img/slide/slide1.jpg';
        if($request->has('photo2'))
        {

            try{

                $extension = $request->photo->extension();
                $request->photo2->storeAs('/public', $input['title'].time().".".$extension);
                $url = Storage::url($input['title'].time().".".$extension);

            }catch(Exception $ex){
                print('Image not Uploaded'.$ex);
            }

        }else{
            print('Photo not found');
        }
        $blog->fill($input)->save();
        $blog->photo=$url;
        $blog->save();
        return redirect()->route('blog.index')->with(['success'=>'Blog Update Successfuly']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->back()->with('success','Blog Slide Removed');

    }
}
