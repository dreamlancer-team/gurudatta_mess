@extends('admin.layout.app')

@push('main')
<div class="card">
    <x-card.header title="Meal">
        <form action="{{ route('meal.store') }}" method="post">
            @csrf
            <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal">New</div>
            <x-modal.modal title="Meal">
                <x-form.input label="Name" name="name"></x-form.input>
            </x-modal.modal>
        </form>
    </x-card.header>
    <x-card.body>
        <x-table.table :headers="['#', 'Name']">
            @foreach ($meals as $meal)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ $meal -> name }}</td>
                <td class="d-flex">
                    <x-icon.edit slug='{{ $meal -> slug }}' route='meal'>
                        <x-form.input label="Name" value="{{ $meal -> name }}" name="name"></x-form.input>
                    </x-icon.edit>
                    
                    <x-icon.delete slug='{{ $meal -> slug }}' route='meal'></x-icon.delete>
                </td>
            </tr>
            @endforeach
        </x-table.table>
    </x-card.body>
</div>
@endpush
