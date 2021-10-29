<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zadatak extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function grupa(){
        return $this->belongsTo(Grupa::class);
    }
}
