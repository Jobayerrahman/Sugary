@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-3 column-border">
        <h2 class="text-black-50"><strong>Delivery Types</strong></h2>
        <div>
            <div class="tab-content py-4">
                <div class="tab-pane show active" id="chat">
                    <div>
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="font-size-14 mb-3 text-left">Categories</h5>
                            <a class="btn btn-sm mb-2 text-right source-btn" href="#" tabindex="-1" aria-disabled="true">+ New Category</a>
                        </div>
                        <ul class="list-unstyled chat-list" data-simplebar style="max-height: 410px;">
                            <li class="active mb-2">
                                <a href="javascript: void(0);">
                                    <div class="d-flex justify-content-between">
                                        <div>

                                        </div>
                                        <div class="flex-shrink-0 align-self-center me-3">
                                            <i class="mdi mdi-circle font-size-10"></i>
                                        </div>

                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-truncate font-size-14 mb-1">Dhaka</h5>
                                            <p class="text-truncate mb-0">5days</p>
                                        </div>
                                        <div class="font-size-16 mt-2">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="active mb-2">
                                <a href="javascript: void(0);">
                                    <div class="d-flex justify-content-between">
                                        <div>

                                        </div>
                                        <div class="flex-shrink-0 align-self-center me-3">
                                            <i class="mdi mdi-circle text-primary font-size-10"></i>
                                        </div>

                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-truncate font-size-14 mb-1">Dhaka</h5>
                                            <p class="text-truncate mb-0">5days</p>
                                        </div>
                                        <div class="font-size-16 mt-2">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="active mb-2">
                                <a href="javascript: void(0);">
                                    <div class="d-flex justify-content-between">
                                        <div>

                                        </div>
                                        <div class="flex-shrink-0 align-self-center me-3">
                                            <i class="mdi mdi-circle text-success font-size-10"></i>
                                        </div>

                                        <div class="flex-grow-1 overflow-hidden">
                                            <h5 class="text-truncate font-size-14 mb-1">Dhaka</h5>
                                            <p class="text-truncate mb-0">5days</p>
                                        </div>
                                        <div class="font-size-16 mt-2">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-4 column-border">
        <div>
            <div class="d-flex justify-content-between mb-2">
                <h5 class="font-size-14 mb-3 text-left">Delivery Methods</h5>
                <a class="btn btn-sm mb-2 text-right source-btn" href="#" tabindex="-1" aria-disabled="true">+ New Delivery</a>
            </div>
            <ul class="list-unstyled chat-list" data-simplebar style="border-radius: 10px;">
                <li class="active mb-2">
                    <a href="javascript: void(0);">
                        <div class="d-flex justify-content-between">
                            <div>

                            </div>
                            <div class="flex-shrink-0 me-3">
                                <i class="mdi mdi-circle font-size-10"></i>
                            </div>

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Regular</h5>
                                <p class=" mb-0">This is just as regular Delivery, you can set time & other
                                    options to get what you want</p>
                            </div>
                            <div class="font-size-16">
                                <h6>$2.34</h6>
                            </div>
                        </div>
                    </a>
                </li>

                <li class=" mb-2">
                    <a href="javascript: void(0);">
                        <div class="d-flex justify-content-between">
                            <div>

                            </div>
                            <div class="flex-shrink-0 me-3">
                                <i class="mdi mdi-circle font-size-10"></i>
                            </div>

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Special Delivery</h5>
                                <p class=" mb-0">This is just as regular Delivery, you can set time & other
                                    options to get what you want</p>
                            </div>
                            <div class="font-size-16">
                                <h6>$2.34</h6>
                            </div>
                        </div>
                    </a>
                </li>

                <li class=" mb-2">
                    <a href="javascript: void(0);">
                        <div class="d-flex justify-content-between">
                            <div>

                            </div>
                            <div class="flex-shrink-0 me-3">
                                <i class="mdi mdi-circle font-size-10"></i>
                            </div>

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Regular</h5>
                                <p class=" mb-0">This is just as regular Delivery, you can set time & other
                                    options to get what you want</p>
                            </div>
                            <div class="font-size-16">
                                <h6>$2.34</h6>
                            </div>
                        </div>
                    </a>
                </li>

                <li class=" mb-2">
                    <a href="javascript: void(0);">
                        <div class="d-flex justify-content-between">
                            <div>

                            </div>
                            <div class="flex-shrink-0 me-3">
                                <i class="mdi mdi-circle font-size-10"></i>
                            </div>

                            <div class="flex-grow-1 overflow-hidden">
                                <h5 class="text-truncate font-size-14 mb-1">Regular</h5>
                                <p class=" mb-0">This is just as regular Delivery, you can set time & other
                                    options to get what you want</p>
                            </div>
                            <div class="font-size-16">
                                <h6>$2.34</h6>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-5">
        <div class="card" style="border-radius: 10px;">
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" id="" placeholder="FP9237 Gifting - Femme">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label ">Description</label>
                        <textarea class="form-control" id="" rows="3" placeholder="FP9237 Gifting - Femme"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label for="" class="form-label">Pricing</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="Old Cost">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="Current Cost">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="" placeholder="Sale Price">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mb-1">
                                <label for="" class="form-label">Pricing</label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 border p-2 rounded">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Exact Date Choosing
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 border p-2 rounded">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Calculative Delivery Cost
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 border p-2 rounded">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average Time Range
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3 border p-2 rounded">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Average Date Range
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success w-sm">Save <i class="bx bxs-save"></i></button>
                        <button type="submit" class="btn btn-secondary w-sm">Delete <i class="bx bx-trash"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection