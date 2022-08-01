@extends('layouts.master')
@section('content')

@section('css')
<!-- dragula css -->
<link href="{{ URL::asset('/assets/libs/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

<div class="task_area">
    <div class="d-flex task_max_content">
        <div class="task_card_area">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>My Responsibilities</h4>
                    <div id="task-1">
                        <div id="my-responsibilities" class="pb-1 task-list">


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="task_card_area">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Daily Responsibilities</h4>
                    <div id="task-1">
                        <div id="daily-responsibilities" class="pb-1 task-list">


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="task_card_area">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Need Help With Team</h4>
                    <div id="task-1">
                        <div id="need-help" class="pb-1 task-list">


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="task_card_area">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Delete</a>
                        </div>
                    </div> <!-- end dropdown -->

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Can't Handle</h4>
                    <div id="task-1">
                        <div id="cant-handle" class="pb-1 task-list">


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->


                            <!-- Card start -->
                            <div class="card task-box task_box_items" id="uptask-1">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-7">
                                            <div>
                                                <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">Dhaka</span>
                                                <span class="badge badge-soft-secondary font-size-11" id="task-status">2pm - 4pm</span>
                                                <br>
                                                <p class="badge badge-soft-danger text-soft-warning mt-2 p-2">14 Oct, 2019</p>
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="float-end">
                                                        <div class="avatar-group float-start task-assigne">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-4">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block" value="member-5">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <div class="avatar-xs">
                                                                        <span class="avatar-title rounded-circle bg-info text-white font-size-16">
                                                                            3+
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$ 145</h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<!-- dragula plugins -->
<script src="{{ URL::asset('/assets/libs/dragula/dragula.min.js') }}"></script>

<!-- jquery-validation -->
<script src="{{ URL::asset('/assets/libs/jquery-validation/jquery-validation.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/task-kanban.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/task-form.init.js') }}"></script>
@endsection