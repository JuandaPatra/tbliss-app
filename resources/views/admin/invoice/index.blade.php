<!doctype html>
<html lang="en" class="overflow-x-hidden">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TBLISS</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon/tbliss.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500&family=Nunito:ital,wght@0,500;0,600;0,800;1,600;1,700&display=swap" rel="stylesheet">


    <style>
        @import url(https://db.onlinewebfonts.com/c/f05f148ec6596f0b75375fa566aaf1fe?family=Bely+Display+W00+Regular);

        @font-face {
            font-family: 'bely';
            src:
                url('/public/vendor/font/Bely_Display_W00_Regular.woff2') format('woff');
        }

        @font-face {
            font-family: 'interRegular';
            font-weight: normal;
            font-style: normal;
            font-variant: normal;
            src: url("{{storage_path('fonts/Inter-Regular.woff2')}}");
        }


        @page {
            margin: 0;
        }





        body {
            font-family: 'Inter', sans-serif;
        }

        .font-bely {
            font-family: 'bely';
        }
    </style>


    @vite(['resources/css/app.css'])





</head>

<body class="overflow-x-hidden" style="background: #F5F5F0;padding: 96px;">
    <div style="padding:0px;">
        <table id="m_579706666474593286attendeeInfoTable" cellspacing="0" cellpadding="0" border="0" style="margin-bottom:30px;padding:2px 0px 0;width:100%">
            <tbody>
                <tr style="height:30px">
                    <td style="padding-left:0px;padding-top:10px" width="50%">
                        <img src="./images/title/log/logo.png" style="height:40px" alt="">
                    </td>
                    <td style="padding:10px" width="50%" height="21" align="right">
                        <img src="./images/title/log/invoice.png" style="height:45px" alt="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div style="padding:0px;">
        <table id="m_579706666474593286attendeeInfoTable" cellspacing="0" cellpadding="0" border="0" style="margin-bottom:30px;padding: 0px 0;width:100%">
            <tbody>
                <tr style="padding-top: 0px;">
                    <td style="padding-bottom:1px" width="50%">
                        <h1 style="font-size: 14px;">Ditagihkan ke :</h1>
                    </td>
                    <td style="padding-bottom:1px" width="50%" align="right">
                        <h1 style="font-size: 14px;font-weight:lighter">No Invoice #{{$dataCoba['invoice_id']}}</h1>
                    </td>
                </tr>
                <tr style="padding-top: 0px;padding-bottom:0px">
                    <td style="padding:1px" width="50%" height="10px">
                        <h1 style="font-size: 14px;font-weight:lighter"> {{$dataCoba['title']['name']}}</h1>
                    </td>
                    <td style="font-size: 14px;font-weight:100;font-family:interRegular;font-weight:lighter" width="50%" height="10px" align="right">
                        <h1 style="font-size: 14px;font-weight:100;font-family:interRegular;font-weight:lighter"> {{$dataCoba['invoice_date']}}</h1>
                    </td>
                </tr>
                <tr>
                    <td style="padding:1px;font-size: 14px;font-weight:100;font-family:interRegular" width="50%">
                        <h1 style="font-size: 14px;font-weight:lighter;font-family:interRegular"> {{$dataCoba['title']['phone']}}</h1>
                    </td>
                    <td style="padding:1px" width="50%" align="right">

                    </td>
                </tr>
                <tr>
                    <td style="padding:1px;font-size: 14px;font-weight:100;font-family:interRegular" width="50%">
                        <h1 style="font-size: 14px;font-weight:lighter;font-family:interRegular"> {{$dataCoba['title']['email']}}</h1>
                    </td>
                    <td style="padding:1px" width="50%" align="right">
                        <h1 style="color: #BF1E5F; font-weight:700;font-size: 14px;">Status : PAID</h1>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div>
        <div style="margin-bottom:12px">
            <p style="font-size:14px;font-weight:700;margin:0 0 20px 0">Ringkasan Pemesanan</p>
        </div>
        <table style="border-collapse:collapse;color:black;text-align:left;width:100%">
            <thead>
                <tr style="border-bottom:2px solid #102448;border-left:none;border-right:none;border-top:2px solid #102448">
                    <th width="51%" style="padding:8px;padding-top:15px">Item</th>
                    <th width="12%" style="padding:8px;padding-top:15px">Qty</th>
                    <th width="25%" style="padding:8px;padding-top:15px">Unit Price</th>
                    <th width="12%" style="padding:8px;padding-top:15px">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                        {{$dataCoba['trip_name']}}
                        <br>
                        ({{$dataCoba['opsiPembayaran']}})
                    </td>
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['qty']}}
                    </td>
                    <td style="padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['price']}}
                    </td>
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['price']}}
                    </td>
                </tr>
                @if($dataCoba['visaTotal'] != 'Rp.0')
                <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                        Visa
                        
                    </td>
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['qty']}}
                    </td>
                    <td style="padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['visa']}}
                    </td>
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['visaTotal']}}
                    </td>
                </tr>
                @endif

                @if($dataCoba['totalTipping'] != 'Rp.0')
                <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                        {{$dataCoba['tippingCaption']}}
                    </td>
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['qty']}}
                    </td>
                    <td style="padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['totalTipping']}}
                    </td>
                    <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                        {{$dataCoba['totalTipping']}}
                    </td>
                </tr>
                @endif
                
                <tr style="border-bottom:none;border-left:none;border-right:none;border-top:1px solid #102448; height:87px;">
                    <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">

                    </td>
                    <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top">

                    </td>
                    <td style="padding: 20px 8px;vertical-align:top">
                        Subtotal
                    </td>
                    <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                        {{$dataCoba['grandTotal']}}
                    </td>
                </tr>

            </tbody>
        </table>

    </div>

    <div style="padding:0px;">
        <table id="m_579706666474593286attendeeInfoTable" cellspacing="0" cellpadding="0" border="0" style="margin-top:70px;padding:2px 0px 0;width:100%">
            <tbody>
                <tr style="height:30px">
                    <td style="padding-left:0px;padding-top:10px" width="50%">
                        <h1 style="color:#102448;font-size :30px;font-weight:700; font-weight:600" class="font-bely">
                            Terima kasih Kak !
                        </h1>
                        <p style="font-size: 15px;font-family:interRegular">PT. Travel Blizz Trip</p>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>





    @yield('container-invoice')
    @stack('javascript-internal')

</body>

</html>