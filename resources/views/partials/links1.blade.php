
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-20 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
<br>
<br>
<br>
       <ul class="space-y-2 font-medium" >
         
        <li style="margin-top: 2rem">
            <a href="{{ url('/index') }}" type="button" class="{{ request()->is('index')  ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                <span><i class="fa-solid fa-chart-line"></i></span>
                <span class="ml-3">Dashboard</span>
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