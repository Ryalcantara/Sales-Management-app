@include('partials.header')
@include('partials.sidebar')
<div class="p-8 sm:ml-60 mt-10">

    <button data-modal-target="queue-modal" data-modal-toggle="queue-modal" type="button"
        class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
        Add Queue Sales</button>

    <x-queue-modal />

    <div class="w-full backdrop-blur-sm  rounded-lg p-4">

        <div>
            <h4>Pending Sales</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-800">
                <thead>
                    <tr>
                        <th class="p-4" rowspan="2">Customer Name</th>
                        <th class="p-4" rowspan="2">Date</th>
                        <th class="p-4" rowspan="2">Employee</th>
                        <th class="p-4" rowspan="2">Services</th>
                        <th class="p-4" rowspan="2">Products</th>
                        <th class="p-4" rowspan="2">Quantity</th>
                        <th class="p-4">GCASH</th>
                        <th class="p-4">Gift Certificate</th>
                        <th class="p-4">Gift Voucher</th>
                        <th class="p-4">Loyalty Card</th>
                        <th class="p-4" rowspan="2">Amount</th>
                        <th class="p-4" colspan="2" rowspan="2">Actions</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>




@include('partials.footer')
