@extends('admin.layouts.dashboard')
@section('title')
Dashboard
@endsection
@section('breadcrumbs')
{{--{{ Breadcrumbs::render('categories') }}--}}
@endsection
@section('content')
<!-- content -->
<div class="row">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            {{-- Data Leads Promo : {{ $namePromo }} --}}
            <!-- <a href="" class="btn btn-success float-right">
               <i class='bx bx-spreadsheet'></i>
               <span class="glyphicon glyphicon-th-list"></span> EXPORT EXCEL
            </a> -->
            Contact
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                  <table class="table table-bordered data-table">
                     <thead>
                        <tr>
                           <th>No.</th>
                           <th>Email</th>
                           <th>Submitted Date</th>
                        </tr>
                     </thead>
                     <tbody>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection
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
         ajax: "{{ route('contact') }}",
         columns: [
            //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            // {
            //    data: 'email',
            //    name: 'fullname'
            // },
            {
               data: 'email',
               name: 'email'
            },
            // {
            //    data: 'created_at',
            //    name: 'created_at'
            // },
            {
               data: 'finish_date',
               name: 'finish_date'
            },
            // {
            //    data: 'created_at',
            //    render: function(d) {
            //       return moment(d).format("DD/MM/YYYY HH:mm");
            //    }
            // },
            // {
            //    data: 'email',
            //    name: 'subject'
            // },
            // {
            //    data: 'email',
            //    name: 'address'
            // },
            // {
            //    data: 'email',
            //    name: 'phone'
            // },
            // {
            //    data: 'email',
            //    name: 'message'
            // }

         ]
      });
   });
</script>
@endpush