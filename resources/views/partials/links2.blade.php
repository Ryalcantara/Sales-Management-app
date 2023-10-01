 <aside id="logo-sidebar"
     class="fixed top-0 left-16 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
     aria-label="Sidebar" style="border-right: solid lightgray 1px">
     <div class="px-20 mt-20">

         <h3 class="text-3xl font-bold dark:text-white">Misc</h3>

     </div>
     <hr>
     <ul class="space-y-2 font-medium p-5 -mt-9  dark:text-white">

         <li style="margin-top: 2rem">
             <a href="{{ url('/expenses') }}" type="button"
                 class="{{ request()->is('expenses') ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                 <span><i class="fa-solid fa-coins"></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap">Expenses</span>
             </a>
         </li>
         <li style="margin-top: 2rem">
             <a href="{{ url('/services') }}" type="button"
                 class="{{ request()->is('services') ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                 <span><i class="fa-solid fa-bell-concierge"></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap">Services</span>
             </a>
         </li>
         <li style="margin-top: 2rem">
             <a href="{{ url('/products') }}" type="button"
                 class="{{ request()->is('products') ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                 <span><i class="fa-solid fa-cart-flatbed"></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
             </a>
         </li>

         <li style="margin-top: 2rem">
             <a href="{{ url('/customers') }}" type="button"
                 class="{{ request()->is('customers') ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                 <span><i class="fa-solid fa-user"></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap">Customers</span>
             </a>
         </li>
         <li style="margin-top: 2rem">
             <a href="{{ url('/deductions') }}" type="button"
                 class="{{ request()->is('deductions') ? 'bg-gray-200 text-red-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 p-2 rounded-lg' : '' }}"
                 <span><i class="fas fa-hand-holding-usd"></i></span>
                 <span class="flex-1 ml-3 whitespace-nowrap">Deductions</span>
             </a>
         </li>

     </ul>
     </div>
 </aside>
