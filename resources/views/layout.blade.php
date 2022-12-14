<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Game</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/all.min.js"
        integrity="sha512-8pHNiqTlsrRjVD4A/3va++W1sMbUHwWxxRPWNyVlql3T+Hgfd81Qc6FC5WMXDC+tSauxxzp1tgiAvSKFu1qIlA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        header {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            min-height: 120px;
            padding: 50px 0;
            color: #fff;
            background: #383838 url(https://www.athenadesignstudio.com/plugins/switch/images/bg.jpg) no-repeat center center;
            margin-bottom: 30px
        }



        /* Logo */
        header .logo {
            clear: both;
            display: block;
            text-align: center;
            padding-bottom: 10px;
        }

        /* Title */
        header h1 {
            font-weight: 300;
            font-size: 24px;
            color: #eee;
            letter-spacing: 2px;
            text-align: center;
            text-transform: uppercase;
            margin: 0 !important;
            padding-bottom: 25px;
        }

        @charset "utf-8";
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        div,
        input,
        p,
        a {
            font-family: "Roboto";
            margin: 0px;
        }

        a,
        a:hover,
        a:focus {
            color: inherit;
        }

        body {
            background-color: #F1F2F3;
        }

        .container-fluid,
        .container {
            max-width: 1200px;
        }

        .card-container {
            padding: 100px 0px;
            -webkit-perspective: 1000;
            perspective: 1000;
        }

        .profile-card-1 {
            background-color: #FFF;
            border-radius: 10px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            background-image: url(../img/profile-bg-1.jpg);
            background-position: center;
            padding-top: 100px;
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            max-width: 300px;
        }

        .profile-card-1 .profile-content {
            position: relative;
            background-color: #FFF;
            padding: 70px 20px 20px 20px;
            text-align: center;
        }

        .profile-card-1 .profile-img {
            position: absolute;
            height: 100px;
            left: 0px;
            right: 0px;
            z-index: 10;
            top: -50px;
            transition: all 0.25s linear;
            transform-style: preserve-3d;
        }

        .profile-card-1 .profile-img img {
            height: 100px;
            margin: auto;
            border-radius: 50%;
            border: 5px solid #FFF;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .profile-card-1 .profile-name {
            font-size: 18px;
            font-weight: bold;
            color: #021830;
        }

        .profile-card-1 .profile-address {
            color: #777;
            font-size: 12px;
            margin: 0px 0px 15px 0px;
        }

        .profile-card-1 .profile-description {
            font-size: 13px;
            padding: 5px 10px;
            color: #777;
        }

        .profile-card-1 .profile-icons .fa {
            margin: 5px;
            color: #777;
        }

        .profile-card-1:hover {
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
        }

        .profile-card-1:hover .profile-img {
            transform: rotateY(180deg);
        }

        .profile-card-2 {
            max-width: 300px;
            background-color: #FFF;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            background-position: center;
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            border-radius: 10px;
        }

        .profile-card-2 img {
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-name {
            position: absolute;
            left: 30px;
            bottom: 70px;
            font-size: 30px;
            color: #FFF;
            text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            font-weight: bold;
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-icons {
            position: absolute;
            bottom: 30px;
            right: 30px;
            color: #FFF;
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-username {
            position: absolute;
            bottom: 50px;
            left: 30px;
            color: #FFF;
            font-size: 13px;
            transition: all linear 0.25s;
        }

        .profile-card-2 .profile-icons .fa {
            margin: 5px;
        }

        .profile-card-2:hover img {
            filter: grayscale(100%);
        }

        .profile-card-2:hover .profile-name {
            bottom: 80px;
        }

        .profile-card-2:hover .profile-username {
            bottom: 60px;
        }

        .profile-card-2:hover .profile-icons {
            right: 40px;
        }

        .profile-card-3 {
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 25px 15px;
        }

        .profile-card-3 .profile-name {
            font-weight: bold;
            color: #21304e;
        }

        .profile-card-3 .profile-location {
            color: #999;
            font-size: 13px;
            font-weight: 600;
        }

        .profile-card-3 img {
            height: 100px;
            width: 100px;
            object-fit: cover;
            margin: 10px auto;
            border-radius: 50%;
            transition: all linear 0.25s;
        }

        .profile-card-3 .profile-description {
            font-size: 13px;
            color: #777;
            padding: 10px;
        }

        .profile-card-3 .profile-icons {
            margin: 15px 0px;
        }

        .profile-card-3 .profile-icons .fa {
            color: #fe455a;
            margin: 0px 5px;
        }

        .profile-card-3:hover img {
            height: 110px;
            width: 110px;
            margin: 5px auto;
        }

        .profile-card-4 {
            max-width: 300px;
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
        }

        .profile-card-4 img {
            transition: all 0.25s linear;
        }

        .profile-card-4 .profile-content {
            position: relative;
            padding: 15px;
            background-color: #FFF;
        }

        .profile-card-4 .profile-name {
            font-weight: bold;
            position: absolute;
            left: 0px;
            right: 0px;
            top: -70px;
            color: #FFF;
            font-size: 17px;
        }

        .profile-card-4 .profile-name p {
            font-weight: 600;
            font-size: 13px;
            letter-spacing: 1.5px;
        }

        .profile-card-4 .profile-description {
            color: #777;
            font-size: 12px;
            padding: 10px;
        }

        .profile-card-4 .profile-overview {
            padding: 15px 0px;
        }

        .profile-card-4 .profile-overview p {
            font-size: 10px;
            font-weight: 600;
            color: #777;
        }

        .profile-card-4 .profile-overview h4 {
            color: #273751;
            font-weight: bold;
        }

        .profile-card-4 .profile-content::before {
            content: "";
            position: absolute;
            height: 20px;
            top: -10px;
            left: 0px;
            right: 0px;
            background-color: #FFF;
            z-index: 0;
            transform: skewY(3deg);
        }

        .profile-card-4:hover img {
            transform: rotate(5deg) scale(1.1, 1.1);
            filter: brightness(110%);
        }

        .profile-card-5 {
            max-width: 300px;
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 50px 15px 25px 15px;
        }

        .profile-card-5 img {
            height: 100px;
            width: 100px;
            object-fit: cover;
            margin: 10px auto;
            border-radius: 50%;
            transition: all linear 0.25s;
            position: relative;
        }

        .profile-card-5::before {
            content: "";
            position: absolute;
            top: -60px;
            right: 0px;
            left: 0px;
            height: 170px;
            background-color: #4fb96e;
            transform: skewY(-20deg);
        }

        .profile-card-5 .profile-name {
            padding-top: 15px;
            font-weight: bold;
            color: #333;
        }

        .profile-card-5 .profile-designation {
            font-size: 13px;
            color: #777;
        }

        .profile-card-3 .profile-location {
            color: #999;
            font-size: 13px;
            font-weight: 600;
        }

        .profile-card-5 .profile-description {
            font-size: 13px;
            color: #777;
            padding: 10px;
        }

        .profile-card-5 .profile-overview {
            padding: 15px 0px;
        }

        .profile-card-5 .profile-overview p {
            color: #777;
            font-size: 13px;
        }

        .profile-card-5 .profile-overview h2 {
            font-weight: bold;
            color: #1e2832;
        }

        .profile-card-5 .profile-icons .fa {
            margin: 7px;
            color: #4fb96e;
        }

        .profile-card-5:hover img {
            transform: rotate(-5deg);
        }

        .profile-card-6 {
            max-width: 300px;
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
        }

        .profile-card-6 img {
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-name {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 25px;
            font-weight: bold;
            color: #FFF;
            padding: 15px 20px;
            background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-position {
            position: absolute;
            color: rgba(255, 255, 255, 0.4);
            left: 30px;
            top: 100px;
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-overview {
            position: absolute;
            bottom: 0px;
            left: 0px;
            right: 0px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0));
            color: #FFF;
            padding: 50px 0px 20px 0px;
            transition: all 0.15s linear;
        }

        .profile-card-6 .profile-overview h3 {
            font-weight: bold;
        }

        .profile-card-6 .profile-overview p {
            color: rgba(255, 255, 255, 0.7);
        }

        .profile-card-6:hover img {
            filter: brightness(80%);
        }

        .profile-card-6:hover .profile-name {
            padding-left: 25px;
            padding-top: 20px;
        }

        .profile-card-6:hover .profile-position {
            left: 40px;
        }

        .profile-card-6:hover .profile-overview {
            padding-bottom: 25px;
        }

        .profile-card-7 {
            background-color: #FFF;
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
        }

        .profile-card-7 .profile-content {
            padding: 60px 30px 30px 30px;
            background-color: #FFF;
            position: relative;
        }

        .profile-card-7 .profile-content img {
            position: absolute;
            height: 80px;
            width: 80px;
            border-radius: 50%;
            top: -40px;
            border: 5px solid #FFF;
        }

        .profile-card-7 .profile-content .profile-name {
            position: absolute;
            font-size: 17px;
            font-weight: bold;
            top: -35px;
            left: 125px;
            color: #FFF;
        }

        .profile-card-7 .profile-overview {
            padding: 5px 0px;
        }

        .profile-card-7 .profile-overview p {
            color: #777;
            font-size: 11px;
            font-weight: 600;
        }

        .profile-card-7 .profile-overview h5 {
            color: #142437;
            font-weight: bold;
        }

        .profile-card-8 {
            background: linear-gradient(#09121c, #36445a);
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            transition: all 0.25s linear;
        }

        .profile-card-8 .profile-name {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 25px;
            color: #58d683;
            font-size: 17px;
            font-weight: bold;
        }

        .profile-card-8 .profile-designation {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 50px;
            color: #FFF;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .profile-card-8 .profile-icons {
            position: absolute;
            left: 0px;
            right: 0px;
            top: 80px;
            color: rgba(255, 255, 255, 0.7);
        }

        .profile-card-8 .profile-icons .fa {
            margin: 5px;
        }

        .profile-card-8:hover {
            transform: scale(1.05, 1.05);
        }

        .profile-card-9 {
            border-radius: 10px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 30px 15px;
            background-color: #FFF;
            transition: all 0.25s linear;
        }

        .profile-card-9 img {
            height: 120px;
            width: 120px;
            border-radius: 50%;
            margin: 10px auto;
        }

        .profile-card-9 .profile-name {
            font-size: 15px;
            color: #3249b9;
            font-weight: 600;
        }

        .profile-card-9 .profile-designation {
            font-size: 13px;
            color: #777;
        }

        .profile-card-9 .profile-description {
            padding: 10px;
            font-size: 13px;
            color: #777;
            margin: 15px 0px;
            background-color: #F1F2F3;
            border-radius: 5px;
        }

        .profile-card-9 a {
            padding: 10px 15px;
            background-color: #3249b9;
            color: #FFF;
            font-size: 11px;
            border-radius: 25px;
        }

        .profile-card-9:hover {
            transform: scale(1.05, 1.05);
        }

        .profile-card-10 {
            border-radius: 5px;
            box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            margin: 10px auto;
            cursor: pointer;
            padding: 30px 15px;
            background-color: #1f2124;
            color: #EEE;
        }

        .profile-card-10 img {
            margin: 10px auto;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 10px solid transparent;
            box-shadow: 0px 0px 0px 2px #64c17b;
            transition: all 0.25s linear;
        }

        .profile-card-10 .profile-name {
            color: #FFF;
            font-weight: bold;
            font-size: 17px;
        }

        .profile-card-10 .profile-location {
            font-size: 13px;
            opacity: 0.7;
        }

        .profile-card-10 .profile-description {
            padding: 10px;
            font-size: 13px;
        }

        .profile-card-10 .profile-icons .fa {
            color: #ffc75e;
            margin: 10px;
        }

        .profile-card-10:hover img {
            transform: scale(1.1);
        }
    </style>

    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
</head>

<body>

    {{-- <div class="m-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a href="/" class="navbar-brand">Code de Route</a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="/" class="nav-item nav-link active">Home</a>

                        <a href="/quiz" class="nav-item nav-link">Quiz</a>

                        <a href="/courses" class="nav-item nav-link">Courses</a>
                    </div>
                    <div class="navbar-nav ms-auto">
                        <a href="/admin" class="nav-item nav-link">Admin</a>
                    </div>
                </div>
            </div>
        </nav>

    </div> --}}

    <nav class="navbar navbar-expand-lg bg-light py-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Code de Route</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/quiz">Quiz</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/courses">Courses</a>
                    </li>

                    {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    @yield('content')
    @yield('coursecategory')


</body>

</html>
