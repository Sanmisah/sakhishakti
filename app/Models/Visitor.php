<?php

namespace App\Models;
use Carbon\Carbon;
use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\MedicalAssessment;

class Visitor extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, CreatedUpdatedBy;
    protected $fillable = [
        'visitor_code',
        'full_name',
        'dob',
        'age',
        'gender',
        'parent_name',
        'parent_contact_no',
        'address',
        'village',
        'taluka',
        'district',
        'state',
        'height',
        'weight',
        'bmi',
        'blood_group',
        'allergy',
        'medication',
        'surgery',
        'illness',
        'no_of_meals',
        'food_type',
        'junk_food',
        'diet_restriction',
        'frequency_of_food_intake',
        'favourite_food',
        'high_qualification',
        'occupation',
        'school_college_name',
        'distance',
        'mobile_phone_access',
        'laptop_access',
        'child_contact_no',
        'child_email_id',
        'other_data'
    ];

    public function MedicalAssessments()
    {
        return $this->hasMany(MedicalAssessment::class);
    }

    public function setDobAttribute($value)
    {
        // $this->attributes['dob'] = Carbon::createFromFormat('d/m/Y', $value);
        $this->attributes['dob'] = $value != null  ? Carbon::createFromFormat('d/m/Y', $value) : null;
    }

    public function getDobAttribute($value)
    {
        // return Carbon::parse($value)->format('d/m/Y');
        return $value != null  ? Carbon::parse($value)->format('d/m/Y') : null;
    }

    public static function booted(): void
    {
        static::creating(function(Visitor $visitor){
            $visitors = Visitor::whereNotNull('visitor_code')->orderBy('created_at','DESC')->first();
            $max = $visitors ? Str::substr($visitors->visitor_code, 1) : 0;
            $visitor->visitor_code = 'V'.str_pad($max + 1, 5, "0", STR_PAD_LEFT);
        });
    }
}
