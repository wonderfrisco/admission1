<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function houses(){
        return $this->hasOne(House::class);
    }

    public function placements(){
        return $this->hasMany(Placement::class);
    }
    public function document(){
        return $this->hasOne(Placement::class);
    }
}
