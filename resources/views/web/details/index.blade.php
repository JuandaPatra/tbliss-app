@extends('web.layouts.app')

@section('container')

@include('web.components.presentational.header')
<section>

</section>
<div class="header">

    <div class="flex flex-wrap">
        <div class="basis-full order-1 lg:basis-1/2 bg-[#FAF8ED]">
            <div class="container-lg py-11 pl-5 lg:pl-11 pr-5 lg:pr-10  ">
                <div class="w-full lg:w-[80%] bg-blueTbliss p-4 text-white border rounded-[10px] ">
                    <h1 class="font-interRegular text-[15px] mb-2 ml-3">
                        Pilih Destinasi Anda
                    </h1>
                    <div class="flex">
                        <select id="countries" class="bg-gray-50 border border-gray-300 rounded-l-lg text-greyDetTbliss font-interRegular text-[13px]  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Korea</option>
                            <option>Jepang</option>
                            <option>Prancis</option>
                            <option>Norwegia</option>
                        </select>
                        <button class="focus:outline-none  text-white bg-tbliss w-[46px] rounded-r-lg px-2">
                            <img src="{{ asset('images/title/search.png') }}" alt="" class="">
                        </button>
                    </div>
                </div>
                <h1 class="text-[#102448] font-bely text-[40px] mb-4 mt-[40px]">
                    Ijin untuk kami bantu buatkan itinerari dari sini yah Kak :
                </h1>
                <p class="text-[20px] text-[#102448] mb-2">
                    Kota yang ingin dikunjungi :
                </p>
                <!-- <div class="grid grid-flow-col grid-col-4">
                    <button type="button" class="w-[150px] text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Seoul</button>
                    <button type="button" class="w-[150px] text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Busan</button>
                    <button type="button" class="w-[150px] text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeju Island</button>
                    <button type="button" class="w-[150px] text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gyengju</button>
                </div> -->
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Seoul</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Busan</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeju Island</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gyeongju</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Gangneung</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Jeonju</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Incheon</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Suwon</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Chuncheon</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Paju</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Inje</button>
                <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Other</button>
                <!-- <div class="grid grid-cols-1 lg:grid-cols-4 w-[60%] gap-3">
                    <div class="col-span-2">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</button>
                    </div>
                    <div class="col-span-2">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</button>
                    </div>
                    <div class="col-span-2">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</button>
                    </div>
                    <div class="col-span-2">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</button>
                    </div>

                </div> -->
                <h1 class="my-3 text-[#102448] text-[20px] mt-4 mb-3">
                    Aktivitas yang ingin dilakukan
                </h1>
                <div class="w-full lg:w-[100%] mb-8">
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#EnjoyK-pop</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#From the Sea, From the River</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#Flavors of the City</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#convenientTravelServices</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#History / Traditional Tour</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#Only in Korea</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#Healing in Nature</button>
                    <button class="bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium">#Food Trip</button>
                </div>
                <a type="button" class="text-white bg-[#BF1E5F] hover:bg-[#BF1E5F] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">Lihat hasil itinerari kakak
                    <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                </a>
            </div>
        </div>
        <div class="basis-full order-2 lg:order-2 lg:basis-1/2">
            <img src="{{ asset('images/details/korea-top.jpg') }}" alt="" class="w-full h-full">
            <div class="relative z-10">
                <div class="absolute top-[-220px] lg:top-[-190px] left-30 w-full px-4 text-white">
                    <div class="flex justify-end">
                        <div class="w-[88%] lg:w-[70%]">
                            <p class="text-end">
                                #HiddenGemsinKorea
                            </p>
                            <h1 class="text-[30px] font-bely text-end">
                                Bayangin, ketemu hidden gems nongkrong di kedai tua, kecil tapi nice di pinggir kota.
                            </h1>
                            <div class="flex justify-end mt-3">
                                <div class="border-b-4 border-white text-end w-[30%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- <div class="flex ">
        <div class="basis-full">
            <div class="container-lg p-4 pl-10 bg-[#FAF8ED]">
                <h1 class="text-[30px] w-[70%]">
                    Ijin untuk kami bantu buatkan itinerari dari sini yah Kak :
                </h1>
                <p class="mt-4">
                    Kota yang ingin dikunjungi
                </p>

                <div class="flex flex-wrap w-3/4 h-[500px]">
                    <div class="basis-3/12 h-[60px]">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</button>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</button>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <a type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</a>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <a type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</a>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <a type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</a>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <a type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</a>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <a type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</a>
                    </div>
                    <div class="basis-3/12 h-[60px]">
                        <a type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Seoul</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="basis-full max-w-full">
            <img src="{{ asset('images/details/korea-top.jpg') }}" alt="" class="w-full h-[600px]">
        </div>
    </div> -->
    <section class="container-full">
        <div class="flex justify-center">
            <h1 class="text-center w-[80%] lg:w-[35%] text-[30px] pb-10 mt-[71px]">
                Bingung? Gak mau repot? Kakak bisa pilih paket yang sudah tersedia
            </h1>
        </div>
        <div class="flex flex-wrap">
            <div class="basis-full lg:basis-1/2 ">
                <div class="container-lg pl-[10%] lg:pl-[20%]">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Autumn in Korea</h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-3 text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-20 text-end text-[#FF5055] font-bold text-[19px] ">
                            Rp. 12.000.000
                        </span>
                    </div>
                    <div class="text-[18px] pt-3 pb-3">
                        <h1 class="font-bold uppercase">
                            Busan - Pohang - Jeonju - Seoul
                        </h1>
                        <p>Pohang Space Walk</p>
                        <p>Canola Flower Field</p>
                        <p>Haeundae Blue Line Park</p>
                        <p>Overnight Jeonju Hanok Village </p>
                        <p>Picnic Dinner</p>
                        <p>K-drama Shooting Location</p>
                    </div>
                    <div class="flex justify-between w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-1/2 ">
                <img src="{{ asset('images/details/korea-1.jpg') }}" alt="" class="h-[450px] w-full">

            </div>

            <!-- batas antar gambar dan tujuan perjalanan -->

            <div class="basis-1/2">
                <img src="{{ asset('images/details/korea-2.jpg') }}" alt="" class="h-[450px] w-full">
            </div>
            <div class="basis-1/2 bg-[#FAF8ED]">
                <div class="container-lg pl-[20%] ">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Explore Culinary in Korea</h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-3 text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-20 text-end text-[#FF5055] font-bold text-[19px] ">
                            Rp. 12.000.000
                        </span>
                    </div>
                    <div class="text-[18px] pt-3 pb-3">
                        <h1 class="font-bold uppercase">
                            Busan - Pohang - Jeonju - Seoul
                        </h1>
                        <p>Pohang Space Walk</p>
                        <p>Canola Flower Field</p>
                        <p>Haeundae Blue Line Park</p>
                        <p>Overnight Jeonju Hanok Village </p>
                        <p>Picnic Dinner</p>
                        <p>K-drama Shooting Location</p>
                    </div>
                    <div class="flex justify-between w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>

            <!-- batas antar gambar dan tujuan perjalanan -->
            <div class="basis-1/2">
                <div class="container-lg pl-[20%]">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Cultural Walk in Korea</h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-3 text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-20 text-end text-[#FF5055] font-bold text-[19px] ">
                            Rp. 12.000.000
                        </span>
                    </div>
                    <div class="text-[18px] pt-3 pb-3">
                        <h1 class="font-bold uppercase">
                            Busan - Pohang - Jeonju - Seoul
                        </h1>
                        <p>Pohang Space Walk</p>
                        <p>Canola Flower Field</p>
                        <p>Haeundae Blue Line Park</p>
                        <p>Overnight Jeonju Hanok Village </p>
                        <p>Picnic Dinner</p>
                        <p>K-drama Shooting Location</p>
                    </div>
                    <div class="flex justify-between w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="basis-1/2">
                <img src="{{ asset('images/details/korea-3.jpg') }}" alt="" class="h-[450px] w-full">
            </div>

            <!-- batas gambar dan tujuan perjalanan -->
            <div class="basis-1/2">
                <img src="{{ asset('images/details/korea-4.jpg') }}" alt="" class="h-[450px] w-full">
            </div>
            <div class="basis-1/2 bg-[#FAF8ED]">
                <div class="container-lg pl-[20%] ">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Korean 101 Trip </h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-3 text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-20 text-end text-[#FF5055] font-bold text-[19px] ">
                            Rp. 12.000.000
                        </span>
                    </div>
                    <div class="text-[18px] pt-3 pb-3">
                        <h1 class="font-bold uppercase">
                            Busan - Pohang - Jeonju - Seoul
                        </h1>
                        <p>Pohang Space Walk</p>
                        <p>Canola Flower Field</p>
                        <p>Haeundae Blue Line Park</p>
                        <p>Overnight Jeonju Hanok Village </p>
                        <p>Picnic Dinner</p>
                        <p>K-drama Shooting Location</p>
                    </div>
                    <div class="flex justify-between w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-lg pt-[121px]">
        <h1 class="text-[#414141] text-[30px]">
            Yuk, eksplor Destinasi di <span>Korea</span> !
        </h1>
        <div class="flex flex-wrap pt-[54px] destination-slider">
            <div class="basis-full lg:basis-3/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img class="w-full" src="{{ asset('images/details/korea-btm-1.jpg') }}" alt="" />
                    </a>
                    <div class="pt-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Seoul</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">498 options</p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img class="w-full" src="{{ asset('images/details/korea-btm-2.jpg') }}" alt="" />
                    </a>
                    <div class="pt-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Busan</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">490 options</p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img class="w-full" src="{{ asset('images/details/korea-btm-3.jpg') }}" alt="" />
                    </a>
                    <div class="pt-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Jeju-si</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">164 options</p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img class="w-full" src="{{ asset('images/details/korea-btm-4.jpg') }}" alt="" />
                    </a>
                    <div class="pt-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Daegu</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">68 options</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('web.components.presentational.footer')
</div>

@endsection




@push('javascript-internal')
<script>
    $(document).ready(function() {
        $('.banner-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            autoplay: false,
            // autoplaySpeed: 2000,
        });
        $('.banner-slider').not('.slick-initialized').slick();


        // $('.destination-slider').slick({
        //     dots: false,
        //     infinite: true,
        //     slidesToShow: 4,
        //     autoplay: false,
        //     // autoplaySpeed: 2000,
        //     responsive: [{
        //             breakpoint: 1024,
        //             settings: {
        //                 slidesToShow: 4,
        //             }
        //         },
        //         {
        //             breakpoint: 1023,
        //             settings: {
        //                 slidesToShow: 1,
        //                 slidesToScroll: 1
        //             }
        //         },
        //     ]
        // });

        // $('.destination-slider').not('.slick-initialized').slick();

        $('.dropdown-cls').each(function() {
            $(this).on('click', function() {
                $(this).toggleClass('active')
                $(this).siblings().removeClass('active')
                let dataDropdown = $(this).data("drop")
                $('.dropdownMenu').each(function() {
                    $(this).toggleClass('hidden')
                    // $('.dropdownMenu').removeClass('hidden')
                    $(`.${dataDropdown}`).siblings().addClass('hidden')
                })
            })
        })
    });
</script>
@endpush