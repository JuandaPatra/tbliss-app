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
        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.invoice', ['id'=>$data->id]) }}" class="btn btn-outline-success me-3">Konfirmasi Pembayaran</a>
        {{--
            @if($finishInstallment == 1)
            <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.sendEmailUnpaid', ['id'=>$data->id]) }}" class="btn btn-outline-success me-3">Kirim Invoice unpaid</a>
        @endif
        @if($isInstallmentPayment == 0)
        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.finishPayment', ['id'=>$data->id]) }}" class="btn btn-outline-success me-3 disabled">Selesaikan Pembayaran</a>
        @elseif($isInstallmentPayment ==1)
        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.finishPayment', ['id'=>$data->id]) }}" class="btn btn-outline-success me-3 d-none">Selesaikan Pembayaran</a>
        @endif
        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.invoice', ['id'=>$data->id]) }}" class="btn btn-outline-success me-3">Konfirmasi Pembayaran</a>
        @if($data->status == 'Lunas')
        <a onclick="return confirm('Are you sure cancel this payment');" href="{{ route('payments.cancel', ['id'=>$data->id]) }}" class="btn btn-outline-danger">Batalkan status Pembayaran {{$data->status}}</a>
        @else
        <a onclick="return confirm('Are you sure cancel this payment');" href="{{ route('payments.confirm', ['id'=>$data->id]) }}" class="btn btn-outline-secondary disabled" disabled>Batalkan status Pembayaran </a>
        @endif
        --}}
    </div>

    <div class="row mb-5">
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100 ms-2">
                @if($data->foto_diunggah == null)
                <img class="card-img-top" src="{{ asset('images/header/images_not_found.png') }}" alt="Card image cap">
                @else
                <div id="image-payment">
                    <a href="{{ url('storage/'.$data->foto_diunggah) }}" data-lity data-lity-desc="Photo of a flower">Image</a>
                    <img class="card-img-top" src="{{ url('storage/'.$data->foto_diunggah) }}" alt="Card image cap" data-lity data-lity-target="{{ url('storage/'.$data->foto_diunggah) }}">
                </div>

                @endif
                <div class="card-body">
                    <p class="card-title">
                        <b>
                            Status: {{$data->status}}
                        </b>
                    </p>
                    @if($data->foto_diunggah != '')
                    <div class="d-flex justify-content-end">
                        <a onclick="return confirm('Are you sure finish this payment');" href="{{ route('payments.confirm', ['id'=>$data->id]) }}" class="btn btn-outline-success d-none">Pembayaran Lunas</a>
                        <!-- <a onclick="return confirm('Are you sure cancel this payment');" href="{{ route('payments.confirm', ['id'=>$data->id]) }}"  class="btn btn-outline-danger">Batalkan status Pembayaran</a> -->

                    </div>
                    @else
                    <div class="d-flex justify-content-end">
                        <a class="btn btn-disabled">Pembayaran Lunas</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-8 mb-3">
            <div class="table-responsive text-nowrap px-3" style="height:1000px">


                <table class="table table-bordered data-table">

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
                        {{-- <tr>
                            <td>
                                Visa
                            </td>
                            <td>
                                @currency($data->trip->visa)
                            </td>
                        </tr> --}}
                        <tr>
                            <td>
                                Total Visa
                            </td>
                            <td>
                                @currency($data->visa)
                            </td>
                        </tr>
                        {{-- <tr>
                            <td>
                                Tipping
                            </td>
                            <td>
                                @currency($data->trip->total_tipping)
                            </td>
                        </tr>--}}
                        <tr>
                        <tr>
                            <td>
                                Total Tipping
                            </td>
                            <td>
                                @currency($data->total_tipping)
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
                                @currency($data->grand_total)
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

    @if (session('success'))
    <div class="bs-toast toast toast-placement-ex m-2 fade bg-success top-0 end-0 show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <i class="bx bx-bell me-2"></i>
            <div class="me-auto fw-semibold">Admin</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
        {{ session('success') }}
        </div>
    </div>

    @endif
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