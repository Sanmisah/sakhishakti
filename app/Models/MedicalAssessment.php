<?php

namespace App\Models;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAssessment extends Model
{
    use HasFactory, CreatedUpdatedBy;
    protected $fillable = [
        'visitor_id',
        'email',
        'disease',
        'surgery',
        'medication',
        'allergies',
        'height',
        'weight',
        'bmi',
        'blood_pressure',
        'heart_rate',
        'respiratory_rate',
        'sign',
        'hair',
        'skin',
        'nail_health',
        'oral_health',
        'swelling',
        'weakness',
        'poor_health',
        'fatigue',
        'observation',
        'hemoglobin_level',
        'serum',
        'vitamin_level',
        'vitamin_d',
        'vitamin_b',
        'relevant_vitamin',
        'laboratory_test',
        'food_preference',
        'dietory_restrictions',
        'nutrition',
        'breakfast',
        'lunch',
        'dinner',
        'snack',
        'other_info'
    ];
}
