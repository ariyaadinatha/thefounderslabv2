<?php

namespace App\Http\Controllers;
use App\Medium;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MediumController extends Controller
{
    public function articleIndex()
    {
        $medium = Medium::latest()->get();
        return view('medium.articleIndex', ['medium' => $medium]);
    }

    public function articleShow(Medium $medium)
    {
        return view('medium.articleSingle', ['medium' => $medium]);
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
        $slug = str_slug($request->title, '-');

        Medium::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'img' => $imageUrl,
            'link' => $request->link,
            'type' => $request->type,
        ]);


        return redirect()->to('/adm00n/');

    }
}
