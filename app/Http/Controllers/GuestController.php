<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('guest.home'); //kropka oznacza folder dwuczlownowe rozdzielaj -
    }
    public function animals(){
        return view('guest.home'); //kropka oznacza folder dwuczlownowe rozdzielaj -
    }
}
