@extends('admin.layouts.dashboard')
@section('title')
Dashboard
@endsection
@section('breadcrumbs')
{{ Breadcrumbs::render('contact-user') }}
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
            Contact
         </div>
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
      </div>
   </div>
</div>

@endsection
@push('javascript-external')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
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
@push('javascript-external')
  <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
  <script src="{{ asset('vendor/tinymce5/jquery.tinymce.min.js') }}"></script>
  <script src="{{ asset('vendor/tinymce5/tinymce.min.js') }}"></script>
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
         ],
         stateSave: true,
            stateSaveCallback: function(settings, data) {
                localStorage.setItem('DataTables1_' + settings.sInstance, JSON.stringify(data))
            },
            stateLoadCallback: function(settings) {
                return JSON.parse(localStorage.getItem('DataTables1_' + settings.sInstance))
            }
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