@extends('layouts.app')

@section('title', 'İndir - GEC Kompost Makineleri')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1 class="page-header-title">İndir</h1>
            <p class="page-header-subtitle">Dökümanlar ve Kaynaklar</p>
        </div>
    </section>

    <!-- Downloads -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Kaynaklar</p>
                <h2 class="section-title">Döküman İndirme</h2>
                <p class="section-text">Ürünlerimiz hakkında detaylı bilgi içeren dökümanlarımızı indirebilirsiniz.</p>
            </div>
            <div class="download-grid">
                <div class="download-card">
                    <div class="download-card-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <h4>Ürün Kataloğu</h4>
                    <p>Tüm ürünlerimizin detaylı teknik özellikleri ve görsellerini içeren katalog.</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-download"></i> İndir
                    </a>
                </div>
                <div class="download-card">
                    <div class="download-card-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h4>Teknik Özellikler</h4>
                    <p>Makinelerimizin detaylı teknik spesifikasyonları ve karşılaştırma tablosu.</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-download"></i> İndir
                    </a>
                </div>
                <div class="download-card">
                    <div class="download-card-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4>Kullanım Kılavuzu</h4>
                    <p>Makinelerimizin kurulum ve kullanım talimatlarını içeren kılavuz.</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-download"></i> İndir
                    </a>
                </div>
                <div class="download-card">
                    <div class="download-card-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Sertifikalar</h4>
                    <p>CE ve diğer uluslararası sertifikalarımızın kopyaları.</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-download"></i> İndir
                    </a>
                </div>
                <div class="download-card">
                    <div class="download-card-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h4>Broşür</h4>
                    <p>Şirketimiz ve ürünlerimiz hakkında genel bilgi içeren broşür.</p>
                    <a href="#" class="btn btn-primary">
                        <i class="fas fa-download"></i> İndir
                    </a>
                </div>
                <div class="download-card">
                    <div class="download-card-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <h4>Tanıtım Videosu</h4>
                    <p>Ürünlerimizin çalışma prensiplerini gösteren video.</p>
                    <a href="{{ route('gallery') }}" class="btn btn-primary">
                        <i class="fas fa-play"></i> İzle
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Daha Fazla Bilgi Almak İster Misiniz?</h2>
                <p class="section-text">Özel talepleriniz için bizimle iletişime geçin.</p>
                <div style="margin-top: 30px;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">İletişim</a>
                </div>
            </div>
        </div>
    </section>
@endsection