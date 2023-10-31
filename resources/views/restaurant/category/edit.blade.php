
@extends('admin.layouts.master')
@section('title',"Edit Meal Category")
@section('header-script')

@endsection

@section('body-section')
<br>
<section class="input-validation dashboard-analytics">
    >

        <div class="row">
          <div class="col-12">
          <div class="card">

                <div class="card-content">
                    <div class="card-body">
                  {!! Form::model($category, ['method' => 'PATCH','route' => ['category.update', $category->id],'enctype'=>'multipart/form-data']) !!}
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Product Name:</strong>
                              {!! Form::text('name', null, array('placeholder' => 'Category Name','class' => 'form-control')) !!}
                          </div>
                      </div>

                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Product Name:</strong>
                            {!! Form::text('name', null, array('placeholder' => 'Category Name','class' => 'form-control')) !!}
                        </div>
                    </div>

                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Profile:</strong>
                              {!! Form::file('image',  array('class' => 'form-control')) !!}
                          </div>
                      </div>


                      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
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

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyDMzBtl2TKTecLe_NEmSup5U-nkj93Ch7o"></script>
<script src="{{asset('assets/js/waitMe.js')}}"></script>
<script>



</script>

<script type="text/javascript">

 var APP_URL = {!! json_encode(url('/')) !!}





</script>

@endsection
