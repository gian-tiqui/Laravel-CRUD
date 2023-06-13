<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" />
    <style>
        .bg-image {
            height: auto;
            background-image: url('/images/mg.jpg');
            background-repeat: no-repeat;
            background-size: contain;
        }

        .gradient {
            background: linear-gradient(-120deg, #98d3d9, #367a81, #1e7c86);
            background-size: 400% 400%;
            animation: gradient 9s ease infinite;
            height: 120vh;
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

    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="row">

            <div class="col-md-4 col-sm-12 bg-body p-4 text-center" style="overflow-wrap: break-word;">
                <h4 style="font-family: Arial, Helvetica, sans-serif;">Welcome to TOYS TOYS TOYS!</h4>

                <br><br>
                <br><br>
                <div class="mx-auto mt-5">
                    <form method="POST" action="{{ route('signup') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-7 mx-auto col-sm-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-7 mx-auto col-sm-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-7 mx-auto col-sm-12">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                        </div>

                        <br>

                        <div class="row mb-3">
                            <div class="col-md-7 mx-auto col-sm-12 mt-3">
                                <button type="submit" class="btn btn-dark px-5">Register</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class=" col bg-image p-5">
                                        <br /><br /><br /><br /><br /><br /><br />
                            </div>
                        </div>


                </div>
</body>

</html>