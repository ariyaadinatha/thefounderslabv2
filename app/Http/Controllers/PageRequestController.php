<?php

namespace App\Http\Controllers;

use App\Event;
use App\Mail\IndividualDelegateRegist;
use App\Mail\DelegationRegist;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        $event = Event::latest()->first();
        return view("landing.landingIndex", ['event' => $event]);
    }

    // ## -- 2. View Mates
    public function viewMates(){
        return view("network.networkIndex");
    }

     // ## -- 3. View Artikel
     public function viewArticle(){
        return view("article.articleIndex");
    }   
  
    // ## -- 4. View Registrasi
    public function viewRegistrasi(){
        return view("registrasi.registrasiIndex");
    }

    // ## -- 5. View Coming Soon
    public function viewComingSoon(){
        return view("coming.comingIndex");
    }

}
