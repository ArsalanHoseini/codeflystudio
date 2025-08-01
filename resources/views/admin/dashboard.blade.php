<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل مدیریت Golden Butterfly</title>
    <link rel="stylesheet" href="admin-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
    <!-- نوار کناری -->
    <nav class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <span class="logo-icon">🦋</span>
                <h2>Golden Butterfly</h2>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li><a href="#" onclick="showSection('employees')" class="menu-item active">
                <span class="icon">👥</span>
                مدیریت کارمندان
            </a></li>
            <li><a href="#" onclick="showSection('clients')" class="menu-item">
                <span class="icon">🏢</span>
                مدیریت کارفرمایان
            </a></li>
            <li><a href="#" onclick="showSection('admin-tools')" class="menu-item">
                <span class="icon">⚙️</span>
                ابزارهای مدیریت
            </a></li>
        </ul>
    </nav>

    <!-- محتوای اصلی -->
    <main class="main-content">
        <header class="header">
            <h1 id="page-title">مدیریت کارمندان</h1>
            <div class="header-actions">
                <button class="btn-primary" onclick="showModal('add-employee')">افزودن کارمند جدید</button>
            </div>
        </header>

        <!-- بخش مدیریت کارمندان -->
        <section id="employees-section" class="content-section active">
            <div class="employees-grid" id="employees-grid">
                <!-- کارت‌های کارمندان اینجا تولید می‌شوند -->
            </div>
        </section>

        <!-- بخش مدیریت کارفرمایان -->
        <section id="clients-section" class="content-section">
            <div class="clients-grid" id="clients-grid">
                <!-- کارت‌های کارفرمایان اینجا تولید می‌شوند -->
            </div>
        </section>

        <!-- بخش ابزارهای مدیریت -->
        <section id="admin-tools-section" class="content-section">
            <div class="admin-tools-container">
                <div class="messaging-panel">
                    <h3>پیام‌های داخلی مدیریت</h3>
                    <div class="message-input">
                        <input type="text" id="admin-message" placeholder="پیام خود را بنویسید...">
                        <button onclick="sendAdminMessage()">ارسال</button>
                    </div>
                    <div class="messages-list" id="admin-messages">
                        <!-- پیام‌های مدیریت اینجا نمایش داده می‌شوند -->
                    </div>
                </div>
                <div class="projects-panel">
                    <h3>نمای کلی پروژه‌ها</h3>
                    <div class="projects-table" id="projects-table">
                        <!-- جدول پروژه‌ها اینجا تولید می‌شود -->
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- مودال‌ها -->
    <div id="modal-overlay" class="modal-overlay">
        <!-- مودال پیام‌های کارمند -->
        <div id="employee-messages-modal" class="modal">
            <div class="modal-header">
                <h3>پیام‌های کارمند</h3>
                <button onclick="closeModal()" class="close-btn">×</button>
            </div>
            <div class="modal-body">
                <div id="employee-messages-content"></div>
            </div>
        </div>

        <!-- مودال تعریف پروژه -->
        <div id="assign-project-modal" class="modal">
            <div class="modal-header">
                <h3>تعریف پروژه جدید</h3>
                <button onclick="closeModal()" class="close-btn">×</button>
            </div>
            <div class="modal-body">
                <form id="project-form">
                    <input type="text" id="project-name" placeholder="نام پروژه" required>
                    <textarea id="project-description" placeholder="توضیحات پروژه"></textarea>
                    <input type="date" id="project-deadline" required>
                    <select id="project-employees" multiple>
                        <option value="1">علی احمدی</option>
                        <option value="2">مریم رضایی</option>
                        <option value="3">حسن محمدی</option>
                    </select>
                    <button type="submit">تعریف پروژه</button>
                </form>
            </div>
        </div>

        <!-- مودال پیام‌های کارفرما -->
        <div id="client-messages-modal" class="modal">
            <div class="modal-header">
                <h3>گفتگو با کارفرما</h3>
                <button onclick="closeModal()" class="close-btn">×</button>
            </div>
            <div class="modal-body">
                <div id="client-messages-content"></div>
                <div class="message-input">
                    <input type="text" id="client-message-input" placeholder="پیام خود را بنویسید...">
                    <button onclick="sendClientMessage()">ارسال</button>
                </div>
            </div>
        </div>

        <!-- مودال صورت‌حساب -->
        <div id="payroll-modal" class="modal">
            <div class="modal-header">
                <h3>صورت‌حساب کارمند</h3>
                <button onclick="closeModal()" class="close-btn">×</button>
            </div>
            <div class="modal-body">
                <div id="payroll-content"></div>
            </div>
        </div>
    </div>

    <script>
        // داده‌های نمونه
        const employees = [
            {
                id: 1,
                name: "علی احمدی",
                role: "توسعه‌دهنده فرانت‌اند",
                rank: "توسعه‌دهنده ارشد",
                rankIcon: "👑",
                projects: ["وب‌سایت شرکت جدید", "اپلیکیشن موبایل"],
                messages: ["سلام، در پروژه به کمک نیاز دارم", "آیا می‌توانید کد را بررسی کنید؟"],
                salary: {
                    base: 15000000,
                    bonus: 3000000,
                    total: 18000000
                }
            },
            {
                id: 2,
                name: "امیر رضایی",
                role: "طراح UI/UX",
                rank: "طراح ارشد",
                rankIcon: "🎨",
                projects: ["طراحی اپلیکیشن"],
                messages: ["طراحی آماده بررسی است", "نیاز به تایید رنگ‌ها دارم"],
                salary: {
                    base: 12000000,
                    bonus: 2500000,
                    total: 14500000
                }
            },
            {
                id: 3,
                name: "حسن محمدی",
                role: "توسعه‌دهنده بک‌اند",
                rank: "توسعه‌دهنده میانی",
                rankIcon: "⚡",
                projects: [],
                messages: ["برای پروژه جدید آماده هستم"],
                salary: {
                    base: 10000000,
                    bonus: 1500000,
                    total: 11500000
                }
            }
        ];

        const clients = [
            {
                id: 1,
                name: "شرکت فناوری پیشرفته",
                company: "Advanced Tech Co.",
                project: "سیستم مدیریت انبار",
                status: "active",
                progress: 75,
                payment: "پرداخت شده",
                deadline: "1403/02/15",
                messages: ["سیستم کی آماده می‌شود؟", "نیاز به تغییر در گزارشات داریم"]
            },
            {
                id: 2,
                name: "موسسه کسب‌وکار هوشمند",
                company: "Smart Business Corp.",
                project: "وب‌سایت فروشگاهی",
                status: "pending",
                progress: 30,
                payment: "در انتظار",
                deadline: "1403/03/01",
                messages: ["می‌خواهیم صفحه جدید اضافه کنیم"]
            },
            {
                id: 3,
                name: "شرکت راه‌حل‌های دیجیتال",
                company: "Digital Solutions Ltd.",
                project: "بدون پروژه فعال",
                status: "completed",
                progress: 100,
                payment: "پرداخت شده",
                deadline: "تکمیل شده",
                messages: []
            }
        ];

        const projects = [
            {
                name: "سیستم مدیریت انبار",
                client: "شرکت فناوری پیشرفته",
                employees: ["علی احمدی", "حسن محمدی"],
                progress: 75,
                deadline: "1403/02/15"
            },
            {
                name: "وب‌سایت فروشگاهی",
                client: "موسسه کسب‌وکار هوشمند",
                employees: ["مریم رضایی"],
                progress: 30,
                deadline: "1403/03/01"
            }
        ];

        let adminMessages = [];
        let currentClientId = null;

        // راه‌اندازی داشبورد
        function init() {
            renderEmployees();
            renderClients();
            renderProjects();
        }

        // توابع ناوبری
        function showSection(sectionName) {
            // مخفی کردن همه بخش‌ها
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });
            
            // حذف کلاس فعال از همه آیتم‌های منو
            document.querySelectorAll('.menu-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // نمایش بخش انتخاب شده
            document.getElementById(sectionName + '-section').classList.add('active');
            
            // اضافه کردن کلاس فعال به آیتم منوی کلیک شده
            event.target.closest('.menu-item').classList.add('active');
            
            // به‌روزرسانی عنوان صفحه
            const titles = {
                'employees': 'مدیریت کارمندان',
                'clients': 'مدیریت کارفرمایان',
                'admin-tools': 'ابزارهای مدیریت'
            };
            document.getElementById('page-title').textContent = titles[sectionName];
        }

        // توابع رندر
        function renderEmployees() {
            const grid = document.getElementById('employees-grid');
            grid.innerHTML = employees.map(employee => `
                <div class="employee-card">
                    <div class="employee-header">
                        <div class="employee-avatar">${employee.name.charAt(0)}</div>
                        <div class="employee-info">
                            <h3>${employee.name}</h3>
                            <div class="employee-role">${employee.role}</div>
                        </div>
                    </div>
                    <div class="employee-rank">
                        <span class="rank-icon">${employee.rankIcon}</span>
                        <span class="rank-title">${employee.rank}</span>
                    </div>
                    <div class="projects-list">
                        <h4>پروژه‌های فعال:</h4>
                        ${employee.projects.length > 0 
                            ? employee.projects.map(project => `<div class="project-item">${project}</div>`).join('')
                            : '<div class="no-projects">بدون پروژه فعال</div>'
                        }
                    </div>
                    <div class="employee-actions">
                        <button class="btn-secondary" onclick="showEmployeeMessages(${employee.id})">ارسال پیام</button>
                        <button class="btn-secondary" onclick="viewPayroll(${employee.id})">مشاهده صورت‌حساب</button>
                    </div>
                </div>
            `).join('');
        }

        function renderClients() {
            const grid = document.getElementById('clients-grid');
            grid.innerHTML = clients.map(client => `
                <div class="client-card">
                    <div class="client-header">
                        <div class="client-name">${client.name}</div>
                        <div class="company-name">${client.company}</div>
                    </div>
                    <div class="project-info">
                        <div class="project-name">${client.project}</div>
                        <div class="project-status">
                            <span class="status-badge status-${client.status}">
                                ${client.status === 'active' ? 'فعال' : client.status === 'pending' ? 'در انتظار' : 'تکمیل شده'}
                            </span>
                            <span class="payment-status ${client.payment === 'در انتظار' ? 'payment-pending' : ''}">${client.payment}</span>
                        </div>
                        ${client.progress < 100 ? `
                            <div class="progress-container">
                                <div class="progress-bar">
                                    <div class="progress-fill" style="width: ${client.progress}%"></div>
                                </div>
                                <div class="progress-text">${client.progress}% تکمیل شده</div>
                            </div>
                        ` : ''}
                        <div class="deadline">مهلت تحویل: ${client.deadline}</div>
                    </div>
                    <div class="client-actions">
                        <button class="btn-secondary" onclick="assignProject(${client.id})">تعریف پروژه جدید</button>
                        <button class="btn-secondary" onclick="openClientMessages(${client.id})">پیام</button>
                    </div>
                </div>
            `).join('');
        }

        function renderProjects() {
            const table = document.getElementById('projects-table');
            table.innerHTML = `
                <div class="project-row">
                    <div>نام پروژه</div>
                    <div>کارفرما</div>
                    <div>اعضای تیم</div>
                    <div>پیشرفت</div>
                    <div>مهلت تحویل</div>
                </div>
                ${projects.map(project => `
                    <div class="project-row">
                        <div>${project.name}</div>
                        <div>${project.client}</div>
                        <div>${project.employees.join('، ')}</div>
                        <div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: ${project.progress}%"></div>
                            </div>
                            <div class="progress-text">${project.progress}%</div>
                        </div>
                        <div>${project.deadline}</div>
                    </div>
                `).join('')}
            `;
        }

        // توابع مودال
        function showModal(modalId) {
            document.getElementById('modal-overlay').classList.add('active');
            document.querySelectorAll('.modal').forEach(modal => modal.style.display = 'none');
            document.getElementById(modalId + '-modal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('modal-overlay').classList.remove('active');
        }

        // توابع کارمندان
        function showEmployeeMessages(employeeId) {
            const employee = employees.find(emp => emp.id === employeeId);
            const content = document.getElementById('employee-messages-content');
            content.innerHTML = `
                <h4>پیام‌های ${employee.name}</h4>
                <div class="messages-list">
                    ${employee.messages.map(message => `
                        <div class="message-item">
                            <div>${message}</div>
                            <div class="message-time">${new Date().toLocaleDateString('fa-IR')} - ${new Date().toLocaleTimeString('fa-IR')}</div>
                        </div>
                    `).join('')}
                </div>
            `;
            showModal('employee-messages');
        }

        function viewPayroll(employeeId) {
            const employee = employees.find(emp => emp.id === employeeId);
            const content = document.getElementById('payroll-content');
            content.innerHTML = `
                <h4>صورت‌حساب ${employee.name}</h4>
                <div style="background: rgba(255,255,255,0.05); padding: 1.5rem; border-radius: 10px; margin-top: 1rem;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                        <span>حقوق پایه:</span>
                        <span style="color: #facc15;">${employee.salary.base.toLocaleString('fa-IR')} تومان</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                        <span>پاداش:</span>
                        <span style="color: #22c55e;">${employee.salary.bonus.toLocaleString('fa-IR')} تومان</span>
                    </div>
                    <hr style="border: 1px solid #333; margin: 1rem 0;">
                    <div style="display: flex; justify-content: space-between; font-weight: 600; font-size: 1.1rem;">
                        <span>مجموع:</span>
                        <span style="color: #facc15;">${employee.salary.total.toLocaleString('fa-IR')} تومان</span>
                    </div>
                </div>
            `;
            showModal('payroll');
        }

        // توابع کارفرمایان
        function assignProject(clientId) {
            currentClientId = clientId;
            showModal('assign-project');
        }

        function openClientMessages(clientId) {
            const client = clients.find(c => c.id === clientId);
            currentClientId = clientId;
            const content = document.getElementById('client-messages-content');
            content.innerHTML = `
                <h4>گفتگو با ${client.name}</h4>
                <div class="messages-list">
                    ${client.messages.map(message => `
                        <div class="message-item">
                            <div>${message}</div>
                            <div class="message-time">${new Date().toLocaleDateString('fa-IR')} - ${new Date().toLocaleTimeString('fa-IR')}</div>
                        </div>
                    `).join('')}
                </div>
            `;
            showModal('client-messages');
        }

        function sendClientMessage() {
            const input = document.getElementById('client-message-input');
            const message = input.value.trim();
            if (message && currentClientId) {
                const client = clients.find(c => c.id === currentClientId);
                client.messages.push(message);
                input.value = '';
                openClientMessages(currentClientId);
            }
        }

        // توابع مدیریت
        function sendAdminMessage() {
            const input = document.getElementById('admin-message');
            const message = input.value.trim();
            if (message) {
                adminMessages.push({
                    text: message,
                    time: new Date().toLocaleDateString('fa-IR') + ' - ' + new Date().toLocaleTimeString('fa-IR')
                });
                input.value = '';
                renderAdminMessages();
            }
        }

        function renderAdminMessages() {
            const container = document.getElementById('admin-messages');
            container.innerHTML = adminMessages.map(msg => `
                <div class="message-item">
                    <div>${msg.text}</div>
                    <div class="message-time">${msg.time}</div>
                </div>
            `).join('');
        }

        // مدیریت فرم‌ها
        document.getElementById('project-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const projectName = document.getElementById('project-name').value;
            const projectDescription = document.getElementById('project-description').value;
            const projectDeadline = document.getElementById('project-deadline').value;
            const selectedEmployees = Array.from(document.getElementById('project-employees').selectedOptions).map(option => option.text);
            
            if (currentClientId) {
                const client = clients.find(c => c.id === currentClientId);
                client.project = projectName;
                client.status = 'active';
                client.progress = 0;
                client.deadline = new Date(projectDeadline).toLocaleDateString('fa-IR');
                
                projects.push({
                    name: projectName,
                    client: client.name,
                    employees: selectedEmployees,
                    progress: 0,
                    deadline: new Date(projectDeadline).toLocaleDateString('fa-IR')
                });
                
                renderClients();
                renderProjects();
                closeModal();
                this.reset();
            }
        });

        // بستن مودال با کلیک خارج از آن
        document.getElementById('modal-overlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // راه‌اندازی داشبورد هنگام بارگذاری صفحه
        document.addEventListener('DOMContentLoaded', init);
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'956d5e8d92e3dc5e',t:'MTc1MTExNTY1MC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
