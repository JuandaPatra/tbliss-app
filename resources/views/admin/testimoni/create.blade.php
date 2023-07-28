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
      <form action="{{  route('testimoni-trip.store') }}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Add Testimoni User</h5>
            <div class="card-body">
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Nama</label>
                  <input id="input_post_title" name="name" type="text" placeholder="" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  />
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               

                <!-- content -->
                <div class="mb-3">
                  <label for="input_post_content" class="form-label">Description</label>
                  <textarea id="input_post_content" name="description" class="form-control @error('description') is-invalid @enderror" rows="20">{{ old('description') }}
                  </textarea>
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
                
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Image</label>
                  <div class="input-group">
                     <button id="button_post_pdf" data-input="input_post_pdf" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_pdf" name="image" value="{{ old('image') }}" type="text" class="form-control" placeholder="" readonly />
                     @error('image')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <a class="btn btn-warning px-4" href="">Back</a>
               <button type="submit" class="btn btn-primary px-4">Save</button>
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

<script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/tinymce5/tinymce.min.js') }}"></script>
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
        $("#input_post_content").tinymce({
            relative_urls: false,
            language: "en",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern",
            ],
            forced_root_block: '',
            toolbar1: "fullscreen preview",
            toolbar2: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback: function(callback, value, meta) {
                let x = window.innerWidth || document.documentElement.clientWidth || document
                    .getElementsByTagName('body')[0].clientWidth;
                let y = window.innerHeight || document.documentElement.clientHeight || document
                    .getElementsByTagName('body')[0].clientHeight;

                let cmsURL = "{{ route('unisharp.lfm.show') }}" + '?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }
                tinyMCE.activeEditor.windowManager.openUrl({
                    url: cmsURL,
                    title: 'Filemanager',
                    width: x * 0.8,
                    height: y * 0.8,
                    resizable: "yes",
                    close_previous: "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        });

        // var myContent = tinymce.get("#input_post_content").getContent({ format: "text" });

        $('#button_post_pdf').filemanager('image');

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
                 {
                     data: 'roles',
                     name: 'roles'
                 },
                 {
                     data: 'action',
                     name: 'action'
                 },
                 

             ]
         });
     });
 </script>
 @endpush