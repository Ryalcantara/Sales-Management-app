@include('partials.header')
@include('partials.sidebar')
@include('partials.links1')

<div class="p-8 sm:ml-60">
    @include('partials.topbar')
    <div style="margin-top: -30px">
        <br>
        <br>
        <br>
    <div class="w-full  rounded-lg p-4">

        <div>
            <h4>Time Record</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Date
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Employee
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Time in
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Time Out
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($time as $times)
                    @if($times->date_id == date('m/d/Y'))    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $times ->date_id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $times ->name }}
                            
                        </td>
                        <td class="px-6 py-4">
                            {{ $times ->time_in }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $times ->time_out }}
                            
                        </td>
                    </tr>
                    @endif
                    @endforeach
    
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>



@include('partials.footer')
