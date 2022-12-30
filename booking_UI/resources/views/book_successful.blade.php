<!DOCTYPE html>
<html lang="en">
<head>
    @include('css')
    <title>Book Successful</title>
</head>
<body style="background-color:white">
    @include('header')
   
    <div class="book_success">
        <img src="{{ asset('img/book_success.png') }}" alt="Booked Sucessfully" />
        <h2 class="book_success_h2" > Booked Sucessfully!</h2>
        <a href="{{ url('mybooking/'.session()->get('id')) }}"><button style="width:70%; background-color:rgba(49, 114, 49, 0.97); font-size:25px;">Done</button></a>
    
    </div>
    
</body>
</html>