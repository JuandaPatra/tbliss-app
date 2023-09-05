@extends('admin.layouts.dashboard')
 @section('title')
 Sliders
 @endsection
 @section('breadcrumbs')
 {{-- {{ Breadcrumbs::render('sliders') }} --}}
 @endsection
 @section('content')
 <div class="row">
   <div class="col-md-11">
      <form action="{{  route('policy.store') }}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Persyaratan Visa</h5>
            <div class="card-body">
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Title</label>
                  <input id="input_post_title" name="name" type="text" placeholder="" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $visa->name) }}" readonly />
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
                
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">PDF File</label>
                  <div class="input-group">
                     <button id="button_post_pdf" data-input="input_post_pdf" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_pdf" name="description" value="{{ old('description', $visa->description) }}" type="text" class="form-control" placeholder="" readonly />
                     @error('description')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               {{-- 
                <div class="mb-3">
                   <label for="exampleFormControlSelect1" class="form-label">Publish</label>
                   <select id="select_post_status" name="status" class="form-select @error('status') is-invalid @enderror">
                      <option value="">Please Select</option>
                      @foreach ($statuses as $key =>$value)
                      <option value="{{ $key }}" {{ old('status') == $key ? "selected" : null }}> {{ $value }}</option>
                      @endforeach
                   </select>
                </div>
                --}}
               <div class="d-flex justify-content-end">
                   <button type="submit" class="btn btn-primary px-4">Save</button>
               </div>
            </div>
         </div>
      </form>
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
        $('#button_post_pdf').filemanager('application');
         var table = $('.data-table').DataTable({
             processing: true,
             serverSide: true,
             ajax: "",
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