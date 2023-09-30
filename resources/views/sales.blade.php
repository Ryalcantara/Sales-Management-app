@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')
<div class="p-8 sm:ml-60">
    @include('partials.topbar')
    <div style="margin-top: -30px">
        <br>
        <br>
        <br>
        <a href="/pending_sales" type="button"
            class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
            Add Sales</a>

        <div class="w-full  rounded-lg p-4">

            <div>
                <h4>Sales Record</h4>
            </div>
            <hr>


            <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">


                <table class="w-full text-sm text-left text-gray-800">
                    <thead>
                        <tr>
                            <th class="p-4">Sales ID</th>
                            <th class="p-4">Date</th>
                            <th class="p-4">Customer</th>
                            <th class="p-4">Employee</th>
                            <th class="p-4">Services</th>
                            <th class="p-4">Products</th>
                            <th class="p-4">Quantity</th>
                            <th class="p-4">GCASH</th>
                            <th class="p-4">Gift Certificate</th>
                            <th class="p-4">Gift Voucher</th>
                            <th class="p-4">Loyalty</th>
                            <th class="p-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $sale)
                            <tr>
                                <td class="p-4">{{ $sale->id }}</td>
                                <td class="p-4">{{ $sale->date_id }}</td>
                                <td class="p-4">{{ $sale->customer }}</td>
                                <td class="p-4">{{ $sale->name }}</td>
                                <td class="p-4">{{ $sale->service_name }}</td>
                                <td class="p-4">{{ $sale->product_name }}</td>
                                <td class="p-4">{{ $sale->quantity }}</td>
                                <td class="p-4">{{ $sale->gcash }}</td>
                                <td class="p-4">{{ $sale->gift_certificate }}</td>
                                <td class="p-4">{{ $sale->gift_voucher }}</td>
                                <td class="p-4">{{ $sale->loyalty }}</td>
                                <td class="p-4">
                                    <button type="button" data-modal-target="popup-modal"
                                        data-modal-toggle="popup-modal_{{ $sale->id }}"
                                        class="text-white bg-pink-600 hover:bg-pink-600 focus:ring-4 focus:outline-none focus:ring-pink-600 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-pink-600 dark:hover:bg-pink-600 dark:focus:ring-pink-600">
                                        <span>
                                            <i class="fa-solid fa-trash"></i>
                                        </span>
                                    </button>
                                    @include('components.delete_sale')
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <nav class="flex items-center justify-between pt-4" aria-label="Table navigation">
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                        class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                        class="font-semibold text-gray-900 dark:text-white">1000</span></span>
                <ul class="inline-flex -space-x-px text-sm h-8">
                    <div class="mt-4">
                        {{ $data->links() }}
                    </div>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <a href="#"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>




@include('partials.footer')
