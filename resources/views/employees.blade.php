@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')
<div class="p-8 sm:ml-60">
    @include('partials.topbar')
    <div style="margin-top: -30px">
        <br>
        <br>
        <br>



    <!-- Modal toggle -->
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
        class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
        type="button">
        Add Employee</button>

    <x-add-emp-modal />




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
                            $array = ['id' => $employee->employees_id, 'name' => $employee->name, 'email' => $employee->email, 'address' => $employee->address, 'contact' => $employee->contact, 'rate' => $employee->rate, 'position' => $employee->position];
                        @endphp
                        <tr>
                            <td class="p-4">{{ $employee->name }}</td>
                            <td class="p-4">{{ $employee->role }}</td>
                            <td class="p-4">
                                <button data-drawer-target="drawer-right_{{ $employee->employees_id }}"
                                    data-drawer-show="drawer-right_{{ $employee->employees_id }}"
                                    data-drawer-placement="right"
                                    aria-controls="drawer-right_{{ $employee->employees_id }}" type="button"
                                    class="text-white bg-indigo-500 hover:bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-indigo-500 dark:hover:bg-indigo-500 dark:focus:ring-indigo-500">
                                    <span>
                                        <i class="fa-solid fa-eye"></i>
                                    </span>
                                </button>
                                <button type="button" data-modal-target="popup-modal"
                                    data-modal-toggle="popup-modal_{{ $employee->employees_id }}"
                                    class="text-white bg-pink-600 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-600">
                                    <span>
                                        <i class="fa-solid fa-trash"></i>
                                    </span>
                                </button>
                                @include('components.warning-modal')

                            </td>
                        </tr>
                        <x-edit-employee-modal :data="$array" />
                        @include('components.employee-profile')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>



@include('partials.footer')
