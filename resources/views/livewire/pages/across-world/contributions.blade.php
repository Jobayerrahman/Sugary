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
                                            <input type="text" class="form-control" placeholder="Search...">
                                            <i class="bx bx-search-alt search-icon"></i>
                                        </div>
                                    </div>
                                    <!-- Button Box -->
                                    <div>
                                        <ul class="nav nav-pills justify-content-end">
                                            <li class="nav-item mx-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-success active"
                                                    href="#contribution-type" tabindex="-1" aria-disabled="true" data-bs-toggle="tab" role="tab">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Contribution Type</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-danger {{ request()->is('#rejected') ? 'active' : null }}"
                                                    href="#rejected" tabindex="-1" aria-disabled="true" data-bs-toggle="tab" role="tab">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Rejected</span>
                                                </a>
                                            </li>
                                            <li class="nav-item mx-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#"
                                                    tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-plus"></i>
                                                    <span>Add New Idea</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contributions Table -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="contribution-type" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-nowrap t-hover mb-0">

                                        <thead class="table-light">
                                            <tr>
                                                <th class="table-left-redius">Customer ID</th>
                                                <th>Customer Name</th>
                                                <th>Type</th>
                                                <th>Rate</th>
                                                <th>City</th>
                                                <th>Mobile</th>
                                                <th>Status</th>
                                                <th class="table-right-redius">Submitted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Select</span>
                                                </td>
                                                <td class="table-right-redius">12-sep-21 5:30pm</td>
                                            </tr>
                                            <tr>
                                                <td class="table-left-redius" scope="row">#7681</td>
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
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Select</span>
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
                                                        <i class="bx bxs-star"></i>
                                                    </span>
                                                </td>
                                                <td>Sydney</td>
                                                <td>10384 BDT</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-success font-size-11">Seleted</span>
                                                </td>
                                                <td class="table-right-redius">12-sep-21 5:30pm</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane" id="rejected" role="tabpanel">
                                <div class="table-responsive">
                                    <table class="table table-nowrap t-hover mb-0">

                                        <thead class="table-light">
                                            <tr>
                                                <th class="table-left-redius">Customer ID</th>
                                                <th>Customer Name</th>
                                                <th>Type</th>
                                                <th>Rate</th>
                                                <th>City</th>
                                                <th>Mobile</th>
                                                <th>Status</th>
                                                <th class="table-right-redius">Submitted</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                    <span
                                                        class="badge badge-pill badge-soft-danger font-size-11">Rejected</span>
                                                </td>
                                                <td class="table-right-redius">12-sep-21 5:30pm</td>
                                            </tr>
                                            <tr>
                                                <td class="table-left-redius" scope="row">#7681</td>
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
                                                    <span
                                                        class="badge badge-pill badge-soft-danger font-size-11">Rejected</span>
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
                                                        <i class="bx bxs-star"></i>
                                                    </span>
                                                </td>
                                                <td>Sydney</td>
                                                <td>10384 BDT</td>
                                                <td>
                                                    <span
                                                        class="badge badge-pill badge-soft-danger font-size-11">Rejected</span>
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
        </div>
        <!-- end row -->
    </div>
    <!-- Reviews Right Side -->
    <div class="col-4">
        <div class="row">
            <div class="col-12">
                <div class="card card-container">
                    <div class="card-body travel-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h5>Travel Box</h5>
                                </div>
                            </div>
                            <div class="col-12">
                                <p>Super pleased with the execution of ervery order I have trusted them with. I highly
                                    recommend them for their superb service that cates to erery demand!</p>
                            </div>
                            <div class="col-12 travelBox-list">
                                <li>-A Tie</li>
                                <li>-A jar of full sweets</li>
                                <li>-Travel Adapter</li>
                                <li>-Customized Mug</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-4">
                        <img src="assets/images/small/img-4.jpg" alt="" class="img-fluid img-box">
                    </div>
                    <div class="col-4">
                        <img src="assets/images/small/img-5.jpg" alt="" class="img-fluid img-box">
                    </div>
                    <div class="col-4">
                        <img src="assets/images/small/img-6.jpg" alt="" class="img-fluid img-box">
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="table-rightside-card mt-4 mb-4">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <tbody class="p-3">
                                <tr>
                                    <td class="table-right-border"> <strong>Rating</strong></td>
                                    <td>
                                        <p class="text-muted">
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-warning"></i>
                                            <i class="bx bxs-star text-black-50"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"> <strong>Customer Name:</strong> </td>
                                    <td>Afifa Alif Rubaiya</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"> <strong>City:</strong></td>
                                    <td>New York</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Country:</strong></td>
                                    <td>United States</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Mobile:</strong></td>
                                    <td>+88016272938012</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"> <strong>Mail:</strong></td>
                                    <td>tahmid.dabir@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="table-right-border"><strong>Submission Time:</strong></td>
                                    <td><strong>10 sep 2021 5:38pm</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">
                    <div class="col-lg-5 p-1">
                        <a href="#" class="btn btn-sm p-2 buttom-status-md button-status-success">
                            <i class="bx bxs-user-check"></i>
                            <span class="pt-1">Select This</span>
                        </a>
                    </div>
                    <div class="col-lg-3 p-1">
                        <a href="#" class="btn btn-sm p-2 buttom-status-md button-status-danger">
                            <i class="bx bxs-user-x"></i>
                            <span class="pt-1">Reject</span>
                        </a>
                    </div>
                    <div class="col-lg-4 p-1">
                        <a href="#" class="btn btn-sm p-2 buttom-status-sm button-status-success">
                            <i class="bx bx-cloud-upload "></i> <br>
                            <span class="mb-2">Inform</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
