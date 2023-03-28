@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">Panduan Pembayaran</h1>
</div>
<section>
    <div class="flex items-center px-4 bg-white justify-center pt-[24px] mb-[47px]">
        <img src="{{ asset('images/header/trusted.png') }}" alt="" class="w-[20px] h-[20px] mr-[12px]">
        <h1 class=" font-interRegular text-[15px]">Trusted Booking</h1>
    </div>
    <div class="flex flex-wrap">
        <div class="basis-7/12 pl-40">
            <img src="{{ asset('images/payment/bca.png') }}" alt="" class=" mb-[40px]">
            <p class=" font-interRegular text-[18px] font-bold mb-[5px]">Virtual Account#</p>
            <div class="flex">
                <p class="text-footer text-[35px] mr-[30px] font-interRegular virtual-akun">8890948593849284959</p>
                <button class="w-[35px] h-[35px] px-2 py-2 button-copy"><img src="{{ asset('images/payment/copy.png') }}" alt="" ></button>
            </div>
            <p class=" font-interRegular text-[18px] font-bold mt-[39px] mb-[5px]">Virtual Account Name#</p>
            <p class="text-footer text-[35px] mr-[30px] font-interRegular">Travel Blizz Trip</p>
            <p class=" font-interRegular text-[18px] font-bold mt-[39px] mb-[5px]">Amount to Pay</p>
            <p class="text-footer text-[35px] mr-[30px] font-interRegular">Rp. 1.000.000</p>

            <p class="mt-[104px] mb-[30px] font-interRegular text-[18px] font-bold"> Cara Pembayaran</p>
            <div class="pb-[50px] lg:pb-[164px]">
                <div id="accordion-color" class=" pr-4 " data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-greyTbliss dark:text-white">
                    <h2 id="accordion-color-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-y-2  border-gray-200 text-g  dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
                            <span>ATM BCA</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                        <div class="py-3 px-2 text-[16px] font-light">
                            <p>1. Masukkan kartu dan PIN Anda.</p>
                            <p>2. Pilih Transaksi Lainnya, lalu Transfer, lalu ke Rek BCA Virtual Account.</p>
                            <p>3. Masukkan nomor Virtual Account Anda 1270200003619011 kemudian klik Benar.</p>
                            <p>4. Cek nama dan nominal pembayaran, apabila telah sesuai, klik Ya.</p>
                            <p>5. Transaki selesai, mohon simpan bukti pembayaran.</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                            <span>BCA Internet Banking (KlikBCA)</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                        <div class="py-3 px-2 font-light text-[16px]">
                            <p>1. Masukkan kartu dan PIN Anda.</p>
                            <p>2. Pilih Transaksi Lainnya, lalu Transfer, lalu ke Rek BCA Virtual Account.</p>
                            <p>3. Masukkan nomor Virtual Account Anda 1270200003619011 kemudian klik Benar.</p>
                            <p>4. Cek nama dan nominal pembayaran, apabila telah sesuai, klik Ya.</p>
                            <p>5. Transaki selesai, mohon simpan bukti pembayaran.</p>
                        </div>
                    </div>
                    <h2 id="accordion-color-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-3 px-2 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                            <span>
                                BCA Mobile Banking (mBCA)
                            </span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                        <div class="py-3 px-2 font-light text-[16px]">
                            <p>1. Masukkan kartu dan PIN Anda.</p>
                            <p>2. Pilih Transaksi Lainnya, lalu Transfer, lalu ke Rek BCA Virtual Account.</p>
                            <p>3. Masukkan nomor Virtual Account Anda 1270200003619011 kemudian klik Benar.</p>
                            <p>4. Cek nama dan nominal pembayaran, apabila telah sesuai, klik Ya.</p>
                            <p>5. Transaki selesai, mohon simpan bukti pembayaran.</p>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div class="basis-5/12 bg-yellowTbliss pl-7 pr-16">
            <h1 class="mt-[49px] mb-[51px] text-[22px] font-bold font-interRegular ">Order Summary</h1>
            <p class="text-[16px] font-bold font-interRegular ">
                Invoice #TRAVELBLIZZ-BCA-2309
            </p>
            <p class="text-[16px] font-bold font-interRegular text-footer border-b border-greyTbliss pb-[41px]">Pay before 27 June 2023 05:04 PM</p>
            <div class="flex mt-[51px] mb-[30px]">
                <p class="text-[16px] font-bold font-interRegular w-1/2 pr-[40px] ">
                    Cultural Walk in Korea 23 - 28 APR 202 Bayar Uang Muka
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/2 text-end">Rp.1.000.000</p>
            </div>
            <p class="text-[16px] font-bold font-interRegular  border-b border-greyTbliss pb-[41px]">1 x IDR 1.000.000</p>
            <div class="flex mt-[51px] mb-[30px]">
                <p class="text-[16px] font-bold font-interRegular w-2/3  text-end">
                    Subtotal
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/3 text-end">Rp.1.000.000</p>
            </div>
            <div class="flex">
                <p class="text-[16px] font-bold font-interRegular w-2/3  text-end">
                    Total Fees
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/3 text-end">Rp.1.000.000</p>
            </div>
            <div class="flex border-t border-greyTbliss pt-[40px] mt-[40px]">
                <p class="text-[16px] font-bold font-interRegular w-2/3  text-end">
                    Total Amount Due
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/3 text-end">Rp.1.000.000</p>
            </div>
            <div class="h-[350px] p-10 bg-footer text-white mt-[117px] mb-[102px] rounded-[20px]">
                <h1 class="text-center mt-[30px] text-[22px]">
                    Konfirmasi Pembayaran
                </h1>
                <p class="text-center mt-[24px] mb-[44px] text-[16px]">
                    Setelah melakukan pembayaran, silakan upload bukti pembayaranmu <a href="" class=" text-authbutton">disini</a> untuk konfirmasi
                </p>
                <div class="flex justify-center mb-[41px]">
                    <img src="{{ asset('images/payment/upload.png') }}" alt="" class=" inline">
                </div>

            </div>
        </div>
    </div>



    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
    @include('web.components.presentational.footer')




    </div>
    @endsection


    @push('javascript-internal')
    <script>
        $(document).ready(function() {

            $('.button-copy').on('click', function(e) {
                var virtualAkun = $('.virtual-akun').text()
                // console.log(virtualAkun)
                // document.execCommand("copy");
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(virtualAkun).select();
                document.execCommand("copy");
                $temp.remove();
            })

            // function copyToClipboard(element) {
            //     var $temp = $("<input>");
            //     $("body").append($temp);
            //     $temp.val($(element).text()).select();
            //     document.execCommand("copy");
            //     $temp.remove();
            // }


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