<x-layout.default>  
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="{{ route('visitors.index') }}" class="text-primary hover:underline">Visitors</a>
        </li>
        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
            <span>Add</span>
        </li>
    </ul>       
    <div class="pt-5">
        <form action="{{ route('addMedicalAssessment')  }}" method="post">
            @csrf
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Add Visitor Code </h5>
                </div> 
                <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-4">
                    <x-text-input name="visitor_code" value="{{ old('visitor_code') }}" :label="__('Visitor Code')" :messages="$errors->get('visitor_code')" :require="true"/>  
                </div>
                <div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>    
</x-layout.default>
