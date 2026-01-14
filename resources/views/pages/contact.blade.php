@extends('layouts.app')

@section('title', 'İletişim - GEC Kompost Makineleri')

@section('content')
    <!-- Page Header with World Map Background -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <h1 class="contact-hero-title">İletişim</h1>
        </div>
    </section>

    <!-- Strategic Partners Section -->
    <section class="section contact-map-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="font-style: italic;">Stratejik Ortaklar</h2>
            </div>
            <div class="map-image-wrapper">
                <img src="{{ asset('images/partners-map.png') }}" alt="Stratejik Ortaklar Haritası" class="map-image">
            </div>
        </div>
    </section>

    <!-- Contact List Section -->
    <section class="section section-gray contact-list-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="font-style: italic;">İletişim Listesi</h2>
            </div>

            <div class="contact-accordion-grid">
                <!-- Left Column -->
                <div class="contact-accordion-column">
                    <div class="contact-accordion pink">
                        <div class="contact-accordion-header">
                            <span>GEC INTEGRATION SDN BHD</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Joseph Wong</strong></p>
                            <p>2986-02, Kompleks Chai Leng,<br>Jalan Baru, 13700 Prai, Penang</p>
                        </div>
                    </div>

                    <div class="contact-accordion blue">
                        <div class="contact-accordion-header">
                            <span>ASYA VE OKYANUSYA ÜLKELERİ</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>William Wu</strong></p>
                            <p>World Champion Enterprise Limited<br>Room 1603, 16/F, Carnival Commercial Building,<br>No.18
                                Java Road, North Point, Hong Kong</p>
                        </div>
                    </div>

                    <div class="contact-accordion blue">
                        <div class="contact-accordion-header">
                            <span>BANGLADEŞ</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Shameem Ahmed</strong></p>
                            <p>SR Green Bangladesh<br>Nalvig Moulabipara, Nishatnagar,<br>Turaq, Dhaka-1230, Bangladesh</p>
                        </div>
                    </div>

                    <div class="contact-accordion orange">
                        <div class="contact-accordion-header">
                            <span>SRİ LANKA</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Jude Fernando</strong></p>
                            <p>Eco Green Holdings<br>205, Molpe Road, Molpe,<br>Moratuwa, Sri Lanka</p>
                        </div>
                    </div>

                    <div class="contact-accordion blue">
                        <div class="contact-accordion-header">
                            <span>SUDAN, GÜNEY AFRİKA</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Director: Nozipho Ndiweni</strong></p>
                            <p>Vikela Earth<br>1st Floor OUDE Bank Building, 8 Bird Street,<br>Stellenbosch, Western Cape,
                                7600, South Africa</p>
                        </div>
                    </div>

                    <div class="contact-accordion purple">
                        <div class="contact-accordion-header">
                            <span>AVRUPA VE ORTA DOĞU</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Jeffrey Tober</strong></p>
                            <p>Nouvo Green International<br>Cour Saint Antoine 3/21<br>4000 Liege, Belgium</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="contact-accordion-column">
                    <div class="contact-accordion blue">
                        <div class="contact-accordion-header">
                            <span>TÜRKİYE</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Mr. Taner</strong></p>
                            <p>Estem Danışmanlık Eğitim ve Sağlık Hizmetleri<br>Fsm Bulvarı, No: 58/1<br>Nilüfer, Bursa,
                                Türkiye</p>
                        </div>
                    </div>

                    <div class="contact-accordion purple">
                        <div class="contact-accordion-header">
                            <span>BİRLEŞİK KRALLIK</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Dr. Brian Sulaiman</strong></p>
                            <p>Dena NanoTech Limited<br>Beevor Street, Barnsley S71 1HN<br>South Yorkshire, United Kingdom
                            </p>
                        </div>
                    </div>

                    <div class="contact-accordion blue">
                        <div class="contact-accordion-header">
                            <span>AFRİKA</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Mr. Edwin Kamau</strong></p>
                            <p>ECoH Holding Ltd.<br>Kananie- Off Mombasa Road, Athi River.<br>Nairobi, Kenya</p>
                        </div>
                    </div>

                    <div class="contact-accordion green">
                        <div class="contact-accordion-header">
                            <span>ABD VE FİLİPİNLER</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>İletişim için bize ulaşın</strong></p>
                            <p>info@gec4green.com</p>
                        </div>
                    </div>

                    <div class="contact-accordion yellow">
                        <div class="contact-accordion-header">
                            <span>GÜNEY AMERİKA</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>İletişim için bize ulaşın</strong></p>
                            <p>info@gec4green.com</p>
                        </div>
                    </div>

                    <div class="contact-accordion orange">
                        <div class="contact-accordion-header">
                            <span>MALEZYA</span>
                            <i class="fas fa-plus"></i>
                        </div>
                        <div class="contact-accordion-content">
                            <p><strong>Datuk Tan</strong></p>
                            <p>ArusV Green Tech Sdn Bhd<br>Lot 6919, 51A, Jalan TU 43b,<br>Taman Tasik Utama, 75350 Melaka
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Customers Map Section -->
    <section class="section customers-map-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title" style="font-style: italic;">Müşteriler</h2>
            </div>
            <div class="map-image-wrapper">
                <img src="{{ asset('images/customers-map.png') }}" alt="Müşteriler Haritası" class="map-image">
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section contact-form-section">
        <div class="container">
            <div class="contact-form-wrapper">
                <form id="contactForm" class="contact-form-grid">
                    @csrf
                    <div class="form-group full-width">
                        <label for="name">Name: <span class="required">*</span></label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email: <span class="required">*</span></label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Cell Phone: <span class="required">*</span></label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter Phone Number"
                                required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="company">Company: <span class="required">*</span></label>
                            <input type="text" id="company" name="company" class="form-control" placeholder="Enter Company"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="country">Country: <span class="required">*</span></label>
                            <input type="text" id="country" name="country" class="form-control" placeholder="Enter Country"
                                required>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" class="form-control" rows="5"
                            placeholder="Enter Your Message"></textarea>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="btn btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection