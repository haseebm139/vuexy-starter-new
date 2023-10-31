@extends('admin.layouts.master')
@section('title',"Meal Category")
@section('header-script')
@endsection

@section('body-section')
    <br>
    <section id="dashboard-analytics">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @can('user-create')
                                <a class="btn btn-success" href="{{ route('category.create') }}"> Create Category</a>
                            @endcan
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                @forelse ($data as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        @php
                                            $image = $item->image

                                        @endphp
                                        <td><img class="profile-user-img img-fluid"
                                                src='{{ asset("$item->image") }}' width="50px"
                                                alt="User profile picture"></td>
                                        <td>{{ $item->name }}</td>


                                        <td>
                                            <div class="form-group">
                                                <div
                                                    class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                                    <input type="checkbox" class="custom-control-input switch-input"
                                                        id="{{ $item->id }}" {{ $item->status == 1 ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="{{ $item->id }}"></label>
                                                </div>
                                            </div>
                                        </td>

                                        <td>
                                            {{-- <a class="btn btn-info" href="{{ route('category.show', $item->id) }}"><span
                                                    class="action-edit"><i class="feather icon-eye"></i></span></a> --}}
                                            <a class="btn btn-primary" href="{{ route('category.edit', $item->id) }}"><span
                                                    class="action-edit"><i class="feather icon-edit"></i></span></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <form method="post" action="{{ route('category.destroy', $item->id) }}"
                                                style="margin-top: -38px;margin-left: 150px";>
                                                @csrf
                                                @method('delete')
                                                <button type="submit"
                                                    onclick="return confirm('Are You Sure Want To Delete This..??')"
                                                    class="btn btn-danger btn btn-default generalsetting_admin"><span
                                                        class="action-delete"><i
                                                            class="feather icon-trash"></i></span></button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('footer-section')
@endsection

@section('footer-script')
    <script>
        $(function() {
            $(".example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": []
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>

    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/')) !!}

        $(".switch-input").change(function() {

            if (this.checked)
                var status = 1;
            else
                var status = 0;
            $.ajax({
                url: "{{ route('category.change.status') }}",
                type: 'GET',
                /*dataType: 'json',*/
                data: {
                    'id': this.id,
                    'status': status
                },
                success: function(response) {
                    if (response) {
                        toastr.success(response.message);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(error) {
                    toastr.error("Some error occured!");
                }
            });
        });
    </script>
@endsection
