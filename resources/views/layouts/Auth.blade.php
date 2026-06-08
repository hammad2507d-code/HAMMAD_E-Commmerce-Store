<div>
    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            min-height:100vh;
            background:linear-gradient(
                135deg,
                #4f46e5,
                #7c3aed,
                #9333ea
            );
        }

        .auth-wrapper{
            min-height:100vh;
            display:flex;
            align-items:center;
            justify-content:center;
            padding:30px 0;
        }

        .auth-card{
            border:none;
            border-radius:25px;
            overflow:hidden;
            box-shadow:0 15px 40px rgba(0,0,0,.2);
        }

        .left-side{
            background:linear-gradient(
                135deg,
                #0f172a,
                #1e293b
            );
            color:white;
            min-height:650px;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            padding:40px;
        }

        .logo{
            font-size:60px;
        }

        .brand{
            font-size:42px;
            font-weight:bold;
        }

        .form-side{
            background:white;
            min-height:650px;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:40px;
        }

        .form-container{
            width:100%;
            max-width:400px;
        }

        .form-control{
            height:55px;
            border-radius:12px;
        }

        .btn-auth{
            height:55px;
            border-radius:12px;
            font-weight:600;
        }

        @media(max-width:768px){

            .left-side{
                min-height:250px;
            }

            .form-side{
                min-height:auto;
            }

        }

    </style>
</head>
<body>

<div class="container auth-wrapper">

    <div class="card auth-card w-100">

        <div class="row g-0">

            <!-- Left Side -->

            <div class="col-md-6 left-side">

                <i class="bi bi-bag-check-fill logo"></i>

                <h1 class="brand mt-3">
                    NovaMart
                </h1>

                <p class="text-center mt-3">
                    Shop smarter with premium products,
                    secure checkout and fast delivery.
                </p>

            </div>

            <!-- Right Side -->

            <div class="col-md-6 form-side">

                <div class="form-container">

                    @yield('content')

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>