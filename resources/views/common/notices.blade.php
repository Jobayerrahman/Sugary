@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-6">
        <h3>Notices</h3>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="formmessage">Home Notice:</label>
                        <textarea id="formmessage" class="form-control" rows="4" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a type="submit" class="btn btn-dark waves-effect btn-label waves-light"> <i class="bx bx-check-double label-icon "></i>Save</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="formmessage">Notice 2:</label>
                        <textarea id="formmessage" class="form-control" rows="4" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a type="submit" class="btn btn-dark waves-effect btn-label waves-light"> <i class="bx bx-check-double label-icon "></i>Save</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label for="formmessage">Notice 3:</label>
                        <textarea id="formmessage" class="form-control" rows="4" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div class="d-flex justify-content-end">
                        <a type="submit" class="btn btn-dark waves-effect btn-label waves-light"> <i class="bx bx-loader label-icon "></i>Save</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-6">
        <h3>FAQ Questions</h3>
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="row">
                        <div class="col-10">
                            <div class="mb-3">
                                <label for="formmessage">Question</label>
                                <textarea id="formmessage" class="form-control" rows="2" placeholder="Enter Your Message"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formmessage">Answer</label>
                                <textarea id="formmessage" class="form-control" rows="2" placeholder="Enter Your Message"></textarea>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="d-flex justify-content-end">
                                <a type="submit" class="btn btn-dark waves-effect btn-label waves-light"> <i class="bx bx-check-double label-icon "></i>Save</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between dropdown-toggle bg-white" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <h6 class="text-black-50">
                            Question 2
                        </h6>
                        <i class="mdi mdi-chevron-down" ></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between dropdown-toggle bg-white" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <h6 class="text-black-50">
                            Question 3
                        </h6>
                        <i class="mdi mdi-chevron-down" ></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between dropdown-toggle bg-white" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <h6 class="text-black-50">
                            Question 4
                        </h6>
                        <i class="mdi mdi-chevron-down" ></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between dropdown-toggle bg-white" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <h6 class="text-black-50">
                            Question 5
                        </h6>
                        <i class="mdi mdi-chevron-down" ></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between dropdown-toggle bg-white" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <h6 class="text-black-50">
                            Question 6
                        </h6>
                        <i class="mdi mdi-chevron-down" ></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between dropdown-toggle bg-white" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <h6 class="text-black-50">
                            Question 7
                        </h6>
                        <i class="mdi mdi-chevron-down" ></i>
                    </div>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                        <li><a class="dropdown-item" href="#">Menu item</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-md btn-dark text-light font-size-16"><i class="bx bx-check-square"></i></a>
    </div>
</div>
@endsection