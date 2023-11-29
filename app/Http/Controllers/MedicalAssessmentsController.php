<?php

namespace App\Http\Controllers;
use App\Models\Visitor;
use App\Models\MedicalAssessment;
use Illuminate\Http\Request;

class MedicalAssessmentsController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('medical_assessments.create');
    }

    public function store(Request $request) 
    {
        $input = $request->all();      
        $medical_assessment = MedicalAssessment::create($input);         
        $request->session()->flash('success', 'Medical Assessment saved successfully!');
        return redirect()->route('visitors.index'); 
    }
  
    public function show(Visitor $visitor)
    {
       //
    }

    public function edit(Visitor $visitor)
    {
        
    }

    public function update(MedicalAssessment $medical_assessment, Request $request) 
    {
        //
    }
  
    public function destroy(MedicalAssessment $medical_assessment, Request $request)
    {
        //
    }

}
