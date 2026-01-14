@extends('layouts.app')

@section('title', 'Haberler - GEC Kompost Makineleri')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1 class="page-header-title">GEC Haberler</h1>
            <p class="page-header-subtitle">Son Gelişmeler ve Etkinlikler</p>
        </div>
    </section>

    <!-- News List -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">GEC Haberler</p>
                <h2 class="section-title">Haberlerimizi Görüntüleyin</h2>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/macao-2019.jpg') }}" alt="MISCF Macao 2019">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">MISCF, Makao 2019</h3>
                        <p class="news-card-excerpt">Bu yıllık yeşil platformda iş ve işbirliği için yer alıyoruz!
                            2019MIECF'nin Ana Teması: Ekolojik Uygarlık ve Yeşil Kalkınmayı Teşvik Etmek.</p>
                        <a href="#" class="news-card-link">Devamını Oku <i class="fas fa-arrow-right"></i></a>
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
                            2019. REW, uluslararası geri dönüşüm, çevre teknolojileri ve atık yönetimi ticaret fuarıdır.</p>
                        <a href="#" class="news-card-link">Devamını Oku <i class="fas fa-arrow-right"></i></a>
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
                            çözümler ve yenilikler için bir pazar yeri forumu. 6-7 Şubat 2019.</p>
                        <a href="#" class="news-card-link">Devamını Oku <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/unihabitat-2019.jpg') }}" alt="2019 Unihabitat">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">2019 Unihabitat</h3>
                        <p class="news-card-excerpt">Şu anda UNIHABITAT 1. Meclis'te teknolojimizi sergiliyoruz.
                            Teknolojimiz akıllı şehirler ve belediye katı atık yönetimi konusunda büyük ilgi görüyor.</p>
                        <a href="#" class="news-card-link">Devamını Oku <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/hofex-2019.jpg') }}" alt="2019 HOFEX HK">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">2019 HOFEX HK</h3>
                        <p class="news-card-excerpt">Son 32 yılda HOFEX, dünyanın dört bir yanından mutfak lezzetlerinin
                            olağanüstü yolculuklarına endüstriyi taşıyor.</p>
                        <a href="#" class="news-card-link">Devamını Oku <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-card">
                    <div class="news-card-image">
                        <img src="{{ asset('images/news/green-warrior-2019.jpg') }}" alt="Community Green Warrior 2019">
                    </div>
                    <div class="news-card-content">
                        <p class="news-card-date">2019</p>
                        <h3 class="news-card-title">"Topluluk Yeşil Savaşçısı 2019"</h3>
                        <p class="news-card-excerpt">Prof. Madya Dr Che Zalina Zulkifli'yi Seberang Perai Şehir Konseyi
                            tarafından "Topluluk Yeşil Savaşçısı" olarak ödüllendirildiği için tebrik ediyoruz.</p>
                        <a href="#" class="news-card-link">Devamını Oku <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Bizi Takip Edin</h2>
                <p class="section-text">En son haberler ve güncellemeler için sosyal medya hesaplarımızı takip edin.</p>
                <div class="social-links" style="justify-content: center; margin-top: 30px;">
                    <a href="#" target="_blank" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                    <a href="#" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection