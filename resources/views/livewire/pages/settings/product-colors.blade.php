<div class="row">
    <div class="col-12">
        <div class="card card-container">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">All Color</h4>
                    <button type="button" onclick="Livewire.emit('openModal', 'modals.color-create-modal')" class="btn btn-primary">
                        Create New
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Color Name</th>
                                <th class="text-left">Color Code</th>
                                <th class="text-left">Color</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $colors as $color )
                            <tr>
                                <th class="text-left">{{ $colors->perPage() * ($colors->currentPage() - 1) + $loop->iteration }}</th>
                                <td class="text-left">{{ $color->name }}</td>
                                <td class="text-left">{{ $color->colorpicker }}</td>
                                <td class="text-left"><span class="btn btn-outline-light waves-effect" style="background-color: {{ $color->colorpicker }}"></span></td>
                                <td class="text-right">
                                    <button type="button" onclick="Livewire.emit('openModal', 'modals.color-edit-modal', {{ json_encode(['color' => $color->id]) }})" class="btn btn-sm btn-warning"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button>
                                    <button type="button" onclick="confirmDelete('deleteColor', {{$color->id}})" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $colors->links() }}
            </div>
        </div>
    </div>
</div>

@section('script')

@endsection