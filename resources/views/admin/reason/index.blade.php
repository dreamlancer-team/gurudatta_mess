@extends('admin.layout.app')

@push('main')
<div class="card col-md-10 offset-md-1">
    <x-card.header title="Reason">
        <form action="{{ route('reason.store') }}" method="post">
            @csrf
            <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal">New</div>
            <x-modal.modal title="Reason">
                <x-form.input label="Name" name="name"></x-form.input>
            </x-modal.modal>
        </form>
    </x-card.header>
    <x-card.body>
        <x-table.table :headers="['#', 'Name', 'Action']">
            @foreach ($reasons as $reason)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ $reason -> name }}</td>
                <td class="d-flex">
                    <x-icon.edit title='Reason' slug='{{ $reason -> slug }}' route='reason'>
                        <x-form.input label="Name" value="{{ $reason -> name }}" name="name"></x-form.input>
                    </x-icon.edit>
                    
                    <x-icon.delete slug='{{ $reason -> slug }}' route='reason'></x-icon.delete>
                </td>
            </tr>
            @endforeach
        </x-table.table>
    </x-card.body>
</div>
@endpush
