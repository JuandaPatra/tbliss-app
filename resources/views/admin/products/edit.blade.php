@extends('admin.layouts.dashboard')
@section('title')
Edit Product
@endsection
@section('breadcrumbs')
{{-- {{ Breadcrumbs::render('add_category') }} --}}
@endsection
@section('content')
<a href="{{route('product.index')}}" class="btn btn-warning btn-sm mb-3">Back</a>
<div class="row">
    <div class="col-12 col-md-8">
        <form action="{{route('product.updateTrip', ['id'=>$trip->id])}}" method="POST">
            @csrf
            <div class="card mb-4">
                <h5 class="card-header">Trip Edit</h5>
                <div class="card-body">
                    <!-- title -->
                    <div class="mb-3">
                        <label for="input_post_title" class="form-label">Title</label>
                        <input id="input_post_title" name="title" type="text" placeholder="" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $trip->title) }}" />
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
                            <input id="input_post_slug" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror" readonly value="{{ old('slug', $trip->slug) }}" />
                    @error('slug')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                --}}

                <!-- image -->
                <div class="mb-3">
                    <label for="input_post_image" class="form-label">Banner</label>
                    <div class="input-group">
                        <button id="button_post_banner" data-input="input_post_banner" class="btn btn-outline-primary" type="button">
                            Browse
                        </button>
                        <input id="input_post_banner" name="banner" value="{{ old('banner', $trip->banner) }}" type="text" class="form-control  @error('banner') is-invalid @enderror" placeholder="" readonly />
                    </div>
                </div>
                <!-- image -->
                <div class="mb-3">
                    <label for="input_post_image" class="form-label">Image</label>
                    <div class="input-group">
                        <button id="button_post_image" data-input="input_post_image" class="btn btn-outline-primary" type="button">
                            Browse
                        </button>
                        <input id="input_post_image" name="thumbnail" value="{{ old('thumbnail', $trip->thumbnail) }}" type="text" class="form-control @error('thumbnail') is-invalid @enderror" placeholder="" readonly />
                    </div>
                </div>
                <!-- content -->
                <div class="mb-3">
                    <label for="input_post_content" class="form-label">Description</label>
                    <textarea id="input_post_content" name="description" class="form-control @error('description') is-invalid @enderror" rows="20">{{ old('description', $trip->description) }}
                    </textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <!-- itinerary -->
                {{--
                    <div class="mb-3">
                        <label for="input_post_content1" class="form-label">itinerary</label>
                        <textarea id="input_post_content1" name="itinerary" class="form-control @error('itinerary') is-invalid @enderror" rows="20">{{ old('itinerary', $trip->itinerary) }}
                        </textarea>
                        @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                     --}}
                <div class="mb-3">
                    <label for="input_post_price" class="form-label">Price</label>
                    <input id="input_post_price" name="price" type="text" placeholder="" class="form-control @error('price') is-invalid @enderror tourPrice" name="price" value="{{ old('price', $trip->price) }}" />
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input_post_seat" class="form-label">Seat</label>
                    <input id="input_post_seat" name="seat" type="number" placeholder="" class="form-control @error('seat') is-invalid @enderror" name="seat" value="{{ old('seat', $trip->seat) }}" />
                    @error('seat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="input_post_thumbnail" class="form-label">PDF itinerary</label>
                    <div class="input-group">
                        <button id="button_post_pdf" data-input="input_post_pdf" class="btn btn-outline-primary" type="button">Browse >
                        </button>
                        <input id="input_post_pdf" name="link_g_drive" value="{{ old('link_g_drive', $trip->link_g_drive) }}" type="text" class="form-control @error('link_g_drive') is-invalid @enderror" placeholder="" readonly />
                        @error('link_g_drive')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="input_post_date_from" class="form-label">Tanggal Keberangkatan</label>
                          
                            <input class="form-control @error('date_from') is-invalid @enderror" value="{{ old('date_from', $trip->date_from) }}" type="date" name="date_from" id="html5-date-input">
                            @error('date_from')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="input_post_date_to" class="form-label">Tanggal Kedatangan</label>
                            
                            <input class="form-control @error('date_to') is-invalid @enderror" value="{{ old('date_to', $trip->date_to) }}" type="date" name="date_to" id="html5-date-input">
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
                            <input id="input_days" name="day" type="number" placeholder="" class="form-control @error('day') is-invalid @enderror  days-total" name="day" value="{{ old('day', $trip->day) }}" />
                            @error('day')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="input_nights" class="form-label">Malam</label>
                            <input id="input_nights" name="night" type="number" placeholder="" class="form-control @error('night') is-invalid @enderror" name="night" value="{{ old('night', $trip->night) }}" />
                            @error('night')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="input_post_seat" class="form-label">Visa</label>
                    <input id="input_post_price" name="visa" type="text" placeholder="" class="form-control @error('visa') is-invalid @enderror visa-input" name="visa" value="{{ old('visa', $trip->visa) }}" />
                    @error('visa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-6">
                            <label for="input_days" class="form-label">Tipping PerDay (Rp.)</label>
                            <input id="input_post_price" name="tipping" type="text" placeholder="" class="form-control @error('tipping') is-invalid @enderror tipping-price" name="tipping" value="{{ old('tipping', $trip->tipping) }}" />
                            @error('tipping')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="input_nights" class="form-label">Total Tipping (Rp.)</label>
                            <input id="input_post_price" name="total_tipping" type="text" placeholder="" class="form-control @error('total_tipping') is-invalid @enderror total-tipping-price" name="total_tipping" value="{{ old('total_tipping', $trip->total_tipping) }}" readonly />
                            @error('total_tipping')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                {{--
                    <div class="mb-3">
                        <label for="select_post_status" class="form-label">Status</label>
                        <select id="select_post_status" name="status" class="form-select @error('status') is-invalid @enderror">
                            <option value="">Please Select ..</option>
                            @foreach ($statuses as $key =>$value)
                            <option value="{{ $key }}" {{ old('status',  $trip->status) == $key ? "selected" : null }}> {{ $value }}</option>
                @endforeach
                </select>
                @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            --}}
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
            </div>
    </div>
</div>

</div>

<div class="col-12 col-md-4">
    <div class="card mb-4">
        <h5 class="card-header">Total Price</h5>
        <div class="card-body">
            <div class="mb-3">
                <label for="input_post_price" class="form-label">Total Price</label>
                <input id="input_post_prices_total" name="prices_total" type="text" placeholder="" class="form-control @error('prices_total') is-invalid @enderror" name="prices_total" value="{{ old('tipping', $total_price) }}" readonly />
                @error('prices_total')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="card mb-4">
            <h5 class="card-header">DP Price & Installment</h5>
            <div class="card-body">
                <div class="mb-3">
                    <label for="input_post_price" class="form-label">DP</label>
                    <input id="input_post_price" name="dp_price" type="text" placeholder="" class="form-control @error('dp_price') is-invalid @enderror" name="dp_price" value="{{ old('dp_price', $trip->dp_price) }}" />
                    @error('dp_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input_post_price" class="form-label">Installment 1</label>
                    <input id="input_post_price" name="installment1" type="text" placeholder="" class="form-control @error('installment1') is-invalid @enderror" name="installment1" value="{{ old('installment1', $trip->installment1) }}" />
                    @error('installment1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="input_post_price" class="form-label">Installment 2</label>
                    <input id="input_post_price" name="installment2" type="text" placeholder="" class="form-control @error('installment2') is-invalid @enderror" name="installment2" value="{{ old('installment2', $trip->installment2) }}" />
                    @error('installment2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                {{-- <div class="mb-3">
                    <label for="input_post_price" class="form-label">Installment 3</label>
                    <input id="input_post_price" name="installment3" type="text" placeholder="" class="form-control @error('price') is-invalid @enderror" name="installment3" value="{{ old('installment3', $trip->installment3) }}" />
                @error('installment3')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}
            </form>
        </div>
    </div>

    <div class="card mb-4 ">
        <h5 class="card-header">Edit Negara</h5>
        <div class="country-list">
            <div class="card-body ">
                <div class="d-flex justify-content-between">
                    <div class="text-light small fw-semibold">Negara</div>
                    <a class="btn btn-warning btn-sm text-white" id="edit-item">Edit Negara</a>
                </div>

                <div class="demo-inline-spacing">
                    @foreach($trip->place_trip_categories as $country)
                    <span class="badge bg-primary"> {{$country->place_categories->title}}</span>
                    @endforeach
                </div>
            </div>

        </div>



        <div class="country-add d-none">
            <div class="card-body ">
                <form action="{{ route('edit-country.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="trip_categories_id" class="form-control" value="{{ $trip->id }}">
                    <div class="accordion mt-3 mb-3" id="accordionExample">
                        <div class="card accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionOne" aria-expanded="false" aria-controls="accordionOne">
                                    Tambah Negara
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
                    </div>
                    <div class="d-flex justify-content-end">
                        <a id="edit-item-country" class="btn btn-danger px-4 me-2 text-white"><i class="menu-icon bx bx-save"></i>Cancel</a>
                        <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
                    </div>

                </form>
                <div class="table-responsive text-nowrap" style="height:300px;overflow: auto;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @foreach($trip->place_trip_categories as $country)
                            <tr>
                                <td>{{ $loop->index+1}}</td>
                                <td><strong>{{$country->place_categories->title}}</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="o9k5ac" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" style="">

                                            <form action="{{ route('edit-country.destroy',$country->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $country->id }}" onclick="this.closest('form').submit();return false;">
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
                </form>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <h5 class="card-header">Edit Kota</h5>

        <div class="card-body city-list">
            <div class="d-flex justify-content-between ">
                <div class="text-light small fw-semibold">Kota</div>
                <button class="btn btn-warning btn-sm" id="edit-kota">Edit Kota</button>

            </div>

            <div class="demo-inline-spacing">
                @foreach($trip->place_trip_categories_cities as $city)
                @if($city->id %2 == 0)
                <span class="badge bg-info">{{$city->place_categories->title}}</span>
                @else
                <span class="badge bg-primary">{{$city->place_categories->title}}</span>
                @endif

                @endforeach
            </div>
        </div>


        <div class="card-body city-add d-none">
            <div class="accordion mt-3 mb-4" id="accordionExample">
                <form action="{{ route('edit-city.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="trip_categories_id" class="form-control" value="{{ $trip->id }}">
                    <div class="card accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">
                                Tambah Kota
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
                                            @foreach($trip->place_trip_categories_cities->unique('place_categories_id') as $true1)
                                            <input class="form-check-input " type="checkbox" value="{{$checkbox2->id}}" id="defaultCheck1" name="cities[]">
                                            @endforeach
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
                    <div class="d-flex justify-content-end mt-3">
                        <a id="edit-kota-back" class="btn btn-danger px-4 me-2 text-white"><i class="menu-icon bx bx-save"></i>Cancel</a>
                        <button type="submit" class="btn btn-success px-4"><i class="menu-icon bx bx-save"></i>Save</button>
                    </div>
                </form>
            </div>
            <div class="table-responsive text-nowrap" style="height:300px;overflow: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($trip->place_trip_categories_cities as $city)
                        <tr>
                            <td>{{ $loop->index+1}}</td>
                            <td><strong>{{$city->place_categories->title}}</strong></td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" fdprocessedid="o9k5ac" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <form action="{{ route('edit-city.destroy',$city->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a class="dropdown-item" href="#" , role="alert" alert-text="{{ $city->id }}" onclick="this.closest('form').submit();return false;">
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
    </div>

    <div class="card mb-4">
        <h5 class="card-header">Edit Total Review</h5>

        <div class="card-body review-list">
            <div class="d-flex justify-content-start mb-4">
                <div class="text-light small fw-semibold"> {{$trip->trip_star}} / 5 stars</div>

            </div>
            <div class="d-flex justify-content-between ">
                <div class="text-light small fw-semibold">{{$trip->trip_review}} Reviews</div>
                <button class="btn btn-warning btn-sm" id="edit-review">Edit Review</button>
            </div>


        </div>


        <div class="card-body review-add d-none">
            <div class="accordion mt-3 mb-4" id="accordionExample">
                <form action="{{  route('product.reviewAdd', [$trip->id]) }}" method="POST">

                    @csrf
                    <div class="card mb-4">
                        <h5 class="card-header">Total Review</h5>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="input_post_title" class="form-label">Review</label>
                                <input id="input_post_title" name="trip_review" type="number" placeholder="" class="form-control @error('trip_review') is-invalid @enderror" name="name" value="{{ old('trip_review', $trip->trip_review) }}" />
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

                                    <option value="1" {{ old('trip_star',  $trip->trip_star) == 1 ? "selected" : null }}> 1</option>
                                    <option value="2" {{ old('trip_star',  $trip->trip_star) == 2 ? "selected" : null }}> 2</option>
                                    <option value="3" {{ old('trip_star',  $trip->trip_star) == 3 ? "selected" : null }}> 3</option>
                                    <option value="4" {{ old('trip_star',  $trip->trip_star) == 4 ? "selected" : null }}> 4</option>
                                    <option value="5" {{ old('trip_star',  $trip->trip_star) == 5 ? "selected" : null }}> 5</option>

                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <a class="btn btn-warning px-4 " id="edit-review-back">Back</a>
                            <button type="submit" class="btn btn-primary px-4">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

    <div class="card mb-4">
        <h5 class="card-header">Testimoni</h5>

        <div class="card-body testimoni-list">
            <div class="d-flex justify-content-start mb-4">
                @if($tripTestimoni != null )
                <div class="text-light small fw-semibold"> {{$tripTestimoni->count()}} testimoni</div>
                @endif
            </div>
            <div class="d-flex justify-content-end ">
                <button type="button" class="btn btn-sm me-3 btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">Add Testimoni</button>
                <button class="btn btn-warning btn-sm" id="edit-testimoni">Edit Testimoni</button>
            </div>
            <div class="mt-3">
                <!-- Modal -->
                <div class="modal fade" id="modalCenter" tabindex="-1" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Tambah Testimoni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{  route('product.testimoniAdd',[$trip->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$trip->id}}" class="trips_value">
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


        <div class="card-body testimoni-add d-none">
            
            <div class="table-responsive text-nowrap" style="height:300px;overflow: auto;">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th style="padding: 0;">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach($tripTestimoni as $testimoni)
                        <tr>
                            <td>{{ $loop->index+1}}</td>
                            <td><strong>{{$testimoni->name}}</strong></td>
                            <td style="padding: 0;">
                                <a class="btn btn-sm btn-primary" href="{{ route('product.editTestimoniTrip',['product'=>$testimoni]) }}"><i class="bx bx-edit-alt me-1"></i> Edit</a>

                            
                            </td>
                            <td style="padding: 0;">
                            <div >
                                <form action="{{ route('product.destroyTestimoniTrip',['product'=>$testimoni->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-sm btn-danger" href="#" , role="alert" alert-text="{{ $testimoni->title }}" onclick="this.closest('form').submit();return false;">
                                        <i class="bx bx-trash me-1"></i>Delete
                                    </a>
                                </form>
                            </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
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
        $('#button_post_banner').filemanager('image');
        $('#button_post_pdf').filemanager('application');
        // event :  description

        easyNumberSeparator({
            selector: '#input_post_price',
            separator: '.'
        })

        easyNumberSeparator({
            selector: '#input_post_prices_total',
            separator: '.'
        })

        $(".visa-input").on("input", function() {
            let visaPrice = 0
            let price = 0

            let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
            visaPrice = parseInt(visaInput)

            let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
            price = parseInt(priceTrip)

            if (priceTrip == '') {
                price = 0

            } else if (visaInput == '') {
                visaPrice = 0
            }

            let total = visaPrice + price

            // let installment1 = $('.installment1-price').val().replace(/[.]+/g, "")
            // let input_dp_price = $('.dp-price').val().replace(/[.]+/g, "")
            // installment2Price = total - parseInt(installment1) - parseInt(input_dp_price)

            // $('.installment2-price').val(installment2Price).change()

            // easyNumberSeparator({
            //    selector: '#input_post_price',
            //    separator: '.'
            // })
            $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            })).change()
        });

        $('.tourPrice').on("input", function() {
            let visaPrice = 0
            let price = 0

            let visaInput = $('.visa-input').val().replace(/[.]+/g, "")
            visaPrice = parseInt(visaInput)

            let priceTrip = $('.tourPrice').val().replace(/[.]+/g, "")
            price = parseInt(priceTrip)

            if (priceTrip == '') {
                price = 0

            } else if (visaInput == '') {
                visaPrice = 0
            }

            let total = visaPrice + price

            // let installment1 = $('.installment1-price').val().replace(/[.]+/g, "")
            // let input_dp_price = $('.dp-price').val().replace(/[.]+/g, "")
            // installment2Price = total - parseInt(installment1) - parseInt(input_dp_price)

            // $('.installment2-price').val(installment2Price).change()

            // easyNumberSeparator({
            //    selector: '#input_post_price',
            //    separator: '.'
            // })

            $('#input_post_prices_total').val(total.toLocaleString("id-ID", {
                style: "currency",
                currency: "IDR",
                minimumFractionDigits: 0
            })).change()
        })


        $('.tipping-price').on("input", function() {
            let tip = 0
            let tipPrice = $(this).val().replace(/[.]+/g, "")
            let days = $('.days-total').val()
            if (tipPrice == '') {
                tip = 0
            } else {
                tip = tipPrice
            }
            $('.total-tipping-price').val(tip * days).change()
            easyNumberSeparator({
                selector: '#input_post_price',
                separator: '.'
            })


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

        $('#edit-item').on('click', function() {
            $('.country-list').addClass('d-none')
            $('.country-add').removeClass('d-none')
        })

        $('#edit-item-country').on('click', function() {
            $('.country-list').removeClass('d-none')
            $('.country-add').addClass('d-none')
        })

        $('#edit-kota').on('click', function() {

            $('.city-list').addClass('d-none')
            $('.city-add').removeClass('d-none')
        })

        $('#edit-kota-back').on('click', function() {

            $('.city-list').removeClass('d-none')
            $('.city-add').addClass('d-none')
        })

        $('#edit-review').on('click', function() {
            $('.review-list').addClass('d-none')
            $('.review-add').removeClass('d-none')
        })

        $('#edit-review-back').on('click', function() {
            $('.review-list').removeClass('d-none')
            $('.review-add').addClass('d-none')
        })


        $('#edit-testimoni').on('click', function() {
            $('.testimoni-list').addClass('d-none')
            $('.testimoni-add').removeClass('d-none')
        })

        $('#edit-hashtag').on('click', function() {

            $('.hashtag-list').addClass('d-none')
            $('.hashtag-add').removeClass('d-none')
        })

        $('#edit-hashtag-back').on('click', function() {

            $('.hashtag-list').removeClass('d-none')
            $('.hashtag-add').addClass('d-none')
        })


        // $(document).on('click', "#edit-item", function() {
        //     console.log('tes')
        //     $('#country-list').addClass('d-none')
        //     $('#country-add').removeClass('d-none')
        //     // $('#country-list').addClass('d-none')

        //     // $(this).addClass('edit-item-trigger-clicked');
        //     // var el = $(".edit-item-trigger-clicked");
        //     // const id = el.data('item-id');
        //     // var title = el.data('item-title');
        //     // var images = el.data('item-images');
        //     // var slug = el.data('item-slug');

        //     // // // fill the data in the input fields
        //     // $("#input-id").val(id);
        //     // $("#input-title").val(title);
        //     // $("#input-slug").val(slug);
        //     // $("#edit-post-images").val(images);

        //     // form = document.getElementById('include-update-form');
        //     // form.action = "{{ route('includes.update','')}}" + "/" + id;
        // })
    });
</script>
@endpush