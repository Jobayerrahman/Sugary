@section('css')
<!-- ION Slider -->
<link href="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <a href="{{ route('cards.create') }}" class="text-black-50">
                    <div class="text-center bg-white rounded p-2">
                        <i class="bx bxs-comment-add"></i> Add New Item
                    </div>
                </a>
            </div>
            <div class="col-7">
                <h4 class="text-dark mt-3">Cards</h4>
            </div>
            <div class="col-2">
                <div class="d-flex justify-content-between">
                    <h6 class="mt-2">{{ $cards->count() }} items</h6>
                    <ul class="nav nav-pills product-view-nav justify-content-end mt-3 mt-sm-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="bx bx-grid-alt"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="bx bx-list-ul"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-3">
                <div>
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative bg-white">
                            <input type="text" class="form-control bg-white" placeholder="@lang('translation.Search')">
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-body rounded">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-4">
                                    <h4 class="card-title">For</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Father</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Mother</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Brother</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Sister</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Him</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Her</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Newborn</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Collegaue</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">kids</button>
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">Teacher</button>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="card-title">Reasons & Seasons</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($reasonSeasons as $item)
                                            <button type="button" class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="card-title">Categories</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($categories as $item)
                                            <button type="button" class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="mt-4 pt-3">
                                        <h5 class="font-size-14 mb-3">Price Range</h5>
                                        <input type="text" id="pricerange">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="card-title">Color</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($colors as $item)
                                            <button type="button" 
                                                class="btn btn-sm waves-effect text-light" 
                                                style="background-color: {{ $item->colorpicker }}; 
                                                border-color: {{ $item->colorpicker }}">
                                                {{ $item->name }}
                                            </button>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div>
                                        <div class="d-flex flex-wrap gap-3">
                                            <div>
                                                <h4 class="card-title">Customizable?</h4>
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                <input type="radio" class="btn-check" name="btnradio" id="notCustomize" autocomplete="off" checked>
                                                <label class="btn btn-sm btn-outline-dark" for="notCustomize">Not
                                                    Customizable</label>

                                                <input type="radio" class="btn-check" name="btnradio" id="customize" autocomplete="off">
                                                <label class="btn btn-sm btn-outline-dark" for="customize">Customizable</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <h4 class="card-title">Tags</h4>
                                    <div class="d-flex flex-wrap gap-2">
                                        @foreach ($tags as $item)
                                        <button type="button" class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    @foreach ($cards as $card)
                    <div class="col-4">
                        <div class="material-item mb-4">
                            @if ($card->images->first())
                            <div class="material-img-container">
                                <div class="position-relative">
                                    <div class="avatar-xs product-ribbon">
                                        <button type="button" onclick="confirmDelete('deleteCard', {{$card->id}})" class="avatar-title rounded-circle mt-1 bg-danger"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="avatar-title rounded-circle mt-1 bg-warning"><i class="fas fa-edit"></i></button>
                                        {{-- <button type="button" onclick="Livewire.emit('openModal', 'modals.product-view-modal')" class="avatar-title rounded-circle mt-1 bg-primary"><i class="far fa-eye"></i></button> --}}
                                    </div>
                                    <img src="{{ $card->images->first()->url }}" alt="{{ $card->title }}" class="img-fluid">
                                </div>
                            </div>
                            @else
                            <div class="material-img-container">
                                <div class="position-relative">
                                    <div class="avatar-xs product-ribbon">
                                        <button type="button" onclick="confirmDelete('deleteCard', {{$card->id}})" class="avatar-title rounded-circle mt-1 bg-danger"><i class="fas fa-trash-alt"></i></button>
                                        <button type="button" class="avatar-title rounded-circle mt-1 bg-warning"><i class="fas fa-edit"></i></button>
                                        {{-- <button type="button" onclick="Livewire.emit('openModal', 'modals.product-view-modal')" class="avatar-title rounded-circle mt-1 bg-primary"><i class="far fa-eye"></i></button> --}}
                                    </div>
                                    <img src="assets/images/small/img-6.jpg" alt="{{ $card->title }}" class="img-fluid">
                                </div>
                            </div>
                            @endif
                            <!-- Card start -->
                            <div class="card material-content p-1 mb-0">
                                <div class="p-2">
                                    <div class="row">
                                        <div class="col-8">
                                            <div>
                                                <h5 class="font-size-16"><a href="javascript: void(0);" class="text-dark" id="task-name">{{ $card->title }}</a>
                                                </h5>
                                                <h6 class="font-size-12">{{ $card->description }}</h6>
                                                <br>
                                                <div class="d-flex flex-wrap gap-2">
                                                    @foreach ($card->categories as $category)
                                                    <button type="button" class="btn btn-light btn-sm btn-material-cat">{{ $category->name }}</button>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <p class="text-muted">
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                    </p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mt-3">
                                                        <h5 class="font-size-15 mb-1" id="task-budget">$
                                                            {{ $card->sell_price }}
                                                        </h5>
                                                        <p class="mb-0 text-muted">Budget</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>


@section('script')
<!-- Ion Range Slider-->
<script src="{{ URL::asset('/assets/libs/ion-rangeslider/ion-rangeslider.min.js') }}"></script>

<!-- init js -->
<script src="{{ URL::asset('/assets/js/pages/product-filter-range.init.js') }}"></script>
@endsection