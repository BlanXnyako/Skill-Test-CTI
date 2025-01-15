<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <title>Document</title>
    <link rel="stylesheet" href="{{ secure_asset('bootstrap-5.3.3-dist/css/bootstrap.min.css')}}">
</head>
<body>
    
    
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00008B">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white fw-bold" href="#">ID | EN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #F9FAFE;">
        <div class="container">
            <a class="navbar-brand my-3" href="#">
                <img src="images/logo1.png" class="mx-3" height="40" alt="Logo 1">
                <img src="images/logo2.png" class="mx-3" height="40" alt="Logo 2">
            </a>
        </div>
    </nav>

    <div class="container-fluid p-0">
        @yield('content')
    </div>
    
    <footer class="footer bottom-0 start-0 w-100 py-3 text-white bg-*" style="background-image: url('images/footer.png'); background-size: cover; background-position: center;">
        <div class="row h-100 align-items-center pl-5">
            <div class="col-md-6 text-container" style="padding-left: 10rem;">
                <h1 class="text-white fw-bold fs-3 mt-5">PT. Helios Informatika Nusantara</h1>
                <p class="text-white mt-4 fs-6">
                    Centennial Tower, 12th Floor,<br>
                    Jl. Jendral Gatot Subroto<br>
                    No. Kav 24-25, Jakarta<br>
                    12930 Indonesia
                </p>
                <p class="text-white mt-4 mb-4 fs-6">
                    Phone: +62 21 8062 2220<br>
                    Email: Tencent@helios.id
                </p>
                <div class="d-flex mb-5">
                    <img src="images/footericon1.png" alt="Facebook" style="margin-right: 5px; width: 25px; height:25px;">
                    <img src="images/footericon2.png" alt="Instagram" style="margin-right: 5px; width: 25px; height:25px;">
                    <img src="images/footericon3.png" alt="Twitter" style="margin-right: 5px; width: 25px; height:25px;">
                    <img src="images/footericon4.png" alt="YouTube" style="margin-right: 5px; width: 25px; height:25px;">
                    <img src="images/footericon5.png" alt="LinkedIn" style="margin-right: 5px; width: 25px; height:25px;">
                </div>
            </div>
        </div>
    </footer>

    <footer class="footer bottom-0 start-0 w-100 py-3 text-white" style="background-color: #00008B;">
        <div class="container text-center mt-2">
            <p>© 2023 - PT. Helios Informatika Nusantara - All Right Reserved</p>
        </div>
    </footer>


    <script src="{{ secure_asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
