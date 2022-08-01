<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Create Reason & Season</h5>
        <i class="bx bx-x close font-size-22" wire:click="$emit('closeModal')" aria-label="Close"></i>
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
            <div class="mb-2">
                <label for="category"><strong>Category name</strong></label>
                <select wire:model.defer="state.category_id" name="category" class="form-control @error('name') is-invalid @enderror" required>
                    <option selected>--Select--</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="description"><strong>Description</strong></label>
                <textarea class="form-control @error('description') is-invalid @enderror" wire:model.defer="state.description" id="description" rows="3"></textarea>
                @error('description')
                <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary close-btn" wire:click="$emit('closeModal')">Close</button>
        <button type="button" wire:click.prevent="createReasonSeason()" class="btn btn-primary close-modal">Save</button>
    </div>
</div>