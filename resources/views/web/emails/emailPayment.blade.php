
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

                    <h1 style="color:#000;font-size:20px;font-weight: 100;margin:0;margin-bottom:5px;">
                        Status pembayaranmu Kakak sukses.
                    </h1>
                    <h1 style="color:#000;font-size:20px;font-weight: 100;margin:0;">
                        Terimakasih telah memilih t’Bliss. Kami <br> melampirkan Invoice untuk kakak unduh.
                    </h1>
                </div>
            </div>
        </div>

        <div style="color:#5b5b5b;padding:5px 15px 30px 5px">
            <div style="display:inline-block">
                <div style="padding-left:8px;padding-right:8px">
                    <h1 style="color:#000;font-size:14px;font-weight: 600;margin:0;">
                        Berikut ringkasan pembayaranmu:
                    </h1>
                </div>
            </div>
        </div>

        <div style="padding:0px;">
            <table id="m_579706666474593286attendeeInfoTable" cellspacing="0" cellpadding="0" border="0" style="color:#5b5b5b;margin-bottom:10px;padding:2px 0px 0;width:100%">
                <tbody>
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Total Bayar</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">{{$grandTotal}}</td>
                    </tr>

                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Status</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">Sukses - PAID</td>
                    </tr>

                    @if($dueDateNextInstallment != '')
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">Tanggal cicilan selanjutnya</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">{{$dueDateNextInstallment}}</td>
                    </tr>
                    @endif
                    @if($dueTotalNextInstallment != '')
                    <tr style="height:30px">
                        <td style="padding:10px" width="235" height="21">total cicilan selanjutnya</td>
                        <td style="padding:10px" width="30" height="21">:</td>
                        <td style="padding:10px" width="293" height="21" align="left">{{$dueTotalNextInstallment}}</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>


        @if($opsiPembayaran != 'Full Payment' )
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
                            (Down Payment) 
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                           {{$tripPrice}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$tripPriceTotal}}
                        </td>
                    </tr>

                    @if($visaTotal != 'Rp.0')
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
                            {{$visaTotal}}
                        </td>
                    </tr>
                    @endif

                    @if($totalTipping != 'Rp.0')
                    <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                            {{$tippingCaption}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                           {{$tippingOne}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$totalTipping}}
                        </td>
                    </tr>
                    @endif

                    <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                            Pembayaran Uang Muka 
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top; color:red;font-weight:bold">
                            {{$price}}
                        </td>
                    </tr>


                    <tr style="border-bottom:none;border-left:none;border-right:none;border-top:1px solid #102448; height:87px;">
                        <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">

                        </td>
                        <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top">

                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                            BALANCE
                        </td>
                        <td style="border-bottom:1px solid #ededed;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$total_sisa_pelunasan}}
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
        @else
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
                            (Full Payment)
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                           {{$trip_price}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$price}}
                        </td>
                    </tr>

                    @if($visaTotal != 'Rp.0')
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
                            {{$visaTotal}}
                        </td>
                    </tr>
                    @endif

                    @if($totalTipping != 'Rp.0')
                    <tr style="border-bottom:none;border-left:none;border-right:none;border-top:2px solid #ecf0f1; height:87px;">
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top;">
                            {{$tippingCaption}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$qty}}
                        </td>
                        <td style="padding: 20px 8px;vertical-align:top">
                           {{$totalTipping}}
                        </td>
                        <td style="border-bottom:none;line-height:1.42857143;padding: 20px 8px;vertical-align:top">
                            {{$totalTipping}}
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
        @endif
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
            <span style="padding-left: 4px;padding-top:5px">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline">
                    <path d="M13.68 2.29933C12.16 0.83 10.16 0 8.03 0C1.91667 0 -1.922 6.62333 1.13067 11.892L0 16L4.22333 14.8987C6.06333 15.8927 7.57067 15.8047 8.034 15.8633C15.1227 15.8633 18.6513 7.28733 13.67 2.32533L13.68 2.29933Z" fill="#ECEFF1"></path>
                    <path d="M8.04459 14.5007L8.04059 14.5H8.02992C5.90859 14.5 4.55326 13.4954 4.41992 13.4374L1.91992 14.0874L2.58992 11.6574L2.43059 11.4074C1.77059 10.3567 1.41992 9.14669 1.41992 7.90069C1.41992 2.03869 8.58326 -0.892648 12.7286 3.25069C16.8639 7.35069 13.9606 14.5007 8.04459 14.5007Z" fill="#4CAF50"></path>
                    <path d="M11.6714 9.53795L11.6654 9.58795C11.4648 9.48795 10.4874 9.00995 10.3054 8.94395C9.89676 8.79262 10.0121 8.91995 9.22743 9.81862C9.11076 9.94862 8.99476 9.95862 8.79676 9.86862C8.59676 9.76862 7.95476 9.55862 7.19476 8.87862C6.60276 8.34862 6.20543 7.69862 6.08809 7.49862C5.89276 7.16128 6.30143 7.11328 6.67343 6.40928C6.74009 6.26928 6.70609 6.15928 6.65676 6.05995C6.60676 5.95995 6.20876 4.97995 6.04209 4.58928C5.88209 4.19995 5.71743 4.24928 5.59409 4.24928C5.21009 4.21595 4.92942 4.22128 4.68209 4.47862C3.60609 5.66128 3.87743 6.88128 4.79809 8.17862C6.60743 10.5466 7.57143 10.9826 9.33409 11.5879C9.81009 11.7393 10.2441 11.718 10.5874 11.6686C10.9701 11.608 11.7654 11.1879 11.9314 10.7179C12.1014 10.2479 12.1014 9.85795 12.0514 9.76795C12.0021 9.67795 11.8714 9.62795 11.6714 9.53795Z" fill="#FAFAFA"></path>
                </svg>

            </span>
        </div>
        <div style="width: 35%; background-color:#BF1E5F"></div>
    </div>
</div>