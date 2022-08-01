<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="updateModalLabel">Update Tag</h5>
        <i class="bx bx-x close font-size-22"  wire:click="$emit('closeModal')"></i>
    </div>
    <div class="modal-body">
        <form>
            <div class="form-group mb-2">
                <label for="name"><strong>Name *</strong></label>
                <input type="text" wire:model.defer="state.name" class="form-control @error('name') is-invalid @enderror" id="nameUpdate" placeholder="">
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group mb-2">
                <label for="description"><strong>Description *</strong></label>
                <textarea class="form-control @error('description') is-invalid @enderror" wire:model.defer="state.description" id="descriptionUpdate" rows="3"></textarea>
                @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-btn" wire:click="$emit('closeModal')">Close</button>
        <button type="button" wire:click.prevent="update()" class="btn btn-primary">Update</button>
    </div>
</div>
