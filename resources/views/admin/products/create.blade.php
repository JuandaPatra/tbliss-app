@extends('admin.layouts.dashboard')
@section('title')
Category Add
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('add_category') }} --}}
@endsection
@section('content')
<div class="row">
   <div class="col-12 col-md-8">
      <form action="{{route('product.store')}}" method="POST">
         @csrf
         <div class="card mb-4">
            <h5 class="card-header">Trip Add</h5>
            <div class="card-body">
               <!-- title -->
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
               <!-- image -->
               <div class="mb-3">
                  <label for="input_post_image" class="form-label">Image</label>
                  <div class="input-group">
                     <button id="button_post_image" data-input="input_post_image" class="btn btn-outline-primary" type="button">
                        Browse
                     </button>
                     <input id="input_post_image" name="thumbnail" value="{{ old('thumbnail') }}" type="text" class="form-control" placeholder="" readonly />
                  </div>
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
               <!-- itinerary -->
               <div class="mb-3">
                  <label for="input_post_content1" class="form-label">itinerary</label>
                  <textarea id="input_post_content1" name="itinerary" class="form-control @error('itinerary') is-invalid @enderror" rows="20">{{ old('itinerary') }}
                  </textarea>
                  @error('content')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="input_post_price" class="form-label">Price</label>
                  <input id="input_post_price" name="price" type="text" placeholder="" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" />
                  @error('title')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="input_post_seat" class="form-label">Seat</label>
                  <input id="input_post_seat" name="seat" type="number" placeholder="" class="form-control @error('seat') is-invalid @enderror" name="seat" value="{{ old('seat') }}" />
                  @error('seat')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <label for="input_post_seat" class="form-label">Link Google Drive</label>
                  <input id="input_post_seat" name="link_g_drive" type="text" placeholder="" class="form-control @error('link_g_drive') is-invalid @enderror" name="link_g_drive" value="{{ old('link_g_drive') }}" />
                  @error('link_g_drive')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col-6">
                        <label for="input_post_date_from" class="form-label">Tanggal Keberangkatan</label>
                        <!-- <input id="input_post_seat" name="link" type="text" placeholder="" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" /> -->
                        <input class="form-control" type="date" value="" name="date_from" id="html5-date-input">
                        @error('date_from')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-6">
                        <label for="input_post_date_to" class="form-label">Tanggal Kedatangan</label>
                        <!-- <input id="input_post_seat" name="link" type="text" placeholder="" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link') }}" /> -->
                        <input class="form-control" type="date" value="" name="date_to" id="html5-date-input">
                        @error('date_to')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="row">
                     <div class="col-6">
                        <label for="input_days" class="form-label">Hari</label>
                        <input id="input_days" name="day" type="number" placeholder="" class="form-control @error('day') is-invalid @enderror" name="day" value="{{ old('day') }}" />
                        @error('day')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                     <div class="col-6">
                        <label for="input_nights" class="form-label">Malam</label>
                        <input id="input_nights" name="night" type="number" placeholder="" class="form-control @error('night') is-invalid @enderror" name="night" value="{{ old('night') }}" />
                        @error('night')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                     </div>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="select_post_status" class="form-label">Status</label>
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
               <a class="btn btn-danger px-4" href=""><i class='bx bx-left-arrow-alt'></i>Back</a>
               <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
            </div>
         </div>

   </div>
   <div class="col-12 col-md-4">
      <div class="card mb-4">
         <h5 class="card-header">Cities</h5>
         <div class="card-body">
            <div class="accordion mt-3" id="accordionExample">
               <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                        Negara
                     </button>
                  </h2>

                  <div id="accordionOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="card-body">
                        <div class="row gy-3">
                           <div class="col-md">

                              @foreach($destinations as $checkbox)
                              @foreach($checkbox->descendants as $checkbox1)
                              <div class="form-check mt-3">
                                 <input class="form-check-input" type="checkbox" value="{{$checkbox1->id}}" id="defaultCheck1" name="countries[]">
                                 <label class="form-check-label" for="defaultCheck1">
                                    {{$checkbox1->title}}
                                 </label>
                              </div>
                              @endforeach
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                        Kota
                     </button>
                  </h2>
                  <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                     <div class="card-body">
                        <div class="row gy-3">
                           <div class="col-md">
                              @foreach($destinations as $checkbox)
                              @foreach($checkbox->descendants as $checkbox1)
                              @foreach($checkbox1->descendants as $checkbox2)
                              <div class="form-check mt-3">
                                 <input class="form-check-input" type="checkbox" value="{{$checkbox2->id}}" id="defaultCheck1" name="cities[]">
                                 <label class="form-check-label" for="defaultCheck1">
                                    {{$checkbox2->title}}
                                 </label>
                              </div>
                              @endforeach
                              @endforeach
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
              {{-- <div class="card accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                     <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionThree" aria-expanded="false" aria-controls="accordionThree">
                        #hashtag
                     </button>
                  </h2>
                  <div id="accordionThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                     <div class="card-body">
                        <div class="row gy-3">
                           <div class="col-md">
                              @foreach($hashtags as $hashtag)
                              <div class="form-check mt-3">
                                 <input class="form-check-input" type="checkbox" value="{{$hashtag->id}}" id="defaultCheck1" name="hashtag[]">
                                 <label class="form-check-label" for="defaultCheck1">
                                    {{$hashtag->title}}
                                 </label>
                              </div>
                              @endforeach
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
            </form>
         </div>
      </div>
      @endsection
      @push('javascript-external')
      <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
      <script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
      <script src="{{ asset('vendor/easy-number-separator-master/easy-number-separator.js') }}"></script>
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
            $('#button_post_thumbnail').filemanager('image');
            $('#button_post_image').filemanager('image');
            // event :  description

            easyNumberSeparator({
               selector: '#input_post_price',
               separator: '.'
            })

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

            $("#input_post_content1").tinymce({
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