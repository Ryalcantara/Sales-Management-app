@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')
<div class="p-8 ml-80">

    @include('partials.topbar')
    <div style="margin-top: -30px">
        <br>
        <br>
        <br>
    <button data-modal-target="queue-modal" data-modal-toggle="queue-modal" type="button"
        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
        Add Queue Sales</button>

    @include('components.queue-modal')

    <div class="flex justify-center">

        @if ($record)

            @if ($record->customer !== '')
                <h1 class="text-5xl font-extrabold dark:text-white">Current Customer:<small
                        class="ml-2 font-semibold text-gray-500 dark:text-gray-400">{{ $record->customer }}</small></h1>
            @endif
        @endif

    </div>
    <div class="w-full  rounded-lg p-4">

        <div>
            <h4>Pending Sales</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead>
                    <tr>
                        <th class="p-4" rowspan="2">Date</th>
                        <th class="p-4" rowspan="2">Customer Name</th>
                        <th class="p-4" rowspan="2">Employee</th>
                        <th class="p-4" rowspan="2">Services</th>
                        <th class="p-4" rowspan="2">Products</th>
                        <th class="p-4" rowspan="2">Quantity</th>
                        <th class="p-4">GCASH</th>
                        <th class="p-4">Gift Certificate</th>
                        <th class="p-4">Gift Voucher</th>
                        <th class="p-4">Loyalty Card</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $customer = '';
                        $pending = '';
                    @endphp
                    @foreach ($pending_sales as $pending)
                        <tr>
                            <td class="p-4">{{ $pending->date_id }}</td>
                            <td class="p-4">{{ $pending->customer }}</td>
                            <td class="p-4">{{ $pending->name }}</td>
                            <td class="p-4">{{ $pending->service_name }}</td>
                            <td class="p-4">{{ $pending->product_name }}</td>
                            <td class="p-4">{{ $pending->quantity }}</td>
                            <td class="p-4">{{ $pending->gcash }}</td>
                            <td class="p-4">{{ $pending->gift_certificate }}</td>
                            <td class="p-4">{{ $pending->gift_voucher }}</td>
                            <td class="p-4">{{ $pending->loyalty }}</td>
                            <td class="p-4">
                                <div class="flex">

                                    <button data-drawer-target="edit_pending_{{ $pending->id }}"
                                        data-drawer-show="edit_pending_{{ $pending->id }}"
                                        data-drawer-placement="right" aria-controls="edit_pending_{{ $pending->id }}"
                                        type="button"
                                        class="text-white bg-indigo-500 hover:bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-indigo-500 dark:hover:bg-indigo-500 dark:focus:ring-indigo-500">
                                        <span>
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </span>
                                    </button>
                                    @include('components.edit_pending')

                                    <button type="button" data-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal_{{ $pending->id }}"
                                        class="text-white bg-pink-600 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-600">
                                        <span>
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                    </button>
                                    @include('components.delete_pending')

                                </div>

                            </td>
                        </tr>
                        @php
                            $customer = $pending->customer;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex justify-between">
            <div class="m-10 flex flex-row-reverse ">

                @if ($record)

                    @if ($record->customer !== '')
                        <button type="button" data-drawer-target="add_pending_{{ $pending->customer }}"
                            data-drawer-show="add_pending_{{ $pending->customer }}" data-drawer-placement="right"
                            aria-controls="add_pending_{{ $pending->customer }}"
                            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add
                            Pending Sales</button>
                        @include('components.add-pending')
                    @endif
                @endif



            </div>
            <div class="m-10 flex flex-row-reverse ">
                <form action="/submit" method="GET">
                    <button
                        class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>



@include('partials.footer')
