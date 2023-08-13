@extends('admin.layouts.dashboard')
@section('title')
Sliders
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('sliders') }} --}}
@endsection
@section('content')
<div class="card">
    <div class="d-flex justify-content-between">
        <h5 class="card-header">List Testimoni Hidden Gems</h5>
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                    Tambah Testimoni
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Testimoni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('testimoniHiddenGem.store')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$id}}" name="hidden_gem_id" class="hidden_gem_value">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameWithTitle" class="form-label">Name</label>
                                            <input type="text" id="nameWithTitle" class="form-control @error('trip_review') is-invalid @enderror" name="name" value="{{ old('trip_review') }}" placeholder="Enter Name" name="trip_review">
                                            @error('trip_review')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <label for="input_post_content" class="form-label">Description</label>
                                        <textarea id="input_post_content" name="description" class="form-control @error('description') is-invalid @enderror" rows="20">{{ old('description') }}
                                        </textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive text-nowrap px-4" style="height: 300px;">

        <table class="table ">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">

            
                @foreach ($datas as $row)
                <tr>
                    <td>
                        {{$loop->iteration}}
                    </td>
                    <td><strong>{{ $row->name }}</strong></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('testimoniHiddenGem.edit',['testimoniHiddenGem'=>$row->id]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                <form action="{{ route('testimoniHiddenGem.destroy',['testimoniHiddenGem'=>$row->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                                        <i class="bx bx-trash me-1"></i>Delete
                                    </a>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
                
               
            </tbody>
        </table>






    </div>
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

        let dataValue = $('.trips_value').val();

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
                //  {
                //      data: 'roles',
                //      name: 'roles'
                //  },
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