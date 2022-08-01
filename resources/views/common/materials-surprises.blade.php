@extends('layouts.master')
@section('content')

@section('css')
    <!-- ION Slider -->
    <link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <div class="text-center bg-white rounded p-2">
                    <a href="#" class="text-black-50"><i class="bx bxs-comment-add"></i> Add New Item</a>
                </div>
            </div>
            <div class="col-7">
                <h4 class="text-dark mt-3">Products</h4>
            </div>
            <div class="col-2">
                <div class="d-flex justify-content-between">
                    <h6 class="text-black-50 mt-3">1234 items</h6>
                    <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <div>
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative bg-white">
                            <input type="text" class="form-control bg-white" placeholder="@lang('translation.Search')">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body rounded">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <h4 class="card-title">For</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Father</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Mother</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Brother</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Sister</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Him</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Her</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Newborn</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Collegaue</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">kids</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Teacher</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Reasons & Seasons</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Birthday</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Casual</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Anniversary</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Festival</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Bridal Shower</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Homecaming</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">New Year</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Categories</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">For Dad</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">For mom</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">For son</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Luxury Gifting</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Couple</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="mt-4 pt-3">
                                        <h5 class="font-size-14 mb-3">Price Range</h5>
                                        <input type="text" id="pricerange">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Color</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-primary btn-sm waves-effect text-light">Blue</button>
                                        <button type="button" class="btn btn-warning btn-sm waves-effect text-light">Yellow</button>
                                        <button type="button" class="btn btn-danger btn-sm waves-effect text-light">Red</button>
                                        <button type="button" class="btn btn-info btn-sm waves-effect text-light">Sky Blue</button>
                                        <button type="button" class="btn btn-dark btn-sm waves-effect text-light">Black</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div>
                                        <div class="d-flex flex-wrap gap-3">
                                            <div>
                                                <h4 class="card-title">Customizable?</h4>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio" id="notCustomize" autocomplete="off" checked>
                                                <label class="btn btn-sm btn-outline-dark" for="notCustomize">Not Customizable</label>

                                                <input type="radio" class="btn-check" name="btnradio" id="customize" autocomplete="off">
                                                <label class="btn btn-sm btn-outline-dark" for="customize">Customizable</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <h4 class="card-title">Tags</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Birthday</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Casual</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Anniversary</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Festival</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Bridal Shower</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Homecaming</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">New Year</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="blogs">
                            <div class="position-relative">
                                <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <!-- Card start -->
                        <div class="card blog-content p-1 mt-2">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-8">
                                        <div>
                                            <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark" id="task-name">Customised Tumbler</a></h5>
                                            <h6 class="font-size-12 text-black-50">Premium Leather Wallet<h6>
                                                    <br>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Her</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Newborn</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Collegaue</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">kids</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Teacher</button>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-muted">
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                </p>
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
                    <div class="col-4">
                        <div class="blogs">
                            <div class="position-relative">
                                <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <!-- Card start -->
                        <div class="card blog-content p-1 mt-2">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-8">
                                        <div>
                                            <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark" id="task-name">Drag 3 Vape Set</a></h5>
                                            <h6 class="font-size-12 text-black-50">Premium Leather Wallet<h6>
                                                    <br>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Her</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Newborn</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Collegaue</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">kids</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Teacher</button>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-muted">
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                </p>
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
                    <div class="col-4">
                        <div class="blogs">
                            <div class="position-relative">
                                <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <!-- Card start -->
                        <div class="card blog-content p-1 mt-2">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-8">
                                        <div>
                                            <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark" id="task-name">Leather Chain Wallet</a></h5>
                                            <h6 class="font-size-12 text-black-50">Premium Leather Wallet<h6>
                                                    <br>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Her</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Newborn</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Collegaue</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">kids</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Teacher</button>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-muted">
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                </p>
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
                    <div class="col-4">
                        <div class="blogs">
                            <div class="position-relative">
                                <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                        <!-- Card start -->
                        <div class="card blog-content p-1 mt-2">
                            <div class="p-2">
                                <div class="row">
                                    <div class="col-8">
                                        <div>
                                            <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark" id="task-name">Wild Horses Book Set</a></h5>
                                            <h6 class="font-size-12 text-black-50">Premium Leather Wallet<h6>
                                                    <br>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Her</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Newborn</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Collegaue</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">kids</button>
                                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Teacher</button>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <p class="text-muted">
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                    <i class="bx bxs-star text-warning"></i>
                                                </p>
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

@endsection

@section('script')
    <!-- Ion Range Slider-->
    <script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
@endsection