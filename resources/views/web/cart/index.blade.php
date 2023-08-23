@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">Profil Kamu</h1>
</div>
<section>
    <div class="container-lg my-4 mx-1 lg:mx-5">
        <div class="grid grid-cols-3 gap-4 ">
            <div class="text-lg font-normal text-center p-3 mr-[30px] lg:mr-0 rounded-lg hidden lg:block">
                <div class="flex justify-start mr-2 mb-3 ml-[30%]">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100" fill="#212529" viewBox="0 0 100 100" class="inline" height="48" width="48">
                            <circle cx="50.1" cy="39.5" r="16.7"></circle>
                            <path d="m50 3.6c-25.5 0-46.3 20.7-46.3 46.3s20.8 46.3 46.3 46.3 46.3-20.8 46.3-46.3-20.8-46.3-46.3-46.3zm27.2 75.5c-3.4-9.1-10.8-18.8-27.2-18.8-16.3 0-23.8 9.7-27.2 18.8-7.8-7.3-12.8-17.7-12.8-29.2 0-22 17.9-40 40-40s40 17.9 40 40c0 11.5-5 21.9-12.8 29.2z"></path>
                        </svg>

                    </span>

                    <div class=" ml-4 align-self-center">
                        Selamat datang, <br>
                        <b>{{Auth::user()->name}}</b>
                    </div>
                </div>

                <div class="account-sidebar__item ml-[30%]">
                    <a class="flex justify-start mb-3 " href="{{route('home.profile')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" fill="none" class="mr-2 align-bottom">
                            <path d="M17.5441 10.9127C17.5441 12.1335 16.5544 13.1232 15.3336 13.1232C14.1128 13.1232 13.123 12.1335 13.123 10.9127C13.123 9.69183 14.1128 8.70215 15.3336 8.70215C16.5544 8.70215 17.5441 9.69183 17.5441 10.9127Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M29.333 15.333C29.333 23.065 23.065 29.333 15.333 29.333C7.60101 29.333 1.33301 23.065 1.33301 15.333C1.33301 7.60101 7.60101 1.33301 15.333 1.33301C23.065 1.33301 29.333 7.60101 29.333 15.333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.3322 16.0693C17.9306 16.0693 20.0803 17.9909 20.438 20.4904H10.2266C10.5841 17.9909 12.7338 16.0693 15.3322 16.0693Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <span class="align-middle tw-leading-none ml-4">Profile</span>
                    </a>
                </div>
                <div class="account-sidebar__item ml-[30%]">
                    <a class="flex justify-start mb-3 text-authbutton" href="{{route('home.cart')}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" fill="none" class="mr-2 align-bottom">
                            <path d="M22.2917 18.2843L20.016 12.9337L20.0495 12.9025C20.8688 12.1673 22.2055 10.6512 21.9492 8.79021C21.935 8.68659 21.8872 8.59047 21.8133 8.51652C21.7393 8.44257 21.6432 8.39485 21.5395 8.38065C19.6686 8.12678 18.157 9.45843 17.3976 10.3135L12.0435 8.03816C11.9555 8.00073 11.8582 7.99054 11.7642 8.0089C11.6703 8.02725 11.584 8.07332 11.5165 8.14115L10.3187 9.33868C10.2725 9.38216 10.2353 9.43441 10.2094 9.49238C10.1835 9.55036 10.1693 9.6129 10.1678 9.67639C10.1678 9.73959 10.1802 9.80219 10.2045 9.86056C10.2288 9.91893 10.2643 9.97192 10.3092 10.0165L14.0366 13.748L11.9262 15.8557L8.3999 15.2329C8.32421 15.2195 8.24639 15.2244 8.173 15.2473C8.09962 15.2703 8.03283 15.3105 7.97829 15.3647L7.13984 16.2053C7.08599 16.2593 7.04581 16.3254 7.02264 16.3981C6.99947 16.4707 6.99399 16.5478 7.00664 16.623C7.01929 16.6982 7.04972 16.7693 7.09538 16.8304C7.14105 16.8915 7.20064 16.9407 7.2692 16.9742L11.3728 18.9549L13.3443 23.0576C13.3775 23.1287 13.4276 23.1905 13.4903 23.2377C13.5529 23.2849 13.6262 23.316 13.7037 23.3283C13.7308 23.3306 13.758 23.3306 13.7851 23.3283C13.912 23.3277 14.0335 23.2769 14.1229 23.187L14.9637 22.3487C15.0179 22.2941 15.0582 22.2274 15.0811 22.154C15.104 22.0806 15.109 22.0028 15.0955 21.9272L14.4798 18.4711L16.5999 16.3155L20.3034 20.0183C20.348 20.0631 20.401 20.0987 20.4594 20.1229C20.5178 20.1472 20.5804 20.1596 20.6436 20.1596C20.7705 20.1591 20.8919 20.1082 20.9814 20.0183L22.1791 18.8208C22.2506 18.7536 22.2997 18.6661 22.3198 18.5702C22.3399 18.4743 22.3301 18.3745 22.2917 18.2843ZM11.3249 9.67639L11.9645 9.0369L16.7101 11.0535C16.5304 11.2428 16.3412 11.4392 16.1352 11.6451L14.7146 13.0654L11.3249 9.67639ZM13.6222 17.9657C13.5688 18.0202 13.5292 18.0867 13.5067 18.1596C13.4842 18.2325 13.4795 18.3097 13.4929 18.3848L14.1085 21.8385L13.9217 22.023L12.1633 18.3896C12.1163 18.2924 12.0378 18.2139 11.9405 18.1669L8.2945 16.4065L8.47896 16.2197L12.0052 16.8472C12.0809 16.8607 12.1587 16.8558 12.2321 16.8328C12.3055 16.8099 12.3723 16.7697 12.4268 16.7155L16.8131 12.3325C17.2922 11.8535 17.7114 11.408 18.0708 10.9961C18.5259 10.4763 19.6686 9.34347 21.0221 9.31952C20.9933 10.5793 20.0231 11.6499 19.4075 12.1936C18.8541 12.6942 18.4037 13.1205 17.9941 13.5372L13.6222 17.9657ZM20.6436 18.9932L17.273 15.6329L18.6768 14.2079C18.8637 14.0186 19.0601 13.8246 19.2685 13.6259L21.2832 18.3633L20.6436 18.9932Z" fill="currentColor"></path>
                            <path d="M28.5 15.5947C28.5 23.0506 22.4558 29.0947 15 29.0947C7.54416 29.0947 1.5 23.0506 1.5 15.5947C1.5 8.13888 7.54416 2.09473 15 2.09473C22.4558 2.09473 28.5 8.13888 28.5 15.5947Z" stroke="currentColor"></path>
                        </svg>
                        <span class="align-middle tw-leading-none ml-4">Data Pemesanan</span>
                    </a>
                </div>

            </div>
            <div class=" text-lg font-bold text-center p-3 rounded-lg col-span-3 lg:col-span-2">
                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left text-greyTbliss dark:text-gray-400">
                        <thead class=" font-interRegular text-sm border-b border-[#9F9F9F]">
                            <tr>
                                <th>Tanggal Pemesanan</th>
                                <th scope="col" class="pl-0 pr-6 py-3 ">
                                    No. Invoice
                                </th>
                                <th>Nama Trip</th>
                                <th>Pax</th>
                                <th scope="col" class="pl-6 pr-0 py-3">
                                    Status
                                </th>
                                <th scope="col" class="pl-0 pr-0 py-3">

                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($histories as $history)
                            <tr class="border-b border-[#9F9F9F] dark:border-gray-700 cursor-pointer">
                                <th scope="row" class="pl-0 pr-6 py-3 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    {{$history->tanggal_pembayaran_fix}}
                                </th>
                                <th scope="row" class="pl-0 pr-6 py-3 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                    Invoice #{{$history->invoice_id}}
                                </th>
                                <th>
                                    @if($history->trip != null && $history->status == 'Lunas' )
                                    <a href="{{route('home.invoice', $history->invoice_id)}}" class="hover:text-footer" target="_blank">
                                        {{$history->trip->title}}
                                    </a>
                                    @elseif($history != null && $history->status != 'lunas')
                                    {{$history->trip->title}}
                                    @else
                                    null
                                    @endif
                                </th>
                                <th>{{$history->qty}}</th>
                                @if($history->status == 'Menunggu Pembayaran')
                                <td class="pl-6 pr-0 py-4 text-footer">
                                    <a href="{{route('upload', $history->encrypt_id)}}"  >
                                        Menunggu <br> Pembayaran
                                    </a>
                                    <div id="tooltip-light" role="tooltip" class="absolute z-10 invisible inline-block px-3 text-xs font-small text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Unggah bukti
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <div id="tooltip-light-1" role="tooltip" class="absolute z-10 invisible inline-block px-3 text-xs font-small text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Unggah ulang bukti
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                    <div id="tooltip-light-2" role="tooltip" class="absolute z-10 invisible inline-block px-3 text-xs font-small text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
                                        Unduh Invoice
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>

                                </td>
                                @elseif($history->status == 'Menunggu Verifikasi')
                                <td class="pl-6 pr-0 py-4 text-greyDetTbliss">
                                    Menunggu <br> Verifikasi
                                </td>
                                @else
                                <td class="pl-6 pr-0 py-4 text-[#5C6CEF]">
                                    Lunas
                                </td>
                                @endif
                                <th class="pl-2 pr-10">
                                    @if($history->trip != null && $history->status == 'Lunas' )
                                    <a href="{{route('home.invoice', $history->invoice_id)}}" data-tooltip-target="tooltip-light-2" data-tooltip-style="light" class=" text-greyDetTbliss underline  font-medium  mx-auto text-xs  py-2   focus:outline-none  hover:text-footer" target="_blank">
                                        Unduh <br> Invoice
                                    </a>
                                    @elseif($history->status == 'Menunggu Pembayaran')
                                    <a href="{{route('upload', $history->encrypt_id)}}" data-tooltip-target="tooltip-light" data-tooltip-style="light" class="text-greyDetTbliss underline  font-medium  mx-auto text-xs  py-2   focus:outline-none  hover:text-footer">
                                        Unggah <br> bukti
                                    </a>
                                    
                                    @elseif($history->status == 'Menunggu Verifikasi')
                                    <a href="{{route('upload', $history->encrypt_id)}}" data-tooltip-target="tooltip-light-1" data-tooltip-style="light" class="text-greyDetTbliss underline  font-medium  mx-auto text-xs  py-2   focus:outline-none  hover:text-footer">
                                    Unggah Ulang <br> Bukti Transfer
                                    </a>
                                   
                                    @endif
                                </th>
                            </tr>
                            @endforeach
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