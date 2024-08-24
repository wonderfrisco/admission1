<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'document','folder', 'status_id', 'gender_id'];

    public function gender(){
        return $this->belongsTo(Gender::class);
    }
    public function status(){
        return $this->belongsTo(Status::class);
    }
}
