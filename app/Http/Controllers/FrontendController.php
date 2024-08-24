<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckAdmissionRequest;
use App\Models\District;
use App\Models\House;
use App\Models\Placement;
use App\Models\Region;
use App\Models\Student;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.welcome');
    }
  
   

}
