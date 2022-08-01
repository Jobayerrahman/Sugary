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
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary {{ request()->is('personalize') ? 'active' : null }}" href="{{ route('personalize') }}" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Paid Orders</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary {{ request()->is('personalize-customer-draft') ? 'active' : null }}" href="{{ route('personalize-customer-draft') }}" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Customer Drafts</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="#" tabindex="-1" aria-disabled="true">
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
                                        <td class="table-left-redius" scope="row"> <i class="bx bx-log-in-circle text-success"> </i>#4562</td>
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
                                        <td class="table-left-redius" scope="row"> <i class="bx bx-log-in-circle text-success"> </i>#4562</td>
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
                                        <td class="table-left-redius" scope="row"> <i class="bx bx-log-in-circle text-success"> </i>#4562</td>
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
        </div>
        <!-- end row -->
    </div>
    <!-- Personalize Right Side -->
    <div class="col-4">
        <div class="row">
            <!-- Order Credentials Information Button -->
            <div class="col-xl-12">
                <div class="">
                    <div class="">
                        <div class="card card-container">
                            <div class="card-body">
                                <div class="btn-cred">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-justified" role="tablist">
                                        <li class="nav-item waves-effect waves-light ms-1">
                                            <a class="nav-link btn-details p-2 d-flex justify-content-center active" data-bs-toggle="tab" href="#details-1" role="tab">
                                                <i class="bx bx-align-left"></i>
                                                <span class="mx-0.5">Details</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light ms-1">
                                            <a class="nav-link btn-invoices p-2 d-flex justify-content-center {{ request()->is('invoices-1') ? 'active' : null }}" data-bs-toggle="tab" href="#invoices-1" role="tab">
                                                <i class="bx bx-receipt"></i>
                                                <span class="mx-0.5">Invoices</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light ms-1">
                                            <a class="nav-link btn-payment p-2 d-flex justify-content-center {{ request()->is('payment-1') ? 'active' : null }}" data-bs-toggle="tab" href="#payment-1" role="tab">
                                                <i class="bx bx-credit-card"></i>
                                                <span class="mx-0.5">Payment</span>
                                            </a>
                                        </li>
                                        <li class="nav-item waves-effect waves-light ms-1">
                                            <a class="nav-link btn-delivery p-2 d-flex justify-content-center {{ request()->is('delivery-1') ? 'active' : null }}" data-bs-toggle="tab" href="#delivery-1" role="tab">
                                                <i class="bx bx-cycling"></i>
                                                <span class="mx-0.5">Delivery</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="details-1" role="tabpanel">
                                <div class="col-12">
                                    <div class="table-rightside-card mt-4 mb-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody class="p-3">
                                                            <tr>
                                                                <td class="table-right-border"><strong>Order Id</strong></td>
                                                                <td><strong> #7192</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Customer Name:</strong></td>
                                                                <td>Afifa Alif Rubaiya</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Order type:</strong></td>
                                                                <td>Personalise</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Phone::</strong></td>
                                                                <td>+8801717265637</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong> Preferable Time:</strong></td>
                                                                <td>2pm-6pm</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>For:</strong></td>
                                                                <td>Brother</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Occasion</strong> </td>
                                                                <td><strong>Birthday</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Occasion Data</strong></td>
                                                                <td><strong>10 sep 2021</strong> </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Budget:</strong></td>
                                                                <td>10,345 BDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Total Bill:</strong></td>
                                                                <td>12,345 BDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Delivary Date:</strong></td>
                                                                <td><strong>10 sep 2021 5:38pm</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Note:</strong> </td>
                                                                <td>I want to be perfect</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row m-3">
                                                    <div class="col-8">
                                                        <a class="btn btn-sm p-1 buttom-personalize-tab-success">
                                                            <!-- <i class="bx bxs-user-check"></i> -->
                                                            <span class="pt-1">Move To Order Board</span>
                                                        </a>
                                                    </div>
                                                    <div class="col-4">
                                                        <a class="btn btn-sm p-1 buttom-personalize-tab-danger">
                                                            <!-- <i class="bx bxs-user-x"></i> -->
                                                            <span class="pt-1">Refund</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="invoices-1" role="tabpanel">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between mt-4 mb-2 right-side-card-container p-2">
                                        <h5 class="mt-2 mx-3 text-black-50">List of Items & Materials</h5>
                                        <i class="bx bxs-printer font-size-22 mt-2 me-2"></i>
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
                                                                            <span class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
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
                                                                            <span class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
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
                                                                            <span class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
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
                                                                            <span class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
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
                                                                            <span class="avatar-title bg-primary bg-soft text-primary font-size-12"></span>
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
                                            <a class="btn btn-sm p-2 buttom-personalize-tab-success">
                                                <!-- <i class="bx bxs-user-check"></i> -->
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
                            <div class="tab-pane" id="delivery-1" role="tabpanel">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between mt-4 mb-2 right-side-card-container p-2">
                                        <h5 class="mt-2 mx-3 text-black-50">Delivery</h5>
                                        <i class="bx bxs-printer font-size-22 mt-2 me-2"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-rightside-card mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody class="p-3">
                                                            <tr>
                                                                <td class="table-right-border"><strong>Area:</strong></td>
                                                                <td>Dhaka</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Receiver Name:</strong></td>
                                                                <td>Tahmid Hasan</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Receiver Mobile:</strong></td>
                                                                <td>+8801717283984</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Receiver Address:</strong></td>
                                                                <td> <strong>39/A Jamilkhan Para, Noakhali,</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Delivery Type:</strong></td>
                                                                <td>Regular</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Delivery Date:</strong></td>
                                                                <td>10 Sep 2021</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Delivery Time:</strong></td>
                                                                <td>Set Delivery Time</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Surprise Gift:</strong></td>
                                                                <td>Yes</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Change Later:</strong></td>
                                                                <td>Yes</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Note:</strong></td>
                                                                <td>Please don’t call him, Just drop in his
                                                                    location.</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="payment-1" role="tabpanel">
                                <div class="col-12">
                                    <div class="d-flex justify-content-between mt-4 mb-2 right-side-card-container p-2">
                                        <h5 class="mt-2 mx-3 text-black-50">Payment</h5>
                                        <i class="bx bxs-printer font-size-22 mt-2 me-2"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-rightside-card mt-2 mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody class="p-3">
                                                            <tr>
                                                                <td class="table-right-border"><strong>Total Payable:</strong></td>
                                                                <td>$700</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Total in BDT:</strong></td>
                                                                <td>53,660 BDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Paid Amount:</strong></td>
                                                                <td>$350</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Due Amount:</strong></td>
                                                                <td> <strong>$350</strong></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="d-flex justify-content-between mt-2 mb-2 right-side-card-container p-2">
                                        <h5 class="mt-2 mx-3 text-black-50">Transections</h5>
                                        <i class="bx bxs-printer font-size-22 mt-2 me-2"></i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-rightside-card mt-2 mb-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody class="p-3">
                                                            <tr>
                                                                <td class="table-right-border"><strong>Amount Type:</strong></td>
                                                                <td>Half Payment</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Paid Amount:</strong></td>
                                                                <td>26,830 BDT</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Received Amount:</strong></td>
                                                                <td>0</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Receive Method:</strong></td>
                                                                <td> <strong>bKash</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="table-right-border"><strong>Date & Time:</strong></td>
                                                                <td> <strong>10 Sep 2021, 8:33pm</strong></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-end">
                                        <a class="btn btn-sm p-2 buttom-personalize-tab-success me-2">
                                            <!-- <i class="bx bxs-user-check"></i> -->
                                            <span class="pt-1">Move To Order Board</span>
                                        </a>
                                        <a class="btn btn-sm p-2 buttom-personalize-tab-danger me-2">
                                            <!-- <i class="bx bxs-user-x"></i> -->
                                            <span class="pt-1">Refund</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>