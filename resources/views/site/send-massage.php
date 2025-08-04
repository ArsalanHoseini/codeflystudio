<?php
// تنظیمات
$to = "you@example.com";  // ← آدرس ایمیل گیرنده (تغییر بده)
$subject = "پیام جدید از فرم تماس سایت";

// دریافت و فیلتر داده‌ها
$name    = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$email   = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL) : '';
$subject_input = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
$message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';

// بررسی فیلدهای ضروری
if (!$name || !$email || !$subject_input || !$message) {
    http_response_code(400);
    echo "لطفاً تمام فیلدها را پر کنید.";
    exit;
}

// ساخت پیام ایمیل
$body = "
    شما یک پیام جدید دارید از فرم تماس سایت:

    نام: $name
    ایمیل: $email
    موضوع: $subject_input

    متن پیام:
    $message
";

// هدرهای ایمیل
$headers  = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8";

// ارسال ایمیل
if (mail($to, $subject, $body, $headers)) {
    echo "✅ پیام شما با موفقیت ارسال شد.";
} else {
    http_response_code(500);
    echo "❌ ارسال پیام با خطا مواجه شد. لطفاً بعداً تلاش کنید.";
}
?>
