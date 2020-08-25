<?php

namespace App\Http\Controllers;

use App\Mail\IndividualDelegateRegist;
use App\Mail\DelegationRegist;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PageRequestController extends Controller
{
    // ## -- 1. View Landing
    public function viewLanding(){
        return view("landing.landingIndex");
    }

    // ## -- 2. View Webinar
    public function viewWebinar(){
        return view("webinar.webinarIndex");
    }

     // ## -- 3. View Artikel
     public function viewNews(){
        return view("news.newsIndex");
    }   
  
    // ## -- 4. View Registrasi
    public function viewRegistrasi(){
        return view("registrasi.registrasiIndex");
    }

}
