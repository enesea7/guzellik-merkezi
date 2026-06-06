<?php
include("includes/db.php");
include("includes/header.php");
?>

<h1 class="section-title text-center">Blog</h1>
<p class="text-center mb-5">
    Güzellik, bakım ve sağlıklı yaşam hakkında faydalı yazılar
</p>

<div class="row g-4">

    <div class="col-md-4">
        <div class="card custom-card h-100">
            <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=80" 
                 class="card-img-top blog-img" 
                 alt="Cilt Bakımı">

            <div class="card-body">
                <h4 class="card-title">Cilt Bakımı Neden Önemlidir?</h4>
                <p>
                    Cilt bakımı, cildin temizlenmesi, nemlendirilmesi ve dış etkenlere karşı korunması açısından önemlidir.
                    Düzenli bakım sayesinde cilt daha sağlıklı, parlak ve canlı bir görünüm kazanabilir.
                </p>
                <p class="text-muted">Yayın Tarihi: 10 Mayıs 2026</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card custom-card h-100">
            <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?auto=format&fit=crop&w=800&q=80" 
                 class="card-img-top blog-img" 
                 alt="Saç Bakımı">

            <div class="card-body">
                <h4 class="card-title">Saç Bakımında Dikkat Edilmesi Gerekenler</h4>
                <p>
                    Saç bakımında saç tipine uygun ürünler tercih edilmelidir.
                    Düzenli bakım, saçların daha güçlü, parlak ve sağlıklı görünmesine yardımcı olur.
                </p>
                <p class="text-muted">Yayın Tarihi: 12 Mayıs 2026</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card custom-card h-100">
            <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=800&q=80" 
                 class="card-img-top blog-img" 
                 alt="Makyaj">

            <div class="card-body">
                <h4 class="card-title">Doğru Makyaj Seçimi</h4>
                <p>
                    Makyaj seçimi yapılırken cilt tonu, yüz tipi ve kullanılacak ortam dikkate alınmalıdır.
                    Doğru makyaj uygulaması kişinin daha doğal ve estetik görünmesini sağlar.
                </p>
                <p class="text-muted">Yayın Tarihi: 15 Mayıs 2026</p>
            </div>
        </div>
    </div>

</div>

<?php include("includes/footer.php"); ?>