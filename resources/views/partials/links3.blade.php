 <aside id="logo-sidebar"
     class="fixed top-0 left-16 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
     aria-label="Sidebar" style="border-right: solid lightgray 1px">
     <div class="px-20 mt-20">

         <h3 class="text-3xl font-bold dark:text-white">Reports</h3>

     </div>
     <hr>
     <ul class="space-y-2 font-medium p-5 -mt-9  dark:text-white">

         <li style="margin-top: 2rem">
             <a href="{{ url('/payroll') }}" type="button"
                 class="{{ request()->is('payroll') ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                 <span><i class="fas fa-wallet"></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap  dark:text-white">Payroll</span>
             </a>
         </li>
         <li style="margin-top: 2rem">
             <button class="cursor-not-allowed opacity-50" disable>
                 <span><i class="fas fa-cash-register" disable></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap" disable>Financial Report</span>
             </button>
         </li>

     </ul>
     </div>
 </aside>
