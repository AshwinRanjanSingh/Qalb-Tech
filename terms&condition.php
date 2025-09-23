php<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QALB TECH</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

        /* Icon styling for sections */
        .section:nth-child(1) h2::after { content: '📋'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(2) h2::after { content: '🔧'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(3) h2::after { content: '🛡️'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(4) h2::after { content: '📄'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(5) h2::after { content: '💳'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(6) h2::after { content: '⚖️'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(7) h2::after { content: '🔒'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(8) h2::after { content: '🔗'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(9) h2::after { content: '🚫'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(10) h2::after { content: '⚖️'; font-size: 1.5rem; margin-left: auto; }
        .section:nth-child(11) h2::after { content: '📝'; font-size: 1.5rem; margin-left: auto; }

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

        <div class="container-fluid bg-primary py-5 bg-header4" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" style="margin-top: 90px;">Terms & Conditions</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Terms & Conditions</a>
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
            <h1>Terms & Conditions</h1>
            <p class="subtitle">Understanding our service agreement and your rights</p>
            <div class="breadcrumb">
                <span>Home</span>
                <i class="fas fa-chevron-right"></i>
                <span>Legal</span>
                <i class="fas fa-chevron-right"></i>
                <span>Terms & Conditions</span>
            </div>
        </div>
    </header> -->

    <!-- Main Content -->
    <div class="container">
        <div class="content-wrapper">
            <div class="content">
                <!-- <div class="last-updated">
                    <i class="fas fa-calendar-alt" style="margin-right: 10px;"></i>
                    <strong>Last Updated:</strong> [Date] - Please review these terms carefully as they govern your use of our services.
                </div> -->

                <p style="font-size: 1.15rem; color: #4a5568; margin-bottom: 40px; font-style: italic;">
                    Please read these Terms & Conditions carefully before using our website or services. By accessing or using our platform, you agree to be bound by these terms.
                </p>

                <div class="section">
                    <h2>1. Terms & Conditions</h2>
                    <ul>
                        <li><strong>Company:</strong>QALB TECH</li>
                        <li><strong>User/Client/You:</strong> Any person or organization using our services.</li>
                        <li><strong>Services:</strong> All solutions offered by us, including but not limited to Software Development, AI Solutions, Cloud Services, IT Support, Digital Marketing, and Consulting.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>2. Use of Services</h2>
                    <ul>
                        <li>You may use our services only for lawful purposes.</li>
                        <li>You must not engage in illegal, harmful, or unethical activities while using our platform.</li>
                        <li>We reserve the right to suspend or terminate access to any user violating these terms.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>3. Intellectual Property</h2>
                    <ul>
                        <li>All content, software, logos, and designs available on our website are owned by us or our licensors.</li>
                        <li>Copying, redistributing, or reproducing our intellectual property without written permission is prohibited.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>4. Service Agreements</h2>
                    <ul>
                        <li>Each service may come with specific terms, pricing, and timelines, which will be communicated before engagement.</li>
                        <li>Deliverables, scope, and deadlines will be defined in a written agreement between the client and the company.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>5. Payments & Refunds</h2>
                    <ul>
                        <li>Payments for services may be advance or milestone-based, as agreed upon.</li>
                        <li>Refunds are applicable only in exceptional cases, such as non-delivery of the agreed service.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>6. Limitation of Liability</h2>
                    <ul>
                        <li>While we strive for accuracy and reliability, we do not guarantee uninterrupted service.</li>
                        <li>We are not liable for indirect damages, data loss, or technical issues beyond our control.</li>
                        <li>Our maximum liability shall not exceed the amount you have paid for the service.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>7. Privacy & Data Security</h2>
                    <ul>
                        <li>Your personal and business data will be protected in accordance with our Privacy Policy.</li>
                        <li>We will not share your information with third parties without your consent, except as required by law.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>8. Third-Party Services</h2>
                    <ul>
                        <li>Our website or services may include third-party tools or links.</li>
                        <li>We are not responsible for the reliability, content, or policies of third-party services.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>9. Termination</h2>
                    <ul>
                        <li>We may terminate or restrict your access to our services at any time if you violate these terms.</li>
                        <li>Upon termination, clauses regarding intellectual property, liability, and payments will remain in effect.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>10. Governing Law</h2>
                    <ul>
                        <li>These terms shall be governed by and interpreted under the laws of [Your Country/State].</li>
                        <li>Any disputes shall be subject to the exclusive jurisdiction of the courts in [City/State].</li>
                    </ul>
                </div>

                <!-- <div class="section">
                    <h2>11. Changes to Terms</h2>
                    <ul>
                        <li>We reserve the right to modify or update these terms at any time.</li>
                        <li>Continued use of our services after updates implies acceptance of the revised terms.</li>
                    </ul>
                </div> -->

                <!-- <div class="contact-cta">
                    <h3>Questions About These Terms?</h3>
                    <p>If you have any questions or concerns about our Terms & Conditions, we're here to help.</p>
                    <a href="#contact" class="contact-btn">
                        <i class="fas fa-envelope" style="margin-right: 8px;"></i>
                        Contact Us
                    </a>
                </div> -->
            </div>
        </div>
    </div>
        <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
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
    <!-- Footer<footer class="footer">
        <p>&copy; 2024 Startup. All Rights Reserved. Designed with ❤️ for better business growth.</p>
    </footer>

    <Scroll to Top Button
    <div class="scroll-top" onclick="scrollToTop()">
        <i class="fas fa-arrow-up"></i>
    </div> -->

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
    </script>
</body>
</html>