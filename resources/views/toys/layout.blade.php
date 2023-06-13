<!DOCTYPE html>
<html>

<head>
    <title>Toys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .bg-image {
        height: 350px;
        background-image: url('/images/mg.jpg');
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

<body class="gradient">

    <header class="fixed-top p-3 bg-dark">
        <div class="container-fluid px-5">
            <div class="float-start">
                <h3 class="text-light">TOYS TOYS TOYS</h3>
            </div>
            <div class="float-end d-flex align-items-center">
                <input type="text" class="form-control me-2 rounded" style="height: 40px;" placeholder="Search">
                <a class="btn btn-danger rounded ms-3" href="{{ route('signout') }}">Logout</a>
            </div>
        </div>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>