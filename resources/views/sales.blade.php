@include('partials.header')
@include('partials.sidebar')
<div class="p-8 sm:ml-60 mt-10">

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
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sales as $sale)
                        <tr>
                            <td class="p-4">{{ $sale->date_id }}</td>
                            <td class="p-4">{{ $sale->customer }}</td>
                            <td class="p-4">{{ $sale->name }}</td>
                            <td class="p-4">{{ $sale->services }}</td>
                            <td class="p-4">{{ $sale->products }}</td>
                            <td class="p-4">{{ $sale->quantity }}</td>
                            <td class="p-4">{{ $sale->gcash }}</td>
                            <td class="p-4">{{ $sale->gift_certificate }}</td>
                            <td class="p-4">{{ $sale->gift_voucher }}</td>
                            <td class="p-4">{{ $sale->loyalty }}</td>
                            <td class="p-4">

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@include('partials.footer')
