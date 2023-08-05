@include('partials.header')
@include('partials.sidebar')
<div class="p-8 sm:ml-60 mt-10">



    <!-- Modal toggle -->
    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
        class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
        type="button">
        Add Services</button>

    <x-add-services-modal />

    @php
        $array = array();;
    @endphp



    <div class="w-full  rounded-lg p-4">

        <div>
            <h4>Services</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-800">
                <thead>
                    <tr>
                        <th class="p-4">Services</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Amount</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($services as $service)
                    <tr>
                            <td class="p-4">{{ $service->service_name }}</td>
                            <td class="p-4">{{ $service->category }}</td>
                            <td class="p-4">{{ $service->amount }}</td>
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
