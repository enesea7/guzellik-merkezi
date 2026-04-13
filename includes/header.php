<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duygu Beauty</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background:#fff8fb;
        }

        .navbar{
            background: linear-gradient(90deg, #e75480, #ff8fb1);
        }

        .navbar-brand{
            color:white !important;
            font-weight:700;
            font-size:20px;
        }

        .nav-link{
            color:white !important;
            font-weight:500;
        }

        .hero{
            background: linear-gradient(rgba(231,84,128,0.75), rgba(255,143,177,0.75)),
                        url('https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=1400&q=80');
            background-size:cover;
            background-position:center;
            color:white;
            padding:100px 20px;
            border-radius:0 0 30px 30px;
            margin-bottom:40px;
        }

        .section-title{
            font-weight:700;
            color:#c2185b;
            margin-bottom:20px;
        }

        .custom-card{
            border:none;
            border-radius:20px;
            box-shadow:0 8px 25px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .custom-card:hover{
            transform:translateY(-5px);
        }

        .btn-pink{
            background:#e75480;
            color:white;
            border:none;
        }

        .btn-pink:hover{
            background:#d63d6c;
            color:white;
        }

        footer{
            background:#fff0f5;
            padding:25px 0;
            margin-top:50px;
            border-top:1px solid #f3c6d3;
        }

        .navbar .container{
            align-items:center;
        }

        .navbar-nav .nav-link{
            padding-left:15px;
            padding-right:15px;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="index.php">DUYGU BEAUTY CENTER</a>

        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="hizmetler.php">Hizmetler</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="uzmanlar.php">Uzmanlar</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="randevu.php">Randevu</a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="container mt-4">