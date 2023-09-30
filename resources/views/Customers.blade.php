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
            Add Customers</button>

        <x-add-customer-modal />

        @php
            $array = [];
        @endphp



        <div class="w-full  rounded-lg p-4">

            <div>
                <h4>Customers</h4>
            </div>
            <hr>


            <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

                <table class="w-full text-sm text-left text-gray-800">
                    <thead>
                        <tr>
                            <th class="p-4">Customer Name</th>
                            <th class="p-4">Customer Type</th>
                            <th class="p-4">Contact Number</th>
                            <th class="p-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $customer)
                            @php
                                $array = ['id' => $customer->id];
                            @endphp
                            <tr>
                                <td class="p-4">{{ $customer->customer_name }}</td>
                                <td class="p-4">{{ $customer->customer_type }}</td>
                                <td class="p-4">{{ $customer->contact_number }}</td>
                                <td class="p-4">
                                    <div class="flex">
                                        <button data-modal-target="edit-modal"
                                            data-modal-toggle="edit-modal_{{ $customer->id }}"
                                            class="text-white bg-indigo-500 hover:bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-indigo-500 dark:hover:bg-indigo-500 dark:focus:ring-indigo-500">
                                            <span>
                                                <i class="fa-solid fa-pen-to-square"></i></i>
                                            </span>
                                        </button>

                                        <button type="submit" data-modal-target="delete-modal"
                                            data-modal-toggle="delete-modal_{{ $customer->id }}"
                                            class="text-white bg-pink-600 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-600">
                                            <span>
                                                <i class="fa-solid fa-trash"></i>
                                            </span>
                                        </button>
                                    </div>
                                    @include('components.edit_delete-customer')
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
