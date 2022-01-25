<div class="modal fade" tabindex="-1" id="kt_modal{{ $slug }}">
    <div class="modal-dialog {{ $isFull ? 'modal-fullscreen' : ''}}">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $title }}</h5>
            </div>

            <div class="modal-body">
                {{ $slot }}
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-{{ $btnType }}">{{ $slug ? $btnName ?? 'Update' : $btnName ?? 'Save' }}</button>
            </div>
        </div>
    </div>
</div>
