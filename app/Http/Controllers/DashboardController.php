<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\MedicalAssessment;
use App\Http\Requests\VisitorRequest;

class DashboardController extends Controller
{
    public function index()
    {
        $no_of_reg_today = Visitor::where('created_at',Carbon::now())->count();
        $no_of_reg = Visitor::count();
        $no_of_bmi = Visitor::count('bmi');
        $no_of_male = Visitor::where('gender','male')->count();
        $no_of_female = Visitor::where('gender', 'female')->count();
        return view('/dashboard', [
            'no_of_reg_today' => $no_of_reg_today,
            'no_of_reg' => $no_of_reg,
            'no_of_bmi' => $no_of_bmi,
        ]);
    }
}
