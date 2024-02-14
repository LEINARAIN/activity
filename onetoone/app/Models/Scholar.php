<?php

namespace App\Models;

use App\Models\Educational;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scholar extends Model
{
    protected $fillable = ["name", "age", "address"];
    use HasFactory;

    public function educational(){
        return $this->hasOne(Educational::class);
    }

    public function country(){
        return $this->hasOne(Country::class);
    }
}
