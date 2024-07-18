<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.A</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <div class="p-5 login-form"> <!-- Added text-center class to center the login form -->
            <div class="d-flex justify-content-center align-items-center mb-5"> <!-- Centering the links -->
                <div class="mt-3">
                    <a href="{{route('login')}}" class="slate">Login</a>
                    <span class="slate">/</span>
                    <a href="{{route('register')}}" class="slate">Register</a>
                </div>
            </div>
            <div class="row justify-content-center"> <!-- Centering the login form -->
                <div class="col-lg-5 col-md-7">

                        {{$slot}}

                </div>
            </div>
        </div>
    </div>

</body>
</html>
