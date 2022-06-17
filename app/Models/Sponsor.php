<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'telephone'
    ];

    protected $table = "sponsors";

    public function animals(){
        return $this->belongsToMany(Animal::class, 'sponsorships', 'sponsor_id', 'animal_id')->withTimestamps();
    }
}
