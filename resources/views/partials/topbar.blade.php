<div style="margin-top: -30px">
    <nav class="bg-white border-gray-200 dark:bg-gray-900" style="border-bottom: solid 1px lightgray">
        <div class="max-w-screen-xl flex flex-wrap justify-between mx-auto p-4">
            <div class="flex">

                <img src="{{ asset('img/image_2023-09-30_134347490-removebg-preview.png') }}" height="100" width="100" srcset="">
                <span class="self-center text-4xl font-bold whitespace-nowrap dark:text-white">Sales Management
                    App</span>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="mr-5">

                    <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                        <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                        </svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd" clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    
                </div>

                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                    data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer"
                    src="{{ asset('img/dog.jpg') }}" alt="User dropdown">

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
