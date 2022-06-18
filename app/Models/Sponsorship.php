<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribution'
    ];

    protected $table = "sponsorships";

  public function animal (){
      return $this->belongsTo(Animal::class);
  }

  public function sponsor (){
      return $this->belongsTo(Sponsor::class);
  }

}
