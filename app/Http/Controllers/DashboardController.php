<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Placement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        $houses = House::all();
        $placements = Placement::all();
        $enrolls = Placement::where('enroll',true)->get();
        $notenrolls = Placement::where('enroll',0)->get();
        $protocols = Placement::where('protocol',1)->get();
        $protocolsenroll = Placement::where('protocol', true)->where('enroll', true)->get();
        $protocolsnotenroll = Placement::where('protocol',1)->where('enroll', 0)->get();
        $users = User::all();
        $females = Placement::where('gender_id',1)->count();
        $males = Placement::where('gender_id',2)->count();
        $housess = House::all()->pluck('name')->toArray();

        $data = [];

        return view('backend.dashboard', compact('houses', 'placements', 'users','notenrolls','enrolls','protocols','protocolsenroll','protocolsnotenroll', 'females', 'houses'));
    }
    public function login(){
        return view('backend.admin.login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
