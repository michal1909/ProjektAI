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
            'name'=> 'wybieg'
        ]);

        Enclosure::create([
            'id'=> 2,
            'name'=> 'małpiarnia'
        ]);

        Enclosure::create([
            'id'=> 3,
            'name'=> 'żółwi dom'
        ]);

        Enclosure::create([
            'id'=> 4,
            'name'=> 'ptaszarnia'
        ]);

        Enclosure::create([
            'id'=> 5,
            'name'=> 'pawilon zwierząt zmiennocieplnych'
        ]);

        Animal::create([
            'enclosure_id' => 1,
            'name'=>'Lemur katta',
            'species'=>'ssak',
            'gender'=>'Male',
            'country'=>'Madagaskar'
        ]);

        Animal::create([
            'enclosure_id' => 2,
            'name'=>'Makak lwi',
            'species'=>'ssak',
            'gender'=>'Female',
            'country'=>'Indie'
        ]);

        Animal::create([
            'enclosure_id' => 3,
            'name'=>'Żółw morski',
            'species'=>'gad',
            'gender'=>'Male',
            'country'=>'Australia'
        ]);

        Animal::create([
            'enclosure_id' => 4,
            'name'=>'Orzeł przedni',
            'species'=>'ptak',
            'gender'=>'Male',
            'country'=>'Szkocja'
        ]);

        Animal::create([
            'enclosure_id' => 5,
            'name'=>'Kumak nizinny',
            'species'=>'płaz',
            'gender'=>'Female',
            'country'=>'Szwecja'
        ]);

        Animal::create([
            'enclosure_id' => 5,
            'name'=>'Ptasznik',
            'species'=>'stawonóg',
            'gender'=>'Male',
            'country'=>'Meksyk'
        ]);

        Animal::create([
            'enclosure_id' => 5,
            'name'=>'Motylowiec',
            'species'=>'ryba',
            'gender'=>'Female',
            'country'=>'Kongo'
        ]);
        Sponsor::create([
            'id' => 1,
            'name' => 'Megachad company',
            'address'=>'ul. Pastelowa 21',
            'telephone' =>'342879432'
        ]);
        Sponsorship::create([
            'sponsor_id'=>1,
            'animal_id'=>1,
            'contribution' => 100.23
        ]);

        Sponsor::create([
            'id' => 2,
            'name' => 'Hyperever',
            'address'=>'ul. Gdańska 116',
            'telephone' =>'831749582'
        ]);
        Sponsorship::create([
            'sponsor_id'=>2,
            'animal_id'=>2,
            'contribution' => 332.00
        ]);

        Sponsor::create([
            'id' => 3,
            'name' => 'Senseware',
            'address'=>'ul. Sasankowa 22',
            'telephone' =>'628496046'
        ]);
        Sponsorship::create([
            'sponsor_id'=>3,
            'animal_id'=>3,
            'contribution' => 251.00
        ]);
        Sponsorship::create([
            'sponsor_id'=>3,
            'animal_id'=>4,
            'contribution' => 123.00
        ]);
    }
}
