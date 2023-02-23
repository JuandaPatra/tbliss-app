@extends('admin.layouts.dashboard')
@section('title')
Slider Add
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('add_category') }} --}}
@endsection
@section('content')
<div class="row">
   <div class="col-md-11">
      <form action="{{  route('hashtag.store') }}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Tambah Hashtag</h5>
            <div class="card-body">
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Title</label>
                  <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- slug -->
               <div class="mb-3">
                  <label for="input_post_slug" class="form-label">Slug</label>
                  <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
                  @error('slug')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- deskripsi 2 -->
               {{--<div class="mb-3">
                  <label for="input_post_descriptions" class="form-label">Deskripsi</label>
                  <input id="input_post_descriptions" name="description" type="text" placeholder="" class="form-control @error('description2') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                  @error('description2')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>--}}
               <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Publish</label>
                  <select id="select_post_status" name="status" class="form-select @error('status') is-invalid @enderror">
                     <option value="">Please Select</option>
                     @foreach ($statuses as $key =>$value)
                     <option value="{{ $key }}" {{ old('status') == $key ? "selected" : null }}> {{ $value }}</option>
                     @endforeach
                  </select>
               </div>
               <a class="btn btn-warning px-4" href="">Back</a>
               <button type="submit" class="btn btn-primary px-4">Save</button>
            </div>
         </div>
      </form>
   </div>
   <!-- <div class="col-lg-4 col-md-4 order-1">
   <div class="card mb-4">
      <div class="card-body">
         <div class="mb-3">
            <label for="input_post_title" class="form-label">Order</label>
            <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
            @error('title')
            <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
            </span>
            @enderror
         </div>
      </div>
   </div>
</div> -->
   @endsection
   @push('javascript-external')
   <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
   <script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
   <script src="{{ asset('vendor/tinymce5/tinymce.min.js') }}"></script>
   @endpush
   @push('javascript-internal')
   <script>
      $(document).ready(function() {
         $("#input_post_title").change(function(event) {
            $("#input_post_slug").val(
               event.target.value
               .trim()
               .toLowerCase()
               .replace(/[^a-z\d-]/gi, "-")
               .replace(/-+/g, "-")
               .replace(/^-|-$/g, "")
            );
         });
         // event : input thumbnail with file manager and description

         $('#button_post_imagesDesktop').filemanager('image');
         $('#button_post_imagesMobile').filemanager('image');

         // event :  description
         $("#input_post_descriptions").tinymce({
            relative_urls: false,
            language: "en",
            plugins: [
               "advlist autolink lists link image charmap print preview hr anchor pagebreak",
               "searchreplace wordcount visualblocks visualchars code fullscreen",
               "insertdatetime media nonbreaking save table directionality",
               "emoticons template paste textpattern",
            ],
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

         // tinymce for content
         $("#input_post_content").tinymce({
            relative_urls: false,
            language: "en",
            plugins: [
               "advlist autolink lists link image charmap print preview hr anchor pagebreak",
               "searchreplace wordcount visualblocks visualchars code fullscreen",
               "insertdatetime media nonbreaking save table directionality",
               "emoticons template paste textpattern",
            ],
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

         $("#btn-add-post-images").click(function() {
            var hmtl = $(".clone").html();
            $(".increment").after(hmtl);
         });
         $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
         });
      });
   </script>
   @endpush