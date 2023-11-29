<?php
use Carbon\Carbon;
$date = Carbon::now()->format('d/m/Y');
?>
<x-layout.default>
<div>
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="{{ route('visitors.index') }}" class="text-primary hover:underline">Visitor</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Add Medical Assessment Form</span>
        </li>
    </ul>
    <div class="pt-5" x-data="data">        
        <form class="space-y-5" action="{{ route('visitors.storeMedicalAssessment') }}" method="POST">
            @csrf
            <div class="panel">
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <input type="hidden" name="visitor_code" value="{{ $visitor_code }}">
                    <input type="hidden" name="visitor_id" value="{{ $visitors->id }}">
                    <x-text-input name="date" class="bg-gray-100 dark:bg-gray-700" readonly="true" value="{{ $date }}" :label="__('Date')" :messages="$errors->get('created_at')"/>
                    <x-text-input name="full_name" class="bg-gray-100 dark:bg-gray-700" readonly="true" value="{{ $visitors->full_name }}" :label="__('Full Name')" :messages="$errors->get('full_name')"/>
                </div>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Medical History</h5>
                </div> 
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">                    
                    <x-text-input name="disease" value="{{ old('disease') }}" :label="__('Underlying health conditions or diseases (if any)')"  :messages="$errors->get('disease')"/>
                    <x-text-input name="surgery" value="{{ old('surgery') }}" :label="__('Previous hospitalizations or surgeries')" :messages="$errors->get('surgery')"/>
                    <x-text-input name="medication" value="{{ old('medication') }}" :label="__('Current Medications')"  :messages="$errors->get('medication')"/>
                    <x-text-input name="allergies" value="{{ old('allergies') }}" :label="__('Allergies')"  :messages="$errors->get('allergies')"/>
                </div>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Physical Examination</h5>
                </div> 
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="height" value="{{ old('height') }}" x-model="height" :label="__('Height (in inches)')" :messages="$errors->get('height')" :require="true"/> 
                    <x-text-input name="weight" value="{{ old('weight') }}" @change="bmiCalculation()" x-model="weight" :label="__('Weight (in kg)')" :messages="$errors->get('weight')" :require="true"/> 
                    <x-text-input name="bmi" value="{{ old('bmi') }}" :label="__('BMI')" x-model="bmi" :messages="$errors->get('bmi')" /> 
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="blood_pressure" value="{{ old('blood_pressure') }}" :label="__('Blood Pressure')" :messages="$errors->get('blood_pressure')" /> 
                    <x-text-input name="heart_rate" value="{{ old('heart_rate') }}" :label="__('Heart Rate')" :messages="$errors->get('heart_rate')" /> 
                    <x-text-input name="respiratory_rate" value="{{ old('respiratory_rate') }}" :label="__('Respiratory Rate')" :messages="$errors->get('respiratory_rate')" /> 
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">                    
                    <x-text-input name="sign" value="{{ old('sign') }}" :label="__('Signs of micronutrient deficiencies or complications')"  :messages="$errors->get('sign')"/>
                    <x-text-input name="hair" value="{{ old('hair') }}" :label="__('Hair texture and condition')" :messages="$errors->get('hair')"/>
                    <x-text-input name="skin" value="{{ old('skin') }}" :label="__('Skin integrity and color')"  :messages="$errors->get('skin')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="nail_health" value="{{ old('nail_health') }}" :label="__('Nail Health')"  :messages="$errors->get('nail_health')"/>
                    <x-text-input name="oral_health" value="{{ old('oral_health') }}" :label="__('oral Health')" :messages="$errors->get('oral_health')"/>
                    <x-text-input name="swelling" value="{{ old('swelling') }}" :label="__('Presence of edema or swelling')" :messages="$errors->get('swelling')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="weakness" value="{{ old('weakness') }}" :label="__('Muscle wasting or weakness')"  :messages="$errors->get('weakness')"/>
                    <x-text-input name="poor_health" value="{{ old('poor_health') }}" :label="__('Signs of poor wound healing')" :messages="$errors->get('poor_health')"/>
                    <x-text-input name="fatigue" value="{{ old('fatigue') }}" :label="__('Signs of fatigue or weakness')" :messages="$errors->get('fatigue')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="observation" value="{{ old('observation') }}" :label="__('Other Observation')"  :messages="$errors->get('observation')"/>
                    <x-text-input name="hemoglobin_level" value="{{ old('hemoglobin_level') }}" :label="__('Hemoglobin level')" :messages="$errors->get('hemoglobin_level')"/>
                    <x-text-input name="serum" value="{{ old('serum') }}" :label="__('Serum Albumin Level')" :messages="$errors->get('serum')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="vitamin_level" value="{{ old('vitamin_level') }}" :label="__('Vitamin Level')"  :messages="$errors->get('vitamin_level')"/>
                    <x-text-input name="vitamin_d" value="{{ old('vitamin_d') }}" :label="__('Vitamin D')" :messages="$errors->get('vitamin_d')"/>
                    <x-text-input name="vitamin_b" value="{{ old('vitamin_b') }}" :label="__('Vitamin B12')" :messages="$errors->get('vitamin_b')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="relevant_vitamin" value="{{ old('relevant_vitamin') }}" :label="__('Other Relevant Vitamin')"  :messages="$errors->get('relevant_vitamin')"/>
                    <x-text-input name="laboratory_test" value="{{ old('laboratory_test') }}" :label="__('Other Relevant Laboratory Test')" :messages="$errors->get('laboratory_test')"/>
                </div>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Nutrion Assessment</h5>
                </div> 
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">                    
                    <x-text-input name="food_preference" value="{{ old('food_preference') }}" :label="__('Food preferences and aversions')"  :messages="$errors->get('food_preference')"/>
                    <x-text-input name="dietory_restrictions" value="{{ old('dietory_restrictions') }}" :label="__('Any specific dietary restrictions or cultural considerations')" :messages="$errors->get('dietory_restrictions')"/>
                    <x-text-input name="nutrition" value="{{ old('nutrition') }}" :label="__('Nutrition-related symptoms (if any)')"  :messages="$errors->get('nutrition')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="breakfast" value="{{ old('breakfast') }}" :label="__('Breakfast')"  :messages="$errors->get('breakfast')"/>
                    <x-text-input name="lunch" value="{{ old('lunch') }}" :label="__('Lunch')" :messages="$errors->get('lunch')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-3">                    
                    <x-text-input name="dinner" value="{{ old('dinner') }}" :label="__('Dinner')"  :messages="$errors->get('dinner')"/>
                    <x-text-input name="snack" value="{{ old('snack') }}" :label="__('Snack')" :messages="$errors->get('snack')"/>
                </div>
            </div>
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Additional Notes</h5>
                </div> 
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">                    
                    <x-text-input name="other_info" value="{{ old('other_info') }}" :label="__('Any relevant additional information or observations')"  :messages="$errors->get('other_info')"/>
                </div>
            </div>
            <div class="flex justify-end mt-4">
                <x-success-button>
                    {{ __('Submit') }}
                </x-success-button>                    
                &nbsp;&nbsp;
                <x-cancel-button :link="route('visitors.index')">
                    {{ __('Cancel') }}
                </x-cancel-button>
            </div>           
        </form>         
    </div>
</div>
<script>
document.addEventListener("alpine:init", () => {
    Alpine.data('data', () => ({ 
        height: '',
        weight: '',
        bmi: '',
        bmiCalculation(){
            if(!isNaN(this.height) && this.height != '' && !isNaN(this.weight) && this.weight != ''){
                this.calcMeter = (this.height / 39.37).toFixed(2);
                this.bmi = (this.weight/this.calcMeter).toFixed(2);
            }
        }
    }));
});
</script> 
</x-layout.default>
