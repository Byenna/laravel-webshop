@extends('frontend.welcome')
@section('register')

<body>
    <div id="appLog">
        <div class="form-group">
        <form id="logIn" class="row g-3" method="POST" action="{{ route('register') }}">
            @csrf

                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Name</label>
                    <input id="name" type="text" name="name" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="label">Repeat Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>

                <div class="col-12">
                    <a href="{{ route('login') }}">Al geregistreerd?</a>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </div>

            </form>

        </div>
    </div>
   
</body>

@endsection