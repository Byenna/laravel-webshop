@extends('frontend.welcome')
@section('forgot_password')
<body>
    <div id="appLog">
        <div class="form-group">
        <form id="logIn" class="row g-3" method="POST" action="{{ route('password.email') }}">
            @csrf

                <h4>Forgot your password?</h4>
                <p> No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">SEND</button>
                </div>

            </form>

        </div>
    </div>
    
    @endsection

