@extends('layouts.master') @section('content')
<div class="row">
    <!-- Reviews Table -->
    <div class="col-8">
        <div class="row">
            <div class="col-xl-12">
                <div class="card card-container">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <!-- Table Data Search Box-->
                                    <div class="search-box me-2 mb-2 d-inline-block">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                    <!-- Button Box -->
                                    <div>
                                        <ul class="nav nav-pills justify-content-end">
                                            <li class="nav-item mx-2">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>File Type</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-2">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-danger" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Rejected</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-2">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-plus"></i>
                                                    <span>Add New Post</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane active" id="all-order" role="tabpanel">

                                <div class="table-responsive mt-2 table_area" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <table class="table table-nowrap t-hover mb-0">
                                        <thead class="table-light t-head">
                                            <tr>
                                                <th class="table-left-redius">Review ID</th>
                                                <th>Customer Name</th>
                                                <th>File Type</th>
                                                <th>Rating</th>
                                                <th>City</th>
                                                <th>Total Spent</th>
                                                <th>Status</th>
                                                <th class="table-right-redius">Submitted</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table_body">
                                            <tr>
                                                <td class="table-left-redius" scope="row">1</td>
                                                <td>Rashrukh Rayian</td>
                                                <td>Video</td>
                                                <td>
                                                    <span class="text-muted">
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star"></i>
                                                    </span>
                                                </td>
                                                <td>Sydney</td>
                                                <td>10384 BDT</td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-11">Approved</span>
                                                </td>
                                                <td class="table-right-redius">12-sep-21 5:30pm</td>
                                            </tr>
                                            <tr>
                                                <td class="table-left-redius" scope="row">1</td>
                                                <td>Rashrukh Rayian</td>
                                                <td>Video</td>
                                                <td>
                                                    <span class="text-muted">
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                    </span>
                                                </td>
                                                <td>Sydney</td>
                                                <td>10384 BDT</td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-danger font-size-11">Approved</span>
                                                </td>
                                                <td class="table-right-redius">12-sep-21 5:30pm</td>
                                            </tr>
                                            <tr>
                                                <td class="table-left-redius" scope="row">1</td>
                                                <td>Rashrukh Rayian</td>
                                                <td>Video</td>
                                                <td>
                                                    <span class="text-muted">
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                    </span>
                                                </td>
                                                <td>Sydney</td>
                                                <td>10384 BDT</td>
                                                <td>
                                                    <span class="badge badge-pill badge-soft-success font-size-11">Approved</span>
                                                </td>
                                                <td class="table-right-redius">12-sep-21 5:30pm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- Reviews Right Sidebar -->
    <div class="col-4">
        <div class="row">
            <div class="col-12 reviews-right-sidebar">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <!-- App Search-->
                                    <form class="app-search d-none d-lg-block">
                                        <div class="position-relative"></div>
                                    </form>
                                    <div>
                                        <ul class="nav nav-pills justify-content-end">
                                            <li class="nav-item">
                                                <button type="button" class="btn move-day" data-action="move-prev">
                                                    <i class="bx bxs-left-arrow" data-action="move-prev"></i>
                                                </button>
                                                <button type="button" class="btn move-day" data-action="move-prev">
                                                    <i class="bx bxs-right-arrow" data-action="move-prev"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <h5>Sugary is the best gift curating service out here in Dhaka!</h5>
                                <br />
                                <br />
                                <h5>Super pleased with the execution of ervery order I have trusted them with. I highly recommend them for their superb service that cates to erery demand!</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <a href="#" class="btn btn-sm p-3 buttom-status-md btn_success button-status-success">
                        <div class="d-flex justify-content-between">
                            <i class="bx bxs-user-check"></i>
                            <span class="pt-1">Approve</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-sm p-3 buttom-status-md btn_danger button-status-danger">
                        <div class="d-flex justify-content-between">
                            <i class="bx bxs-user-x"></i>
                            <span class="pt-1">Reject</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-sm p-1 buttom-status-sm">
                        <i class="bx bx-cloud-download"></i> <br />
                        <span>Download</span>
                    </a>

                    <a href="#" class="btn btn-sm p-1 buttom-status-sm">
                        <i class="bx bx-cloud-upload"></i> <br />
                        <span>Replace</span>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="table-rightside-card mt-4 mb-4">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody class="p-3">
                                <tr>
                                    <td class="table-right-border"><strong>Source</strong></td>
                                    <td><strong> #7192</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Customer Name:</strong></td>
                                    <td><strong class="text-primary">Afifa Alif Rubaiya</strong></td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Order Type:</strong></td>
                                    <td>Personalise</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong> Reviews Task:</strong></td>
                                    <td>Super pleased with the execution of ervery order I have trusted them with. I highly recommend them for their superb service that cates to erery demand!</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Themes:</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center themes_items">
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-dark bg-soft"> </span>
                                            </div>
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-warning bg-soft"> </span>
                                            </div>
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-success"> </span>
                                            </div>
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-info bg-soft"> </span>
                                            </div>
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-secondary bg-soft"> </span>
                                            </div>
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft"> </span>
                                            </div>
                                            <div class="avatar-xs me-2">
                                                <span class="avatar-title rounded-circle bg-danger bg-soft"> </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>File Type:</strong></td>
                                    <td>Text/Photo/Multiple Photo/Video</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Submission Time:</strong></td>
                                    <td><strong> 10 sep 2021 5:38pm</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
