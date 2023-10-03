

  <div id="add_pending_{{ $pending->customer }}"
      class="fixed top-0 right-0 z-40 h-screen p-1 overflow-y-auto transition-transform translate-x-full bg-white w-100 dark:bg-gray-800"
      tabindex="-1" aria-labelledby="drawer-right">
      <div class="w-full  rounded-lg p-4">

          <div class="px-6 py-6 lg:px-8">


            <div class="flex justify-center items-center">

                <button type="button" data-drawer-hide="add_pending_{{ $pending->customer }}"
                    aria-controls="add_pending_{{ $pending->customer }}"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 right-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>

            </div>

              <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Add Queue Sales</h3>





              <form action="/add-pending-without-customer" method="POST">

                <input type="hidden" name="date_id" value="{{ date('m/d/Y') }}">
                <input type="hidden" name="customer" value="{{ $pending->customer }}">

                @csrf
                  @php
                      $employee = $employees;
                      $service = $services;
                      $product = $products;
                  @endphp
                  <br>
                  <div class="grid md:grid-cols-2 md:gap-6">

                      <!-- EMPLOYEE & SERVICES -->
                      <x-employee :data='$employee' />
                      <x-services :data='$service' />
                  </div>




                  <!-- PRODUCTS -->
                  <x-products :data='$product'/>




                  <br>
                  <div>

                      <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Other forms of payment:</h3>

                  </div>
                  <br>

                  <div>

                      <!-- GCASH -->
                      <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input name="gcash"
                            type="number"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required>
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">GCASH:</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input name="gift_certificate"
                            type="number"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required>
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gift Certificate:</label>
                        </div>
                      </div>
                      <div class="grid md:grid-cols-2 md:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input name="gift_voucher"
                                type="number"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required>
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Gift Voucher:</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input name="loyalty"
                                type="number"
                                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                placeholder=" " required>
                            <label
                                class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Loyalty:</label>
                        </div>
                      </div>


                  </div>
                  <div class="relative z-0 w-full mb-6 group p-4 flex justify-between">
                      <button type="button"
                          class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" data-drawer-hide="add_pending_{{ $pending->customer }}"
                          aria-controls="add_pending_{{ $pending->customer }}">Close</button>
                      <button type="submit" 
                          class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save
                          Changes</button>
              </form>
          </div>
          </form>


      </div>
  </div>
  </div>
