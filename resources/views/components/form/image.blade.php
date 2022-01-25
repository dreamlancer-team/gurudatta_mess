<div class="mb-5">
    <label class="required form-label col-md-12">{{ $label }}</label>
    <div class="image-input image-input-empty col-md-12" data-kt-image-input="true"
        style="background-image: url(http://assets.dreamlancer.in/assets/media/misc/image_not_available.png)">
        <div class="image-input-wrapper min-w-100 h-200px"></div>

        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
            data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Change image">
            <i class="fas fa-pencil fs-7"></i>

            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
            <input type="hidden" name="image_remove" />
        </label>

        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Cancel image">
            <i class="fas fa-remove fs-2"></i>
        </span>

        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow"
            data-kt-image-input-action="remove" data-bs-toggle="tooltip" data-bs-dismiss="click" title="Remove image">
            <i class="fas fa-remove fs-2"></i>
        </span>
    </div>
</div>
