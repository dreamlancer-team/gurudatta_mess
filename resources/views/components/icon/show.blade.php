<a href="{{ route($route . '.show' , $slug) }}" class="btn btn-icon btn-light-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_{{$slug}}" id="#kt_modal">
    <i class="fas fa-eye"></i>
</a>

<div class="modal fade" tabindex="-1" id="kt_modal_{{ $slug }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>



