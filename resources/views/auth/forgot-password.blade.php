<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap-grid.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="/assets/css/signIn.css">
    <title>Log In</title>

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
    <script src="/assets/js/logIn.js"></script>
</body>

</html>