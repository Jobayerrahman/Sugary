@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body d-flex justify-content-between">
                <div class="d-sm-flex flex-wrap gap-1">
                    <div class="btn-group mb-2" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-light move-day" data-action="move-prev">
                            <i class="calendar-icon ic-arrow-line-left mdi mdi-chevron-left" data-action="move-prev"></i>
                        </button>
                        <div class="dropdown">
                            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-calendar-month"></i>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Action</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-light move-day" data-action="move-next">
                            <i class="calendar-icon ic-arrow-line-right mdi mdi-chevron-right" data-action="move-next"></i>
                        </button>
                    </div>
                    <div class="mt-2">
                        <h4>Thursday, 23 September</h4>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-light move-today" data-action="move-today">Return to Today</button>
                    </div>

                </div>
                <div>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btnradio5">Day</label>

                        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                        <label class="btn btn-outline-secondary" for="btnradio6">Week</label>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-outline-secondary"> <i class="bx bx-reset"></i></label>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary dropdown-toggle btn-md mb-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bx bx-user"></i> Hoverwilders <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-outline-secondary btn-md mb-2"><i class="bx bx-edit"></i>Bulk Edit</button>
                    </div>
                    <div class="btn-group">
                        <label class="btn btn-outline-secondary"> <i class="mdi mdi-dots-vertical m-0 text-muted h5"></i></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="container">
            <h3>Add Expense</h3>
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="d-flex justify-content-between">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="for">For</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="givenby">Given By</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="mt-4">
                                <a type="submit" class="btn btn-dark waves-effect btn-label waves-light"> <i class="bx bx-check-double label-icon "></i>Add</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table project-list-table table-nowrap align-middle table-borderless" >
                    <tbody class="table-light ">
                        <tr>
                            <td>Office Tool</td>
                            <td>For: Office</td>
                            <td>Given By: Sayem</td>
                            <th>860BDT</th>
                        </tr>
                        <tr>
                            <td>Office Tool</td>
                            <td>For: Office</td>
                            <td>Given By: Sayem</td>
                            <th>860BDT</th>
                        </tr>
                        <tr>
                            <td>Office Tool</td>
                            <td>For: Office</td>
                            <td>Given By: Sayem</td>
                            <th>860BDT</th>
                        </tr>
                        <tr>
                            <td>Office Tool</td>
                            <td>For: Office</td>
                            <td>Given By: Sayem</td>
                            <th>860BDT</th>
                        </tr>
                        <tr>
                            <td>Office Tool</td>
                            <td>For: Office</td>
                            <td>Given By: Sayem</td>
                            <th>860BDT</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection