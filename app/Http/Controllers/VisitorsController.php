<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\MedicalAssessment;
use App\Http\Requests\VisitorRequest;

class VisitorsController extends Controller
{
    public function index()
    {
        $visitors = Visitor::orderBy('id', 'desc')->get();
        return view('visitors.index', ['visitors' => $visitors]);
    }

    public function create()
    {
        return view('visitors.create');
    }

    public function store(VisitorRequest $request) 
    {
        $input = $request->all();      
        $visitor = Visitor::create($input); 

        if($request->hasFile('child_doc') && $request->file('child_doc')->isValid()){
            $visitor->addMediaFromRequest('child_doc')->toMediaCollection('child_doc');
        }
        if($request->hasFile('parent_doc') && $request->file('parent_doc')->isValid()){
            $visitor->addMediaFromRequest('parent_doc')->toMediaCollection('parent_doc');
        }
        if($request->hasFile('home_address_doc') && $request->file('home_address_doc')->isValid()){
            $visitor->addMediaFromRequest('home_address_doc')->toMediaCollection('home_address_doc');
        }
        if($request->hasFile('school_doc') && $request->file('school_doc')->isValid()){
            $visitor->addMediaFromRequest('school_doc')->toMediaCollection('school_doc');
        }
        if($request->hasFile('health_card_doc') && $request->file('health_card_doc')->isValid()){
            $visitor->addMediaFromRequest('health_card_doc')->toMediaCollection('health_card_doc');
        }
        if($request->hasFile('consent_doc') && $request->file('consent_doc')->isValid()){
            $visitor->addMediaFromRequest('consent_doc')->toMediaCollection('consent_doc');
        }
        if($request->hasFile('other_doc_1') && $request->file('other_doc_1')->isValid()){
            $visitor->addMediaFromRequest('other_doc_1')->toMediaCollection('other_doc_1');
        }
        if($request->hasFile('other_doc_2') && $request->file('other_doc_2')->isValid()){
            $visitor->addMediaFromRequest('other_doc_2')->toMediaCollection('other_doc_2');
        }

        $request->session()->flash('success', 'Visitor saved successfully!');
        return redirect()->route('visitors.index'); 
    }
  
    public function show(Visitor $visitor)
    {
       //dd($visitor);
    }

    public function edit(Visitor $visitor)
    {
        // dd($visitor);
        $child_doc = $visitor->getFirstMedia('child_doc');
        return view('visitors.edit', ['visitor' => $visitor, 'child_doc' => $child_doc]);
    }

    public function update(Visitor $visitor, VisitorRequest $request) 
    {
        $visitor->update($request->all());
        if($request->hasFile('child_doc') && $request->file('child_doc')->isValid()){
            $visitor->addMediaFromRequest('child_doc')->toMediaCollection('child_doc');
        }
        if($request->hasFile('parent_doc') && $request->file('parent_doc')->isValid()){
            $visitor->addMediaFromRequest('parent_doc')->toMediaCollection('parent_doc');
        }
        if($request->hasFile('home_address_doc') && $request->file('home_address_doc')->isValid()){
            $visitor->addMediaFromRequest('home_address_doc')->toMediaCollection('home_address_doc');
        }
        if($request->hasFile('school_doc') && $request->file('school_doc')->isValid()){
            $visitor->addMediaFromRequest('school_doc')->toMediaCollection('school_doc');
        }
        if($request->hasFile('health_card_doc') && $request->file('health_card_doc')->isValid()){
            $visitor->addMediaFromRequest('health_card_doc')->toMediaCollection('health_card_doc');
        }
        if($request->hasFile('consent_doc') && $request->file('consent_doc')->isValid()){
            $visitor->addMediaFromRequest('consent_doc')->toMediaCollection('consent_doc');
        }
        if($request->hasFile('other_doc_1') && $request->file('other_doc_1')->isValid()){
            $visitor->addMediaFromRequest('other_doc_1')->toMediaCollection('other_doc_1');
        }
        if($request->hasFile('other_doc_2') && $request->file('other_doc_2')->isValid()){
            $visitor->addMediaFromRequest('other_doc_2')->toMediaCollection('other_doc_2');
        }
        $request->session()->flash('success', 'Visitor updated successfully!');
        return redirect()->route('visitors.index');
    }
  
    public function destroy(Visitor $visitor, Request $request)
    {
        $visitor->delete();
        $request->session()->flash('success', 'Visitor deleted successfully!');
        return redirect()->route('visitors.index');
    }

    public function add()
    {
        return view('visitors.add');
    }

    public function addMedicalAssessment(Request $request)
    {      
        $visitor_code = $request->visitor_code;
        $visitors = Visitor::select('id','full_name')
                            ->where('visitor_code', $visitor_code)
                            ->first();
        if(!empty($visitors)){
            return view('visitors.form',['visitor_code' => $visitor_code, 'visitors' => $visitors]);
        }else{
            $request->session()->flash('error', 'Your visitor code not found');
            return redirect()->route('visitors.add'); 
        }
    } 

    public function storeMedicalAssessment(Request $request) 
    {
        // dd($request);
        $request->validate([
            'height' => 'required',
            'weight' => 'required',
        ]);    
        $input = $request->all();      
        $visitor = MedicalAssessment::create($input); 
        $request->session()->flash('success', 'Medical Assessment saved successfully!');
        return redirect()->route('visitors.index'); 
    }

    public function history(Visitor $visitor)
    {
        $visitor->load(['MedicalAssessments']);
        return view('visitors.history', ['visitor' => $visitor]);
    }

    public function getVisitorData(Visitor $visitor)
    {
        return view('visitors.show_history');
    }
}
