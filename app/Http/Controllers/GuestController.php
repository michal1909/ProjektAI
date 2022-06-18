<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('guest.home');
    }

    public function animals(){
        $animals = Animal::paginate(8);

        return view('guest.animals',[
            'animals'=>$animals,
        ]);
    }

    public function sponsors(){
        $sponsors = Sponsor::paginate(5);
        return view('guest.sponsors',[
            'sponsors'=> $sponsors
        ]);
    }

    public function sponsor(){
        return view('guest.sponsor');
    }

    public function createSponsor(Request $request){

        $request->validate([
            'name' => ['required','string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',

        ]);

        Sponsor::create([
            'name'=> $request->name,
            'address'=> $request->address,
            'telephone'=> $request->telephone,
            'image'=> $request->file('image')->store('img', 'public')
        ]);
        return redirect()->back()->with('status','Firma została dodana');
    }
}
