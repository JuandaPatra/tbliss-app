@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">Profil Kamu</h1>
</div>
<section>
    <div class="container-lg my-4 mx-5">
        <div class="grid grid-cols-3 gap-4 ">
            <div class="text-lg font-bold text-center p-3 rounded-lg ">
                <div class="flex justify-start mr-2 mb-3">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100" fill="#212529" viewBox="0 0 100 100" class="inline" height="48" width="48">
                            <circle cx="50.1" cy="39.5" r="16.7"></circle>
                            <path d="m50 3.6c-25.5 0-46.3 20.7-46.3 46.3s20.8 46.3 46.3 46.3 46.3-20.8 46.3-46.3-20.8-46.3-46.3-46.3zm27.2 75.5c-3.4-9.1-10.8-18.8-27.2-18.8-16.3 0-23.8 9.7-27.2 18.8-7.8-7.3-12.8-17.7-12.8-29.2 0-22 17.9-40 40-40s40 17.9 40 40c0 11.5-5 21.9-12.8 29.2z"></path>
                        </svg>

                    </span>

                    <div class=" ml-4 align-self-center">
                        Welcome back, <br>
                        <b>Juanda Patra</b>
                    </div>
                </div>

                <div class="account-sidebar__item">
                    <a class="flex justify-start mb-3 " href="{{route('home.profile')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" fill="none" class="mr-2 align-bottom">
                            <path d="M17.5441 10.9127C17.5441 12.1335 16.5544 13.1232 15.3336 13.1232C14.1128 13.1232 13.123 12.1335 13.123 10.9127C13.123 9.69183 14.1128 8.70215 15.3336 8.70215C16.5544 8.70215 17.5441 9.69183 17.5441 10.9127Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M29.333 15.333C29.333 23.065 23.065 29.333 15.333 29.333C7.60101 29.333 1.33301 23.065 1.33301 15.333C1.33301 7.60101 7.60101 1.33301 15.333 1.33301C23.065 1.33301 29.333 7.60101 29.333 15.333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.3322 16.0693C17.9306 16.0693 20.0803 17.9909 20.438 20.4904H10.2266C10.5841 17.9909 12.7338 16.0693 15.3322 16.0693Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <span class="align-middle tw-leading-none ml-4">Profile</span>
                    </a>
                </div>
                <div class="account-sidebar__item">
                    <a class="flex justify-start mb-3 text-authbutton" href="{{route('home.cart')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" fill="none" class="mr-2 align-bottom">
                            <path d="M22.2917 18.2843L20.016 12.9337L20.0495 12.9025C20.8688 12.1673 22.2055 10.6512 21.9492 8.79021C21.935 8.68659 21.8872 8.59047 21.8133 8.51652C21.7393 8.44257 21.6432 8.39485 21.5395 8.38065C19.6686 8.12678 18.157 9.45843 17.3976 10.3135L12.0435 8.03816C11.9555 8.00073 11.8582 7.99054 11.7642 8.0089C11.6703 8.02725 11.584 8.07332 11.5165 8.14115L10.3187 9.33868C10.2725 9.38216 10.2353 9.43441 10.2094 9.49238C10.1835 9.55036 10.1693 9.6129 10.1678 9.67639C10.1678 9.73959 10.1802 9.80219 10.2045 9.86056C10.2288 9.91893 10.2643 9.97192 10.3092 10.0165L14.0366 13.748L11.9262 15.8557L8.3999 15.2329C8.32421 15.2195 8.24639 15.2244 8.173 15.2473C8.09962 15.2703 8.03283 15.3105 7.97829 15.3647L7.13984 16.2053C7.08599 16.2593 7.04581 16.3254 7.02264 16.3981C6.99947 16.4707 6.99399 16.5478 7.00664 16.623C7.01929 16.6982 7.04972 16.7693 7.09538 16.8304C7.14105 16.8915 7.20064 16.9407 7.2692 16.9742L11.3728 18.9549L13.3443 23.0576C13.3775 23.1287 13.4276 23.1905 13.4903 23.2377C13.5529 23.2849 13.6262 23.316 13.7037 23.3283C13.7308 23.3306 13.758 23.3306 13.7851 23.3283C13.912 23.3277 14.0335 23.2769 14.1229 23.187L14.9637 22.3487C15.0179 22.2941 15.0582 22.2274 15.0811 22.154C15.104 22.0806 15.109 22.0028 15.0955 21.9272L14.4798 18.4711L16.5999 16.3155L20.3034 20.0183C20.348 20.0631 20.401 20.0987 20.4594 20.1229C20.5178 20.1472 20.5804 20.1596 20.6436 20.1596C20.7705 20.1591 20.8919 20.1082 20.9814 20.0183L22.1791 18.8208C22.2506 18.7536 22.2997 18.6661 22.3198 18.5702C22.3399 18.4743 22.3301 18.3745 22.2917 18.2843ZM11.3249 9.67639L11.9645 9.0369L16.7101 11.0535C16.5304 11.2428 16.3412 11.4392 16.1352 11.6451L14.7146 13.0654L11.3249 9.67639ZM13.6222 17.9657C13.5688 18.0202 13.5292 18.0867 13.5067 18.1596C13.4842 18.2325 13.4795 18.3097 13.4929 18.3848L14.1085 21.8385L13.9217 22.023L12.1633 18.3896C12.1163 18.2924 12.0378 18.2139 11.9405 18.1669L8.2945 16.4065L8.47896 16.2197L12.0052 16.8472C12.0809 16.8607 12.1587 16.8558 12.2321 16.8328C12.3055 16.8099 12.3723 16.7697 12.4268 16.7155L16.8131 12.3325C17.2922 11.8535 17.7114 11.408 18.0708 10.9961C18.5259 10.4763 19.6686 9.34347 21.0221 9.31952C20.9933 10.5793 20.0231 11.6499 19.4075 12.1936C18.8541 12.6942 18.4037 13.1205 17.9941 13.5372L13.6222 17.9657ZM20.6436 18.9932L17.273 15.6329L18.6768 14.2079C18.8637 14.0186 19.0601 13.8246 19.2685 13.6259L21.2832 18.3633L20.6436 18.9932Z" fill="currentColor"></path>
                            <path d="M28.5 15.5947C28.5 23.0506 22.4558 29.0947 15 29.0947C7.54416 29.0947 1.5 23.0506 1.5 15.5947C1.5 8.13888 7.54416 2.09473 15 2.09473C22.4558 2.09473 28.5 8.13888 28.5 15.5947Z" stroke="currentColor"></path>
                        </svg>
                        <span class="align-middle tw-leading-none ml-4">Histori Pembayaran</span>
                    </a>
                </div>

            </div>
            <div class=" text-lg font-bold text-center p-3 rounded-lg col-span-2">



                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-greyTbliss dark:text-gray-400">
                        <thead class=" font-interRegular text-sm border-b border-[#9F9F9F]">
                            <tr>
                                <th scope="col" class="pl-0 pr-6 py-3 ">
                                    Invoice Number
                                </th>
                                <th scope="col" class="pl-6 pr-0 py-3">
                                    Status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-[#9F9F9F] dark:border-gray-700 cursor-pointer">
                                <th scope="row" class="pl-0 pr-6 py-3 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Invoice #TRAVELBLIZZ-BCA-2309
                                </th>
                                <td class="pl-6 pr-0 py-4 text-footer">
                                    Menunggu Pembayaran
                                </td>
                            </tr>
                            <tr class="border-b border-[#9F9F9F] dark:border-gray-700 cursor-pointer">
                                <th scope="row" class="pl-0 pr-6 py-3 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Invoice #TRAVELBLIZZ-BCA-2308
                                </th>
                                <td class="pl-6 pr-0 py-4 text-[#5C6CEF]">
                                    Lunas
                                </td>
                            </tr>

                        </tbody>
                    </table>
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

        let base_url = window.location.origin;
        $(".selector").flatpickr({
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
                    // console.log(data);
                    $('.home-section').empty()
                    let result = data
                    result.forEach(function(item, index) {
                        $('.home-section').append(
                            `
                                <div class="basis-full lg:basis-4/12 p-3">
                                    <div class="max-w-sm bg-white ">
                                        <a href="/countries/korea/detail/${item.slug}">
                                            <img src="${item.thumbnail}" alt="" class="w-full">
                                        </a>
                                        <div class="mt-3 ">
                                            <div class="flex ">
                                                <h5 class="text-blueTbliss mr-3">
                                                    ${item.seat} seats left
                                                </h5>
                                                <img src="{{ asset('images/trip/seat.png') }}" alt="" class="inline">
                                            </div>
                                            <a href="#">
                                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-greyTbliss text-[28px]">${item.title}</h5>
                                            </a>
                                            <span class="text-[#6A6A6A] font-interRegular font-bold text-[22px] mr-5">
                                                ${item.day}H${item.night}M
                                            </span>
                                            <span>
                                                |
                                            </span>
                                            <span class="ml-3 text-[16px]">

                                                ${new Date(item.date_from).getDay()} - ${item.date_to}
                                            </span>
                                            <p class="text-redTbliss font-bold text-[19px]">
                                                ${item.price.toLocaleString("id-ID", {style:"currency", currency:"IDR",minimumFractionDigits: 0})}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            `
                        )

                    })

                    // let allData = [...allData, data]
                    // allData.push(data)

                },
            });


        })
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



    });
</script>
@endpush