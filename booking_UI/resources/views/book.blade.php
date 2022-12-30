<!DOCTYPE html>
<html lang="en">
<head>
    @include('css')
    <title>Confirm Booking</title>

</head>

<body>

   <h2 style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; width:100%;padding:15px; background-color: #086b4788;" >Confirm Reservation</h2>
    <table class="confirm_booking">
        @foreach ($data as $item)
        <tr>
            <th>Venue:</th>
            <td>{{ $item['I_name'] }}</td>
        </tr>
        <tr>
            <th>Price:</th>
            <td>{{ $item['I_price'] }}</td>
        </tr>
        <tr>
            <th>Time:</th>
            <td>{{ $item['I_start_time'] }}-{{ $item['I_end_time'] }}</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>{{ $item['I_address'] }}</td>
        </tr>
        <tr>
            <th>Contact:</th>
            <td>{{ $item['I_phone'] }}</td>
        </tr>
        <tr>
            <th>Rating:</th>
            <td>{{ $item['I_rating'] }}</td>
        </tr>
        <form action="{{ url('bookconfirm') }}" method="post">
            @csrf
            <input type="hidden" name="I_id" value="{{ $item['I_id'] }}" />
            <input type="hidden" name="I_price" value="{{ $item['I_price'] }}" />
            <input type="hidden" name="U_id" value="{{  session()->get('id') }}" />
            <tr>
            <th colspan="2"><button class="button_book">Reserve Now</button></th>
            </tr>
        </form>
        @endforeach

    </table>
</body>

</html>