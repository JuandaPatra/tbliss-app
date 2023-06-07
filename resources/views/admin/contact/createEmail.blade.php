@extends('admin.layouts.dashboard')
@section('title')
Dashboard
@endsection
@section('breadcrumbs')
{{--{{ Breadcrumbs::render('categories') }}--}}
@endsection
@section('content')
<!-- content -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                {{-- Data Leads Promo : {{ $namePromo }} --}}
                <!-- <a href="" class="btn btn-success float-right">
               <i class='bx bx-spreadsheet'></i>
               <span class="glyphicon glyphicon-th-list"></span> EXPORT EXCEL
            </a> -->
                Send Email
            </div>
           {{--
            
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered data-table" style="margin: 20px 0 !important;">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Email</th>
                                    <th>Submitted Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            --}}
            <div class="col-md-10">
                <form action="{{route('contact.send')}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="row d-flex align-items-stretch">
                                <div class="col-md-12">
                                    <!-- title -->
                                    <div class="form-group">
                                        <label for="input_career_title" class="font-weight-bold">Subject</label>
                                        <input id="input_career_title" name="subject" type="text" placeholder="" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" />
                                        @error('subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                   
                                    <!-- description -->
                                    <div class="form-group">
                                        <label for="input_career_description" class="font-weight-bold">
                                            Body
                                        </label>
                                        <textarea id="input_career_description" name="body" class="form-control @error('body') is-invalid @enderror" rows="15">{{ old('body') }}</textarea>
                                    </div>
                                    @error('body')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- tag -->
                                    {{-- <div class="form-group">
                        <label for="select_post_tag" class="font-weight-bold">
                           Tag
                        </label>
                        <select id="select_post_tag" name="tag" data-placeholder="" class="custom-select w-100"
                           multiple>
                           <option value="tag1">tag 1</option>
                           <option value="tag2">tag 2</option>
                        </select>
                     </div> --}}
                                    <!-- status -->
                                    {{-- <div class="form-group">
                        <label for="select_post_status" class="font-weight-bold">
                           Status
                        </label>
                        <select id="select_post_status" name="status" class="custom-select">
                           <option value="draft">Draft</option>
                           <option value="publish">Publish</option>
                        </select>
                     </div> --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="float-right pt-3">
                                        <a class="btn btn-warning px-4" href="">Back</a>
                                        <button type="submit" class="btn btn-primary px-4">
                                            Send to All
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
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

    table.dataTable {
        margin: 20px 0 !important;
    }
</style>
@endpush
@push('javascript-internal')
<script>
    $(document).ready(function() {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('contact') }}",
            columns: [
                // {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },

                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'finish_date',
                    name: 'finish_date'
                },
            ]
        });

        $("#input_career_title").change(function (event) {
         $("#input_career_slug").val(
            event.target.value
               .trim()
               .toLowerCase()
               .replace(/[^a-z\d-]/gi, "-")
               .replace(/-+/g, "-")
               .replace(/^-|-$/g, "")
         );
      });
      // event : input thumbnail with file manager and description
      $('#button_career_thumbnail').filemanager('image');
      // event :  description
      $("#input_career_description").tinymce({
         relative_urls: false,
         language: "en",
         plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern",
         ],
         toolbar1: "fullscreen preview",
         toolbar2:
            "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
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

         $("#btn-add-post-images").click(function(){ 
            var hmtl = $(".clone").html();
            $(".increment").after(hmtl);
         });
         $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
         });
    });
</script>
@endpush