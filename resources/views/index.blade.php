@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')
<div class="p-8 ml-80">
    @include('partials.topbar')
    <div style="margin-top: -30px">
        <br>
        <br>
        <br>
        <div style="height: 100vh; width: 100%" class=" dark:text-white -mb-10">

            <canvas id="line-chart" width="900" height="200"></canvas>
        </div>
        <hr>
        <hr>
        <div class="flex justify-between">
            <div style="margin-top: -26rem">


                <table class="text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead>
                        <tr>
                            <th class="p-4">Sales ID</th>
                            <th class="p-4">Date</th>
                            <th class="p-4">Customer</th>
                            <th class="p-4">Employee</th>
                            <th class="p-4">Services</th>
                            <th class="p-4">Products</th>
                            <th class="p-4">Quantity</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $sale)
                            <tr>
                                <td class="p-4">{{ $sale->id }}</td>
                                <td class="p-4">{{ $sale->date_id }}</td>
                                <td class="p-4">{{ $sale->customer_name }}</td>
                                <td class="p-4">{{ $sale->name }}</td>
                                <td class="p-4">{{ $sale->service_name }}</td>
                                <td class="p-4">{{ $sale->product_name }}</td>
                                <td class="p-4">{{ $sale->quant }}</td>



                            </tr>
                        @endforeach
                    </tbody>
                </table>
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


            <div style="margin-top: -26rem; border-left: solid rgb(208, 208, 208) 1px; padding-left: 30px">
                <h3>Monthly Budget</h3>

                <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach ($budget as $budgetItem)
                        <li class="pb-3 sm:pb-4">
                            <div class="flex items-center space-x-4">
                                <span class="flex-shrink-0">
                                    <i class="fa-solid fa-cash-register"></i>
                                </span>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                        {{ $budgetItem->month }}
                                    </p>
                                    <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                        Some subtext to be written here
                                    </p>
                                </div>
                                <div
                                    class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                    {{ $budgetItem->budget }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>

            </div>

        </div>



    </div>

    <script type="text/javascript">
        new Chart(document.getElementById("line-chart"), {
            type: 'line',
            data: {
                labels: {!! json_encode($data->pluck('date_id')) !!},
                datasets: [{
                        data: {!! json_encode($data->pluck('product_total')) !!},
                        label: "Product Total",
                        borderColor: "#3e95cd",
                        fill: true
                    },
                    {
                        data: {!! json_encode($data->pluck('service_amount')) !!},
                        label: "Service Amount",
                        borderColor: "#ff6384",
                        fill: true
                    },
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'Total Amounts'
                },
                elements: {
                    line: {
                        tension: 0.4,
                    }
                }
            }
        });
    </script>



    @include('partials.footer')
