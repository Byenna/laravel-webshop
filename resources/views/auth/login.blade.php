@extends('frontend.welcome')
@section('login')
<body>
    <div id="appLog">
        <div class="form-group">
        <form id="logIn" class="row g-4" method="POST" action="{{ route('login') }}">
            @csrf
            
                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>


                <div class="col-md-6">
                    <label for="inputPassword4" class="label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="col-12">
                    <a href="{{ route('password.request') }}">Wachtwoord vergeten?</a>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">SIGN IN</button>
                </div>

            </form>

        </div>
    </div>
   
</body>

@endsection