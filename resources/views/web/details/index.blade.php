@extends('web.layouts.app')

@section('container')

@include('web.components.presentational.header')
<section>
    <div class="flex flex-wrap flex-col-reverse md:flex-row lg:flex-row">
        <div class="basis-full  lg:basis-1/2 bg-[#FAF8ED]">
            <div class="container-lg py-11 pl-5 lg:pl-11 pr-5 lg:pr-10  ">
                <div class="w-full lg:w-[80%] bg-blueTbliss p-4 text-white border rounded-[10px] ">
                    <h1 class="font-interRegular text-[15px] mb-2 ml-3">
                        Pilih Destinasi Anda
                    </h1>
                    <div class="flex">
                        <select id="countries" class="bg-gray-50 border border-gray-300 rounded-l-lg text-greyDetTbliss font-interRegular text-[13px]  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            @foreach($result as $choice)
                            @foreach($choice->children as $select)
                            <option value="{{$select->id}}">{{$select->title}}</option>
                            @endforeach
                            @endforeach
                            <!-- <option>Korea</option>
                            <option>Jepang</option>
                            <option>Prancis</option>
                            <option>Norwegia</option> -->
                        </select>
                        <button class="focus:outline-none  text-white bg-tbliss w-[46px] rounded-r-lg px-2" id="search-country">
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
                <div class="row-button w-[80%]">
                    <!-- <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Seoul</button>
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
                    <button type="button" class="w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  ">Other</button> -->
                </div>


                <div class="loading-animation text-center">
                    <div role="status">
                        <svg aria-hidden="true" class="inline w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
                
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
                <div class="loading-animation text-center">
                    <div role="status">
                        <svg aria-hidden="true" class="inline w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
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
        <div class="basis-full  lg:basis-1/2">
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

</section>

<div>

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
        <div class="flex flex-wrap flex-col-reverse md:flex-row">
            <div class="basis-full lg:basis-1/2 lg:order-first">
                <div class="container-lg pl-[10%] lg:pl-[20%] mb-[40px] lg:mb-0">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Autumn in Korea</h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
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
                    <div class="flex justify-between w-full lg:w-[90%]">
                        <a href="/detail-trip" type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex pt-[11px] lg:pt-0">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-1/2 lg:order-last">
                <img src="{{ asset('images/details/korea-1.jpg') }}" alt="" class="h-[450px] w-full object-cover">
            </div>
        </div>
        <div class="flex flex-wrap">
            <!-- batas antar gambar dan tujuan perjalanan -->
            <div class="basis-full lg:basis-1/2">
                <img src="{{ asset('images/details/korea-2.jpg') }}" alt="" class="h-[450px] w-full object-cover">
            </div>
            <div class="basis-full lg:basis-1/2 bg-[#FAF8ED]">
                <div class="container-lg pl-[10%]  lg:pl-[20%] mb-[40px] lg:mb-0 ">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Explore Culinary in Korea</h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
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
                    <div class="flex justify-between w-full lg:w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex pt-[11px] lg:pt-0">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap flex-col-reverse md:flex-row">
            <!-- batas antar gambar dan tujuan perjalanan -->
            <div class="basis-full lg:basis-1/2">
                <div class="container-lg pl-[10%] lg:pl-[20%] mb-[40px] lg:mb-0">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Cultural Walk in Korea</h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
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
                    <div class="flex justify-between w-full lg:w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex pt-[11px] lg:pt-0">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-5">
                        </div>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-1/2">
                <img src="{{ asset('images/details/korea-3.jpg') }}" alt="" class="h-[450px] w-full object-cover">
            </div>

        </div>
        <div class="flex flex-wrap">
            <!-- batas gambar dan tujuan perjalanan -->
            <div class="basis-full lg:basis-1/2 ">
                <img src="{{ asset('images/details/korea-4.jpg') }}" alt="" class="h-[450px] w-full object-cover">
            </div>
            <div class="basis-full lg:basis-1/2 bg-[#FAF8ED]">
                <div class="container-lg pl-[10%] lg:pl-[20%] mb-[40px] lg:mb-0 ">
                    <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Korean 101 Trip </h1>
                    <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                        <div>
                            <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                6H5M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                23 - 28 APR 2023
                            </span>
                        </div>
                        <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
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
                    <div class="flex justify-between w-full lg:w-[90%]">
                        <a type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                            <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                        </a>
                        <div class="flex pt-[11px] lg:pt-0">
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

    <!-- <section class="container-lg pt-[121px]">
        <h1 class="text-[#414141] text-[30px]">
            Yuk, eksplor Destinasi di <span>Korea</span> !
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 pt-[54px] destination-slider">
            <div>
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
            <div>
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
            <div>
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
            <div>
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
    </section> -->
    @include('web.components.presentational.login')
    @include('web.components.presentational.whatsapp')
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

        const options = {
            mobileFirst: true,
            responsive: [{
                breakpoint: 450,
                settings: "unslick"
            }]
        };

        var slicky = $('.destination-slider');
        slicky.slick(options);

        $(window).resize(function() {

            setTimeout(function() {

                if ($(window).width() < 450 && !slicky.hasClass("slick-initialized")) {
                    slicky.slick(options);
                }
            }, 100);
        });

        // $('.destination-slider').not('.slick-initialized').slick();

    });
</script>
@endpush