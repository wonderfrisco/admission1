<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'index',
        'dob',
        'pob',
        'town',
        'bschool',
        'region_id',
        'district_id',
        'raddress',
        'religion_id',
        'photo',
        'house_id',
        'folder',
        'nationality',
         'code',
         'disability_id',
         'medication',
         'allergy',
         'raw',
    ];

    public function house(){
        return $this->belongsTo(House::class);
    }
    public function parent(){
        return $this->belongsTo(Parrent::class);
    }

    public function placement(){
        return $this->belongsTo(Placement::class, 'index', 'index');
    }
    public function region(){
        return $this->belongsTo(Region::class);
    }
    public function district(){
        return $this->belongsTo(District::class);
    }
    public function disability(){
        return $this->belongsTo(Disability::class);
    }
    public function religion(){
        return $this->belongsTo(Religion::class);
    }
}

