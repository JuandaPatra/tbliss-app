@extends('admin.layouts.dashboard')
@section('title')
Sliders
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('sliders') }} --}}
@endsection
@section('content')
<div class="card">
  <h5 class="card-header">List Banner</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Images Desktop</th>
          <th>Images Mobile</th>
          {{--<th>Status</th> --}}
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        @foreach ($datas as $row)
        <tr>
          <td><strong>{{ $row->title }}</strong></td>
          <td>
            <img src="{{ $row->image_desktop }}" class="" width="100">

          </td>
          <td>
            <img src="{{ $row->image_mobile }}" class="" width="50">

          </td>
          {{-- <td>{{ $row->status }}</td> --}}
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('slider.edit',['slider'=>$row]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                <form action="{{ route('slider.destroy',['slider'=>$row]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="dropdown-item show_confirm_delete" data-toggle="tooltip" title='Delete'><i class="bx bx-trash me-1"></i>Delete</button>
                  
                </form>
               
                {{-- 
                  <form action="{{ route('slider.destroy',['slider'=>$row]) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                    <i class="bx bx-trash me-1"></i>Delete
                  </a>
                  </form> 
                  --}}
              </div>
            </div>
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
@endpush
@push('javascript-internal')
<script>
  $(document).ready(function() {

    $('.show_confirm_delete').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this slider?`,
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