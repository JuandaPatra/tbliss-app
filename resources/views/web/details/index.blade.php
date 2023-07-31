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
                            <!-- <option value="">Pilih Negara</option> -->

                            @foreach($result as $choice)
                            @foreach($choice->children as $select)
                            <option value="{{$select->id}}">{{$select->title}}</option>
                            @endforeach
                            @endforeach

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

                <div class="row-button w-[80%]">
                    @foreach($cityArray as $city)
                    <button type="button" id="city-{{$city->id}}" value="{{$city->id}}" class="cityX w-[115px] lg:w-[150px] text-gray-900 bg-transparent border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-full text-sm px-1 py-2.5 mr-0 mb-2  " data-pickCity="{{$city->id}}">{{$city->title}}</button>
                    @endforeach
                </div>



                <h1 class="my-3 text-[#102448] text-[20px] mt-4 mb-3">
                    Aktivitas yang ingin dilakukan
                </h1>

                <div class="hashtag-row w-full lg:w-[100%] mb-8">
                    @foreach($hashtags as $hashtag)
                    <button class="hashtagX bg-transparent border border-gray-300 rounded-full px-3 py-3 mr-2 my-1 text-gray-900 text-sm font-medium" data-hashtag="{{$hashtag->id}}">{{$hashtag->title}}</button>
                    @endforeach

                </div>
                <a type="button" class="text-white bg-[#BF1E5F] hover:bg-[#BF1E5F] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2" id="searchTrip">Lihat hasil itinerari kakak
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


    <section class="container-full">
        <div class="flex justify-center">
            <h1 class="text-center w-[80%] lg:w-[35%] text-[30px] pb-10 mt-[71px]">
                Bingung? Gak mau repot? Kakak bisa pilih paket yang sudah tersedia
            </h1>
        </div>
        <div class="trip-search">
            @foreach($trips as $trip)
            @if($loop->iteration % 2 == 0)
            <div class="flex flex-wrap flex-col-reverse md:flex-row">
                <div class="basis-full lg:basis-1/2 lg:order-first">
                    <div class="container-lg pl-[10%] lg:pl-[20%] mb-[40px] lg:mb-0">
                        <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">{{$trip->title}}</h1>
                        <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                            <div>
                                <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                    {{$trip->day}}H{{$trip->night}}M
                                </span>
                                <span>
                                    |
                                </span>
                                <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                    {{ date('d', strtotime($trip->date_from)) }} - {{ date('d M Y', strtotime($trip->date_to)) }}
                                </span>
                            </div>
                            <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
                                @currency($trip->price)
                            </span>
                        </div>
                        <div class="text-[18px] pt-3 pb-3">
                            <h1 class="font-bold uppercase">
                                @foreach($trip->place_trip_categories_cities as $index => $city)
                                @if($trip->place_trip_categories_cities->count() == 1)
                                {{$city->place_categories->title}}

                                @else
                                @if($index == 0)
                                {{$city->place_categories->title}} -
                                @elseif($loop->count == $index+1)
                                {{$city->place_categories->title}}
                                @else
                                {{$city->place_categories->title}} -
                                @endif
                                @endif
                                @endforeach
                            </h1>


                            
                            <div class="h-[180px]">
                                @foreach($trip->place_trip_categories_cities[0]->pick_hidden_gem as $hidden_gem)
                                <p>
                                    {{$hidden_gem->hidden_gems->title}}
                                </p>
                                @endforeach
                            </div>


                        </div>
                        <div class="flex justify-between w-full lg:w-[90%]">
                            <a href="{{route('home.detail' ,['id'=>'korea','trip'=>$trip->slug])}}" type="button" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                                <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                            </a>
                            <div class="flex pt-[11px] lg:pt-[15px]">
                                <h5 class="text-[#4A5CED] mr-3 text-[12px]">
                                    {{$trip->seat}} seats left
                                </h5>
                                <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-[12px]">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="basis-full lg:basis-1/2 lg:order-last">
                    <img src="{{ asset('images/details/korea-1.jpg') }}" alt="" class="h-[450px] w-full object-cover">
                </div>
            </div>
            @else
            <div class="flex flex-wrap">
                <!-- batas antar gambar dan tujuan perjalanan -->
                <div class="basis-full lg:basis-1/2">
                    <img src="{{ asset('images/details/korea-2.jpg') }}" alt="" class="h-[450px] w-full object-cover">
                </div>
                <div class="basis-full lg:basis-1/2 bg-[#FAF8ED]">
                    <div class="container-lg pl-[10%]  lg:pl-[20%] mb-[40px] lg:mb-0 ">
                        <h1 class="mb-2 pt-10 text-2xl font-bold tracking-tight text-[#414141] text-[28px]">{{$trip->title}}</h1>
                        <div class="flex justify-between  border-b-2 border-gray-200 w-[90%] pb-2">
                            <div>
                                <span class="text-[#6A6A6A] font-bold text-[14px] lg:text-[22px] mr-2 lg:mr-5">
                                    {{$trip->day}}H{{$trip->night}}M
                                </span>
                                <span>
                                    |
                                </span>
                                <span class="ml-1 lg:ml-3 text-[14px] lg:text-[16px]">
                                    {{ date('d', strtotime($trip->date_from)) }} - {{ date('d M Y', strtotime($trip->date_to)) }}
                                </span>
                            </div>
                            <span class="ml-5 lg:ml-20 text-end text-[#FF5055] font-bold text-[14px] lg:text-[19px] ">
                                @currency($trip->price)
                            </span>
                        </div>
                        <div class="text-[18px] pt-3 pb-3">
                            <h1 class="font-bold uppercase">
                                @foreach($trip->place_trip_categories_cities as $index => $city)
                                @if($trip->place_trip_categories_cities->count() == 1)
                                {{$city->place_categories->title}}

                                @else
                                @if($index == 0)
                                {{$city->place_categories->title}} -
                                @elseif($loop->count == $index+1)
                                {{$city->place_categories->title}}
                                @else
                                {{$city->place_categories->title}} -
                                @endif
                                @endif
                                @endforeach
                            </h1>


                            <div class="h-[180px]">
                                @foreach($trip->place_trip_categories_cities[0]->pick_hidden_gem as $hidden_gem)
                                <p>
                                    {{$hidden_gem->hidden_gems->title}}
                                </p>
                                @endforeach
                            </div>


                        </div>
                        <div class="flex justify-between w-full lg:w-[90%]">
                            <a href="{{route('home.detail' ,['id'=>'korea','trip'=>$trip->slug])}}" class="text-white bg-[#FF5055] hover:bg-[#FF5055] focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-2 lg:px-5 py-2.5 text-center mr-2 mb-2 w-[210px]">Pesan Sekarang
                                <img src="{{ asset('images/details/arrow.png') }}" alt="" class="h-[10px] w-[10px] inline-block ">
                            </a>
                            <div class="flex pt-[11px] lg:pt-[15px]">
                                <h5 class="text-[#4A5CED] mr-3 text-[12px]">
                                    {{$trip->seat}} seats left
                                </h5>
                                <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-[12px]">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            @endif
            @endforeach



        </div>
    </section>


    <section class="container-lg pt-[121px]">
        <h1 class="text-[#414141] text-[30px]">
            Yuk, eksplor Destinasi di <span>Korea</span> !
        </h1>
        <div class="flex flex-wrap pt-[54px] destination-slider">
            @foreach($tripByCity as $trip)
            <div class="basis-full lg:basis-3/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <!-- <img class="w-full" src="{{ asset('images/details/korea-btm-1.jpg') }}" alt="" /> -->
                        <img class="w-full" src="{{$trip->place_categories->images2}}" alt="" />
                    </a>
                    <div class="pt-4">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$trip->place_categories->title}}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$trip->user_count}} options</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </section>

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

        // $(".cityX").each(function (e) {
        //     console.log($(e))
        //     $(this).on("click", function (e) {
        //         let id = $(e.target).attr("pickCity");
        //         // $(this).addClass('bg-red')
        //         console.log(id);
        //     });
        // });

    });
</script>
@endpush