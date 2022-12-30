<html>
    <head>
        <title>User Login</title>
        @include('css')
    </head>
    <body>
        @include('header')
        <div class="container">
            <div class="imgcontainer">
                 <img src="{{ asset('img/avatar.png') }}" alt="Image of Avatar" class="avatar"/>
            </div>
           @if($message=Session::get('error'))
                <div class="error">
                    <strong>{{ $message }}</strong>
                </div>
           @endif
           @if (session('message'))
               <h3 style="background-color:rgb(10, 173, 10);color:white;width:50%;">
                {{ session('message') }}</h3>
           @endif
        <form action="login" method="POST" enctype="multipart/form-data">
            @csrf
            <label>E-mail</label><br />

            <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}"/><br />
            <span>@error('email')*{{ $message }}@enderror</span><br />
            <label>Password</label><br />

            <input type="password" placeholder="Password" name="password" /><br />
            <span>@error('password')*{{ $message }}@enderror</span><br />
            <button>Login</button>

        </form>
        <a href="registration" class="register">Not Registered yet?</a>
    </div>
    </body>
</html>