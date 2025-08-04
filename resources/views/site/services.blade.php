@extends('site.layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
    <section class="section services" id="services">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up" data-aos-duration="800">خدمات ما</h2>
            <p class="section-description" data-aos="fade-up" data-aos-duration="800" data-aos-delay="150">
                ما با تخصص و تجربه در زمینه‌های مختلف، خدمات متنوعی را ارائه می‌دهیم تا نیازهای شما را پوشش دهیم.
            </p>
            <div class="services-container">
                <div class="service-card" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="200">
                    <div class="service-icon">
                        <!-- آیکون طراحی وب -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                    </div>
                    <h3 class="service-title">طراحی وبسایت</h3>
                    <p class="service-description">
                        طراحی و توسعه وبسایت‌های مدرن، واکنش‌گرا و کاربرپسند با استفاده از جدیدترین تکنولوژی‌ها.
                    </p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="350">
                    <div class="service-icon">
                        <!-- آیکون اپلیکیشن موبایل -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12" y2="18"></line>
                        </svg>
                    </div>
                    <h3 class="service-title">توسعه اپلیکیشن موبایل</h3>
                    <p class="service-description">
                        ساخت اپلیکیشن‌های حرفه‌ای برای اندروید و iOS با تمرکز بر تجربه کاربری بی‌نظیر.
                    </p>
                </div>
                <div class="service-card" data-aos="zoom-in" data-aos-duration="700" data-aos-delay="500">
                    <div class="service-icon">
                        <!-- آیکون هویت برند -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                            <path d="M2 17l10 5 10-5"></path>
                            <path d="M2 12l10 5 10-5"></path>
                        </svg>
                    </div>
                    <h3 class="service-title">هویت برند</h3>
                    <p class="service-description">
                        طراحی لوگو، هویت بصری و استراتژی برندینگ برای کسب‌وکار شما جهت متمایز شدن.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <!-- افزونه AOS برای انیمیشن اسکرول -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            easing: 'ease-out-cubic',
            duration: 800,
        });
    </script>
@endpush

@push('styles')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <style>
        .services-container {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }

        .service-card {
            background-color: var(--dark-secondary);
            padding: 30px 25px;
            border-radius: 15px;
            box-shadow: var(--shadow);
            width: 300px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: default;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-gold);
        }

        .service-icon {
            margin-bottom: 20px;
            color: var(--gold);
        }

        .service-title {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: var(--text-light);
            font-weight: 600;
        }

        .service-description {
            color: var(--text-muted);
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
@endpush