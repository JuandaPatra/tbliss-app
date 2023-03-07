@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="header">
    <img src="{{ asset('images/detailtrip/top-full.jpg') }}" alt="" class="w-full">
</div>

<section class="container-lg ">
    <div class="flex flex-col lg:flex-row justify-between mt-[42px]">
        <div class="w-full lg:w-1/2">
            <h1 class="text-[15px] lg:text-[18px]">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed enim mi. Nam posuere vel massa ac ultricies. Nullam sodales diam vitae libero pharetra, in mattis neque iaculis. Vestibulum vitae scelerisque est. Etiam consequat auctor sagittis. Nam eu mi ac justo suscipit interdum at maximus metus. Pellentesque pretium mi ipsum, eu congue diam vestibulum ac.
            </h1>
        </div>
        <div class="flex flex-row lg:flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl mt-[30px] lg:mt-0  ">
            <div class="flex flex-col justify-start px-4 py-1 leading-normal border-l-2 border-gray-200 w-1/2 mt-[-55px]">
                <div class="flex">
                    <span class="font-bold text-[30px] inline-block">5.0</span>
                    <span class="mx-2 block mt-[20px]">/</span>
                    <span class="block mt-[20px]">5</span>
                </div>
                <div class="flex ">
                    <p>639</p>
                    <p class="ml-2">reviews</p>
                </div>
                <div>
                    <svg aria-hidden="true" class="w-5 h-5 text-[#5ec4dc] inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>First star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-[#5ec4dc] inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Second star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-[#5ec4dc] inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Third star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-[#5ec4dc] inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Third star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    <svg aria-hidden="true" class="w-5 h-5 text-[#5ec4dc] inline" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Fourth star</title>
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </div>
            </div>

            <div class="flex flex-col justify-between p-4 leading-normal border-l-2 border-gray-200">
                <div class="flex justify-between">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">What Guests Say</h5>
                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"We came here in April 2018. We had the most wonderful time. Great accomodation,.."</p>
                <p class="mb-3 font-normal text-gray-700">Travelswithlola, United Kingdom</p>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap mt-20 border-b-4 border-gray-200 pb-4">
        <div class="basis-full lg:basis-1/2">
            <h3 class="text-[18px] text-[#414141]">
                {{$detailTrip->description}}
            </h3>

            <h1 class="text-[#102448] text-[40px] font-bely">
                {{$detailTrip->title}}
            </h1>

            <p class="text-[#4A5CED] text-[20px] mt-2">
                23 -28 APR 2023
            </p>

            <p class="text-[#BF1E5F] text-[20px] mt-2">
                Harga
                @currency($detailTrip->price)
                / pax
            </p>

            <div class="text-[18px] pt-3 pb-3">
                <h1 class="font-bold uppercase">
                    @foreach($detailTrip->place_trip_categories_cities as $city)
                    {{$city->place_categories->title}}
                    @endforeach
                    <!-- Busan - Pohang - Jeonju - Seoul -->
                </h1>
                {!! $detailTrip->itinerary !!}
                <!-- <p>Pohang Space Walk</p>
                <p>Canola Flower Field</p>
                <p>Haeundae Blue Line Park</p>
                <p>Overnight Jeonju Hanok Village </p>
                <p>Picnic Dinner</p>
                <p>K-drama Shooting Location</p> -->
            </div>

            <div class="flex mb-3">
                <img src="{{ asset('images/detailtrip/itin.png') }}" alt="" class="inline w-[34px] h-[34px] mr-3">
                <a href="{{$detailTrip->link_g_drive}}" class="underline text-blue-500">Unduh detail itinerary</a>
            </div>

            <ul class="list-inside list-disc">
                <li>
                    Harga untuk Dewasa & Anak2 (1 Kamar ber-2)
                </li>
                <li>
                    Jika berusia 60 tahun keatas wajib ada pendamping
                </li>
            </ul>



        </div>
        <div class="basis-full lg:basis-1/2">
            <div class="flex flex-col items-center mt-[22px] lg:mt-">
                <div class="flex justify-between w-1/2 border-b-4 pb-4 mb-5">
                    <img src="{{ asset('images/detailtrip/cov.png') }}" alt="" class=" inline-block h-[42px] w-[42px]">
                    <div class="ml-5">
                        <h1 class="text-[#414141] text-[18px] font-bold mb-1">
                            Kebijakan Covid19
                        </h1>
                        <p class="text-[16px] mb-3">
                            Kakak wajib sudah vaksin lengkap + booster.
                        </p>

                        <a href="" class="underline text-blue-500 ">Pelajari detail</a>
                    </div>

                </div>
                <div class="flex justify-between w-1/2 border-b-4 pb-4 mb-5">
                    <img src="{{ asset('images/detailtrip/kebijakan.png') }}" alt="" class=" inline-block h-[42px] w-[42px]">
                    <div class="ml-5">
                        <h1 class="text-[#414141] text-[18px] font-bold mb-1">
                            Kebijakan Pembatalan
                        </h1>
                        <p class="text-[16px] mb-3">
                            Kakak wajib sudah vaksin lengkap + booster.
                        </p>

                        <a href="" class="underline text-blue-500 ">Pelajari detail</a>
                    </div>

                </div>
                <div class="flex justify-between w-1/2 border-b-4 pb-4 mb-5">
                    <img src="{{ asset('images/detailtrip/visa.png') }}" alt="" class=" inline-block h-[50px] w-[50px]">
                    <div class="ml-5">
                        <h1 class="text-[#414141] text-[18px] font-bold mb-1">
                            Syarat Penting
                        </h1>
                        <p class="text-[16px] mb-3">
                            Seputar visa, tiket pesawat dan lainny
                        </p>
                        <a href="" class="underline text-blue-500 ">Pelajari detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="basis-full lg:basis-1/2">
            <h3 class="mb-4 text-[28px]">
                Sudah termasuk
            </h3>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/hotel-btm.png') }}" alt="" class="mr-12 inline"> Hotel *3 (1 kamar berdua)</span>
            </div>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/tiket-btm.png') }}" alt="" class="mr-12 inline"> Singapore airlines, Cathay Pacific atau sejenisnya</span>
            </div>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/transport-btm.png') }}" alt="" class="mr-12 inline"> Private van + public transport</span>
            </div>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/foto-btm.png') }}" alt="" class="mr-12 inline"> Dokumentasi perjalanan</span>
            </div>

        </div>
        <div class="basis-full lg:basis-1/2">
            <h3 class="mb-4 text-[28px]">
                Tidak termasuk
            </h3>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/visa-btm.png') }}" alt="" class="mr-12 inline"> Visa Korea single entry (Rp. 1.200.000)</span>
            </div>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/meal-btm.png') }}" alt="" class="mr-12 inline"> Estimasi makan 10.000 - 15.000 Won</span>
            </div>
            <div class="mb-3">
                <span><img src="{{ asset('images/detailtrip/asuransi-btm.png') }}" alt="" class="mr-12 inline"> Asuransi perjalanan (500.000/orang)</span>
            </div>

        </div>
    </div>
</section>

<section class="container-full">
    <div class="container-lg mt-[27px] mb-[54px]">
        <h1 class="text-[28px]">
            Highlight Trip
        </h1>
    </div>


    @foreach($detailTrip->place_trip_categories_cities as $city)
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-2 mb-[50px]">
        <div class="col-span-1"></div>
        <div class="col-span-2">
            <div class="ml-[70px] mt-[60px]">
                <img src="{{ asset('images/detailtrip/busan-map.png') }}" alt="">
                <h1 class="mt-4 uppercase font-bold text-[16px]">{{$city->place_categories->title}}</h1>
            </div>
        </div>
        <div class="col-span-9">
            <ul class="city-slider-{{$city->place_categories->id}}">
                @foreach($city->pick_hidden_gem as $hidden_gem)
                <li>
                    <img src="{{$hidden_gem->hidden_gems->image_desktop}}" alt="" class="w-[98%]">
                </li>
                <!-- <li>
                    <img src="{{ asset('images/detailtrip/busan-2.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/busan-3.jpg') }}" alt="" class="w-[98%]">
                </li> -->
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach

    <!-- <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-2 mb-[50px]">
        <div class="col-span-1"></div>
        <div class="col-span-2">
            <div class="ml-[70px] mt-[60px]">
                <img src="{{ asset('images/detailtrip/busan-map.png') }}" alt="">
                <h1 class="mt-4 uppercase font-bold text-[16px]">Busan</h1>
            </div>
        </div>
        <div class="col-span-9">
            <ul class="city-slider-0">
                <li>
                    <img src="{{ asset('images/detailtrip/busan-1.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/busan-2.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/busan-3.jpg') }}" alt="" class="w-[98%]">
                </li>
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-2 mb-[50px]">
        <div class="col-span-1"></div>
        <div class="col-span-2">
            <div class="ml-[70px] mt-[60px] ">
                <img src="{{ asset('images/detailtrip/pohang-map.png') }}" alt="">
                <h1 class="mt-4 uppercase font-bold text-[16px]">Pohang</h1>
            </div>
        </div>
        <div class="col-span-9">
            <ul class="city-slider-1">
                <li>
                    <img src="{{ asset('images/detailtrip/pohang-1.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/pohang-2.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/pohang-3.jpg') }}" alt="" class="w-[98%]">
                </li>
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-2 mb-[50px]">
        <div class="col-span-1"></div>
        <div class="col-span-2">
            <div class="ml-[70px] mt-[60px]">
                <img src="{{ asset('images/detailtrip/jeounju-map.png') }}" alt="">
                <h1 class="mt-4 uppercase font-bold text-[16px]">Jeounju</h1>
            </div>
        </div>
        <div class="col-span-9">
            <ul class="city-slider-2">
                <li>
                    <img src="{{ asset('images/detailtrip/jeounju-1.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/jeounju-2.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/jeounju-3.jpg') }}" alt="" class="w-[98%]">
                </li>
            </ul>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-2 mb-[50px]">
        <div class="col-span-1"></div>
        <div class="col-span-2">
            <div class="ml-[70px] mt-[60px]">
                <img src="{{ asset('images/detailtrip/seoul-map.png') }}" alt="">
                <h1 class="mt-4 uppercase font-bold text-[16px]">Seoul</h1>
            </div>
        </div>
        <div class="col-span-9">
            <ul class="city-slider-3">
                <li>
                    <img src="{{ asset('images/detailtrip/seoul-1.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/seoul-2.jpg') }}" alt="" class="w-[98%]">
                </li>
                <li>
                    <img src="{{ asset('images/detailtrip/seoul-3.jpg') }}" alt="" class="w-[98%]">
                </li>
            </ul>
        </div>
    </div> -->

</section>

<section>
    <div class="container-lg pb-[164px]">
        <h1 class="text-[30px]">
            Eksplor Trip Lainnya
        </h1>
        <div class="flex flex-wrap hg-slider">
            @foreach($otherTrips as $trip)
            <div class="basis-full lg:basis-4/12 px-0 py-3 lg:p-3">
                <div class="max-w-md lg:max-w-sm bg-white ">
                    <a href="{{route('home.detail' ,['id'=>encrypt($id),'trip'=>encrypt($trip->id)])}}">
                        <img src="{{$trip->thumbnail}}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                {{$trip->seat}} seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">{{$trip->title}}</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                            {{$trip->day}} H {{$trip->night}} M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-[#FF5055] font-bold text-[19px]">
                            @currency($trip->price)
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
            <!-- <div class="basis-full lg:basis-4/12 px-0 py-3 lg:p-3">
                <div class="max-w-md lg:max-w-sm bg-white ">
                    <a href="#">
                        <img src="{{ asset('images/trip/trip-0.jpg') }}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Culinary Trip in Korea</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                            6H5M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-[#FF5055] font-bold text-[19px]">
                            Rp. 9.500.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-4/12 px-0 py-3 lg:p-3">
                <div class="max-w-md lg:max-w-sm bg-white ">
                    <a href="#">
                        <img src="{{ asset('images/trip/trip-1.jpg') }}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Cultural Walk in Korea</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                            6H5M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-[#FF5055] font-bold text-[19px]">
                            Rp. 9.500.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-4/12 px-0 py-3 lg:p-3">
                <div class="max-w-md lg:max-w-sm bg-white ">
                    <a href="#">
                        <img src="{{ asset('images/trip/trip-2.jpg') }}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-[#4A5CED] mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">Korea 101 Trip</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-bold text-[22px] mr-5">
                            6H5M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-[#FF5055] font-bold text-[19px]">
                            Rp. 9.500.000
                        </p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>


@include('web.components.presentational.footer')

<!-- <div class="bg-[#ff5055] h-[73px] w-full text-white fixed  bottom-0 z-20 ">
    <div class="container-lg py-1 lg:pb-0 ">
        <div class="flex flex-wrap justify-between ">
            <div class="basis-full lg:basis-1/2 pt-2  mb-[20px] lg:mb-[20] mt-0 lg:mt-[100px]">
                <span class="font-bold font-interRegular text-[14px]">
                    Harga Rp.<span>12.000.000</span> / pax
                </span>
                <span class=" ml-4 font-interRegular text-[14px]">
                    Open Trip 6 Hari 5 Malam
                </span>
            </div>
            <div class="basis-full lg:basis-1/2 text-[15px]">
                <button type="button" class="text-white bg-transparent border hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tanya Kami <span class="ml-2"><img src="{{ asset('images/header/whatsapp.png') }}" alt="" class="h-[20px] w-[20px] inline"></span></button>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Pesan Sekarang <span class="ml-2"><img src="{{ asset('images/detailtrip/arrow.png') }}" alt="" class="h-[10px] w-[15px] inline"></span></button>
            </div>
        </div>
    </div>
</div> -->
<div class="bg-[#ff5055]  lg:h-[73px] w-full text-white fixed  bottom-0 z-20 ">
    <div class="container-lg pt-3 pb-3 lg:pb-0">
        <div class="flex flex-wrap justify-between">
            <div class="basis-full lg:basis-1/2 pt-2 mb-[30px] lg:mb-0">
                <span class="font-bold font-interRegular text-[14px]">
                    Harga Rp.<span>12.000.000</span> / pax
                </span>
                <span class=" ml-4 font-interRegular text-[14px]">
                    Open Trip 6 Hari 5 Malam
                </span>
            </div>
            <div class="basis-full lg:basis-1/2 text-[15px]">
                <button type="button" class="text-white bg-transparent border hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tanya Kami <span class="ml-2"><img src="{{ asset('images/header/whatsapp.png') }}" alt="" class="h-[20px] w-[20px] inline"></span></button>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Pesan Sekarang <span class="ml-2"><img src="{{ asset('images/detailtrip/arrow.png') }}" alt="" class="h-[10px] w-[15px] inline"></span></button>
            </div>
        </div>
    </div>
</div>


</div>



@endsection
@push('javascript-internal')
<script>
    $(document).ready(function() {

        let allSlider = ('.city-slider').length;
        console.log(allSlider)

        $('.city-slider-0').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-0').not('.slick-initialized').slick();

        $('.city-slider-1').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-1').not('.slick-initialized').slick();

        $('.city-slider-2').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-2').not('.slick-initialized').slick();

        $('.city-slider-3').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-3').not('.slick-initialized').slick();

        $('.city-slider-7').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-7').not('.slick-initialized').slick();

        $('.city-slider-9').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-9').not('.slick-initialized').slick();


        $('.city-slider-13').slick({
            dots: false,
            infinite: false,
            slidesToShow: 2.5,
        });
        $('.city-slider-13').not('.slick-initialized').slick();


        const options = {
            mobileFirst: true,
            responsive: [{
                breakpoint: 450,
                settings: "unslick"
            }]
        };
        // $('.hg-slider').not('.slick-initialized').slick();
        var slicky = $('.hg-slider');
        slicky.slick(options);

        $(window).resize(function() {

            setTimeout(function() {

                if ($(window).width() < 450 && !slicky.hasClass("slick-initialized")) {
                    slicky.slick(options);
                }
            }, 100);
        });




    });
</script>
@endpush