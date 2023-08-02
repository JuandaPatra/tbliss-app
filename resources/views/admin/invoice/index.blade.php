<!doctype html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TBLISS</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/tbliss.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>







</head>

<body class="overflow-x-hidden" style="background: #F5F5F0;">

    <div class="container-lg ">
        <div class="" style="padding-top:36px;">

            <table width="100%">
                <tr>
                    <td width="175px">
                        <img src="./images/title/log/logo.png" alt="" class="mr-10 h-[75px] w-[25px] pt-[40px]">
                    </td>

                    <td>
                        <h1 class="text-end font-bely  text-[#102448] font-bold" style="font-size: 70px;">INVOICE</h1>
                    </td>
                </tr>
            </table>
            <br><br>
            <table width="100%">
                <tr>
                    <td width="50%">
                        <h1 class=" font-bold text-[16px] text-[#102448] font-interRegular">
                            Ditagihkan ke :

                        </h1>
                        <h1 class="text-[14px] font-interRegular mt-[10px]">
                            Bayu Kiong
                        </h1>
                        <h1 class="text-[14px] font-interRegular">
                            081586115509
                        </h1>
                        <h1 class="text-[14px] font-interRegular">
                            bayukiong@gmail.com
                        </h1>
                    </td>

                    <td>
                        <h1 class="text-end text-[14px] font-interRegular">
                            No Invoice: #169096384400509
                        </h1>
                        <h1 class="text-end text-[14px] font-interRegular">
                            4 Agustus 2023
                        </h1>
                        <h1 class="text-end mt-8 text-footer text-[14px] font-bold font-interRegular">
                            Status: PAID
                        </h1>


                    </td>
                </tr>
            </table>
            
            <table class="table mt-[80px]" style="padding-left:4em;padding-right:4em">
                <thead class=" font-interRegular text-sm border-y border-[#9F9F9F]">
                    <tr>
                        <th scope="col" colspan="2" class="">Item</th>
                        <th scope="col" class="text-end">Qty</th>
                        <th scope="col" class="text-end">Unit Price</th>
                        <th scope="col" class="text-end">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" class="text-start">{{$dataCoba['trip_name']}} <br>(Down Payment)</td>
                        <td class="text-end">1</td>
                        <td class="text-end">Rp. 500.000</td>
                        <td class="text-end">{{$dataCoba['price']}}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-start">Visa</td>
                        <td class="text-end">1</td>
                        <td class="text-end">Rp. 500.000</td>
                        <td class="text-end">{{$dataCoba['price']}}</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-start">Tipping</td>
                        <td class="text-end">1</td>
                        <td class="text-end">Rp. 500.000</td>
                        <td class="text-end">{{$dataCoba['price']}}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table " style="padding-left:4em;padding-right:4em">
                <tbody class="">
                    <tr>
                        <td colspan="3" class="text-start w-1/2"></td>
                        <td class="text-end"></td>
                        <td class="text-end">Sub Total</td>
                        <td class="text-end" colspan="1">Rp. 500.000</td>
                    </tr>
                </tbody>
            </table>
            <br>

            <br>
            <br>
            <br>
            <br>
            <br>
            <table width="100%" class="mb-30 mt-[120px]">
                <tr>
                    <td width="50%">
                        <h1 class=" font-bold text-[28px] text-[#102448] font-bely tracking-wide">
                            Terimakasih Kak !

                        </h1>
                        <h1 class="text-[14px] font-interRegular mt-3">
                            PT. Travel Blizz Trip
                        </h1>
                    </td>


                </tr>
            </table>
        </div>
    </div>

    @yield('container-invoice')
    @stack('javascript-internal')

</body>

</html>