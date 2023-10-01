 <!-- drawer component -->
 <div id="drawer-right_{{ $employee->employees_id }}"
     class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
     tabindex="-1" aria-labelledby="drawer-right-label">
     <div class="w-full  rounded-lg p-4">

         <div class="text-center content-center">
             <h1>Employee</h1>

             <br>
             <div class="flex justify-center items-center">
                 <div
                     class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                     <div class="flex justify-end px-4 pt-4">



                         <button data-modal-target="edit-modal_{{ $employee->employees_id }}"
                             data-modal-toggle="edit-modal_{{ $employee->employees_id }}"
                             class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><span><i
                                     class="fas fa-pencil-alt"></i></span></button>



                     </div>
                     <div class="flex flex-col items-center pb-10">
                         <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                             src="{{ asset('img/dog.jpg') }}" alt="profile" />
                         <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $employee->name }}</h5>
                         <span class="text-sm text-gray-500 dark:text-gray-400">{{ $employee->role }}</span>

                     </div>
                 </div>

             </div>

             <br>
             <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                 <div class="flex flex-col pb-3">
                     <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Email address</dt>
                     <dd class="text-lg font-semibold">{{ $employee->email }}</dd>
                 </div>
                 <div class="flex flex-col py-3">
                     <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Home address</dt>
                     <dd class="text-lg font-semibold">{{ $employee->address }}</dd>
                 </div>
                 <div class="flex flex-col pt-3">
                     <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">Phone number</dt>
                     <dd class="text-lg font-semibold">{{ $employee->contact }}</dd>
                 </div>
             </dl>


             <hr>



         </div>
     </div>
 </div>
