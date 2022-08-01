<div class="row">
    {{-- <h3>Category</h3>
    <br> --}}
    <div class="col-md-12 col-sm-12">
        <div class="card card-container">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h4 class="card-title">All Category</h4>
                    <button type="button" onclick="Livewire.emit('openModal', 'modals.category-create-modal')" class="btn btn-primary">
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
                            @foreach($categories as $category)
                            <tr>
                                <th class="text-left">{{ $categories->perPage() * ($categories->currentPage() - 1) + $loop->iteration }}</th>
                                <td class="text-left">{{ $category->name }}</td>
                                <td class="text-left">{{ $category->description }}</td>
                                <td class="text-right">
                                    <button type="button" onclick="Livewire.emit('openModal', 'modals.category-edit-modal', {{ json_encode(['category' => $category->id]) }})" class="btn btn-sm btn-warning"><i class="fas fa-edit" aria-hidden="true"></i> Edit</button>
                                    <button type="button" onclick="confirmDelete('deleteCategory', {{$category->id}})" class="btn btn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{-- <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active">
                        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul> --}}
                {{ $categories->links() }}
                {{-- {{ $categories->links('components.pagination') }} --}}
            </div>
                
        </div>
    </div>
</div>

@section('script')

@endsection
