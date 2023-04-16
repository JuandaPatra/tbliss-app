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
      <form action="{{  route('activities.update', ['activity'=>$hidden_gem]) }}" method="POST">

         @csrf
         @method('PUT')
         <div class="card mb-4">
            <h5 class="card-header">Hidden Gems/Activities Edit</h5>
            <div class="card-body">
               <!-- title -->
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Title</label>
                  <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $hidden_gem->title) }}" />
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="input_post_slug" class="form-label">Slug</label>
                  <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug', $hidden_gem->slug) }}" />
                  @error('slug')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Images For Desktop</label>
                  <div class="input-group">
                     <button id="button_post_imagesDesktop" data-input="input_post_imagesDesktop" class="btn btn-outline-primary" type="button">
                        Browse >
                     </button>
                     <input id="input_post_imagesDesktop" name="image_desktop" value="{{ old('image_desktop',asset($hidden_gem->image_desktop) ) }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
               </div>
               <!-- thumbnail -->
               <div class="mb-3">
                  <label for="input_post_imagesMobile" class="form-label">Images For Mobile</label>
                  <div class="input-group">
                     <button id="button_post_imagesMobile" data-input="input_post_imagesMobile" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_imagesMobile" name="image_mobile" value="{{ old('image_mobile',asset($hidden_gem->image_mobile) ) }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
               </div>
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Description</label>
                  <input id="input_post_description" name="description" type="text" placeholder="" class="form-control @error('description1') is-invalid @enderror" name="title" value="{{ old('description1', $hidden_gem->description1) }}" />
                  @error('description1')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>

               <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Kota</label>
                  <select id="select_post_status" name="destination" class="form-select @error('status') is-invalid @enderror">
                     @if (old('places_id', $hidden_gem->places_id))
                     <option value="{{ old('places_id', $hidden_gem->place->id) }}" selected>{{ old('parent_id',$hidden_gem->place->title)}}</option>
                     @endif
                  </select>
               </div>
               <div class="card-body">
                  <div class="row gy-3">
                     <div class="col-md">
                        <small class="text-light fw-semibold">Checkboxes</small>
                        @foreach($checkboxes as $index => $checkbox)
                        <div class="form-check mt-3">
                           @foreach($hidden_gem->hidden_hashtag as $checkbox1)
                              @if($checkbox1->hashtag_id == $checkbox->id)
                              <input class="form-check-input" type="checkbox" value="{{$checkbox->id}}" id="defaultCheck1" name="hashtag[]" {{$checkbox1->hashtag_id == $checkbox->id ? "checked" : " "}}>
                              <input name="invisible[]" type="hidden" value="{{$checkbox1->id}}">
                              @break
                              @elseif($checkbox1->hashtag_id != $checkbox->id)
                              <input class="form-check-input" type="checkbox" value="{{$checkbox->id}}" id="defaultCheck1" name="hashtag[]" > 
                              @endif
                           {{--@if($checkbox1->hashtag_id == $checkbox->id)
                           <input class="form-check-input" type="checkbox" value="{{$checkbox->id}}" id="defaultCheck1" name="hashtag[]" checked>
                           @elseif($checkbox1->hashtag_id != $checkbox->id)
                           <input class="form-check-input" type="checkbox" value="{{$checkbox->id}}" id="defaultCheck1" name="hashtag[]">
                           @endif --}}
                           @endforeach
                           <label class="form-check-label" for="defaultCheck1">
                              {{$checkbox->title}}
                           </label>
                           
                        </div>
                        @endforeach

                        
                           {{--@foreach($hidden_gem->hidden_hashtag as $checkbox)
                        <div class="form-check mt-3">
                           <input class="form-check-input" type="checkbox" value="{{$checkbox->id}}" id="defaultCheck1" name="hashtag[]">
                           <label class="form-check-label" for="defaultCheck1">
                              {{$checkbox->id}}
                           </label>
                     </div>
                     @endforeach --}}

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
               <label for="select_post_status" class="form-label">Status</label>
               <select id="select_post_status" name="status" class="form-select @error('status') is-invalid @enderror">
                  <option value="">Please Select ..</option>
                  @foreach ($statuses as $key =>$value)
                  <option value="{{ $key }}" {{ old('status',  $hidden_gem->status) == $key ? "selected" : null }}> {{ $value }}</option>
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
@push('css-external')
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/select2/css/select2-bootstrap4.min.css') }}">
@endpush
@push('javascript-external')
<script src="{{ asset ('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
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
      // event : input thumbnail with file manager
      $('#button_post_imagesDesktop').filemanager('image');
      $('#button_post_imagesMobile').filemanager('image');

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