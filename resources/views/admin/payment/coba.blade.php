{{-- <!DOCTYPE html>
<html>

<head>
    <title>Invoice</title>
</head>

<style type="text/css">
    body {
        font-family: 'Roboto Condensed', sans-serif;
    }

    .d-flex{
        display: flex;
    }

    .justify-content-between{
        justify-content: space-between;
    }

    .m-0 {
        margin: 0px;
    }

    .p-0 {
        padding: 0px;
    }

    .pt-5 {
        padding-top: 5px;
    }

    .mt-10 {
        margin-top: 10px;
    }

    .mr-10{
        margin-right: 10px;
    }
    .text-center {
        text-align: center !important;
    }

    .w-100 {
        width: 100%;
    }

    .w-50 {
        width: 50%;
    }

    .w-85 {
        width: 85%;
    }

    .w-15 {
        width: 15%;
    }

    .logo img {
        width: 200px;
        height: 60px;
    }

    .gray-color {
        color: #5D5D5D;
    }

    .text-bold {
        font-weight: bold;
    }

    .text-tbliss {
        color: '#4A5CED';
    }

    .border {
        border: 1px solid black;
    }

    table tr,
    th,
    td {
        border: 1px solid #d2d2d2;
        border-collapse: collapse;
        padding: 7px 8px;
    }

    table tr th {
        background: #F4F4F4;
        font-size: 15px;
    }

    table tr td {
        font-size: 13px;
    }

    table {
        border-collapse: collapse;
    }

    .box-text p {
        line-height: 10px;
    }

    .float-left {
        float: left;
    }

    .total-part {
        font-size: 16px;
        line-height: 12px;
    }

    .total-right p {
        padding-right: 20px;
    }
</style>

<body style="margin-top:30px;padding-left:14px;padding-right: 14px;">
    <!-- <div class="head-title">
    <h1 class="text-center m-0 p-0">Invoice</h1>
</div> -->
    <div class="add-detail mt-10 d-flex justify-content-between" style="display:flex; justify-content:space-between">
        <div class="w-50 float-left mt-10">
            <p class="m-0 pt-5 text-bold w-100">Bukti Pembelian</p>
            <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#INV59825</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">#{{$dataCoba['orderid']}}</span></p>
<p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">#300333333333</span></p>
</div>
<div class="w-50 float-left logo mt-10">

    <img src="./images/title/log/logo.png" alt="" class="mr-10" style="margin-right: 10px;">
</div>
<div style="clear: both;"></div>
</div>
<div class="table-section bill-tbl w-100 mt-10">
    <table class="table w-100 mt-10">
        <tr>
            <th class="w-50">DATA PEMESAN</th>
        </tr>
        <tr>
            <td>
                <div class="box-text">
                    <p>Nama : <span class="gray-color">{{$dataCoba['title']['nama']}}</span> </p>
                    <p>Email : <span class="gray-color">{{$dataCoba['title']['email']}}</span> </p>
                    <p>Telephone : <span class="gray-color">{{$dataCoba['title']['telephone']}}</span> </p>
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="table-section bill-tbl w-100 mt-10 mb-10">
    <table class="table w-100 mt-10" style="width:100%">
        <tr>
            <th>No</th>
            <th class="w-50">Trip</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>Korea Summer Trip<span>(15 persen down payment)</span> </td>
            <td>Rp.15.000.000</td>
            <td>1</td>

            <td>Rp.15.000.000</td>
        </tr>
        <tr>
            <td colspan="7">
                <div class="total-part">
                    <div class="total-left w-85 float-left" align="right">
                        <p>Sub Total</p>
                        <p>Tax (18%)</p>
                        <p>Total Payable</p>
                    </div>
                    <div class="total-right w-15 float-left text-bold" align="right">
                        <p>Rp.15.000.000</p>
                        <p>Rp.150.000</p>
                        <p>Rp.15.000.000</p>
                    </div>
                    <div style="clear: both;"></div>
                </div>
            </td>
        </tr>
    </table>
</div>
<div class="d-flex justify-between">
    <div style="margin-top:30px">
        <p>Invoice ini sah dan diproses oleh Komputer</p>
        <p>Silahkan hubungi <a class="text-tbliss" style="color:#4A5CED;">admin@tbliss.com</a> atau <span style="color:#4A5CED">0877712394</span> apabila kamu butuh bantuan</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html> --}}

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<style>
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

<body>
    <div class="position-relative">
        <div class="z-n1 position-absolute top-0 end-0">
            <img src="./images/header/unpaid.png" alt="" style="height:140px">
        </div>
    </div>
    <div class="container" style="padding-top:36px">

        <table width="100%">
            <tr>
                <td width="75px">
                    <img src="./images/title/log/logo.png" alt="" class="mr-10" style="margin-right: 10px;">
                </td>
                <td width="300px">
                    <div style="background: #ffd9e8;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;">Order invoice</div>
                </td>
                <td></td>
            </tr>
        </table>
        <br><br>
        <h3 class="text-end mb-0"> <strong>PT. Tbliss</strong></h3>
        <p class="text-end mb-0">Jl. Bungur No 11 A </p>
        <p class="text-end mb-0">Kota Adm. Jakarta Selatan, DKI Jakarta</p><br>
        <table width="100%" style="border-collapse: collapse;">
            <tr>
                <td widdth="50%" style="background:#eee;padding:5px;">
                    <h3>
                        <strong>Invoice</strong> #{{$dataCoba['orderid']}}<br>

                    </h3>
                    <p class="mb-0">
                        Invoice Date : Tuesday, February 14th 2023
                    </p>
                    <p class="mb-0">
                        Due Date : Thursday, March 2nd 2023
                    </p>
                </td>
                <td style="background:#eee;padding:20px;">
                    <!-- <strong>Order-nr:</strong> 27100<br>
                    <strong>E-mail:</strong> firstname@company.com<br>
                    <strong>Phone:</strong> 004676234567<br> -->
                </td>
            </tr>
        </table><br>
        <!-- <table width="100%" style="border-collapse: collapse;">
            <tr>
                <td widdth="50%" style="background:#eee;padding:20px;">
                    <strong>Date:</strong> 2021/05/26<br>
                    <strong>Payment type:</strong> Credit Card VISA<br>
                    <strong>Delivery type:</strong> Postnord<br>
                </td>
                <td style="background:#eee;padding:20px;">
                    <strong>Order-nr:</strong> 27100<br>
                    <strong>E-mail:</strong> firstname@company.com<br>
                    <strong>Phone:</strong> 004676234567<br>
                </td>
            </tr>
        </table><br> -->
        <table width="100%">
            <tr>
                <td>
                    <table>
                        <tr>
                            <!-- <td style="vertical-align: text-top;">
                                <div style="background: #ffd9e8 url(https://cdn0.iconfinder.com/data/icons/commerce-line-1/512/comerce_delivery_shop_business-07-128.png);width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 42px;"></div>
                            </td> -->
                            <td style="padding-left: 5px;">
                                <strong>Invoice To</strong><br>
                                <br>
                                {{$dataCoba['title']['nama']}}<br>
                                {{$dataCoba['title']['email']}}<br>
                                {{$dataCoba['title']['telephone']}}<br>
                                Jl. Hasan Basri K. Tangi II RT.18 No.42 Banjarmasin
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
                                {{$dataCoba['title']['nama']}}<br>
                                {{$dataCoba['title']['email']}}<br>
                                {{$dataCoba['title']['telephone']}}<br>
                                Jl. Hasan Basri K. Tangi II RT.18 No.42 Banjarmasin

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table><br>
        <!-- <table width="100%" style="border-top:1px solid #eee;border-bottom:1px solid #eee;padding:0 0 8px 0">
            <tr>
                <td>
                    <h3>Checkout details</h3>Your checkout made by VISA Card **** **** **** 2478
                <td>
            </tr>
        </table><br>
        <div style="background: #ffd9e8 url(https://cdn4.iconfinder.com/data/icons/basic-ui-2-line/32/shopping-cart-shop-drop-trolly-128.png) no-repeat;width: 50px;height: 50px;margin-right: 10px;background-position: center;background-size: 25px;float: left; margin-bottom: 15px;"></div>
        <h3>Your articles</h3> -->

        {{--<table width="100%" style="border-collapse: collapse;border-bottom:1px solid #eee;">
            <tr>
                <td colspan="3"  class="column-header ">Description</td>
                <!-- <td width="20%" class="column-header">Options</td> -->
                <!-- <td width="20%" class="column-header">Price</td> -->
                <td width="20%" class="column-header">Total</td>
            </tr>
            <tr>
                <td col-span="3" class="column-header ">2</td>
                <!-- <td>Jacob</td>
                <td>Thornton</td> -->
                <td class="column-header ">Rp.15.000.000</td>
            </tr>
            <!-- <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            <tr>
                <td class="row"><span style="color:#777;font-size:11px;">#64000L</span><br>Softstyle Lady Fit</td>
                <td class="row">Black | Large</td>
                <td class="row">4 <span style="color:#777">X</span> 25 SEK</td>
                <td class="row">100 SEK</td>
            </tr>
            <tr>
                <td class="row"><span style="color:#777;font-size:11px;">#64000L</span><br>Softstyle Lady Fit</td>
                <td class="row">Black | Large</td>
                <td class="row">4 <span style="color:#777">X</span> 25 SEK</td>
                <td class="row">100 SEK</td>
            </tr>
            <tr>
                <td class="row"><span style="color:#777;font-size:11px;">#64000L</span><br>Softstyle Lady Fit</td>
                <td class="row">Black | Large</td>
                <td class="row">4 <span style="color:#777">X</span> 25 SEK</td>
                <td class="row">100 SEK</td>
            </tr> -->
        </table>--}}
        <table class="table">
            <thead style="border-collapse: collapse;border-bottom:1px solid #eee;background-color:#eee">
                <tr>
                    <th scope="col" colspan="3" class="text-center">Description</th>
                    <th scope="col" class="text-end" >Total</th>
                    <!-- <th scope="col">Last</th>
                    <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row"></th> -->
                    <td colspan="3" class="text-center">Korea Summer Trip x1 <br>DownPayment</td>
                    <td class="text-end">Rp.15.000.000</td>
                    <!-- <td>@mdo</td> -->
                </tr>
            </tbody>
        </table>
        <br>
        <table width="100%" style="background:#eee;padding:20px;">
            <tr>
                <td>
                    <table width="300px" style="float:right">
                        <tr>
                            <td><strong>Sub-total:</strong></td>
                            <td style="text-align:right">Rp.15.000.000</td>
                        </tr>
                        <!-- <tr>
                            <td><strong>Shipping fee:</strong></td>
                            <td style="text-align:right">50 SEK</td>
                        </tr> -->
                        <tr>
                            <td><strong>Tax 11%:</strong></td>
                            <td style="text-align:right">Rp.1.650.000</td>
                        </tr>
                        <tr>
                            <td><strong>Grand total:</strong></td>
                            <td style="text-align:right">Rp.16.650.000</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div class="alert">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
        <div class="socialmedia mb-5">Follow us online <small>[FB] [INSTA]</small></div>
    </div><!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>