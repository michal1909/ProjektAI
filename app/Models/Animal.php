<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'enclosure_id',
        'name',
        'species',
        'gender',
        'country'
    ];
    protected $table = "animals";

    public function enclosure(){
        return $this->belongsTo(Enclosure::class, 'enclosure_id');
    }


}
