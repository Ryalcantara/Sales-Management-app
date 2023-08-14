@include('partials.header')
@include('partials.sidebar')
<div class="p-8 sm:ml-60 mt-10">

    <div class="w-full  rounded-lg p-4">

        <div>
            <h4>Payroll</h4>
        </div>
        <hr>


        <div class="overflow-x-auto shadow-md sm:rounded-lg mt-6">

            <form action="/payroll-show" method="post">
                @csrf
              



                <div date-rangepicker class="flex items-center">
                    <div class="relative flex justify-around">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="start" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date start">
                    </div>
                    <span class="mx-4 text-gray-500">to</span>
                    <div class="relative flex justify-around">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <input name="end" type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Select date end">
                            <button type="submit" class="ml-5 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">submit</button>
                    </div>
                </div>




            </form>
            <br>








            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Employee
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Standard Payment
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Service Commission
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product Commission
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Gross Pay
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Late/Abscences
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Cash Advance
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Deduction
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Net Pay
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payrolls as $payroll)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $payroll->name }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $payroll->standardPay }}
                                    
                                </td>
                                <td class="px-6 py-4">
                                    {{ $payroll->totalAmountServices }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $payroll->totalAmountProducts
                                         }}
                                </td>
                                <td class="px-6 py-4 text-right">

                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>




        </div>
    </div>



    @include('partials.footer')
