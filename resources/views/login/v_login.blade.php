<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <link href="{{ asset('template_user') }}/assets/img/logowa.png" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('template_login') }}/styles.css">
</head>

<body>

    <div class="section">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h1 class="mb-0 pb-3"><span>Website Arsitek</span></h1>
                        <img src="{{ asset('template_user') }}/assets/img/logowa.png" alt="Logo" height="100">

                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            @if (session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                    {{ session('loginError') }}
                                    <button type="button" class="close" data-dismiss="alert"
                                        aria-hidden="true">&times;</button>
                                </div>
                            @endif
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <h4 class="mb-4">LogIn</h4>
                                            <form action="/login/proses" method="POST">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email"
                                                        class="form-style @error('email') is-invalid @enderror "
                                                        placeholder="Email" id="email" autofocus
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <p class="tex text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <i class="input-icon uil uil-at"></i>
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Password" id="myInput">
                                                    @error('password')
                                                        <p class="tex text-danger">{{ $message }}</p>
                                                    @enderror
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                    <span class="show-password" onclick="myFunction()">
                                                        <i id="hide1" class="fas fa-eye"></i>
                                                        <i id="hide2" class="fas fa-eye-slash"></i>
                                                    </span>
                                                </div>
                                                <button type="submit" class="btn mt-4">Login</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            var y = document.getElementById("hide1");
            var z = document.getElementById("hide2");

            if (x.type === 'password') {
                x.type = "text";
                y.style.display = "block";
                z.style.display = "none";
            } else {
                x.type = "password";
                y.style.display = "none";
                z.style.display = "block";
            }
        }
    </script>

</body>

</html>
