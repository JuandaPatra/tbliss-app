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
      <form action="{{  route('slider.store') }}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Banner Add</h5>
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
               <!-- Images For Desktop -->
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Images For Desktop</label>
                  <div class="input-group">
                     <button id="button_post_imagesDesktop" data-input="input_post_imagesDesktop" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_imagesDesktop" name="image_desktop" value="{{ old('image_desktop') }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
               </div>
               <!-- Images For Mobile -->
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Images For Mobile</label>
                  <div class="input-group">
                     <button id="button_post_imagesMobile" data-input="input_post_imagesMobile" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_imagesMobile" name="image_mobile" value="{{ old('image_mobile') }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
               </div>
               <!-- deskripsi -->
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Caption</label>
                  <input id="input_post_description1" name="description" type="text" placeholder="" class="form-control @error('description') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- deskripsi 2 -->
               <div class="mb-3">
                  <label for="input_post_description_2" class="form-label">Deskripsi</label>
                  <input id="input_post_description_2" name="description2" type="text" placeholder="" class="form-control @error('description2') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                  @error('description2')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- Link -->
               <div class="mb-3">
                  <label for="input_post_link" class="form-label">Link</label>
                  <input id="input_post_link" name="link" type="text" placeholder="" class="form-control @error('link') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                  @error('link')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- order -->
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Order</label>
                  <select id="select_post_status" name="s_order" class="form-select @error('s_order') is-invalid @enderror">
                     <option value="">Please Select</option>
                     @foreach ($orders as $key =>$value)
                     <option value="{{ $key }}" {{ old('s_order') == $key ? "selected" : null }}> {{ $value }}</option>
                     @endforeach
                  </select>
                  @error('order')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary px-4">Save</button>

               </div>
            </div>
         </div>
      </form>
   </div>
  
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