<!DOCTYPE html>
<html lang="en">
<head>
    @include('css')
    <title>Item Display</title>
</head>
<body style="text-align:center;">
    @include('header')
    @include('navbar')
    <div>
        <form action="items" method="post">
            @csrf
            <label>Search By Category:</label>
            <select name="category">
                <option value="">--Select--</option>
                @foreach($category as $cat)
                    <option value="{{ $cat['C_id'] }}">{{ $cat['C_name'] }}</option>
                @endforeach
            </select>
            <button style="background-color:rgb(2, 99, 2); width:10%; margin:1%;">Search</button>
        </form>
    </div>
    <div style="overflow-x:auto;">
    <table class="items">
        <caption><h2 class="item_head">Make Bookings</h2></caption>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Opening Time</th>
            <th>Closing Time</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Rating</th>
            <th>Facilities</th>
            <th>Action</th>

        </tr>
       @foreach ($data as $item)
        <tr>
            <td>{{ $item['I_name'] }}</td>
            <td>{{ $item['I_price'] }}</td>
            <td>{{ $item['I_start_time'] }}</td>
            <td>{{ $item['I_end_time'] }}</td>
            <td>{{ $item['I_address'] }}</td>
            <td>{{ $item['I_phone'] }}</td>
            <td>{{ $item['I_rating'] }}</td>
            <td>{{ $item['I_facility'] }}</td>
            <td><a href="{{ url('book/'.$item['I_id']) }}"><button class="button_book">Book Now</button></a></td>
        </tr>
       @endforeach
    </table>
</div>
</body>
</html>

