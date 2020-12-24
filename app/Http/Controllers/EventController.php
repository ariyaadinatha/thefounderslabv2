<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function create()
    {
        return view('event.eventCreate');
    }


    public function store(Request $request)
    {
        $image = request()->file('image');
        $imgname = request()->file('image')->getClientOriginalName();
        $imageUrl = $image->storeAs("img/event", "{$imgname}");

        Event::create([
            'img' => $imageUrl,
            'link' => $request->link,
        ]);

        return redirect()->to('/event/');

    }

    public function viewIndex()
    {
        $events = Event::get();
        return view('event.eventIndex', ['events' => $events]);
    }

}
