<a href="" class="btn btn-icon btn-light-success btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal{{$slug}}" id="#kt_modal">
    <i class="fas fa-edit"></i>
</a>
<form action="{{ route($route . '.update' , $slug) }}" method="post">
    @csrf
    {{ method_field('PUT') }}
    <x-modal.modal title='{{ $title }}' slug='{{ $slug }}'>
        {{ $slot }}
    </x-modal.modal>
</form>
