<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:200px;
        height:60px;        
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .text-tbliss{
        color: '#4A5CED';
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body style="margin-top:30px;padding-left:14px;padding-right: 14px;">
<!-- <div class="head-title">
    <h1 class="text-center m-0 p-0">Invoice</h1>
</div> -->
<div class="add-detail mt-10">
    <div class="w-50 float-left mt-10">
        <p class="m-0 pt-5 text-bold w-100">Bukti Pembelian</p>
        <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#INV59825</span></p>
        <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">#TBL5982511</span></p>
        <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{$data->tanggal_pembayaran}}</span></p>
    </div>
    <div class="w-50 float-left logo mt-10">
        <!-- <img src="{{ asset('images/title/logo.png') }}" alt="" class="w-[145px] h-[40px] lg:w-[231px] lg:h-[61px]"> -->
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
                    <p >Nama : <span class="gray-color">{{$data->user->name}}</span> </p>
                    <p >Email : <span class="gray-color">{{$data->user->email}}</span> </p>
                    <p >Telephone : <span class="gray-color">087722039749</span> </p>                  
                </div>
            </td>
        </tr>
    </table>
</div>

<div class="table-section bill-tbl w-100 mt-10 mb-10">
    <table class="table w-100 mt-10">
        <tr>
            <th >No</th>
            <th class="w-50">Trip</th>
            <th >Price</th>
            <th >Qty</th>
            <th >Total</th>
        </tr>
        <tr align="center">
            <td>1</td>
            <td>{{$data->trip->title}} <span>(15 persen down payment)</span> </td>
            <td>@currency($data->price_dp)</td>
            <td>{{$data->qty}}</td>
            
            <td>@currency($data->total)</td>
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
                        <p>@currency($data->total)</p>
                        <p>Rp.150.000</p>
                        <p>@currency($data->total)</p>
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
        <p>Silahkan hubungi <a class="text-tbliss" style="color:#4A5CED;">admin@tbliss.com</a> atau <span style="color:#4A5CED">0877712394</span>  apabila kamu butuh bantuan</p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>