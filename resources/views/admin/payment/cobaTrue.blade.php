{{--
    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Helvetica, sans-serif;
        font-size: 13px;
    }

    /* .container {
        max-width: 680px;
        margin: 0 auto;
    } */

    .logotype {
        background: #000;
        color: #fff;
        width: 75px;
        height: 75px;
        line-height: 75px;
        text-align: center;
        font-size: 11px;
    }

    .column-title {
        background: #eee;
        text-transform: uppercase;
        padding: 15px 5px 15px 15px;
        font-size: 11px
    }

    .column-detail {
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .column-header {
        background: #eee;
        text-transform: uppercase;
        padding: 15px;
        font-size: 11px;
        border-right: 1px solid #eee;
    }

    .row {
        padding: 7px 14px;
        border-left: 1px solid #eee;
        border-right: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .alert {
        background: #ffd9e8;
        padding: 20px;
        margin: 20px 0;
        line-height: 22px;
        color: #333
    }

    .socialmedia {
        background: #eee;
        padding: 20px;
        display: inline-block
    }
</style>

<body style="background-color: #EDF0F1;">
    <div class="" style="padding-top:36px;">
        <table width="100%">
            <tr>
                <td width="75px">
                    <img src="./images/title/log/logo.png" alt="" class="mr-10" style="margin-right: 10px;margin-left:4em">
                </td>
            </tr>
        </table>
        <!-- <br><br> -->
        <div style="padding-left:4em;padding-right:4em;margin-top:60px">
            <p class="text-start mb-0" style="font-size: 20px;"> Hi kak, <b>Rahmad Juanda Patra</b> </p>
        </div>
        <div style="margin-top: 40px;padding-left:4em;padding-right:4em;">
            <h4>Status pembayaranmu Kakak sukses. </h4>
            <h4>
                Terimakasih telah memilih t’Bliss.
            </h4>
            <h4 >
                Kami melampirkan Invoice untuk kakak unduh.
            </h4>
        </div>
        <div style="margin-top:45px;">
        <p>Berikut ringkasan pembayaranmu:</p>

        </div>
        <table width="100%" style="border-collapse: collapse;padding-left:4em;padding-right:4em">
            <tr>
                <td widdth="50%" style="background:#eee;padding:5px;">
                    <h3>
                        <strong>Invoice</strong> #{{$dataCoba['invoice_id']}}<br>

</h3>
<p class="mb-0">
    Invoice Date :{{$dataCoba['invoice_date']}}
</p>
</td>
<td style="background:#eee;padding:20px;">

</td>
</tr>
</table><br>

<table width="100%" style="padding-left:4em;padding-right:4em">
    <tr>
        <td>
            <table>
                <tr>

                    <td style="padding-left: 5px;">
                        <strong>Invoice To</strong><br>
                        <br>
                        Rahmad Juanda Patra<br>
                        patrajuanda10@gmail.com<br>
                        085157431699<br>
                        Jl. Kalibata Raya No.1

                    </td>
                </tr>
            </table>
        </td>
        <td class="d-none">
            <table>
                <tr>
                    <td style="vertical-align: text-top;">
                        <div style="background: #ffd9e8 url(https://cdn4.iconfinder.com/data/icons/app-custom-ui-1/48/Check_circle-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;"></div>
                    </td>
                    <td>
                        <strong>Delivery</strong><br>
                        Rahmad Juanda Patra<br>
                        patrajuanda10@gmail.com<br>
                        0851574316699<br>
                        Jl. Kalibata Raya No.1


                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table><br>

<table class="table" style="padding-left:4em;padding-right:4em">
    <thead style="border-collapse: collapse;border-bottom:1px solid #eee;background-color:#eee">
        <tr>
            <th scope="col" colspan="3" class="text-center">Description</th>
            <th scope="col" class="text-end">Total</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="3" class="text-center">{{$dataCoba['trip_name']}} x{{$dataCoba['trip_qty']}} <br>{{$dataCoba['statusPembayaran']}}</td>
            <td class="text-end">{{$dataCoba['price']}}</td>
        </tr>
    </tbody>
</table>
<br>
<table width="100%" style="background:#eee;padding-left:4em;padding-right:4em;margin-bottom:30px">
    <tr>
        <td>
            <table width="300px" style="float:right">
                <tr>
                    <td><strong>Sub-total:</strong></td>
                    <td style="text-align:right">{{$dataCoba['price']}}</td>
                </tr>
                <tr>
                    <td><strong>Grand total:</strong></td>
                    <td style="text-align:right">{{$dataCoba['price']}}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<div class="alert" style="margin-left:4em;margin-right:4em; margin-top:30px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
<div class="socialmedia mb-5" style="margin-left:4em;margin-right:4em">Follow us online <small>[FB] [INSTA]</small></div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>
--}}


