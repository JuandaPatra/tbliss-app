@extends('admin.layouts.dashboard')
@section('title')
Slider Add
@endsection
@section('breadcrumbs')
 {{ Breadcrumbs::render('destinasi-create') }} 
@endsection
@section('content')
<div class="row">
   <div class="col-md-11">
      <form action="{{  route('continent.store') }}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Tambah Destinasi</h5>
            <div class="card-body">
               <div class="mb-3">
                  <label for="input_post_title" class="form-label">Nama Benua / Negara / Kota</label>
                  <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>


               <!-- Images map -->
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Foto Peta(halaman detail trip)</label>
                  <div class="input-group">
                     <button id="button_post_images" data-input="input_post_images" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_images" name="images" value="{{ old('images') }}" type="text" class="form-control" placeholder="" readonly />
                     @error('images')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>
               <!-- Images map -->
               <div class="mb-3">
                  <label for="input_post_thumbnail" class="form-label">Images</label>
                  <div class="input-group">
                     <button id="button_post_images2" data-input="input_post_images2" class="btn btn-outline-primary" type="button">Browse >
                     </button>
                     <input id="input_post_images2" name="images2" value="{{ old('images2') }}" type="text" class="form-control" placeholder="" readonly />
                     @error('images2')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>
               </div>

               <div class="mb-3">
                  <label for="exampleFormControlSelect1" class="form-label">Pilih Benua/Negara</label>
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


               <div class="mb-3">
                  <label for="select_post_status" class="form-label">Pilih Kota</label>
                  <select id="select_post_status" name="status" class="form-select @error('status') is-invalid @enderror">
                     <option value="">Please Select ..</option>
                     @foreach ($statuses as $key =>$value)
                     <option value="{{ $key }}" {{ old('status') == $key ? "selected" : null }}> {{ $value }}</option>
                     @endforeach
                  </select>
                  @error('status')
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

         // $.ajax({
         //    type: 'GET', //THIS NEEDS TO BE GET
         //    url: "{{ route('continent.select') }}",
         //    dataType: 'json',
         //    success: function(data) {
         //       console.log(data);
         //       // container.html('');
         //       // $.each(data, function(index, item) {
         //       //    container.html(''); //clears container for new data
         //       //    $.each(data, function(i, item) {
         //       //       container.append('<div class="row"><div class="ten columns"><div class="editbuttoncont"><button class="btntimestampnameedit" data-seek="' + item.timestamp_time + '">' + new Date(item.timestamp_time * 1000).toUTCString().match(/(\d\d:\d\d:\d\d)/)[0] + ' - ' + item.timestamp_name + '</button></div></div> <div class="one columns"><form action="' + item.timestamp_id + '/deletetimestamp" method="POST">' + '{!! csrf_field() !!}' + '<input type="hidden" name="_method" value="DELETE"><button class="btntimestampdelete"><i aria-hidden="true" class="fa fa-trash buttonicon"></i></button></form></div></div>');
         //       //    });
         //       //    container.append('<br>');
         //       // });
         //    },
         //    error: function() {
         //       console.log(data);
         //    }
         // });

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
         // event : input thumbnail with file manager and description

         $('#button_post_images').filemanager('image');
         $('#button_post_images2').filemanager('image');

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