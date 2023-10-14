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
                            class="ml-2 font-semibold text-gray-500 dark:text-gray-400">{{ $record->customer_name }}</small>
                    </h1>
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
                            <th class="p-4">Total Amount</th>
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
                                <td class="p-4">{{ $pending->customer_name }}</td>
                                <td class="p-4">{{ $pending->name }}</td>
                                <td class="p-4">{{ $pending->service_name }}</td>
                                <td class="p-4">{{ $pending->product_name }}</td>
                                <td class="p-4">{{ $pending->quant }}</td>
                                <td class="p-4">{{ $pending->gcash }}</td>
                                <td class="p-4">{{ $pending->gift_certificate }}</td>
                                <td class="p-4">{{ $pending->gift_voucher }}</td>
                                <td class="p-4">{{ $pending->loyalty }}</td>
                                <td class="p-4">
                                    <div class="flex">

                                        {{-- <button data-drawer-target="edit_pending_{{ $pending->id }}"
                                            data-drawer-show="edit_pending_{{ $pending->id }}"
                                            data-drawer-placement="right"
                                            aria-controls="edit_pending_{{ $pending->id }}" type="button"
                                            class="text-white bg-indigo-500 hover:bg-indigo-500 focus:ring-4 focus:outline-none focus:ring-indigo-500 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-indigo-500 dark:hover:bg-indigo-500 dark:focus:ring-indigo-500">
                                            <span>
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </span>
                                        </button> --}}
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
                                $customer = $pending->customer_id;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
<br>
<br>

            <h3>Total Amount:</h3>
            <input type="text" id="disabled-input-2" aria-label="disabled input 2"
                class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                value="{{$total_amount}}" disabled readonly>

    
        


            <div class="flex justify-between">
                <div class="m-10 flex flex-row-reverse ">



                    @if ($record)

                        @if ($record->customer !== '')
                            <button type="button" data-drawer-target="add_pending_{{ $pending->customer_id }}"
                                data-drawer-show="add_pending_{{ $pending->customer_id }}"
                                data-drawer-placement="right" aria-controls="add_pending_{{ $pending->customer_id }}"
                                class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Add
                                Another Order for the Current Custoemer</button>
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



<script>
    const productSelect = document.getElementById('productSelect');
    const currentQuantityInput = document.getElementById('currentQuantity');
    const quantityInput = document.getElementById('quantityInput');

    productSelect.addEventListener('change', function() {
        const selectedOption = productSelect.options[productSelect.selectedIndex];
        const productId = selectedOption.value;

        console.log(productId);

        const getProductQuantityRoute = @json(route('getProductQuantity'));


        // Make an AJAX request to get the product quantity
        fetch(getProductQuantityRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    product_id: productId
                })
            })
            .then(response => {
                // Check if the response status is OK (200)
                if (!response.ok) {
                    throw new Error(`HTTP error! Status: ${response.status}`);
                }
                // Parse the JSON response
                return response.json();
                // console.log(response.json())
            })
            .then(data => {
                console.log(data.quantity)
                if (data.quantity !== undefined) {
                    currentQuantityInput.value = data.quantity;
                    // Uncomment the line below if you want to set the quantity input as well
                    // quantityInput.value = data.quantity;
                } else {
                    console.error('Error fetching product quantity');
                }
            })
            .catch(error => {
                console.log('Error fetching product quantity:', error);
            });
    });


    // Validate quantity before form submission
    const form = document.querySelector('form'); // Add the form tag if not present

    form.addEventListener('submit', function(event) {
        const currentQuantity = parseInt(currentQuantityInput.value, 10);
        const enteredQuantity = parseInt(quantityInput.value, 10);

        if (enteredQuantity > currentQuantity) {
            alert('Error: Entered quantity cannot be more than the current quantity.');
            event.preventDefault(); // Prevent form submission
        }
    });
</script>




@include('partials.footer')
