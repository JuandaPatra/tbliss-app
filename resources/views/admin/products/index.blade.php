@extends('admin.layouts.dashboard')
@section('title')
@php
$postId = last(request()->segments());
@endphp
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render() }} --}}
@endsection
@section('content')

<!-- Basic Bootstrap Table -->
<div class="card">
  <h5 class="card-header">List Product</h5>
  <div class="table-responsive text-nowrap" style="height:1000px">
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Tanggal Trip</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">



        @foreach ($datas as $row)
        <tr>
          <td>
            {{$loop->iteration}}
          </td>
          <td><strong>{{ $row->title }}</strong></td>
          <td>{{$row->date_from}} - {{$row->date_to}}</td>
          <td>{{ $row->status }}</td>
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('product.edit',['product'=>$row]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('product.include',$row) }}"><i class="bx bx-edit-alt me-1"></i> Includes/Excludes</a>
                <!-- <a class="dropdown-item" href="{{ route('product.images',$row) }}"><i class="bx bx-edit-alt me-1"></i> Images</a> -->
                <a class="dropdown-item" href="{{ route('product.pick',$row) }}"><i class="bx bx-edit-alt me-1"></i> Choose Hidden Gems</a>
                <form method="POST" action="{{ route('product.copy', $row) }}">
                  @csrf
                  <button type="submit" class="dropdown-item show_confirm" data-toggle="tooltip" title='copy'><i class="bx bx-edit-alt me-1"></i>Copy</button>
                </form>
                <!-- <a class="dropdown-item" href="{{ route('product.review',$row) }}"><i class="bx bx-edit-alt me-1"></i> Review & Star</a> -->
                <!-- <a class="dropdown-item" href="{{ route('product.testimoni',$row) }}"><i class="bx bx-edit-alt me-1"></i> Add Testimoni</a> -->

                <form action="{{ route('product.destroy',['product'=>$row]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item show_confirm_delete" data-toggle="tooltip" title='Delete'><i class="bx bx-trash me-1"></i>Delete</button>
                  
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<!--/ Basic Bootstrap Table -->
@endsection
@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
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

    $('.show_confirm_delete').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this trip?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to copy this trip?`,
              text: "If you delete this, it will be duplicate this one.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });


    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('product.indexTable') }}",
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
          data: 'name',
          name: 'name'
        },
        //   {
        //       data: 'email',
        //       name: 'email'
        //   },
        //  {
        //      data: 'roles',
        //      name: 'roles'
        //  },
        {
          data: 'action',
          name: 'action'
        },
        //  {
        //      data: 'finish_date',
        //      name: 'finish_date'
        //  },
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