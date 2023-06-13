<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys Toys Toys</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <style>
        .bg-image {
            height: 350px;
            background-image: url('./images/mg.jpg');
            background-repeat: no-repeat;
        }

        .gradient {
            background: linear-gradient(-120deg, #98d3d9, #367a81, #1e7c86);
            background-size: 400% 400%;
            animation: gradient 9s ease infinite;
            height: auto;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        #login {
            background: #408d95;
            border-radius: 20px;
            opacity: 95%;
            box-shadow: 2px 2px 5px #333;
        }
    </style>
</head>

<body class="gradient">
    <header class="fixed-top p-3 bg-dark">
        <div class="container-fluid px-5">
            <div class="float-start">
                <h3 class="text-light">TOYS TOYS TOYS</h3>
            </div>
            <div class="float-end d-flex align-items-center">
                <input type="text" class="form-control me-2 rounded" style="height: 40px;" placeholder="Search">
                <a class="btn btn-light rounded ms-3" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </header>

    <br>
    <br>
    <br>

    <div class="bg-white text-center py-1">
        <a href="#" class="text-dark mx-3">Home</a>
        <a href="#" class="text-dark mx-3">About us</a>
        <a href="#" class="text-dark mx-3">Toys</a>
        <a href="#" class="text-dark mx-3">Promos</a>
        <a href="#" class="text-dark mx-3">Sale</a>
        <a href="#" class="text-dark mx-3">Contact us</a>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="col bg-image mt-1">

            </div>
            <div class="col card shadow-lg px-5 py-3 ms-2" id="login">
                <h4 class="text-start text-light">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </h4>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

    <footer class="bg-dark text-center text-lg-start mt-5 pt-4">
        <div class="container text-light">
            <div class="row mx-5">
                <div class="col mx-5">
                    <h5 class="text-uppercase text-center">Toys Toys Toys</h5>
                    <p class="m-3 text-center">
                        Check for available toys now!
                    </p>
                </div>
                <div class="text-center p-2 bg-dark text-light">© 2023 Toys Inc.</div>
    </footer>

</body>

</html>