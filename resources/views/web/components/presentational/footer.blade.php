<footer class="p-4 bg-[#BF1E5F] sm:p-6 dark:bg-gray-900">
    <div class="container-lg">
        <div class="md:flex mt-[48px]">
            <div class="mb-6 md:mb-0 md:mr-[90px]">
                <h2 class="text-white text-[14px] mb-[10px] font-interRegular">
                    SAYA MAU PROMO!
                </h2>
                <p class="text-white text-[14px] mb-4 w-[80%]">
                    Kirimkan saya email kalau ada promosi, berita dan topik menarik!
                </p>
                <form action="{{  route('email-leads') }}" method="POST" >
                    @csrf
                    <div class="flex">
                        <input type="email" id="base-input" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email Anda">
                        <button type="submit" class="focus:outline-none  text-white bg-[#102448] w-[150px] rounded-none px-2 py-3">
                            Subscribe
                        </button>
                    </div>
                    </form>

                <div class="flex mt-4">
                    <!-- <img src="{{ asset('images/footer/fb.png') }}" alt="" class="mr-3"> -->
                    <a href="https://www.instagram.com/travelbliss.tours">
                        <img src="{{ asset('images/footer/ig.png') }}" alt="">
                    </a>


                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-[10px] text-lg font-semibold text-white text-[15px] font-interRegular">t'Bliss</h2>
                    <ul class="text-white text-[13px] font-interRegular">
                        <li class="mb-2">
                            <a href="https://tbliss.owlandfoxes.co.id/cerita-kami" class="hover:underline">Cerita Kami</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://tbliss.owlandfoxes.co.id/search" class="hover:underline">Destinasi</a>
                        </li>
                        <li class="mb-2">
                            <a href="https://tbliss.owlandfoxes.co.id/FAQ" class="hover:underline">FAQ</a>
                        </li>

                    </ul>
                </div>

                <div>
                    <h2 class="mb-[10px] text-lg font-semibold text-white text-[15px] uppercase font-interRegular">Get in Touch</h2>
                    <ul class="text-white text-[13px] font-interRegular">
                        <li class="mb-2">
                            <a href="https://tbliss.owlandfoxes.co.id/kontak-kami" class="hover:underline">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="sm:flex sm:items-center sm:justify-between mt-[30px] text-center lg:text-start">
            <span class="text-sm text-white sm:text-center">2023 <a href="https://tbliss.owlandfoxes.co.id" class="hover:underline">Travel Bliss</a> - All Rights Reserved.
            </span>

        </div>
    </div>
</footer>

