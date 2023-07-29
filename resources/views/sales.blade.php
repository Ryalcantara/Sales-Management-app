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
                        <th class="p-4">Staff ID</th>
                        <th class="p-4">Employee</th>
                        <th class="p-4">Employee Position</th>
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
