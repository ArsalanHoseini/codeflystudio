@extends('site.layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
<section class="section plans" id="plans">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">پلن‌های همکاری</h2>
        <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            انتخابی مناسب برای هر سطح از نیازهای شما
        </p>

        <div class="plans-container">
            <!-- پلن ۱ -->
            <div class="plan-card" data-aos="zoom-in-up" data-aos-delay="200">
                <h3 class="plan-title">پلن پایه</h3>
                <p class="plan-price">۴.۹ میلیون تومان</p>
                <ul class="plan-features">
                    <li>وبسایت شرکتی واکنش‌گرا</li>
                    <li>طراحی اختصاصی صفحه اصلی</li>
                    <li>فرم تماس با ما</li>
                    <li>پشتیبانی ۲ ماهه</li>
                </ul>
                <a href="#contact" class="btn btn-secondary">شروع همکاری</a>
            </div>

            <!-- پلن ۲ -->
            <div class="plan-card popular" data-aos="zoom-in-up" data-aos-delay="300">
                <h3 class="plan-title">پلن حرفه‌ای</h3>
                <p class="plan-price">۸.۵ میلیون تومان</p>
                <ul class="plan-features">
                    <li>طراحی کامل صفحات اصلی</li>
                    <li>سئو و بهینه‌سازی اولیه</li>
                    <li>نمونه‌کار و بلاگ داینامیک</li>
                    <li>۳ ماه پشتیبانی رایگان</li>
                </ul>
                <a href="#contact" class="btn">شروع همکاری</a>
            </div>

            <!-- پلن ۳ -->
            <div class="plan-card" data-aos="zoom-in-up" data-aos-delay="400">
                <h3 class="plan-title">پلن VIP</h3>
                <p class="plan-price">۱۶ میلیون تومان</p>
                <ul class="plan-features">
                    <li>طراحی اختصاصی رابط کاربری</li>
                    <li>سیستم مدیریت محتوا سفارشی</li>
                    <li>سئو پیشرفته</li>
                    <li>۶ ماه پشتیبانی ویژه</li>
                </ul>
                <a href="#contact" class="btn btn-secondary">شروع همکاری</a>
            </div>
        </div>
    </div>
</section>
@endsection
