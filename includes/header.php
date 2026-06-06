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

        .service-card {
    overflow: hidden;
}

.service-img {
    height: 230px;
    object-fit: cover;
    transition: 0.4s;
}

.service-card:hover .service-img {
    transform: scale(1.06);
}
.why-section {
    padding: 30px 0;
}

.why-card {
    background: white;
    padding: 28px;
    border-radius: 18px;
    height: 100%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.why-card:hover {
    transform: translateY(-7px);
}

.why-card h3 {
    color: #e75480;
    font-weight: 800;
    font-size: 34px;
}

.why-card h5 {
    color: #c2185b;
    font-weight: 700;
    margin-top: 10px;
}

.why-card p {
    color: #666;
    margin-bottom: 0;
}

.campaign-section {
    background: linear-gradient(135deg, rgba(232, 80, 130, 0.90), rgba(255, 120, 170, 0.90)),
                url("https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?auto=format&fit=crop&w=1400&q=80");
    background-size: cover;
    background-position: center;
    border-radius: 28px;
    color: white;
    padding: 70px 40px;
    text-align: center;
}

.campaign-content span {
    background: rgba(255,255,255,0.22);
    padding: 8px 20px;
    border-radius: 30px;
    font-weight: 600;
}

.campaign-content h2 {
    font-size: 34px;
    font-weight: 800;
    margin-top: 22px;
}

.campaign-content p {
    max-width: 700px;
    margin: 15px auto 25px auto;
    font-size: 17px;
}

.comment-card {
    background: white;
    padding: 30px;
    border-radius: 18px;
    height: 100%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-left: 5px solid #e75480;
}

.comment-card p {
    color: #555;
    font-style: italic;
}

.comment-card h5 {
    color: #c2185b;
    font-weight: 700;
    margin-bottom: 3px;
}

.comment-card span {
    color: #777;
    font-size: 14px;
}

.faq-section {
    background: white;
    padding: 40px;
    border-radius: 24px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    margin-bottom: 50px;
}

.accordion-button {
    font-weight: 600;
    color: #c2185b;
}

.accordion-button:not(.collapsed) {
    background-color: #fce4ec;
    color: #c2185b;
}
.service-card .card-body {
    padding: 25px;
}

.service-card .card-title {
    color: #c2185b;
    font-weight: 700;
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
         .modern-contact {
    background: linear-gradient(135deg, #f857a6, #ff5858);
    border-radius: 30px;
    margin-bottom: 50px;
    overflow: hidden;
    color: white;
}

.contact-overlay {
    background: rgba(0, 0, 0, 0.10);
    padding: 70px 30px;
}

.contact-small-title {
    background: rgba(255, 255, 255, 0.20);
    padding: 8px 18px;
    border-radius: 30px;
    font-size: 14px;
    letter-spacing: 1px;
}

.contact-main-title {
    font-size: 38px;
    font-weight: 800;
    margin-top: 18px;
    margin-bottom: 15px;
}

.contact-desc {
    max-width: 700px;
    margin: auto;
    font-size: 17px;
    opacity: 0.95;
}

.modern-contact-card {
    background: white;
    color: #333;
    padding: 35px 25px;
    border-radius: 22px;
    text-align: center;
    height: 100%;
    box-shadow: 0 15px 35px rgba(0,0,0,0.18);
    transition: 0.3s;
}

.modern-contact-card:hover {
    transform: translateY(-8px);
}

.contact-icon {
    width: 65px;
    height: 65px;
    background: #fff0f7;
    color: #d63384;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 18px auto;
    font-size: 28px;
}

.modern-contact-card h5 {
    color: #c2185b;
    font-weight: 700;
    margin-bottom: 12px;
}

.modern-contact-card p {
    color: #666;
    margin-bottom: 10px;
}

.modern-contact-card a {
    color: #d63384;
    font-weight: 600;
    text-decoration: none;
}

.contact-action-box {
    background: rgba(255, 255, 255, 0.18);
    border: 1px solid rgba(255, 255, 255, 0.30);
    border-radius: 22px;
    padding: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 25px;
}

.contact-action-box h4 {
    font-weight: 700;
    margin-bottom: 8px;
}

.contact-action-box p {
    margin-bottom: 0;
    opacity: 0.95;
}

.contact-buttons {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
}

.btn-contact-primary {
    background: white;
    color: #d63384;
    border: none;
    font-weight: 700;
    padding: 12px 24px;
    border-radius: 30px;
}

.btn-contact-primary:hover {
    background: #ffe3ef;
    color: #b42a6f;
}

.btn-contact-light {
    background: transparent;
    color: white;
    border: 2px solid white;
    font-weight: 700;
    padding: 10px 22px;
    border-radius: 30px;
}

.btn-contact-light:hover {
    background: white;
    color: #d63384;
}

.social-area a {
    color: white;
    text-decoration: none;
    margin: 0 12px;
    font-weight: 600;
}

.social-area a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    .contact-main-title {
        font-size: 28px;
    }

    .contact-action-box {
        flex-direction: column;
        text-align: center;
    }

    .contact-buttons {
        justify-content: center;
    }
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
                
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>

            </ul>
        </div>

    </div>
</nav>

<div class="container mt-4">