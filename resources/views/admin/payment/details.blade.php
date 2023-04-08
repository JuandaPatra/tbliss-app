{{--<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Forms /</span> Basic Inputs
    </h4>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <h5 class="card-header">Default</h5>
                <div class="card-body">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="defaultFormControlInput" placeholder="John Doe" aria-describedby="defaultFormControlHelp" fdprocessedid="p3xkv">
                        <div id="defaultFormControlHelp" class="form-text">We'll never share your details with anyone else.</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <h5 class="card-header">Float label</h5>
                <div class="card-body">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="John Doe" aria-describedby="floatingInputHelp" fdprocessedid="e3k32w">
                        <label for="floatingInput">Name</label>
                        <div id="floatingInputHelp" class="form-text">We'll never share your details with anyone else.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form controls -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h5 class="card-header">Form Controls</h5>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" fdprocessedid="stw1ag">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Read only</label>
                        <input class="form-control" type="text" id="exampleFormControlReadOnlyInput1" placeholder="Readonly input here..." readonly="" fdprocessedid="1mmqyr">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Read plain</label>
                        <input type="text" readonly="" class="form-control-plaintext" id="exampleFormControlReadOnlyInputPlain1" value="email@example.com" fdprocessedid="lt5pzt">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Example select</label>
                        <select class="form-select" id="exampleFormControlSelect1" aria-label="Default select example" fdprocessedid="4i8aa">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleDataList" class="form-label">Datalist example</label>
                        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search..." fdprocessedid="hgwbz">
                        <datalist id="datalistOptions">
                            <option value="San Francisco">
                            </option>
                            <option value="New York">
                            </option>
                            <option value="Seattle">
                            </option>
                            <option value="Los Angeles">
                            </option>
                            <option value="Chicago">
                            </option>
                        </datalist>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlSelect2" class="form-label">Example multiple select</label>
                        <select multiple="" class="form-select" id="exampleFormControlSelect2" aria-label="Multiple select example" fdprocessedid="od1hf9">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div>
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Input Sizing -->
        <div class="col-md-6">
            <div class="card mb-4">
                <h5 class="card-header">Input Sizing</h5>
                <div class="card-body">
                    <small class="text-light fw-semibold">Input text</small>

                    <div class="mt-2 mb-3">
                        <label for="largeInput" class="form-label">Large input</label>
                        <input id="largeInput" class="form-control form-control-lg" type="text" placeholder=".form-control-lg" fdprocessedid="9161rh">
                    </div>
                    <div class="mb-3">
                        <label for="defaultInput" class="form-label">Default input</label>
                        <input id="defaultInput" class="form-control" type="text" placeholder="Default input" fdprocessedid="0ran0b">
                    </div>
                    <div>
                        <label for="smallInput" class="form-label">Small input</label>
                        <input id="smallInput" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" fdprocessedid="t6qpcl">
                    </div>

                </div>
                <hr class="m-0">
                <div class="card-body">
                    <small class="text-light fw-semibold">Input select</small>
                    <div class="mt-2 mb-3">
                        <label for="largeSelect" class="form-label">Large select</label>
                        <select id="largeSelect" class="form-select form-select-lg" fdprocessedid="jzujii">
                            <option>Large select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="defaultSelect" class="form-label">Default select</label>
                        <select id="defaultSelect" class="form-select" fdprocessedid="lnc6pd">
                            <option>Default select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div>
                        <label for="smallSelect" class="form-label">Small select</label>
                        <select id="smallSelect" class="form-select form-select-sm" fdprocessedid="j75zmp">
                            <option>Small select</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Default Checkboxes and radios & Default checkboxes and radios -->
        <div class="col-xl-6">

            <div class="card mb-4">
                <h5 class="card-header">Checkboxes and Radios</h5>
                <!-- Checkboxes and Radios -->
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-md">
                            <small class="text-light fw-semibold">Checkboxes</small>
                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1">
                                    Unchecked
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2" checked="">
                                <label class="form-check-label" for="defaultCheck2">
                                    Indeterminate
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked="">
                                <label class="form-check-label" for="defaultCheck3">
                                    Checked
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="disabledCheck1" disabled="">
                                <label class="form-check-label" for="disabledCheck1">
                                    Disabled Unchecked
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="disabledCheck2" disabled="" checked="">
                                <label class="form-check-label" for="disabledCheck2">
                                    Disabled Checked
                                </label>
                            </div>
                        </div>
                        <div class="col-md">
                            <small class="text-light fw-semibold">Radio</small>
                            <div class="form-check mt-3">
                                <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio1">
                                <label class="form-check-label" for="defaultRadio1">
                                    Unchecked
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                                <label class="form-check-label" for="defaultRadio2">
                                    Checked
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="disabledRadio1" disabled="">
                                <label class="form-check-label" for="disabledRadio1">
                                    Disabled unchecked
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="disabledRadio2" disabled="" checked="">
                                <label class="form-check-label" for="disabledRadio2">
                                    Disabled checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="m-0">
                <!-- Inline Checkboxes -->
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-md">
                            <small class="text-light fw-semibold d-block">Inline Checkboxes</small>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled="">
                                <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <small class="text-light fw-semibold d-block">Inline Radio</small>
                            <div class="form-check form-check-inline mt-3">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">1</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">2</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled="">
                                <label class="form-check-label" for="inlineRadio3">3 (disabled)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Switches -->
            <div class="card mb-4">
                <h5 class="card-header">Switches</h5>
                <div class="card-body">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" disabled="">
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" checked="" disabled="">
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                    </div>
                </div>
            </div>

            <!-- Range -->
            <div class="card mb-4 mb-xl-0">
                <h5 class="card-header">Range</h5>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formRange1" class="form-label">Example range</label>
                        <input type="range" class="form-range" id="formRange1">
                    </div>
                    <div class="mb-3">
                        <label for="disabledRange" class="form-label">Disabled range</label>
                        <input type="range" class="form-range" id="disabledRange" disabled="">
                    </div>
                    <div class="mb-3">
                        <label for="formRange2" class="form-label">Min and max</label>
                        <input type="range" class="form-range" min="0" max="5" id="formRange2">
                    </div>
                    <div>
                        <label for="formRange3" class="form-label">Steps</label>
                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="formRange3">
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-6">
            <!-- HTML5 Inputs -->
            <div class="card mb-4">
                <h5 class="card-header">HTML5 Inputs</h5>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Text</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" value="Sneat" id="html5-text-input" fdprocessedid="lqcx2">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-search-input" class="col-md-2 col-form-label">Search</label>
                        <div class="col-md-10">
                            <input class="form-control" type="search" value="Search ..." id="html5-search-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-email-input" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" value="john@example.com" id="html5-email-input" fdprocessedid="o92oen">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-url-input" class="col-md-2 col-form-label">URL</label>
                        <div class="col-md-10">
                            <input class="form-control" type="url" value="https://themeselection.com" id="html5-url-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-tel-input" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                            <input class="form-control" type="tel" value="90-(164)-188-556" id="html5-tel-input" fdprocessedid="pxnbxl">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-password-input" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" value="password" id="html5-password-input" fdprocessedid="320npu">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-number-input" class="col-md-2 col-form-label">Number</label>
                        <div class="col-md-10">
                            <input class="form-control" type="number" value="18" id="html5-number-input" fdprocessedid="bycrm8">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Datetime</label>
                        <div class="col-md-10">
                            <input class="form-control" type="datetime-local" value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-date-input" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-10">
                            <input class="form-control" type="date" value="2021-06-18" id="html5-date-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-month-input" class="col-md-2 col-form-label">Month</label>
                        <div class="col-md-10">
                            <input class="form-control" type="month" value="2021-06" id="html5-month-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-week-input" class="col-md-2 col-form-label">Week</label>
                        <div class="col-md-10">
                            <input class="form-control" type="week" value="2021-W25" id="html5-week-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-time-input" class="col-md-2 col-form-label">Time</label>
                        <div class="col-md-10">
                            <input class="form-control" type="time" value="12:30:00" id="html5-time-input">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="html5-color-input" class="col-md-2 col-form-label">Color</label>
                        <div class="col-md-10">
                            <input class="form-control" type="color" value="#666EE8" id="html5-color-input">
                        </div>
                    </div>
                    <div class="row">
                        <label for="html5-range" class="col-md-2 col-form-label">Range</label>
                        <div class="col-md-10">
                            <input type="range" class="form-range mt-3" id="html5-range">
                        </div>
                    </div>
                </div>
            </div>

            <!-- File input -->
            <div class="card">
                <h5 class="card-header">File input</h5>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                        <input class="form-control" type="file" id="formFileMultiple" multiple="">
                    </div>
                    <div>
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled" disabled="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- pricingModal -->
    <!--/ pricingModal -->

</div>--}}
@extends('admin.layouts.dashboard')
@section('title')
Sliders
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('sliders') }} --}}
@endsection
@section('content')
<div class="card">
    <h5 class="card-header">List Payment</h5>
    <div class="d-flex justify-content-end px-4 mb-4">
        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.invoice', ['id'=>$data->id]) }}" class="btn btn-outline-success me-3">Kirim Email Invoice</a>
        @if($data->status == 'Lunas')
        <a onclick="return confirm('Are you sure cancel this payment');" href="{{ route('payments.cancel', ['id'=>$data->id]) }}" class="btn btn-outline-danger">Batalkan status Pembayaran {{$data->status}}</a>
        @else
        <a onclick="return confirm('Are you sure cancel this payment');" href="{{ route('payments.confirm', ['id'=>$data->id]) }}" class="btn btn-outline-secondary disabled" disabled>Batalkan status Pembayaran </a>
        @endif
    </div>
    <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
                @if($data->foto_diunggah == null)
                <img class="card-img-top" src="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template-free/demo/assets/img/elements/2.jpg" alt="Card image cap">
                @else
                <!-- <div id="my-zoomist" class="card-img-top" data-zoomist-src="{{ url('storage/'.$data->foto_diunggah) }}"></div> -->
                <div id="image-payment">
                    <a href="{{ url('storage/'.$data->foto_diunggah) }}" data-lity data-lity-desc="Photo of a flower">Image</a>
                    <!-- <div id="inline" style="background:#fff" class="lity-hide">
                        Inline content
                    </div> -->
                    <img class="card-img-top" src="{{ url('storage/'.$data->foto_diunggah) }}" alt="Card image cap" data-lity data-lity-target="{{ url('storage/'.$data->foto_diunggah) }}">
                </div>
                <!-- <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ url('storage/'.$data->foto_diunggah) }})">
                    <img src="{{ url('storage/'.$data->foto_diunggah) }}" />
                </figure> -->
                <!-- <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(//res.cloudinary.com/active-bridge/image/upload/slide1.jpg)">
                    <img src="//res.cloudinary.com/active-bridge/image/upload/slide1.jpg" />
                </figure> -->
                @endif
                <div class="card-body">
                    <p class="card-title">
                        <b>
                           Status: {{$data->status}}
                        </b>
                    </p>
                    <div class="d-flex justify-content-end">
                        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.confirm', ['id'=>$data->id]) }}" class="btn btn-outline-success">Pembayaran Lunas</a>
                        <!-- <a onclick="return confirm('Are you sure cancel this payment');" href="{{ route('payments.confirm', ['id'=>$data->id]) }}"  class="btn btn-outline-danger">Batalkan status Pembayaran</a> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-8 mb-3">
            <div class="table-responsive text-nowrap px-3" style="height:1000px">


                <table class="table table-bordered data-table">
                    <!-- <thead>
                        <tr>
                            <th>No</th>
                            <th>Invoice Number</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Status</th>
                            <th>Check Detail</th>
                        </tr>
                    </thead> -->
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <b>Payment Details</b>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Order ID
                            </td>
                            <td>
                                #ORD{{$data->order_id}}

                            </td>
                        </tr>
                        <tr>
                            <td>
                                Invoice ID
                            </td>
                            <td>
                                #{{$data->invoice_id}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Status Pembayaran
                            </td>
                            <td>
                                {{$statusPayment}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Trip
                            </td>
                            <td>
                                {{$data->trip->title}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Price
                            </td>
                            <td>
                                @currency($data->price_dp)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Qty
                            </td>
                            <td>
                                {{$data->qty}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Total Payment
                            </td>
                            <td>
                                @currency($data->total)
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <b>User Details</b>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                Name
                            </td>
                            <td>
                                {{$data->user->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email
                            </td>
                            <td>
                                {{$data->user->email}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                phone
                            </td>
                            <td>
                                {{$data->user->phone}}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Alamat
                            </td>
                            <td>
                                {{$data->user->alamat}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    {{--<div class="table-responsive text-nowrap px-3" style="height:1000px">


        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Invoice Number</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Status</th>
                    <th>Check Detail</th>
                    <!-- <th>status pembayaran</th> -->
                    <!-- <th>Total</th> -->
                    <!-- <th>Bukti pembayaran</th> -->
                    <!-- <th>Tanggal pembayaran</th> -->
                    <!-- <th>Approve Payment</th> -->
                    <!-- <th>Cetak Invoice</th> -->
                    <!-- <th><button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-danger btn-xs">Delete</button></th> -->
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>--}}
</div>
@endsection
@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


<script src="https://cdn.jsdelivr.net/gh/cotton123236/zoomist@latest/dist/zoomist.min.js"></script>
@endpush
@push('css-internal')
<style>
    .post-tumbnail {
        width: 100%;
        height: 400px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    #image-payment img.zoomed {
        transform: scale(1.5);
    }

    /* figure.zoom {
        background-position: 50% 50%;
        position: relative;
        width: 500px;
        overflow: hidden;
        cursor: zoom-in;
    }

    figure.zoom img:hover {
        opacity: 0;
    }

    figure.zoom img {
        transition: opacity 0.5s;
        display: block;
        width: 100%;
    } */
</style>
@endpush
@push('javascript-internal')
<script>
    $(document).ready(function() {



        document.getElementById('image-payment').addEventListener('click', function(e) {
            const tgt = e.target;
            tgt.classList.toggle('zoomed')
        })

        // $('.card-img-top').on('click', '[data-lightbox]', lity);

        // var table = $('.data-table').DataTable();

        // var table = $('.data-table').DataTable({
        //     processing: true,
        //     serverSide: true,
        //     ajax: {
        //        url: "{{ route('payments.table') }}",
        //        type : "GET",
        //        data: function (data) {
        //         console.log(data)
        //     },

        //     },
        //     // columnDefs: [
        //     //     {
        //     //         targets: 7,
        //     //         render: DataTable.render.datetime('Do MMM YYYY'),
        //     //     },
        //     // ],
        //     columns: [
        //         {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        //         // {
        //         //     data: 'user_id',
        //         //     name: 'user_id'
        //         // },
        //         // {
        //         //     data: 'email',
        //         //     name: 'email'
        //         // },
        //         // {
        //         //     data: 'company',
        //         //     name: 'company'
        //         // },
        //         // {
        //         //     data: 'subject',
        //         //     name: 'subject'
        //         // },
        //         // {
        //         //     data: 'address',
        //         //     name: 'address'
        //         // },
        //         // {
        //         //     data: 'phone',
        //         //     name: 'phone'
        //         // },
        //         // {
        //         //     data: 'message',
        //         //     name: 'message'
        //         // },
        //         // {
        //         //     data: 'created_at',
        //         //     render: function(d) {
        //         //         return moment(d).format("DD/MM/YYYY HH:mm");
        //         //     }
        //         // },
        //         // {
        //         //     data: 'checkbox',
        //         //     name: 'checkbox',
        //         //     orderable: false,
        //         //     searchable: false
        //         // },
        //     ]
        // });

        function zoom(e) {
            var zoomer = e.currentTarget;
            e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
            e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
            x = offsetX / zoomer.offsetWidth * 100
            y = offsetY / zoomer.offsetHeight * 100
            zoomer.style.backgroundPosition = x + '% ' + y + '%';
        }

        new Zoomist(element[, options])

        // for example
        new Zoomist('#my-zoomist')

        // advanced usage
        const myZoomist = document.querySelector('#my-zoomist')
        new Zoomist(zoomistElement, {
            // optional parameters
            maxRatio: 4,
            height: '60%',
            // if you need silder
            slider: true,
            // if you need zoomer
            zoomer: true,
            // event
            on: {
                ready() {
                    console.log('Zoomist ready!')
                }
            }
        })
        // event delete category
        $("form[role='alert']").submit(function(event) {
            event.preventDefault();
            Swal.fire({
                title: "Apakah anda ingin menghapus ?",
                text: $(this).attr('alert-text'),
                icon: 'warning',
                allowOutsideClick: false,
                showCancelButton: true,
                cancelButtonText: "Cancel",
                reverseButtons: true,
                confirmButtonText: "Yes",
            }).then((result) => {
                if (result.isConfirmed) {
                    // todo: process of deleting categories
                    event.target.submit();
                }
            });
        });
    });
</script>
@endpush