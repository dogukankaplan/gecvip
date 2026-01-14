@extends('layouts.app')

@section('title', 'Teknolojimiz - GEC Kompost Makineleri')

@section('content')
    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1 class="page-header-title">Teknolojimiz</h1>
            <p class="page-header-subtitle">GEC Teknolojisini Tanıyın</p>
        </div>
    </section>

    <!-- Technology Intro -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Teknolojimiz</p>
                <h2 class="section-title">Teknolojimizi Biliyor Musunuz?</h2>
            </div>

            <div class="tech-content">
                <div class="tech-image">
                    <img src="{{ asset('images/technology/composting-process.jpg') }}" alt="Kompostlama Süreci">
                </div>
                <div class="tech-text">
                    <h3>Geleneksel Kompostlama</h3>
                    <p>Geleneksel Kompostlama sisteminde, mutfak atığı, bahçe atığı, hayvan gübresi ve atık su çamuru gibi
                        organik atıklar, 3 ay ila 6 aylık bir süre sonunda kompost adı verilen bir madde oluşturmak için
                        mikrop kullanılarak fermente edilirdi.</p>
                    <p>Kompost daha sonra toprak iyileştirici veya gübre olarak kullanılır. Son birkaç on yılda, bilim
                        insanları kompostlama sürecini iyileştirmeye çalıştı; sıradan kompostlama süreci ve kap içi
                        kompostlama süreci gibi işlemler icat edildi, ancak makine ve mikrop formülasyonunun sınırlamaları
                        nedeniyle bu işlemler hala önemli bir iyileşme sağlayamadı.</p>
                </div>
            </div>

            <div class="tech-content reverse">
                <div class="tech-image">
                    <img src="{{ asset('images/technology/current-machines.jpg') }}" alt="Mevcut Makineler">
                </div>
                <div class="tech-text">
                    <h3>Mevcut Piyasa Durumu</h3>
                    <p>Şu anda piyasada sağlanan makineler yalnızca mutfak atıklarının komposta işlenmesiyle ilgileniyor ve
                        işleme süresi 3 hafta – 6 hafta sürüyor.</p>
                    <p>Mutfak atığını komposta dönüştürmek için işlemden gerekli sonucu elde etmek için diğer kimyasal
                        maddelerin ilavesiyle susuzlaştırma ekipmanı, kırıcı ve kurutucu gibi destekleyici makinelerin
                        kullanılması gerekiyordu. Bahçe atıkları, hayvan gübresi ve özellikle atık su çamuru mevcut
                        makineler tarafından işlenemiyor ve sağlanan makinelerin boyutu da küçük hacimli bir kurulumla
                        sınırlıydı.</p>
                </div>
            </div>

            <div class="tech-content">
                <div class="tech-image">
                    <img src="{{ asset('images/technology/gec-machine.jpg') }}" alt="GEC Makinesi">
                </div>
                <div class="tech-text">
                    <h3>GEC 24 Saat Organik Atık Kompost Makinesi</h3>
                    <p>GEC 24 saat Organik Atık Kompost Makinesi, Hiper Termofilik Mikropları kullanmak ve atığı sterilize
                        etmek ve Mikropları aktive etmek için 75°C ile 125°C arasında aşırı bir sıcaklıkta çalışmak üzere
                        tasarlanmıştır.</p>
                    <p>Yeterli nem, hava ve sıcaklık ile Hiper Termofilik Mikroplar, atığın aerobik fermantasyon sürecinin
                        verimli ve çok kısa bir sürede tamamlanmasını sağlayacaktır.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Patent Certificate -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">Sertifikasyon</p>
                <h2 class="section-title">Patent Sertifikamız</h2>
            </div>
            <div style="text-align: center;">
                <img src="{{ asset('images/patent-certificate.jpg') }}" alt="Patent Sertifikası"
                    style="max-width: 500px; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
            </div>
        </div>
    </section>

    <!-- Consultant -->
    <section class="section">
        <div class="container">
            <div class="about-grid">
                <div class="about-image">
                    <img src="{{ asset('images/consultant.jpg') }}" alt="Dr. Zalina">
                </div>
                <div class="about-content">
                    <p class="section-subtitle">Proje Danışmanı</p>
                    <h3>Doç. Dr. Zalina</h3>
                    <p style="font-size: 14px; color: #666; margin-bottom: 15px;">Sultan Idris Eğitim Üniversitesi</p>
                    <p>Elektronik ve Elektrik Mühendisliği, Bilgi Teknolojisi, Gömülü Sistemler, Endüstri Yaratıcılığı ve Ağ
                        alanında öğretim görevlisi ve aktif araştırmacı olarak 18 yılı aşkın profesyonel öğretim deneyimine
                        sahiptir.</p>
                    <p>Araştırma projeleri, yeni fikirlere ve somut araştırma projelerine yol açan bir ağa katkıda bulunan
                        çok uluslu şirketlerle işbirliği içinde yürütülmüştür. Sensör İzleme, Gömülü Sistem, Yazılım, IoT ve
                        Kablosuz İletişim alanlarına odaklanan geliştirilen otomasyon projeleri bugüne kadar sanayi
                        tarafından başarıyla benimsenmiştir.</p>
                    <p>Araştırma ve bilimsel çıktıları çok sayıda ödül, yayın ve patente dönüştürülmüştür.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section class="section section-gray">
        <div class="container">
            <div class="section-header">
                <p class="section-subtitle">İşbirlikleri</p>
                <h2 class="section-title">Üyelikler ve İşbirlikleri</h2>
            </div>
            <div style="display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; align-items: center;">
                <img src="{{ asset('images/partners/partner-1.png') }}" alt="Partner" style="height: 60px; opacity: 0.7;">
                <img src="{{ asset('images/partners/partner-2.png') }}" alt="Partner" style="height: 60px; opacity: 0.7;">
                <img src="{{ asset('images/partners/partner-3.png') }}" alt="Partner" style="height: 60px; opacity: 0.7;">
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="section section-dark">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Fotoğraf Galerimizi Görüntüleyin</h2>
                <p class="section-text">Makinelerimizi ve çalışma süreçlerini görmek için galeriyi ziyaret edin.</p>
                <div style="margin-top: 30px;">
                    <a href="{{ route('gallery') }}" class="btn btn-primary">Galeriye Git</a>
                </div>
            </div>
        </div>
    </section>
@endsection