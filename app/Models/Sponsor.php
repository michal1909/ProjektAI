<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Sponsor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'telephone',
        'image'
    ];

    protected $table = "sponsors";

    public function getImage(){
        if ($this->image == null) {
            return Storage::url('img/crd1.jpg');//TODO
        }
        return Storage::url($this->image);
    }

    public function animals(){
        return $this->belongsToMany(Animal::class, 'sponsorships', 'sponsor_id', 'animal_id')->withTimestamps();
    }
    public function sponsorships(){
        return $this->hasMany(Sponsorship::class,'sponsor_id','id');
    }
}
