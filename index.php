<?php
include("includes/db.php");
include("includes/header.php");

$sorgu = $conn->query("SELECT * FROM hizmetler WHERE durum = 1 LIMIT 6");
$hizmetler = $sorgu->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="hero text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Güzelliğinize Profesyonel Dokunuş</h1>
<p class="lead">Cilt bakımı, lazer epilasyon, kaş tasarımı ve daha fazlası</p>
<a href="randevu.php" class="btn btn-light btn-lg mt-3">Randevu Oluştur</a>
    </div>
</div>

<h2 class="section-title text-center">Öne Çıkan Hizmetlerimiz</h2>

<?php
$hizmetResimleri = [
    "https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=80",
    "https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80",
    "https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=800&q=80",
    "https://images.unsplash.com/photo-1604654894610-df63bc536371?auto=format&fit=crop&w=800&q=80",
    "https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&w=800&q=80",
    "https://images.unsplash.com/photo-1560066984-138dadb4c035?auto=format&fit=crop&w=800&q=80"
];

$i = 0;
?>

<div class="row">
    <?php foreach($hizmetler as $hizmet): ?>
        <div class="col-md-4 mb-4">
            <div class="card custom-card service-card h-100">

                <img src="<?= $hizmetResimleri[$i % count($hizmetResimleri)] ?>" 
                     class="card-img-top service-img" 
                     alt="<?= $hizmet["baslik"] ?>">

                <div class="card-body">
                    <h4 class="card-title"><?= $hizmet["baslik"] ?></h4>
                    <p class="card-text"><?= $hizmet["aciklama"] ?></p>
                    <p class="fw-bold text-danger"><?= $hizmet["fiyat"] ?> TL</p>
                    <a href="randevu.php" class="btn btn-pink">Randevu Al</a>
                </div>

            </div>
        </div>
    <?php $i++; endforeach; ?>
</div>

<section class="why-section mt-5">
    <div class="container">
        <h2 class="section-title text-center">Neden Bizi Seçmelisiniz?</h2>
        <p class="text-center mb-5">
            Duygu Beauty Center olarak müşteri memnuniyeti ve kaliteli hizmet anlayışıyla çalışıyoruz.
        </p>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="why-card">
                    <h3>01</h3>
                    <h5>Uzman Kadro</h5>
                    <p>Alanında deneyimli ekibimizle profesyonel bakım hizmeti sunuyoruz.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="why-card">
                    <h3>02</h3>
                    <h5>Hijyenik Ortam</h5>
                    <p>Tüm işlemler hijyen kurallarına uygun şekilde gerçekleştirilmektedir.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="why-card">
                    <h3>03</h3>
                    <h5>Modern Uygulamalar</h5>
                    <p>Güncel bakım teknikleri ve modern uygulamalar kullanılmaktadır.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="why-card">
                    <h3>04</h3>
                    <h5>Kolay Randevu</h5>
                    <p>Kullanıcılar web sitesi üzerinden kolayca randevu talebi oluşturabilir.</p>
                </div>
            </div>

        </div>
    </div>
</section>
    
<section class="comments-section mt-5">
    <h2 class="section-title text-center">Müşteri Yorumları</h2>
    <p class="text-center mb-5">
        Merkezimizi tercih eden müşterilerimizin görüşleri
    </p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="comment-card">
                <p>
                    “Cilt bakımı hizmetinden çok memnun kaldım. Ortam temiz ve çalışanlar oldukça ilgiliydi.”
                </p>
                <h5>Ayşe K.</h5>
                <span>Cilt Bakımı</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="comment-card">
                <p>
                    “Randevu sistemi sayesinde kolayca işlem talebi oluşturdum. Hizmet kalitesi gayet iyiydi.”
                </p>
                <h5>Elif T.</h5>
                <span>Randevu Hizmeti</span>
            </div>
        </div>

        <div class="col-md-4">
            <div class="comment-card">
                <p>
                    “Kaş tasarımı işleminden sonra çok doğal bir görünüm elde ettim. Tavsiye ederim.”
                </p>
                <h5>Zeynep A.</h5>
                <span>Kaş Tasarımı</span>
            </div>
        </div>

    </div>
</section>

<section class="faq-section mt-5">
    <h2 class="section-title text-center">Sık Sorulan Sorular</h2>

    <div class="accordion mt-4" id="faqAccordion">

        <div class="accordion-item">
            <h2 class="accordion-header" id="faqOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne">
                    Randevu nasıl oluşturabilirim?
                </button>
            </h2>
            <div id="faqCollapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Randevu sayfasından ad soyad, telefon ve mesaj bilgilerinizi girerek randevu talebi oluşturabilirsiniz.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faqTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo">
                    Hizmet fiyatlarını nereden görebilirim?
                </button>
            </h2>
            <div id="faqCollapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Ana sayfada ve hizmetler sayfasında hizmetlerin açıklama ve fiyat bilgilerini görebilirsiniz.
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="faqThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree">
                    Randevu talebim hemen onaylanır mı?
                </button>
            </h2>
            <div id="faqCollapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Randevu talebiniz merkeze iletilir. Uygunluk durumuna göre sizinle iletişime geçilebilir.
                </div>
            </div>
        </div>

    </div>
</section>

<section class="campaign-section mt-5">
    <div class="campaign-content">
        <span>Bu Aya Özel Kampanya</span>
        <h2>Cilt Bakımı ve Kaş Tasarımında Avantajlı Fırsatlar</h2>
        <p>
            Belirli hizmetlerde geçerli kampanyalarımızdan yararlanmak için hemen randevu oluşturabilirsiniz.
        </p>
        <a href="randevu.php" class="btn btn-light">Kampanyadan Yararlan</a>
    </div>
</section>
<h2 class="section-title text-center mt-5">Galeri</h2>

<div class="row g-4 mt-3">
    <div class="col-md-3 col-6">
        <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?auto=format&fit=crop&w=800&q=80" 
             class="gallery-img" 
             alt="Güzellik Merkezi">
    </div>

    <div class="col-md-3 col-6">
        <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=80" 
             class="gallery-img" 
             alt="Cilt Bakımı">
    </div>

    <div class="col-md-3 col-6">
        <img src="https://images.unsplash.com/photo-1562322140-8baeececf3df?auto=format&fit=crop&w=800&q=80" 
             class="gallery-img" 
             alt="Saç Bakımı">
    </div>

    <div class="col-md-3 col-6">
        <img src="https://images.unsplash.com/photo-1487412947147-5cebf100ffc2?auto=format&fit=crop&w=800&q=80" 
             class="gallery-img" 
             alt="Makyaj">
    </div>
</div>

<h2 class="section-title text-center mt-5">Blog</h2>

<div class="row g-4 mt-3">

    <div class="col-md-4">
        <div class="card custom-card h-100">
            <img src="https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?auto=format&fit=crop&w=800&q=80" 
                 class="card-img-top blog-img" 
                 alt="Cilt Bakımı">

            <div class="card-body">
                <h4 class="card-title">Cilt Bakımı Neden Önemlidir?</h4>
                <p class="card-text">
                    Düzenli cilt bakımı, cildin daha sağlıklı, temiz ve canlı görünmesine yardımcı olur.
                </p>
                <a href="blog.php" class="btn btn-pink">Devamını Oku</a>
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
                <p class="card-text">
                    Saç tipine uygun bakım ürünleri kullanmak saçların daha güçlü görünmesini sağlar.
                </p>
                <a href="blog.php" class="btn btn-pink">Devamını Oku</a>
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
                <p class="card-text">
                    Cilt tonuna ve yüz tipine uygun makyaj seçimi daha doğal ve estetik bir görünüm sağlar.
                </p>
                <a href="blog.php" class="btn btn-pink">Devamını Oku</a>
            </div>
        </div>
    </div>

</div>

<section class="modern-contact mt-5">
    <div class="contact-overlay">
        <div class="container">

            <div class="text-center mb-5">
                <span class="contact-small-title">Bize Ulaşın</span>
                <h2 class="contact-main-title">Güzelliğiniz İçin İlk Adımı Atın</h2>
                <p class="contact-desc">
                    Randevu almak, hizmetlerimiz hakkında bilgi edinmek veya bize soru sormak için
                    aşağıdaki iletişim kanallarını kullanabilirsiniz.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="modern-contact-card">
                        <div class="contact-icon">☎</div>
                        <h5>Telefon</h5>
                        <p>Bizimle hızlıca iletişime geçin.</p>
                        <a href="tel:+905551112233">+90 555 111 22 33</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="modern-contact-card">
                        <div class="contact-icon">✉</div>
                        <h5>E-posta</h5>
                        <p>Sorularınız için mail gönderebilirsiniz.</p>
                        <a href="mailto:info@guzellikmerkezi.com">info@guzellikmerkezi.com</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="modern-contact-card">
                        <div class="contact-icon">📍</div>
                        <h5>Adres</h5>
                        <p>Merkezimizi ziyaret edebilirsiniz.</p>
                        <a href="iletisim.php">İstanbul / Türkiye</a>
                    </div>
                </div>

            </div>

            <div class="contact-action-box mt-5">
                <div>
                    <h4>Size En Uygun Bakım İçin Randevu Oluşturun</h4>
                    <p>Uzman ekibimiz size en uygun hizmeti sunmak için hazır.</p>
                </div>

                <div class="contact-buttons">
                    <a href="randevu.php" class="btn btn-contact-primary">Randevu Al</a>
                    <a href="iletisim.php" class="btn btn-contact-light">İletişim Sayfası</a>
                </div>
            </div>

            <div class="text-center mt-4 social-area">
                <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                <a href="https://www.facebook.com/" target="_blank">Facebook</a>
                <a href="https://www.youtube.com/" target="_blank">YouTube</a>
            </div>

        </div>
    </div>
</section>

<div class="row mt-5">
    <div class="col-md-6">
        <div class="card custom-card p-4">
            <h3 class="section-title">Neden Biz?</h3>
            <p>Uzman kadromuz, hijyenik ortamımız ve modern uygulamalarımız ile müşterilerimize güvenli ve kaliteli hizmet sunuyoruz.</p>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card custom-card p-4">
            <h3 class="section-title">Hemen Randevu Oluştur</h3>
            <p>İhtiyacınıza uygun bakım hizmetini seçin, size en uygun zamanda randevu talebinizi oluşturun.</p>
            <a href="randevu.php" class="btn btn-pink">Randevu Sayfasına Git</a>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>