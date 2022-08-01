<div class="row">
    <!-- Personalize Table -->
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
                                    <!-- Button  Box -->
                                    <div>
                                        <ul class="nav nav-pills justify-content-end">
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary"
                                                    href="{{ route('personalize') }}" tabindex="-1"
                                                    aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Paid Orders</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary"
                                                    href="{{ route('personalize-customer-draft') }}" tabindex="-1"
                                                    aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Customer Drafts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#"
                                                    tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-plus"></i>
                                                    <span>Add New Order</span>
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
                                        <th class="table-left-redius">Order ID</th>
                                        <th>Sender Name</th>
                                        <th>For</th>
                                        <th>Delivery</th>
                                        <th>Area</th>
                                        <th>Total Bill</th>
                                        <th>Orders Status</th>
                                        <th class="table-right-redius">Order Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> <i
                                                class="bx bx-log-in-circle text-success"> </i>#4562</td>
                                        <td>Rashrukh Rayian</td>
                                        <td>Brother(17)</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>Dhaka</td>
                                        <td>10384 BDT</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Full
                                                paid</span>
                                        </td>
                                        <td class="table-right-redius">5:30pm</td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> <i
                                                class="bx bx-log-in-circle text-success"> </i>#4562</td>
                                        <td>Rashrukh Rayian</td>
                                        <td>Brother(17)</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>Dhaka</td>
                                        <td>10384 BDT</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Full
                                                paid</span>
                                        </td>
                                        <td class="table-right-redius">5:30pm</td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> <i
                                                class="bx bx-log-in-circle text-success"> </i>#4562</td>
                                        <td>Rashrukh Rayian</td>
                                        <td>Brother(17)</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>Dhaka</td>
                                        <td>10384 BDT</td>
                                        <td>
                                            <span class="badge badge-pill badge-soft-success font-size-11">Full
                                                paid</span>
                                        </td>
                                        <td class="table-right-redius">5:30pm</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="text-end">
                    <ul class="pagination justify-content-center pagination-rounded">
                        <li class="page-item disabled">
                            <a href="javascript: void(0);" class="page-link"><i
                                    class="mdi mdi-chevron-left"></i></a>
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
                            <a href="javascript: void(0);" class="page-link"><i
                                    class="mdi mdi-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- Personalize Right Side -->
    <div class="col-4">
        <div class="row">
            <!-- Order Credentials Information Button -->
            <div class="col-12">
                <div class="row btn-cred">
                    <div class="col-3">
                        <a href="{{ route('personalize') }}" class="badge badge-pill pt-3">
                            <i class="bx bx-align-left text-start"></i>
                            <span class="text-end">Details</span>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('personalize-invoice') }}" class="badge badge-pill pt-3">
                            <i class="bx bx-receipt text-start"></i>
                            <span class="text-end">Invoices</span>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('personalize-payment') }}" class="badge badge-pill pt-3">
                            <i class="bx bx-credit-card text-start"></i>
                            <span class="text-end">Payment</span>
                        </a>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('personalize-delivery') }}" class="badge badge-pill pt-3">
                            <i class="bx bx-cycling text-start"></i>
                            <span>Delivery</span>
                        </a>
                    </div>

                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-between mt-4 mb-2 right-side-card-container p-2">
                    <h5 class="mt-2">List of Items & Materials</h5>
                    <i class="bx bx-printer font-size-14 mt-2"></i>
                </div>
            </div>
            <div class="col-12">
                <div class="table-rightside-card mt-4 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <tbody class="p-3">
                                        <tr>
                                            <td class="table-right-border">
                                                <div class="d-flex justify-content-between">
                                                    <div class="avatar-sm me-1 mt-1 float-start float-lg-none">
                                                        <span
                                                            class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
                                                    </div>
                                                    <div class="flex-shrink-0" style="text-align: left;">
                                                        <strong>Versace Dylan Blue Perfume</strong>
                                                        <p class=" mb-0">EDT - 100ml - x1</p>
                                                    </div>
                                                    <!-- <div class="flex-grow-1 overflow-hidden">
                                                    </div> -->
                                                    <div class="font-size-12">
                                                        <i class="bx bx-x"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>59.88</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="table-right-border">
                                                <div class="d-flex justify-content-between">
                                                    <div class="avatar-sm me-1 mt-1 float-start float-lg-none">
                                                        <span
                                                            class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
                                                    </div>
                                                    <div class="flex-shrink-0" style="text-align: left;">
                                                        <strong>Versace Dylan Blue Perfume</strong>
                                                        <p class=" mb-0">EDT - 100ml - x1</p>
                                                    </div>
                                                    <!-- <div class="flex-grow-1 overflow-hidden">
                                                    </div> -->
                                                    <div class="font-size-12">
                                                        <i class="bx bx-x"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>59.88</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="table-right-border">
                                                <div class="d-flex justify-content-between">
                                                    <div class="avatar-sm me-1 mt-1 float-start float-lg-none">
                                                        <span
                                                            class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
                                                    </div>
                                                    <div class="flex-shrink-0" style="text-align: left;">
                                                        <strong>Versace Dylan Blue Perfume</strong>
                                                        <p class=" mb-0">EDT - 100ml - x1</p>
                                                    </div>
                                                    <!-- <div class="flex-grow-1 overflow-hidden">
                                                    </div> -->
                                                    <div class="font-size-12">
                                                        <i class="bx bx-x"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>59.88</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="table-right-border">
                                                <div class="d-flex justify-content-between">
                                                    <div class="avatar-sm me-1 mt-1 float-start float-lg-none">
                                                        <span
                                                            class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
                                                    </div>
                                                    <div class="flex-shrink-0" style="text-align: left;">
                                                        <strong>Versace Dylan Blue Perfume</strong>
                                                        <p class=" mb-0">EDT - 100ml - x1</p>
                                                    </div>
                                                    <!-- <div class="flex-grow-1 overflow-hidden">
                                                    </div> -->
                                                    <div class="font-size-12">
                                                        <i class="bx bx-x"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>59.88</strong></td>
                                        </tr>
                                        <tr>
                                            <td class="table-right-border">
                                                <div class="d-flex justify-content-between">
                                                    <div class="avatar-sm me-1 mt-1 float-start float-lg-none">
                                                        <span
                                                            class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
                                                    </div>
                                                    <div class="flex-shrink-0" style="text-align: left;">
                                                        <strong>Versace Dylan Blue Perfume</strong>
                                                        <p class=" mb-0">EDT - 100ml - x1</p>
                                                    </div>
                                                    <!-- <div class="flex-grow-1 overflow-hidden">
                                                    </div> -->
                                                    <div class="font-size-12">
                                                        <i class="bx bx-x"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> <strong>59.88</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <a class="btn btn-sm p-3 buttom-status-md button-status-success">
                            <i class="bx bxs-user-check"></i>
                            <span class="pt-1">Update Payment</span>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="card card-container">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6>VAT/TAX (5%):</h6>
                                    <span>$13</span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h6><strong>Total Amount:</strong></h6>
                                    <span><strong>$244</strong></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
