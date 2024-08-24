<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Http\Requests\updateHouseRequest;
use App\Http\Requests\addHouseRequest;
use App\Models\Color;
use App\Models\Gender;
use App\Models\HouseNumber;
use App\Models\Number;

class HouseController extends Controller
{
    public function index(){
        $houses = House::latest()->get();
        return view('backend.house.index', compact('houses'));
    }
    public function create(){
        $genders = Gender::all();
        $colors = Color::all();
        $numbers = Number::all();
        return view('backend.house.create',compact('genders', 'colors', 'numbers'));
    }
    public function store(addHouseRequest $request){
        House::create($request->all());

        return redirect()->route('house.index')->with('message', 'House added successfully');

    }
    public function edit(House $house)
    {
        $genders = Gender::all();
        $colors = Color::all();
        $numbers = Number::all();
        return view('backend.house.edit', compact('house', 'genders', 'colors','numbers'));
    }
    public function update(updateHouseRequest $request, House $house)
    {
        if($request->size > $house->size){
            $house->isFull = false;
        }
        $house->name = $request->name;
        $house->color_id = $request->color_id;
        $house->gender_id = $request->gender_id;
        $house->number_id = $request->number_id;
        $house->size = $request->size;
        $house->update();
        return redirect()->route('house.index')->with('message', 'House updated successfully');
    }
    public function destroy(House $house)
    {
        $house->delete();
        return redirect()->route('house.index')->with('message', 'House Deleted successfully');

    }

}
