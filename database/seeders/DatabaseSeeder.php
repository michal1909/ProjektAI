<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Enclosure;
use App\Models\Sponsor;
use App\Models\Sponsorship;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'admin',
            'is_admin' => true,
            'email'=> 'mf@example.com',
            'password' => Hash::make('12345')
        ]);

        Enclosure::create([
            'id'=> 1,
            'name'=> 'wybieg lemurów'
        ]);

        Animal::create([
            'enclosure_id' => 1,
            'name'=>"kruj lujjian 13",
            'species'=>'ssak',
            'gender'=>"Male",
            'country'=>"Madagaskar"
        ]);



        Sponsor::create([
            'id' => 1,
            'name' => 'Megachad company',
            'address'=>'abdhul street 2',
            'telephone' =>'3428794323'
        ]);
        Sponsorship::create([
            'sponsor_id'=>1,
            'animal_id'=>1,
            'contribution' => 100.23,
        ]);

    }
}
