{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

<div class="card-body">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif

  {{ __('You are logged in!') }}
</div>
</div>
</div>
</div>
</div>
@endsection --}}

@extends('admin.layouts.dashboard')
@section('title')
Dashboard
@endsection
@section('breadcrumbs')
{{ Breadcrumbs::render('home') }}
@endsection
@section('content')
<div class="row">
  <div class="col-lg-8 mb-4 order-0">
    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Selamat Datang {{Auth::user()->name}}</h5>
            <p class="mb-4">
              Ada beberapa artikel <span class="fw-bold"></span> yang belum di Update. Klik Update tekan button Di bawah ini
            </p>
            <p class="btn btn-sm btn-outline-primary updateSkor">Update Artikel</p>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{ asset('vendor/my-dashboard/img/illustrations/man-with-laptop-light.png') }}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class='bx bx-trip bx-lg '></i>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Paket Trip</span>
            <h3 class="card-title mb-2">{{$countTrip}}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <i class='bx bx-user bx-lg '></i>
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Hidden Gems</span>
            <h3 class="card-title text-nowrap mb-1">{{$countHiddenGems}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 order-3">
    

    <table class="table table-bordered data-table" style="width: 100%;">
      <thead>
        <tr>
          <th>No</th>
          <th>InvoiceID</th>
          <th>OrderID</th>
          <th>Opsi Pembayaran</th>
          <th>Status Pembayaran 1</th>
          <th>Installment 1</th>
          <th>Installment 2</th>
          <th>See Invoice</th>
          <!-- <th>Status</th> -->
        </tr>
       
      </thead>
      <tbody>

      </tbody>
    </table>
  </div>
</div>
@endsection
@push('javascript-internal')
 <script>
     $(document).ready(function() {
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
 @push('javascript-external')
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
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
     

 </style>
 @endpush
 @push('javascript-internal')
 <script>
     $(document).ready(function() {
         var table = $('.data-table').DataTable({
             processing: true,
             serverSide: true,
             ajax: "{{ route('tableDashboard') }}",
             columns: [
                 //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                 //  { "width": "20%" },
                 {
                     data: 'DT_RowIndex',
                     name: 'DT_RowIndex',
                     orderable: false,
                     searchable: false
                 },
                 
                 {
                     data: 'invoice_id',
                     name: 'invoice_id'
                 },
                 {
                     data: 'order_id',
                     name: 'order_id'
                 },
                 {
                     data: 'opsi_pembelian',
                     name: 'opsi_pembayaran'
                 },
                 {
                     data: 'status',
                     name: 'status'
                 },
                 {
                     data: 'due_satu',
                     name: 'due_satu'
                 },
                  {
                      data: 'due_dua',
                      name: 'due_dua'
                  },
                 
                 {
                     data: 'invoice',
                     name: 'invoice'
                 },
                 
             ]
         });
     });
 </script>
 @endpush