@extends('web.layouts.app')

@section('container')
@include('web.components.presentational.header')
<div class="flex items-center px-4 bg-white justify-center">
    <h1 class=" font-bely text-footer text-[45px]">Konfirmasi Pembayaran</h1>
</div>

<div class="flex items-center px-0 lg:px-4 bg-white justify-center mb-[79px] mt-[50px]">
    <p class=" font-interRegular text-[16px] font-bold">Setelah melakukan pembayaran, silakan upload <br> bukti pembayaranmu disini untuk konfirmasi</p>
</div>
<section class="container-lg px-[10%] mb-[50px]">
    <form action="{{route('uploadImages')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center justify-center w-full ">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-[24rem] border-2 bg-footer border-gray-300  rounded-lg cursor-pointer hover:bg-footer ">
                <p class="mb-2 pt-[40px] text-sm text-white font-semibold font-interRegular text-[20px] lg:text-[22px] ">Upload Bukti Pembayaran</p>
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <div class="image-position">
                        <svg width="110" height="121" viewBox="0 0 110 121" fill="none" xmlns="http://www.w3.org/2000/svg" class="image-display">
                            <g clip-path="url(#clip0_469_879)">
                                <path d="M107.458 73.734C103.061 62.6789 94.8778 55.6546 83.3333 52.6753C82.5315 52.4669 82.321 52.1471 82.3258 51.3395C82.3612 44.2892 82.3258 37.2412 82.3541 30.1932C82.3743 29.6834 82.2915 29.1748 82.1107 28.6979C81.9298 28.2209 81.6546 27.7855 81.3016 27.4176C72.9983 18.6976 64.7012 9.97207 56.4104 1.24103C56.0429 0.834037 55.5911 0.512171 55.0867 0.297849C54.5822 0.0835271 54.0371 -0.0180952 53.4894 5.08998e-05C40.2444 0.0189971 26.9994 4.04932e-05 13.7378 0.0189867C5.95394 0.0331964 0.019692 5.96337 0.019692 13.7882C-0.00395984 39.345 -0.00395984 64.9019 0.019692 90.4587C0.0130424 91.9147 0.234105 93.3626 0.674848 94.7501C2.53625 100.536 7.58119 104.154 13.9199 104.171C24.1422 104.195 34.3653 104.195 44.5892 104.171C44.9111 104.144 45.234 104.211 45.5181 104.365C45.8022 104.519 46.0351 104.753 46.1881 105.038C51.3253 112.886 58.4539 117.92 67.5741 120.138C68.9625 120.472 70.4123 120.46 71.7534 121.012H78.3593C78.4705 120.699 78.7449 120.818 78.9554 120.794C81.34 120.557 83.6911 120.057 85.9658 119.302C94.3243 116.46 100.881 111.297 105.254 103.593C110.658 94.023 111.524 83.9389 107.458 73.734ZM56.6446 8.85503L73.6361 26.7639C73.3995 27.1381 73.0424 26.9676 72.7657 26.9676C69.5467 26.9818 66.3276 26.9913 63.1063 26.9676C59.2392 26.9439 56.6871 24.417 56.6588 20.5567C56.6233 16.7603 56.6446 12.9569 56.6446 8.85503ZM44.1611 71.1857C43.61 72.8269 42.6758 73.2532 40.9752 73.2224C34.4095 73.104 27.8414 73.1751 21.2756 73.1727C20.6441 73.1727 19.9913 73.1253 19.4166 73.3835C18.3948 73.8429 17.8248 74.6552 17.891 75.8086C17.9573 76.9619 18.558 77.7032 19.6531 78.0513C20.1454 78.1885 20.6565 78.2453 21.1668 78.2195C27.5362 78.2195 33.9081 78.2337 40.2775 78.2006C41.2236 78.2006 41.5973 78.2195 41.3489 79.4178C40.0362 85.5753 40.4879 91.9789 42.6521 97.8904C43.0992 99.1337 43.0944 99.1361 41.7676 99.1361C32.6048 99.1361 23.4421 99.1361 14.2794 99.1361C9.62944 99.1361 6.53105 96.9028 5.35791 92.7797C5.11712 91.8643 5.00566 90.9196 5.02679 89.9733C5.02679 64.7274 5.02679 39.4824 5.02679 14.2381C5.02679 9.72419 7.31629 6.57675 11.3631 5.38551C12.2722 5.13846 13.2123 5.0244 14.154 5.04685C26.2661 5.04685 38.3783 5.04684 50.4904 5.02079C51.4199 5.02079 51.673 5.25761 51.673 6.19072C51.6233 10.9557 51.628 15.7207 51.6564 20.4856C51.6895 26.1221 54.8021 30.2216 60.1143 31.69C61.2614 32.0073 62.444 32.0405 63.6219 32.0452C67.8295 32.0618 72.0372 32.0784 76.2449 32.031C77.146 32.0191 77.3518 32.2844 77.347 33.1583C77.3068 39.0245 77.3163 44.8931 77.347 50.7617C77.347 51.4982 77.2193 51.7635 76.3844 51.7327C68.014 51.4414 60.5377 53.9707 53.9435 59.0886C52.9273 59.9268 51.6408 60.3654 50.3248 60.3224C40.5731 60.2727 30.8215 60.294 21.0675 60.2987C19.005 60.2987 17.8366 61.2887 17.9052 62.9441C17.9145 63.4988 18.1181 64.0327 18.4803 64.4525C18.8425 64.8724 19.3405 65.1515 19.8872 65.2413C20.3907 65.3235 20.9004 65.3607 21.4104 65.3526C29.6696 65.3526 37.9281 65.3566 46.1857 65.3645C46.5949 65.3645 47.0325 65.2366 47.5173 65.5421C47.075 66.2526 46.6635 66.9441 46.2094 67.6143C45.417 68.7488 44.5963 69.895 44.1611 71.1857ZM75.119 115.991C58.189 115.733 45.5542 102.018 45.7056 86.1508C45.8522 69.5516 59.3622 56.564 75.5258 56.7558C91.9355 56.95 105.02 70.3971 104.83 86.5606C104.754 94.3976 101.589 101.887 96.0242 107.399C90.4598 112.911 82.9462 115.999 75.119 115.991Z" fill="white" />
                                <path d="M33.0834 47.6923C37.2508 47.6923 41.4183 47.6687 45.5834 47.6923C47.6529 47.7113 48.8946 49.4449 48.1331 51.1642C47.5962 52.3626 46.5673 52.7084 45.3303 52.7036C40.6898 52.6894 36.0517 52.7036 31.4136 52.7036C27.7948 52.7036 24.1785 52.7202 20.5621 52.7036C19.1666 52.6918 18.1969 51.9221 17.9462 50.7711C17.8092 50.2116 17.8712 49.6217 18.1215 49.103C18.3719 48.5844 18.795 48.1693 19.318 47.9292C19.8738 47.6639 20.4651 47.6923 21.0517 47.6923C25.063 47.6892 29.0736 47.6892 33.0834 47.6923Z" fill="white" />
                                <path d="M72.7569 75.8819L62.7876 86.5652C62.0781 87.3326 61.2905 87.9388 60.1363 87.7494C58.3245 87.4676 57.4068 85.5658 58.3671 84.0099C58.6259 83.6159 58.923 83.2486 59.254 82.9134C63.7778 78.041 68.3064 73.1742 72.8397 68.3129C74.552 66.4752 75.8671 66.4775 77.5818 68.3129C82.2271 73.2863 86.8676 78.2636 91.5033 83.2449C92.2649 84.062 92.7616 84.9572 92.3146 86.1247C92.1705 86.5772 91.8952 86.9765 91.5237 87.2717C91.1522 87.567 90.7013 87.7448 90.2285 87.7825C89.1405 87.9033 88.3884 87.2852 87.7025 86.5439C84.7665 83.3657 81.8266 80.1906 78.8827 77.0187C78.5989 76.7156 78.3103 76.4172 77.8302 75.9151V102.087C77.8302 102.364 77.8302 102.639 77.8302 102.916C77.7805 104.728 76.8203 105.864 75.3207 105.881C73.8212 105.897 72.8018 104.784 72.7687 102.973C72.7309 100.808 72.7687 98.6435 72.7687 96.4765V75.8725L72.7569 75.8819Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0_469_879">
                                    <rect width="110" height="121" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <img class="image-contain hidden" style=" width:10em;height: 10em;" />
                    </div>

                    <p class="mb-[51px] mt-[30px] text-sm text-white font-normal font-interRegular text-[14px] lg:text-[18px] text-url">(maks 30MB, tipe file png / jpg / pdf)</p> <br>
                </div>
                <input id="dropzone-file" type="file" class="hidden" name="upload" />
                <input type="hidden" name="id" value="{{$id}}">
            </label>
        </div>
        <div class="btn-group w-full">
            <button type="submit" id="btn-submit-upload" class=" w-full h-[49px] mt-[14px] text-white bg-blueTbliss cursor-pointer text-center py-[10px] ">Upload Sekarang</button>
        </div>
    </form>
</section>





@include('web.components.presentational.footer')




@if(session('success'))
<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-modal="true" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex popup-{{session('success')}} popup-display">
    <div class="relative w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-2  rounded-t dark:border-gray-600">

                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6 h-[245px]">
                <div class="flex justify-center">
                    <h1 class=" font-interRegular text-[28px] text-footer">Upload Sukses</h1>
                </div>
                <img src="{{ asset('images/upload/success-popup.png') }}" alt="" class="mx-auto">
            </div>

        </div>
    </div>
</div>
@endif




</div>
@endsection


@push('javascript-internal')
<script>
    $(document).ready(function() {



        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();



                reader.onload = function(e) {
                    $('[data-label="UploadImage"]').children('img').attr('src', e.target.result);

                    $('.image-display').empty()

                    let uploadImage = reader.result

                    document.querySelector(".image-position").src = URL.createObjectURL(uploadImage);

                    $('.image-position').append(`<img height='200' width='200' alt='testImage' src='url(${uploadImage})' styl> </img>`)


                }


                reader.readAsDataURL(input.files[0]);
            }
        }


        if ($('.popup-add').length > 0) {
            $('.popup-display').removeClass('hidden')
            $('.popup-display').addClass('flex')
            setTimeout(function() {
                window.location.href = "/";
            }, 2000);
        }


        $('#dropzone-file').change(function(e) {
            readURL(this);
            var path, url;
            url = this.value;
            url = url.split("\\");
            path = url[2];

            $('.image-display').addClass('hidden')
            $('.image-contain').removeClass('hidden')

            $('.text-url').empty()
            $('.text-url').text(path)

            document.querySelector(".image-contain").src = URL.createObjectURL(e.target.files[0]);
        });


        let base_url = window.location.origin;
        $(".selector").flatpickr({
            minDate: "today",
            maxDate: "31.12.2029",
            altInput: true,
            mode: "range",
            onChange: function(selectedDates, datestr, instance) {
                $(".selector").val(datestr.replace('to', '-'));
            }
        });

    });
</script>
@endpush