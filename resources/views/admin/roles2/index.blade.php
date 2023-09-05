@extends('admin.layouts.master')
@section('title', 'Role')

@section('header-script')
    <link rel="stylesheet"
        href="{{ asset('assets/theme/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css') }}" />
@endsection

@section('body-section')
    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="fw-semibold mb-4">Roles List</h4>

        <p class="mb-4">A role provided access to predefined menus and features so that depending on <br> assigned role an
            administrator can have access to what user needs.</p>
        <!-- Role cards -->
        <div class="row g-4">
            @foreach ($roles as $key => $item)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="fw-normal mb-2">Total {{ $item->users_count }} {{ $item->display_name }}</h6>
                                <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                    @if ($item->users_count == 1)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                    @elseif ($item->users_count == 2)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                    @elseif ($item->users_count == 3)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Julee Rossignol"
                                            data-bs-original-title="Julee Rossignol">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/6.png') }}" alt="Avatar">
                                        </li>
                                    @elseif ($item->users_count == 4)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}" alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Julee Rossignol"
                                            data-bs-original-title="Julee Rossignol">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/6.png') }}" alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Kaith D'souza"
                                            data-bs-original-title="Kaith D'souza">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/3.png') }}"
                                                alt="Avatar">
                                        </li>
                                    @elseif ($item->users_count > 5)
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}"
                                                alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Vinnie Mostowy"
                                            data-bs-original-title="Vinnie Mostowy">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/5.png') }}"
                                                alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Julee Rossignol"
                                            data-bs-original-title="Julee Rossignol">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/6.png') }}"
                                                alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="Kaith D'souza"
                                            data-bs-original-title="Kaith D'souza">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/3.png') }}"
                                                alt="Avatar">
                                        </li>
                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                            class="avatar avatar-sm pull-up" aria-label="John Doe"
                                            data-bs-original-title="John Doe">
                                            <img class="rounded-circle"
                                                src="{{ asset('assets/theme/assets/img/avatars/1.png') }}"
                                                alt="Avatar">
                                        </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-end mt-1">
                                <div class="role-heading">
                                    <h4 class="mb-1"> {{ $item->display_name }}</h4>
                                    <a href="javascript:;" data-id="{{ $item->id }}"
                                        id="edit-btn-{{ $item->id }}" data-bs-toggle="modal"
                                        data-bs-target="#addRoleModal" class="role-edit-modal"><span>Edit Role</span></a>
                                </div>
                                <a href="javascript:void(0);" class="text-muted"><i class="ti ti-copy ti-md"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100">
                    <div class="row h-100">
                        <div class="col-sm-5">
                            <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                <img src="{{ asset('assets/theme/assets/img/illustrations/add-new-roles.png') }}"
                                    class="img-fluid mt-sm-4 mt-md-0" alt="add-new-roles" width="83">
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="card-body text-sm-end text-center ps-sm-0">
                                <button data-bs-target="#addRoleModal" data-bs-toggle="modal"
                                    class="btn btn-primary mb-2 text-nowrap add-new-role waves-effect waves-light">Add New
                                    Role</button>
                                <p class="mb-0 mt-1">Add role, if it does not exist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <!-- Role Table -->
                <div class="card">
                    <div class="card-datatable table-responsive">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row mx-2">
                                <div class="col-sm-12 col-md-4 col-lg-6">
                                    <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select
                                                name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                                class="form-select">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select></label></div>
                                </div>
                                <div class="col-sm-12 col-md-8 col-lg-6">
                                    <div
                                        class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-md-end justify-content-center align-items-center flex-sm-nowrap flex-wrap me-1">
                                        <div class="me-3">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                <label>Search<input type="search" class="form-control"
                                                        placeholder="Search.." aria-controls="DataTables_Table_0"></label>
                                            </div>
                                        </div>
                                        <div class="user_role w-px-200 pb-3 pb-sm-0"></div>
                                    </div>
                                </div>
                            </div>
                            <table class="datatables-users table border-top dataTable no-footer dtr-column"
                                id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    <tr>
                                        <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                            style="width: 24.4375px; display: none;" aria-label=""></th>
                                        <th class="sorting sorting_desc" tabindex="0"
                                            aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                            style="width: 82.7031px;" aria-sort="descending"
                                            aria-label="User: activate to sort column ascending">User</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 81.0312px;"
                                            aria-label="Role: activate to sort column ascending">Role</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 82.9688px;"
                                            aria-label="Plan: activate to sort column ascending">Plan</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 111.547px;"
                                            aria-label="Billing: activate to sort column ascending">Billing</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                            rowspan="1" colspan="1" style="width: 107.531px;"
                                            aria-label="Status: activate to sort column ascending">Status</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 116.781px;" aria-label="Actions">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td valign="top" colspan="6" class="dataTables_empty">Loading...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row mx-2">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                        aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_paginate paging_simple_numbers"
                                        id="DataTables_Table_0_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="DataTables_Table_0_previous"><a href="#"
                                                    aria-controls="DataTables_Table_0" data-dt-idx="previous"
                                                    tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item next disabled"
                                                id="DataTables_Table_0_next"><a href="#"
                                                    aria-controls="DataTables_Table_0" data-dt-idx="next" tabindex="0"
                                                    class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Role Table -->
            </div>
        </div>
        <!--/ Role cards -->

        <!-- Add Role Modal -->
        <!-- Add Role Modal -->

        <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
                <div class="modal-content p-3 p-md-5">
                    <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="text-center mb-4">
                            <h3 class="role-title mb-2">Add New Role</h3>
                            <p class="text-muted">Set role permissions</p>
                        </div>
                        <!-- Add role form -->
                        <form id="addRoleForm" action="{{ route('roles.store') }}" method="POST" class="row g-3">
                            @csrf
                            {{-- <form id="addRoleForm" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" onsubmit="return false" novalidate="novalidate"> --}}
                            @csrf
                            <div class="col-12 mb-4">
                                <label class="form-label" for="name">Role Name</label>
                                <input type="text" id="name" name="name" class="form-control" required
                                    placeholder="Enter a role name" tabindex="-1" />
                            </div>
                            <div class="col-12">
                                <h5>Role Permissions</h5>
                                <!-- Permission table -->
                                <div class="table-responsive">
                                    <table class="table table-flush-spacing">
                                        <tbody>
                                            @if (count($permission_type) > 0)
                                                @foreach ($permission_type as $item)
                                                    <tr>
                                                        <td class="text-nowrap fw-semibold"> {{ $item }} <i
                                                                class="ti ti-info-circle" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                aria-label="Allows a full access to the system"
                                                                data-bs-original-title="Allows a full access to the system"></i>
                                                        </td>
                                                        @foreach ($permission as $permissions)
                                                            @if ($permissions->type == $item)
                                                                <td>
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="permission[]"
                                                                            data-id="{{ $permissions->id }}"
                                                                            id="users-checkbox{{ $permissions->id }}"
                                                                            value="{{ $permissions->id }}">
                                                                        <label class="form-check-label"
                                                                            for="users-checkbox{{ $permissions->id }}">{{ $permissions->display_name }}</label>
                                                                    </div>
                                                                </td>
                                                            @endif
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                                <!-- Permission table -->
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit"
                                    class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Submit</button>
                                <button type="reset" class="btn btn-label-secondary waves-effect"
                                    data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                            </div>
                            <input type="hidden">
                        </form>
                        <!--/ Add role form -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add Role Modal -->

        <!-- / Add Role Modal -->

    </div>
@endsection


@section('footer-section')
@endsection

@section('footer-script')

    <script>
        $(document).ready(function() {
            $("#addRoleForm").validate();
            $(".role-edit-modal").click(function(e) {
                e.preventDefault();
                var id = $(this).attr("data-id");
                var url = "{{ route('roles.edit', ':id') }}";
                url = url.replace(':id', id);


                console.log(url);
                $.ajax({
                    type: "get",
                    url: url,
                    success: function(response) {
                        console.log(response);
                    }
                });

            });
        });
    </script>
@endsection
