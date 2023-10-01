<aside id="logo-sidebar" class="fixed top-0 left-16 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar" style="border-right: solid lightgray 1px">
<div class="px-20 mt-20">
 
<h3 class="text-3xl font-bold dark:text-white">Index</h3>

</div>
<hr>
       <ul class="space-y-2 font-medium p-5 -mt-9  dark:text-white">
         
        <li style="margin-top: 2rem">
            <a href="{{ url('/index') }}" type="button" class="{{ request()->is('index')  ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                <span><i class="fa-solid fa-chart-line"></i></span>
                <span class="ml-3 ">Dashboard</span>
            </a>
        </li>
        <li style="margin-top: 2rem">
            <a href="{{ url('/employees') }}" type="button" class="{{ request()->is('employees')  ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                class="p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-100">
                <span><i class="fa-solid fa-users-between-lines"></i></span>
                <span class="flex-1 ml-3 whitespace-nowrap">Employees</span>

            </a>
        </li>
        <li style="margin-top: 2rem">
            <a href="{{ url('/sales') }}" type="button" class="{{ request()->is('sales')  ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                class="p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-100">
                <span><i class="fa-solid fa-money-bill-transfer"></i></span>
                <span class="flex-1 ml-3 whitespace-nowrap">Sales</span>

            </a>
        </li>
        <li style="margin-top: 2rem">
            <a href="{{ url('/time') }}" type="button" class="{{ request()->is('time')  ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                class="p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-100">

                <span><i class="fa-solid fa-business-time"></i></span>
                <span class="flex-1 ml-3 whitespace-nowrap">Time Record</span>
            </a>
        </li>

      
       </ul>
    </div>
 </aside>



{{-- 


  --}}