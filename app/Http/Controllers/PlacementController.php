<?php

namespace App\Http\Controllers;

use App\Exports\EnrolmentListExport;
use Illuminate\Http\Request;
use App\Models\Placement;
use App\Http\Requests\addPlacementRequest;
use App\Exports\PlacementExport;
use App\Exports\PlacementNotExport;
use App\Exports\ProtocolEnrolmentListExport;
use App\Exports\ProtocolNotEnrolmentListExport;
use App\Imports\PlacementImport;
use App\Imports\ProtocolImport;
use App\Models\Gender;
use App\Models\Programme;
use App\Models\Status;
use App\Models\Student;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class PlacementController extends Controller
{
    public function index(){
        $placements = Placement::latest()->get();
        return view('backend.placement.index', compact('placements'));

    }
    public function create(){
        $genders = Gender::all();
        $statuss =Status::all();
        $programmes = Programme::all();

        return view('backend.placement.create', compact('genders','statuss','programmes'));

    }
    public function store(addPlacementRequest $request){
        Placement::create([
            'index' => $request->index,
            'name' => $request->name,
            'gender_id' => $request->gender_id,
            'programme_id' => $request->programme_id,
            'aggregate' => $request->aggregate,
            'status_id' => $request->status_id,
            'track' => $request->track,
            'contact' => $request->contact,
            'protocol' => true,

        ]);
        return redirect()->route('placement.protocol.index')->with('message', 'Placement added successfully');
    }

    public function bulk()
    {
        return view('backend.placement.bulk');
    }
    public function import(Request $request)
    {
        Excel::import(new PlacementImport, $request->file('file'));
        $request->session()->flash('alert-success', 'Placement uploaded successfully');
    }
    public function export()
    {
        $placements = Placement::all();
        return Excel::download(new PlacementExport($placements), 'placement.xlsx');

    }
    public function adnotenrol(){
        $placements = Placement::where('enroll', false)->get();
        return Excel::download(new PlacementNotExport($placements), 'notenrol.xlsx');
    }
    public function viewPdf()
    {
        $placements = Placement::all();
        $pdf = PDF::loadView('backend.placement.pdf', array('data' => $placements));
        return $pdf->download();

    }

    public function protocol(){
        return view('backend.placement.protocol');
    }
    public function storeProtocol(Request $request){
        Excel::import(new ProtocolImport, $request->file('file'));
            $request->session()->flash('alert-success', 'Protocol uploaded successfully');
    }
    public function protocolIndex(){
        $protocols = Placement::where('protocol', true)->get();
            return view('backend.protocol.index', compact('protocols'));
    }
    public function notenrol(){
        $notenrols = Placement::where('enroll', false)->get();
            return view('backend.placement.notenrol', compact('notenrols'));
    }
    public function enrolmentListExcel(){
        $enrolmentListExcel = Student::all();
        return Excel::download(new EnrolmentListExport($enrolmentListExcel), 'enrolmentList.xlsx');
    }
    public function protocolEnrolmentListExcel(){
        $protocolEnrolmentListExcel = Placement::where('protocol', 1)->where('enroll', true)->get();
        return Excel::download(new ProtocolEnrolmentListExport($protocolEnrolmentListExcel), 'protocolenrolmentList.xlsx');
    }
    public function notprotoenrol(){
        $notprotoenrols = Placement::where('enroll', false)->where('protocol', true)->get();
            return view('backend.protocol.notenrolist', compact('notprotoenrols'));
    }
    public function protoenrol(){
        $enrolprotos = Placement::where('enroll', true)->get();
            return view('backend.protocol.enrollist', compact('enrolprotos'));
    }

 public function notenrolPdf(){
    $placements = Placement::where('enroll', false)->get();
    $pdf = PDF::loadView('backend.enrolment.notenrolPDF', array('data' => $placements));
    return $pdf->download();
    }
 public function protocolNotEnrolPDF(){
    $placements = Placement::where('enroll', false)->where('protocol', true)->get();
    $pdf = PDF::loadView('backend.protocol.protocolnotenrolPDF', array('data' => $placements));
    return $pdf->download();
    }
 public function protocolNotEnrolExcel(){
    $protocolNotEnrolledExcel = Placement::where('protocol', 1)->where('enroll', false)->get();
    return Excel::download(new ProtocolNotEnrolmentListExport($protocolNotEnrolledExcel), 'protocolnotenrol.xlsx');
    }

}
