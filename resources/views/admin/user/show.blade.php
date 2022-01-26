<x-icon.show slug='{{ $user -> id }}' route='inventory'>
    <table class="table table-row-dashed table-row-gray-300 gy-7">
        <div class="d-flex justify-content-between">
            <h1>{{ $user->name }}</h1>
        <h1 class="text-success">₹ {{ $user->user_detail->balance }}</h1>
        </div>
        <thead>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Email</th>
                <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
            </tr>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Mobile</th>
                <td>
                    <a href="tel:+{{ $user->mobile }}">{{ $user->mobile }}</a>
                </td>
            </tr>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Meal</th>
                <td>{{ $user->user_detail->package->meal->name }}</td>
            </tr>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Type</th>
                <td>{{ $user->user_detail->package->type ? 'Full Tiffin' : 'Half Tiffin' }}</td>
            </tr>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Time</th>
                <td>
                    @if ($user->user_detail->time == "M")
                        Morning
                    @elseif($user->user_detail->time == "N")
                        Night
                    @else
                        Morning / Night
                    @endif
                </td>
            </tr>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Address</th>
                <td>
                    @if ($user->user_detail->home_address)
                        Home : {{ $user->user_detail->home_address }} <br>
                    @endif
                    @if ($user->user_detail->office_address)
                        Office : {{ $user->user_detail->office_address }}
                    @endif 
                </td>
            </tr>
            <tr>
                <th class="fw-bolder fs-6 text-gray-800">Joining date</th>
                <td>{{ format_date($user->created_at) }}</td>
            </tr>
        </thead>
    </table>

</x-icon.show>
