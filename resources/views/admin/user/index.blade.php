@extends('admin.layout.app')

@push('main')
<div class="card col-md-12">
    <x-card.header title="user">
        {{-- <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal">New</div>
            <x-modal.modal title="user">
                <x-form.input label="Name" name="name"></x-form.input>
            </x-modal.modal>
        </form> --}}
    </x-card.header>
    <x-card.body>
        <x-table.table :headers="['#', 'Name', 'Mobile', 'Meal', 'Time', 'Price', 'status', 'Action']">
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ $user -> name }}</td>
                <td><a href="tel:+{{ $user->mobile }}">{{ $user->mobile }}</a></td>
                <td>{{ $user -> user_detail -> package -> name }}</td>
                <td>{{ $user -> user_detail -> time }}</td>
                <td>{{ $user -> user_detail -> package -> price }}</td>
                <td>
                    <x-badge.badge status='{{ $user -> status }}'></x-badge.badge>
                </td>
                <td>@include('admin.user.show')</td>
            </tr>
            @endforeach
        </x-table.table>
    </x-card.body>
</div>
@endpush