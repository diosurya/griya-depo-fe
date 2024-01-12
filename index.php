<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="">
    <title>Login Page</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .form-check-input:checked {
            background-color: #007bff;
            /* Contoh warna biru */
            border-color: #007bff;
        }

        .form-check-input:checked::before {
            color: #ffffff;
            /* Warna putih untuk checkmark */
        }
    </style>
</head>

<body>

    <div class="login-container row">
        <div class="col-md-6 d-flex align-items-center  vh-100" style="background-color: rgba(252, 194, 156, 1)">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <h4>Contractor Building Material Solution</h4>
                </div>
                <img src="img/group-15441.png" width="300px" alt="">
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center vh-100">
            <div class="login-form" style="width: 80%">
                <img src="img/logo-griya-depo-press1fix-32.png" width="100px" alt="">
                <h3>Login to your Account</h3>
                <p>See what is going on with your business</p>
                <form action="http://127.0.0.1:8000/api/login" method="POST">
                    <div class="form-group">
                        <label for="username"><b>Email:</b></label>
                        <input type="text" class="form-control" name="email" placeholder="nail@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="password"><b>Password</b></label>
                        <input type="password" class="form-control" name="password" placeholder="**">
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <a href="">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" style="background-color: rgba(252, 194, 156, 1)">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.3/axios.min.js"></script>

    <!-- Bootstrap JS, Popper.js, and jQuery from CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {
            checkTokenAndRedirect();

            function checkTokenAndRedirect() {
                var token = localStorage.getItem('token');
                if (token) {
                    window.location.href = 'page/dashboard.php';
                }
            }
            $('form').submit(function(e) {
                e.preventDefault();
                var email = $('[name="email"]').val();
                var password = $('[name="password"]').val();
                axios.post('http://127.0.0.1:8000/api/login', {
                        email: email,
                        password: password
                    })
                    .then(function(response) {
                        console.log(response.data);
                        var user = response.data.user;
                        var token = response.data.token;
                        localStorage.setItem('user', JSON.stringify(user));
                        localStorage.setItem('token', token);

                        window.location.href = 'page/dashboard.php';
                    })
                    .catch(function(error) {
                        console.error(error);
                        alert('Login failed. Please check your credentials.');
                    });
            });
        });
    </script>




</body>

</html>