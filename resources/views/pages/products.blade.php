@extends('layouts.app')

@section('title', 'Ürünlerimiz - GEC Kompost Makineleri')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1 class="page-header-title">GEC Kompost Makinesi</h1>
            <p class="page-header-subtitle">Ürünlerimizi Keşfedin</p>
        </div>
    </section>

    <!-- Product Intro -->
    <section class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-content">
                    <p class="section-subtitle">Ürünlerimiz</p>
                    <h3>Tam Otomatik Kompost Makinesi</h3>
                    <p>"GEC kompost makinesi, konut, ticari ve endüstriyel dahil tüm alanları kapsayan atık yönetimi için
                        çeşitli ihtiyaçlara yanıt veren tam otomatik bir kompost makinesidir."</p>
                    <p>Ürün yelpazemiz, büyük veya küçük işletmenizin kompostlama ihtiyaçlarını karşılamak için geniş bir
                        hacim kapasitesi sunmaktadır.</p>
                    <a href="{{ route('gallery') }}" class="btn btn-primary">Makine Test Videosu</a>
                </div>
                <div class="about-image">
                    <img src="{{ asset('images/products/machine-demo.jpg') }}" alt="GEC Kompost Makinesi">
                </div>
            </div>
        </div>
    </section>

    <!-- Product Catalogue -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Katalog</p>
                <h2 class="section-title">Ürün Kataloğumuz</h2>
            </div>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-5.jpg') }}" alt="BCM-5">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-5</h3>
                        <p class="product-card-text">Küçük işletmeler için ideal. Günlük 5kg kapasiteli kompakt tasarım.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-50.jpg') }}" alt="BCM-50 (Ön Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-50 (Ön Görünüm)</h3>
                        <p class="product-card-text">Orta ölçekli işletmeler için. Günlük 50kg kapasiteli.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-50-back.jpg') }}" alt="BCM-50 (Arka Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-50 (Arka Görünüm)</h3>
                        <p class="product-card-text">Ergonomik tasarım ile kolay kullanım.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-100.jpg') }}" alt="BCM-100 (Arka Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-100 (Arka Görünüm)</h3>
                        <p class="product-card-text">Yüksek kapasite. Günlük 100kg işleme kapasitesi.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/bcm-300.jpg') }}" alt="BCM-300 (Ön Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">BCM-300 (Ön Görünüm)</h3>
                        <p class="product-card-text">Endüstriyel çözüm. Günlük 300kg kapasiteli.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/cm-100.jpg') }}" alt="CM-100 (Ön Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">CM-100 (Ön Görünüm)</h3>
                        <p class="product-card-text">Profesyonel seri. Yüksek verimlilik.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/cm-300.jpg') }}" alt="CM-300 (Ön Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">CM-300 (Ön Görünüm)</h3>
                        <p class="product-card-text">Büyük tesisler için ideal çözüm.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-card-image">
                        <img src="{{ asset('images/products/cm-500.jpg') }}" alt="CM-500 (Ön Görünüm)">
                    </div>
                    <div class="product-card-content">
                        <h3 class="product-card-title">CM-500 (Ön Görünüm)</h3>
                        <p class="product-card-text">En yüksek kapasite. Günlük 500kg işleme.</p>
                        <a href="{{ route('contact') }}" class="btn btn-dark" style="margin-top: 10px;">Bilgi Al</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CE Certificate -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Sertifikasyon</p>
                <h2 class="section-title">CE Sertifikası</h2>
                <p class="section-text">Ürünlerimiz uluslararası standartlara uygun olarak CE sertifikalıdır.</p>
            </div>
            <div style="text-align: center;">
                <img src="{{ asset('images/ce-certificate.jpg') }}" alt="CE Sertifikası"
                    style="max-width: 600px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Bizimle İletişime Geçin</h2>
                <p class="section-text">Ürünlerimiz hakkında daha fazla bilgi almak için bize ulaşın.</p>
                <div style="margin-top: 30px;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">İletişim</a>
                </div>
            </div>
        </div>
    </section>
@endsection