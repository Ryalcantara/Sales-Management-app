@include('partials.header')
@include('partials.sidebar')
<div class="p-8 sm:ml-60 mt-10">

    <div class="w-full  rounded-lg p-4">

        <div>
            <h4>Time Record</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <table class="w-full text-sm text-left text-gray-800">
                <thead>
                    <tr>
                        <th class="p-4">Employee</th>
                        <th class="p-4">Date</th>
                        <th class="p-4">Time in</th>
                        <th class="p-4">Time out</th>
                        <th class="p-4">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>




@include('partials.footer')
