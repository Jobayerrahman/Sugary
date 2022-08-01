@extends('layouts.master')
@section('content')


<div class="row">
    <!-- Source Table -->
    <div class="col-8">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <!-- Table Data Search Box-->
                                    <div class="search-box me-2 d-inline-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                    <!-- Button Box -->
                                    <div>
                                        <ul class="nav nav-pills justify-content-end">
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Region</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Speciality</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Products</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Area</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx bx-plus"></i>
                                                    <span>Add Store</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-nowrap t-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="table-left-redius">Rating</th>
                                        <th>Business Name</th>
                                        <th>Type</th>
                                        <th>Speciality</th>
                                        <th>Mobile</th>
                                        <th>Area</th>
                                        <th>Price Margin</th>
                                        <th>Stock Capacity</th>
                                        <th class="table-right-redius">Links</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-left-redius">
                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                            </p>
                                        </td>
                                        <td>All Leather Goods</td>
                                        <td>Onine</td>
                                        <td>perfume</td>
                                        <td>+8801817236125</td>
                                        <td>Mohammadpur</td>
                                        <td>Expensive</td>
                                        <td>High</td>
                                        <td class="table-right-redius"><a href="#">Facebook</a></td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius">
                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star "></i>
                                                <i class="bx bxs-star "></i>
                                                <i class="bx bxs-star "></i>
                                                <i class="bx bxs-star "></i>
                                            </p>
                                        </td>
                                        <td>All Leather Goods</td>
                                        <td>Onine</td>
                                        <td>perfume</td>
                                        <td>+8801817236125</td>
                                        <td>Mohammadpur</td>
                                        <td>Expensive</td>
                                        <td>High</td>
                                        <td class="table-right-redius"><a href="#">Facebook</a></td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius">
                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star "></i>
                                            </p>
                                        </td>
                                        <td>All Leather Goods</td>
                                        <td>Onine</td>
                                        <td>perfume</td>
                                        <td>+8801817236125</td>
                                        <td>Mohammadpur</td>
                                        <td>Expensive</td>
                                        <td>High</td>
                                        <td class="table-right-redius"><a href="#">Facebook</a></td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius">
                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star "></i>
                                                <i class="bx bxs-star "></i>
                                            </p>
                                        </td>
                                        <td>All Leather Goods</td>
                                        <td>Onine</td>
                                        <td>perfume</td>
                                        <td>+8801817236125</td>
                                        <td>Mohammadpur</td>
                                        <td>Expensive</td>
                                        <td>High</td>
                                        <td class="table-right-redius"><a href="#">Facebook</a></td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius">
                                            <p class="text-muted">
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                                <i class="bx bxs-star text-warning"></i>
                                            </p>
                                        </td>
                                        <td>All Leather Goods</td>
                                        <td>Onine</td>
                                        <td>perfume</td>
                                        <td>+8801817236125</td>
                                        <td>Mohammadpur</td>
                                        <td>Expensive</td>
                                        <td>High</td>
                                        <td class="table-right-redius"><a href="#">Facebook</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- Source Right-Side -->
    <div class="col-4">
        <div class="row">
            <div class="col-12">
                <div class="table-rightside-card mb-4">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody class="p-3">
                                <tr>
                                    <td class="table-right-border"><strong>Rating</strong></td>
                                    <td>
                                        <p class="text-muted">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Business Name:</strong> </td>
                                    <td>All Leather Goods</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong> Type:</strong></td>
                                    <td>Onine</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Speciality:</strong></td>
                                    <td>perfume</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Products:</strong></td>
                                    <td>
                                        <div class="d-flex flex-wrap gap-2">
                                            <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Perfumes</button>
                                            <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Scented Candies</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Mobile:</strong></td>
                                    <td>+8801817236125</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong> Other Mobile:</strong></td>
                                    <th>+8801817236125, +8801817236125</th>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Area:</strong></td>
                                    <td><strong>Mohammadpur</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>City:</strong></td>
                                    <td><strong> Dhaka</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Region:</strong></td>
                                    <td><strong>Banglades</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Address:</strong></td>
                                    <td><strong>182/A Fatulla Road, Mohammadpur, Dhaka-1204</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Price Margin:</strong> </td>
                                    <td><strong> Expensive</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Stock Capacity:</strong> </td>
                                    <td><strong> High</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong> Link:</strong></td>
                                    <td><a href="#">Facebook</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-end">
                    <a class="btn btn-sm p-2 source-btn" style="margin-right: 4px;">
                        <i class="bx bxs-skip-next-circle"></i>
                        <span>Edit</span>
                    </a>
                    <a class="btn btn-sm p-2 source-btn">
                        <i class="bx bxs-skip-next-circle"></i>
                        <span>Delete</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection