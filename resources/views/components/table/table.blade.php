<table id="kt_datatable" class="table table-row-bordered gy-5">
    <thead>
        <tr class="fw-bold fs-6 text-muted">
            @foreach ($headers as $header)
            <th>{{ $header }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>

@push('styles')
<link href="http://assets.dreamlancer.in/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet"
    type="text/css" />
@endpush
@push('scripts')
<script src="http://assets.dreamlancer.in/assets/plugins/custom/datatables/datatables.bundle.js"></script>
@endpush

@push('scripts')
<script>
    $("#kt_datatable").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });

</script>
@endpush
