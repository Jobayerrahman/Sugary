@extends('layouts.master')
@section('content')

@section('css')
<link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between">
            <div class="new-product mt-3">
                <a href="{{ route('cards')}}">
                    <div class="d-flex justify-content-between">
                        <i class="bx bx-left-arrow-circle font-size-24"></i>
                        <span><strong>New Gifting</strong></span>
                    </div>
                </a>
            </div>
            <div class="btn-save">
                <a href="#">
                    <div class="d-flex justify-content-center p-2">
                        <i class="mdi mdi-plus-box font-size-16 me-2"></i>
                        <span class="mt-1 me-2">Save</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-container mt-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-2 img-div">

                    </div>
                    <div class="col-4">
                        <form class="add-product-form p-2">
                            <div class="form-group mb-3">
                                <label for="">Title</label>
                                <input type="text" class="form-control" id="" placeholder="FP9237 Gifting - Femme">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="FP9237 Gifting - Femme"></textarea>
                            </div>
                            <hr style="width: 320px; height: 1px; background-color: #f0f0f5;">
                            <div class="form-group mb-3">
                                <label for="">Instructions</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder=""></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">In Case of Changes</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder=""></textarea>
                            </div>
                            <hr style="width: 320px; height: 1px; background-color: #f0f0f5;">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-label">Category</label>
                                    <select class="form-control select2">
                                        <option value="her">For Her</option>
                                        <option value="sister">for sister</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-control select2">
                                        <option value="sister">for sister</option>
                                        <option value="her">For Her</option>
                                    </select>
                                </div>
                                <div class="btn-multi-cat mb-3">
                                    <a href="#">
                                        <div class="d-flex justify-content-center p-2">
                                            <i class="bx bx-plus-circle font-size-16 me-2 mt-1"></i>
                                            <span class="mt-1 me-2">Multiple Category</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-label">Inventory Placement</label>
                                    <select class="form-control select2">
                                        <option value="her">Storage - 01</option>
                                        <option value="sister">Storage - 02</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-4">
                        <form action="" class="add-product-form">
                            <div class="form-group">
                                <label class="form-label">Items & Materials</label>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <input type="text" class="form-control me-2" id="" placeholder="FP9237 Gifting - Femme">
                                        <button class="btn btn-sm add-items"><i class="mdi mdi-tag font-size-18"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <input type="text" class="form-control me-2" id="" placeholder="FP9237 Gifting - Femme">
                                        <button class="btn btn-sm add-items"><i class="mdi mdi-tag font-size-18"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <input type="text" class="form-control me-2" id="" placeholder="FP9237 Gifting - Femme">
                                        <button class="btn btn-sm add-items"><i class="mdi mdi-tag font-size-18"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <input type="text" class="form-control me-2" id="" placeholder="FP9237 Gifting - Femme">
                                        <button class="btn btn-sm add-items"><i class="mdi mdi-tag font-size-18"></i></button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <input type="text" class="form-control me-2" id="" placeholder="FP9237 Gifting - Femme">
                                        <button class="btn btn-sm add-items"><i class="mdi mdi-tag font-size-18"></i></button>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex justify-content-between">
                                        <div class="btn-multi-cat mb-3">
                                            <a href="#">
                                                <div class="d-flex justify-content-center p-2">
                                                    <i class="bx bx-plus-circle font-size-16 me-2 mt-1"></i>
                                                    <span class="mt-1 me-2">Add New</span>
                                                </div>
                                            </a>
                                        </div>
                                        <label class="mt-3 font-size-12" for="">Visible Price: 244 USD</label>
                                    </div>
                                </div>
                            </div>
                            <hr style="width: 320px; height: 1px; background-color: #f0f0f5;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between">
                                            <label for="" class="mt-1">Variants</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="" placeholder="Old Cost">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="" placeholder="Current Cost">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="" placeholder="Sale Price">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="mb-3">
                                            <input type="text" class="form-control" id="" placeholder="QTY">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="width: 320px; height: 1px; background-color: #f0f0f5;">
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-label">Color</label>
                                    <select class="form-control select2">
                                        <option value="her">Rose Gold</option>
                                        <option value="sister">Baby Pink</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-control select2">
                                        <option value="sister">Baby Pink</option>
                                        <option value="her">Rose Gold</option>
                                    </select>
                                </div>
                                <div class="btn-multi-cat mb-3">
                                    <a href="#">
                                        <div class="d-flex justify-content-center p-2">
                                            <i class="bx bx-plus-circle font-size-16 me-2 mt-1"></i>
                                            <span class="mt-1 me-2">Multiple Category</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3">
                                    <label class="form-label">Tags</label>
                                    <div class="d-flex justify-content-between btn-container-input mb-3">
                                        <input type="text" class="form-control" name="" placeholder="Pink Love">
                                        <button type="button" class="btn input-container-btn">
                                            <i class="bx bxs-down-arrow-circle font-size-20" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">For Sister</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Theme Based</button>
                                        <button type="button" class="btn btn-light btn-sm waves-effect text-black-50">Branded</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Options</label>
                                <div class="mb-2 border p-2 rounded">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <span class="form-check-label" for="flexRadioDefault1">
                                            Mark as Business Gifting
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-2 border p-2 rounded">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <span class="form-check-label" for="flexRadioDefault1">
                                            Mark as Business Gifting
                                        </span>
                                    </div>
                                </div>
                                <div class="mb-2 border p-2 rounded">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <span class="form-check-label" for="flexRadioDefault1">
                                            Caution of Availablility
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-2">
                        <div class="upload__box">
                            <div class="upload__btn-box">
                                <label class="upload__btn">
                                    <div class="img-file-container p-2">
                                        <div class="mt-3">
                                            <div class="" for="formFile">
                                                <i class="mdi mdi-file-image"></i>
                                                <br>
                                                <span>Upload
                                                    Image/Video</span>
                                                <input type="file" multiple="" data-max_length="20" class="upload__inputfile" hidden>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="upload__img-wrap"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
<!-- form advanced init -->
<script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

<script src="{{ URL::asset('/assets/js/pages/upload-image.init.js') }}"></script>
@endsection