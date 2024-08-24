<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckAdmissionRequest;
use App\Models\Disability;
use App\Models\District;
use App\Models\Document;
use App\Models\House;
use App\Models\Living;
use App\Models\Occupation;
use App\Models\Parrent;
use App\Models\Payment;
use App\Models\Placement;
use App\Models\Region;
use App\Models\Relation;
use App\Models\Religion;
use App\Models\Student;
use App\Models\TenFiles;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    // public function register($index){
    //     $student = Placement::where('index', $index)->first();
    //     $regions = Region::get(['id', 'name']);
    //     $allocatedHouse = House::where('gender', $student->gender)->where('isFull', 0)->orderBy('updated_at', 'asc')->first();
    //     $countStudent = Student::where('house_id', $allocatedHouse->id)->get();
    //     if($countStudent){
    //         if($countStudent->count() ==$allocatedHouse->size){
    //             $allocatedHouse->isFull = true;

    //         }

    //     }

    //     // if($countStudent ==$allocatedHouse->size){

    //     // }
    //     // $houseCount = Student::where('house_id', $allocatedHouse->id)->count();
    //     return view('frontend.student', compact('student','regions','allocatedHouse'));
    // }

    // public function index(){
    //     return view('frontend.personal');
    // }

    public function admission(CheckAdmissionRequest $request){
        $currentDate = Carbon::now();
        $admission = Placement::where('index', $request->index)->first();
        $payment = Payment::where('index', $request->index)->first();
        $student = Student::where('index', $request->index)->first();


        if($admission){
            $document = Document::where('status_id', $admission->status->id)->where('gender_id', $admission->gender->id)->first();

            if($payment){
                if($student){

                    return view('frontend.personal',compact('student', 'document'));
                }
                else{
                    $regions = Region::get(['id', 'name']);
                    $disabilities = Disability::all();
                    $occupations = Occupation::all();
                    $relations = Relation::all();
                    $livings = Living::all();
                    $religions = Religion::all();
                    $allocatedHouse = House::where('gender_id', $admission->gender_id)->where('isFull', 0)->orderBy('updated_at', 'asc')->first();
                    $countStudent = Student::where('house_id', $allocatedHouse->id)->get();
                    if($countStudent){
                        if($countStudent->count()>=$allocatedHouse->size){
                            $allocatedHouse->isFull = true;
                            $allocatedHouse->save();
                            $allocatedHouse = House::where('gender_id', $admission->gender_id)->where('isFull', 0)->orderBy('updated_at', 'asc')->first();
                            $allocatedHouse->updated_at = $currentDate;
                            $allocatedHouse->save();
                            return view('frontend.student',compact('admission', 'allocatedHouse','regions', 'disabilities', 'religions', 'livings', 'occupations', 'relations'));
                        }
                        else{
                            $allocatedHouse->updated_at = $currentDate;
                            $allocatedHouse->save();
                            return view('frontend.student',compact('admission', 'allocatedHouse','regions', 'disabilities', 'religions','livings', 'occupations', 'relations'));

                        }
                    }
                    else{
                        $allocatedHouse->updated_at = $currentDate;
                        $allocatedHouse->save();
                        return view('frontend.student',compact('admission', 'allocatedHouse','regions', 'disabilities', 'religions', 'livings', 'occupations', 'relations'));
                    }
                }
            }
            else{

                return view('frontend.congratulations',compact('admission'));
            }

        }
        else{
            return redirect()->back()->with('error', 'Sorry, you have not been placed  here.');

        }

    }
    public function getDistricts(Request $request){

        $districts = District::where('region_id',$request->country_id)->get();

        return response()->json($districts);

    }

    public function uploadPhoto(Request $request){
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('photo/tmp/' . $folder, $filename);

            TenFiles::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder;
        }
        return '';

    }
    public function deleteTemPhoto(Request $request){
        $temfile = TenFiles::where('folder', request()->getContent())->first();
        if($temfile){
            Storage::deleteDirectory('photo/tmp/' . $temfile->folder);
            $temfile->delete();
            return response('');
        }
    }

    public function store(Request $request){
        $student = Student::where('index', $request->index)->first();
        if(!$student){
            $temfile = TenFiles::where('folder', $request->photo)->first();
            $placement = Placement::where('index', $request->index)->first();
           if($temfile){
            Storage::copy('photo/tmp/'. $temfile->folder . '/' . $temfile->filename, 'photo/'. $temfile->folder . '/' . $temfile->filename);
            Student::create([
                'index' => $request->index,
                'town' => $request->home,
                'code' => $request->code,
                'dob' => $request->dob,
                'religion_id' => $request->religion_id,
                'pob' => $request->pob,
                'bschool' => $request->bschool,
                'region_id' => $request->region,
                'district_id' => $request->district,
                'nationality' => $request->nationality,
                'raddress' => $request->raddress,
                'medication' => $request->medication,
                'disability_id' => $request->disability_id,
                'allergy' => $request->allergy,
                'raw' => $request->raw,
                'house_id' => $request->house_id,
                'photo' => 'photo/'. $temfile->folder . '/' . $temfile->filename,
                'folder' => $temfile->folder,
            ]);
            $placement =new Placement();
            $placement->enrollStudent($request->index);

            $parrent = new Parrent();
            $parrent->addParent($request);
            $parrent->addEmergency($request);


            Storage::deleteDirectory('photo/tmp/' . $temfile->folder);
            $temfile->delete();
            $student = Student::where('index', $request->index)->first();
            $document = Document::where('status_id', $student->placement->status->id)->where('gender_id', $student->placement->gender->id)->first();
            return view('frontend.personal', compact('student', 'document'))->with('message', 'Successfully Enrolled');
           }

        }
        else{
            $document = Document::where('status_id', $student->placement->status->id)->where('gender_id', $student->placement->gender->id)->first();
            return view('frontend.personal', compact('student', 'document'));
        }


    }

    // public function personal(){
    //     return view('frontend.personal');
    // }
    public function logout(){
        return redirect()->route('home')->with('message', 'Logout successfully');
    }
    public function editStudent(Student $student){

        $parrent = Parrent::where('index', $student->index)->where('type', 'Parent')->first();
        $emergency = Parrent::where('index', $student->index)->where('type', 'Emergency')->first();
        $regions = Region::all();
        $religions = Religion::all();
        $disabilities = Disability::all();
        $relations = Relation::all();
        $occupations = Occupation::all();
        $document = Document::where('status_id', $student->placement->status->id)->where('gender_id', $student->placement->gender->id)->first();
        $districts = District::where('region_id',$student->region_id)->get();

        return view('frontend.studentEdit',compact('student', 'regions','parrent', 'emergency', 'districts', 'disabilities', 'document', 'religions', 'relations', 'occupations'));
    }

    public function updateStudent(Student $student, Request $request){
        $document = Document::where('status_id', $student->placement->status->id)->where('gender_id', $student->placement->gender->id)->first();
        $student->pob = $request->pob;
        $student->dob = $request->dob;
        $student->town = $request->home;
        $student->bschool = $request->bschool;
        $student->region_id = $request->region;
        $student->district_id = $request->district;
        $student->raddress = $request->raddress;
        $student->religion_id = $request->religion_id;
        $student->house_id = $request->house_id;
        $student->nationality = $request->nationality;
        $student->medication = $request->medication;
        $student->allergy = $request->allergy;
        $student->disability_id = $request->disability_id;
        $student->code = $request->code;
        $oldFolder = $student->folder;
        $temfile = TenFiles::where('folder', $request->photo)->first();

            if($temfile){
                Storage::copy('photo/tmp/'. $temfile->folder . '/' . $temfile->filename, 'photo/'. $temfile->folder . '/' . $temfile->filename);
                $student->photo = 'photo/'. $temfile->folder . '/' . $temfile->filename;
                $student->folder = $temfile->folder;
                Storage::deleteDirectory('photo/tmp/' . $temfile->folder);
                Storage::deleteDirectory('photo/' . $oldFolder);
                $temfile->delete();
            }

        $parrent = new Parrent();
        $parrent->updateParent($request);
        $parrent->updateEmergency($request);
        // $parrent->updateGuadian($request);
        $student->save();
        return view('frontend.personal', compact('student', 'document'))->with('message', 'Record Updated Successfully', 'document');
    }

    public function admission_letter($letter){
        $student = Student::where('index', $letter)->first();

        $pdf = PDF::loadView('frontend.admission_letter', array('data' => $student));
        return $pdf->stream();
    }
    public function personal_record($letter){
        $student = Student::where('index', $letter)->first();
        $father = Parrent::where('index', $letter)->where('type', 'Parent')->first();
        $mother = Parrent::where('index', $letter)->where('type', 'Emergency')->first();

        $pdf = PDF::loadView('frontend.personal_record', array('data' => $student, 'father' => $father, 'mother' => $mother));
        return $pdf->stream();
    }

    public function prospectus(Document $document){
        return response()->download(public_path('storage/'. $document->document));
    }

    public function enrolment(){
       $enrolments = Student::latest()->get();

       return view('backend.enrolment.index', compact('enrolments'));
    }
    public function show(Student $student){

        $parent = Parrent::where('index', $student->index)->where('type', 'Parent')->first();
        $emergency = Parrent::where('index', $student->index)->where('type', 'emergency')->first();
       return view('backend.enrolment.show', compact('student', 'parent','emergency'));
    }

    public function editEnrolment(Student $student){
        $parrent = Parrent::where('index', $student->index)->where('type', 'Parent')->first();
        $emergency = Parrent::where('index', $student->index)->where('type', 'Emergency')->first();
        $regions = Region::all();
        $houses = House::where('gender_id', $student->placement->gender->id)->get();
        $religions = Religion::all();
        $disabilities = Disability::all();
        $relations = Relation::all();
        $occupations = Occupation::all();
        $document = Document::where('status_id', $student->placement->status->id)->where('gender_id', $student->placement->gender->id)->first();
        $districts = District::where('region_id',$student->region_id)->get();

        return view('backend.enrolment.edit',compact('student', 'regions','parrent', 'emergency', 'districts', 'disabilities', 'document', 'religions', 'relations', 'occupations', 'houses'));
    }

    public function updateEnrolment(Student $student, Request $request){
        $document = Document::where('status_id', $student->placement->status->id)->where('gender_id', $student->placement->gender->id)->first();
        $student->pob = $request->pob;
        $student->dob = $request->dob;
        $student->town = $request->home;
        $student->bschool = $request->bschool;
        $student->region_id = $request->region;
        $student->district_id = $request->district;
        $student->raddress = $request->raddress;
        $student->religion_id = $request->religion_id;
        $student->house_id = $request->house_id;
        $student->nationality = $request->nationality;
        $student->medication = $request->medication;
        $student->allergy = $request->allergy;
        $student->disability_id = $request->disability_id;
        $student->code = $request->code;
        $oldFolder = $student->folder;
        $temfile = TenFiles::where('folder', $request->photo)->first();
        if($temfile){
            Storage::copy('photo/tmp/'. $temfile->folder . '/' . $temfile->filename, 'photo/'. $temfile->folder . '/' . $temfile->filename);
            $student->photo = 'photo/'. $temfile->folder . '/' . $temfile->filename;
            $student->folder = $temfile->folder;
            Storage::deleteDirectory('photo/tmp/' . $temfile->folder);
            Storage::deleteDirectory('photo/' . $oldFolder);
            $temfile->delete();
        }

    $parrent = new Parrent();
    $parrent->updateParent($request);
    $parrent->updateEmergency($request);
    // $parrent->updateGuadian($request);
    $student->save();
    return redirect()->route('student.enrol')->with('message', 'Student updated successfully');
    }

}
