<?php

namespace App\Http\Controllers;
use App\Medium;

use Illuminate\Http\Request;

class MediumController extends Controller
{
    public function articleIndex()
    {
        $medium = Medium::get();
        return view('medium.articleIndex', ['medium' => $medium]);
    }

    public function articleSingle()
    {

    }

    public function create()
    {
        return view('medium.mediumCreate');
    }

    public function store(Request $request)
    {

        $image = request()->file('image');
        $imgname = request()->file('image')->getClientOriginalName();
        $imageUrl = $image->storeAs("img/medium", "{$imgname}");

        Medium::create([
            'title' => $request->title,
            'description' => $request->description,
            'img' => $imageUrl,
            'link' => $request->link,
            'type' => $request->type,
        ]);


        return redirect()->to('/adm00n/');

    }
}
