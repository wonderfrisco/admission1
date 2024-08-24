<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function document(){
        return $this->hasOne(Document::class);
    }
    public function placement(){
        return $this->hasOne(Placement::class);
    }
}
