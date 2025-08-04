@extends('site.layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
    <section class="section blog" id="blog">
        <div class="container">
            <h2 class="section-title">بلاگ و نمونه‌کارها</h2>

            <!-- فیلتر تگ‌ها -->
            <div class="filter-tags">
                <button class="tag-btn active" data-filter="all">همه</button>
                <button class="tag-btn" data-filter="طراحی">طراحی</button>
                <button class="tag-btn" data-filter="اپلیکیشن">اپلیکیشن</button>
                <button class="tag-btn" data-filter="برندینگ">برندینگ</button>
            </div>

            <!-- کارت‌های بلاگ -->
            <div class="blog-container">
                <div class="blog-card" data-tag="طراحی">
                    <div class="blog-img">
                        <img src="assets/images/blog1.jpg" alt="پروژه طراحی وب" />
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">طراحی سایت فروشگاهی</h3>
                        <p class="blog-excerpt">بررسی روند طراحی یک فروشگاه آنلاین و نکاتی که باعث موفقیت آن شد.</p>
                        <a href="#" class="blog-readmore">مشاهده مقاله</a>
                    </div>
                </div>

                <div class="blog-card" data-tag="اپلیکیشن">
                    <div class="blog-img">
                        <img src="assets/images/blog2.jpg" alt="اپلیکیشن سفارش غذا" />
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">اپلیکیشن رستورانی</h3>
                        <p class="blog-excerpt">توسعه اپلیکیشنی کامل برای مدیریت سفارشات و پرداخت.</p>
                        <a href="#" class="blog-readmore">مشاهده مقاله</a>
                    </div>
                </div>

                <div class="blog-card" data-tag="برندینگ">
                    <div class="blog-img">
                        <img src="assets/images/blog3.jpg" alt="هویت بصری رستوران" />
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title">طراحی هویت بصری</h3>
                        <p class="blog-excerpt">از طراحی لوگو تا رنگ‌بندی و بسته‌بندی برندهای موفق.</p>
                        <a href="#" class="blog-readmore">مشاهده مقاله</a>
                    </div>
                </div>

                <!-- می‌توانید کارت‌های بیشتری اضافه کنید -->
            </div>
        </div>
    </section>
@endsection
<script>
    const tagButtons = document.querySelectorAll(".tag-btn");
    const blogCards = document.querySelectorAll(".blog-card");

    tagButtons.forEach((btn) => {
        btn.addEventListener("click", () => {
            tagButtons.forEach((b) => b.classList.remove("active"));
            btn.classList.add("active");

            const filter = btn.getAttribute("data-filter");

            blogCards.forEach((card) => {
                const tag = card.getAttribute("data-tag");
                if (filter === "all" || tag === filter) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        });
    });
</script>