<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parrent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'occupation_id', 'type','number','town','index','address','relation_id'
    ];
    public function students(){
        return $this->hasMany(Student::class, 'index');
    }

    public function occupation(){
        return $this->belongsTo(Occupation::class);
    }
    public function living(){
        return $this->belongsTo(Living::class);
    }
    public function relation(){
        return $this->belongsTo(Relation::class);
    }
    public function addParent($student){
        $parent = Parrent::create([
            'name'=>$student->pname,
            'occupation_id'=>$student->poccupation_id,
            'town'=>$student->ptown,
            'number'=>$student->pnumber,
            'index'=>$student->index,
            'relation_id'=>$student->prelation_id,
            'address'=>$student->paddress,
            'type'=>'Parent'
        ]);

    }
    // public function addMother($student){
    //     Parrent::create([
    //         'name'=>$student->mname,
    //         'occupation_id'=>$student->moccupation_id,
    //         'town'=>$student->mtown,
    //         'number'=>$student->fnumber,
    //         'index'=>$student->index,
    //         'living_id'=>$student->mliving_id,
    //         'type'=>'Mother'
    //     ]);

    // }
    public function addEmergency($student){
        Parrent::create([
            'name'=>$student->ename,
            'occupation_id'=>$student->eoccupation_id,
            'town'=>$student->etown,
            'number'=>$student->pnumber,
            'index'=>$student->index,
            'relation_id'=>$student->erelation_id,
            'address'=>$student->eaddress,
            'type'=>'Emergency'
        ]);

    }

    public function updateParent($student){
        $parent = Parrent::where('index', $student->index)->where('type', 'Parent')->first();

        $parent->name = $student->pname;
        $parent->occupation_id = $student->poccupation_id;
        $parent->town = $student->ptown;
        $parent->number = $student->pnumber;
        $parent->relation_id = $student->prelation_id;
        $parent->address = $student->paddress;
        $parent->update();
      
        
    }
    public function updateEmergency($student){
       $parent = Parrent::where('index', $student->index)->where('type', 'Emergency')->first();

       $parent->name = $student->ename;
       $parent->occupation_id = $student->eoccupation_id;
       $parent->town = $student->etown;
       $parent->number = $student->enumber;
       $parent->relation_id = $student->erelation_id;
       $parent->address = $student->eaddress;
       $parent->update();

    }

}
