@extends('layouts.master')
@section('content')

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
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="{{ route('personalize') }}" tabindex="-1" aria-disabled="true">
                                                    <i class="bx bx-message-square-dots"></i>
                                                    <span>Paid Orders</span>
                                                </a>
                                            </li>
                                            <li class="nav-item m-1">
                                                <a class="btn btn-sm p-2 buttom-box buttom-box-primary" href="{{ route('personalize-customer-draft') }}" tabindex="-1" aria-disabled="true">
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
                                        <th>Occasion</th>
                                        <th>OccasionDate</th>
                                        <th>Mobile</th>
                                        <th>Pref.Time</th>
                                        <th class="table-right-redius">Budget</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> #7727</td>
                                        <td>Neal Matthews</td>
                                        <td>Brother(17)</td>
                                        <td>Birthday</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>+8801817625637</td>
                                        <td>10pm-5pm</td>
                                        <td class="table-right-redius">10,000 BDT</td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> #7727</td>
                                        <td>Neal Matthews</td>
                                        <td>Brother(17)</td>
                                        <td>Birthday</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>+8801817625637</td>
                                        <td>10pm-5pm</td>
                                        <td class="table-right-redius">10,000 BDT</td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> #7727</td>
                                        <td>Neal Matthews</td>
                                        <td>Brother(17)</td>
                                        <td>Birthday</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>+8801817625637</td>
                                        <td>10pm-5pm</td>
                                        <td class="table-right-redius">10,000 BDT</td>
                                    </tr>
                                    <tr>
                                        <td class="table-left-redius" scope="row"> #7727</td>
                                        <td>Neal Matthews</td>
                                        <td>Brother(17)</td>
                                        <td>Birthday</td>
                                        <td>
                                            7 Oct 2021
                                        </td>
                                        <td>+8801817625637</td>
                                        <td>10pm-5pm</td>
                                        <td class="table-right-redius">10,000 BDT</td>
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
                                    <a class="btn btn-sm p-3 buttom-status-md button-status-success">
                                        <i class="bx bxs-user-check"></i>
                                        <span class="pt-1">Move To Order Board</span>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a class="btn btn-sm p-3 buttom-status-md button-status-danger">
                                        <i class="bx bxs-user-x"></i>
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

@endsection