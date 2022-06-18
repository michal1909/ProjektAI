<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Sponsor;
use App\Models\Sponsorship;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $user = auth()->user();
        return view('admin.dashboard',[
            'user'=> $user
        ]);
    }

    public function animals(){
        $animals = Animal::paginate(5);
        $user = auth()->user();
        return view('admin.animals',[
            'user'=> $user,
            'animals'=>$animals
        ]);
    }

    public function sponsorships(){
        $user = auth()->user();
        $sponsorships = Sponsorship::paginate(5);
        return view('admin.sponsorship',[
            'user'=> $user,
            'sponsorships'=>$sponsorships
        ]);
    }


    public function sponsors(){
        $sponsors = Sponsor::paginate(5);
        $user = auth()->user();
        return view('admin.sponsors',[
            'user'=> $user,
            'sponsors'=> $sponsors
        ]);
    }

    public function createAnimal(Request $request){

        $request->validate([
            'enclosure_id' => ['required','integer'],
            'name' => ['required','string', 'max:255'],
            'species' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        Animal::create([
            'enclosure_id' => $request->enclosure_id,
            'name' => $request->name,
            'species' => $request->species,
            'gender' => $request->gender,
            'country' => $request->country,
            'image' => $request->file('image')->store('img', 'public')
        ]);
        return redirect()->back()->with('status','Zwierzę zostało dodane');
    }

    public function updateAnimal(Request $request){

        $request->validate([
            'id'=>['required','integer'],
            'enclosure_id'=>['required','integer'],
            'name' => ['required','string', 'max:255'],
            'species' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'in:Female,Male'],
            'country' => ['required',  'string', 'max:255'],
        ]);
        $animal = Animal::find($request->id);
        $animal->update([
            'enclosure_id' => $request->enclosure_id,
            'name'=> $request->name,
            'species'=> $request->species,
            'gender'=> $request->gender,
            'country'=> $request->country,
        ]);

        return redirect(route('admin.animals'))->with('status','Edytowano zwierze');
    }

    public function deleteAnimal(Request $request){
        Animal::find($request->id)->delete();
        return redirect(route('admin.animals'))->with('status','Usunieto zwierze');
    }

    public function updateSponsor(Request $request){

        $request->validate([
            'id'=>['required','integer'],
            'name' => ['required','string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'telephone' => ['required',  'string', 'max:11'],
        ]);
        $sponsor = Sponsor::find($request->id);
        $sponsor->update([
            'name'=> $request->name,
            'address'=> $request->address,
            'telephone'=> $request->telephone,
        ]);

        return redirect(route('admin.sponsors'))->with('status','Edytowano sponsora');
    }

    public function deleteSponsor(Request $request){
        Sponsor::find($request->id)->delete();
        return redirect(route('admin.sponsors'))->with('status','Usunieto sponsora');
    }

    public function createSponsorship(Request $request){
        $request->validate([
            'sponsor_id'=>['required','integer'],
            'animal_id'=>['required','integer'],
            'contribution'=>['required','numeric']
        ]);

        Sponsorship::create([
            'sponsor_id' => $request->sponsor_id,
            'animal_id'=> $request->animal_id,
            'contribution' => $request->contribution
        ]);

        return redirect(route('admin.sponsorships'))->with('status','Dodano konstrybucję');
    }

    public function updateSponsorship(Request $request){

        $request->validate([
            'id'=>['required','integer'],
            'sponsor_id' => ['required','integer'],
            'animal_id' => ['required', 'integer'],
            'contribution' => ['required','numeric'],
        ]);
        $sponsorship = Sponsorship::find($request->id);
        $sponsorship->update([
            'contribution'=> $request->contribution
        ]);

        return redirect(route('admin.sponsorships'))->with('status','Edytowano kontrybucję');
    }

    public function deleteSponsorship(Request $request){
        Sponsorship::find($request->id)->delete();
        return redirect(route('admin.sponsorships'))->with('status','Usunieto kontrybucję');
    }
}
