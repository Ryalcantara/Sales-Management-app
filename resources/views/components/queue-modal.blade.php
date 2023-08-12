<!-- Main modal -->
<div id="queue-modal" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-hide="queue-modal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Warning!</h3>

                <div>
                    <h5 class="text-center">Adding or Choosing a new Customer will override the current Sales on queue if the Sales queue table is already filled</h5>
                    <br>
                </div>
                <div>
                    <button class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2" type="button" data-drawer-target="drawer-right" data-drawer-show="drawer-right" data-drawer-placement="right" aria-controls="drawer-right"> Choose Existing Customer</button>
                    @include('components.add-pending-drawer')
                    <a type="button" href="/customers" class="text-gray-900 shadow-md sm:rounded-lg font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"> Add Customer</a>
                </div>
           </div>




        </div>
    </div>
</div>