@extends('site.layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
    <!-- Contact Section -->
    <section class="section contact" id="contact">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">تماس با ما</h2>
            <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
                در صورت داشتن هرگونه سوال یا نیاز به مشاوره، با ما در ارتباط باشید.
            </p>

            <div class="contact-content">
                <!-- About Company -->
                <div class="contact-info" data-aos="fade-left" data-aos-delay="200">
                    <h3>درباره شرکت</h3>
                    <p>
                        شرکت پروانه طلایی با بیش از یک دهه تجربه در حوزه طراحی وب، اپلیکیشن، سئو و برندینگ، با تیمی متشکل از
                        متخصصان متعهد و خلاق آماده ارائه خدمات به کسب‌وکارهای نوپا و حرفه‌ای است.
                        ما با تمرکز بر کیفیت، پشتیبانی و نوآوری، همراه مطمئن شما در مسیر دیجیتال هستیم.
                    </p>
                    <ul class="contact-details">
                        <li><strong>ایمیل:</strong> info@goldenbutterfly.ir</li>
                        <li><strong>تلفن:</strong> ۰۲۱-۱۲۳۴۵۶۷۸</li>
                        <li><strong>آدرس:</strong> تهران، خیابان آزادی، پلاک ۱۲۳</li>
                    </ul>
                </div>

                <!-- Contact Form -->
                <div class="contact-form" data-aos="fade-right" data-aos-delay="300">
                    <form id="contactForm">
                        <input type="text" name="name" placeholder="نام شما" required />
                        <input type="email" name="email" placeholder="ایمیل شما" required />
                        <input type="text" name="subject" placeholder="موضوع پیام" required />
                        <textarea name="message" rows="5" placeholder="متن پیام شما" required></textarea>
                        <button type="submit" class="btn">ارسال پیام</button>
                        <div id="formMessage" class="form-message"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
<script>
    document.getElementById('contact-form').addEventListener('submit', function (e) {
        e.preventDefault();

        const form = this;
        const result = document.getElementById('form-result');
        const formData = new FormData(form);

        fetch('your-backend-endpoint.php', {
            method: 'POST',
            body: formData
        })
            .then(res => res.text())
            .then(response => {
                result.textContent = response;
                result.style.color = "var(--gold)";
                form.reset();
            })
            .catch(error => {
                result.textContent = "خطا در ارسال پیام. لطفاً دوباره تلاش کنید.";
                result.style.color = "red";
            });
    });
</script>