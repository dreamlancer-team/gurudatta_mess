@extends('admin.layout.app')

@push('main')
<div class="card col-md-10 offset-md-1">
    <x-card.header title="Inventory List">
        @include('admin.inventory.repeater')
    </x-card.header>
    <x-card.body>
        <x-table.table :headers="['#', 'Date', 'Action']">
            @foreach ($lists as $list)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ format_date($list -> created_at) }}</td>
                <td>@include('admin.inventory.show')</td>
            </tr>
            @endforeach
        </x-table.table>
    </x-card.body>
</div>
@endpush
