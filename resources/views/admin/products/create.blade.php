@extends('admin.layouts.dashboard')
@section('title')
Category Add
@endsection
@section('breadcrumbs')
 {{ Breadcrumbs::render('trip-create') }} 
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
                     <strong>Wajib diisi</strong>
                  </span>
                  @enderror
               </div>
               <!-- slug -->
               {{--
                  <div class="mb-3">
                     <label for="input_post_slug" class="form-label">Slug</label>
                     <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
               @error('slug')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            --}}
            <!-- banner -->
            <div class="mb-3">
               <label for="input_post_image" class="form-label">Banner</label>
               <div class="input-group">
                  <button id="button_post_banner" data-input="input_post_banner" class="btn btn-outline-primary" type="button">
                     Browse
                  </button>
                  <input id="input_post_banner" name="banner" value="{{ old('banner') }}" type="text" class="form-control @error('banner') is-invalid @enderror" placeholder="" readonly />
                  @error('banner')
                  <span class="invalid-feedback" role="alert">
                     <strong>Wajib diisi</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <!-- image -->
            <div class="mb-3">
               <label for="input_post_image" class="form-label">Image</label>
               <div class="input-group">
                  <button id="button_post_image" data-input="input_post_image" class="btn btn-outline-primary" type="button">
                     Browse
                  </button>
                  <input id="input_post_image" name="thumbnail" value="{{ old('thumbnail') }}" type="text" class="form-control @error('thumbnail') is-invalid @enderror" placeholder="" readonly />
                  @error('thumbnail')
                  <span class="invalid-feedback" role="alert">
                     <strong>Wajib diisi</strong>
                  </span>
                  @enderror
               </div>
            </div>
            <!-- content -->
            <div class="mb-3">
               <label for="input_post_content" class="form-label">Description</label>
               <textarea id="input_post_content" name="description" class="form-control @error('description') is-invalid @enderror" rows="20">{{ old('description') }}
               </textarea>
               @error('description')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
            <!-- itinerary -->
            {{--
               <div class="mb-3">
                  <label for="input_post_content1" class="form-label">itinerary</label>
                  <textarea id="input_post_content1" name="itinerary" class="form-control @error('itinerary') is-invalid @enderror" rows="20">{{ old('itinerary') }}
                  </textarea>
                  @error('itinerary')
                  <span class="invalid-feedback" role="alert">
                     <strong>Wajib diisi</strong>
                  </span>
                  @enderror
               </div>
               --}}
            <div class="mb-3">
               <label for="input_post_price" class="form-label">Price</label>
               <input id="input_post_price" name="price" type="text" placeholder="" class="form-control @error('price') is-invalid @enderror tourPrice" name="price" value="{{ old('price') }}" />
               @error('title')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
            <div class="mb-3">
               <label for="input_post_seat" class="form-label">Seat</label>
               <input min="1" id="input_post_seat" name="seat" type="number" placeholder="" class="form-control @error('seat') is-invalid @enderror" name="seat" value="{{ old('seat') }}" />
               @error('seat')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
            <div class="mb-3">
               <label for="input_post_thumbnail" class="form-label">PDF itinerary</label>
               <div class="input-group">
                  <button id="button_post_pdf" data-input="input_post_pdf" class="btn btn-outline-primary" type="button">Browse >
                  </button>
                  <input id="input_post_pdf" name="link_g_drive" value="{{ old('link_g_drive') }}" type="text" class="form-control @error('link_g_drive') is-invalid @enderror" placeholder="" readonly />
                  @error('link_g_drive')
                  <span class="invalid-feedback" role="alert">
                     <strong>Wajib diisi</strong>
                  </span>
                  @enderror
               </div>
            </div>

            <div class="mb-3">
               <div class="row">
                  <div class="col-6">
                     <label for="input_post_date_from" class="form-label">Tanggal Keberangkatan</label>

                     <input class="form-control @error('date_from') is-invalid @enderror" type="date" value="{{old('date_from')}}" name="date_from" id="html5-date-input">
                     @error('date_from')
                     <span class="invalid-feedback" role="alert">
                        <strong>Wajib diisi</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="col-6">
                     <label for="input_post_date_to" class="form-label">Tanggal Kedatangan</label>

                     <input class="form-control @error('date_to') is-invalid @enderror" type="date" value="{{old('date_to')}}" name="date_to" id="html5-date-input">
                     @error('date_to')
                     <span class="invalid-feedback" role="alert">
                        <strong>Wajib diisi</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>
            <div class="mb-3">
               <div class="row">
                  <div class="col-6">
                     <label for="input_days" class="form-label">Hari</label>
                     <input id="input_days" name="day" type="number" placeholder="" class="form-control @error('day') is-invalid @enderror days-total" name="day" value="{{ old('day') }}" />
                     @error('day')
                     <span class="invalid-feedback" role="alert">
                        <strong>Wajib diisi</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="col-6">
                     <label for="input_nights" class="form-label">Malam</label>
                     <input id="input_nights" name="night" type="number" placeholder="" class="form-control @error('night') is-invalid @enderror" name="night" value="{{ old('night') }}" />
                     @error('night')
                     <span class="invalid-feedback" role="alert">
                        <strong>Wajib diisi</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>
            <div class="mb-3">
               <label for="input_post_seat" class="form-label">Visa</label>
               <input id="input_post_price" name="visa" type="text" placeholder="" class="form-control @error('visa') is-invalid @enderror visa-input" name="visa" value="{{ old('visa') }}" />
               @error('visa')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
            <div class="mb-3">
               <div class="row">
                  <div class="col-6">
                     <label for="input_days" class="form-label">Tipping PerDay (Rp.)</label>
                     <input id="input_post_price" name="tipping" type="text" placeholder="" class="form-control @error('tipping') is-invalid @enderror tipping-price" name="tipping" value="{{ old('tipping') }}" />
                     @error('tipping')
                     <span class="invalid-feedback" role="alert">
                        <strong>Wajib diisi</strong>
                     </span>
                     @enderror
                  </div>
                  <div class="col-6">
                     <label for="input_nights" class="form-label">Total Tipping (Rp.)</label>
                     <input id="input_post_price" name="total_tipping" type="text" placeholder="" class="form-control @error('total_tipping') is-invalid @enderror total-tipping-price" name="total_tipping" value="{{ old('total_tipping') }}" readonly />
                     @error('total_tipping')
                     <span class="invalid-feedback" role="alert">
                        <strong>Wajib diisi</strong>
                     </span>
                     @enderror
                  </div>
               </div>
            </div>

            <div class="d-flex justify-content-end">
               <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
            </div>
         </div>
   </div>

</div>
<div class="col-12 col-md-4">
   <div class="card mb-4 ">
      <h5 class="card-header">Pilih Negara dan Kota</h5>
      <div class="card-body">
         <div class="accordion mt-3" id="accordionExample">
            <div class="card accordion-item">
               <h2 class="accordion-header" id="headingOne">
                  <button type="button" class="accordion-button collapsed @error('countries') error-card @enderror" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
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
                              <input class="form-check-input" type="checkbox" value="{{$checkbox1->id}}" id="defaultCheck1" name="countries[]" @if(is_array(old('countries')) && in_array($checkbox1->id, old('countries'))) checked @endif >
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
                  <button type="button" class="accordion-button collapsed @error('cities') error-card @enderror" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
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
                              <input class="form-check-input" type="checkbox" value="{{$checkbox2->id}}" id="defaultCheck1" name="cities[]" @if(is_array(old('cities')) && in_array($checkbox2->id, old('cities'))) checked @endif>
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

         </div>

      </div>
   </div>
   <div class="card mb-4">
      <h5 class="card-header">Total Price</h5>
      <div class="card-body">
         <div class="mb-3">
            <label for="input_post_price" class="form-label">Total Price</label>
            <input id="input_post_prices_total" name="prices_total" type="text" placeholder="" class="form-control @error('prices_total') is-invalid @enderror" name="prices_total" value="{{ old('prices_total')  }}" readonly />
            @error('prices_total')
            <span class="invalid-feedback" role="alert">
               <strong>Wajib diisi</strong>
            </span>
            @enderror
         </div>
      </div>
      <div class="card mb-4">
         <h5 class="card-header">DP Price & Installment</h5>
         <div class="card-body">
            <div class="mb-3">
               <label for="input_post_price" class="form-label">DP</label>
               <input id="input_post_price" name="dp_price" type="text" placeholder="" class="form-control @error('dp_price') is-invalid @enderror dp-price" name="dp_price" value="{{ old('dp_price')  }}" />
               @error('dp_price')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
            <div class="mb-3">
               <label for="input_post_price" class="form-label">Installment 1</label>
               <input id="input_post_price" name="installment1" type="text" placeholder="" class="form-control @error('installment1') is-invalid @enderror installment1-price" name="installment1" value="{{ old('installment1')  }}" />
               @error('installment1')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
            <div class="mb-3">
               <label for="input_post_price" class="form-label">Installment 2</label>
               <input id="input_post_price" name="installment2" type="text" placeholder="" class="form-control @error('installment2') is-invalid @enderror installment2-price" name="installment2" value="{{ old('installment2') }}" />
               @error('installment2')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>

            <!-- </form> -->
         </div>
      </div>
   </div>

   <div class="card mb-4">
      <h5 class="card-header">Review Trip</h5>
      <div class="card mb-4">
         <h5 class="card-header">Total Review</h5>
         <div class="card-body">
            <div class="mb-3">
               <label for="input_post_title" class="form-label">Review</label>
               <input id="input_post_title" name="trip_review" type="number" placeholder="" class="form-control @error('trip_review') is-invalid @enderror" name="name" value="{{ old('trip_review') }}" />
               @error('trip_review')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>

            <div class="mb-3">
               <label for="input_post_title" class="form-label">Total Star</label>
               <select id="select_post_status" name="trip_star" class="form-select @error('trip_star') is-invalid @enderror">
                  <option value="">Please Select ..</option>

                  <option value="1" {{ old('trip_star') == 1 ? "selected" : null }}> 1</option>
                  <option value="2" {{ old('trip_star') == 2 ? "selected" : null }}> 2</option>
                  <option value="3" {{ old('trip_star') == 3 ? "selected" : null }}> 3</option>
                  <option value="4" {{ old('trip_star') == 4 ? "selected" : null }}> 4</option>
                  <option value="5" {{ old('trip_star') == 5 ? "selected" : null }}> 5</option>

               </select>
               @error('trip_star')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
         </div>
      </div>


   </div>

   <div class="card mb-4">
      <h5 class="card-header">Testimoni Trip</h5>
      <div class="card mb-4">

         <div class="card-body">
            <div class="mb-3">
               <label for="input_post_title" class="form-label">Nama</label>
               <input id="input_post_title" name="review_name" type="text" placeholder="" class="form-control @error('review_name') is-invalid @enderror" name="name" value="{{ old('review_name') }}" />
               @error('review_name')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>

            <div class="mb-3">
               <label for="input_post_content" class="form-label">Description</label>
               <textarea id="input_post_content" name="description_review" class="form-control @error('description_review') is-invalid @enderror" rows="20">{{ old('description_review') }}
               </textarea>
               @error('description_review')
               <span class="invalid-feedback" role="alert">
                  <strong>Wajib diisi</strong>
               </span>
               @enderror
            </div>
         </div>
      </div>


   </div>
   </form>
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
         $('#button_post_banner').filemanager('image');
         $('#button_post_pdf').filemanager('application');
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



         // $(".visa-input").on("input", function() {
         //    let visaPrice = 0
         //    let price = 0
         //    let totalTipping = 0

         //    let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
         //    visaPrice = parseInt(visaInput)

         //    let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
         //    price = parseInt(priceTrip)
         //    console.log(price);


         //    let totalPricing = $('.total-tipping-price').val().replace(/[.]+/g, "")
         //    totalTipping = parseInt(totalPricing)


         //    if (priceTrip == '') {
         //       price = 0

         //    } else if (visaInput == '') {
         //       visaPrice = 0
         //    }

         //    let total = visaPrice + price + totalPricing

         //    // let installment1 = $('.installment1-price').val().replace(/[.]+/g, "")
         //    // let input_dp_price = $('.dp-price').val().replace(/[.]+/g, "")
         //    // installment2Price = total - parseInt(installment1) - parseInt(input_dp_price)

         //    // $('.installment2-price').val(installment2Price).change()

         //    // easyNumberSeparator({
         //    //    selector: '#input_post_price',
         //    //    separator: '.'
         //    // })
         //    $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
         //       style: "currency",
         //       currency: "IDR",
         //       minimumFractionDigits: 0
         //    })).change()
         // });

         // $('.tourPrice').on("input", function() {
         //    let visaPrice = 0
         //    let price = 0


         //    let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
         //    visaPrice = parseInt(visaInput)

         //    let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
         //    price = parseInt(priceTrip)

         //    if (priceTrip == '') {
         //       price = 0

         //    } else if (visaInput == '') {
         //       visaPrice = 0
         //    }



         //    let total = visaPrice + price

         //    // let installment1 = $('.installment1-price').val().replace(/[.]+/g, "")
         //    // let input_dp_price = $('.dp-price').val().replace(/[.]+/g, "")
         //    // installment2Price = total - parseInt(installment1) - parseInt(input_dp_price)

         //    // $('.installment2-price').val(installment2Price).change()

         //    // easyNumberSeparator({
         //    //    selector: '#input_post_price',
         //    //    separator: '.'
         //    // })
         //    $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
         //       style: "currency",
         //       currency: "IDR",
         //       minimumFractionDigits: 0
         //    })).change()

         // })


         $('.tourPrice').on('keyup', function() {
            let visaPrice = 0
            let price = 0
            let totalTipping = 0

            let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
            let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
            let tippingAll = $('.total-tipping-price').val().replace(/[.]+/g, "")


            if (visaInput == '') {
               visaPrice = parseInt(0);
            } else {
               visaPrice = visaInput
            }

            if (tippingAll == '') {
               totalTipping = 0
            } else {
               totalTipping = tippingAll
            }

            if (priceTrip === '') {
               price = 0
            } else {
               price = parseInt(priceTrip)
            }

            let total = parseInt(visaPrice) + parseInt(priceTrip) + parseInt(totalTipping);

            $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
               style: "currency",
               currency: "IDR",
               minimumFractionDigits: 0
            })).change()

         })



         // $('.tipping-price').on("input", function(){
         //    let tip = 0
         //    let tipPrice = $(this).val().replace(/[.]+/g, "")
         //    let days = $('.days-total').val()
         //    if(tipPrice == ''){
         //       tip = 0
         //    }else{
         //       tip = tipPrice
         //    }

         //    let visaPrice = 0
         //    let price = 0
         //    let totalTipping = 0

         //    let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
         //    visaPrice = parseInt(visaInput)

         //    let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
         //    price = parseInt(priceTrip)

         //    $('.total-tipping-price').val(tip * days).change()
         //    easyNumberSeparator({
         //       selector: '#input_post_price',
         //       separator: '.'
         //    })

         //    let totalTripping = $('.total-tipping-price').val().replace(/[.]+/g, "")

         //    let total = visaPrice + price + parseInt(totalTripping) 

         //    $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
         //       style: "currency",
         //       currency: "IDR",
         //       minimumFractionDigits: 0
         //    })).change()
         // })

         $('.tipping-price').on("keyup", function() {
            let tip = 0
            let tipPrice = $(this).val().replace(/[.]+/g, "")
            let days = $('.days-total').val()


            let daytotal = days == '' ? 1 : days;
            if (tipPrice == '') {
               tip = 0
            } else {
               tip = tipPrice
            }

            let visaPrice = 0
            let price = 0
            let totalTipping = 0

            let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
            visaPrice = parseInt(visaInput)

            let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
            price = parseInt(priceTrip)

            $('.total-tipping-price').val(tip * daytotal).change()
            easyNumberSeparator({
               selector: '#input_post_price',
               separator: '.'
            })

            let totalTripping = $('.total-tipping-price').val().replace(/[.]+/g, "")

            let total = visaPrice + price + parseInt(totalTripping)

            $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
               style: "currency",
               currency: "IDR",
               minimumFractionDigits: 0
            })).change()
         })


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