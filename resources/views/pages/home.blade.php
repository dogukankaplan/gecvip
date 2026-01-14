@extends('layouts.app')

@section('title', 'GEC - Yeşil Girişim & Co | Kompost Makineleri')

@section('content')
    <!-- Hero Section -->
    <section class="hero hero-light">
        <div class="hero-content">
            <p class="hero-subtitle">Biliyor Muydunuz?</p>
            <h1 class="hero-title">Çöpümüzü<br>İsraf Ediyoruz</h1>
            <p class="hero-text">Restoranlardan büyük ölçekli kurumlara kadar çeşitli ticari kullanımlar için gıda atığı
                çözümleri sağlayıcısı.</p>
            <div class="hero-buttons">
                <a href="{{ route('products') }}" class="btn btn-primary">Kompost Makinesi</a>
                <a href="#products" class="btn btn-outline-dark">Ürünlerimiz</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="{{ asset('images/about-food-waste.jpg') }}" alt="Gıda Atığı">
                </div>
                <div class="about-content">
                    <p class="section-subtitle">Hakkımızda</p>
                    <h3>GEC</h3>
                    <p>Dünyada üretilen gıdaların yaklaşık 1,3 milyar tonu her yıl kaybolmakta veya israf edilmektedir.</p>
                    <p>GEC olarak, bu soruna yenilikçi kompost makinelerimizle çözüm sunuyoruz. Organik atıklarınızı 24 saat
                        içinde değerli gübreye dönüştürüyoruz.</p>
                    <a href="{{ route('technology') }}" class="btn btn-dark">Daha Fazla Bilgi</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Çöpümüzü İsraf Ediyoruz</h2>
                <p class="section-text">Gıda atığı yönetimi konusunda farkındalık yaratıyoruz.</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">1.3B</div>
                    <div class="stat-label">Ton Gıda İsrafı/Yıl</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">%30</div>
                    <div class="stat-label">Üretilen Gıdanın İsrafı</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24</div>
                    <div class="stat-label">Saat Kompost Süresi</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">%80</div>
                    <div class="stat-label">Hacim Azaltma</div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">GEC Haberler</p>
                <h2 class="section-title">Son Haberlerimiz</h2>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/macao-2019.jpg') }}" alt="MISCF Macao 2019">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">MISCF, Makao 2019</h3>
                        <p class="news-card-excerpt">Bu yıllık yeşil platformda iş ve işbirliği için yer alıyoruz! 2019
                            MIECF'nin Ana Teması: Ekolojik Uygarlık ve Yeşil Kalkınmayı Teşvik Etmek.</p>
                        <a href="{{ route('news') }}" class="news-card-link">Devamını Oku <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/istanbul-2019.jpg') }}" alt="REW Istanbul 2019">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">REW İstanbul 2019</h3>
                        <p class="news-card-excerpt">Geri dönüşüm, atık yönetimi ve çevre teknolojileri fuarı. 6-7 Şubat
                            2019. REW, uluslararası geri dönüşüm ve çevre teknolojileri fuarıdır.</p>
                        <a href="{{ route('news') }}" class="news-card-link">Devamını Oku <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/kisumu-2019.jpg') }}" alt="Kisumu 2019">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">Kisumu – Şubat 2019</h3>
                        <p class="news-card-excerpt">"Innovate 4 Water": Kentsel Su ve Sanitasyon için sürdürülebilir
                            çözümler ve yenilikler için bir pazar yeri forumu.</p>
                        <a href="{{ route('news') }}" class="news-card-link">Devamını Oku <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('news') }}" class="btn btn-dark">Tüm Haberleri Görüntüle</a>
            </div>
        </div>
    </section>

    <!-- Products Preview Section -->
    <section class="section" id="products">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Ürünlerimiz</p>
                <h2 class="section-title">Ürün Kataloğu</h2>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-5.jpg') }}" alt="BCM-5">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-5</h3>
                        <p class="product-card-text">Küçük işletmeler için ideal kompakt kompost makinesi.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-50.jpg') }}" alt="BCM-50">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-50</h3>
                        <p class="product-card-text">Orta ölçekli işletmeler için tasarlanmış kompost makinesi.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-100.jpg') }}" alt="BCM-100">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-100</h3>
                        <p class="product-card-text">Büyük kapasiteli endüstriyel kompost çözümü.</p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/cm-500.jpg') }}" alt="CM-500">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">CM-500</h3>
                        <p class="product-card-text">En yüksek kapasiteli profesyonel kompost makinesi.</p>
                    </div>
                </div>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ route('products') }}" class="btn btn-primary">Tüm Ürünleri İncele</a>
            </div>
        </div>
    </section>

    <!-- Industry Applications -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Uygulama Alanları</p>
                <h2 class="section-title">Endüstri Uygulamaları</h2>
            </div>
            <div class="industry-grid">
                <div class="industry-card">
                    <img src="{{ asset('images/industry/hotel.jpg') }}" alt="Otel / Resort">
                    <div class="industry-card-overlay">
                        <h4 class="industry-card-title">Otel / Resort</h4>
                    </div>
                </div>
                <div class="industry-card">
                    <img src="{{ asset('images/industry/restaurant.jpg') }}" alt="Restoranlar">
                    <div class="industry-card-overlay">
                        <h4 class="industry-card-title">Restoranlar / Kantinler</h4>
                    </div>
                </div>
                <div class="industry-card">
                    <img src="{{ asset('images/industry/shopping.jpg') }}" alt="AVM">
                    <div class="industry-card-overlay">
                        <h4 class="industry-card-title">AVM / Süpermarketler</h4>
                    </div>
                </div>
                <div class="industry-card">
                    <img src="{{ asset('images/industry/food-processing.jpg') }}" alt="Gıda İşleme">
                    <div class="industry-card-overlay">
                        <h4 class="industry-card-title">Gıda İşleme Tesisleri</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ürünlerimiz Hakkında Daha Fazla Bilgi Edinin!</h2>
                <p class="section-text">GEC kompost makineleri ile atıklarınızı değere dönüştürün.</p>
                <div style="margin-top: 30px;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">Bizimle İletişime Geçin</a>
                </div>
            </div>
        </div>
    </section>
@endsection