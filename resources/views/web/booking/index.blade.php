@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">Booking Trip</h1>
</div>
<section>
    <div class="flex items-center px-4 bg-white justify-center pt-[24px]">
        <img src="{{ asset('images/header/trusted.png') }}" alt="" class="w-[20px] h-[20px] mr-[12px]">
        <h1 class=" font-interRegular text-[15px]">Trusted Booking</h1>
    </div>
    <div class="flex flex-wrap">
        <div class="basis-3/12"></div>
        <div class="basis-6/12">
            <h1 class="mb-[18px] mt-[80px]">
                Kamu cukup membayar deposit terlebih dahulu.
            </h1>
            <div class="w-full bg-blueTbliss h-[39px] text-white">
                <p class=" text-center py-2 text-[15px]">
                    Skema Pembayaran
                </p>
            </div>
            <h1 class="mt-[34px]">
                Opsi Pembayaran
            </h1>
            <div class="grid grid-cols-2 gap-x-3 mt-[16px]">
                <div class=" bg-blueTbliss h-[39px] py-[7px] text-[14px] border text-white flex justify-center cursor-pointer dp-button" data-price="1000000">
                    <svg width="17" height="17" viewBox="0 0 17 17" class="mt-[2px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_466_104)">
                            <path d="M7.81378 0H9.17352C9.42887 0.035725 9.69827 0.0293457 9.95873 0.0599671C10.5832 0.144365 11.1926 0.316169 11.7692 0.570324C12.6451 0.928472 13.4538 1.43283 14.1605 2.06184C14.8574 2.67727 15.4513 3.40003 15.9199 4.20279C16.3646 4.96855 16.6885 5.79828 16.88 6.66271C16.9387 7.01035 16.9733 7.36164 16.9834 7.71405C16.9834 7.76764 16.9668 7.82378 17 7.87481V8.89808C16.9656 9.16474 16.9668 9.43523 16.9553 9.70317C16.9236 10.1374 16.8378 10.566 16.7 10.9791C16.3737 12.0812 15.8239 13.1044 15.0849 13.9851C13.8486 15.4721 12.1456 16.4977 10.2524 16.8954C9.9096 16.9481 9.56368 16.9779 9.21693 16.9847C9.15692 16.9847 9.09564 16.9668 9.03819 17H7.87762C7.62227 16.9681 7.36691 16.9719 7.11156 16.9451C6.51897 16.8709 5.93916 16.7168 5.38794 16.4871C4.5468 16.1609 3.76452 15.6997 3.07191 15.1219C2.00971 14.2458 1.17269 13.1285 0.630752 11.8633C0.351316 11.2482 0.162937 10.5957 0.0715341 9.92645C-0.000814329 9.26215 -0.0183229 8.59302 0.0191867 7.92585C0.0204483 7.55753 0.0498999 7.18985 0.107283 6.82603C0.372766 5.47513 0.964946 4.20966 1.83218 3.13997C2.68647 2.0686 3.78542 1.2176 5.03684 0.658361C5.58519 0.407918 6.16052 0.221264 6.75152 0.102072C7.06714 0.0557098 7.38514 0.0271693 7.70398 0.0165867C7.741 0.014035 7.78058 0.0280696 7.81378 0Z" fill="#5C6CEF" />
                            <path d="M5.40603 7.79698C5.50812 7.79516 5.60941 7.8153 5.70303 7.85603C5.79665 7.89675 5.88042 7.95711 5.94865 8.03302C6.49511 8.58165 7.04539 9.12518 7.58673 9.67764C7.68504 9.77844 7.73484 9.78992 7.84208 9.67764C9.14693 8.36177 10.4543 7.05015 11.7643 5.74279C11.8505 5.64124 11.9632 5.56547 12.0898 5.52382C12.2164 5.48217 12.3521 5.47626 12.4818 5.50675C12.6003 5.53564 12.7093 5.59471 12.7981 5.67821C12.887 5.76171 12.9527 5.86678 12.9888 5.98319C13.0249 6.0996 13.0303 6.22338 13.0043 6.34246C12.9783 6.46155 12.9219 6.57188 12.8406 6.66271C12.7218 6.7903 12.5916 6.91789 12.4665 7.04547L8.28256 11.2355C7.9072 11.6119 7.52417 11.6093 7.14625 11.2355C6.40318 10.4929 5.65883 9.75164 4.92087 9.00525C4.83359 8.91971 4.77012 8.81292 4.73673 8.6954C4.70333 8.57789 4.70115 8.45371 4.7304 8.33509C4.75966 8.21648 4.81934 8.10753 4.90356 8.01899C4.98778 7.93044 5.09363 7.86536 5.21069 7.83015C5.27424 7.81133 5.33983 7.8002 5.40603 7.79698Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_466_104">
                                <rect width="17" height="17" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="ml-2">
                        Bayar Uang Muka
                    </span>


                </div>
                <div class=" bg-white h-[39px] py-[7px] text-[14px] text-[#6A6A6A] border border-[#9F9F9F] flex justify-center cursor-pointer full-pay-button" data-price="15000000">
                    <svg width="17" height="17" viewBox="0 0 17 17" class="mt-[2px]" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_466_104)">
                            <path d="M7.81378 0H9.17352C9.42887 0.035725 9.69827 0.0293457 9.95873 0.0599671C10.5832 0.144365 11.1926 0.316169 11.7692 0.570324C12.6451 0.928472 13.4538 1.43283 14.1605 2.06184C14.8574 2.67727 15.4513 3.40003 15.9199 4.20279C16.3646 4.96855 16.6885 5.79828 16.88 6.66271C16.9387 7.01035 16.9733 7.36164 16.9834 7.71405C16.9834 7.76764 16.9668 7.82378 17 7.87481V8.89808C16.9656 9.16474 16.9668 9.43523 16.9553 9.70317C16.9236 10.1374 16.8378 10.566 16.7 10.9791C16.3737 12.0812 15.8239 13.1044 15.0849 13.9851C13.8486 15.4721 12.1456 16.4977 10.2524 16.8954C9.9096 16.9481 9.56368 16.9779 9.21693 16.9847C9.15692 16.9847 9.09564 16.9668 9.03819 17H7.87762C7.62227 16.9681 7.36691 16.9719 7.11156 16.9451C6.51897 16.8709 5.93916 16.7168 5.38794 16.4871C4.5468 16.1609 3.76452 15.6997 3.07191 15.1219C2.00971 14.2458 1.17269 13.1285 0.630752 11.8633C0.351316 11.2482 0.162937 10.5957 0.0715341 9.92645C-0.000814329 9.26215 -0.0183229 8.59302 0.0191867 7.92585C0.0204483 7.55753 0.0498999 7.18985 0.107283 6.82603C0.372766 5.47513 0.964946 4.20966 1.83218 3.13997C2.68647 2.0686 3.78542 1.2176 5.03684 0.658361C5.58519 0.407918 6.16052 0.221264 6.75152 0.102072C7.06714 0.0557098 7.38514 0.0271693 7.70398 0.0165867C7.741 0.014035 7.78058 0.0280696 7.81378 0Z" fill="#5C6CEF" />
                            <path d="M5.40603 7.79698C5.50812 7.79516 5.60941 7.8153 5.70303 7.85603C5.79665 7.89675 5.88042 7.95711 5.94865 8.03302C6.49511 8.58165 7.04539 9.12518 7.58673 9.67764C7.68504 9.77844 7.73484 9.78992 7.84208 9.67764C9.14693 8.36177 10.4543 7.05015 11.7643 5.74279C11.8505 5.64124 11.9632 5.56547 12.0898 5.52382C12.2164 5.48217 12.3521 5.47626 12.4818 5.50675C12.6003 5.53564 12.7093 5.59471 12.7981 5.67821C12.887 5.76171 12.9527 5.86678 12.9888 5.98319C13.0249 6.0996 13.0303 6.22338 13.0043 6.34246C12.9783 6.46155 12.9219 6.57188 12.8406 6.66271C12.7218 6.7903 12.5916 6.91789 12.4665 7.04547L8.28256 11.2355C7.9072 11.6119 7.52417 11.6093 7.14625 11.2355C6.40318 10.4929 5.65883 9.75164 4.92087 9.00525C4.83359 8.91971 4.77012 8.81292 4.73673 8.6954C4.70333 8.57789 4.70115 8.45371 4.7304 8.33509C4.75966 8.21648 4.81934 8.10753 4.90356 8.01899C4.98778 7.93044 5.09363 7.86536 5.21069 7.83015C5.27424 7.81133 5.33983 7.8002 5.40603 7.79698Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_466_104">
                                <rect width="17" height="17" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="ml-2">
                        Bayar Lunas
                    </span>
                </div>
            </div>
            <h1 class="mt-[51px]">
                Bayar DP per-orang, sisanya sesuai skema pembayaran
            </h1>
            <h1 class="mt-2 mb-[30px] font-semibold text-[30px] dp-price ">
                Rp.1.000.000
            </h1>
            <h1 class="mt-2 mb-[30px] font-semibold text-[30px] full-pay-price  hidden">
                Rp.15.000.000
            </h1>
        </div>
    </div>
    <div class="container-lg px-4">
        <div class="flex justify-start ml-[10px] pt-[20px]">
            <img src="{{ asset('images/header/seats.png') }}" alt="" class="w-[30px] h-[30px] mr-[12px]">
            <span>
                Sisa 3 seat!
            </span>
        </div>
    </div>
</section>

<section class="bg-yellowTbliss">
    <div class="container-lg px-4">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-greyTbliss dark:text-gray-400">
                <thead class=" font-interRegular text-sm border-b border-[#9F9F9F]">
                    <tr>
                        <th scope="col" class="pl-0 pr-6 py-3 w-[55%]">
                            Item Pembayaran
                        </th>
                        <th scope="col" class="pl-6 pr-0 py-3 w-[15%]">
                            Harga
                        </th>
                        <th scope="col" class="pl-6 pr-0 py-3 w-[15%]">
                            Jumlah
                        </th>
                        <th scope="col" class="pl-6 pr-0 py-3 w-[15%]">
                            Subtotal
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b border-[#9F9F9F] dark:border-gray-700 cursor-pointer">
                        <th scope="row" class="pl-0 pr-6 py-3 font-medium text-gray-900   ">
                            <div class="flex flex-wrap">
                                <div class="basis-4/12">
                                    <img src="{{ asset('images/header/licensed-image.jpeg') }}" alt="" class="">
                                </div>
                                <div class="basis-8/12 pl-3 mt-8">
                                    <div class="flex mb-2">
                                        <p class="w-[30%]">Nama Trip</p>
                                        <p>:</p>
                                        <p class="pl-1">Cultural Walk in Korea</p>

                                    </div>
                                    <div class="flex mb-2">
                                        <p class="w-[30%]">Tanggal</p>
                                        <p>:</p>
                                        <p class="pl-1">23-28 APR 2023</p>

                                    </div>
                                    <div class="flex mb-2">
                                        <p class="w-[30%]">Opsi Pembayaran</p>
                                        <p>:</p>
                                        <p class="pl-1 status-payment">Bayar Uang Muka</p>
                                        <input type="hidden" name="status" value="1000000" class="input-payment">
                                        <input type="hidden" name="seat" value="3" class="seat-payment">

                                    </div>

                                </div>
                        </th>
                        <td class="pl-6 pr-0 py-4 subtotal-price">
                            Rp.1.000.000
                        </td>
                        <td class="text-justify pl-6 py-4">
                            <input type="number" value="1" class="w-[60px] mt-[10px] input-qty">
                        </td>
                        <td class="pl-6 pr-0 py-4 total-price">
                            Rp.1.000.000
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="btn-group w-full">
            <a class=" w-full h-[49px] mt-[14px] text-white bg-blueTbliss cursor-pointer text-center py-[10px] ">Bayar Sekarang</a>
        </div>
        <div class="btn-group w-full font-interRegular text-[16px] font-normal">
            <a class=" w-full h-[49px] mt-[14px] mb-[14px] text-white bg-[#4CAF50] cursor-pointer text-center py-[10px] ">
                <span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline">
                        <path d="M13.68 2.29933C12.16 0.83 10.16 0 8.03 0C1.91667 0 -1.922 6.62333 1.13067 11.892L0 16L4.22333 14.8987C6.06333 15.8927 7.57067 15.8047 8.034 15.8633C15.1227 15.8633 18.6513 7.28733 13.67 2.32533L13.68 2.29933Z" fill="#ECEFF1" />
                        <path d="M8.04459 14.5007L8.04059 14.5H8.02992C5.90859 14.5 4.55326 13.4954 4.41992 13.4374L1.91992 14.0874L2.58992 11.6574L2.43059 11.4074C1.77059 10.3567 1.41992 9.14669 1.41992 7.90069C1.41992 2.03869 8.58326 -0.892648 12.7286 3.25069C16.8639 7.35069 13.9606 14.5007 8.04459 14.5007Z" fill="#4CAF50" />
                        <path d="M11.6714 9.53795L11.6654 9.58795C11.4648 9.48795 10.4874 9.00995 10.3054 8.94395C9.89676 8.79262 10.0121 8.91995 9.22743 9.81862C9.11076 9.94862 8.99476 9.95862 8.79676 9.86862C8.59676 9.76862 7.95476 9.55862 7.19476 8.87862C6.60276 8.34862 6.20543 7.69862 6.08809 7.49862C5.89276 7.16128 6.30143 7.11328 6.67343 6.40928C6.74009 6.26928 6.70609 6.15928 6.65676 6.05995C6.60676 5.95995 6.20876 4.97995 6.04209 4.58928C5.88209 4.19995 5.71743 4.24928 5.59409 4.24928C5.21009 4.21595 4.92942 4.22128 4.68209 4.47862C3.60609 5.66128 3.87743 6.88128 4.79809 8.17862C6.60743 10.5466 7.57143 10.9826 9.33409 11.5879C9.81009 11.7393 10.2441 11.718 10.5874 11.6686C10.9701 11.608 11.7654 11.1879 11.9314 10.7179C12.1014 10.2479 12.1014 9.85795 12.0514 9.76795C12.0021 9.67795 11.8714 9.62795 11.6714 9.53795Z" fill="#FAFAFA" />
                    </svg>

                </span>
                Tanya Admin Kami</a>
        </div>
    </div>
    <div class="container-lg pb-[50px] lg:pb-[164px] px-4">
        <h1 class=" font-interRegular text-[16px] font-bold text-[#414141] mb-[20px] mt-[35px]">
            Syarat dan Ketentuan
        </h1>
        <div id="accordion-color" class="px-0" data-accordion="collapse" data-active-classes="bg-transparent dark:bg-gray-800 text-authbutton dark:text-white">
            <h2 id="accordion-color-heading-1">
                <button type="button" class="flex items-center justify-between w-full py-3 px-0 font-medium text-left text-[18px]  text-gray-500 border-y-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100  dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-1" aria-expanded="false" aria-controls="accordion-color-body-1">
                    <span>Pendaftaran & pembayaran</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-1" class="hidden" aria-labelledby="accordion-color-heading-1">
                <div class="py-3 px-0 text-[16px] font-light">
                    <div class=" font-bold mb-2">When will my card be charged?</div>
                    <p>Some listings are "Request to Book" vs "Instant Book". For "Requests to Book" listings, your card will be charged when your request is confirmed (usually within 24 hours of your request being made). For "Instant Book" listings, your card will be charged at the time your booking is made.</p>
                    <div class="font-bold mb-2">Can I trust you with my card details?</div>
                    <p>We take security very seriously and protect your security in two ways. First, all pages on tbliss.com run on HTTPS which provides a secure, encrypted connection between your internet browser and tbliss.com. HTTPS is the global standard used to protect highly confidential online transactions such as online banking services. Second, we use Stripe, a global leading payment processing platform, for our payment services at tbliss.com. Stripe is certified to PCI Service Provider Level 1, which is the most stringent certification available in the payments industry worldwide. </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-2">
                <button type="button" class="flex items-center justify-between w-full py-3 px-0 font-medium text-left text-[18px]  text-gray-500 border-b-2  border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
                    <span>Deviasi</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
                <div class="py-3 px-2 font-light text-[16px]">
                    <div class=" font-bold mb-2">Covid Cancellation Policy</div>
                    <p>As travellers ourselves, we understand how stressful this pandemic has been when it comes to making plans. That is why we want to be fair to all in the event of sudden changes — to the local businesses, to the community, and to YOU.</p>
                    <div class="font-bold mb-2">Usual Cancellations and Changes</div>
                    <p>
                        Our local partners set their own cancellation and rescheduling policies. Please do look at the Option page to see what the specific policy is. Often, our local partners need to make payment for the logistics of your experience (e.g. payment for staff, for materials) upon confirmation of the experience, so they would be out of pocket in the event of any rescheduling or cancellation.
                    </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-3">
                <button type="button" class="flex items-center justify-between w-full py-3 px-0 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
                    <span>
                        Pembatalan
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
                <div class="py-3 px-2 font-light text-[16px]">
                    <div class=" font-bold mb-2">I'm travelling alone, will I be safe?</div>
                    <p>We don't list any places that we haven't been to ourselves or that we think might be unsafe. We also get to know each and every one of the local operators that we list on a personal basis so that we know that you're in good hands. As frequent solo travellers, we are super vigilant about our own safety when we travel, and we take that approach when crafting tbliss.com as well. If you have any specific concerns, please do contact us and we're happy to offer travel safety tips or answer any questions so that you can be prepared for your trip. </p>
                    <div class="font-bold mb-2">Do I need to get travel insurance?</div>
                    <p>We're big fans of travel insurance because it has given us peace of mind on many of our trips. Some of our local operators do have insurance recommendations for their specific activity so if you need any recommendations, please contact us and we can see if they have any recommendations for you. </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-4">
                <button type="button" class="flex items-center justify-between w-full py-3 px-0 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-4" aria-expanded="false" aria-controls="accordion-color-body-4">
                    <span>
                        Pengembalian Uang
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-4" class="hidden" aria-labelledby="accordion-color-heading-4">
                <div class="py-3 px-2 font-light text-[16px]">
                    <div class=" font-bold mb-2">I love your mission, are you looking to hire?</div>
                    <p>Yes, we're always looking for great people to join our team, whether as an intern, a freelancer or a full-time member of the team. We know that there are so many people out there - like you! - who would love to combine their love of travel with their skills, whatever they may be. If you're a traveller who believes that travel can change the world, we would love to hear from you!</p>
                    <div class="font-bold mb-2">How do I apply?</div>
                    <p>It's really simple. Just write to us at <a style="font-size: 17px; color: #2ec4dd;" href="#">join@tbliss.com</a> and let us know what skills you would like to contribute to Tbliss, what you're hoping to learn and why you love difficult journeys. We can't wait to hear from you! </p>
                </div>
            </div>
            <h2 id="accordion-color-heading-5">
                <button type="button" class="flex items-center justify-between w-full py-3 px-0 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-5" aria-expanded="false" aria-controls="accordion-color-body-5">
                    <span>
                        Hak dan Tanggung Jawab
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-5" class="hidden" aria-labelledby="accordion-color-heading-5">
                <div class="py-3 px-2 font-light text-[16px]">
                    <p>Sure! For press inquiries, please contact <a style="font-size: 16px; color: #26527F;" href="#">press@tbliss.com</a>. We would love to speak to you and answer any questions you may have.</p>
                </div>
            </div>
            <h2 id="accordion-color-heading-6">
                <button type="button" class="flex items-center justify-between w-full py-3 px-0 font-medium text-left text-[18px]  text-gray-500 border-b-2 border-gray-200   dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-6" aria-expanded="false" aria-controls="accordion-color-body-6">
                    <span>
                        Lainnya
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus tw-text-cyan">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </h2>
            <div id="accordion-color-body-6" class="hidden" aria-labelledby="accordion-color-heading-6">
                <div class="py-3 px-2 font-light text-[16px]">
                    <p>Sure! For press inquiries, please contact <a style="font-size: 16px; color: #26527F;" href="#">press@tbliss.com</a>. We would love to speak to you and answer any questions you may have.</p>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- <section>
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
</section> -->

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

        $('.dp-button').on('click', function(e) {
            $(this).removeClass('text-[#6A6A6A]')
            $(this).removeClass('bg-white')
            $(this).addClass('bg-blueTbliss')
            $(this).addClass('text-white')
            var subtotalPrice = $(this).data('price')
            var totalPrice = subtotalPrice * 1
            $('.full-pay-button').removeClass('bg-blueTbliss')
            $('.full-pay-button').removeClass('text-white')
            $('.full-pay-button').removeClass('border-[#9F9F9F]')
            $('.dp-price').removeClass('hidden')
            $('.full-pay-price').addClass('hidden')
            $('.status-payment').empty()
            $('.status-payment').append('Bayar Uang Muka')
            $('.input-payment').val(subtotalPrice)
            $('.input-payment').change()
            $('.input-qty').val(1)
            $('.input-qty').change()
            $('.subtotal-price').val(subtotalPrice.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            }))
            $('.subtotal-price').change()
            $('.total-price').empty()
            $('.total-price').append(totalPrice.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            }))
        })

        $('.full-pay-button').on('click', function(e) {
            $(this).removeClass('text-[#6A6A6A]')
            $(this).removeClass('bg-white')
            $(this).addClass('bg-blueTbliss')
            $(this).addClass('text-white')
            var subtotalPrice = $(this).data('price')
            var totalPrice = subtotalPrice * 1
            $('.dp-button').removeClass('bg-blueTbliss')
            $('.dp-button').removeClass('text-white')
            $('.dp-button').removeClass('border-[#9F9F9F]')
            $('.full-pay-price').removeClass('hidden')
            $('.dp-price').addClass('hidden')
            $('.status-payment').empty()
            $('.status-payment').append('Bayar Lunas')
            $('.input-payment').val(subtotalPrice)
            $('.input-payment').change()
            $('.input-qty').val(1)
            $('.input-qty').change()
            $('.subtotal-price').empty()
            $('.subtotal-price').append(subtotalPrice.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            }))
            $('.total-price').empty()
            $('.total-price').append(totalPrice.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            }))
        })

        $('.input-qty').keyup(function() {
            var numbers = $(this).val()
            // console.log(numbers)
            // console.log(this)
            var inputPayment = $('.input-payment').val()
            // console.log(inputPayment)
            var seat = $('.seat-payment').val()
            if (numbers === '') {
                var totalPrice = inputPayment * 1
            } else {
                var totalPrice = inputPayment * numbers
            }
            if(numbers >= seat){
                console.log(numbers)
                $(this).val(seat)
                $(this).change()
                var totalPrice = inputPayment * seat
            }

            // console.log(totalPrice)


            $('.total-price').empty()
            $('.total-price').append(totalPrice.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            }))

        })
        // $(document).on('change', '.input-qty', function() {
        //     console.log(this)
        // });

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