@section('css')
    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between">
            <div class="new-product mt-3">
                <a href="{{ route('add-ons') }}">
                    <div class="d-flex justify-content-between">
                        <i class="bx bx-left-arrow-circle font-size-24"></i>
                        <span><strong>New Add-Ons</strong></span>
                    </div>
                </a>
            </div>
            <div class="btn-save">
                <a class="btn d-flex justify-content-center p-2" wire:click.prevent="save()">
                    <i class="mdi mdi-plus-box font-size-16 me-2"></i>
                    <span class="mt-1 me-2">Save</span>
                </a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <form action="">
            <div class="card card-container mt-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-2 img-div">

                        </div>
                        <div class="col-4">
                            <div class="add-product-form p-2">
                                <div class="form-group mb-3">
                                    <label for="">Title</label>
                                    <input type="text" wire:model.defer="state.title"
                                        class="form-control @error('title') is-invalid @enderror" id=""
                                        placeholder="FP9237 Gifting - Femme">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Display Text</label>
                                    <input type="text" wire:model.defer="state.display_text"
                                        class="form-control  @error('display_text') is-invalid @enderror" id=""
                                        placeholder="FP9237 Gifting - Femme">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" wire:model.defer="state.description"
                                        id="exampleFormControlTextarea1" rows="3"
                                        placeholder="FP9237 Gifting - Femme"></textarea>
                                </div>
                                <hr style="width: 320px; height: 1px; background-color: #f0f0f5;">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between">
                                            <label class="form-label">Tags</label>
                                            <label class="form-label onclick"
                                                onclick="Livewire.emit('openModal', 'modals.tag-create-modal')">Add
                                                New</label>
                                        </div>
                                        <x-select2 wire:model.defer="state.tag_ids" placeholder="Select Tags"
                                            id="tag_ids">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">
                                                    {{ $tag->name }}
                                                </option>
                                            @endforeach
                                        </x-select2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Customisations</label>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-2 border p-2 rounded black-check-btn">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="custom_text"
                                                        id="custom_text">
                                                    <label class="form-check-label check-label" for="custom_text">
                                                        Custom Text
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" wire:model.defer="state.custom_text_label"
                                                class="form-control" placeholder="Type Here">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="mb-3 border p-2 rounded black-check-btn">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="custom_file"
                                                        id="custom_file">
                                                    <label class="form-check-label check-label" for="custom_file">
                                                        Custom File
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input type="text" wire:model.defer="state.custom_file_label"
                                                class="form-control" placeholder="Type Here">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Options</label>
                                    <div class="mb-2 border p-2 rounded black-check-btn">
                                        <div class="form-check">
                                            <input class="form-check-input" wire:model.defer="state.is_buniness_gifting"
                                                type="checkbox" name="mark_as_business_gifting"
                                                id="mark_as_business_gifting">
                                            <label class="form-check-label check-label" for="mark_as_business_gifting">
                                                Mark as Business Gifting
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-2 border p-2 rounded black-check-btn">
                                        <div class="form-check">
                                            <input class="form-check-input" wire:model.defer="state.is_mark_as_drip"
                                                type="checkbox" name="mark_as_drip" id="mark_as_drip">
                                            <label class="form-check-label check-label" for="mark_as_drip">
                                                Mark as Drip
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-2 border p-2 rounded black-check-btn">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                wire:model.defer="state.is_caution_of_availability" type="checkbox"
                                                name="flexRadioDefault" id="caution_of_availablility">
                                            <label class="form-check-label check-label" for="caution_of_availablility">
                                                Caution of Availablility
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="add-product-form">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-label">Base Specs</label>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.old_cost" class="form-control @error('old_cost') is-invalid @enderror"
                                                            placeholder="Old Cost">
                                                            @error('old_cost')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.current_cost" class="form-control @error('current_cost') is-invalid @enderror"
                                                            placeholder="Current Cost">
                                                            @error('current_cost')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-9">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.sell_price" class="form-control @error('sell_price') is-invalid @enderror"
                                                            placeholder="Sale Price">
                                                            @error('sell_price')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.quantity" class="form-control @error('quantity') is-invalid @enderror"
                                                            placeholder="QTY">
                                                            @error('quantity')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="form-label">Dimensions (MM)</label>
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.height" class="form-control @error('height') is-invalid @enderror"
                                                            placeholder="Height">
                                                            @error('height')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.width" class="form-control @error('width') is-invalid @enderror"
                                                            placeholder="Width">
                                                            @error('width')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <input type="text" wire:model.defer="state.depth" class="form-control @error('depth') is-invalid @enderror"
                                                            placeholder="Depth">
                                                            @error('depth')
                                                            <span class="invalid-feedback">{{ $message }}</span>
                                                            @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label">Color</label>
                                                    <label class="form-label onclick"
                                                        onclick="Livewire.emit('openModal', 'modals.color-create-modal')">Add
                                                        New</label>
                                                </div>
                                                <x-select2 wire:model.defer="state.color_ids" placeholder="Select Colors" id="color_ids">
                                                    @foreach ($colors as $color)
                                                        <option value="{{ $color->id }}">{{ $color->name }}
                                                        </option>
                                                    @endforeach
                                                </x-select2>
                                            </div>
                                        </div>
                                        <hr style="width: auto; height: 1px; background-color: #f0f0f5;">
                                    </div>
                                    <div class="col-3">
                                        {{-- <!-- @if ($photos)
                                            Photo Preview:
                                            <div class="row">
                                                @foreach ($photos as $photos)
                                                <div class="card me-1 mb-1">
                                                    <img src="{{ $photos->temporaryUrl() }}">
                                                </div>
                                                @endforeach
                                            </div>
                                        @endif --> --}}

                                        @if ($photos)
                                        Photo Preview:
                                        <img src="{{ $photos->temporaryUrl() }}">
                                        @endif

                                        {{-- <div class="mb-3">
                                            <label class="form-label">Image Upload</label>
                                            <input type="file" class="form-control" wire:model="photos">
                                            <div wire:loading wire:target="photos">Uploading...</div>
                                            @error('photos') <span class="error">{{ $message }}</span> @enderror
                                        </div> --}}
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
                                                                <input type="file" class="form-control" wire:model="photos" data-max_length="20" hidden>
                                                                <div wire:loading wire:target="photos">Uploading...</div>
                                                                @error('photos') <span class="error">{{ $message }}</span> @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="upload__img-wrap"></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex justify-content-between my-2">
                                                <label for="" class="mt-1">Variants</label>
                                                <input type="checkbox" id="switch2" switch="default" checked
                                                    wire:model="hasVariant" />
                                                <label for="switch2" data-on-label="Yes" data-off-label=""></label>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($hasVariant)
                                        @foreach($variants as $key => $variant)
                                        <div class="row">
                                            <div class="col-9">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Variant {{$loop->iteration}}</h5>
                                                    @if(!$loop->first)
                                                    <button type="button" class="btn btn-sm btn-default" wire:click="removeVariant({{$key}})"><i class="fas fa-times"></i></button>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.title"
                                                                                    placeholder="Custom Text">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.old_cost"
                                                                                    placeholder="Old Cost">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.current_cost"
                                                                                    placeholder="Current Cost">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-9">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.sale_price"
                                                                                    placeholder="Sale Price">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.quantity"
                                                                                    placeholder="QTY">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <x-select2 wire:model.defer="variants.{{$key}}.color_ids" id="color_ids{{$key}}" placeholder="Select Colors" >
                                                                            @foreach ($colors as $color)
                                                                                <option value="{{ $color->id }}">{{ $color->name }}
                                                                                </option>
                                                                            @endforeach
                                                                        </x-select2>
                                                                        {{-- <div class="mb-3">
                                                                            <select wire:model.defer="variants.{{$key}}.color_ids" multiple
                                                                                class="form-control @error('color_ids') is-invalid @enderror">
                                                                                @foreach ($colors as $color)
                                                                                    <option value="{{ $color->id }}">{{ $color->name }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                            @error('color_ids')
                                                                                <span class="invalid-feedback">{{ $message }}</span>
                                                                            @enderror
                                                                        </div> --}}
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="form-label">Dimensions
                                                                            (MM)</label>
                                                                        <div class="col-md-4">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.height"
                                                                                    placeholder="Height">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.width"
                                                                                    placeholder="Width">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-3">
                                                                                <input type="text" class="form-control" wire:model.defer="variants.{{$key}}.depth"
                                                                                    placeholder="Depth">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div wire:ignore class="upload__box">
                                                    <div class="upload__btn-box">
                                                        <label class="upload__btn">
                                                            <div class="img-file-container p-2">
                                                                <div class="mt-3">
                                                                    <div class="" for="formFile">
                                                                        <i class="mdi mdi-file-image"></i>
                                                                        <br>
                                                                        <span>Upload
                                                                            Image/Video</span>
                                                                        <input type="file" wire:model.defer="variants.{{$key}}.photos" multiple="" data-max_length="20" class="upload__inputfile" hidden>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="upload__img-wrap"></div>
                                                </div>
                                                {{-- @if (array_key_exists('photos', $variants[$key]))
                                                    Photo Preview:
                                                    <img src="{{ $variants[$key]['photos']->temporaryUrl() }}">
                                                @endif

                                                <div class="mb-3">
                                                    <label class="form-label">Image Upload</label>
                                                    <input type="file" class="form-control" multiple wire:model="variants.{{$key}}.photos">
                                                    <div wire:loading wire:target="photos">Uploading...</div>
                                                    @error('photos')
                                                        <span class="error">{{ $message }}</span>
                                                    @enderror
                                                </div> --}}
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="row">
                                            <div class="col-9">
                                                <div class="btn-variant mb-3">
                                                    <a href="javascript:void(0)" wire:click="addVariant">
                                                        <div class="d-flex justify-content-center p-2">
                                                            <i class="bx bx-plus-circle font-size-16 me-2 mt-1"></i>
                                                            <span class="mt-1 me-2">Add Variant</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <div class="d-flex justify-content-between">
                                                <label class="form-label">Inventory Placement</label>
                                                <label class="form-label onclick"
                                                    onclick="Livewire.emit('openModal', 'modals.inventoryplacement-create-modal')">Add
                                                    New</label>
                                            </div>
                                            <x-select2 wire:model.defer="state.inventory_placement_ids" placeholder="Select inventory Placement" id="inventory_placement_ids">
                                                @foreach ($inventoryPlacements as $inventoryPlacement)
                                                    <option value="{{ $inventoryPlacement->id }}">
                                                        {{ $inventoryPlacement->name }}
                                                    </option>
                                                @endforeach
                                            </x-select2>
                                        </div>
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <div class="d-flex justify-content-between">
                                                    <label class="form-label">Brand & Visible Tags</label>
                                                    <label class="form-label onclick"
                                                        onclick="Livewire.emit('openModal', 'modals.visibletag-create-modal')">Add
                                                        New</label>
                                                </div>
                                                <x-select2 wire:model.defer="state.visible_tag_ids" placeholder="Select inventory Placement" id="visible_tag_ids">
                                                    @foreach ($visibleTags as $visibleTag)
                                                        <option value="{{ $visibleTag->id }}">
                                                            {{ $visibleTag->name }}
                                                        </option>
                                                    @endforeach
                                                </x-select2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@section('script')
    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/upload-image.init.js') }}"></script>
@endsection
