@include('partials.header')
@include('partials.sidebar')
@include('partials.links2')
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
        Add Expenses</button>

    <x-add-expenses-modal />



    <div class="w-full  rounded-lg p-4">

        <div>
            <h4>Employee</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-800">
                <thead>
                    <tr>
                        <th class="p-4">Date</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Payments</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            @foreach ($expenses as $expense)
                                
                            <td class="p-4">{{ $expense->date }}</td>
                            <td class="p-4">{{ $expense->expense_type }}</td>
                            <td class="p-4">{{ $expense->payment }}</td>
                            <td class="p-4">
                                <button 
                                data-modal-target="edit-modal"
                                    data-modal-toggle="edit-modal_{{ $expense->id }}"
                                    class="text-white bg-indigo-500 hover:bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-indigo-500 dark:hover:bg-indigo-500 dark:focus:ring-indigo-500">
                                    <span>
                                        <i class="fa-solid fa-pen-to-square"></i></i>
                                    </span>
                                </button>
                                <button
                                data-modal-target="delete-modal"
                                data-modal-toggle="delete-modal_{{ $expense->id }}"
                                    class="text-white bg-pink-600 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-600">
                                    <span>
                                        <i class="fa-solid fa-trash"></i>
                                    </span>
                                </button>
                                @include('components.edit_delete-expenses')
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
            </table>
        </div>
    </div>
</div>
</div>



@include('partials.footer')
