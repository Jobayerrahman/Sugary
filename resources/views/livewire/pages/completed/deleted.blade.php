@section('css')
    <!-- dragula css -->
    <link href="{{ URL::asset('/assets/libs/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

<div class="row">
    <div class="col-8">
        <div class="task_area">
            <div class="d-flex task_max_content">
                <div class="task_card">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div> <!-- end dropdown -->

                            <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>New</h4>
                            <div id="task-1">
                            <div class="task_card_area">
                                <div id="deleted-new" class="pb-1 task-list">


                                    <!-- Card start -->
                                    <div class="card task-box task_box_items" id="uptask-1">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div>
                                                        <span class="btn btn-sm btn-primary"
                                                            style="width: 50px;"></span>
                                                        <span class="btn btn-sm btn-success"
                                                            style="width: 50px;"></span>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);"
                                                                class="text-dark" id="task-name">Tahnia Safa</a>
                                                        </h5>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">Dhaka</span>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">2pm - 4pm</span>
                                                        <br>
                                                        <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14
                                                            Oct, 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="float-end">
                                                                <div class="avatar-group float-start task-assigne">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-4">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt="" class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-5">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt="" class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block">
                                                                            <div class="avatar-xs">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-info text-white font-size-16">
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
                                                                <h5 class="font-size-15 mb-1" id="task-budget">$ 145
                                                                </h5>
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
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div>
                                                        <span class="btn btn-sm btn-primary"
                                                            style="width: 50px;"></span>
                                                        <span class="btn btn-sm btn-success"
                                                            style="width: 50px;"></span>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);"
                                                                class="text-dark" id="task-name">Tahnia Safa</a>
                                                        </h5>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">Dhaka</span>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">2pm - 4pm</span>
                                                        <br>
                                                        <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14
                                                            Oct, 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="float-end">
                                                                <div class="avatar-group float-start task-assigne">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-4">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt="" class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-5">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt="" class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block">
                                                                            <div class="avatar-xs">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-info text-white font-size-16">
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
                                                                <h5 class="font-size-15 mb-1" id="task-budget">$ 145
                                                                </h5>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div> <!-- end dropdown -->

                            <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Inform Call</h4>
                            <div id="task-1">
                            <div class="task_card_area">
                                <div id="deleted-inform-call" class="pb-1 task-list">


                                    <!-- Card start -->
                                    <div class="card task-box task_box_items" id="uptask-1">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div>
                                                        <span class="btn btn-sm btn-primary"
                                                            style="width: 50px;"></span>
                                                        <span class="btn btn-sm btn-success"
                                                            style="width: 50px;"></span>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);"
                                                                class="text-dark" id="task-name">Tahnia Safa</a>
                                                        </h5>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">Dhaka</span>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">2pm - 4pm</span>
                                                        <br>
                                                        <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">14
                                                            Oct, 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="float-end">
                                                                <div class="avatar-group float-start task-assigne">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-4">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-5">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block">
                                                                            <div class="avatar-xs">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-info text-white font-size-16">
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
                                                                <h5 class="font-size-15 mb-1" id="task-budget">$ 145
                                                                </h5>
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
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div>
                                                        <span class="btn btn-sm btn-primary"
                                                            style="width: 50px;"></span>
                                                        <span class="btn btn-sm btn-success"
                                                            style="width: 50px;"></span>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);"
                                                                class="text-dark" id="task-name">Tahnia Safa</a>
                                                        </h5>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">Dhaka</span>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">2pm - 4pm</span>
                                                        <br>
                                                        <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">
                                                            14 Oct, 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="float-end">
                                                                <div class="avatar-group float-start task-assigne">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-4">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-5">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block">
                                                                            <div class="avatar-xs">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-info text-white font-size-16">
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
                                                                <h5 class="font-size-15 mb-1" id="task-budget">$ 145
                                                                </h5>
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
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Edit</a>
                                    <a class="dropdown-item" href="#">Delete</a>
                                </div>
                            </div> <!-- end dropdown -->

                            <h4 class="card-title mb-4"><i class="bx bx-list-plus"></i>Call Priorities</h4>
                            <div id="task-1">
                            <div class="task_card_area">
                                <div id="deleted-call-priorities" class="pb-1 task-list">


                                    <!-- Card start -->
                                    <div class="card task-box task_box_items" id="uptask-1">
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div>
                                                        <span class="btn btn-sm btn-primary"
                                                            style="width: 50px;"></span>
                                                        <span class="btn btn-sm btn-success"
                                                            style="width: 50px;"></span>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);"
                                                                class="text-dark" id="task-name">Tahnia Safa</a>
                                                        </h5>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">Dhaka</span>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">2pm - 4pm</span>
                                                        <br>
                                                        <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">
                                                            14 Oct, 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="float-end">
                                                                <div class="avatar-group float-start task-assigne">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-4">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-5">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block">
                                                                            <div class="avatar-xs">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-info text-white font-size-16">
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
                                                                <h5 class="font-size-15 mb-1" id="task-budget">$ 145
                                                                </h5>
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
                                        <div class="card-body p-3">
                                            <div class="row">
                                                <div class="col-7">
                                                    <div>
                                                        <span class="btn btn-sm btn-primary"
                                                            style="width: 50px;"></span>
                                                        <span class="btn btn-sm btn-success"
                                                            style="width: 50px;"></span>
                                                        <h5 class="font-size-15"><a href="javascript: void(0);"
                                                                class="text-dark" id="task-name">Tahnia Safa</a>
                                                        </h5>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">Dhaka</span>
                                                        <span class="badge task-badge p-1 font-size-11"
                                                            id="task-status">2pm - 4pm</span>
                                                        <br>
                                                        <p class="badge badge-soft-warning text-soft-warning mt-2 mb-0 p-2">
                                                            14 Oct, 2019</p>
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="float-end">
                                                                <div class="avatar-group float-start task-assigne">
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-4">
                                                                            <img src="assets/images/users/avatar-4.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block" value="member-5">
                                                                            <img src="assets/images/users/avatar-5.jpg"
                                                                                alt=""
                                                                                class="rounded-circle avatar-xs">
                                                                        </a>
                                                                    </div>
                                                                    <div class="avatar-group-item">
                                                                        <a href="javascript: void(0);"
                                                                            class="d-inline-block">
                                                                            <div class="avatar-xs">
                                                                                <span
                                                                                    class="avatar-title rounded-circle bg-info text-white font-size-16">
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
                                                                <h5 class="font-size-15 mb-1" id="task-budget">$ 145
                                                                </h5>
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
    </div>
    <div class="col-4">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="d-flex justify-content-center p-1">
                        <div id="carouselMonthCaption" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="false">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#carouselMonthCaption" type="button" class="btn move-day"
                                    data-bs-slide="prev">
                                    <i class="calendar-icon ic-arrow-line-left mdi mdi-chevron-left"></i></a>
                                </a>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active mt-2">
                                        <span class="render-range fw-bold">January</span>
                                    </div>
                                    <div class="carousel-item mt-2">
                                        <span class="render-range fw-bold ">February</span>
                                    </div>
                                    <div class="carousel-item mt-2">
                                        <span class="render-range fw-bold">March</span>
                                    </div>
                                </div>
                                <a href="#carouselMonthCaption" type="button" class="btn move-day"
                                    data-bs-slide="next">
                                    <i class="calendar-icon ic-arrow-line-right mdi mdi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="d-flex justify-content-center p-1">
                        <div id="carouselYearCaption" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="false">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="#carouselYearCaption" type="button" class="btn move-day"
                                    data-bs-slide="prev">
                                    <i class="calendar-icon ic-arrow-line-left mdi mdi-chevron-left"></i></a>
                                </a>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active mt-2">
                                        <span class="render-range fw-bold">2020</span>
                                    </div>
                                    <div class="carousel-item mt-2">
                                        <span class="render-range fw-bold ">2021</span>
                                    </div>
                                    <div class="carousel-item mt-2">
                                        <span class="render-range fw-bold">2022</span>
                                    </div>
                                </div>
                                <a href="#carouselYearCaption" type="button" class="btn move-day"
                                    data-bs-slide="next">
                                    <i class="calendar-icon ic-arrow-line-right mdi mdi-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="text-center text">Overview</h6>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h6 class="text-center text-muted font-size-14 mt-2"> <i class="bx bxs-circle"></i></h6>
                        </div>
                        <div class="col-12">
                            <h1 class="text-center text-muted mt-4">26</h1>
                        </div>
                        <div class="col-12">
                            <h6 class="text-center text-muted font-size-12 mt-4">Deleted</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="text-center text">Detail Stats</h6>
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="car-body p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-left text-primary">04</h6>
                                            <h6 class="text-end text-primary">Personalize <i
                                                    class="bx bxs-circle"></i></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="car-body p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-left text-info">04</h6>
                                            <h6 class="text-end text-info">Delivery <i class="bx bxs-circle"></i>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="car-body p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-left text-soft-success">04</h6>
                                            <h6 class="text-end text-soft-success">Business <i
                                                    class="bx bxs-circle"></i></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="car-body p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-left text-warning">04</h6>
                                            <h6 class="text-end text-warning">Collabs <i class="bx bxs-circle"></i>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="car-body p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-left text-danger">04</h6>
                                            <h6 class="text-end text-danger">Weddings <i class="bx bxs-circle"></i>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="car-body p-3">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-between">
                                            <h6 class="text-left text-info">04</h6>
                                            <h6 class="text-end text-info">Surprises <i class="bx bxs-circle"></i>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h6 class="text-center text">Geographical Stats</h6>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <tbody>
                                    <tr>
                                        <td style="width: 30%">
                                            <p class="mb-0">Dhaka</p>
                                        </td>
                                        <td style="width: 25%">
                                            <h5 class="mb-0">1,456</h5>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-primary rounded" role="progressbar"
                                                    style="width: 94%" aria-valuenow="94" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Dhaka</p>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">1,123</h5>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-success rounded" role="progressbar"
                                                    style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="mb-0">Dhaka</p>
                                        </td>
                                        <td>
                                            <h5 class="mb-0">1,026</h5>
                                        </td>
                                        <td>
                                            <div class="progress bg-transparent progress-sm">
                                                <div class="progress-bar bg-warning rounded" role="progressbar"
                                                    style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
