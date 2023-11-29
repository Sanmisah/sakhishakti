<?php
use Carbon\Carbon;
?>
<x-layout.default>  
<div x-data="multicolumn"> 
    <ul class="flex space-x-2 rtl:space-x-reverse">
        <li>
            <a href="{{ route('visitors.index') }}" class="text-primary hover:underline">Visitors</a>
        </li>
    </ul>       
    <div class="pt-5">
        <form action="" method="post">
            @csrf
            <div class="panel">
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Personal Information</h5>
                </div>
                <table class="table-fixed">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Visitor Code</th>
                            <th>Parent Name</th>
                            <th>Parent Contact No</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $visitor->full_name}}</td>
                            <td>{{ $visitor->visitor_code}}</td>
                            <td>{{ $visitor->parent_name}}</td>
                            <td>{{ $visitor->parent_contact_no}}</td>
                            <td>{{ $visitor->address}}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <br />
                <div class="flex items-center justify-between mb-5">
                    <h5 class="font-semibold text-lg dark:text-white-light">Medical Assessment Information</h5>
                </div>
                <table class="table-fixed">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($visitor->MedicalAssessments as $data)
                        <tr>
                            <td>{{ @$data->created_at->format('d/m/Y')}}</td>
                            <td>
                                <li style="display: inline-block;vertical-align:top;">
                                    <x-pdf-button :link=" route('medical_assessment.show', $data->id)"/>  
                                    <!-- <a href="#" class="btn btn-success btn-sm"  @click="toggle({{$data->id}})">View</a> -->
                                </li> 
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>    
    <div class="fixed inset-0 bg-[black]/60 z-[999] hidden overflow-y-auto"
        :class="open && '!block'">
        <div class="flex items-start justify-center min-h-screen px-4"
            @click.self="open = false">
            <div x-show="open" x-transition x-transition.duration.300
                class="panel border-0 py-1 px-4 rounded-lg overflow-hidden w-full max-w-sm my-8">
                <div
                    class="flex items-center justify-between p-5 font-semibold text-lg dark:text-white">
                    Data
                    <button type="button" @click="toggle"
                        class="text-white-dark hover:text-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                            height="24px" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="w-6 h-6">
                            <line x1="18" y1="6" x2="6"
                                y2="18"></line>
                            <line x1="6" y1="6" x2="18"
                                y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="p-5">
                    <form class="space-y-5" action="" method="POST">
                    @csrf
                        <div class="relative mb-4">
                        <x-text-input name="id" x-model="id"  :messages="$errors->get('code')" hidden/>
                            <x-combo-input name="amount"  :label="__('Approval Amount')"  :messages="$errors->get('amount')"/>
                        </div>
                        <x-success-button>
                            {{ __('Submit') }}
                        </x-success-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("multicolumn", () => ({
            open: false,
            toggle(x) {
                console.log(x);
                this.id = x;
                this.open = !this.open;
            },
        }));
    });
</script>
</x-layout.default>
