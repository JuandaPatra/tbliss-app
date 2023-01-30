<header>
    <div class="flex flex-wrap bg-[#102448] h-[100px] lg:h-[48px] text-white text-sm ">
        <div class="basis-full lg:basis-3/12">
            <div class="flex flex-wrap ml-0 mt-[3px] justify-center lg:justify-start lg:ml-7 lg:mt-3">
                <img src="{{ asset('images/header/gift.png') }}" alt="" style="height: 18px;width:18px" class="me-2">
                <h5>Gift an Adventure</h5>
            </div>
        </div>
        <div class="basis-full lg:basis-6/12 bg-footer flex justify-center">
            <div class="flex justify-items-center mt-3 text-center">
                <h5 class="me-2  text-sm">
                    Boleh kakak kami bantu buat itinerari seru! hubungi kami!
                </h5>
                <img src="{{ asset('images/header/whatsapp.png') }}" alt="" style="height: 18px;width:18px">
            </div>
        </div>
        <div class="basis-full lg:basis-3/12 ">
            <div class="ml-0 lg:ml-[40%] mt-[3px] lg:mt-3 flex justify-center lg:justify-start">
                <span><img src="{{ asset('images/header/login.png') }}" alt="" class="inline mr-1"></span>
                <a href="/login">Login</a>
                <span class="mr-5 ml-5">|</span>
                <a href="/register">Register</a>
            </div>
        </div>
    </div>
    <div class="container-full mt-[57px] mb-[79px]">
        <div class="d-flex justify-content-center">
            <a href="/" class="block">
                <img src="{{ asset('images/title/logo.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="container-lg bg-white mx-auto">
        <div class=" container flex flex-wrap justify-center mb-[33px]">
            <button data-drop="destinasi" class="mr-16 dropdown-cls">DESTINASI</button>
            <button data-drop="bantuan" class="mr-16 dropdown-cls">BANTUAN</button>
            <button data-drop="korporat" class="mr-16 dropdown-cls">KORPORAT</button>
            <button data-drop="cerita" class="mr-16 dropdown-cls">CERITA KAMI</button>
            <button data-drop="faq" class="mr-16 dropdown-cls">FAQ</button>
            <button data-drop="kontak" class="mr-16 dropdown-cls">KONTAK KAMI</button>
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