<div style="margin-top: -30px">
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-4">
            <div class="flex">

                <img src="{{ asset('img/logo.png') }}" height="100" width="100" srcset="">
                <span class="self-center text-4xl font-bold whitespace-nowrap dark:text-white">Sales Management
                    App</span>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">

                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                    src="{{asset('img/logo.png') }}" alt="User dropdown">

                <!-- Dropdown menu -->
                <div id="userDropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    {{-- <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                        <div>Experimental Feature: </div>
                    </div> --}}
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                     
                      <a href="/" class="sidebar-link">
                        <i class="fas fa-sign-out-alt text-lg">Sign Out</i>
                    </a>
                    </ul>
                   
                </div>


            </div>
        </div>
    </nav>

</div>
