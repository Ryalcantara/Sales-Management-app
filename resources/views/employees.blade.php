@include('partials.header')
@include('partials.sidebar')
<div class="p-8 sm:ml-60 mt-10">



    <!-- Modal toggle -->
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
        class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
        type="button">
        Add Employee</button>

    <x-add-emp-modal />

    @php
        $array = array();;
    @endphp



    <div class="w-full rounded-lg p-4">

        <div>
            <h4>Employee</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-800">
                <thead>
                    <tr>
                        <th class="p-4">Employee</th>
                        <th class="p-4">Employee Position</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                    @php
                    $array =  array('id' =>  $employee->id, );
                    @endphp
                        <tr>
                            <td class="p-4">{{ $employee->name }}</td>
                            <td class="p-4">{{ $employee->role }}</td>
                            <td class="p-4">
                                <a href="/view_employee/{{ $employee->id }}" type="button"
                                    class="text-green-700 border border-green-700 hover:bg-green-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:focus:ring-green-800 dark:hover:bg-green-500">
                                    <span>
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </a>
                                <button type="button"  data-modal-target="popup-modal"
                                    data-modal-toggle="popup-modal_{{ $employee->id }}"
                                    class="text-red-700 border border-red-700 hover:bg-red-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:focus:ring-red-800 dark:hover:bg-red-500">
                                    <span>
                                        <i class="fa-solid fa-trash"></i>
                                    </span>
                                </button>
                                @include('components.warning-modal')
                            </td>
                        </tr>
                        
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>

</div>



@include('partials.footer')
