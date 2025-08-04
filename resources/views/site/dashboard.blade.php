@extends('site.layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
    <section class="section" id="dashboard">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">داشبورد من</h2>

            <div class="dashboard-overview" data-aos="fade-up" data-aos-delay="100">
                <p class="text-muted">خوش آمدید {{ Auth::user()->name }} 👋</p>
                <p>از اینجا می‌توانید به اطلاعات حساب کاربری، خدمات فعال و وضعیت پیام‌های خود دسترسی داشته باشید.</p>
            </div>

            <div class="dashboard-cards">
                <div class="dashboard-card" data-aos="zoom-in" data-aos-delay="200">
                    <h3 class="card-title">پروژه‌های من</h3>
                    <p class="card-info">0 پروژه فعال</p>
                    <a href="#" class="btn btn-secondary small">مشاهده</a>
                </div>

                <div class="dashboard-card" data-aos="zoom-in" data-aos-delay="300">
                    <h3 class="card-title">پیام‌ها</h3>
                    <p class="card-info">1 پیام پاسخ داده نشده</p>
                    <a href="#" class="btn btn-secondary small">ورود به پیام‌ها</a>
                </div>

                <div class="dashboard-card" data-aos="zoom-in" data-aos-delay="400">
                    <h3 class="card-title">پلن فعال</h3>
                    <p class="card-info">ندارید</p>
                    <a href="{{ route('plans') }}" class="btn btn-secondary small">مشاهده پلن‌ها</a>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="mt-4">
            @role('admin')
            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">رفتن به داشبورد ادمین</a>
            @endrole

            @role('employee')
            <a href="{{ route('employee.dashboard') }}" class="btn btn-info">رفتن به داشبورد کارمند</a>
            @endrole

            @role('client')
            <a href="{{ route('client.dashboard') }}" class="btn btn-success">رفتن به داشبورد مشتری</a>
            @endrole

            @role('user')
            <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">رفتن به داشبورد کاربر</a>
            @endrole
        </div>
    </div>

@endsection