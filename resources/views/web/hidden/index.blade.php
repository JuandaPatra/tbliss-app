@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="header">
    <div class="container-lg mb-[30px] mt-[30px]">
        <h1 class=" font-interRegular font-bold text-[24px]">{{$hiddenGem->title}}</h1>
    </div>
    <picture>
        <source media="(min-width:1000px)" srcset="{{$hiddenGem->image_desktop}}">
        <source media="(min-width:320px)" srcset="{{$hiddenGem->image_desktop}}">
        <img src="{{$hiddenGem->image_desktop}}" alt="Flowers" class="w-full">
    </picture>
</div>

<section class="container-lg mb-20">
    <div class="flex flex-col lg:flex-row justify-between mt-[42px]">
        <div class="w-full lg:w-1/2">
            
            {!! $hiddenGem->description1 !!}
        </div>
        <div class="flex flex-row lg:flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl mt-[30px] lg:mt-0  ">
            <div class="flex flex-col justify-start px-4 py-1 leading-normal border-l-2 border-gray-200 w-1/2 mt-[-55px]">
                <div class="flex">
                    <span class="font-bold text-[30px] inline-block">5</span>
                    <span class="mx-2 block mt-[20px]">/</span>
                    <span class="block mt-[20px]">5</span>
                </div>
                <div class="flex ">
                    <p>{{$count}}</p>
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
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">"{{$tripReviewSatu}}"</p>
                <p class="mb-3 font-normal text-gray-700">Travelswithlola, United Kingdom</p>
            </div>
        </div>
    </div>

</section>



<section>
    <div class="container-lg pb-[164px]">
        <h1 class="text-[30px]">
            Eksplor Trip Lainnya
        </h1>
        <div class="flex flex-wrap ">
            @if($tripHiddenGemsResult->count() == 0)
            <div class=" mt-10"> 
                <h1 class=" text-[30px]">No Data</h1>
            </div>
            @else
            @foreach($tripHiddenGemsResult as $trip)
            <div class="basis-full lg:basis-4/12 px-0 py-3 lg:p-3">
                <div class="max-w-md lg:max-w-sm bg-white ">
                    <a href="{{route('home.detail' ,['id'=>$trip->slug,'trip'=>$trip->slug])}}">
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
                        {{ date('d M Y', strtotime($trip->date_from)) }} 
                        </span>
                        <p class="text-[#FF5055] font-bold text-[19px]">
                            @currency($trip->price)
                        </p>
                    </div>
                </div>
            </div>

            @endforeach
            @endif

        </div>
    </div>
</section>

@include('web.components.presentational.footer')

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