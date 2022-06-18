<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'enclosure_id',
        'name',
        'species',
        'gender',
        'country',
        'image'
    ];
    protected $table = "animals";

    public function getImage(){
        if ($this->image == null) {
            return Storage::url('img/crd1.jpg');//TODO
        }
        return Storage::url($this->image);
    }
    public function enclosure(){
        return $this->belongsTo(Enclosure::class, 'enclosure_id');
    }
}
