<?php
use Carbon\Carbon;
?>
<style>
table {
    border-collapse: collapse;
    border: 2px solid rgb(200, 200, 200);
    letter-spacing: 1px;
    font-size: 0.8rem;
}
td,
th {
    border: 1px solid rgb(190, 190, 190);
    padding: 10px 20px;
}
</style>
<x-layout.default> 
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="{{ route('visitors.index') }}" class="text-primary hover:underline">Visitors</a>
        </li>
    </ul>       
    <div class="pt-5">
        <div class="panel">
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Medical History</h5>
            </div>
            <table class="table-fixed">
                <tr>
                    <th>Underlying health conditions or diseases (if any)</th>
                    <td>{{ $medical_assessment->disease}}</td>
                    <th>Previous hospitalizations or surgeries</th>
                    <td>{{ $medical_assessment->surgery}}</td>
                </tr>
                <tr>
                    <th>Current Medications</th>
                    <td>{{ $medical_assessment->medication}}</td>
                    <th>Allergies</th>
                    <td>{{ $medical_assessment->allergies}}</td>
                </tr>
            </table>
            <hr>
            <br>
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Physical Examination</h5>
            </div>
            <table class="table-fixed">
                <tr>
                    <th>Height</th>
                    <td>{{ $medical_assessment->height}}</td>
                    <th>Weight</th>
                    <td>{{ $medical_assessment->weight}}</td>
                </tr>
                <tr>
                    <th>BMI</th>
                    <td>{{ $medical_assessment->bmi}}</td>
                    <th>Heart Rate:</th>
                    <td>{{ $medical_assessment->heart_rate}}</td>
                </tr>
                <tr>
                    <th>Respiratory Rate</th>
                    <td>{{ $medical_assessment->respiratory_rate}}</td>
                    <th>Signs of micronutrient deficiencies or complications:</th>
                    <td>{{ $medical_assessment->sign}}</td>
                </tr>
                <tr>
                    <th>Hair texture and condition:</th>
                    <td>{{ $medical_assessment->hair}}</td>
                    <th>Skin integrity and color:</th>
                    <td>{{ $medical_assessment->skin}}</td>
                </tr>
                <tr>
                    <th>Nail Health:</th>
                    <td>{{ $medical_assessment->nail_health}}</td>
                    <th>oral Health::</th>
                    <td>{{ $medical_assessment->oral_health}}</td>
                </tr>
                <tr>
                    <th>Presence of edema or swelling:</th>
                    <td>{{ $medical_assessment->swelling}}</td>
                    <th>Muscle wasting or weakness:</th>
                    <td>{{ $medical_assessment->weakness}}</td>
                </tr>
                <tr>
                    <th>Signs of poor wound healing:</th>
                    <td>{{ $medical_assessment->poor_health}}</td>
                    <th>Signs of fatigue or weakness:</th>
                    <td>{{ $medical_assessment->fatigue}}</td>
                </tr>
                <tr>
                    <th>Other Observation:</th>
                    <td>{{ $medical_assessment->observation}}</td>
                    <th>Hemoglobin level:</th>
                    <td>{{ $medical_assessment->hemoglobin_level}}</td>
                </tr>
                <tr>
                    <th>Serum Albumin Level:</th>
                    <td>{{ $medical_assessment->serum}}</td>
                    <th>Vitamin Level:</th>
                    <td>{{ $medical_assessment->vitamin_level}}</td>
                </tr>
                <tr>
                    <th>Vitamin D:</th>
                    <td>{{ $medical_assessment->vitamin_d}}</td>
                    <th>Vitamin B12:</th>
                    <td>{{ $medical_assessment->vitamin_b}}</td>
                </tr>
                <tr>
                    <th>Other Relevant Vitamin:</th>
                    <td>{{ $medical_assessment->relevant_vitamin}}</td>
                    <th>Other Relevant Laboratory Test:</th>
                    <td>{{ $medical_assessment->laboratory_test}}</td>
                </tr>
            </table>
            <hr>
            <br>
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Nutrion Assessment</h5>
            </div>
            <table>
                <tr>
                    <th>Food preferences and aversions:</th>
                    <td>{{ $medical_assessment->food_preference}}</td>
                    <th>Nutrition-related symptoms (if any):</th>
                    <td>{{ $medical_assessment->nutrition}}</td>
                </tr>
                <tr>
                    <th>Any specific dietary restrictions or cultural considerations:</th>
                    <td>{{ $medical_assessment->dietory_restrictions}}</td>
                </tr>
                <tr>
                    <th>Breakfast</th>
                    <td>{{ $medical_assessment->breakfast}}</td>
                    <th>Lunch</th>
                    <td>{{ $medical_assessment->lunch}}</td>
                </tr> 
                <tr>
                    <th>Dinner</th>
                    <td>{{ $medical_assessment->dinner}}</td>
                    <th>Snack</th>
                    <td>{{ $medical_assessment->snack}}</td>
                </tr> 
            </table>
            <hr>
            <br>
            <div class="flex items-center justify-between mb-5">
                <h5 class="font-semibold text-lg dark:text-white-light">Additional Notes</h5>
            </div>
            <table class="table-fixed">
                <tr>
                    <th>Any relevant additional information or observations:</th>
                    <td>{{ $medical_assessment->other_info}}</td>
                </tr>
            </table>
        </div>
    </div>    
</x-layout.default>
