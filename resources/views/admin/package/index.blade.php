@extends('admin.layout.app')

@push('main')
<div class="card col-md-10 offset-md-1">
    <x-card.header title="Package">
        <form action="{{ route('package.store') }}" method="post">
            @csrf
            <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal">New</div>
            <x-modal.modal title="Package">
                <x-form.input label="Name" name="name"></x-form.input>
                <x-form.option label="Meal" name="meal" :items="$meals"></x-form.option>
                <x-form.option label="Type" name="type" :items="getTiffinTypes()"></x-form.option>
                <x-form.input label="Price" name="price" type="number"></x-form.input>
            </x-modal.modal>
        </form>
    </x-card.header>
    <x-card.body>
        <x-table.table :headers="['#', 'Name', 'Meal', 'Type', 'Price', 'Action']">
            @foreach ($packages as $package)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ $package -> name }}</td>
                <td>{{ $package -> meal -> name }}</td>
                <td>{{ $package -> type ? 'Full Tiffin' : 'Half tiffin' }}</td>
                <td>{{ $package -> price }}</td>
                <td class="d-flex">
                    <x-icon.edit title='Update Package' slug='{{ $package -> slug }}' route='package'>
                        <x-form.input label="Name" value="{{ $package -> name }}" name="name"></x-form.input>
                        <x-form.option label="Meal" value="{{ $package -> meal -> id }}" name="meal" :items="$meals"></x-form.option>
                        <x-form.option label="Type" value="{{ $package -> type }}" name="type" :items="getTiffinTypes()"></x-form.option>
                        <x-form.input label="Price" value="{{ $package -> price }}" name="price" type="number"></x-form.input>
                    </x-icon.edit>
                    
                    <x-icon.delete slug='{{ $package -> slug }}' route='package'></x-icon.delete>
                </td>
            </tr>
            @endforeach
        </x-table.table>
    </x-card.body>
</div>
@endpush
