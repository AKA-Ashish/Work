<html>
    <head>
        <title>User Registration</title>
        @include('css')
    </head>
    <body>
        @include('header')
        <div class="container">
            <div class="imgcontainer">
                 <img src="{{ asset('img/avatar.png') }}" alt="Image of Avatar" class="avatar"/>
            </div>
          @if (isset($register))
              <span>$register</span>
          @endif
        <form action="registration" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Name</label><br />
            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"/><br />
            <span>@error('name')*{{ $message }}@enderror</span><br />

            <label>E-mail</label><br />
            
            <input type="email" placeholder="E-mail" name="email" value="{{ old('email') }}"/><br />
            <span>@error('email')*{{ $message }}@enderror</span><br />
            <label>Password</label><br />
            
            <input type="password" placeholder="Password" name="password" /><br />
            <span>@error('password')*{{ $message }}@enderror</span><br />
            <label>Confirm Password</label><br />
            <input type="password" placeholder="Confirm Password" name="password_confirmation" /><br />
            
            <button>Register</button>
        
        </form>
        <a href="login" class="register">Already registered?</a>
    </div>
    </body>
</html>