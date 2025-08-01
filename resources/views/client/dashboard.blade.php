<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Butterfly - Employer Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/client.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <div class="logo">
                    <i class="fas fa-butterfly"></i>
                    <span>Golden Butterfly</span>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i> داشبورد</a></li>
                <li><a href="#"><i class="fas fa-project-diagram"></i> پروژه‌ها</a></li>
                <li><a href="#"><i class="fas fa-wallet"></i> کیف پول</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> گفتگوها</a></li>
                <li><a href="#"><i class="fas fa-headset"></i> پشتیبانی</a></li>
                <li><a href="#"><i class="fas fa-user-friends"></i> دعوت دوستان</a></li>
                <li><a href="#"><i class="fas fa-gift"></i> جوایز و تخفیف‌ها</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> تنظیمات</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i> خروج</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="header">
                <div class="mobile-menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <h1 class="page-title">پنل کارفرما</h1>
                <div class="user-info">
                    <div class="user-details">
                        <div class="user-name">علی محمدی</div>
                        <div class="user-company">شرکت پروانه طلایی</div>
                    </div>
                    <div class="user-avatar">
                        <span>ع م</span>
                    </div>
                </div>
            </div>

            <div class="dashboard-grid">
                <!-- Wallet Section -->
                <div class="card wallet-card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-wallet"></i></div>
                            کیف پول
                        </h2>
                    </div>
                    <div class="wallet-content">
                        <div>
                            <div class="balance">۱۲,۵۰۰,۰۰۰ تومان</div>
                            <div class="balance-label">موجودی فعلی</div>
                        </div>
                        <div class="wallet-actions">
                            <button class="btn btn-outline"><i class="fas fa-arrow-up"></i> برداشت</button>
                            <button class="btn btn-primary"><i class="fas fa-arrow-down"></i> افزایش موجودی</button>
                        </div>
                    </div>
                </div>

                <!-- Project Installments -->
                <div class="card installments-card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                            اقساط پروژه‌ها
                        </h2>
                    </div>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>نام پروژه</th>
                                    <th>مبلغ قسط</th>
                                    <th>تاریخ سررسید</th>
                                    <th>وضعیت</th>
                                    <th>عملیات</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>طراحی وب‌سایت فروشگاهی</td>
                                    <td>۳,۵۰۰,۰۰۰ تومان</td>
                                    <td>۱۴۰۲/۰۳/۱۵</td>
                                    <td><span class="status status-paid">پرداخت شده</span></td>
                                    <td><button class="btn btn-outline btn-sm">جزئیات</button></td>
                                </tr>
                                <tr>
                                    <td>اپلیکیشن موبایل</td>
                                    <td>۵,۰۰۰,۰۰۰ تومان</td>
                                    <td>۱۴۰۲/۰۴/۱۰</td>
                                    <td><span class="status status-pending">در انتظار</span></td>
                                    <td><button class="btn btn-primary btn-sm">پرداخت</button></td>
                                </tr>
                                <tr>
                                    <td>بهینه‌سازی سئو</td>
                                    <td>۱,۸۰۰,۰۰۰ تومان</td>
                                    <td>۱۴۰۲/۰۲/۲۵</td>
                                    <td><span class="status status-overdue">سررسید شده</span></td>
                                    <td><button class="btn btn-primary btn-sm">پرداخت</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Chat with Project Manager -->
                <div class="card chat-card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-comments"></i></div>
                            گفتگو با مدیر پروژه
                        </h2>
                    </div>
                    <div class="chat-container">
                        <div class="message message-incoming">
                            <div class="message-content">
                                سلام، روز بخیر. گزارش پیشرفت پروژه وب‌سایت فروشگاهی آماده شده است.
                            </div>
                            <div class="message-meta">مهدی رضایی - ۱۰:۳۰</div>
                        </div>
                        <div class="message message-outgoing">
                            <div class="message-content">
                                سلام، ممنون. لطفا برای من ارسال کنید.
                            </div>
                            <div class="message-meta">۱۰:۳۵</div>
                        </div>
                        <div class="message message-incoming">
                            <div class="message-content">
                                حتما. فایل گزارش را برایتان ارسال کردم. همچنین می‌خواستم در مورد تغییرات درخواستی در بخش سبد خرید صحبت کنیم.
                            </div>
                            <div class="message-meta">مهدی رضایی - ۱۰:۴۰</div>
                        </div>
                    </div>
                    <div class="chat-input">
                        <input type="text" placeholder="پیام خود را بنویسید...">
                        <button class="btn btn-primary"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </div>

                <!-- Support Plans Marketplace -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-headset"></i></div>
                            بسته‌های پشتیبانی
                        </h2>
                    </div>
                    <div class="plans-container">
                        <div class="plan-card">
                            <div class="plan-name">پشتیبانی پایه</div>
                            <div class="plan-price">۵۰۰,۰۰۰ تومان / ماهانه</div>
                            <div class="plan-description">
                                پشتیبانی ایمیلی، زمان پاسخگویی ۴۸ ساعت، رفع ۵ باگ در ماه
                            </div>
                            <button class="btn btn-outline">خرید</button>
                        </div>
                        <div class="plan-card">
                            <div class="plan-name">پشتیبانی استاندارد</div>
                            <div class="plan-price">۱,۲۰۰,۰۰۰ تومان / ماهانه</div>
                            <div class="plan-description">
                                پشتیبانی تلفنی و ایمیلی، زمان پاسخگویی ۲۴ ساعت، رفع ۱۵ باگ در ماه
                            </div>
                            <button class="btn btn-primary">خرید</button>
                        </div>
                        <div class="plan-card">
                            <div class="plan-name">پشتیبانی ویژه</div>
                            <div class="plan-price">۲,۵۰۰,۰۰۰ تومان / ماهانه</div>
                            <div class="plan-description">
                                پشتیبانی ۲۴/۷، زمان پاسخگویی ۴ ساعت، رفع نامحدود باگ، بروزرسانی‌های ماهانه
                            </div>
                            <button class="btn btn-outline">خرید</button>
                        </div>
                    </div>
                </div>

                <!-- Submit New Project Request -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-plus-circle"></i></div>
                            درخواست پروژه جدید
                        </h2>
                    </div>
                    <form id="projectForm">
                        <div class="form-group">
                            <label for="projectTitle">عنوان پروژه</label>
                            <input type="text" id="projectTitle" class="form-control" placeholder="مثال: طراحی وب‌سایت شرکتی">
                        </div>
                        <div class="form-group">
                            <label for="projectDescription">توضیحات پروژه</label>
                            <textarea id="projectDescription" class="form-control" placeholder="لطفا جزئیات پروژه خود را شرح دهید..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="projectBudget">بودجه تقریبی (تومان)</label>
                            <input type="number" id="projectBudget" class="form-control" placeholder="مثال: ۱۵,۰۰۰,۰۰۰">
                        </div>
                        <div class="form-group">
                            <label for="projectDeadline">مهلت زمانی مورد نظر</label>
                            <input type="date" id="projectDeadline" class="form-control">
                        </div>
                        <div class="form-footer">
                            <button type="button" id="submitProject" class="btn btn-primary">ثبت درخواست</button>
                        </div>
                    </form>

                    <div id="estimateContainer" class="estimate-container">
                        <div class="estimate-header">
                            <div class="estimate-title">برآورد پروژه</div>
                        </div>
                        <div class="estimate-details">
                            <div class="estimate-item">
                                <div class="estimate-value">۲۰,۰۰۰,۰۰۰ تومان</div>
                                <div class="estimate-label">هزینه تخمینی</div>
                            </div>
                            <div class="estimate-item">
                                <div class="estimate-value">۴۵ روز</div>
                                <div class="estimate-label">زمان تخمینی</div>
                            </div>
                            <div class="estimate-item">
                                <div class="estimate-value">۳ مرحله</div>
                                <div class="estimate-label">تعداد اقساط</div>
                            </div>
                        </div>
                        <div class="installment-options">
                            <h3>گزینه‌های پرداخت</h3>
                            <div class="installment-option">
                                <div>پیش پرداخت (۳۰٪)</div>
                                <div>۶,۰۰۰,۰۰۰ تومان</div>
                            </div>
                            <div class="installment-option">
                                <div>پرداخت میانی (۴۰٪)</div>
                                <div>۸,۰۰۰,۰۰۰ تومان</div>
                            </div>
                            <div class="installment-option">
                                <div>پرداخت نهایی (۳۰٪)</div>
                                <div>۶,۰۰۰,۰۰۰ تومان</div>
                            </div>
                        </div>
                        <div class="form-footer">
                            <button class="btn btn-primary">تایید و شروع پروژه</button>
                        </div>
                    </div>
                </div>

                <!-- Invite Friends -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-user-friends"></i></div>
                            دعوت از دوستان
                        </h2>
                    </div>
                    <p>با دعوت از دوستان خود، برای هر دعوت تایید شده ۱۰٪ تخفیف در پروژه بعدی خود دریافت کنید!</p>
                    <div class="referral-code">GB-ALI-1234</div>
                    <div class="referral-link">
                        <input type="text" value="https://goldenbutterfly.com/ref/GB-ALI-1234" readonly>
                        <button class="copy-btn"><i class="fas fa-copy"></i></button>
                    </div>
                    <div class="form-footer">
                        <button class="btn btn-outline"><i class="fab fa-telegram"></i> تلگرام</button>
                        <button class="btn btn-outline"><i class="fab fa-whatsapp"></i> واتساپ</button>
                        <button class="btn btn-outline"><i class="fas fa-envelope"></i> ایمیل</button>
                    </div>
                </div>

                <!-- Rewards & Discounts -->
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">
                            <div class="card-icon"><i class="fas fa-gift"></i></div>
                            جوایز و تخفیف‌ها
                        </h2>
                    </div>
                    <div class="rewards-list">
                        <div class="reward-item">
                            <div class="reward-icon">
                                <i class="fas fa-percentage"></i>
                            </div>
                            <div class="reward-details">
                                <div class="reward-title">تخفیف ۱۵٪ برای پروژه بعدی</div>
                                <div class="reward-description">به مناسبت تکمیل موفق ۳ پروژه</div>
                            </div>
                            <div class="reward-action">
                                <button class="btn btn-outline btn-sm">استفاده</button>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-icon">
                                <i class="fas fa-headset"></i>
                            </div>
                            <div class="reward-details">
                                <div class="reward-title">۱ ماه پشتیبانی رایگان</div>
                                <div class="reward-description">به مناسبت سالگرد همکاری</div>
                            </div>
                            <div class="reward-action">
                                <button class="btn btn-outline btn-sm">استفاده</button>
                            </div>
                        </div>
                        <div class="reward-item">
                            <div class="reward-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="reward-details">
                                <div class="reward-title">۵ ساعت خدمات مشاوره رایگان</div>
                                <div class="reward-description">برای معرفی ۵ کارفرمای جدید</div>
                            </div>
                            <div class="reward-action">
                                <button class="btn btn-outline btn-sm">استفاده</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile menu toggle
        document.querySelector('.mobile-menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Project form submission
        document.getElementById('submitProject').addEventListener('click', function() {
            // Show estimate container
            document.getElementById('estimateContainer').style.display = 'block';
            
            // Scroll to estimate container
            document.getElementById('estimateContainer').scrollIntoView({
                behavior: 'smooth'
            });
        });

        // Copy referral link
        document.querySelector('.copy-btn').addEventListener('click', function() {
            const referralLink = document.querySelector('.referral-link input');
            referralLink.select();
            document.execCommand('copy');
            
            // Show feedback (could be improved with a toast notification)
            alert('لینک دعوت کپی شد!');
        });

        // Chat functionality
        const chatInput = document.querySelector('.chat-input input');
        const chatContainer = document.querySelector('.chat-container');
        const sendButton = document.querySelector('.chat-input .btn');

        function sendMessage() {
            if (chatInput.value.trim() !== '') {
                const now = new Date();
                const time = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                
                const messageHTML = `
                    <div class="message message-outgoing">
                        <div class="message-content">
                            ${chatInput.value}
                        </div>
                        <div class="message-meta">${time}</div>
                    </div>
                `;
                
                chatContainer.insertAdjacentHTML('beforeend', messageHTML);
                chatInput.value = '';
                
                // Auto scroll to bottom
                chatContainer.scrollTop = chatContainer.scrollHeight;
                
                // Simulate response (for demo purposes)
                setTimeout(() => {
                    const responseHTML = `
                        <div class="message message-incoming">
                            <div class="message-content">
                                پیام شما دریافت شد. به زودی پاسخ خواهم داد.
                            </div>
                            <div class="message-meta">مهدی رضایی - ${time}</div>
                        </div>
                    `;
                    
                    chatContainer.insertAdjacentHTML('beforeend', responseHTML);
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                }, 1000);
            }
        }

        sendButton.addEventListener('click', sendMessage);
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'955bdf7be6dcb19e',t:'MTc1MDkzMjE4Ny4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
