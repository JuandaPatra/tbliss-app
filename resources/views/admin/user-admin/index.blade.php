 @extends('admin.layouts.dashboard')
 @section('title')
 Sliders
 @endsection
 @section('breadcrumbs')
 {{-- {{ Breadcrumbs::render('sliders') }} --}}
 @endsection
 @section('content')
 <div class="card">
     <h5 class="card-header">List User</h5>
     <div class="table-responsive text-nowrap" style="height: 100vw;">
         <table class="table ">
             <thead>
                 <tr>
                     <th>No.</th>
                     <th>Name</th>
                     <th>Role</th>
                     <th>Actions</th>
                 </tr>
             </thead>
             <tbody class="table-border-bottom-0">
                 @foreach ($datas as $row)
                 <tr>
                     <td>
                         {{$loop->iteration}}
                     </td>
                     <td><strong>{{ $row->name }}</strong></td>
                     <td>
                         @if($row->roles[0]->name == 'admin')
                         <span class="badge bg-label-secondary">{{$row->roles[0]->name}}</span>
                         @else
                         <span class="badge bg-label-primary">{{$row->roles[0]->name}}</span>
                         @endif
                     </td>
                     <td>
                         <div class="dropdown">
                             <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                 <i class="bx bx-dots-vertical-rounded"></i>
                             </button>
                             <div class="dropdown-menu">
                                 <a class="dropdown-item" href="{{ route('user-admin.edit',['user_admin'=>$row]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                 <form action="{{ route('user-admin.destroy',['user_admin'=>$row]) }}" method="post">
                                     @csrf
                                     @method('DELETE')
                                     <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                                         <i class="bx bx-trash me-1"></i>Delete
                                     </a>
                                 </form>
                             </div>
                         </div>
                     </td>
                 </tr>
                 @endforeach
             </tbody>
         </table>

         {{--
            <table class="table table-bordered data-table mx-3">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Role</th>
                        <!-- <th>Roles</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            --}}
            

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
             ajax: "{{ route('table') }}",
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
                //  {
                //      data: 'email',
                //      name: 'email'
                //  },
                 {
                     data: 'roles',
                     name: 'roles'
                 },
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