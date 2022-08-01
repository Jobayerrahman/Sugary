@section('css')
    <link href="{{ URL::asset('/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <!-- dragula css -->
    <link href="{{ URL::asset('/assets/libs/dragula/dragula.min.css') }}" rel="stylesheet" type="text/css" />
@endsection


<div class="row">
    <div class="col-12">

        <div class="row">
            <div class="col-lg-3">
                <div class="task_daily_card">
                    <div class="day-task">
                        <div class="d-flex justify-content-center">
                            <hr class="me-2">
                            <label for="" class="me-2 mt-2">Today</label>
                            <hr class="me-2">
                        </div>
                        <div id="task-1">
                            <div id="today-task" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Tahnia Safa</a></h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Regular Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        2:30PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">P</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Collection</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card -->


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Rajia Islam</a></h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Regular Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        4:00PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">R</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Crafting</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card -->

                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Tasaddek Mushfiq</a>
                                                    </h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Special Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        8:30PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">L</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Ready</span>
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
                    <div class="day-task">
                        <div class="d-flex justify-content-center">
                            <hr class="me-2">
                            <label for="" class="me-2 mt-2">Mon, 21 Dec</label>
                            <hr class="me-2">
                        </div>
                        <div id="task-1">
                            <div id="day01-task" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Rashik Rahman</a></h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Regular Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        4:00PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">R</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Crafting</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- end card -->


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Rubina Zaman</a></h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Special Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        8:30PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">L</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Ready</span>
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
                    <div class="day-task">
                        <div class="d-flex justify-content-center">
                            <hr class="me-2">
                            <label for="" class="me-2 mt-2">Tue, 22 Dec</label>
                            <hr class="me-2">
                        </div>
                        <div id="task-1">
                            <div id="day02-task" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Tanvir Alam</a></h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Special Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        8:30PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">R</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Ready</span>
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
                    <div class="day-task">
                        <div class="d-flex justify-content-center">
                            <hr class="me-2">
                            <label for="" class="me-2 mt-2">Wed, 23 Dec</label>
                            <hr class="me-2">
                        </div>
                        <div id="task-1">
                            <div id="day03-task" class="pb-1 task-list">


                                <!-- Card start -->
                                <div class="card task-box task_box_items" id="uptask-1">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-7">
                                                <div>
                                                    <span class="btn btn-sm btn-primary" style="width: 50px;"></span>
                                                    <span class="btn btn-sm btn-info" style="width: 50px;"></span>
                                                    <h5 class="font-size-15"><a href="javascript: void(0);"
                                                            class="text-dark" id="task-name">Samiha Sultana</a>
                                                    </h5>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Dhaka</span>
                                                    <span class="badge badge-soft-secondary font-size-11"
                                                        id="task-status">Special Delivery</span>
                                                    <br>
                                                    <p class="badge badge-soft-warning text-soft-warning mt-2 p-2">
                                                        4:00PM</p>
                                                </div>
                                            </div>
                                            <div class="col-5">
                                                <div class="row">
                                                    <div class="col-12 mt-4">
                                                        <div class="text-end mt-3">
                                                            <span
                                                                class="badge badge-soft-secondary font-size-11 rounded-circle p-1 mb-2"
                                                                id="task-status">R</span> <br>
                                                            <span class="badge badge-soft-secondary font-size-11 p-2"
                                                                id="task-status">Ready</span>
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
            </div> <!-- end col-->

            <div class="col-lg-9">
                <div id="external-events"></div>
                <div class="row">
                    <div class="col-4">
                        <div class="card mb-1">
                            <div class="car-body p-1" style="border-radius: 2px; background-color: #eaf5ea;">
                                <div class=" d-flex justify-content-between me-1">
                                    <h6 class="text-left text-success font-size-12 me-1">27</h6>
                                    <h6 class="text-end text-success font-size-12 me-1">Delivered <i
                                            class="bx bxs-circle text-success font-size-11"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-1">
                            <div class="car-body p-1" style="border-radius: 2px; background-color: #eaeff5;">
                                <div class=" d-flex justify-content-between ml-1">
                                    <h6 class="text-left text-primary font-size-12 me-1">15</h6>
                                    <h6 class="text-end text-primary font-size-12 me-1">International <i
                                            class="bx bxs-circle text-primary font-size-11"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-1">
                            <div class="car-body p-1" style="border-radius: 2px; background-color: #f5eaec;">
                                <div class=" d-flex justify-content-between ml-1">
                                    <h6 class="text-left text-danger font-size-12 me-1">05</h6>
                                    <h6 class="text-end text-danger font-size-12 me-1">Cancelled <i
                                            class="bx bxs-circle text-danger font-size-11"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-1">
                            <div class="car-body p-1" style="border-radius: 2px; background-color: #f5eaf3;">
                                <div class=" d-flex justify-content-between ml-1">
                                    <h6 class="text-left text-primary font-size-12 me-1">04</h6>
                                    <h6 class="text-end text-primary font-size-12 me-1">Surprises <i
                                            class="bx bxs-circle text-primary font-size-11"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-1">
                            <div class="car-body p-1" style="border-radius: 2px; background-color: #edeaf5;">
                                <div class=" d-flex justify-content-between ml-1">
                                    <h6 class="text-left text-info font-size-12 me-1">04</h6>
                                    <h6 class="text-end text-info font-size-12 me-1">Concierge <i
                                            class="bx bxs-circle text-info font-size-11"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card mb-1">
                            <div class="car-body p-1" style="border-radius: 2px; background-color: #f5f2ea;">
                                <div class=" d-flex justify-content-between ml-1">
                                    <h6 class="text-left text-warning font-size-12 me-1">22</h6>
                                    <h6 class="text-end text-warning font-size-12 me-1">Pending <i
                                            class="bx bxs-circle text-warning font-size-11"></i></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>

        <div style='clear:both'></div>


        <!-- Add New Event MODAL -->
        <div class="modal fade" id="event-modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header py-3 px-4 border-bottom-0">
                        <h5 class="modal-title" id="modal-title">Event</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-hidden="true"></button>

                    </div>
                    <div class="modal-body p-4">
                        <form class="needs-validation" name="event-form" id="form-event" novalidate>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Event Name</label>
                                        <input class="form-control" placeholder="Insert Event Name" type="text"
                                            name="title" id="event-title" required value="" />
                                        <div class="invalid-feedback">Please provide a valid event name</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Category</label>
                                        <select class="form-control form-select" name="category" id="event-category">
                                            <option selected> --Select-- </option>
                                            <option value="bg-danger">Danger</option>
                                            <option value="bg-success">Success</option>
                                            <option value="bg-primary">Primary</option>
                                            <option value="bg-info">Info</option>
                                            <option value="bg-dark">Dark</option>
                                            <option value="bg-warning">Warning</option>
                                        </select>
                                        <div class="invalid-feedback">Please select a valid event category</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-6">
                                    <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="btn btn-light me-1"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> <!-- end modal-content-->
            </div> <!-- end modal dialog-->
        </div>
        <!-- end modal-->

    </div>
</div>


@section('script')
    <!-- dragula plugins -->
    <script src="{{ URL::asset('/assets/libs/dragula/dragula.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/task-kanban.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/task-form.init.js') }}"></script>
    <!-- plugin js -->
    <script src="{{ URL::asset('assets/js/main.js') }}"></script>

    <script src="{{ URL::asset('assets/js/pages/calendars-full.init.js') }}"></script>
@endsection
