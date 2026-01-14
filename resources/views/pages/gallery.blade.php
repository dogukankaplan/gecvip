@extends('layouts.app')

@section('title', 'Galeri - GEC Kompost Makineleri')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1 class="page-header-title">Galeri</h1>
            <p class="page-header-subtitle">Video ve Fotoğraf Galerisi</p>
        </div>
    </section>

    <!-- Video Gallery -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Video</p>
                <h2 class="section-title">Video Galeri</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/video-thumb-1.jpg') }}" alt="GEC Atık Su Çamuru Kompostlama">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/video-thumb-2.jpg') }}" alt="CM5 Test Çalışması">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/video-thumb-3.jpg') }}" alt="CM15 Test Çalışması">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Test Run Videos -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Test Çalışmaları</p>
                <h2 class="section-title">Makine Test Çalışmaları</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/test-cm5.jpg') }}" alt="CM5 Test Çalışması">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/test-chicken.jpg') }}" alt="CM5 (Tavuk Gübresi)">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/test-cm15.jpg') }}" alt="CM15 (Çamur)">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-play-circle"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Fotoğraflar</p>
                <h2 class="section-title">Fotoğraf Galeri</h2>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/photo-1.jpg') }}" alt="BCM 50 Saha Kurulumu">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/photo-2.jpg') }}" alt="BRM-5000 Saha Kurulumu">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/photo-3.jpg') }}" alt="GEC Bio Çamur Kompostlama">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/photo-4.jpg') }}" alt="Kompost Sonucu">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/photo-5.jpg') }}" alt="Makine İç Görünüm">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/photo-6.jpg') }}" alt="Kurulum Süreci">
                    <div class="gallery-item-overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Ürünlerimizi Yerinde Görmek İster Misiniz?</h2>
                <p class="section-text">Demo için bizimle iletişime geçin.</p>
                <div style="margin-top: 30px;">
                    <a href="{{ route('contact') }}" class="btn btn-primary">İletişim</a>
                </div>
            </div>
        </div>
    </section>
@endsection