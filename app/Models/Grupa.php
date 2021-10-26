<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupa extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function mentors(){
        return $this->hasMany(Mentor::class);
    }

    public function praktikants(){
        return $this->hasMany(Praktikant::class);
    }

    public function zadataks(){
        return $this->hasMany(Zadatak::class);
    }
}
