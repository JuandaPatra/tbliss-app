@extends('admin.layouts.dashboard')
@section('title')
Sliders
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('sliders') }} --}}
@endsection
@section('content')
<div class="row">
    <div class="col-md-11">
        <form action="{{  route('product.reviewAdd', [$id]) }}" method="POST">

            @csrf
            <div class="card mb-4">
                <h5 class="card-header">Total Review</h5>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="input_post_title" class="form-label">Review</label>
                        <input id="input_post_title" name="trip_review" type="number" placeholder="" class="form-control @error('trip_review') is-invalid @enderror" name="name" value="{{ old('trip_review', $review->trip_review) }}" />
                        @error('trip_review')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="input_post_title" class="form-label">Total Star</label>
                        <select id="select_post_status" name="trip_star" class="form-select @error('trip_star') is-invalid @enderror">
                            <option value="">Please Select ..</option>

                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>

                        </select>
                        @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <a class="btn btn-warning px-4" href="">Back</a>
                    <button type="submit" class="btn btn-primary px-4">Save</button>
                </div>
            </div>
        </form>
    </div>
    @endsection
    @push('javascript-internal')
    <script>
        $(document).ready(function() {
            // event delete category
            $("form[role='alert']").submit(function(event) {
                event.preventDefault();
                Swal.fire({
                    title: "Apakah anda ingin menghapus ?",
                    text: $(this).attr('alert-text'),
                    icon: 'warning',
                    allowOutsideClick: false,
                    showCancelButton: true,
                    cancelButtonText: "Cancel",
                    reverseButtons: true,
                    confirmButtonText: "Yes",
                }).then((result) => {
                    if (result.isConfirmed) {
                        // todo: process of deleting categories
                        event.target.submit();
                    }
                });
            });
        });
    </script>
    @endpush
    @push('javascript-external')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

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
    </style>
    @endpush
    @push('javascript-internal')
    <script>
        $(document).ready(function() {
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

            $('#button_post_pdf').filemanager('image');

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "",
                columns: [
                    //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    //  { "width": "20%" },
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    //  {
                    //      data: 'email',
                    //      name: 'email'
                    //  },
                    {
                        data: 'roles',
                        name: 'roles'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                    //  {
                    //      data: 'finish_date',
                    //      name: 'finish_date'
                    //  },
                    // {
                    //    data: 'created_at',
                    //    render: function(d) {
                    //       return moment(d).format("DD/MM/YYYY HH:mm");
                    //    }
                    // },
                    // {
                    //    data: 'email',
                    //    name: 'subject'
                    // },
                    // {
                    //    data: 'email',
                    //    name: 'address'
                    // },
                    // {
                    //    data: 'email',
                    //    name: 'phone'
                    // },
                    // {
                    //    data: 'email',
                    //    name: 'message'
                    // }

                ]
            });
        });
    </script>
    @endpush