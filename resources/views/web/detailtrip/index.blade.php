@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="header">
    <!-- <img src="{{ asset('images/detailtrip/top-full.jpg') }}" alt="" class="w-full"> -->
    <picture>
        <source media="(min-width:1000px)" srcset="{{$detailTrip->banner}}">
        <source media="(min-width:320px)" srcset="{{$detailTrip->banner}}">
        <img src="{{$detailTrip->banner}}" alt="Flowers" class="w-full">
    </picture>
</div>

<section class="container-lg ">
    <div class="flex flex-col lg:flex-row justify-between mt-[42px]">
        <div class="w-full lg:w-1/2">
            <h1 class="text-[15px] lg:text-[18px]">
                {{$detailTrip->description}}
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
    <div class="flex flex-wrap mt-20 pb-4">
        <div class="basis-full lg:basis-1/2">
            <h3 class="text-[18px] text-[#414141]">
                {{$detailTrip->description}}
            </h3>

            <h1 class="text-[#102448] text-[40px] font-bely">
                {{$detailTrip->title}}
            </h1>

            <p class="text-[#4A5CED] text-[20px] mt-2">
                {{ date('d', strtotime($detailTrip->date_from)) }} - {{ date('d M Y', strtotime($detailTrip->date_to)) }}
            </p>

            <p class="text-[#BF1E5F] text-[20px] mt-2">
                Harga
                @currency($detailTrip->price)
                / pax
            </p>

            <div class="text-[18px] pt-3 pb-3">
                <h1 class="font-bold uppercase">
                    @foreach($detailTrip->place_trip_categories_cities as $index => $city)

                    @if($index == 0)
                    {{$city->place_categories->title}} -
                    @elseif($loop->count == $index+1)
                    {{$city->place_categories->title}}
                    @else
                    {{$city->place_categories->title}} -
                    @endif
                    @endforeach
                </h1>
                {!! $detailTrip->itinerary !!}
            </div>

            <div class="flex mb-3">
                <img src="{{ asset('images/detailtrip/itin.png') }}" alt="" class="inline w-[34px] h-[34px] mr-3">
                <a href="{{$detailTrip->link_g_drive}}" target="_blank" class="underline text-blue-500">Unduh detail itinerary</a>
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
                    <img src="{{ asset('images/detailtrip/kebijakan.png') }}" alt="" class=" inline-block h-[42px] w-[42px]">
                    <div class="ml-5">
                        <h1 class="text-[#414141] text-[18px] font-bold mb-1">
                            Kebijakan Pembatalan
                        </h1>
                        <p class="text-[16px] mb-3">
                            Kakak wajib sudah vaksin lengkap + booster.
                        </p>

                        <a href="/visa-policy" target="_blank" class="underline text-blue-500 ">Pelajari detail</a>
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
                        <a href="/teskirimpdf" target="_blank" class="underline text-blue-500 ">Pelajari detail</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="container-full bg-greyBGTbliss">
    <div class="container-lg border-b border-b-[#6A6A6A] pb-[30px]">
        <div class="flex flex-wrap mt-30 pt-[45px]">

            <div class="basis-full lg:basis-1/2">
                <h3 class="mb-4 text-[28px]">
                    Sudah termasuk
                </h3>
                @foreach($detailTrip->trip_include as $include)
                <div class="mb-3">
                    <div class="flex">
                        <img src="{{$include->icon_image}}" alt="" class="mr-12 inline">
                        <h1 class=" inline-block mt-[10px]">{{$include->title}}</h1>
                    </div>
                    <!-- <span><img src="{{$include->icon_image}}" alt="" class="mr-12 inline">{{$include->title}}</span> -->
                </div>
                @endforeach
            </div>
            <div class="basis-full lg:basis-1/2">
                <h3 class="mb-4 text-[28px]">
                    Tidak termasuk
                </h3>
                @foreach($detailTrip->trip_exclude as $exclude)
                <div class="mb-3">
                    <div class="flex">
                        <img src="{{$exclude->icon_image}}" alt="" class="mr-12 inline">
                        <h1 class=" inline-block mt-[10px]">{{$exclude->title}}</h1>
                    </div>
                    <!-- <span><img src="{{$exclude->icon_image}}" alt="" class="mr-12 inline">  {{$exclude->title}}</span> -->
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="container-full bg-greyBGTbliss pb-[150px]">
    <div class="container-lg pt-[27px] mb-[54px]">
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
            <ul class="city-slider-{{$city->place_categories->id}} slider" data-slider="{{$city->place_categories->id}}">
                @foreach($city->pick_hidden_gem as $hidden_gem)
                <li>
                    <img src="{{$hidden_gem->hidden_gems->image_desktop}}" alt="" class="w-[98%]">
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach



</section>

<section>
    <div class="container-lg pb-[164px] mt-[50px]">
        <h1 class="text-[30px] px-3">
            Eksplor Trip Lainnya
        </h1>

        <div class="flex flex-wrap other-trip-section">
            @foreach($otherTrips as $trip)
            <div class="basis-full lg:basis-4/12 px-3 pt-[50px] pb-3 hover:drop-shadow-md hover:cursor-pointer ">
                <div class="max-w-sm bg-white ">
                    <a href="{{route('home.detail' ,['id'=>'korea','trip'=>$trip->slug])}}">
                        <img src="{{$trip->thumbnail}}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 flex flex-col">
                        <div class="flex flex-1">
                            <h5 class="text-blueTbliss mr-3 text-[12px]">
                                {{$trip->seat}} seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-[12px]">
                        </div>

                        <a href="{{route('home.detail' ,['id'=>'korea','trip'=>$trip->slug])}}" class="flex-1">
                            <h5 class="mb-2 text-2xl font-bold tracking-[1px] font-bely text-greyTbliss text-[28px] h-[130px]">{{$trip->title}}</h5>
                        </a>
                        <div class="flex-1">
                            <span class="text-[#6A6A6A] font-interRegular font-bold text-[22px] mr-5">
                                {{$trip->day}}H{{$trip->night}}M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-3 text-[16px]">

                                {{ date('d', strtotime($trip->date_from)) }} - {{ date('d M Y', strtotime($trip->date_to)) }}
                            </span>
                        </div>
                        <p class="text-redTbliss font-bold text-[19px] flex-1">
                            @currency($trip->price)
                        </p>
                    </div>
                </div>



            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- <button  class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
    Toggle modal
</button> -->

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <form action="{{ route('checkout.store')}}" method="post">
                @csrf
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Add to Cart
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <label for="custom-input-number" class="w-full text-gray-700 text-sm font-semibold">Review Cart
                    </label>
                    <div class=" flex justify-between ">
                        <h1>{{$detailTrip->title}}</h1>
                        <input type="hidden" name="trip_categories_id" value="{{$detailTrip->id}}">
                        <input type="hidden" class="cart-seat" value="{{$detailTrip->seat}}">
                        <div class="number cursor-pointer">
                            <span class="minus w-[20px] h-[20px] bg-[#f2f2f2] shadow border-2 border-[#ddd] px-[8px] py-[5px]">-</span>
                            <input type="number" value="1" min="1" max="{{$detailTrip->seat}}" class="h-[34px] w-[100px] text-center border-2 border-[#ddd] " name="seat" />
                            <span class="plus w-[20px] h-[20px] bg-[#f2f2f2] shadow border-2 border-[#ddd] px-[8px] py-[5px]">+</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">

                        <div class=" ..."></div>
                        <div class=" col-span-2 ...">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th class="w-1/2">Seat</th>
                                        <th class="w-1/2">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>x <span class="count-seat">1</span> </td>
                                        <td class="count-price" data-price="{{$detailTrip->price}}">@currency($detailTrip->price)</td>
                                        <input type="hidden" class="count-price-input" value="{{$detailTrip->price}}" name="price">
                                        <input type="hidden" name="price_dp" value="{{$detailTrip->price}}" class="inputFinishPrice">
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-end items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Order Now</button>
                </div>
            </form>
        </div>
    </div>
</div>


@include('web.components.presentational.footer')

<div class="bg-[#ff5055]  lg:h-[73px] w-full text-white fixed  bottom-0 z-20 ">
    <form action="{{route('home.addToCart')}}" method="post">
        @csrf
        <div class="container-lg pt-3 pb-3 lg:pb-0">
            <div class="flex flex-wrap justify-between">
                <div class="basis-full lg:basis-1/2 pt-2 mb-[30px] lg:mb-0">
                    <span class="font-bold font-interRegular text-[14px]">
                        Harga Rp.<span>@currency($detailTrip->price)</span> / pax
                    </span>
                    <span class=" ml-4 font-interRegular text-[14px]">
                        Open Trip {{$detailTrip->day}} Hari {{$detailTrip->night}} Malam
                    </span>
                    <input type="hidden" name="id" value="{{$detailTrip->id}}">
                </div>
                <div class="basis-full lg:basis-1/2 text-[15px]">
                    <button type="button" class="text-white bg-transparent border hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tanya Kami <span class="ml-2"><img src="{{ asset('images/header/whatsapp.png') }}" alt="" class="h-[20px] w-[20px] inline"></span></button>
                    <!-- <button type="button" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Pesan Sekarang <span class="ml-2"><img src="{{ asset('images/detailtrip/arrow.png') }}" alt="" class="h-[10px] w-[15px] inline"></span></button> -->
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-interRegular rounded-full text-sm px-[1rem] lg:px-5 py-2.5 text-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Pesan Sekarang <span class="ml-2"><img src="{{ asset('images/detailtrip/arrow.png') }}" alt="" class="h-[10px] w-[15px] inline"></span></button>
                </div>
            </div>
        </div>
    </form>
</div>


<!-- Modal toggle -->


</div>



@endsection
@push('javascript-internal')
<script>
    $(document).ready(function() {

        let allSlider = ('.city-slider').length;
        console.log(allSlider)

        $('.slider').each(function(item, index) {
            // let dataIndex = (this).data("slider")
            let dataIndex = $(this).data("slider")
            console.log(dataIndex)

            $(`.city-slider-${dataIndex}`).slick({
                dots: false,
                infinite: false,
                slidesToShow: 2.5,
            });
            $(`.city-slider-${dataIndex}`).not('.slick-initialized').slick();


        })

        const options = {
            mobileFirst: true,
            responsive: [{
                breakpoint: 450,
                settings: "unslick"
            }],
        };
        // $('.hg-slider').not('.slick-initialized').slick();
        var slicky = $('.hg-slider');
        // slicky.slick(options);
        slicky.slick({
            dots: false,
            infinite: false,
            slidesToShow: 3,
            responsive: [

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }

            ]
        })

        $(window).resize(function() {

            setTimeout(function() {

                if ($(window).width() < 450 && !slicky.hasClass("slick-initialized")) {
                    slicky.slick(options);
                }
            }, 100);
        });

        $('.minus').click(function() {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            var price = $('.count-price-input').val()
            var $cartSeat = $('.count-seat')
            $cartSeat.empty()
            $cartSeat.append(`${count}`)
            var newPrice = price * count
            var $cartPrice = $('.count-price')
            $cartPrice.data('price', newPrice)
            $cartPrice.empty()
            $cartPrice.append(`${newPrice.toLocaleString("id-ID", {style:"currency", currency:"IDR",minimumFractionDigits: 0})}`)
            $('.inputFinishPrice').val(newPrice)
            $('.inputFinishPrice').change()
            return false;
        });
        $('.plus').click(function() {
            var $input = $(this).parent().find('input');
            var count = $input.val(parseInt($input.val()) + 1);
            var countPlus = parseInt($input.val()) + 1;
            var cartseat = $('.cart-seat').val()
            count = countPlus >= cartseat ? cartseat : parseInt($input.val());
            $input.val(count);
            $input.change();
            var price = $('.count-price-input').val()
            var $cartSeat = $('.count-seat')
            $cartSeat.empty()
            $cartSeat.append(`${count}`)
            var newPrice = price * count
            var $cartPrice = $('.count-price')
            $cartPrice.data('price', newPrice)
            $cartPrice.empty()
            $cartPrice.append(`${newPrice.toLocaleString("id-ID", {style:"currency", currency:"IDR",minimumFractionDigits: 0})}`)
            $('.inputFinishPrice').val(newPrice)
            $('.inputFinishPrice').change()
            return false;
        });



    });
</script>
@endpush