@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')


<section>
    <div class="relative">
        <div class="banner-slider">
            <div class="relative ">
                <div class="absolute top-[150px] lg:top-[120px] left-0 right-0 text-white">
                    <div class="flex justify-center ">
                        <h1 class="text-center text-[30px] lg:text-[60px] w-[710px] xl:w-[700px]  font-bely">
                            "Ingin punya banyak waktu kosong untuk jalan berdua"
                        </h1>
                    </div>
                    <div class="flex justify-center mt-[20px]">
                        <h1 class="text-center text-[15px] lg:text-[20px]  w-[500px] font-normal">
                            Trip bareng memang padat itin-nya, tapi kami paham dan #SiapBantu untuk buatin yang lebih santuy.


                        </h1>
                    </div>
                </div>
                <picture>
                    <source media="(min-width:1000px)" srcset="{{ asset('images/title/korea-bg.jpg') }}">
                    <source media="(min-width:320px)" srcset="{{ asset('images/title/banner-mobile-2.jpg') }}">
                    <img src="{{ asset('images/title/korea-bg.jpg') }}" alt="Flowers" class="w-full lg:h-[624px] object-cover">
                </picture>
            </div>

        </div>

        <div class="absolute search-box  left-0 right-0 top-[430px] text-white">
            <div class="flex flex-wrap justify-center">
                <div class="w-[90%] lg:w-[650px] h-[97px] bg-[#4A5CEDcc] pt-2.5 px-[10px] lg:px-0 rounded-xl ">
                    <h3 class="text-center mb-2">
                        Langsung cek jadwal trip :
                    </h3>
                    <div class="flex justify-center mx-auto">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Pilih Kota</option>
                            @foreach($hiddenGemId as $cities)
                            <option value="{{$cities->id}}">{{$cities->title}}</option>
                            @endforeach
                        </select>
                        <select id="seats" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Peserta</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                        <div class="relative max-w-sm">
                            <!-- <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div> -->
                            <input type="text" class="selector" placeholder="Pilih Tanggal">
                        </div>
                        <button class="focus:outline-none  text-white bg-tbliss w-[40px] rounded-r-lg px-2" id="searchTrips">
                            <img src="{{ asset('images/title/search.png') }}" alt="" class="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-[53px]">
        <div class="flex justify-center">
            <h3 class=" text-center text-[20px] lg:text-[30px] w-full lg:w-[50%] font-normal font-interRegular">
                Masih bingung milih trip yang tepat?
            </h3>
        </div>
        <div class="flex justify-center">
            <h3 class="text-center text-[20px] lg:text-[30px] w-full lg:w-[50%] font-normal font-interRegular">Boleh kita bantu untuk buat itin-nya kak?</h3>
        </div>

        <div class="flex justify-center mt-[40px] lg:mt-[39px] mb-[70px] lg:mb-[119px]">
            <div>
                <div class=" flex justify-center mb-3">
                    <img src="{{ asset('images/title/plan.jpg') }}" alt="" class="  p-3 h-[160px]">
                </div>
                <div class="flex justify-center mb-4 h-[100px]">
                    <h1 class="w-[60%] lg:w-[55%] text-center text-[20px] lg:text-[30px]">Gak usah bingung! pake fitur pintar kami</h1>
                </div>
                <a href="{{ route('search')}}" class="text-footer text-[20px] block text-center">Baiklah, sini Kami bantu! <span><img src="{{ asset('images/title/arrow.png') }}" alt="" class="w-[20px] inline"></span></a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-lg pb-[50px] lg:pb-[164px]">
        <h1 class="text-[25px] lg:text-[30px] ml-[15px] mb-[30px]">
            Mari, pilih trip perjalanan {{$country->title}} kak!
        </h1>
        <p class="ml-[15px] mb-[20px] text-greyDetTbliss font-interRegular result-text hidden">Trip yang tersedia pada tanggal 1 Juli 2023 - 20 Juli</p>
        <div class="flex flex-wrap home-section">
            @foreach($trips as $trip)
            <div class="basis-full lg:basis-4/12 px-3 pt-[50px] pb-3 hover:drop-shadow-md hover:cursor-pointer ">
                <div class="max-w-sm bg-white ">
                    <a href="{{route('home.detail' ,['id'=>$country->slug,'trip'=>$trip->slug])}}">
                        <img src="{{$trip->thumbnail}}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 flex flex-col">
                        <div class="flex flex-1">
                            <h5 class="text-blueTbliss mr-3 text-[12px] pl-[15px]">
                                {{$trip->seat}} seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline h-[12px]">
                        </div>

                        <a href="{{route('home.detail' ,['id'=>$country->slug,'trip'=>$trip->slug])}}" class="flex-1">
                            <h5 class="mb-2 text-2xl font-bold tracking-[1px] font-bely text-greyTbliss text-[24px] h-[130px] px-[15px]">{{$trip->title}}</h5>
                        </a>
                        <div class="flex-1 px-[15px]">
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
                        <p class="text-redTbliss font-bold text-[19px] flex-1 px-[15px] pb-[20px]">
                            @currency($trip->price)
                        </p>
                        
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="p-4">
    <div class="container-lg">
        <h1 class="text-[30px] text-greyTbliss font-bold mb-4 ml-[15px]">
            Hidden Gems di {{$country->title}}
        </h1>
        <div class="flex flex-wrap hg-slider">
            @foreach($pickHiddenGems as $hiddenGem)
            <div class="basis-full lg:basis-3/12 gap-8 p-3 hover:drop-shadow-lg hover:cursor-pointer">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{route('home.hiddenGems' ,['id'=>$country->slug,'slug'=>$hiddenGem->hidden_gem->slug])}}">
                        <img class=" w-full" src="{{$hiddenGem->hidden_gem->image_desktop}}" alt="" />
                    </a>

                    <div class="p-3 h-[150px]">

                        <a href="{{route('home.hiddenGems' ,['id'=>$country->slug,'slug'=>$hiddenGem->hidden_gem->slug])}}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white h-[80px]">{{$hiddenGem->hidden_gem->title}}</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">57.6 views</p>

                    </div>

                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section class="p-4 bg-[#f6e0ea] h-[900px] lg:h-auto">
    <div class="container-lg pt-[20px] lg:pt-[100px] pb-[90px]">
        <h1 class="font-bold w-full lg:w-[25%] text-[30px] mb-3 lg:mb-0">
            Kesan yang pernah ikut t'bliss
        </h1>
        <div class="flex flex-wrap justify-end ">
            <div class="slider-for w-[300px] lg:w-[550px]">
                {{--
                    @foreach($testimonies as $testimoni)
                    <img src="{{$testimoni->image}}" alt="" class="h-auto w-[500px]">
                @endforeach
                --}}
                <img src="{{ asset('images/testimoni/korean-girls.jpg') }}" alt="" class="h-auto w-[300px] lg:w-[500px]">
                <img src="{{ asset('images/testimoni/korean-girls.jpg') }}" alt="" class="h-auto w-[300px] lg:w-[500px]">

            </div>
        </div>
        <div class="relative">
            <div class="absolute top-[0px] lg:top-[-470px] left-0 lg:left-[15%] bg-white w-full lg:w-[45%] p-6  lg:p-5">
                <img src="{{ asset('images/testimoni/svg.png') }}" alt="" class="">
                <div class="testimoni-slider">
                    @foreach($testimonies as $testimoni)
                    <div>
                        <h1 class="bold mb-3 text-[20px] lg:text-[30px] font-semibold">
                            {{$testimoni->description}}
                        </h1>
                        <p class="text-[15px] lg:text-[20px]">
                            {{$testimoni->name}}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="absolute top-[240px] lg:top-[-130px] left-0 lg:left-[15%] w-[15%] lg:w-[5%] mt-3">
                <div class="flex justify-between ">
                    <img src="{{ asset('images/testimoni/left-arrow.png') }}" alt="" class="mr-4 hover:cursor-pointer left-testimoni-arrow">
                    <img src="{{ asset('images/testimoni/right-arrow.png') }}" alt="" class="hover:cursor-pointer right-testimoni-arrow">
                </div>
            </div>
        </div>
    </div>
</section>




<section class="px-4 pb-[80px] pt-4">
    <div class="container-lg">
        <div class="flex justify-center  mt-[59px]">
            <h1 class=" mr-1 lg:mr-3 font-bold font-interRegular text-[15px] lg:text-[26px]">
                Bersama kami di Instagram
            </h1>
            <img src="{{ asset('images/instagram/ig.png') }}" alt="" class="w-[31px] h-[31px]">
        </div>
        <div class="flex justify-center mb-7 text-[15px]">
            <p class=" text-[14px] lg:text-[15px]">
                Ikuti cerita perjalanan kami di
            </p>
            <a href="" class="text-[#2EC4DD] ml-2 font-interRegular text-[14px] lg:text-[15px]"> @travelibiss</a>
        </div>
        <ul class="juicer-feed" data-feed-id="travelbliss-tours" data-origin="embed-code"></ul>
    </div>
</section>



@include('web.components.presentational.whatsapp')
@include('web.components.presentational.footer')




</div>
@endsection

@push('javascript-internal')
<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js" integrity="sha512-7vRrNQ5TnkhihLzA4Qd32yZP5A1oZvqmowU5OxgL612vmfd1eLgfgvB31J6Wdg8/tQqvikZdrNsZAj0WeONL/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {

        let base_url = window.location.origin;
        $(".selector").flatpickr({
            dateFormat: "d/m/Y",
            minDate: "today",
            maxDate: "31.12.2029",
            altInput: true,
            mode: "range",
            onChange: function(selectedDates, datestr, instance) {


                // $(".selector").val(selectedDates[0] + ' - ' + this.formatDate(selectedDates[0], "j F Y"));
                $(".selector").val(datestr.replace('to', '-'));
            }
        });

        $('#searchTrips').on('click', function(e) {
            let id = $('#countries').val()
            let dates = $('.selector').val()
            let dateFrom = dates.slice(0, 10)
            let dateTo = dates.slice(13, 23)
            let seats = $('#seats').val()

            $.ajax({
                type: "POST",
                url: `${base_url}/seacrhByDate`,
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                data: {
                    id,
                    dateFrom,
                    dateTo,
                    seats
                },
                error: function(xhr, error) {
                    if (xhr.status === 500) {
                        console.log(error);

                        $(e.target).html("Gagal Terkirim");

                        setTimeout(() => {
                            location.reload();
                        }, 2500);
                    }
                },
                success: function(data) {
                    $('.result-text').removeClass('hidden')
                    $('.home-section').empty()
                    let result = data.result
                    if (result.length === 0) {
                        $('.home-section').append(
                            `<div class=" w-full flex justify-start text-[20px] text-greyDetTbliss ml-[15px]">
                            Maaf Kak, tidak ada jadwal trip pada saat ini
                            </div>`
                        )
                    } else {
                        $('.result-text').text(
                            `Trip yang tersedia pada tanggal ${data.dateReqFrom} - ${data.dateReqTo}`
                        )
                        result.forEach(function(item, index) {
                            $('.home-section').append(
                                `
                                    <div class="basis-full lg:basis-4/12 px-3 pt-[50px] pb-3 hover:drop-shadow-md hover:cursor-pointer ">
                                        <div class="max-w-sm bg-white ">
                                            <a href="/countries/korea/detail/${item.slug}">
                                                <img src="${item.thumbnail}" alt="" class="w-full">
                                            </a>
                                            <div class="mt-3 flex flex-col ">
                                                <div class="flex  flex-1 ">
                                                    <h5 class="text-blueTbliss mr-3 text-[12px] pl-[15px]">
                                                        ${item.seat} seats left
                                                    </h5>
                                                    <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline  h-[12px]">
                                                </div>
                                                <a href="/countries/korea/detail/${item.slug}">
                                                    <h5 class="mb-2 text-2xl font-bold tracking-[1px] font-bely text-greyTbliss text-[24px] h-[130px] px-[15px]">${item.title}</h5>
                                                </a>
                                                <div class="flex-1 px-[15px]">
                            <span class="text-[#6A6A6A] font-interRegular font-bold text-[22px] mr-5">
                            ${item.day}H${item.night}M
                            </span>
                            <span>
                                |
                            </span>
                            <span class="ml-3 text-[16px]">
                            ${item.date_from_result} - ${item.date_to_result}

                            </span>
                        </div>
                        <p class="text-redTbliss font-bold text-[19px] flex-1 px-[15px] pb-[20px]">
                        ${item.price.toLocaleString("id-ID", {style:"currency", currency:"IDR",minimumFractionDigits: 0})}
                        </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                `
                            )

                        })
                    }
                },
            });


        })

        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            // fade: true,
            asNavFor: '.testimoni-slider'
        });

        $('.slider-for').not('.slick-initialized').slick();


        $('.banner-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            autoplay: false,
            // autoplaySpeed: 2000,
        });
        $('.banner-slider').not('.slick-initialized').slick();

        $('.testimoni-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 1,
            autoplay: false,
            asNavFor: '.slider-for',
            arrows: true,
            prevArrow: '.left-testimoni-arrow',
            nextArrow: '.right-testimoni-arrow',
        });
        $('.testimoni-slider').not('.slick-initialized').slick();

        const options = {
            mobileFirst: true,
            responsive: [{
                breakpoint: 450,
                settings: "unslick"
            }]
        };

        var slicky = $('.hg-slider');
        slicky.slick(options);

        $(window).resize(function() {

            setTimeout(function() {

                if ($(window).width() < 450 && !slicky.hasClass("slick-initialized")) {
                    slicky.slick(options);
                }
            }, 100);
        });
        // $('.hg-slider').not('.slick-initialized').slick();

        // $('.dropdown-cls').each(function() {
        //     $(this).on('click', function(e) {
        //         let dataDropdown = $(this).data("drop")
        //         $('.dropdownMenu').toggleClass('hidden')
        //         $('.dropdownMenu').removeClass('hidden')

        //         $('.dropdownMenu').toggleClass('opacity-5')
        //         $('.dropdownMenu').toggleClass('hide')
        //         $('.search-box').toggleClass('active') 
        //         $(this).toggleClass('active')
        //         $(this).siblings().removeClass('active')
        //         $('.dropMenu').each(function(){
        //             let menu = $(this).data('menu')
        //             console.log(menu)
        //             if($(this).data('menu')===dataDropdown){
        //                 // alert($(this).data('menu') )
        //                 alert(`You clicked me. ${dataDropdown}`);
        //                 // $(this).toggleClass('hidden')
        //                 // $(this).siblings().removeClass('hidden')
        //                 // $(this).removeClass('hidden')
        //             }
        //         })
        //     })
        // })

        // $('.dropMenu').click(function(e){
        //     if(!$(e.target).closest('.dropdownMenu').length){
        //         console.log(e)
        //     }
        // })



    });
</script>
@endpush