@props(['placeholder' => 'Select Options', 'id'])

@push('css')
    {{-- @once
        
    @endonce --}}
@endpush


<div wire:ignore class="mb-3">
    <select id="{{ $id }}" class="form-control select2" multiple="multiple" data-placeholder="{{ $placeholder }}">
        {{ $slot }}
    </select>
</div>


@push('script')
    {{-- @once
        
    @endonce --}}
    <script>
        $(function(){
            $('#{{ $id }}').select2().on('change', function(){
                @this.set('{{ $attributes->whereStartsWith('wire:model')->first() }}', $(this).val());
            });
        }) 
    </script>
@endpush

