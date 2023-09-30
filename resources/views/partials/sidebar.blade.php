<div class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    style="width: 4rem; border-right: solid 1px lightgray; background-color: lightgray; transition: width 0.3s ease;">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <div style="margin: 0.5rem">
            <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 22 21">
                <!-- SVG Path -->
            </svg>
        </div>
        <ul class="space-y-2 font-large">


            <div id="tooltip-animation" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Index
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
            <a data-tooltip-target="tooltip-animation" href="{{ url('/index') }}" type="button"
                class="sidebar-link {{ request()->is('index') || request()->is('employees') || request()->is('sales') || request()->is('time') ? 'active' : '' }}">
                <i class="fa-solid fa-chart-line text-lg"></i>
            </a>
            <hr>


            <div id="tooltip-animation2" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Misc
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <a data-tooltip-target="tooltip-animation2" href="{{ url('/expenses') }}" type="button"
                class="sidebar-link {{ request()->is('expenses') || request()->is('services') || request()->is('products') || request()->is('customers') || request()->is('deductions') ? 'active' : '' }}">
                <i class="fa-solid fa-person-circle-question text-lg"></i>
            </a>
            <hr>


            <div id="tooltip-animation3" role="tooltip"
                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Reports
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>

            <a data-tooltip-target="tooltip-animation3" href="{{ url('/payroll') }}" type="button"
                class="sidebar-link {{ request()->is('payroll') || request()->is('financial') ? 'active' : '' }}">
                <i class="fa-solid fa-coins text-lg"></i>
            </a>
            <hr>
            {{-- <a href="/" class="sidebar-link">
                <i class="fas fa-sign-out-alt text-lg"></i>
            </a> --}}
            <hr>
            <button href="/backup" class="sidebar-link cursor-not-allowed opacity-50">
                <i class="fas fa-database text-lg" disable></i>
            </button>
            <li>
                <!-- Dark Mode Toggle Button -->
            </li>
        </ul>
    </div>
</div>
