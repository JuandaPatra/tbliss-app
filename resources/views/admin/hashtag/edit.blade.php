@extends('admin.layouts.dashboard')
@section('title')
Slider Edit
@endsection
@section('breadcrumbs')
{{ Breadcrumbs::render('hashtag-edit',$hashtag) }}
@endsection
@section('content')
<div class="row">
   <div class="col-md-11">
      <form action="{{  route('hashtag.update', ['hashtag'=>$hashtag]) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="card mb-4">
            <h5 class="card-header">Edit Hashtag</h5>
            <div class="card-body">
               <!-- title -->
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Title</label>
                  <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $hashtag->title) }}" />
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary px-4">
                     Save
                  </button>
               </div>
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