<x-icon.show slug='{{ $list -> id }}' route='inventory'>
    <h4>{{ format_date($list -> created_at) }}</h4>

    <table class="table table-row-dashed table-row-gray-300 gy-7">
        <thead>
            <tr class="fw-bolder fs-6 text-gray-800">
                <th>#</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach (json_decode($list->data) as $item)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->qty }} {{ $item->unit }}</td>
                    <td>{{ $item->price }}</td>
                    <td>
                        @php
                            $total += ($item->qty * $item->price)
                        @endphp
                        {{ $item->qty * $item->price }}
                    </td>
                </tr>
            @endforeach
            <tr>
                Total Amount : <strong>{{ $total }}</strong>
            </tr>
    </table>

</x-icon.show>
