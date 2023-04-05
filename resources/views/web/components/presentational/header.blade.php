<header>
    <div class="header-top fixed top-0 z-50 w-full">
        <div class="flex flex-wrap bg-[#102448] h-[35px] lg:h-[48px] text-white text-sm ">
            <div class="basis-full lg:basis-3/12">
                <div class="flex flex-wrap ml-0 mt-[3px] justify-center lg:justify-start lg:ml-7 lg:mt-3 pt-[4px] lg:pt-0">
                    <img src="{{ asset('images/header/gift.png') }}" alt="" style="height: 18px;width:18px" class="me-2">
                    <h5>Gift an Adventure</h5>
                </div>
            </div>
            <div class="hidden basis-full lg:basis-6/12 bg-footer lg:flex justify-center">
                <div class="flex justify-items-center mt-1 lg:mt-3 text-center">
                    <h5 class="me-2  text-sm">
                        Boleh kakak kami bantu buat itinerari seru! hubungi kami!
                    </h5>
                    <img src="{{ asset('images/header/whatsapp.png') }}" alt="" style="height: 18px;width:18px">
                </div>
            </div>
            @guest
            <div class="hidden lg:block basis-full lg:basis-3/12 ">
                <div class="ml-0 lg:ml-[40%] mt-[3px] lg:mt-3 flex justify-center lg:justify-start">
                    <span><img src="{{ asset('images/header/login.png') }}" alt="" class="inline mr-1"></span>
                    <a href="{{ route('signin.index') }}" data-modal-target="authentication-modal">Login</a>
                    <span class="mr-5 ml-5">|</span>
                    <a href="{{ route('signup.index') }}">Register</a>
                </div>
            </div>
            @endguest
            @auth

            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="text-whit bg-transparent  font-medium rounded-lg text-sm px-4 py-2.5 text-center hidden lg:inline-flex items-center ml-[5%]  " type="button"><img class="w-7 h-7 rounded-full" src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt="Rounded avatar">
                <span class="p-1">{{Auth::user()->name}}</span></button>
            <!-- Dropdown menu -->
            <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                    <li>
                        <a href="{{route('home.profile')}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> <span class="inline-block mb-[-5px] mr-[5px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-1 align-bottom">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span> Profile</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"> <span class="inline-block mb-[-5px] mr-[10px]">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="27" viewBox="0 0 28 27" fill="none" class="tw-text-black">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.71875 0.649902H19.1813C20.1443 0.649902 20.925 1.43061 20.925 2.39365V5.88115H26.1563C27.1193 5.88115 27.9 6.66186 27.9 7.6249V25.0624C27.9 26.0254 27.1193 26.8062 26.1563 26.8062H1.74375C0.780704 26.8062 0 26.0254 0 25.0624V7.6249C0 6.66186 0.780704 5.88115 1.74375 5.88115H6.975V2.39365C6.975 1.43061 7.7557 0.649902 8.71875 0.649902ZM8.71875 5.88115H19.1813V2.39365H8.71875V5.88115ZM19.1813 7.6249H8.71875H1.74375V25.0624H26.1563V7.6249H19.1813ZM3.80545 14.1701L9.14861 9.6866L12.5112 13.6939L11.0066 17.2329L7.16804 18.1775L3.80545 14.1701ZM7.80582 16.2248L9.74307 15.748L10.4881 13.9957L8.93367 12.1433L6.26209 14.3849L7.80582 16.2248ZM20.0531 21.5749C21.4977 21.5749 22.6688 20.4039 22.6688 18.9593C22.6688 17.5147 21.4977 16.3437 20.0531 16.3437C18.6085 16.3437 17.4375 17.5147 17.4375 18.9593C17.4375 20.4039 18.6085 21.5749 20.0531 21.5749Z" fill="currentColor"></path>
                                </svg>
                            </span> Cart</a>
                    </li>

                    <li class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <span class="inline-block mb-[-5px]"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out mr-1 align-middle">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg></span> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>

            <div class="hidden lg:block basis-full lg:basis-3/12 ">
                <div class="ml-0 lg:ml-[40%] mt-[3px] lg:mt-3 flex justify-center lg:justify-start">
                    <span><img src="{{ asset('images/header/login.png') }}" alt="" class="inline mr-1"></span>
                    @if(Auth::user()->name )
                    <a href="" data-modal-target="authentication-modal">{{Auth::user()->name}}</a>
                    @endif
                    <span class="mr-5 ml-5">|</span>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>

    <div class="container-full mt-[57px] mb-[79px]">
        <div class="d-flex justify-between mr-2 lg:justify-center px-[3px] lg:px-0">
            <button type="button" class="hamburger-menu inline-flex lg:hidden items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 mt-[12px]" aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <a href="/" class="block ">
                <img src="{{ asset('images/title/logo.png') }}" alt="" class="w-[145px] h-[40px] lg:w-[231px] lg:h-[61px]">
            </a>
            @guest
            <a href="{{ route('signin.index') }}" class="block lg:hidden p-2 mt-[12px]">
                <img src="{{ asset('images/header/user_black.png') }}" alt="" class="w-[20px] h-[20px]">
            </a>

            @endguest
            @auth
            <a class="block lg:hidden mt-[12px]" id="dropdownHoverButtonX" data-dropdown-toggle="dropdownHoverX">
                <img class="w-7 h-7 rounded-full" src="https://ui-avatars.com/api/?name={{Auth::user()->name}}" alt="Rounded avatar">
            </a>
            <!-- Dropdown menu -->
            <div id="dropdownHoverX" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButtonX">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cart</a>
                    </li>

                    <li class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>

            @endauth
        </div>
    </div>

    <div class="sidenav fixed z-50 top-0 left-0 w-full h-full bg-greyRgba ">
        <div class="sidenav_inner relative h-full">
            <div class="sidenav__btn absolute top-[4px] right-[12px]">
                <svg stroke="white" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="32px" width="32px" xmlns="http://www.w3.org/2000/svg">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </div>
            <div class="sidenav__content w-[320px] h-full bg-white overflow-y-auto">
                <div class="sidenav__dashboard hidden asia" data-hamburger-open="asia">
                    <div class="pt-3 px-3  cursor-pointer text-sm flex w-[100px] back-dashboard">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                        <h2 class="font-normal">
                            Back
                        </h2>
                    </div>
                    <div class="px-4 py-3 border-gray-300 border-b-2 font-semibold ">
                        Asia
                    </div>
                    <div class="px-4 py-3 ">
                        KOREA
                    </div>
                    <div class="px-4 py-3 ">
                        JEPANG
                    </div>
                    <div class="px-4 py-3 ">
                        HONGKONG
                    </div>
                    <div class="px-4 py-3 ">
                        SINGAPURA
                    </div>
                    <div class="px-4 py-3 ">
                        THAILAND
                    </div>
                </div>
                <div class="sidenav__dashboard hidden eropa" data-hamburger-open="eropa">
                    <div class="pt-3 px-3  cursor-pointer text-sm flex w-[100px] back-dashboard">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" class="mr-2" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                        <h2 class="font-normal">
                            Back
                        </h2>
                    </div>
                    <div class="px-4 py-3 border-gray-300 border-b-2 font-semibold ">
                        Eropa
                    </div>
                    <div class="px-4 py-3 ">
                        SWISS
                    </div>
                    <div class="px-4 py-3 ">
                        PRANCIS
                    </div>
                    <div class="px-4 py-3 ">
                        BELANDA
                    </div>
                    <div class="px-4 py-3 ">
                        NORWEGIA
                    </div>
                </div>
                <div class="sidenav__dashboard all">
                    <div class="sidenav__body pb-[86px]">
                        <div class="sidenav__section">
                            <div class="p-3 ">
                                <h1 class=" font-semibold mb-3">Destinasi</h1>
                                <div class="pl-4 ">
                                    <div class="flex items-center justify-between py-2 cursor-pointer menu-destination" data-hamburger="asia">
                                        <span>Asia</span>
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                    <div class="flex items-center justify-between py-2 cursor-pointer menu-destination" data-hamburger="eropa">
                                        <span>Eropa</span>
                                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg>
                                    </div>
                                </div>

                            </div>
                            <div class=" p-3 border-gray-300  border-t-2 border-b-2 flex items-center ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="tw-mr-1 tw-text-black tw-align-top">
                                    <path d="M20 12v10H4V12M2 7h20v5H2zM12 22V7M12 7H7.5a2.5 2.5 0 010-5C11 2 12 7 12 7zM12 7h4.5a2.5 2.5 0 000-5C13 2 12 7 12 7z"></path>
                                </svg>
                                <a href="" class="ml-3">Gift an Adventure</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="">Bantuan</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="">Korporat</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="{{route('home.cerita')}}">Cerita Kami</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="{{route('home.faq')}}">FAQ</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="{{route('home.kontak')}}">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidenav__footer absolute z-50 bottom-0 left-0 bg-white w-[320px]  border-gray-300  border-t-2 p-3 ">
                        @guest
                        <a href="{{ route('signin.index') }}" class="mr-3">Login</a>
                        <a href="{{ route('signup.index') }}">Register</a>
                        @endguest
                        @auth
                        <a class="" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-lg bg-white mx-auto">
        <div class=" container hidden lg:flex flex-wrap justify-center mb-[33px]">
            <button data-drop="destinasi" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">DESTINASI</button>
            <button data-drop="bantuan" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">BANTUAN</button>
            <button data-drop="korporat" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] ">KORPORAT</button>
            <a href="{{route('home.cerita')}}" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px]">CERITA KAMI</a>
            <a href="{{route('home.faq')}}" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px]">FAQ</a>
            <a href="{{route('home.kontak')}}" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] ">KONTAK KAMI</a>
        </div>
    </div>
    <div>
        <div class="container-full bg-white dropdownMenu destinasi hidden" data-list="destinasi">
            <div class="dropMenu " data-menu="DESTINASI">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{route('search')}}" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full bg-white dropdownMenu bantuan hidden" data-list="bantuan">
            <div class="dropMenu " data-menu="DESTINASI">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Bantuan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Bantuan 1</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Bantuan 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="BANTUAN">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="KORPORAT">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Bantuan</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Bantuan 1</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full bg-white dropdownMenu korporat  hidden" data-list="korporat">
            <div class="dropMenu " data-menu="DESTINASI">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="BANTUAN">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="KORPORAT">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Bantuan</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Bantuan 1</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full bg-white dropdownMenu cerita hidden" data-list="cerita">
            <div class="dropMenu " data-menu="DESTINASI">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="BANTUAN">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="KORPORAT">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Bantuan</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Bantuan 1</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full bg-white dropdownMenu faq hidden" data-list="faq">
            <div class="dropMenu " data-menu="DESTINASI">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="BANTUAN">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="KORPORAT">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Bantuan</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Bantuan 1</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full bg-white dropdownMenu kontak hidden" data-list="kontak">
            <div class="dropMenu " data-menu="DESTINASI">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="BANTUAN">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Asia</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Eropa</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dropMenu hidden" data-menu="KORPORAT">
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16 " aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white mr-16">Bantuan</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm font-interRegular uppercase text-[8px] text-blueTbliss dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white  mr-16">Bantuan 1</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="border-b-2 w-full bg-[#4A5CED]"></div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap justify-start mx-auto text-[14px] pl-[86px] xl:pl-[340px]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Korea</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Jepang</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Hongkong</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Singapura</a>
                            </li>
                            <li>
                                <a href="#" class="block  py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Thailand</a>
                            </li>
                        </ul>
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 mr-16" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Swiss</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Prancis</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Belanda</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white uppercase">Norwegia</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>