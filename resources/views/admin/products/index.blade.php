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
           <th>Category</th>
           <!-- <th>Status</th> -->
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
          <td>{{ $row->status }}</td> 
          <td>
            <div class="dropdown">
              <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ route('product.edit',['product'=>$row]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                <a class="dropdown-item" href="{{ route('product.include',$row) }}"><i class="bx bx-edit-alt me-1"></i> Includes/Excludes</a>
                <a class="dropdown-item" href="{{ route('product.images',$row) }}"><i class="bx bx-edit-alt me-1"></i> Images</a>
                <a class="dropdown-item" href="{{ route('product.pick',$row) }}"><i class="bx bx-edit-alt me-1"></i> Choose Hidden Gems</a>
                <a class="dropdown-item" href="{{ route('product.review',$row) }}"><i class="bx bx-edit-alt me-1"></i> Review & Star</a>
                <a class="dropdown-item" href="{{ route('product.testimoni',$row) }}"><i class="bx bx-edit-alt me-1"></i> Add Testimoni</a>
                
                <form action="{{ route('product.destroy',['product'=>$row]) }}" method="post">
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
   </div>
 </div>
 <!--/ Basic Bootstrap Table -->
@endsection 
@push('javascript-internal')
   <script>
      $(document).ready(function(){
         // event delete category
         $("form[role='alert']").submit(function(event){
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