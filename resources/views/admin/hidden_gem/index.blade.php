@extends('admin.layouts.dashboard')
@section('title')
Hidden Gem / Activities
@endsection
@section('breadcrumbs')
 {{ Breadcrumbs::render('activities') }} 
@endsection
@section('content')
<div class="card">
  <h5 class="card-header">List Hidden Gems / Activities</h5>
  <div class="table-responsive text-nowrap" style="height: 100vh;">
    <table class="table data-table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Title</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">


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
    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('activities.table') }}",
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
          data: 'title',
          name: 'title'
        },
        {
          data: 'status',
          name: 'status'
        },

        {
          data: 'action',
          name: 'action'
        },


      ]
    });


    $(document).on('click', '.bulk_delete', function() {
      var id = $(this).attr('data-deleteHiddenGem')

      // console.log(id);
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
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
              type: "POST",
              url: "{{ route('activities.destroy','') }}" + '/' + id,
              data: {
                _token: CSRF_TOKEN,
                _method: 'DELETE'
              },
              dataType: 'JSON',
              success: function(results) {
                console.log(results)
                if (results == 'success') {
                  table.ajax.reload()
                  swal("Done!", results.message, "success");
                } else {
                  swal("Error!", results.message, "error");
                }
              }
            });
            // form.submit();
            setTimeout(function() {
              location.reload()
            }, 100);
          }
        });

    })



    $('.show_confirm_delete').click(function(event) {
      var form = $(this).closest("form");
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
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
              type: 'DELETE',
              url: "{{ route('activities.destroy','') }}" + '/' + id,
              data: {
                _token: CSRF_TOKEN
              },
              dataType: 'JSON',
              success: function(results) {
                if (results.success === true) {
                  swal("Done!", results.message, "success");
                } else {
                  swal("Error!", results.message, "error");
                }
              }
            });
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