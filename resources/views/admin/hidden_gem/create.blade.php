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
      <form action="{{  route('activities.store') }}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Hidden Gems/Activities Add</h5>
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
                  <label for="input_post_title" class="form-label">Description</label>
                  <input id="input_post_description" name="description" type="text" placeholder="" class="form-control @error('description') is-invalid @enderror" name="title" value="{{ old('description') }}" />
                  @error('description')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Kota</label>
                  <select id="select_post_status" name="destination" class="form-select @error('status') is-invalid @enderror">
                     <option value="">Please Select</option>
                     <option value="">Psssst</option>
                     {{-- @if (old('parent_id'))
                     <option value="{{ old('parent_id') }}" {{ old('parent_id') == $key ? "selected" : null }}> {{ old('title') }}</option>
                     @endif --}}

                     {{-- @foreach ($statuses as $key =>$value)
                     <option value="{{ $key }}" {{ old('status') == $key ? "selected" : null }}> {{ $value }}</option>
                     @endforeach --}}
                  </select>
               </div>

               <div class="card-body">
                  <div class="row gy-3">
                     <div class="col-md">
                        <small class="text-light fw-semibold">Checkboxes</small>
                        @foreach($checkboxes as $checkbox)
                        <div class="form-check mt-3">
                           <input class="form-check-input" type="checkbox" value="{{$checkbox->id}}" id="defaultCheck1" name="hashtag[]">
                           <label class="form-check-label" for="defaultCheck1">
                              {{$checkbox->title}}
                           </label>
                        </div>
                        @endforeach
                        
                     </div>
                     {{-- <div class="col-md">
                        <small class="text-light fw-semibold">Radio</small>
                        <div class="form-check mt-3">
                           <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio1">
                           <label class="form-check-label" for="defaultRadio1">
                              Unchecked
                           </label>
                        </div>
                        <div class="form-check">
                           <input name="default-radio-1" class="form-check-input" type="radio" value="" id="defaultRadio2" checked="">
                           <label class="form-check-label" for="defaultRadio2">
                              Checked
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" value="" id="disabledRadio1" disabled="">
                           <label class="form-check-label" for="disabledRadio1">
                              Disabled unchecked
                           </label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input" type="radio" value="" id="disabledRadio2" disabled="" checked="">
                           <label class="form-check-label" for="disabledRadio2">
                              Disabled checkbox
                           </label>
                        </div>
                     </div> --}}
                  </div>
               </div>


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
   @endsection
   @push('css-external')
   <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
   @endpush
   @push('javascript-external')
   <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
   <script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
   <script src="{{ asset('vendor/tinymce5/tinymce.min.js') }}"></script>
   <script src="{{ asset('vendor/select2/js/select2.min.js') }}"></script>
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

         //select2 parent_category
         $('#select_post_status').select2({
            theme: 'bootstrap4',
            language: "",
            allowClear: true,
            ajax: {
               url: "{{ route('continent.select') }}",
               dataType: 'json',
               delay: 250,
               processResults: function(data) {
                  return {
                     results: $.map(data, function(item) {
                        return {
                           text: item.title,
                           id: item.id
                        }
                     })
                  };
               }
            }
         });


         // event :  description
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