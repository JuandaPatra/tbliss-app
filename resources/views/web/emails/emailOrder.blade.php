<div style="background-color:#ecf0f1;box-sizing:border-box;font-family:'Open Sans',sans-serif;font-size:16px;margin:0;padding:0">

    <div style="background:#EDF0F1;margin:10px auto;padding:10px;width:600px">

        <div style="color:#5b5b5b;padding:35px 35px 30px 5px">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <img src="tbliss.owlandfoxes.co.id/images/title/log/logo.png" alt="" style="height: 30px;">
                </div>
            </div>
        </div>

        <div style="color:#5b5b5b;padding:5px 15px 40px 5px">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <h1 style="color:#000;font-size:20px;font-weight: 100;margin:0;">
                        Hi Kak,
                        <span style="font-weight: 600;">
                            {{$nama}}
                        </span>
                    </h1>
                </div>
            </div>
        </div>

        <div style="color:#5b5b5b;padding:5px 15px 40px 5px">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <h1 style="color:#000;font-size:20px;font-weight: 100;margin:0;">
                        Terimakasih atas pemesanan trip kakak, kami menunggu pembayaran sebelum:
                    </h1>
                </div>
            </div>
        </div>

        <div style="color:#5b5b5b;padding:5px 15px 40px 5px">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <h1 style="color:#000;font-size:20px;font-weight: 100;margin:0;">
                        {{$duedate}}
                    </h1>
                </div>
            </div>
        </div>
        <div style="color:#5b5b5b;padding:5px 15px 30px 5px">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <h1 style="color:#000;font-size:14px;font-weight: 600;margin:0;">
                        Segera lakukan pembayaran pesananmu dengan detail sebagai berikut:
                    </h1>
                </div>
            </div>
        </div>

        <div style="padding:0 15px">
            <table id="m_579706666474593286attendeeInfoTable" cellspacing="0" cellpadding="0" border="0" style="color:#5b5b5b;margin-bottom:10px;padding:2px 0;width:100%">
                <tbody>
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Total Bayar</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">{{$grandTotal}}</td>
                    </tr>
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Metode Pembayaran</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">Transfer Bank</td>
                    </tr>
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Bank</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">Bank BCA <span>
                                <img src="./images/title/bca.png" alt="" style="height: 10px;">


                            </span></td>
                    </tr>
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">No. Rekening</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">8890948593849284959</td>
                    </tr>
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Atas Nama Rekening</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">PT. Travel Blizz Trip</td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div style="padding:15px">
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
                            {{$trip_name}}
                            <br>
                            ({{$status}})
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                            {{$price}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$price_total}}
                        </td>
                    </tr>
                    @if($visa_total != 'Rp.0')
                    <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                            Visa
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                            {{$visa}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$visa_total}}
                        </td>
                    </tr>
                    @endif

                    @if($total_tipping_price != 'Rp.0')
                    <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                            Tipping
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                            {{$tipping}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$total_tipping_price}}
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
                        <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$grandTotal}}
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        <div style="color:#5b5b5b;padding:5px 15px 30px 5px; margin-top:103px;">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <h1 style="color:#102448;font-size:14px;font-weight: 600;margin:0;">
                        2023 <span>
                            <a href="" style="color: #102448 !important;">
                                Travel Bliss
                            </a>
                        </span>
                        - All Rights Reserved.
                    </h1>
                </div>
            </div>
        </div>




        <div style="border-bottom:1px dashed #d2e1f0;height:2px" class="adL"></div>
        <div class="adL">
        </div>
    </div>
    <div class="adL">

    </div>
    <div style="display: flex;height:40px;">
        <div style="width: 65%; background-color:#102448;padding:10px;">
            <span style="color: white;margin-left: 40%;">
                Kontak kami via whatsapp
            </span>
            <span style="padding-left: 4px;padding-top:5px;position:absolute;">
                <img src="tbliss.owlandfoxes.co.id/images/header/whatsapps.png" alt="" style="height: 14px;position:relative;top:-2px;">

            </span>
        </div>
        <div style="width: 35%; background-color:#BF1E5F"></div>
    </div>
</div>