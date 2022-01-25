@extends('admin.layout.app')

@push('styles')
<link rel="stylesheet" href="css/main.css">
@endpush

@push('main')
<div class="card">
    <x-card.header title="Notice">
        <form action="{{ route('notice.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal">New</div>
            <x-modal.modal title="Notice" btnName="Send">
                <x-form.input label="Title" name="title"></x-form.input>
                <x-form.textarea label="Message" name="message"></x-form.textarea>
                <x-form.image label="Image"></x-form.image>
            </x-modal.modal>
        </form>
    </x-card.header>
    <x-card.body>
        <x-table.table :headers="['#', 'Title', 'Image', 'Date', 'Action']">
            @foreach ($notices as $notice)
            <tr>
                <td>{{ $loop -> index + 1 }}</td>
                <td>{{ $notice -> title }}</td>
                <td>
                    @if ($notice -> image)
                        <img class="w-75px h-50px" src="{{ url('storage/notice/' . $notice->image) }}" alt="{{ $notice->title }}">
                    @endif
                </td>
                <td>{{ $notice -> created_at -> diffForHumans() }}</td>
                <td>
                    <x-icon.show slug='{{ $notice -> id }}' route='notice'>
                        <h1>{{ $notice -> title }}</h1>
                        <p>{{ $notice -> message }}</p>
                        @if ($notice -> image)
                            <img class="w-100" src="{{ url('storage/notice/' . $notice->image) }}" alt="{{ $notice->title }}">
                        @endif
                    </x-icon.show>
                </td>
            </tr>
            @endforeach
        </x-table.table>
    </x-card.body>
</div>
@endpush
