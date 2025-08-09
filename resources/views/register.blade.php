<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HealthMate Registration</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #fff;
            margin: 0;
            padding: 0;
        }
        .top-bar {
            background: #23272b;
            color: #fff;
            padding: 6px 0;
            font-size: 16px;
            text-align: left;
            padding-left: 16px;
        }
        .main-header {
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 40px 18px 40px;
            border-bottom: 1px solid #e5e7eb;
        }
        .main-header .logo {
            height: 60px;
        }
        .main-header nav {
            display: flex;
            gap: 36px;
            align-items: center;
        }
        .main-header nav a {
            color: #23272b;
            text-decoration: none;
            font-size: 18px;
            padding: 6px 0;
            border-bottom: 2px solid transparent;
            transition: border 0.2s;
        }
        .main-header nav a.active,
        .main-header nav a:hover {
            border-bottom: 2px solid #2563eb;
        }
        .main-header .right {
            display: flex;
            align-items: center;
            gap: 18px;
        }
        .main-header .support-btn {
            border: 2px solid #23272b;
            border-radius: 30px;
            padding: 8px 24px;
            background: #fff;
            color: #23272b;
            font-size: 17px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: background 0.2s, color 0.2s;
        }
        .main-header .support-btn:hover {
            background: #2563eb;
            color: #fff;
            border-color: #2563eb;
        }
        .main-header .icon {
            font-size: 20px;
        }
        .main-header .signin-link {
            color: #23272b;
            text-decoration: none;
            font-size: 17px;
            margin-left: 10px;
        }
        .main-header .signin-link:hover {
            text-decoration: underline;
        }
        .main-header .bucket {
            font-size: 20px;
            margin-left: 10px;
        }
        .background-image {
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80') no-repeat center center;
            background-size: cover;
            min-height: 100vh;
            width: 100vw;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }
        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 24px;
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 32px #0002;
            position: relative;
        }
        h1 {
            text-align: center;
            color: #19505b;
            margin-bottom: 24px;
        }
        .steps {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 32px;
            gap: 24px;
        }
        .step {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .step-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #22a06b;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            font-weight: bold;
        }
        .step.inactive .step-circle {
            background: #e5e7eb;
            color: #888;
        }
        .step-bar {
            width: 60px;
            height: 4px;
            background: #22a06b;
            margin: 0 8px;
            border-radius: 2px;
        }
        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 18px;
        }
        .form-group {
            flex: 1;
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 15px;
            color: #19505b;
            margin-bottom: 6px;
        }
        input[type="text"],
        input[type="email"],
        textarea,
        select {
            padding: 12px;
            border: 1px solid #22a06b;
            border-radius: 8px;
            font-size: 15px;
            background: #fff;
            resize: none;
        }
        textarea {
            min-height: 100px;
        }
        .verify-btn {
            margin-top: 24px;
            height: 44px;
            padding: 0 18px;
            background: #fff;
            color: #2563eb;
            border: 1px solid #2563eb;
            border-radius: 6px;
            font-size: 15px;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .verify-btn:hover {
            background: #2563eb;
            color: #fff;
        }
        .email-row {
            display: flex;
            gap: 10px;
            align-items: stretch;
        }
        .email-row input[type="email"] {
            flex: 1;
            height: 43px;
            box-sizing: border-box;
        }
        .email-row .verify-btn {
            height: 43px;
            margin-top: 0;
            padding: 0 18px;
            box-sizing: border-box;
            display: flex;
            align-items: center;
        }
        .country-row {
            display: flex;
            gap: 20px;
            margin-bottom: 32px;
        }
        .country-row .form-group {
            flex: 1;
        }
        .submit-btn {
            background: #22a06b;
            color: #fff;
            border: none;
            padding: 12px 32px;
            border-radius: 8px;
            font-size: 17px;
            cursor: pointer;
            margin: 0 auto;
            display: block;
            transition: background 0.2s;
        }
        .submit-btn:hover {
            background: #19505b;
        }
        .footer {
            background: #0e434b;
            color: #fff;
            margin-top: 60px;
            font-family: 'Segoe UI', Arial, sans-serif;
        }
        .footer-main {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 48px 0 24px 0;
            max-width: 1400px;
            margin: 0 auto;
        }
        .footer-col {
            flex: 1 1 220px;
            margin: 0 24px;
            min-width: 220px;
        }
        .logo-col {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .footer-logo {
            width: 180px;
            margin-bottom: 24px;
        }
        .footer-social a {
            display: inline-block;
            margin-right: 16px;
        }
        .footer-social img {
            width: 40px;
            height: 40px;
            background: #2e5e65;
            border-radius: 50%;
            padding: 8px;
            transition: background 0.2s;
        }
        .footer-social img:hover {
            background: #fff;
        }
        .footer-col h3 {
            font-size: 26px;
            margin-bottom: 18px;
            font-weight: 500;
        }
        .footer-col ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer-col ul li {
            margin-bottom: 12px;
        }
        .footer-col ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.2s;
        }
        .footer-col ul li a:hover {
            color: #22a06b;
        }
        .footer-contact, .footer-address {
            font-size: 18px;
            line-height: 1.7;
        }
        .footer-icon {
            font-size: 22px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .footer-bottom {
            border-top: 1px solid #19505b;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 40px;
            font-size: 18px;
            background: #0e434b;
            flex-wrap: wrap;
        }
        .footer-pay {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .footer-pay img {
            height: 32px;
            background: #fff;
            border-radius: 6px;
            padding: 2px 6px;
        }
        @media (max-width: 900px) {
            .footer-main {
                flex-direction: column;
                align-items: flex-start;
                padding: 32px 16px 16px 16px;
            }
            .footer-col {
                margin-bottom: 32px;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 10px;
                padding: 18px 10px;
                text-align: center;
            }
        }
        /* Responsive */
        @media (max-width: 1200px) {
            .container {
                margin: 24px;
            }
        }
        @media (max-width: 900px) {
            .form-row, .country-row {
                flex-direction: column;
                gap: 0;
            }
            .main-header {
                flex-direction: column;
                gap: 16px;
                padding: 18px 10px;
            }
        }
    </style>
</head>
<body>
    <div class="background-image"></div>
    <div class="top-bar">
        Welcome to Lifed – Your Wellness Partner
    </div>
    <div class="main-header">
        <img src="{{ asset('images/lifed-logo-black.webp') }}" alt="Lifed Logo" class="logo">
        <nav>
            <a href="#">Home</a>
            <a href="#">Wellness Products</a>
            <a href="#">About Us</a>
            <a href="#">Add Your Program</a>
            <a href="#">Contact Us</a>
        </nav>
        <div class="right">
            <!-- <span style="font-size:15px;">🌐 Currency</span>
            <span class="bucket">🛒 Bucket List</span> -->
            <a href="{{ route('login') }}" class="signin-link">🔒 SignIn</a>
            <button class="support-btn"><span class="icon">📞</span> Quick Support</button>
        </div>
    </div>
    <div class="container">
        <h1>HealthMate Registration</h1>
        <div class="steps">
            <div class="step active">
                <div class="step-circle">1</div>
            </div>
            <div class="step-bar"></div>
            <div class="step inactive">
                <div class="step-circle">2</div>
            </div>
        </div>
        <form>
            <div class="form-row">
                <div class="form-group">
                    <label for="centre">Centre Name</label>
                    <input type="text" id="centre" placeholder="Enter centre name">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="email">Email ID</label>
                    <div class="email-row">
                        <input type="email" id="email" placeholder="Enter email">
                        <button type="button" class="verify-btn">Verify Email</button>
                    </div>
                </div>
            </div>
            <div class="form-group" style="margin-bottom: 24px;">
                <label for="address">Address</label>
                <textarea id="address" placeholder="Enter address"></textarea>
            </div>
            <div class="country-row">
                <div class="form-group">
                    <label for="country">Country</label>
                    <select id="country">
                        <option>Select Country</option>
                        <option>India</option>
                        <option>USA</option>
                        <!-- Add more countries -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="state">State</label>
                    <select id="state">
                        <option>Select State</option>
                        <option>Kerala</option>
                        <option>Tamil Nadu</option>
                        <!-- Add more states -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <select id="city">
                        <option>Select City</option>
                        <option>Trivandrum</option>
                        <option>Kochi</option>
                        <!-- Add more cities -->
                    </select>
                </div>
            </div>
            <button type="submit" class="submit-btn">Continue to Step 2</button>
        </form>
    </div>
    <!-- Footer Start -->
    <footer class="footer">
        <div class="footer-main">
            <div class="footer-col logo-col">
                <img src="{{ asset('images/lifed-logo-black.webp') }}" alt="Lifed Logo" class="footer-logo">
                <div class="footer-social">
                    <a href="#"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook"></a>
                    <a href="#"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram"></a>
                    <a href="#"><img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/twitter.svg" alt="Twitter"></a>
                </div>
            </div>
            <div class="footer-col">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Our Service</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h3>Contact Details</h3>
                <div class="footer-contact">
                    <div><span class="footer-icon">📞</span> +91 8590 122 187</div>
                    <div><span class="footer-icon">✉️</span> lifedthehealthapp@gmail.com</div>
                </div>
            </div>
            <div class="footer-col">
                <h3>Address</h3>
                <div class="footer-address">
                    <div><span class="footer-icon">📍</span> Room No.432/10,<br>
                    Shoranur Govt.Press P O,<br>
                    Shoanur Road, Kulapuly,<br>
                    Pin:679122, Palakkad,<br>
                    Kerala, India</div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div>
                Copyright {{ date('Y') }} Lifed. All Rights Reserved.
            </div>
            <div class="footer-pay">
                We Accept
                <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" alt="Mastercard" />
                <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa" />
                <img src="https://img.icons8.com/color/48/000000/paypal.png" alt="Paypal" />
                <img src="https://img.icons8.com/color/48/000000/apple-pay.png" alt="Apple Pay" />
            </div>
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>
