@extends('admin.layouts.dashboard')
@section('title')
@php
$postId = last(request()->segments());
@endphp
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render() }} --}}
@endsection
@section('content')



<!-- Basic Bootstrap Table -->
<div class="">
    <a href="{{route('product.index')}}" class="btn btn-warning btn-sm">Back</a>
    <h5 class="card-header">Includes/Excludes : <span>{{$datas->title}}</span></h5>
    <div class="row">
        <div class="col-12">
            <h5 class="card-header">Includes</h5>
            <div class="row">
                <div class="col-8">
                    <div class="card mb-4 pt-3">
                        <div class="table-responsive text-nowrap" style="height:500px">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Title</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @forelse ($includes as $row)
                                    <tr>
                                        <td><img src="{{ $row->icon_image }}" alt=""></td>
                                        <td><strong>{{ $row->title }}</strong></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" role="button" id="edit-item" data-item-id="{{ $row->id }}" data-item-images="{{ $row->icon_image }}" data-item-title="{{ $row->title }}" data-item-slug="{{ $row->slug }}"></i> Edit</a>

                                                    <form action="{{ route('includes.destroy',$row->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                                                            <i class="bx bx-trash me-1"></i>Delete
                                                        </a>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        @empty
                                        <td>Includes Tidak Tersedia</td>
                                        @endforelse
                                    </tr>
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-4 px-3 pb-3" id="includes-add">
                        <h5 class="card-header">Add Includes</h5>
                        <form action="{{route('includes.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="trip_cat_id" class="form-control" value="{{ $slug }}">
                            <div class="mb-3">
                                <label for="input_post_title" class="form-label">Title</label>
                                <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            {{--
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
                    --}}
                    <!-- image -->
                    <div class="mb-3">
                        <label for="input_post_image" class="form-label">Icon Image</label>
                        <div class="input-group">
                            <button id="button_post_image1" data-input="input_post_image" class="btn btn-outline-primary" type="button">
                                Browse
                            </button>
                            <input id="input_post_image" name="thumbnail" value="{{ old('thumbnail') }}" type="text" class="form-control" placeholder="" readonly />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
                    </div>
                    </form>
                </div>
                <div class="card mb-4 px-3 pb-3 d-none" id="includes-edit">
                    <h5 class="card-header">Edit Includes</h5>
                    <form id="include-update-form" method="POST" action="{{ route('includes.update',$slug) }}">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="trip_cat_id" class="form-control" id="input-id">
                        <div class="mb-3">
                            <label for="input_post_title" class="form-label">Title</label>
                            <input id="input-title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{--
                                <!-- slug -->
                                <div class="mb-3">
                                    <label for="input_post_slug" class="form-label">Slug</label>
                                    <input id="input-slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
                        @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                --}}
                <!-- image -->
                <div class="mb-3">
                    <label for="input_post_image" class="form-label">Icon Image</label>
                    <div class="input-group">
                        <button id="button_edit_include" data-input="edit-post-images" class="btn btn-outline-primary" type="button">
                            Browse
                        </button>
                        <input id="edit-post-images" name="thumbnail" value="{{ old('thumbnail') }}" type="text" class="form-control" placeholder="" readonly />
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <!-- <button id="back-edit-include" class="btn btn-danger px-4"><i class="menu-icon bx bx-save"></i>Cancel</button> -->
                    <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="col-12">
    <h5 class="card-header">Excludes</h5>
    <div class="row">
        <div class="col-8">
            <div class="card mb-4 pt-3">
                <div class="table-responsive text-nowrap" style="height:500px">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Icon</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @forelse ($excludes as $row)
                            <tr>
                                <td><img src="{{$row->icon_image}}" alt=""></td>
                                <td><strong>{{ $row->title }}</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" role="button" id="edit-item2" data-item-id="{{ $row->id }}" data-item-images="{{ $row->icon_image }}" data-item-title="{{ $row->title }}" data-item-slug="{{ $row->slug }}"></i> Edit</a>

                                            <form action="{{ route('excludes.destroy',$row->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $row->title }}" onclick="this.closest('form').submit();return false;">
                                                    <i class="bx bx-trash me-1"></i>Delete
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                @empty
                                <td>Excludes Tidak Tersedia</td>
                                @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-4 px-3 pb-3" id="excludes-add">
                <h5 class="card-header">Add Excludes</h5>
                <form action="{{route('excludes.store', ['product'=>1])}}" method="POST">
                    @csrf
                    <input type="hidden" name="trip_cat_id" class="form-control" value="{{ $slug }}">
                    <div class="mb-3">
                        <label for="input_post_title1" class="form-label">Title</label>
                        <input id="input_post_title1" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{--
                                <!-- slug -->
                                <div class="mb-3">
                                    <label for="input_post_slug" class="form-label">Slug</label>
                                    <input id="input_post_slug1" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
                    @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
            </div>
            --}}
            <!-- image -->
            <div class="mb-3">
                <label for="input_post_image" class="form-label">Icon Image</label>
                <div class="input-group">
                    <button id="button_post_image" data-input="input_post_image1" class="btn btn-outline-primary" type="button">
                        Browse
                    </button>
                    <input id="input_post_image1" name="thumbnail2" value="{{ old('thumbnail2') }}" type="text" class="form-control" placeholder="" readonly />
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
            </div>
            </form>
        </div>
        <div class="card mb-4 px-3 pb-3 d-none" id="excludes-edit">
            <h5 class="card-header">Edit Excludes</h5>
            <form id="exclude-update-form" method="POST" action="{{ route('excludes.update',$slug) }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="trip_cat_id" class="form-control" id="input-id-excludes" value="{{$slug}}">
                <div class="mb-3">
                    <label for="input_post_title1" class="form-label">Title</label>
                    <input id="input-title-excludes" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" />
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- slug -->
                {{--
                                <div class="mb-3">
                                    <label for="input_post_slug" class="form-label">Slug</label>
                                    <input id="input-slug-excludes" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug') }}" />
                @error('slug')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>
        --}}
        <!-- image -->
        <div class="mb-3">
            <label for="input_post_image" class="form-label">Icon Image</label>
            <div class="input-group">
                <button id="button_post_image_edit" data-input="edit-post-images-excludes" class="btn btn-outline-primary" type="button">
                    Browse
                </button>
                <input id="edit-post-images-excludes" name="thumbnail2" value="{{ old('thumbnail2') }}" type="text" class="form-control" placeholder="" readonly />
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
        </div>
        </form>
    </div>
</div>
</div>
</div>
</div>

</div>



<!--/ Basic Bootstrap Table -->
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
        $("#input_post_title1").change(function(event) {
            $("#input_post_slug1").val(
                event.target.value
                .trim()
                .toLowerCase()
                .replace(/[^a-z\d-]/gi, "-")
                .replace(/-+/g, "-")
                .replace(/^-|-$/g, "")
            );
        });

        $("#input-title").change(function(event) {
            $("#input-slug").val(
                event.target.value
                .trim()
                .toLowerCase()
                .replace(/[^a-z\d-]/gi, "-")
                .replace(/-+/g, "-")
                .replace(/^-|-$/g, "")
            );
        });
        $("#input-title-excludes").change(function(event) {
            $("#input-slug-excludes").val(
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
        $('#button_post_image1').filemanager('image');
        $('#button_edit_include').filemanager('image');
        $('#button_post_image').filemanager('image');
        $('#button_post_image_edit').filemanager('image');
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


        $(document).on('click', "#edit-item", function() {
            console.log('tes')
            $('#includes-add').addClass('d-none')
            $('#includes-edit').removeClass('d-none')

            $(this).addClass('edit-item-trigger-clicked');
            var el = $(".edit-item-trigger-clicked");
            const id = el.data('item-id');
            var title = el.data('item-title');
            var images = el.data('item-images');
            var slug = el.data('item-slug');

            // // fill the data in the input fields
            $("#input-id").val(id);
            $("#input-title").val(title);
            $("#input-slug").val(slug);
            $("#edit-post-images").val(images);

            form = document.getElementById('include-update-form');
            // alert(id)
            // form.action = "{{ route('includes.update','')}}" + "/" + id;
            form.action = "{{ route('includes.update','')}}" + "/" + id;
        })

        $(document).on('click', "#edit-item2", function() {
            console.log('tescoba')
            $('#excludes-add').addClass('d-none')
            $('#excludes-edit').removeClass('d-none')

            $(this).addClass('edit-item-trigger-clicked');
            var el = $(".edit-item-trigger-clicked");
            const id = el.data('item-id');
            var title = el.data('item-title');
            var images = el.data('item-images');
            var slug = el.data('item-slug');

            // // fill the data in the input fields
            // $("#input-id-excludes").val(id);
            $("#input-title-excludes").val(title);
            $("#input-slug-excludes").val(slug);
            $("#edit-post-images-excludes").val(images);

            form = document.getElementById('exclude-update-form');
            // alert(id)
            form.action = "{{ route('excludes.update','')}}" + "/" + id;
        })

        $('#back-edit-include').click(function() {
            location.reload();
        });

        $('#back-edit-exclude').click(function() {
            location.reload();
        });
    });
</script>
@endpush