<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QALB TECH</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
        <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    /* --- 1. General Dropdown Menu Styling and Hiding --- */

/* Initially hide both the main dropdown and all submenus */
.dropdown-menu,
.subdropdown {
    display: none;
    position: absolute;
    /* Basic styling to make the menu visible */
    background-color: #ffffff; /* Use your desired background color */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1000; /* Ensure it appears above other content */
    min-width: 250px;
    padding: 0;
    margin: 0;
    list-style: none;
}

/* Make sure the main dropdown is positioned under the Services link */
.nav-item.dropdown {
    position: relative; /* Crucial for positioning the dropdown-menu */
}

/* Position the main dropdown menu */
.nav-item.dropdown .dropdown-menu {
    top: 100%; /* Place it right below the main Services link */
    left: 0;
}


/* --- 2. Multi-Level Submenu Positioning and Hiding --- */

/* The parent item for the submenu needs relative positioning */
.has-subdropdown {
    position: relative; 
}

/* Position the submenu */
.has-subdropdown .subdropdown {
    top: 0; 
    left: 100%; /* Pushes the submenu to the right of its parent item */
    /* Add a slight horizontal shift to prevent jitter on hover */
    margin-left: 1px; 
}

/* Style the submenu links to look like dropdown items */
.subdropdown a {
    display: block;
    padding: 0.25rem 1rem;
    clear: both;
    font-weight: 400;
    color: #000;
    text-align: inherit;
    text-decoration: none;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}

.subdropdown a:hover {
    color: var(--primary); /* Use your primary theme color */
    background-color: #f8f9fa;
}


/* --- 3. Hover Logic (Showing the Menus) --- */

/* A. Show the main dropdown menu when hovering over 'Services' */
.nav-item.dropdown:hover > .dropdown-menu {
    display: block;
}

/* B. Show the submenu when hovering over the parent item (e.g., 'CRM Solutions') */
.has-subdropdown:hover > .subdropdown {
    display: block;
}
</style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8f9fa;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #1a2332 0%, #2d3748 100%);
            color: white;
            padding: 80px 0 120px;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="2" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="40" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="40" cy="80" r="1.5" fill="rgba(255,255,255,0.1)"/></svg>');
        }

        .nav {
            background: rgba(26, 35, 50, 0.95);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #22d3ee;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .header h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #ffffff 0%, #22d3ee 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header .subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            font-size: 1rem;
            opacity: 0.8;
        }

        .breadcrumb i {
            color: #22d3ee;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: px 20px;
        }

        .content-wrapper {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            overflow: hidden;
            position: relative;
        }

        .content-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #22d3ee 0%, #06b6d4 100%);
        }

        .content {
            padding: 60px;
        }

        .last-updated {
            background: linear-gradient(135deg, #e0f7fa 0%, #f0f9ff 100%);
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 40px;
            border-left: 4px solid #22d3ee;
            font-weight: 600;
            color: #0f766e;
        }

        .privacy-summary {
            background: linear-gradient(135deg, #fef7e0 0%, #fefce8 100%);
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 40px;
            border-left: 4px solid #f59e0b;
            position: relative;
        }

        .privacy-summary::before {
            content: '🔒';
            position: absolute;
            top: 20px;
            right: 25px;
            font-size: 2rem;
            opacity: 0.3;
        }

        .privacy-summary h3 {
            color: #92400e;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .privacy-summary p {
            color: #a16207;
            font-size: 1.05rem;
        }

        .section {
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.6s forwards;
        }

        .section:nth-child(even) {
            animation-delay: 0.1s;
        }

        .section:nth-child(odd) {
            animation-delay: 0.2s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a2332;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .section h2::before {
            content: '';
            width: 40px;
            height: 4px;
            background: linear-gradient(90deg, #22d3ee 0%, #06b6d4 100%);
            border-radius: 2px;
        }

        .section p {
            margin-bottom: 15px;
            color: #4a5568;
            font-size: 1.1rem;
        }

        .section ul {
            margin: 20px 0;
            padding-left: 0;
            list-style: none;
        }

        .section li {
            background: #f7fafc;
            margin: 10px 0;
            padding: 15px 20px;
            border-radius: 10px;
            border-left: 4px solid #22d3ee;
            transition: all 0.3s ease;
            position: relative;
        }

        .section li:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(34, 211, 238, 0.15);
            background: #f0f9ff;
        }

        .section li strong {
            color: #1a2332;
            font-weight: 600;
        }

        /* Special styling for data types */
        .data-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .data-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            padding: 25px;
            border-radius: 15px;
            border-left: 4px solid #0ea5e9;
            position: relative;
            transition: all 0.3s ease;
        }

        .data-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(14, 165, 233, 0.15);
        }

        .data-card h4 {
            color: #0c4a6e;
            font-size: 1.2rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .data-card p {
            color: #0369a1;
            font-size: 1rem;
            margin: 0;
        }

        /* Icon styling for sections */
        .section:nth-child(1) h2::after { content: '📊'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(2) h2::after { content: '💾'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(3) h2::after { content: '🎯'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(4) h2::after { content: '🔄'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(5) h2::after { content: '🔐'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(6) h2::after { content: '🍪'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(7) h2::after { content: '👥'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(8) h2::after { content: '⚖️'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(9) h2::after { content: '🌍'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(10) h2::after { content: '👶'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(11) h2::after { content: '🔄'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(12) h2::after { content: '📞'; font-size: 1.5rem; margin-left: auto; }

        /* Contact CTA */
        .contact-cta {
            background: linear-gradient(135deg, #22d3ee 0%, #06b6d4 100%);
            color: white;
            padding: 40px;
            border-radius: 15px;
            text-align: center;
            margin-top: 50px;
        }

        .contact-cta h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
        }

        .contact-cta p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .contact-btn {
            display: inline-block;
            background: white;
            color: #22d3ee;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(255,255,255,0.2);
            margin-right: 15px;
        }

        .contact-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255,255,255,0.3);
        }

        /* Footer */
        .footer {
            background: #1a2332;
            color: white;
            text-align: center;
            padding: 40px 0;
        }

        .footer p {
            opacity: 0.8;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }

            .content {
                padding: 30px;
            }

            .nav-links {
                display: none;
            }

            .data-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Scroll to top button */
        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #22d3ee 0%, #06b6d4 100%);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(34, 211, 238, 0.3);
        }
    </style>
</head>
<body>
<?php
include('header.php');
?>
        <div class="container-fluid bg-primary py-5 bg-header3 " style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" style="margin-top: 90px;">Privacy Policy</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Privacy Policy</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
        
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    <!-- Navigation
    <nav class="nav">
        <div class="nav-container">
            <a href="#" class="logo">
                <i class="fas fa-rocket" style="margin-right: 8px; color: #22d3ee;"></i>
                Startup
            </a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    Header
    <header class="header">
        <div class="header-content">
            <h1>Privacy Policy</h1>
            <p class="subtitle">Your privacy matters - learn how we protect your data</p>
            <div class="breadcrumb">
                <span>Home</span>
                <i class="fas fa-chevron-right"></i>
                <span>Legal</span>
                <i class="fas fa-chevron-right"></i>
                <span>Privacy Policy</span>
            </div>
        </div>
    </header> -->

    <!-- Main Content -->
    <div class="container">
        <div class="content-wrapper">
            <div class="content">
                <!-- <div class="last-updated">
                    <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i>
                    <strong>Last Updated:</strong> [Date] - We regularly review and update our privacy practices.
                </div> -->
<!-- 
                <div class="privacy-summary">
                    <h3>Your Privacy at a Glance</h3>
                    <p>QALB TECH ("Company", "we", "our", or "us") respects your privacy and is committed to protecting your personal data. This Privacy Policy explains how we collect, use, store, and protect your information when you use our website and services.</p>
                </div> -->

                <div class="section">
                    <h2>1. Information We Collect</h2>
                    <p>We may collect the following types of information:</p>
                    
                    <div class="data-grid">
                        <div class="data-card">
                            <h4><i class="fas fa-user"></i> Personal Information</h4>
                            <p>Name, email, phone number, company details, billing information, etc. (when you register, request services, or contact us).</p>
                        </div>
                        <div class="data-card">
                            <h4><i class="fas fa-laptop"></i> Technical Data</h4>
                            <p>IP address, browser type, device details, cookies, and usage statistics.</p>
                        </div>
                        <div class="data-card">
                            <h4><i class="fas fa-cogs"></i> Service Data</h4>
                            <p>Information related to projects, files, or data you share with us to use our services (e.g., AI tools, IT support, software solutions).</p>
                        </div>
                    </div>
                </div>

                <div class="section">
                    <h2>2. How We Use Your Information</h2>
                    <p>We use your information to:</p>
                    <ul>
                        <li><strong>Service Provision:</strong> Provide and improve our services.</li>
                        <li><strong>Communication:</strong> Communicate with you regarding updates, offers, and support.</li>
                        <li><strong>Payment Processing:</strong> Process payments and manage accounts.</li>
                        <li><strong>Security:</strong> Ensure website security and prevent fraud.</li>
                        <li><strong>Legal Compliance:</strong> Comply with legal obligations.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>3. Cookies & Tracking</h2>
                    <ul>
                        <li><strong>Enhanced Experience:</strong> We use cookies and tracking technologies to enhance user experience, analyze traffic, and improve our website.</li>
                        <li><strong>Cookie Control:</strong> You can manage or disable cookies through your browser settings.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>4. Sharing of Information</h2>
                    <p>We do not sell or rent your data to third parties. We may share your information only with:</p>
                    <ul>
                        <li><strong>Trusted Service Providers:</strong> For payment processing, hosting, analytics, etc.</li>
                        <li><strong>Legal Authorities:</strong> If required by law or to protect our legal rights.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>5. Data Security</h2>
                    <ul>
                        <li><strong>Advanced Protection:</strong> We implement advanced technical and organizational measures to protect your data from unauthorized access, loss, or misuse.</li>
                        <li><strong>Security Limitation:</strong> However, no online system is 100% secure, and we cannot guarantee absolute security.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>6. Data Retention</h2>
                    <ul>
                        <li><strong>Retention Period:</strong> We retain your personal information only for as long as necessary to fulfill the purposes outlined in this policy or as required by law.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>7. Your Rights</h2>
                    <p>Depending on your location, you may have the right to:</p>
                    <ul>
                        <li><strong>Access & Correction:</strong> Access, correct, or update your personal data.</li>
                        <li><strong>Data Deletion:</strong> Request deletion of your data.</li>
                        <li><strong>Marketing Opt-Out:</strong> Opt-out of marketing communications.</li>
                        <li><strong>Consent Withdrawal:</strong> Withdraw consent where processing is based on consent.</li>
                    </ul>
                    <p style="margin-top: 15px; padding: 15px; background: #f0f9ff; border-left: 4px solid #0ea5e9; border-radius: 8px;">
                        <strong>Exercise Your Rights:</strong> To exercise these rights, please contact us at <strong>[your email/contact]</strong>.
                    </p>
                </div>

                <div class="section">
                    <h2>8. Third-Party Links</h2>
                    <ul>
                        <li><strong>External Links:</strong> Our website may contain links to third-party websites. We are not responsible for their privacy practices or content.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>9. Children's Privacy</h2>
                    <ul>
                        <li><strong>Age Restriction:</strong> Our services are not directed to children under 13 (or under 16 where applicable by law).</li>
                        <li><strong>No Minor Data:</strong> We do not knowingly collect data from minors.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>10. Changes to Privacy Policy</h2>
                    <ul>
                        <li><strong>Policy Updates:</strong> We may update this Privacy Policy from time to time.</li>
                        <li><strong>Notification:</strong> Updates will be posted on this page with a new "Last Updated" date.</li>
                    </ul>
                </div>

                <div class="section">
                    <!-- <h2>11. Contact Us</h2>
                    <p>If you have any questions about this Privacy Policy or your personal data, please contact us:</p> -->
                    
                    <!-- <div class="data-grid" style="margin-top: 20px;">
                        <div class="data-card">
                            <h4><i class="fas fa-envelope"></i> Email</h4>
                            <p>[Your Email]</p>
                        </div>
                        <div class="data-card">
                            <h4><i class="fas fa-map-marker-alt"></i> Address</h4>
                            <p>[Company Address]</p>
                        </div>
                        <div class="data-card">
                            <h4><i class="fas fa-phone"></i> Phone</h4>
                            <p>[Contact Number]</p>
                        </div>
                    </div> -->
                </div>

                <!-- <div class="contact-cta">
                    <h3>Questions About Your Privacy?</h3>
                    <p>We're committed to transparency and protecting your privacy. Don't hesitate to reach out with any concerns.</p>
                    <a href="#contact" class="contact-btn">
                        <i class="fas fa-shield-alt" style="margin-right: 8px;"></i>
                        Privacy Inquiry
                    </a>
                    <a href="#settings" class="contact-btn">
                        <i class="fas fa-cog" style="margin-right: 8px;"></i>
                        Privacy Settings
                    </a>
                </div> -->
            </div>
        </div>
    </div>
        <!-- Vendor Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.webp" alt="">
                    <img src="img/vendor-2.webp" alt="">
                    <img src="img/vendor-3.webp" alt="">
                    <img src="img/vendor-4.webp" alt="">
                    <img src="img/vendor-5.webp" alt="">
                    <img src="img/vendor-6.webp" alt="">
                    <img src="img/vendor-7.webp" alt="">
                    <img src="img/vendor-8.webp" alt="">
                    <img src="img/vendor-9.webp" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->
<?php
include('footer.php');
?>
    <!-- Scroll to Top Button
    <div class="scroll-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div> -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top" ><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        // Scroll to top functionality
        window.onscroll = function() {
            const scrollButton = document.querySelector('.scroll-top');
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollButton.classList.add('show');
            } else {
                scrollButton.classList.remove('show');
            }
        };

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add subtle animation to data cards
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.data-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>