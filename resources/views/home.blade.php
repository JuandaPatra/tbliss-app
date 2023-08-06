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
    <div class="d-flex">
      <div class="mb-2 me-3">
        <label for="exampleFormControlSelect1" class="form-label">Status</label>
        <select class="form-select" id="statusPaymentSelect" aria-label="Default select example" fdprocessedid="ektcn9">
          <option value="">Open this select menu</option>
          <option value="1">Menunggu Pembayaran</option>
          <option value="2">Menunggu Verifikasi</option>
          <option value="3">Lunas</option>
        </select>
      </div>
      <div class="mb-2 me-3">
        <label for="exampleFormControlSelect1" class="form-label">Jenis Pembayaran</label>
        <select class="form-select" id="paymentMethodSelect" aria-label="Default select example" fdprocessedid="ektcn9">
          <option value="">Open this select menu</option>
          <option value="1">Full Payment</option>
          <option value="2">Down Payment</option>
        </select>
      </div>
      <div class="mb-2 me-3">
        <label for="exampleFormControlSelect1" class="form-label">Installment</label>
        <select class="form-select" id="installmentSelect" aria-label="Default select example" fdprocessedid="ektcn9">
          <option value="">Open this select menu</option>
          <option value="1">Installment 1</option>
          <option value="2">Installment 2</option>
        </select>
      </div>
      <div class="mb-2 me-3" style="margin-top: 30px;">
        <input type="text" class="selector" placeholder="Pilih Tanggal">
      </div>
      <div class="mb-2 me-3" style="margin-top: 30px;">
        <a class="btn btn-primary text-white" id="sortByInstallmentButton">Search</a>
      </div>
    </div>
    <div class="d-flex justify-content-end mx-5">
      <li class="nav-item navbar-dropdown dropdown-user dropdown px-2" style="list-style: none;">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar">
            <span>Sort <br> By Status</span>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end px-4" style="width: 300px;">
          <form action="" method="post">

            <li class="px-3">
              <div class="form-check mt-3 px-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Menunggu Pembayaran
                </label>
              </div>
            </li>
            <li class="px-3">
              <div class="form-check mt-3 px-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Menunggu Verifikasi
                </label>
              </div>
            </li>
            <li>
            <li class="px-3">
              <div class="form-check mt-3 px-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Lunas
                </label>
              </div>
            </li>
            <div class="dropdown-divider"></div>
            <li>
              <input type="text" class="selector" placeholder="Pilih Tanggal">
            </li>
            <li class="mt-2">
              <button type="submit" class="btn btn-primary">Search</button>
            </li>
          </form>
      </li>

      <li>
        <div class="dropdown-divider"></div>
      </li>

      </ul>
      </li>
      <li class="nav-item navbar-dropdown dropdown-user dropdown px-3" style="list-style: none;">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar">
            <span>Sort <br> by Payment Method</span>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end px-4" style="width: 300px;">
          <form action="" method="post">
            <li class="px-3">
              <div class="form-check mt-3 px-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Down Payment
                </label>
              </div>
            </li>
            <li class="px-3">
              <div class="form-check mt-3 px-2">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                  Full Payment
                </label>
              </div>
            </li>
            <li>

              <div class="dropdown-divider"></div>
            <li>
              <input type="text" class="selector" placeholder="Pilih Tanggal">
            </li>
            <li class="mt-2">
              <button type="submit" class="btn btn-primary">Search</button>
            </li>
          </form>
      </li>

      <li>
        <div class="dropdown-divider"></div>
      </li>

      </ul>
      </li>
      <li class="nav-item navbar-dropdown dropdown-user dropdown px-5 " style="list-style: none;">
        <a class="nav-link dropdown-toggle hide-arrow " href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="avatar">
            <span>Sort <br>by Installment</span>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end px-4" style="width: 300px;">


          <li class="px-3">
            <div class="form-check mt-3 px-2">
              <input class="form-check-input installment1" type="checkbox" value="" id="defaultCheck1" name="installment1">
              <label class="form-check-label" for="defaultCheck1">
                Installment 1
              </label>
            </div>
          </li>
          <li class="px-3">
            <div class="form-check mt-3 px-2">
              <input class="form-check-input installment2" type="checkbox" value="" id="defaultCheck2" name="installment2">
              <label class="form-check-label" for="defaultCheck2">
                Installment 2
              </label>
            </div>
          </li>
          <li>

            <div class="dropdown-divider"></div>
          <li>
            <input type="text" class="selector" placeholder="Pilih Tanggal" name="date">
          </li>
          <li class="mt-2">
            <!-- <a class="btn btn-primary text-white" id="sortByInstallmentButton">Search</a> -->
          </li>

      </li>

      <li>
        <div class="dropdown-divider"></div>
      </li>

      </ul>
      </li>
    </div>


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
    $(".selector").flatpickr({
      dateFormat: "d/m/Y",
      minDate: "01.01.2023",
      maxDate: "31.12.2029",
      altInput: true,
      mode: "range",
      onChange: function(selectedDates, datestr, instance) {


        $(".selector").val(datestr.replace('to', '-'));
      }
    });

    $('.installment1').val($(this).is(':checked'));

    $('.installment1').click(function() {
      $('.installment1').val($(this).is(':checked'));
    });


    $('.installment2').val($(this).is(':checked'));

    $('.installment2').click(function() {
      $('.installment2').val($(this).is(':checked'));
      alert($('.installment2').val())
    });


    let installment1 = $('.installment1').val()
    let installment2 = $('.installment2').val()
    let date = $('.selector').val()
    let paymentMethodSelect = $('#paymentMethodSelect').val()

    let installmentInput = $('#installmentSelect').val()


    $('#installmentSelect').on('change', function() {
      let installmentSelect = $('#installmentSelect').val()

    })

    $('#paymentMethodSelect').on('change', function(){
      let paymentMethodSelect = $('#paymentMethodSelect').val()
    })

    $('#statusPaymentSelect').on('change', function(){
      let statusPaymentSelect = $('#statusPaymentSelect').val()
    })


    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,

      ajax: {
        url: "/tableDashboardPost",
        type: "POST",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: function(d) {
          d.installment1 = installment1;
          d.installment2 = installment2;
          d.date = date;
          d.installmentSelect = $('#installmentSelect').val();
          d.paymentMethodSelect = $('#paymentMethodSelect').val();
          d.statusPaymentSelect = $('#statusPaymentSelect').val();

          return d;

        }

      },

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
    $('#sortByInstallmentButton').on('click', function() {
      installment1 = $('.installment1').val()
      installment2 = $('.installment2').val()
      date = $('.selector').val()
      table.ajax.reload(null, false)
    })


  });
</script>
@endpush