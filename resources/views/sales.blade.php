@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')
<div class="p-8 ml-80">

    @include('partials.topbar')
    <div style="margin-top: -30px">
        <br>
        <br>
        <br>
        <a href="/pending_sales" type="button"
            class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
            Add Sales</a>

        <div class="w-full  rounded-lg p-4">

            <div>
                <h4>Sales Record</h4>
            </div>
            <hr>


            <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">


                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
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
            <br>
            <!-- Pagination -->
            @if ($data->hasPages())
            <div>

                <nav class="flex justify-between mt-4">
                    <div class="flex space-x-2">
                        {{-- Previous Page Link --}}
                        @if ($data->onFirstPage())
                        <button class="pagination-btn disabled" disabled>&laquo; Previous</button>
                        @else
                            <a href="{{ $data->previousPageUrl() }}" class="pagination-btn">&laquo; Previous</a>
                        @endif

                        {{-- Next Page Link --}}
                        @if ($data->hasMorePages())
                            <a href="{{ $data->nextPageUrl() }}" class="pagination-btn">Next &raquo;</a>
                            @else
                            <button class="pagination-btn disabled" disabled>Next &raquo;</button>
                            @endif
                        </div>
                    </nav>
                </div>
            @endif

        </div>
    </div>
</div>
</div>




@include('partials.footer')
