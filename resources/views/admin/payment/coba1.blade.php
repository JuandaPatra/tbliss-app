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

<body>
    <div class="position-relative">
        <div class="z-n1 position-absolute top-0 end-0">
            <img src="./images/header/paid.jpeg" alt="" style="height:140px">
        </div>
    </div>
    <div class="" style="padding-top:36px;">

        <table width="100%">
            <tr>
                <td width="75px">
                    <img src="./images/title/log/logo.png" alt="" class="mr-10" style="margin-right: 10px;margin-left:4em">
                </td>
                <td width="300px">
                    <div style="background: #ffd9e8;border-left: 15px solid #fff;padding-left: 30px;font-size: 26px;font-weight: bold;letter-spacing: -1px;height: 73px;line-height: 75px;">Order invoice</div>
                </td>
                <td></td>
            </tr>
        </table>
        <br><br>
        <div style="padding-left:4em;padding-right:4em">
            <h3 class="text-end mb-0"> <strong>PT. Tbliss</strong></h3>
            <p class="text-end mb-0">Jl. Bungur No 11 A </p>
            <p class="text-end mb-0">Kota Adm. Jakarta Selatan, DKI Jakarta</p><br>
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
        <table width="100%" style="padding-left:4em;padding-right:4em">
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
                                {{$dataCoba['title']['phone']}}<br>
                                {{$dataCoba['title']['alamat']}}

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
                                {{$dataCoba['title']['phone']}}<br>
                                {{$dataCoba['title']['alamat']}}


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
        <table class="table" style="padding-left:4em;padding-right:4em">
            <thead style="border-collapse: collapse;border-bottom:1px solid #eee;background-color:#eee">
                <tr>
                    <th scope="col" colspan="3" class="text-center">Description</th>
                    <th scope="col" class="text-end">Total</th>
                    <!-- <th scope="col">Last</th>
                    <th scope="col">Handle</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <!-- <th scope="row"></th> -->
                    <td colspan="3" class="text-center">{{$dataCoba['trip_name']}} x{{$dataCoba['trip_qty']}} <br>{{$dataCoba['statusPembayaran']}}</td>
                    <td class="text-end">{{$dataCoba['price']}}</td>
                    <!-- <td>@mdo</td> -->
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
    </div><!-- container -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>