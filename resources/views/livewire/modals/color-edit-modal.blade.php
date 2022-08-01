<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Create Colors</h5>
        <i class="bx bx-x close font-size-22" wire:click="$emit('closeModal')" data-bs-dismiss="modal" aria-label="Close"></i>
    </div>
    <div class="modal-body">
        <form>
            <div class="form-group mb-2">
                <label for="name"><strong>Name</strong></label>
                <input type="text" wire:model.defer="state.name" class="form-control @error('name') is-invalid @enderror" id="name">
                @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label for="colorpicker"><strong>Pick Color</strong></label><br>
                <input type="color" class="@error('picker') is-invalid @enderror" wire:model.defer="state.colorpicker" name="colorpicker" value="#0000"><br><br>
                @error('picker')
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