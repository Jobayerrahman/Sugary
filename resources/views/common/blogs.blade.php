@extends('layouts.master')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Blog Grid</h4>
            <div class="blog-nav-btn">
                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item">
                        <a class="btn btn-sm mt-1 active" href="#" tabindex="-1" aria-disabled="true">+ New Blog</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-link disabled" tabindex="-1" aria-disabled="true">View :</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-1 inactive" href="{{ route('blogs-list') }}">
                            <i class="mdi mdi-format-list-bulleted"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active mx-1" href="{{ route('blogs') }}">
                            <i class="mdi mdi-view-grid-outline"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="mb-4">
    <div class="col-12">
        <div class="row">
            <!--Blog 01 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-2.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">Sharing is important!</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blog 02 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">Understanding</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blog 03 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">A Tree A Day</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blog 04 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">Giving is Important!</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blog 05 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">Beautiful Day with Friends</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blog 06 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">Beautiful Day with Friends</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Blog 07 -->
            <div class="col-sm-3">
                <div class="blogs">
                    <div class="mb-2 shadow-none">
                        <div class="position-relative">
                            <img src="assets/images/small/img-7.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="card blog-content p-1">
                        <div class="p-2">
                            <h5><a href="blog-details.html" class="text-dark">Beautiful Day with Friends</a></h5>
                            <p class="text-muted mb-2">10 Apr, 2020</p>
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Project
                                    </a>
                                </li>
                                <li class="list-inline-item me-3">
                                    <a href="javascript: void(0);" class="text-muted">
                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 12 Comments
                                    </a>
                                </li>
                            </ul>
                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>

                            <div class="view-edit">
                                <a href="javascript: void(0);">View & Edit <i class="mdi mdi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr class="mb-4">
    <div class="col-12">
        <div class="text-center">
            <div class="btn-pagenation">
                <ul class="pagination justify-content-center pagination-rounded">
                    <li class="page-item disabled">
                        <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                    </li>
                    <li class="page-item">
                        <a href="javascript: void(0);" class="page-link">1</a>
                    </li>
                    <li class="page-item active">
                        <a href="javascript: void(0);" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript: void(0);" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript: void(0);" class="page-link">...</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript: void(0);" class="page-link">10</a>
                    </li>
                    <li class="page-item">
                        <a href="javascript: void(0);" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<!-- end row -->
@endsection