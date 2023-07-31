@extends('admin.layouts.dashboard')
@section('title')
Sliders
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('sliders') }} --}}
@endsection
@section('content')
<div class="card">
    <h3 class="card-header text-uppercase">List Payment</h3>
    <div class="table-responsive text-nowrap px-3" style="height:1000px">

        <table class="table table-bordered data-table" style="margin: 20px 0 !important;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Invoice Number</th>
                    <th>ORDER Number</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Status</th>
                    <th>Check Detail</th>
                </tr>
            </thead>
            <tbody>
                {{--@foreach($data as $payment)
                <tr>
                    <td>
                        1
                    </td>
                    <td>
                        {{$payment->user->name}}
                </td>
                <td>
                    {{$payment->trip->title}}
                </td>
                <td>
                    {{$payment->qty}}
                </td>
                <td>
                    @currency($payment->price)
                </td>
                <td>
                    @if($payment->price != $payment->price_dp)
                    <span class="text-danger">DP Payment</span>
                    @else
                    <span class="text-success">Full Payment</span>
                    @endif
                </td>
                <td>
                    @currency($payment->total)
                </td>
                <td>
                    <img src="{{$payment->foto_diunggah}}" alt="" style="height:30px;width:30px">
                </td>
                <td>
                    {{$payment->tanggal_pembayaran_acc}}
                </td>
                <td>
                    @if(!empty($payment->tanggal_pembayaran_acc) )
                    <button type="button" name="bulk_delete" id="bulk_delete" class="btn btn-success btn-xs">Approve Payment</button>
                    @endif
                </td>
                <td>
                    @if(!empty($payment->tanggal_pembayaran_acc) )
                    <a href="{{ route('payments.invoice',['product'=>$payment->id]) }}" name="bulk_delete" id="bulk_delete" class="btn btn-primary btn-xs">Cetak Invoice</a>
                    @endif
                </td>
                </tr>
                @endforeach--}}
                @foreach($ndata as $payment)
                <tr>
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        #{{$payment->invoice_id}}
                    </td>
                    <td>
                        ORD{{$payment->order_id}}
                    </td>
                    <td>
                        {{$payment->tanggal_pembayaran}}
                    </td>
                    <td>
                        {{$payment->status}}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('payments.show',['payment'=>$payment->id]) }}" name="bulk_delete" id="bulk_delete" class="btn btn-primary btn-xs">Lihat Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
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

    table.dataTable {
        margin: 20px 0 !important;
    }
</style>
@endpush
@push('javascript-internal')
<script>
    $(document).ready(function() {

        var table = $('.data-table').DataTable({
            stateSave: true,
            stateSaveCallback: function(settings, data) {
                localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data))
            },
            stateLoadCallback: function(settings) {
                return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance))
            }
        });

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