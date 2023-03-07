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
            <div class="hidden lg:block basis-full lg:basis-3/12 ">
                <div class="ml-0 lg:ml-[40%] mt-[3px] lg:mt-3 flex justify-center lg:justify-start">
                    <span><img src="{{ asset('images/header/login.png') }}" alt="" class="inline mr-1"></span>
                    <a href="{{ route('login') }}" data-modal-target="authentication-modal">Login</a>
                    <span class="mr-5 ml-5">|</span>
                    <a href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-full mt-[57px] mb-[79px]">
        <div class="d-flex justify-between lg:justify-center px-[3px] lg:px-0">
            <button  type="button" class="hamburger-menu inline-flex lg:hidden items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 mt-[12px]" aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <a href="/" class="block ">
                <img src="{{ asset('images/title/logo.png') }}" alt="" class="w-[145px] h-[40px] lg:w-[231px] lg:h-[61px]">
            </a>
            <a   data-modal-toggle="authentication-modal" class="block lg:hidden p-2 mt-[12px]">
                <img src="{{ asset('images/header/user_black.png') }}" alt="" class="w-[20px] h-[20px]">
            </a>
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
                                    <div class="flex items-center justify-between py-2 cursor-pointer menu-destination"
                                    data-hamburger="eropa">
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
                                <a href="">Cerita Kami</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="">FAQ</a>
                            </div>
                            <div class=" p-3 flex items-center ">
                                <a href="">Kontak Kami</a>
                            </div>
                        </div>
                    </div>
                    <div class="sidenav__footer absolute z-50 bottom-0 left-0 bg-white w-[320px]  border-gray-300  border-t-2 p-3 ">
                        <a href="" class="mr-3">Login</a>
                        <a href="">Register</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container-lg bg-white mx-auto">
        <div class=" container hidden lg:flex flex-wrap justify-center mb-[33px]">
            <button data-drop="destinasi" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">DESTINASI</button>
            <button data-drop="bantuan" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">BANTUAN</button>
            <button data-drop="korporat" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">KORPORAT</button>
            <button data-drop="cerita" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">CERITA KAMI</button>
            <button data-drop="faq" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">FAQ</button>
            <button data-drop="kontak" class="mr-[10px] lg:mr-16  text-[11px] lg:text-[15px] dropdown-cls">KONTAK KAMI</button>
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