<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placement extends Model
{
    use HasFactory;

    // public function __construct(public array $data)
    // {
    //     // $this->email = $data['email'];
    //     // $this->name = $data['name'];
    //     // $this->password = $data['password'];
    // }
    protected $fillable = [
        'index',
        'name',
         'gender_id',
         'aggregate',
         'programme_id',
         'track',
         'status_id',
         'contact',
         'protocol',
         'enroll',
    ];

    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function enrollStudent($index){
        $placement = Placement::where('index', $index)->first();
        $placement->enroll = true;
        $placement->save();
    }
    public function checkHouseSize($index){
        $placement = Placement::where('index', $index)->first();
        $placement->enroll = true;
        $placement->save();
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }
    public function student(){
        return $this->hasOne(Student::class, 'index', 'index');
    }
    public function gender(){
        return $this->belongsTo(Gender::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function programme(){
        return $this->belongsTo(Programme::class);
    }
}
