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
        //
    }

    public function store(Request $request) 
    {
        //
    }
  
    public function show(MedicalAssessment $medical_assessment)
    {
        $medical_assessment = MedicalAssessment::where('id',$medical_assessment->id)->first();
        return view('visitors.show_history', ['medical_assessment' => $medical_assessment]);
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
