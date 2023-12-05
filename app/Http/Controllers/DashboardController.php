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
        $villages = Visitor::groupBy('village')->selectRaw('count(*) as total, village')->get();
        $genders = Visitor::groupBy('gender')->selectRaw('count(*) as total, gender')->get();
        return view('/dashboard', [
            'no_of_reg_today' => $no_of_reg_today,
            'no_of_reg' => $no_of_reg,
            'no_of_bmi' => $no_of_bmi,
            'villages' => $villages,
            'genders' => $genders,
        ]);
    }
}
