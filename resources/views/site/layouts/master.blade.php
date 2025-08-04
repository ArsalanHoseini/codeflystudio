<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'پروانه طلایی')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- استایل‌ها --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
<body>

    @include('site.layouts.header')

    <main>
        @yield('content')
    </main>

    @include('site.layouts.footer')

    {{-- اسکریپت‌ها --}}
    <script src="{{ asset('js/script.js') }}"></script>
    @stack('scripts')
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,
    once: true,
  });
</script>

</body>
</html>
