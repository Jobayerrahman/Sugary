
<div>
    <div class="table-responsive modal_view__table">
        <table class="table table-bordered mb-0 text-left">
            <tbody>
                <tr>
                    <td><strong>Title:</strong> {{ $product->title }}</td>
                    <td>
                        <strong>Base Specs:</strong><br>
                        <span>Old Cost: {{ $product->old_cost }}</span>
                        <span>Current Cost: {{ $product->current_cost }}</span><br>
                        <span>Sell Price: {{ $product->sell_price }}</span>
                        <span>Quantity: {{ $product->quantity }}</span>
                    </td>
                    <td rowspan="3">
                        <strong>Images</strong>
                        @if ($product->images->first())
                            <img src="{{ $product->images->first()->url }}" alt="{{ $product->title }}" class="img-fluid">
                        @else
                            <img src="assets/images/default.jpg" width="50" height="auto" alt="{{ $product->title }}"
                            class="img-fluid">
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Description:</strong> {{ $product->description }}</td>
                    <td>
                        <strong>Dimensions (MM):</strong><br>
                        <span>Width: {{ $product->width }}</span>
                        <span>Height: {{ $product->height }}</span><br>
                        <span>Depth: {{ $product->depth }}</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Categories:</strong>
                        @foreach ($product->categories as $item)
                            <button type="button"
                                class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                        @endforeach
                    </td>
                    <td>
                        <strong>Colors:</strong>
                        @foreach ($product->colors as $item)
                            <button type="button"
                                class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Reason Seasons:</strong>
                        @foreach ($product->reasonSeasons as $item)
                            <button type="button"
                                class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                        @endforeach
                    </td>
                    <td rowspan="2" colspan="2">
                        <strong>Variants</strong>
                        ------
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Tags:</strong>
                        @foreach ($product->tags as $item)
                            <button type="button"
                                class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Customisations:</strong><br>
                        <span>1. Custom Text: {{ $product->custom_text_label }}</span><br>
                        <span>2. Custom File: {{ $product->custom_file_label }}</span>
                    </td>
                    <td colspan="2">
                        <strong>Inventory Placement</strong>
                        @foreach ($product->inventoryPlacements as $item)
                            <button type="button"
                                class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                        @endforeach
                    </td>
                </tr>
                <tr>
                    <td>
                        <strong>Options:</strong>
                        <p>{{ $product->is_business_gifting }}</p>
                        <p>{{ $product->is_mark_as_drip }}</p>
                        <p>{{ $product->is_caution_of_availability }}</p>
                    </td>
                    <td colspan="2">
                        <strong>Brand & Visible Tags</strong>
                        @foreach ($product->visibleTags as $item)
                            <button type="button"
                                class="btn btn-light btn-sm btn-material-cat">{{ $item->name }}</button>
                        @endforeach
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
