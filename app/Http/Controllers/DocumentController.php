<?php

namespace App\Http\Controllers;

use App\Http\Requests\addDocumentRequest;
use App\Http\Requests\updateDocumentRequest;
use App\Models\Document;
use App\Models\Gender;
use App\Models\Status;
use App\Models\TenFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index(){
        $documents = Document::latest()->get();
        return view('backend.document.index', compact('documents'));
    }
    public function show(Request $request, Document $document){

        return view('backend.document.show', compact('document'));
    }
    public function edit(Document $document){
        $genders = Gender::all();
        $statuss = Status::all();

        return view('backend.document.edit', compact('document', 'genders', 'statuss'));
    }
    public function update(updateDocumentRequest $request, Document $document){
        $document->name = $request->name;
        $document->description = $request->description;
        $document->status_id = $request->status_id;
        $document->gender_id = $request->gender_id;

        $oldFolder = $document->folder;
        $temfile = TenFiles::where('folder', $request->document)->first();
            if($temfile){
                Storage::copy('document/tmp/'. $temfile->folder . '/' . $temfile->filename, 'document/'. $temfile->folder . '/' . $temfile->filename);
                $document->document = 'document/'. $temfile->folder . '/' . $temfile->filename;
                $document->folder = $temfile->folder;
                Storage::deleteDirectory('document/tmp/' . $temfile->folder);
                Storage::deleteDirectory('document/' . $oldFolder);
                $temfile->delete();
            }

        $document->save();
        return redirect()->route('document.index')->with('message', 'Document updated successfully');
    }
    public function create(){
        $genders  = Gender::all();
        $statuss = Status::all();
        return view('backend.document.create', compact('genders', 'statuss'));
    }
    public function store(addDocumentRequest $request){
        $temfile = TenFiles::where('folder', $request->document)->first();
       if($temfile){
        Storage::copy('document/tmp/'. $temfile->folder . '/' . $temfile->filename, 'document/'. $temfile->folder . '/' . $temfile->filename);
        Document::create([
            'name' => $request->name,
            'description' => $request->description,
            'status_id' => $request->status_id,
            'gender_id' => $request->gender_id,
            'document' => 'document/'. $temfile->folder . '/' . $temfile->filename,
            'folder' => $temfile->folder,
        ]);

        Storage::deleteDirectory('document/tmp/' . $temfile->folder);
        $temfile->delete();
        return redirect()->route('document.index')->with('message', 'Document added successfully');
       }



    }

    public function upload(Request $request){
        if($request->hasFile('document')){
            $file = $request->file('document');
            $filename = $file->getClientOriginalName();
            $folder = uniqid() . '-' . now()->timestamp;
            $file->storeAs('document/tmp/' . $folder, $filename);

            TenFiles::create([
                'folder' => $folder,
                'filename' => $filename
            ]);

            return $folder;
        }
        return '';
    }

    public function destroy(){
        $temfile = TenFiles::where('folder', request()->getContent())->first();
        if($temfile){
            Storage::deleteDirectory('document/tmp/' . $temfile->folder);
            $temfile->delete();
            return response('');
        }
    }
    public function delete(Document $document){
        Storage::deleteDirectory('document/' . $document->folder);
        $document->delete();

        return redirect()->back()->with('message', 'Document Deleted successfully');
    }
}


