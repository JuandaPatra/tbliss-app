@extends('admin.layouts.dashboard')
@section('title')
Slider Edit
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('edit_slider',$slider) }} --}}
@endsection
@section('content')
<div class="row">
   <div class="col-md-11">
      <form action="{{  route('categories.update', ['category'=>$category]) }}" method="POST">

         @csrf
         @method('PUT')
         <div class="card mb-4">
            <h5 class="card-header">Banner Edit</h5>
            <div class="card-body">
               <!-- title -->
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Title</label>
                  <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $category->title) }}" />
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <!-- slug -->
               <div class="mb-3">
                  <label for="input_post_slug" class="form-label">
                     Slug
                  </label>
                  <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly  value="{{ old('slug', $category->slug) }}" />
                  @error('slug')
                     <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                     </span>
                  @enderror
               </div>
               <!-- description -->
               <div class="mb-3">
                  <label for="input_description" class="form-label">Description</label>
                  <input id="input_description" name="description" type="text" placeholder="" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description', $category->description) }}" />
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
              {{-- <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Images For Desktop</label>
                  <div class="input-group">
                     <button id="button_post_imagesDesktop" data-input="input_post_imagesDesktop" class="btn btn-outline-primary" type="button">
                        Browse >
                     </button>
                     <input id="input_post_imagesDesktop" name="image_desktop" value="{{ old('image_desktop',asset($slider->image_desktop) ) }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
               </div> --}}
               <!-- thumbnail -->
               {{-- <div class="mb-3">
                  <label for="input_post_imagesMobile" class="form-label">Images For Mobile</label>
                  <div class="input-group">
                     <button id="button_post_imagesMobile" data-input="input_post_imagesMobile" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_imagesMobile" name="image_mobile" value="{{ old('image_mobile',asset($slider->image_mobile) ) }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
               </div>--}}
               {{--<div class="mb-3">
                  <label for="input_post_title" class="form-label">Order</label>
                  <select id="select_post_status" name="s_order" class="form-select @error('s_order') is-invalid @enderror">
                     <option value="">Please Select</option>
                     @foreach ($orders as $key =>$value)
                     <option value="{{ $key }}" {{ old('s_order', $slider->s_order) == $key ? "selected" : null }}> {{ $value }}</option>
                     @endforeach


                  </select>

                  @error('s_order')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>--}}
               <div class="mb-3">
                  <label for="select_post_status" class="form-label">Status</label>
                  <select id="select_post_status" name="status" class="form-select @error('status') is-invalid @enderror">
                     <option value="">Please Select ..</option>
                     @foreach ($statuses as $key =>$value)
                     <option value="{{ $key }}" {{ old('status',  $category->status) == $key ? "selected" : null }}> {{ $value }}</option>
                     @endforeach
                  </select>
                  @error('status')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div> 
               <a class="btn btn-warning px-4" href="">Back</a>
               <button type="submit" class="btn btn-primary px-4">
                  Save
               </button>
      </form>
   </div>
</div>
@endsection
@push('javascript-external')
<script src="{{ asset ('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
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
      // event : input thumbnail with file manager
      $('#button_post_imagesDesktop').filemanager('image');
      $('#button_post_imagesMobile').filemanager('image');

      // tiny mce for description 
      $("#input_post_description").tinymce({
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

      // tiny mce for content
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