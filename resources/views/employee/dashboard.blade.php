<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل کارمندان | پروانه طلایی</title>
    <link rel="stylesheet" href="assets/css/employee.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-logo">🦋</div>
        <div class="sidebar-menu">
            <div class="sidebar-item active" title="داشبورد">📊</div>
            <div class="sidebar-item" title="پروژه‌ها">📁</div>
            <div class="sidebar-item" title="پیام‌ها">💬</div>
            <div class="sidebar-item" title="مالی">💰</div>
            <div class="sidebar-item" title="تنظیمات">⚙️</div>
        </div>
        <div class="sidebar-footer">
            <div class="sidebar-item" title="خروج">🚪</div>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <header>
                <h1 class="page-title">داشبورد کارمندان</h1>
                <div class="user-actions">
                    <div class="notification-bell">
                        <span>🔔</span>
                        <span class="notification-count">3</span>
                    </div>
                    <div class="settings">⚙️</div>
                </div>
            </header>
            
            <!-- Identity & Wallet Section -->
            <div class="section" id="profile-section">
                <div class="section-header">
                    <h2 class="section-title"><span class="section-icon">👤</span> پروفایل و کیف پول</h2>
                    <div class="section-toggle">▼</div>
                </div>
                <div class="section-content">
                    <div class="identity-section">
                        <div class="profile-picture">
                            <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23333'/><circle cx='50' cy='35' r='20' fill='%23666'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23666'/></svg>" alt="تصویر پروفایل">
                        </div>
                        <div class="employee-info">
                            <h2 class="employee-name">احمد احمدی</h2>
                            <p class="employee-title">طراح ارشد محصول</p>
                            <button class="btn">برداشت وجه</button>
                        </div>
                    </div>
                    <div class="wallet-info">
                        <div class="wallet-card">
                            <span class="wallet-label">حقوق ماهانه</span>
                            <span class="wallet-value">۱۵,۰۰۰,۰۰۰ تومان</span>
                        </div>
                        <div class="wallet-card">
                            <span class="wallet-label">پاداش‌ها</span>
                            <span class="wallet-value">۲,۵۰۰,۰۰۰ تومان</span>
                        </div>
                        <div class="wallet-card">
                            <span class="wallet-label">اعتبار در دسترس</span>
                            <span class="wallet-value">۵,۰۰۰,۰۰۰ تومان</span>
                        </div>
                        <div class="wallet-card">
                            <span class="wallet-label">موجودی کل</span>
                            <span class="wallet-value highlight">۲۲,۵۰۰,۰۰۰ تومان</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages with Management -->
            <div class="section" id="management-messages-section">
                <div class="section-header">
                    <h2 class="section-title"><span class="section-icon">💬</span> پیام‌های مدیریت</h2>
                    <div class="section-toggle">▼</div>
                </div>
                <div class="section-content">
                    <div class="chat-container">
                        <div class="chat-messages">
                            <div class="message received">
                                <div class="message-sender management">علی محمدی (مدیر ارشد)</div>
                                <div class="message-content">سلام سارا، لطفا گزارش پیشرفت پروژه آذرخش را تا فردا آماده کنید.</div>
                                <div class="message-time">۱۰:۳۰ صبح</div>
                            </div>
                            
                            <div class="message sent">
                                <div class="message-sender you">شما</div>
                                <div class="message-content">سلام، چشم. تا فردا ظهر آماده می‌کنم و برایتان ارسال می‌کنم.</div>
                                <div class="message-time">۱۰:۳۵ صبح</div>
                            </div>
                            
                            <div class="message received">
                                <div class="message-sender management">مریم حسینی (مدیر منابع انسانی)</div>
                                <div class="message-content">سارا جان، یادآوری می‌کنم که جلسه هفتگی فردا ساعت ۹ صبح برگزار می‌شود. لطفا آماده باشید.</div>
                                <div class="message-time">۱۱:۴۵ صبح</div>
                            </div>
                            
                            <div class="message sent">
                                <div class="message-sender you">شما</div>
                                <div class="message-content">ممنون از یادآوری. حتما در جلسه حاضر خواهم بود.</div>
                                <div class="message-time">۱۱:۵۰ صبح</div>
                            </div>
                            
                            <div class="message received">
                                <div class="message-sender management">علی محمدی (مدیر ارشد)</div>
                                <div class="message-content">راستی، طرح‌های جدیدی که ارسال کردی عالی بودند. کار خوبی انجام دادی!</div>
                                <div class="message-time">۱۲:۱۵ بعدازظهر</div>
                            </div>
                        </div>
                        
                        <div class="chat-input">
                            <input type="text" placeholder="پیام خود را بنویسید...">
                            <button>ارسال</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Assigned Projects -->
            <div class="section" id="projects-section">
                <div class="section-header">
                    <h2 class="section-title"><span class="section-icon">📁</span> پروژه‌های اختصاص داده شده</h2>
                    <div class="section-toggle">▼</div>
                </div>
                <div class="section-content">
                    <div class="projects-grid">
                        <div class="project-card active" data-project="آذرخش">
                            <div class="project-header">
                                <h4 class="project-name">پروژه آذرخش</h4>
                                <span class="project-status status-progress">در حال انجام</span>
                            </div>
                            <p class="project-description">طراحی و توسعه رابط کاربری برای اپلیکیشن موبایل آذرخش با تمرکز بر تجربه کاربری</p>
                            <div class="project-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 65%"></div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                                    <span style="font-size: 12px; color: var(--text-secondary);">پیشرفت</span>
                                    <span style="font-size: 12px; color: var(--primary-color);">۶۵٪</span>
                                </div>
                            </div>
                            <div class="collaborators">
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23444'/><circle cx='50' cy='35' r='20' fill='%23777'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23777'/></svg>" alt="همکار">
                                </div>
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23555'/><circle cx='50' cy='35' r='20' fill='%23888'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23888'/></svg>" alt="همکار">
                                </div>
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23666'/><circle cx='50' cy='35' r='20' fill='%23999'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23999'/></svg>" alt="همکار">
                                </div>
                                <div class="collaborator-count">+۲</div>
                            </div>
                        </div>
                        
                        <div class="project-card" data-project="ستاره">
                            <div class="project-header">
                                <h4 class="project-name">پروژه ستاره</h4>
                                <span class="project-status status-review">در حال بررسی</span>
                            </div>
                            <p class="project-description">بازطراحی وب‌سایت شرکت با رویکرد مدرن و پاسخگو</p>
                            <div class="project-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 90%"></div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                                    <span style="font-size: 12px; color: var(--text-secondary);">پیشرفت</span>
                                    <span style="font-size: 12px; color: var(--primary-color);">۹۰٪</span>
                                </div>
                            </div>
                            <div class="collaborators">
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23444'/><circle cx='50' cy='35' r='20' fill='%23777'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23777'/></svg>" alt="همکار">
                                </div>
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23555'/><circle cx='50' cy='35' r='20' fill='%23888'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23888'/></svg>" alt="همکار">
                                </div>
                                <div class="collaborator-count">+۱</div>
                            </div>
                        </div>
                        
                        <div class="project-card" data-project="نسیم">
                            <div class="project-header">
                                <h4 class="project-name">پروژه نسیم</h4>
                                <span class="project-status status-completed">تکمیل شده</span>
                            </div>
                            <p class="project-description">طراحی لوگو و هویت بصری برای استارتاپ نسیم</p>
                            <div class="project-progress">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: 100%"></div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                                    <span style="font-size: 12px; color: var(--text-secondary);">پیشرفت</span>
                                    <span style="font-size: 12px; color: var(--primary-color);">۱۰۰٪</span>
                                </div>
                            </div>
                            <div class="collaborators">
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23444'/><circle cx='50' cy='35' r='20' fill='%23777'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23777'/></svg>" alt="همکار">
                                </div>
                                <div class="collaborator">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23555'/><circle cx='50' cy='35' r='20' fill='%23888'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23888'/></svg>" alt="همکار">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Project Chat Room -->
            <div class="section" id="project-chat-section">
                <div class="section-header">
                    <h2 class="section-title"><span class="section-icon">⚡</span> گفتگوی پروژه</h2>
                    <div class="section-toggle">▼</div>
                </div>
                <div class="section-content">
                    <div class="project-chat-header">
                        <div class="project-chat-icon">⚡</div>
                        <div class="project-chat-info">
                            <h3>پروژه آذرخش</h3>
                            <p>۵ عضو فعال</p>
                        </div>
                    </div>
                    <div class="project-chat-container">
                        <div class="project-chat-messages">
                            <div class="project-message other">
                                <div class="project-message-avatar">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23444'/><circle cx='50' cy='35' r='20' fill='%23777'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23777'/></svg>" alt="همکار">
                                </div>
                                <div class="project-message-content">
                                    <div class="project-message-sender">امیر رضایی</div>
                                    <div class="project-message-text">سلام بچه‌ها، من طرح‌های اولیه صفحه اصلی رو آماده کردم. می‌تونید توی فایل پروژه ببینید.</div>
                                    <div class="project-message-time">۹:۱۵ صبح</div>
                                </div>
                            </div>
                            
                            <div class="project-message other">
                                <div class="project-message-avatar">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23555'/><circle cx='50' cy='35' r='20' fill='%23888'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23888'/></svg>" alt="همکار">
                                </div>
                                <div class="project-message-content">
                                    <div class="project-message-sender">نیلوفر کریمی</div>
                                    <div class="project-message-text">عالیه! من هم بخش مربوط به احراز هویت رو تموم کردم. فقط یه مشکل کوچیک با ریسپانسیو بودن داره که دارم روش کار می‌کنم.</div>
                                    <div class="project-message-time">۹:۲۰ صبح</div>
                                </div>
                            </div>
                            
                            <div class="project-message self">
                                <div class="project-message-avatar">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23333'/><circle cx='50' cy='35' r='20' fill='%23666'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23666'/></svg>" alt="تصویر شما">
                                </div>
                                <div class="project-message-content">
                                    <div class="project-message-sender">شما</div>
                                    <div class="project-message-text">من طرح‌ها رو دیدم، خیلی خوب شدن. نیلوفر اگه خواستی می‌تونم با مشکل ریسپانسیو کمکت کنم.</div>
                                    <div class="project-message-time">۹:۳۰ صبح</div>
                                </div>
                            </div>
                            
                            <div class="project-message other">
                                <div class="project-message-avatar">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23555'/><circle cx='50' cy='35' r='20' fill='%23888'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23888'/></svg>" alt="همکار">
                                </div>
                                <div class="project-message-content">
                                    <div class="project-message-sender">نیلوفر کریمی</div>
                                    <div class="project-message-text">ممنون سارا، حتما! بعد از جلسه امروز می‌تونیم روش کار کنیم؟</div>
                                    <div class="project-message-time">۹:۳۵ صبح</div>
                                </div>
                            </div>
                            
                            <div class="project-message other">
                                <div class="project-message-avatar">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23666'/><circle cx='50' cy='35' r='20' fill='%23999'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23999'/></svg>" alt="همکار">
                                </div>
                                <div class="project-message-content">
                                    <div class="project-message-sender">محمد صادقی</div>
                                    <div class="project-message-text">بچه‌ها یادتون باشه که تا آخر هفته باید نسخه اولیه رو تحویل بدیم. فردا یه جلسه هماهنگی داریم ساعت ۲ بعدازظهر.</div>
                                    <div class="project-message-time">۹:۴۵ صبح</div>
                                </div>
                            </div>
                            
                            <div class="project-message self">
                                <div class="project-message-avatar">
                                    <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23333'/><circle cx='50' cy='35' r='20' fill='%23666'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23666'/></svg>" alt="تصویر شما">
                                </div>
                                <div class="project-message-content">
                                    <div class="project-message-sender">شما</div>
                                    <div class="project-message-text">باشه، من آماده‌ام. نیلوفر بعد از جلسه در خدمتم.</div>
                                    <div class="project-message-time">۹:۵۰ صبح</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="project-chat-input">
                            <input type="text" placeholder="پیام خود را بنویسید...">
                            <button>ارسال</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Make the first section active by default
        document.getElementById('profile-section').classList.add('active');
        
        // Add event listener to section headers for toggling
        const sectionHeaders = document.querySelectorAll('.section-header');
        sectionHeaders.forEach(header => {
            header.addEventListener('click', function() {
                const section = this.parentElement;
                section.classList.toggle('active');
            });
        });
        
        // Add event listener to the "Withdraw Funds" button
        document.querySelector('.btn').addEventListener('click', function() {
            alert('درخواست برداشت وجه شما ثبت شد و در حال بررسی است.');
        });
        
        // Add event listener to the management chat input
        const chatInput = document.querySelector('.chat-input input');
        const chatButton = document.querySelector('.chat-input button');
        const chatMessages = document.querySelector('.chat-messages');
        
        function sendManagementMessage() {
            if (chatInput.value.trim() !== '') {
                const now = new Date();
                const timeString = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                
                const messageDiv = document.createElement('div');
                messageDiv.className = 'message sent';
                messageDiv.innerHTML = `
                    <div class="message-sender you">شما</div>
                    <div class="message-content">${chatInput.value}</div>
                    <div class="message-time">${timeString}</div>
                `;
                
                chatMessages.appendChild(messageDiv);
                chatMessages.scrollTop = chatMessages.scrollHeight;
                chatInput.value = '';
            }
        }
        
        chatButton.addEventListener('click', sendManagementMessage);
        chatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendManagementMessage();
            }
        });
        
        // Add event listener to the project chat input
        const projectChatInput = document.querySelector('.project-chat-input input');
        const projectChatButton = document.querySelector('.project-chat-input button');
        const projectChatMessages = document.querySelector('.project-chat-messages');
        
        function sendProjectMessage() {
            if (projectChatInput.value.trim() !== '') {
                const now = new Date();
                const timeString = now.getHours() + ':' + (now.getMinutes() < 10 ? '0' : '') + now.getMinutes();
                
                const messageDiv = document.createElement('div');
                messageDiv.className = 'project-message self';
                messageDiv.innerHTML = `
                    <div class="project-message-avatar">
                        <img src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100'><rect width='100' height='100' fill='%23333'/><circle cx='50' cy='35' r='20' fill='%23666'/><path d='M50 60 C30 60 15 75 15 95 L85 95 C85 75 70 60 50 60 Z' fill='%23666'/></svg>" alt="تصویر شما">
                    </div>
                    <div class="project-message-content">
                        <div class="project-message-sender">شما</div>
                        <div class="project-message-text">${projectChatInput.value}</div>
                        <div class="project-message-time">${timeString}</div>
                    </div>
                `;
                
                projectChatMessages.appendChild(messageDiv);
                projectChatMessages.scrollTop = projectChatMessages.scrollHeight;
                projectChatInput.value = '';
            }
        }
        
        projectChatButton.addEventListener('click', sendProjectMessage);
        projectChatInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendProjectMessage();
            }
        });
        
        // Add event listener to project cards
        const projectCards = document.querySelectorAll('.project-card');
        projectCards.forEach(card => {
            card.addEventListener('click', function() {
                // Remove active class from all cards
                projectCards.forEach(c => c.classList.remove('active'));
                // Add active class to clicked card
                this.classList.add('active');
                
                // Update project chat header with selected project info
                const projectName = this.querySelector('.project-name').textContent;
                document.querySelector('.project-chat-info h3').textContent = projectName;
                
                // Update project chat icon based on project
                const projectKey = this.getAttribute('data-project');
                let icon = "⚡"; // Default icon
                
                if (projectKey === "ستاره") {
                    icon = "⭐";
                } else if (projectKey === "نسیم") {
                    icon = "🌬️";
                }
                
                document.querySelector('.project-chat-icon').textContent = icon;
                document.querySelector('.section-title .section-icon').textContent = icon;
                
                // Make sure the project chat section is open
                document.getElementById('project-chat-section').classList.add('active');
            });
        });
        
        // Add event listeners to sidebar items
        const sidebarItems = document.querySelectorAll('.sidebar-item');
        sidebarItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all items
                sidebarItems.forEach(i => i.classList.remove('active'));
                // Add active class to clicked item
                this.classList.add('active');
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'955bc533306d39eb',t:'MTc1MDkzMTExMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
