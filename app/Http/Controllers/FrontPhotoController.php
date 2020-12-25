<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Address;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Product;
use App\Models\Station;
use Illuminate\Http\Request;

class FrontPhotoController extends Controller
{
    public function index()
    {

        $stations=Station::all();
        $address=Address::get()->first();
        $products=Product::all();
        $albums=Album::all();
        $photos=Photo::all();
        $about=About::get()->last();

        return view('front.gallery')->with(['address'=>$address,'stations'=>$stations,'albums'=>$albums,'photos'=>$photos,'products'=>$products,'about'=>$about]);
    }
    //
}
