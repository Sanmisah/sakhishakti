<x-layout.default>    
    <script src="/assets/js/simple-datatables.js"></script>
    <div x-data="multicolumn"> 
        <x-add-button :link="route('visitors.create')" :text="'New Registration'"/>
        <x-add-button :link="route('visitors.add')" :text="'Medical Assessment Form'"/>
        <div class="panel mt-6 table-responsive">
            <h5 class="md:absolute md:top-[25px] md:mb-0 mb-5 font-semibold text-lg dark:text-white-light">Visitors</h5>
            <table id="myTable" class="whitespace-nowrap">
                @foreach ($visitors as $visitor)
                <tr>                    
                    <td>{{ $visitor->full_name }}</td>
                    <td>{{ $visitor->dob }}</td>
                    <td>{{ $visitor->age }}</td>
                    @if($visitor->gender == 'Male')
                    <td>Male</td>
                    @elseif($visitor->gender == 'Female')
                    <td>Female</td>
                    @elseif($visitor->gender == 'Other')
                    <td>Other</td>
                    @else <td>-</td>
                    @endif
                    <td>{{ $visitor->village }}</td>
                    <td>{{ $visitor->taluka }}</td>
                    <td>{{ $visitor->district }}</td>
                    <td>{{ $visitor->state }}</td>
                    <td class="float-right">
                        <ul class="flex items-center gap-2" >
                            <li style="display: inline-block;vertical-align:top;">
                                <x-edit-button :link=" route('visitors.edit', $visitor->id)" />                               
                            </li>
                            <li style="display: inline-block;vertical-align:top;">
                                <x-delete-button :link=" route('visitors.destroy',$visitor->id)" />  
                            </li>   
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>

    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("multicolumn", () => ({
                datatable: null,
                init() {
                    this.datatable = new simpleDatatables.DataTable('#myTable', {
                        data: {
                            headings: [
                                "Name","DOB","Age","Gender","Village","Taluka","Disctrict","State","Action",
                            ],
                        },
                        searchable: true,
                        perPage: 15,
                        perPageSelect: [10, 20, 30, 50, 100],
                        columns: [{
                            select: 0,
                            order:[['0', "asc"]], 
                        }, ],
                        firstLast: true,
                        firstText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        lastText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M11 19L17 12L11 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> <path opacity="0.5" d="M6.99976 19L12.9998 12L6.99976 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        prevText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        nextText: '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4.5 h-4.5 rtl:rotate-180"> <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/> </svg>',
                        labels: {
                            perPage: "{select}"
                        },
                        layout: {
                            top: "{search}",
                            bottom: "{info}{select}{pager}",
                        },
                    })
                }
            }));
        });
    </script>
</x-layout.default>
