<div>
    @if ($photos)
        Photo Preview:
        <div class="row">
            <div class="card me-1 mb-1">
                <img src="{{ $photos->temporaryUrl() }}">
            </div>
        </div>
    @endif
    <div class="mb-3">
        <label class="form-label">Image Upload</label>
        <input type="file" class="form-control" wire:model="photos">
        <div wire:loading wire:target="photos">Uploading...</div>
        @error('photos') <span class="error">{{ $message }}</span> @enderror
    </div>


    {{-- <div wire:ignore class="upload__box">
        <div class="upload__btn-box">
            <label class="upload__btn">
                <div class="img-file-container p-2">
                    <div class="mt-3">
                        <div class="" for="formFile">
                            <i class="mdi mdi-file-image"></i>
                            <br>
                            <span>Upload Image/Video</span>
                            <input type="file" wire:model="state.photos" data-max_length="20"
                                class="upload__inputfile @error('photos') is-invalid @enderror" multiple hidden>
                        </div>
                        @error('photos')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </label>
        </div>
        <div class="upload__img-wrap"></div>
    </div> --}}
    {{-- @if ($photos)
        Photo Preview:
        <div class="row">
            @foreach ($photos as $photos)
            <div class="card me-1 mb-1">
                <img src="{{ $photos->temporaryUrl() }}">
            </div>
            @endforeach
        </div>
    @endif --}}
</div>