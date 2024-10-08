<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'number_id', 'size','gender_id','color_id',
    ];

    public function students(){
        return $this->hasMany(Student::class);
    }

    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function number(){
        return $this->belongsTo(Number::class);
    }
    public function color(){
        return $this->belongsTo(Color::class);
    }
}
