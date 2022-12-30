<html>

<head>
    <title>My booking</title>
    @include('css')
    </head>
<body>
@include('header')
@include('navbar')
    @if(!empty($info))
    <table class="items">
        <caption><h2 class="item_head">My Bookings</h2></caption>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Opening Time</th>
            <th>Closing Time</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Booked On</th>
        </tr>
        @foreach($info as $item)
        <tr>
            <td>{{ $item['I_name'] }}</td>
            <td>{{ $item['I_price'] }}</td>
            <td>{{ $item['I_start_time'] }}</td>
            <td>{{ $item['I_end_time'] }}</td>
            <td>{{ $item['I_address'] }}</td>
            <td>{{ $item['I_phone'] }}</td>
            <td>{{ $item['B_date'] }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ url('/') }}"><button style="width:100%;">Back</button></a>
    @else
        <h2 style="width:100%; background-color:rgba(119, 238, 108, 0.318); color:rgb(44, 120, 15); "">No Bookings Yet!!!</h2>
        <div style="text-align:center;"><a href="{{ url('/items') }}"><button style="width:25%; margin:0px;">Make Bookings</button></a></div>
    @endif

</body>
</html>