@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">Panduan Pembayaran</h1>
</div>
<section>
    <div class="flex items-center px-4 bg-white justify-center pt-[24px] mb-[47px]">
        <img src="{{ asset('images/header/trusted.png') }}" alt="" class="w-[40px] h-[40px] mr-[12px]">
        <h1 class=" font-interRegular text-[15px]">Trusted Booking</h1>
    </div>
    <div class="flex flex-wrap">
        <div class="basis-full lg:basis-7/12 pl-2 lg:pl-40">
            <img src="{{ asset('images/payment/bca.png') }}" alt="" class=" mb-[40px]">
            <p class=" font-interRegular text-[18px] font-bold mb-[5px]">Virtual Account#</p>
            <div class="flex">
                <p class="text-footer text-[35px] mr-0 lg:mr-[30px] font-interRegular virtual-akun">8890948593849284959</p>
                <button class="w-[35px] h-[35px] px-2 py-2 button-copy"><img src="{{ asset('images/payment/copy.png') }}" alt="" ></button>
            </div>
            <p class=" font-interRegular text-[18px] font-bold mt-[39px] mb-[5px]">No. Rekening</p>
            <p class="text-footer text-[35px] mr-[30px] font-interRegular">an. PT. Travel Blizz Trip</p>
            <p class=" font-interRegular text-[18px] font-bold mt-[39px] mb-[5px]">Total </p>
            <p class="text-footer text-[35px] mr-[30px] font-interRegular">@currency($payment->grand_total)</p>

            <p class="mt-[104px] mb-[30px] font-interRegular text-[18px] font-bold"> Cara Pembayaran</p>
            <div class="pb-[50px] lg:pb-[164px] w-[90%] lg:w-full">
                <div id="accordion-color" class=" pr- lg:pr-4" data-accordion="collapse" data-active-classes="bg-white dark:bg-gray-800 text-greyTbliss dark:text-white">
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
        <div class="basis-full lg:basis-5/12 bg-yellowTbliss pl-3 lg:pl-7 pr-3 lg:pr-16">
            <h1 class="mt-[49px] mb-[51px] text-[22px] font-bold font-interRegular ">Ringkasan Pemesana</h1>
            <p class="text-[16px] font-bold font-interRegular ">
                Invoice #{{$payment->invoice_id}}
            </p>
            <!-- <p class="text-[16px] font-bold font-interRegular text-footer border-b border-greyTbliss pb-[41px]">Pay before 27 June 2023 05:04 PM</p> -->
            <p class="text-[16px] font-bold font-interRegular text-footer border-b border-greyTbliss pb-[41px]">bayar sebelum tanggal {{$dueDate}}</p>
            <div class="flex mt-[51px] mb-[30px]">
                <p class="text-[16px] font-bold font-interRegular w-3/4 pr-[40px] ">
                    {{$payment->trip->title}} {{ date('d', strtotime($payment->trip->date_from)) }} - {{ date('d M Y', strtotime($payment->trip->date_to)) }} {{$status}}
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/2 text-end">@currency($payment->total)</p>
            </div>
            <p class="text-[16px] font-bold font-interRegular">{{$payment->qty}} x @currency($payment->price_dp)</p>
            @if($payment->visa != 0)
            <div class="flex mt-[51px] mb-[30px]">
                <p class="text-[16px] font-bold font-interRegular w-3/4 pr-[40px] ">
                    Visa Korea 
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/2 text-end">@currency($payment->visa)</p>
            </div>
            @endif
            @if($payment->total_tipping !=0)
            <div class="flex mt-[51px] mb-[30px]">
                <p class="text-[16px] font-bold font-interRegular w-3/4 pr-[40px] ">
                    Tipping 
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/2 text-end">@currency($payment->total_tipping)</p>
            </div>
            @endif
            <div class="flex mt-[51px] mb-[30px]">
                <p class="text-[16px] font-bold font-interRegular w-2/3  text-end">
                    Subtotal
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/3 text-end">@currency($payment->grand_total)</p>
            </div>
            <div class="flex">
                <p class="text-[16px] font-bold font-interRegular w-2/3  text-end">
                    Total Fees
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/3 text-end">@currency($payment->grand_total)</p>
            </div>
            <div class="flex border-t border-greyTbliss pt-[40px] mt-[40px]">
                <p class="text-[16px] font-bold font-interRegular w-2/3  text-end">
                    Total Amount Due
                </p>
                <p class="text-[16px] font-bold font-interRegular w-1/3 text-end">@currency($payment->grand_total)</p>
            </div>
            <div class="h-[400px] lg:h-[350px] p-4 lg:p-10 bg-footer text-white mt-[117px] mb-[102px] rounded-[20px]">
                <h1 class="text-center mt-[30px] text-[22px]">
                    Konfirmasi Pembayaran
                </h1>
                <p class="text-center mt-[24px] mb-[44px] text-[16px]">
                    Setelah melakukan pembayaran, silakan upload bukti pembayaranmu <a href="{{route('upload' ,['ids'=>$id])}}" class=" text-authbutton">disini</a> untuk konfirmasi
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
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val(virtualAkun).select();
                document.execCommand("copy");
                $temp.remove();
            })
        });
    </script>
    @endpush