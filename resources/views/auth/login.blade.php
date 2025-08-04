<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ورود و ثبت‌نام</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        * {
            box-sizing: border-box;
        }

        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            background: #121212;
            font-family: "Vazir", sans-serif;
            color: #fde68a;
        }

        .container {
            display: flex;
            height: 100vh;
            direction: rtl;
        }

        .auth-section {
            width: 420px;
            background: #1e1e1e;
            display: flex;
            flex-direction: column;
            box-shadow: 0 0 20px rgba(250, 204, 21, 0.8);
            overflow: hidden;
            border-right: 2px solid #facc15;
        }

        .toggle-buttons {
            display: flex;
            background: #facc15;
        }

        .toggle-buttons button {
            flex: 1;
            padding: 1rem 0;
            background: transparent;
            border: none;
            color: #121212;
            font-weight: bold;
            cursor: pointer;
            font-size: 1.1rem;
            transition: background 0.3s ease;
            user-select: none;
        }

        .toggle-buttons button.active,
        .toggle-buttons button:hover {
            background: #d1a808;
        }

        .form-wrapper {
            position: relative;
            flex-grow: 1;
        }

        form {
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background: #121212;
            padding: 2.5rem 2rem;
            box-sizing: border-box;
            color: #fde68a;
            transition: opacity 0.4s ease, transform 0.4s ease;
            overflow-y: auto;
        }

        form h2 {
            margin-bottom: 1.5rem;
            color: #facc15;
            text-align: center;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        input[type="number"] {
            display: block;
            width: 100%;
            margin-bottom: 1.2rem;
            padding: 0.75rem 1rem;
            border: none;
            border-radius: 8px;
            background: #222;
            color: #fde68a;
            font-size: 1rem;
            transition: background 0.3s;
        }

        input::placeholder {
            color: #aaa;
        }

        input:focus {
            outline: none;
            background: #3a3a00;
        }

        button.submit-btn {
            width: 100%;
            padding: 0.9rem;
            background: #facc15;
            border: none;
            border-radius: 8px;
            color: #121212;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button.submit-btn:hover {
            background: #d1a808;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .form-footer label {
            display: flex;
            align-items: center;
            cursor: pointer;
            user-select: none;
            color: #fde68a;
        }

        .form-footer input[type="checkbox"] {
            margin-left: 0.5rem;
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .forgot-password {
            color: #facc15;
            cursor: pointer;
            text-decoration: underline;
            user-select: none;
        }

        .forgot-password:hover {
            color: #d1a808;
        }

        /* حالت نمایش مخفی و انیمیشن اسلاید */
        form.hidden {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        form.active {
            opacity: 1;
            pointer-events: all;
            transform: translateX(0);
        }

        /* لوگو */
        .logo-section {
            border-right: 2px solid #facc15;
            flex: 1;
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }


        .logo-section img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
        }
    </style>
</head>

<body>

    <div class="container" role="main">
        <div class="auth-section" aria-label="فرم‌های ورود و ثبت‌نام">
            <div class="toggle-buttons" role="tablist" aria-label="ورود و ثبت‌نام">
                <button id="btnLogin" class="active" role="tab" aria-selected="true" aria-controls="loginForm"
                    tabindex="0">ورود</button>
                <button id="btnQuickLogin" role="tab" aria-selected="false" aria-controls="quickLoginForm"
                    tabindex="-1">ورود سریع</button>
                <button id="btnRegister" role="tab" aria-selected="false" aria-controls="registerForm"
                    tabindex="-1">ثبت‌نام</button>
            </div>

            <div class="form-wrapper">
                <!-- فرم ورود عادی -->
                <form id="loginForm" class="active" role="tabpanel" aria-labelledby="btnLogin" novalidate>
                    <h2>ورود</h2>
                    <input type="text" id="loginUser" placeholder="ایمیل یا شماره تماس" required
                        autocomplete="username" />
                    <input type="password" id="loginPassword" placeholder="رمز عبور" required
                        autocomplete="current-password" />
                    <div class="form-footer">
                        <label><input type="checkbox" id="rememberMe" /> مرا به خاطر بسپار</label>
                        <span class="forgot-password" onclick="activateTab(3)">فراموشی رمز؟</span>
                    </div>
                    <button type="submit" class="submit-btn">ورود</button>
                </form>

                <!-- فرم ورود سریع -->
                <form id="quickLoginForm" class="hidden" role="tabpanel" aria-labelledby="btnQuickLogin" novalidate>
                    <h2>ورود سریع با کد</h2>
                    <input type="text" id="quickLoginUser" placeholder="ایمیل یا شماره تماس" autocomplete="username" />
                    <button type="button" class="submit-btn" onclick="sendQuickCode()">ارسال کد</button>
                    <input type="number" id="quickCode" placeholder="کد ۶ رقمی را وارد کنید" maxlength="6" />
                    <button type="button" class="submit-btn" onclick="verifyQuickCode()">تأیید کد</button>
                    <div class="quick-login-message" id="quickLoginMessage"
                        style="margin-top:0.7rem; min-height:20px; color:#fde68a;"></div>
                </form>

                <!-- فرم ثبت نام -->
                <form id="registerForm" class="hidden" role="tabpanel" aria-labelledby="btnRegister" novalidate>
                    <h2>ثبت‌نام</h2>
                    <input type="text" id="registerName" placeholder="نام کامل" required autocomplete="name" />
                    <input type="email" id="registerEmail" placeholder="ایمیل" required autocomplete="email" />
                    <input type="tel" id="registerPhone" placeholder="شماره تماس" pattern="^[0-9]{10,15}$"
                        title="شماره تماس باید فقط عدد و بین 10 تا 15 رقم باشد" required autocomplete="tel" />
                    <input type="password" id="registerPassword" placeholder="رمز عبور" required
                        autocomplete="new-password" />
                    <button type="submit" class="submit-btn">ثبت‌نام</button>
                </form>

                <!-- فرم فراموشی رمز عبور -->
                <form id="forgotForm" class="hidden" role="tabpanel" aria-labelledby="btnForgot" novalidate>
                    <h2>بازیابی رمز عبور</h2>
                    <input type="text" id="forgotIdentifier" placeholder="ایمیل یا شماره تماس" required />
                    <button type="submit" class="submit-btn">ارسال لینک بازیابی</button>
                    <div class="quick-login-message" id="forgotMessage" style="margin-top: 0.7rem; min-height: 20px;">
                    </div>
                </form>
            </div>
        </div>


        <div class="logo-section" aria-label="لوگو سایت">
            <!-- اینجا لوگو خودت رو بذار مثلا: -->
            <img src="assets/img/logo.png" alt="لوگو شرکت" />
        </div>
    </div>

    <script>
        const btnLogin = document.getElementById('btnLogin');
        const btnQuickLogin = document.getElementById('btnQuickLogin');
        const btnRegister = document.getElementById('btnRegister');

        const loginForm = document.getElementById('loginForm');
        const quickLoginForm = document.getElementById('quickLoginForm');
        const registerForm = document.getElementById('registerForm');
        const forgotForm = document.getElementById('forgotForm');

        const allButtons = [btnLogin, btnQuickLogin, btnRegister];
        const allForms = [loginForm, quickLoginForm, registerForm, forgotForm];

        function activateTab(index) {
            // اگر ایندکس کمتر از تعداد دکمه‌ها بود (یعنی فرم فراموشی رمز نیست)
            if (index < allButtons.length) {
                allButtons.forEach((btn, i) => {
                    btn.classList.toggle('active', i === index);
                    btn.setAttribute('aria-selected', i === index ? 'true' : 'false');
                    btn.setAttribute('tabindex', i === index ? '0' : '-1');
                });
            } else {
                allButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.setAttribute('aria-selected', 'false');
                    btn.setAttribute('tabindex', '-1');
                });
            }

            allForms.forEach((form, i) => {
                form.classList.toggle('active', i === index);
                form.classList.toggle('hidden', i !== index);
            });
        }

        btnLogin.addEventListener('click', () => activateTab(0));
        btnQuickLogin.addEventListener('click', () => activateTab(1));
        btnRegister.addEventListener('click', () => activateTab(2));

        // --- ورود عادی
        loginForm.addEventListener('submit', e => {
            e.preventDefault();
            const identifier = document.getElementById("loginUser").value.trim();
            const password = document.getElementById("loginPassword").value.trim();

            if (!identifier || !password) {
                alert("لطفا ایمیل یا شماره تماس و رمز عبور را وارد کنید.");
                return;
            }

            fetch('/login', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ login: identifier, password: password })
            })
                .then(res => {
                    if (!res.ok) throw res;
                    return res.json();
                })
                .then(data => {
                    alert(data.message || "ورود موفقیت‌آمیز بود!");
                    setTimeout(() => window.location.href = "/dashboard", 1000);
                })
                .catch(async err => {
                    const error = await err.json();
                    alert(error.message || "خطا در ورود!");
                });
        });

        // --- ورود سریع
        window._quickLoginCode = null;
        const quickLoginMessage = document.getElementById('quickLoginMessage');

        function sendQuickCode() {
            const user = document.getElementById("quickLoginUser").value.trim();
            quickLoginMessage.textContent = "";

            if (!user) {
                quickLoginMessage.textContent = "لطفاً ایمیل یا شماره تماس را وارد کنید.";
                quickLoginMessage.style.color = "red";
                return;
            }

            fetch('/quick-login/send-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ login: user })
            })
                .then(res => res.json())
                .then(data => {
                    quickLoginMessage.textContent = data.message + ' (کد تست: ' + data.code + ')';
                    quickLoginMessage.style.color = "#facc15";
                })
                .catch(() => {
                    quickLoginMessage.textContent = "ارسال کد با خطا مواجه شد.";
                    quickLoginMessage.style.color = "red";
                });
        }

        function verifyQuickCode() {
            const code = document.getElementById("quickCode").value.trim();

            if (!code) {
                quickLoginMessage.textContent = "کد را وارد کنید.";
                quickLoginMessage.style.color = "red";
                return;
            }

            fetch('/quick-login/verify-code', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ code })
            })
                .then(res => res.json())
                .then(data => {
                    if (data.message.includes("موفق")) {
                        alert(data.message);
                        window.location.href = "/dashboard";
                    } else {
                        quickLoginMessage.textContent = data.message;
                        quickLoginMessage.style.color = "red";
                    }
                });
        }

        // --- ثبت‌نام
        registerForm.addEventListener('submit', e => {
            e.preventDefault();

            const name = document.getElementById("registerName").value.trim();
            const email = document.getElementById("registerEmail").value.trim();
            const phone = document.getElementById("registerPhone").value.trim();
            const password = document.getElementById("registerPassword").value.trim();

            if (!name || !email || !phone || !password) {
                alert("لطفاً همه فیلدها را پر کنید.");
                return;
            }

            fetch('/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    name, email, phone, password,
                    password_confirmation: password
                })
            })
                .then(res => {
                    if (!res.ok) throw res;
                    return res.json();
                })
                .then(data => {
                    alert(data.message || "ثبت‌نام موفق بود!");
                    setTimeout(() => window.location.href = "/dashboard", 1000);
                })
                .catch(async err => {
                    const error = await err.json();
                    alert(error.message || "خطا در ثبت‌نام!");
                });
        });

        // --- فراموشی رمز عبور
        forgotForm.addEventListener('submit', e => {
            e.preventDefault();

            const identifier = document.getElementById("forgotIdentifier").value.trim();
            const messageEl = document.getElementById("forgotMessage");

            if (!identifier) {
                messageEl.textContent = "لطفاً ایمیل یا شماره تماس را وارد کنید.";
                messageEl.style.color = "red";
                return;
            }

            fetch('/forgot-password', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ identifier })
            })
                .then(res => {
                    if (!res.ok) throw res;
                    return res.json();
                })
                .then(data => {
                    messageEl.textContent = data.message || "لینک بازیابی رمز ارسال شد.";
                    messageEl.style.color = "#facc15";
                })
                .catch(async err => {
                    const error = await err.json();
                    messageEl.textContent = error.message || "خطا در ارسال لینک بازیابی.";
                    messageEl.style.color = "red";
                });
        });
    </script>



</body>

</html>