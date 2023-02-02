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
                    <source media="(min-width:320px)" srcset="{{ asset('images/title/banner-mobile.jpg') }}">
                    <img src="{{ asset('images/title/korea-bg.jpg') }}" alt="Flowers" class="w-full lg:h-[624px] object-cover">
                </picture>
            </div>
            <!-- <div class="relative ">
                <div class="absolute top-[120px] xl:top-[120px] lg:top-[40px] left-0 right-0 text-white">
                    <div class="flex justify-center ">
                        <h1 class="text-center text-[60px] w-[710px] xl:w-[700px] font-bely">
                            "Ingin punya banyak waktu kosong untuk jalan berdua"
                        </h1>
                    </div>
                    <div class="flex justify-center mt-[20px]">
                        <h1 class="text-center text-[20px]  w-[500px] font-normal">
                            Trip bareng memang padat itin-nya, tapi kami paham dan #SiapBantu untuk buatin yang lebih santuy
                        </h1>
                    </div>
                </div>
                <picture>
                    <source media="(min-width:1000px)" srcset="{{ asset('images/title/korea-bg-1.jpg') }}">
                    <source media="(min-width:320px)" srcset="img_white_flower.jpg">
                    <img src="{{ asset('images/title/korea-bg-1.jpg') }}" alt="Flowers" class="w-full lg:h-[624px] object-cover">
                </picture>
            </div>
            <div class="relative">
                <div class="absolute xl:top-[120px] lg:top-[40px] left-0 right-0 text-white">
                    <div class="flex justify-center ">
                        <h1 class="text-center text-[60px] w-[710px] xl:w-[700px] font-bely">
                            "Emang Oppa-nya bening-bening "
                        </h1>
                    </div>
                    <div class="flex justify-center mt-[20px]">
                        <h1 class="text-center text-[20px]  w-[500px] font-normal">
                            Katanya standar ganteng di Korea itu beda, di jalan atau di kereta sering ketemu cowok bening. Percaya gak?
                        </h1>
                    </div>
                </div>
                <picture>
                    <source media="(min-width:1000px)" srcset="{{ asset('images/title/korea-bg-2.jpg') }}">
                    <source media="(min-width:320px)" srcset="img_white_flower.jpg">
                    <img src="{{ asset('images/title/korea-bg-2.jpg') }}" alt="Flowers" class="w-full lg:h-[624px] object-cover">
                </picture>
            </div> -->
        </div>

        <div class="absolute search-box  left-0 right-0 top-[430px] text-white">
            <div class="flex flex-wrap justify-center">
                <div class="w-[90%] lg:w-[650px] h-[97px] bg-[#4A5CEDcc] pt-2.5 px-[10px] lg:px-0 rounded-xl ">
                    <h3 class="text-center mb-2">
                        Langsung cek jadwal trip :
                    </h3>
                    <div class="flex justify-center mx-auto">
                        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Korea</option>
                            <option>Seoul</option>
                            <option>Busan</option>
                            <option>Jeonju</option>
                        </select>
                        <select id="seats" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm  focus:ring-blue-500 focus:border-blue-500 block w-25 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option>Peserta</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                        <div class="relative max-w-sm">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input datepicker datepicker-orientation="bottom right" datepicker-autohide datepicker-format="dd/mm/yyyy" type="text" class="bg-gray-50 border border-gray-300 rounded-none text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  " placeholder="Select date">
                        </div>
                        <button class="focus:outline-none  text-white bg-tbliss w-[40px] rounded-r-lg px-2">
                            <img src="{{ asset('images/title/search.png') }}" alt="" class="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-[53px]">
        <div class="flex justify-center">
            <h3 class=" text-center text-[30px] w-full lg:w-[50%] font-normal font-interRegular">
                Memang kalau gak berkunjung yah gak akan tau. Buktikan langsung Aja!
            </h3>
        </div>
        <div class="flex justify-center mt-[40px] lg:mt-[69px] mb-[70px] lg:mb-[119px]">
            <div>
                <div class=" flex justify-center mb-3">
                    <img src="{{ asset('images/title/bp.png') }}" alt="" class="  p-3 h-[120px]">
                </div>
                <div class="flex justify-center mb-4 h-[100px]">
                    <h1 class="w-[45%] text-center text-[30px]">Baru rencana, mohon dibantu Kak!</h1>
                </div>
                <a href="" class="text-footer text-[20px] block text-center">Baiklah, sini Kami bantu! <span><img src="{{ asset('images/title/arrow.png') }}" alt="" class="w-[20px] inline"></span></a>
            </div>

        </div>
    </div>
</section>

<section>
    <div class="container-lg pb-[50px] lg:pb-[164px]">
        <h1 class="text-[30px] ml-[15px]">
            Mari, Pilih trip perjalanan Korea kak!
        </h1>
        <div class="flex flex-wrap">
            <div class="basis-full lg:basis-4/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img src="{{ asset('images/trip/trip-0.jpg') }}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-blueTbliss mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-greyTbliss text-[28px]">Culinary Trip in Korea</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-interRegular font-bold text-[22px] mr-5">
                            6H5M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-redTbliss font-bold text-[19px]">
                            Rp. 9.500.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-4/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img src="{{ asset('images/trip/trip-1.jpg') }}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-blueTbliss mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-greyTbliss text-[28px]">Cultural Walk in Korea</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-interRegular font-bold text-[22px] mr-5">
                            6H5M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-redTbliss font-bold text-[19px]">
                            Rp. 9.500.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-4/12 p-3">
                <div class="max-w-sm bg-white ">
                    <a href="#">
                        <img src="{{ asset('images/trip/trip-2.jpg') }}" alt="" class="w-full">
                    </a>
                    <div class="mt-3 ">
                        <div class="flex ">
                            <h5 class="text-blueTbliss mr-3">
                                3 seats left
                            </h5>
                            <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                        </div>
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-greyTbliss text-[28px]">Korea 101 Trip</h5>
                        </a>
                        <span class="text-[#6A6A6A] font-interRegular font-bold text-[22px] mr-5">
                            6H5M
                        </span>
                        <span>
                            |
                        </span>
                        <span class="ml-3 text-[16px]">
                            23 - 28 APR 2023
                        </span>
                        <p class="text-redTbliss font-bold text-[19px]">
                            Rp. 9.500.000
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-4">
    <div class="container-lg">
        <h1 class="text-[30px] text-greyTbliss font-bold mb-4 ml-[15px]">
            Hidden Gems di Korea
        </h1>
        <div class="flex flex-wrap">
            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-0.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">K-Drama Shooting Location</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">57.6 views</p>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-1.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Insta-worthy Pohan Space Walk</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">635 views</p>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-2.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Iconic Canola Flower Field</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">5.49 k views</p>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-3.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Overnight Jeonju Hanok Villa</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">232 views</p>

                    </div>
                </div>
            </div>
            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-4.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Best Family Friendly Activities in Korea</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">43 k views</p>

                    </div>
                </div>
            </div>

            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-5.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Top 10 Bimbibab on Seoul</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">484 views</p>

                    </div>
                </div>
            </div>

            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-6.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Cultural Walk at Jeon Hun-Street</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">156 views</p>

                    </div>
                </div>
            </div>

            <div class="basis-full lg:basis-3/12 gap-8 p-3">
                <div class="max-w-sm  mb-3 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class=" w-full" src="{{ asset('images/hidden-gem/hg-7.jpg') }}" alt="" />
                    </a>
                    <div class="p-3">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Date Ideas at Famous Picnic Dinner</h5>
                        </a>
                        <p class="mb-10 font-normal text-gray-700 dark:text-gray-400">60.7 k views</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-4 bg-[#f6e0ea] h-[900px] lg:h-auto">
    <div class="container-lg pt-[20px] lg:pt-[100px] pb-[90px]">
        <h1 class="font-bold w-full lg:w-[25%] text-[30px] mb-3 lg:mb-0">
            Kesan yang pernah ikut t'bliss
        </h1>
        <div class="flex flex-wrap justify-end">
            <img src="{{ asset('images/testimoni/korean-girls.jpg') }}" alt="" class="">
        </div>
        <div class="relative">
            <div class="absolute top-[0px] lg:top-[-470px] left-0 lg:left-[15%] bg-white w-full lg:w-[45%] p-6  lg:p-5">
                <img src="{{ asset('images/testimoni/svg.png') }}" alt="" class="">
                <h1 class="bold mb-3 text-[20px] lg:text-[30px] font-semibold">
                    The perfect way to explore amazing places. The team is extremely passionate, super responsive and always willing to go the extra mile even on short notice.
                </h1>
                <p class="text-[15px] lg:text-[20px]">
                    - Dian Wijaya, Jakarta
                </p>
            </div>
            <div class="absolute top-[240px] lg:top-[-130px] left-0 lg:left-[15%] w-[15%] lg:w-[5%] mt-3">
                <div class="flex justify-between ">
                    <img src="{{ asset('images/testimoni/left-arrow.png') }}" alt="" class="mr-4 hover:cursor-pointer">
                    <img src="{{ asset('images/testimoni/right-arrow.png') }}" alt="" class="hover:cursor-pointer">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-4">
    <div class="container-lg">
        <div class="flex justify-center mt-[59px]">
            <h1 class="mr-3 font-bold font-interRegular text-[26px]">
                Bersama kami di Instagram
            </h1>
            <img src="{{ asset('images/instagram/ig.png') }}" alt="" class="">
        </div>
        <div class="flex justify-center mb-7 text-[15px]">
            <p>
                Ikuti cerita perjalanan kami di
            </p>
            <a href="" class="text-[#2EC4DD] ml-2 font-interRegular"> @travelibiss</a>
        </div>
        <div class="grid grid-cols-4 gap-x-2 gap-y-3 mb-[111px]">
            <div><img src="{{ asset('images/instagram/ig-1.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-2.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-3.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-4.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-5.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-6.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-7.jpg') }}" alt="" class="w-full"></div>
            <div><img src="{{ asset('images/instagram/ig-8.jpg') }}" alt="" class="w-full"></div>
        </div>
        <!-- <div class="flex flex-wrap">
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-1.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-2.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-3.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-4.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-5.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-6.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-7.jpg') }}" alt="" class="">
            </div>
            <div class="basis-3/12 mb-3">
                <img src="{{ asset('images/instagram/ig-8.jpg') }}" alt="" class="">
            </div>
        </div> -->
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