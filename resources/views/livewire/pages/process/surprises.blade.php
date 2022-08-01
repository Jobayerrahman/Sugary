@section('css')
<!-- dragula css -->
<link href="{{ URL::asset('/assets/libs/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

<div class="task_area">
    <div class="d-flex task_max_content">
        <div class="task_card">
            <div class="card me-2">
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

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Subscribed</h4>
                    <div id="task-1">
                        <div class="task_card_area">
                            <div id="subscribed" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="subscribed">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
                                <div class="card task-box task_box_items" id="subscribed">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
        <div class="task_card">
            <div class="card me-2">
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

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>This Month</h4>
                    <div id="task-1">
                        <div class="task_card_area">
                            <div id="this-month" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="this-month">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
                                <div class="card task-box task_box_items" id="this-month">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
        <div class="task_card">
            <div class="card me-2">
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

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>On Process</h4>
                    <div id="task-1">
                        <div class="task_card_area">
                            <div id="on-process" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="on-process">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
                                <div class="card task-box task_box_items" id="on-process">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
        <div class="task_card">
            <div class="card me-2">
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

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Next Month</h4>
                    <div id="task-1">
                        <div class="task_card_area">
                            <div id="next-month" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="next-month">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
                                <div class="card task-box task_box_items" id="next-month">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
        <div class="task_card">
            <div class="card me-2">
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

                    <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Issues & Discuss</h4>
                    <div id="task-1">
                        <div class="task_card_area">
                            <div id="issues-discuss" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="issues-discuss">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
                                <div class="card task-box task_box_items" id="issues-discuss">
                                    <div class="card-body p-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-success" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);" class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">Dhaka</span>
                                                    <span class="badge task-badge  p-1 font-size-11" id="task-status">2pm - 4pm</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14 Oct, 2019</p>
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
</div>


@section('script')
<!-- dragula plugins -->
<script src="{{ URL::asset('/assets/libs/dragula/dragula.min.js') }}"></script>

<!-- jquery-validation -->
<script src="{{ URL::asset('/assets/libs/jquery-validation/jquery-validation.min.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/task-kanban.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/task-form.init.js') }}"></script>
@endsection