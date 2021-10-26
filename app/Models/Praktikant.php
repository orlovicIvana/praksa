<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Praktikant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function grupa(){
        return $this->belongsTo(Grupa::class);
    }

    public function zadataks(){
        return $this->hasMany(Zadatak::class);
    }
}
