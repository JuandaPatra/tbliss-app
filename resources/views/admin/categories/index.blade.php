@extends('admin.layouts.dashboard')
@section('title')
Categories 
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('sliders') }} --}}
@endsection
@section('content')
<div class="card">
   <h5 class="card-header">List Categories</h5>
   <div class="table-responsive text-nowrap">
      <table class="table">
         <thead>
            <tr>
               <th>Title</th>
               <th>Slug</th>
               <th>Status</th>
               <th>Actions</th>
            </tr>
         </thead>
         <tbody class="table-border-bottom-0">
            @foreach ($datas as $row)
            <tr>
               <td><strong>{{ $row->title }}</strong></td>
               <td>{{ $row->slug }}</td>
               @if($row->status == 'publish')
               <td><span class="badge rounded-pill bg-success w-50">{{ $row->status }}</span> </td>
               @elseif($row->status == 'draft')
               <td><span class="badge rounded-pill bg-danger w-50">{{ $row->status }}</span> </td>
               @endif
               <td>
                  <div class="dropdown">
                     <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                     </button>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('categories.edit',['category'=>$row]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                        <!-- <a class="dropdown-item" href=""><i class="bx bx-video-recording me-1"></i>Create</a> -->
                        <form action="{{ route('categories.destroy',['category'=>$row]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                           <i class="bx bx-trash me-1"></i>delete
                        </a>
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