<x-layout.default>
<div>
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="{{ route('visitors.index') }}" class="text-primary hover:underline">Visitor</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Add Visitor</span>
        </li>
    </ul>
    <div class="pt-5" x-data="data">        
        <form class="space-y-5" action="{{ route('visitors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Personal Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <x-text-input name="visitor_code" class="bg-gray-100 dark:bg-gray-700" readonly="true" value="{{ old('visitor_code') }}" :label="__('Visitor Code')" :messages="$errors->get('visitor_code')" :require="true"/>   
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <div class="col-span-2">
                        <x-text-input name="full_name" value="{{ old('full_name') }}" :label="__('Full Name')" :require="true" :messages="$errors->get('full_name')"/>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <x-text-input name="dob" type="date" value="{{ old('dob') }}" id="dob" :label="__('Birth Date')" :messages="$errors->get('dob')" x-model="dob" x-on:change.debounce="ageCalculate()"/> 
                    <x-text-input name="age" type="age" value="{{ old('age') }}" x-on:change.debounce="dobChange()" x-model="age" :label="__('Age')" :messages="$errors->get('age')"/>
                    <div>
                        <label>Gender :</label>
                        <select class="form-input" name="gender">
                            <option value="">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select> 
                        <x-input-error :messages="$errors->get('gender')" class="mt-2" /> 
                    </div> 
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div class="col-span-2">
                        <x-text-input name="parent_name" value="{{ old('parent_name') }}" :label="__('Guardian/Parent Name')" :messages="$errors->get('parent_name')"/>
                    </div>
                    <x-text-input name="parent_contact_no" value="{{ old('parent_contact_no') }}" :label="__('Guardian/Parent Contact No')" :messages="$errors->get('parent_contact_no')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="address" value="{{ old('address') }}" :label="__('Address')" :messages="$errors->get('address')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <x-text-input name="village" value="{{ old('village') }}" :label="__('Village')"  :messages="$errors->get('village')"/>
                    <x-text-input name="taluka" value="{{ old('taluka') }}" :label="__('Taluka')"  :messages="$errors->get('taluka')"/>
                    <x-text-input name="district" value="{{ old('district') }}" :label="__('District')"  :messages="$errors->get('district')"/>
                    <x-text-input name="state" value="{{ old('state') }}" :label="__('State')"  :messages="$errors->get('state')"/>
                </div>
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Health Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <x-text-input name="height" value="{{ old('height') }}" :label="__('Height (in inches)')" :messages="$errors->get('height')" x-model="height"/> 
                    <x-text-input name="weight" value="{{ old('weight') }}" :label="__('Weight (in kg)')" :messages="$errors->get('weight')" x-model="weight" @change="bmiCalculation()"/> 
                    <x-text-input name="bmi" value="{{ old('bmi') }}" :label="__('BMI')" :messages="$errors->get('bmi')" x-model="bmi"/> 
                    <div>
                        <label>Blood Group :</label>
                        <select class="form-input" name="blood_group">
                            <option value="">Select blood group</option>
                            <option value="A RhD positive (A+)">A RhD positive (A+)</option>
                            <option value="A RhD negative (A-)">A RhD negative (A-)</option>
                            <option value="B RhD positive (B+)">B RhD positive (B+)</option>
                            <option value="B RhD negative (B-)">B RhD negative (B-)</option>
                            <option value="O RhD positive (O+)">O RhD positive (O+)</option>
                            <option value="O RhD negative (O-)">O RhD negative (O-)</option>
                            <option value="AB RhD positive (AB+)">AB RhD positive (AB+)</option>
                            <option value="AB RhD negative (AB-)">AB RhD negative (AB-)</option>
                        </select> 
                        <x-input-error :messages="$errors->get('blood_group')" class="mt-2" /> 
                    </div>
                </div>                
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="allergy" value="{{ old('allergy') }}" :label="__('Any allergy')"  :messages="$errors->get('allergy')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="medication" value="{{ old('medication') }}" :label="__('Any medication')"  :messages="$errors->get('medication')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="surgery" value="{{ old('surgery') }}" :label="__('Any previous Surgery')"  :messages="$errors->get('surgery')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="illness" value="{{ old('illness') }}" :label="__('Any illness')"  :messages="$errors->get('illness')"/>
                </div>
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Dietory Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <x-text-input name="no_of_meals" value="{{ old('no_of_meals') }}" :label="__('No of meals consumed daily')" :messages="$errors->get('no_of_meals')" />
                    <div>
                        <label>Daily Food Intake :</label>
                        <select class="form-input" name="food_type">
                            <option value="">Select food type</option>
                            <option value="Vegetarian">Vegetarian</option>
                            <option value="Non-Vegetarian">Non-Vegetarian</option>
                            <option value="Eggetarian">Eggetarian</option>
                        </select> 
                        <x-input-error :messages="$errors->get('food_type')" class="mt-2" /> 
                    </div> 
                    <div>
                        <label>Junk Food :</label>
                        <select class="form-input" name="junk_food">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> 
                        <x-input-error :messages="$errors->get('junk_food')" class="mt-2" /> 
                    </div>  
                </div>                
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="diet_restriction" value="{{ old('diet_restriction') }}" :label="__('Any dietory restrictions')"  :messages="$errors->get('diet_restriction')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="frequency_of_food_intake" value="{{ old('frequency_of_food_intake') }}" :label="__('Frequency of fruits & veg')"  :messages="$errors->get('frequency_of_food_intake')"/>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="favourite_food" value="{{ old('favourite_food') }}" :label="__('Favourite Food')"  :messages="$errors->get('favourite_food')"/>
                </div>
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Education and Employment Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                    <x-text-input name="high_qualification" value="{{ old('high_qualification') }}" :label="__('Highest Qualification')" :messages="$errors->get('high_qualification')" />
                    <x-text-input name="occupation" value="{{ old('occupation') }}" :label="__('Current occupation (if any)')" :messages="$errors->get('occupation')" />
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2">
                    <x-text-input name="school_college_name" value="{{ old('school_college_name') }}" :label="__('Name of school/college')"  :messages="$errors->get('school_college_name')"/>
                    <x-text-input name="distance" value="{{ old('distance') }}" :label="__('Distance from home to school/college')"  :messages="$errors->get('distance')"/>
                </div>         
            </div> 
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Other Information</h5>
                </div>               
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>Mobile Phone Access :</label>
                        <select class="form-input" name="mobile_phone_access">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> 
                        <x-input-error :messages="$errors->get('mobile_phone_access')" class="mt-2" /> 
                    </div>
                    <div>
                        <label>Computer/ Laptop Access :</label>
                        <select class="form-input" name="laptop_access">
                            <option value="">Select</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select> 
                        <x-input-error :messages="$errors->get('laptop_access')" class="mt-2" /> 
                    </div> 
                    <x-combo-input name="child_email_id" type="child_email_id" :email="true" value="{{ old('child_email_id') }}" :label="__('Email')" :messages="$errors->get('child_email_id')"/>
                    <x-text-input name="child_contact_no" value="{{ old('child_contact_no') }}" :label="__('Contact No')" :messages="$errors->get('child_contact_no')"/> 
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-1">
                    <x-text-input name="other_data" value="{{ old('other_data') }}" :label="__('Any Other Special needs')"  :messages="$errors->get('other_data')"/>                    
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>Child's ID proof:</label>
                        <input type="file" name="child_doc" class="form-input">            
                    </div>
                    <div>
                        <label>Parents ID proof:</label>
                        <input type="file" name="parent_doc" class="form-input">            
                    </div>
                    <div>
                        <label>Home address proof:</label>
                        <input type="file" name="home_address_doc" class="form-input">            
                    </div>
                    <div>
                        <label>School ID card:</label>
                        <input type="file" name="school_doc" class="form-input">            
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <div>
                        <label>Any other health card/report:</label>
                        <input type="file" name="health_card_doc" class="form-input">            
                    </div>
                    <div>
                        <label>Photo of signed consent form:</label>
                        <input type="file" name="consent_doc" class="form-input">            
                    </div>
                    <div>
                        <label>Any other documents:</label>
                        <input type="file" name="other_doc_1" class="form-input">            
                    </div>
                    <div>
                        <label>Any other documents:</label>
                        <input type="file" name="other_doc_2" class="form-input">            
                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script>
document.addEventListener("alpine:init", () => {
    Alpine.data('data', () => ({  
        init() {
            flatpickr(document.getElementById('dob'), {
                dateFormat: 'd/m/Y',
            });           
        },  
        
        age: '',
        dob: '',
        ageCalculate(){
            dob = this.dob;
            if (moment(dob, "YYYY-MM-DD").format("YYYY-MM-DD") == dob) {
                dob = moment(dob, "YYYY-MM-DD");
            }  
            if (moment(dob, "DD/MM/YYYY").format("DD/MM/YYYY") == dob) {
                dob = moment(dob, "DD/MM/YYYY");
            }
            today = moment();
            this.age = moment.duration(today.diff(dob)).years();
            // ageYear = Math.abs(this.age) + " Years";
            console.log(this.age);
        },

        dobChange(){
            this.dob = '';
        },

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
