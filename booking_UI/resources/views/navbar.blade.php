
<ul class="header_list">  
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('mybooking/'.session()->get('id')) }}">My bookings</a></li>
    <li><a href="{{ url("/items") }}">View Venues</a></li>
    <li ><a href="{{ url('/logout') }}" class="logout">Log Out</a></li>
    
    @if(session()->has('name') )
        <h3 class="name">Welcome,{{ session()->get('name') }}</h3>
 
        @endif
</ul>