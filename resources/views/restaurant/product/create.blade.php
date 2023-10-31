@extends('admin.layouts.master')
@section('title', 'Create Meal Product')
@section('header-script')
@endsection

@section('body-section')
    <section class="input-validation dashboard-analytics">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal" action="{{ route('product.store') }}" novalidate
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <div class="controls">
                                                <input type="text" name="name" class="form-control"
                                                    data-validation-required-message="Product Name is required"
                                                    placeholder="Product Name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Title</label>
                                            <div class="controls">
                                                <input type="text" name="title" class="form-control"
                                                    data-validation-required-message="Product Title is required"
                                                    placeholder="Product Title">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <div class="controls">
                                                <input type="number" name="price" class="form-control"
                                                    data-validation-required-message="Product Price is required"
                                                    placeholder="Product Price">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Description</label>
                                            <div class="controls">
                                                <input type="text" name="description" class="form-control"
                                                    data-validation-required-message="Description Title is required"
                                                    placeholder="Description Title">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="select2-theme form-control" name="category_id" id="select2-theme">
                                                @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>

                                                @endforeach



                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <div class="controls">
                                                <input type="file" name="image" class="form-control"
                                                    data-validation-required-message="Image is required"
                                                    placeholder="Product Image">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer-section')
@endsection

@section('footer-script')
    <!-- <script src="{{ asset('assets/js/countrystatecity.js?v2') }}"></script> -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
    <script type="text/javascript"
        src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
    <link rel="stylesheet" href="{{ asset('app-assets/css/toastr.min.css') }}" />

    <script src="{{ asset('app-assets/js/waitMe.js') }}"></script>
    <script src="{{ asset('app-assets/js/toastr.min.js') }}"></script>

    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}
    </script>
@endsection
