<div class="row">
    {{-- <h3>Tags</h3>
    <br> --}}
    <div class="col-12">
        <div class="card card-container">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">All Tag</h4>
                    <button type="button" onclick="Livewire.emit('openModal', 'modals.tag-create-modal')" class="btn btn-primary">
                        Create New
                    </button>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table mb-0">

                        <thead class="table-light">
                            <tr>
                                <th class="text-left">#</th>
                                <th class="text-left">Tags Name</th>
                                <th class="text-left">Description</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $tags as $tag)
                            <tr>
                                <th class="text-left">{{ $tags->perPage() * ($tags->currentPage() - 1) + $loop->iteration }}</th>
                                <td class="text-left">{{ $tag->name }}</td>
                                <td class="text-left">{{ $tag->description }}</td>
                                <td class="text-right">
                                    <button type="button" onclick="Livewire.emit('openModal', 'modals.tag-edit-modal', {{ json_encode(['tag' => $tag->id]) }})" class="btn btn-sm btn-warning"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button>
                                    <button type="button" onclick="confirmDelete('deleteTag', {{$tag->id}})" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $tags->links() }}
            </div>
        </div>
    </div>
</div>


@section('script')

@endsection