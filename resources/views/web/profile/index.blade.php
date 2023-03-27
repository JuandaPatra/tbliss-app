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


    </div>


</section>

<section>
    <div class="container-lg my-4 mx-5">
        <div class="grid grid-cols-3 gap-4 ">
            <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-3 rounded-lg ">
                <div class="media mr-2 mb-3">
                    <span class="inline">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100" fill="#212529" viewBox="0 0 100 100" class="inline" height="48" width="48">
                            <circle cx="50.1" cy="39.5" r="16.7"></circle>
                            <path d="m50 3.6c-25.5 0-46.3 20.7-46.3 46.3s20.8 46.3 46.3 46.3 46.3-20.8 46.3-46.3-20.8-46.3-46.3-46.3zm27.2 75.5c-3.4-9.1-10.8-18.8-27.2-18.8-16.3 0-23.8 9.7-27.2 18.8-7.8-7.3-12.8-17.7-12.8-29.2 0-22 17.9-40 40-40s40 17.9 40 40c0 11.5-5 21.9-12.8 29.2z"></path>
                        </svg>

                    </span>

                    <div class="media-body align-self-center">
                        Welcome back, <br>
                        <b>Juanda Patra</b>
                    </div>
                </div>

                <div class="account-sidebar__item">
                    <a class="account-sidebar__link active" href="/account/profile">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" fill="none" class="mr-2 align-bottom">
                            <path d="M17.5441 10.9127C17.5441 12.1335 16.5544 13.1232 15.3336 13.1232C14.1128 13.1232 13.123 12.1335 13.123 10.9127C13.123 9.69183 14.1128 8.70215 15.3336 8.70215C16.5544 8.70215 17.5441 9.69183 17.5441 10.9127Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M29.333 15.333C29.333 23.065 23.065 29.333 15.333 29.333C7.60101 29.333 1.33301 23.065 1.33301 15.333C1.33301 7.60101 7.60101 1.33301 15.333 1.33301C23.065 1.33301 29.333 7.60101 29.333 15.333Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.3322 16.0693C17.9306 16.0693 20.0803 17.9909 20.438 20.4904H10.2266C10.5841 17.9909 12.7338 16.0693 15.3322 16.0693Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>

                        <span class="align-middle tw-leading-none">Profile</span>
                    </a>
                </div>
                <div class="account-sidebar__item">
                    <a class="account-sidebar__link " href="https://www.seeksophie.com/account/credits">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none" class="mr-2 align-bottom">
                            <path d="M8.06012 7.51953C7.26859 7.51953 6.62012 8.168 6.62012 8.95953V19.2195C6.62012 19.9113 7.18831 20.4795 7.88012 20.4795H20.1201C20.8119 20.4795 21.3801 19.9113 21.3801 19.2195V10.9395C21.3801 10.2477 20.8119 9.67953 20.1201 9.67953H19.2201V7.87953C19.2201 7.69104 19.0486 7.51955 18.8601 7.51953H8.06012ZM8.06012 8.23953H18.5001V9.67953H8.06012C7.65501 9.67953 7.34012 9.36464 7.34012 8.95953C7.34012 8.55442 7.65501 8.23953 8.06012 8.23953ZM7.34012 10.2026C7.55232 10.3262 7.79833 10.3995 8.06012 10.3995C12.1145 10.3959 16.6354 10.3995 20.1201 10.3995C20.4255 10.3995 20.6601 10.6341 20.6601 10.9395V13.0995H15.4401C14.9477 13.0995 14.5401 13.5072 14.5401 13.9995V16.1595C14.5401 16.6519 14.9477 17.0595 15.4401 17.0595H20.6601V19.2195C20.6601 19.5249 20.4255 19.7595 20.1201 19.7595H7.88012C7.57473 19.7595 7.34012 19.5249 7.34012 19.2195V10.2026ZM15.4401 13.8195H20.6601V16.3395H15.4401C15.3342 16.3395 15.2601 16.2655 15.2601 16.1595V13.9995C15.2601 13.8936 15.3342 13.8193 15.4401 13.8195ZM17.2401 14.3595C16.8425 14.3595 16.5201 14.6819 16.5201 15.0795C16.5201 15.4772 16.8425 15.7995 17.2401 15.7995C17.6378 15.7995 17.9601 15.4772 17.9601 15.0795C17.9601 14.6819 17.6378 14.3595 17.2401 14.3595Z" fill="currentColor"></path>
                            <circle cx="14" cy="14" r="13.5" stroke="currentColor"></circle>
                        </svg>

                        <span class="align-middle tw-leading-none">Account Credits</span>
                    </a>
                </div>
                <div class="account-sidebar__item">
                    <a class="account-sidebar__link " href="/account/trips">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 30 30" fill="none" class="mr-2 align-bottom">
                            <path d="M22.2917 18.2843L20.016 12.9337L20.0495 12.9025C20.8688 12.1673 22.2055 10.6512 21.9492 8.79021C21.935 8.68659 21.8872 8.59047 21.8133 8.51652C21.7393 8.44257 21.6432 8.39485 21.5395 8.38065C19.6686 8.12678 18.157 9.45843 17.3976 10.3135L12.0435 8.03816C11.9555 8.00073 11.8582 7.99054 11.7642 8.0089C11.6703 8.02725 11.584 8.07332 11.5165 8.14115L10.3187 9.33868C10.2725 9.38216 10.2353 9.43441 10.2094 9.49238C10.1835 9.55036 10.1693 9.6129 10.1678 9.67639C10.1678 9.73959 10.1802 9.80219 10.2045 9.86056C10.2288 9.91893 10.2643 9.97192 10.3092 10.0165L14.0366 13.748L11.9262 15.8557L8.3999 15.2329C8.32421 15.2195 8.24639 15.2244 8.173 15.2473C8.09962 15.2703 8.03283 15.3105 7.97829 15.3647L7.13984 16.2053C7.08599 16.2593 7.04581 16.3254 7.02264 16.3981C6.99947 16.4707 6.99399 16.5478 7.00664 16.623C7.01929 16.6982 7.04972 16.7693 7.09538 16.8304C7.14105 16.8915 7.20064 16.9407 7.2692 16.9742L11.3728 18.9549L13.3443 23.0576C13.3775 23.1287 13.4276 23.1905 13.4903 23.2377C13.5529 23.2849 13.6262 23.316 13.7037 23.3283C13.7308 23.3306 13.758 23.3306 13.7851 23.3283C13.912 23.3277 14.0335 23.2769 14.1229 23.187L14.9637 22.3487C15.0179 22.2941 15.0582 22.2274 15.0811 22.154C15.104 22.0806 15.109 22.0028 15.0955 21.9272L14.4798 18.4711L16.5999 16.3155L20.3034 20.0183C20.348 20.0631 20.401 20.0987 20.4594 20.1229C20.5178 20.1472 20.5804 20.1596 20.6436 20.1596C20.7705 20.1591 20.8919 20.1082 20.9814 20.0183L22.1791 18.8208C22.2506 18.7536 22.2997 18.6661 22.3198 18.5702C22.3399 18.4743 22.3301 18.3745 22.2917 18.2843ZM11.3249 9.67639L11.9645 9.0369L16.7101 11.0535C16.5304 11.2428 16.3412 11.4392 16.1352 11.6451L14.7146 13.0654L11.3249 9.67639ZM13.6222 17.9657C13.5688 18.0202 13.5292 18.0867 13.5067 18.1596C13.4842 18.2325 13.4795 18.3097 13.4929 18.3848L14.1085 21.8385L13.9217 22.023L12.1633 18.3896C12.1163 18.2924 12.0378 18.2139 11.9405 18.1669L8.2945 16.4065L8.47896 16.2197L12.0052 16.8472C12.0809 16.8607 12.1587 16.8558 12.2321 16.8328C12.3055 16.8099 12.3723 16.7697 12.4268 16.7155L16.8131 12.3325C17.2922 11.8535 17.7114 11.408 18.0708 10.9961C18.5259 10.4763 19.6686 9.34347 21.0221 9.31952C20.9933 10.5793 20.0231 11.6499 19.4075 12.1936C18.8541 12.6942 18.4037 13.1205 17.9941 13.5372L13.6222 17.9657ZM20.6436 18.9932L17.273 15.6329L18.6768 14.2079C18.8637 14.0186 19.0601 13.8246 19.2685 13.6259L21.2832 18.3633L20.6436 18.9932Z" fill="currentColor"></path>
                            <path d="M28.5 15.5947C28.5 23.0506 22.4558 29.0947 15 29.0947C7.54416 29.0947 1.5 23.0506 1.5 15.5947C1.5 8.13888 7.54416 2.09473 15 2.09473C22.4558 2.09473 28.5 8.13888 28.5 15.5947Z" stroke="currentColor"></path>
                        </svg>

                        <span class="align-middle tw-leading-none">Trips</span>
                    </a>
                </div>
                <div class="account-sidebar__item">
                    <a class="account-sidebar__link " href="/account/referral">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 32 32" fill="none" class="mr-2 align-bottom">
                            <path d="M13.5624 10.5205C15.4384 10.5205 16.925 12.0071 16.925 13.883C16.925 15.0865 16.2879 16.1837 15.226 16.7854C17.3143 17.4579 18.8717 19.2985 19.1195 21.4576C19.1549 21.67 19.0133 21.8469 18.8009 21.8469C18.6239 21.8823 18.447 21.7407 18.4116 21.5638C18.1284 19.0861 16.0401 17.2456 13.5624 17.2456C11.0848 17.2456 8.99648 19.0861 8.71332 21.5638C8.67793 21.7407 8.50095 21.8823 8.32398 21.8469C8.11161 21.8469 7.97003 21.67 8.00542 21.4576C8.25319 19.2985 9.81057 17.4579 11.8989 16.7854C10.837 16.1837 10.1999 15.0865 10.1999 13.883C10.1999 12.0071 11.7219 10.5205 13.5624 10.5205ZM13.5624 11.2284C12.1112 11.2284 10.9078 12.3964 10.9078 13.883C10.9078 15.3342 12.1112 16.5377 13.5624 16.5377C15.0136 16.5377 16.2171 15.3342 16.2171 13.883C16.2171 12.3964 15.0136 11.2284 13.5624 11.2284Z" fill="currentColor"></path>
                            <path d="M17.9512 12.3258C17.9512 12.5028 17.7388 12.6443 17.5619 12.6089C17.3849 12.6089 17.2433 12.432 17.2787 12.2196C17.4911 10.8038 18.6945 9.77734 20.1103 9.77734C21.7031 9.77734 22.9773 11.0516 22.9773 12.6443C22.9773 13.6708 22.4464 14.5911 21.6677 15.0866C23.5082 15.7237 24.8887 17.4935 24.8887 19.5818C24.8887 19.7941 24.7117 19.9357 24.5347 19.9357C24.3223 19.9357 24.1807 19.7941 24.1807 19.5818C24.1807 17.3519 22.3402 15.5467 20.1103 15.5467C19.0131 15.5467 17.9866 15.9715 17.2433 16.7502C17.1017 16.8918 16.854 16.8918 16.7478 16.7502C16.6062 16.6086 16.6062 16.3962 16.7478 16.2546C17.2433 15.7237 17.8804 15.3344 18.5883 15.0866C18.199 14.8388 17.845 14.4849 17.5973 14.0955C17.5265 13.9186 17.5619 13.7062 17.7388 13.6C17.9158 13.4938 18.1282 13.5646 18.2344 13.7416C18.6237 14.4141 19.3316 14.8388 20.1103 14.8388C21.3137 14.8388 22.2694 13.8478 22.2694 12.6443C22.2694 11.4409 21.3137 10.4852 20.1103 10.4852C19.0485 10.4852 18.1282 11.2639 17.9512 12.3258Z" fill="currentColor"></path>
                            <circle cx="16.5557" cy="17.4443" r="13.5" stroke="currentColor"></circle>
                        </svg>

                        <span class="align-middle tw-leading-none">Referral</span>
                    </a>
                </div>

            </div>
            <div class="  text-green-500 text-lg font-bold text-center p-3 rounded-lg col-span-2">
                <h1 class="tw-text-3xl md:tw-text-5xl font-weight-bold mb-3 mb-md-4 tw-leading-none">Profile</h1>

                <form id="js-form-user" enctype="multipart/form-data" action="/account/profile" accept-charset="UTF-8" method="post" novalidate="novalidate"><input type="hidden" name="_method" value="patch" autocomplete="off"><input type="hidden" name="authenticity_token" value="rdoKeyBS6VmJDg8gQP-Pvo2AES0WJmhvXBDA_XSpGzpVCN_S4WcwmVsqo8PjenCxLBowZBwb2QVpuWMHJiiIsw" autocomplete="off">
                    <div class="row row-original">
                        <div class="col-md-8 order-2 order-md-1">
                            <div class="form-group">
                                <label for="user_name">Name</label>
                                <input class="form-control" type="text" value="Juanda Patra" name="user[name]" id="user_name" fdprocessedid="ikjz">
                            </div>

                            <div class="form-group">
                                <label for="user_email">Email</label>
                                <input class="form-control" type="text" value="patrajuanda10@gmail.com" name="user[email]" id="user_email" fdprocessedid="7el54e">
                            </div>

                            <div class="form-group">
                                <label for="user_phone_number">Phone Number</label>
                                <div class="iti iti--allow-dropdown">
                                    <div class="iti__flag-container">
                                        <div class="iti__selected-flag" role="combobox" aria-controls="iti-0__country-listbox" aria-owns="iti-0__country-listbox" aria-expanded="false" tabindex="0" title="United States: +1" aria-activedescendant="iti-0__item-us-preferred">
                                            <div class="iti__flag iti__us"></div>
                                            <div class="iti__arrow"></div>
                                        </div>
                                    </div><input class="form-control" id="js-input-user-phone-number" type="text" name="user[phone_number]" autocomplete="off" data-intl-tel-input-id="0" placeholder="(201) 555-0123" fdprocessedid="hkmrhe">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <input name="user[receive_newletters]" type="hidden" value="0" autocomplete="off"><input class="form-check-input" type="checkbox" value="1" name="user[receive_newletters]" id="user_receive_newletters">
                                    <label class="form-check-label" for="user_receive_newletters">I would like to receive amazing travel inspirations, tips and latest deals via email.</label>
                                </div>
                            </div>

                            <div class="tw-border-b tw-border-grey-lighter tw-border-solid mt-4 mb-3"></div>

                            <div class="form-group">
                                <div class="tw-text-lg font-weight-bold mb-2">Password</div>
                                <div class="form-check">
                                    <input name="change_password" type="hidden" value="0" autocomplete="off"><input class="form-check-input" id="js-checkbox-change-password" type="checkbox" value="1" name="change_password">
                                    <label class="form-check-label" for="js-checkbox-change-password">
                                        Change password
                                    </label>
                                </div>
                            </div>

                            <div class="d-none" id="js-container-user-password">
                                <div class="form-group">
                                    <label for="user_current_password">Current password</label>
                                    <input class="form-control" disabled="" type="password" name="user[current_password]" id="user_current_password">
                                </div>

                                <div class="form-group">
                                    <label for="user_password">New password</label>
                                    <input class="form-control" disabled="" type="password" name="user[password]" id="user_password">
                                </div>

                                <div class="form-group">
                                    <label for="user_password_confirmation">Confirm password</label>
                                    <input class="form-control" disabled="" type="password" name="user[password_confirmation]" id="user_password_confirmation">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" name="commit" value="Save Changes" class="btn btn-primary" id="js-btn-submit-form-user" data-disable-with="Save Changes" fdprocessedid="jumn1">
                            </div>
                        </div>

                        <div class="col-md-4 order-1 order-md-2 text-center">
                            <input autocomplete="off" type="hidden" name="user[avatar_cache]" id="user_avatar_cache">
                            <input id="js-input-user-avatar" class="d-none" type="file" name="user[avatar]">
                            <label id="js-placeholder-user-avatar" class="d-block tw-cursor-pointer mb-3" for="js-input-user-avatar">
                                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 100 100" fill="#212529" viewBox="0 0 100 100" class="" height="100" width="100">
                                    <circle cx="50.1" cy="39.5" r="16.7"></circle>
                                    <path d="m50 3.6c-25.5 0-46.3 20.7-46.3 46.3s20.8 46.3 46.3 46.3 46.3-20.8 46.3-46.3-20.8-46.3-46.3-46.3zm27.2 75.5c-3.4-9.1-10.8-18.8-27.2-18.8-16.3 0-23.8 9.7-27.2 18.8-7.8-7.3-12.8-17.7-12.8-29.2 0-22 17.9-40 40-40s40 17.9 40 40c0 11.5-5 21.9-12.8 29.2z"></path>
                                </svg>

                            </label>
                            <label for="js-input-user-avatar" class="btn btn-outline-secondary tw-cursor-pointer">Select Image</label>
                            <div class="tw-text-grey">
                                File size: maximum 10 MB
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg row-span-2">3</div> -->
            <!-- <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg">4</div> -->
            <!-- <div class="shadow-lg bg-green-100 text-green-500 text-lg font-bold text-center p-10 rounded-lg col-span-3">5</div> -->
        </div>
    </div>
</section>


<section>
    <div class="container-lg pb-[50px] lg:pb-[164px]">
        <h1 class="text-[30px] ml-[15px]">
            Mari, Pilih trip perjalanan s kak!
        </h1>

    </div>
</section>

<section class="p-4">
    <div class="container-lg">
        <h1 class="text-[30px] text-greyTbliss font-bold mb-4 ml-[15px]">
            Hidden Gems di s
        </h1>

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
                <div class="testimoni-slider">
                    <div>
                        <h1 class="bold mb-3 text-[20px] lg:text-[30px] font-semibold">
                            The perfect way to explore amazing places. The team is extremely passionate, super responsive and always willing to go the extra mile even on short notice.
                        </h1>
                        <p class="text-[15px] lg:text-[20px]">
                            - Dian Wijaya, Jakarta
                        </p>
                    </div>
                    <div>
                        <h1 class="bold mb-3 text-[20px] lg:text-[30px] font-semibold">
                            The perfect way to explore amazing places. The team is extremely passionate, super responsive and always willing to go the extra mile even on short notice.
                        </h1>
                        <p class="text-[15px] lg:text-[20px]">
                            - Dian Wijaya, Jakarta
                        </p>
                    </div>
                    <div>
                        <h1 class="bold mb-3 text-[20px] lg:text-[30px] font-semibold">
                            The perfect way to explore amazing places. The team is extremely passionate, super responsive and always willing to go the extra mile even on short notice.
                        </h1>
                        <p class="text-[15px] lg:text-[20px]">
                            - Dian Wijaya, Jakarta
                        </p>
                    </div>

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

<section class="p-4">
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

    </div>

</section>

@include('web.components.presentational.whatsapp')
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