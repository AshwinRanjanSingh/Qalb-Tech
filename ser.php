<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Our Services | QALB TECH</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        :root {
            --primary: #007bff;
            --secondary: #6c757d;
            --light: #f8f9fa;
            --dark: #212529;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background: #f8f9fa;
            color: #333;
            overflow-x: hidden;
        }

        /* Header Section */
        .hero-section {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(255,255,255,0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 80%, rgba(255,255,255,0.1) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        .hero-section h1 {
            font-family: 'Rubik', sans-serif;
            font-weight: 700;
            font-size: 3.5rem;
            color: white;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            animation: fadeInDown 1s ease-out;
        }

        .hero-section p {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.95);
            position: relative;
            z-index: 1;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Services Grid Section */
        .services-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .section-intro {
            max-width: 800px;
            margin: 0 auto 60px;
            text-align: center;
        }

        .section-intro h2 {
            font-family: 'Rubik', sans-serif;
            font-weight: 700;
            color: var(--primary);
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-intro h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), #0056b3);
            border-radius: 2px;
        }

        /* Service Cards */
        .service-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            overflow: hidden;
            position: relative;
            cursor: pointer;
        }

        .service-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(0,123,255,0.05), transparent);
            transition: left 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0,123,255,0.25);
        }

        .service-card-inner {
            padding: 40px 30px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .service-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            margin: 0 auto 25px;
            box-shadow: 0 10px 30px rgba(0,123,255,0.3);
            transition: all 0.4s ease;
            position: relative;
        }

        .service-icon::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border-radius: 50%;
            border: 2px solid var(--primary);
            opacity: 0;
            transition: all 0.4s ease;
        }

        .service-card:hover .service-icon {
            transform: rotateY(360deg) scale(1.1);
        }

        .service-card:hover .service-icon::before {
            opacity: 1;
            animation: ripple 1.5s ease-out infinite;
        }

        @keyframes ripple {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }

        .service-card h5 {
            font-family: 'Rubik', sans-serif;
            font-weight: 700;
            font-size: 1.4rem;
            color: #212529;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        .service-card:hover h5 {
            color: var(--primary);
        }

        .service-card p {
            color: #6c757d;
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .service-card .learn-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
            font-size: 1.05rem;
            transition: all 0.3s ease;
            position: relative;
        }

        .service-card .learn-more::after {
            content: '→';
            transition: transform 0.3s ease;
        }

        .service-card:hover .learn-more::after {
            transform: translateX(5px);
        }

        .service-card .learn-more:hover {
            color: #0056b3;
        }

        /* Animation Classes */
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .animate-on-scroll.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Stagger animation delays */
        .animate-on-scroll:nth-child(1) { transition-delay: 0.1s; }
        .animate-on-scroll:nth-child(2) { transition-delay: 0.2s; }
        .animate-on-scroll:nth-child(3) { transition-delay: 0.3s; }
        .animate-on-scroll:nth-child(4) { transition-delay: 0.4s; }
        .animate-on-scroll:nth-child(5) { transition-delay: 0.5s; }
        .animate-on-scroll:nth-child(6) { transition-delay: 0.6s; }
        .animate-on-scroll:nth-child(7) { transition-delay: 0.7s; }
        .animate-on-scroll:nth-child(8) { transition-delay: 0.8s; }
        .animate-on-scroll:nth-child(9) { transition-delay: 0.9s; }
        .animate-on-scroll:nth-child(10) { transition-delay: 1s; }
        .animate-on-scroll:nth-child(11) { transition-delay: 1.1s; }
        .animate-on-scroll:nth-child(12) { transition-delay: 1.2s; }

        /* Footer */
        .main-footer {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            padding: 60px 0 30px;
            margin-top: 80px;
        }

        .footer-content {
            text-align: center;
        }

        .footer-content h4 {
            font-family: 'Rubik', sans-serif;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            margin-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.2);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.2rem;
            }

            .hero-section p {
                font-size: 1.1rem;
            }

            .section-intro h2 {
                font-size: 2rem;
            }

            .service-card-inner {
                padding: 30px 20px;
            }

            .service-icon {
                width: 75px;
                height: 75px;
                font-size: 32px;
            }

            .service-card h5 {
                font-size: 1.2rem;
            }
        }

        /* Loading animation */
        @keyframes shimmer {
            0% { background-position: -1000px 0; }
            100% { background-position: 1000px 0; }
        }

        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(0,123,255,0.4);
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top.show {
            opacity: 1;
            visibility: visible;
        }

        .back-to-top:hover {
            transform: translateY(-5px);
            color: white;
        }
    </style>
</head>

<body>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1>Our Services</h1>
            <p>Empowering businesses with scalable digital and communication solutions</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-intro">
                <h2>What We Offer</h2>
                <p class="text-muted">Comprehensive technology solutions designed to transform your business operations and drive growth in the digital era.</p>
            </div>

            <div class="row g-4">

                <!-- Toll Free Numbers -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-telephone-forward-fill"></i>
                            </div>
                            <h5>Toll Free Numbers</h5>
                            <p>Boost customer trust with 1800 toll-free numbers. Enable nationwide calling without charges for your customers, perfect for support and sales.</p>
                            <a href="toll-free.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- DID Numbers -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-hash"></i>
                            </div>
                            <h5>DID Numbers</h5>
                            <p>Direct Inward Dialing numbers for professional business presence. Get local numbers in any city to establish regional presence globally.</p>
                            <a href="did-numbers.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- SIP Trunking -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-router-fill"></i>
                            </div>
                            <h5>SIP Trunking</h5>
                            <p>Replace traditional phone lines with internet-based calling. Reduce costs by up to 60% while scaling your communication infrastructure seamlessly.</p>
                            <a href="sip-trunking.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- VoIP Solutions -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <h5>VoIP Solutions</h5>
                            <p>High-quality internet calling with SIP Trunking, DID numbers, and seamless PBX integration for crystal-clear business communications.</p>
                            <a href="voip.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- IVR Systems -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-mic-fill"></i>
                            </div>
                            <h5>IVR Solutions</h5>
                            <p>Smart interactive voice response systems for enhanced customer engagement, automated support, and intelligent call routing.</p>
                            <a href="ivr.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- BPO Services -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h5>BPO Services</h5>
                            <p>24/7 professional customer support, lead management, and comprehensive back-office outsourcing solutions to scale your business.</p>
                            <a href="bpo.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- CRM Integration -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-graph-up-arrow"></i>
                            </div>
                            <h5>CRM Integration</h5>
                            <p>Automate workflows and unify communication across your sales and support teams with powerful CRM integration solutions.</p>
                            <a href="crm.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-code-slash"></i>
                            </div>
                            <h5>Web Development</h5>
                            <p>Responsive, SEO-friendly, and scalable websites designed to convert visitors into customers and grow your online presence.</p>
                            <a href="web-development.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Cloud & Security -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-shield-fill-check"></i>
                            </div>
                            <h5>Cloud & Security</h5>
                            <p>Secure cloud migration, automated backup management, and enterprise-grade cybersecurity protection for your business.</p>
                            <a href="cloud-security.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- System Administrator -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-gear-fill"></i>
                            </div>
                            <h5>System Administrator</h5>
                            <p>Expert IT infrastructure management, server maintenance, network administration, and 24/7 system monitoring for optimal performance.</p>
                            <a href="system-administrator.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-megaphone-fill"></i>
                            </div>
                            <h5>Digital Marketing</h5>
                            <p>Drive growth with SEO, social media marketing, PPC campaigns, content marketing, and data-driven strategies to boost your online presence.</p>
                            <a href="digital-marketing.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

                <!-- Unified Contact Center -->
                <div class="col-lg-4 col-md-6 animate-on-scroll">
                    <div class="card service-card">
                        <div class="service-card-inner">
                            <div class="service-icon">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </div>
                            <h5>Unified Contact Center Solutions</h5>
                            <p>Omnichannel customer engagement platform integrating voice, chat, email, and social media for seamless customer experience.</p>
                            <a href="contact-center.html" class="learn-more">Learn More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="main-footer">
        <div class="container">
            <div class="footer-content">
                <h4>QALB TECH</h4>
                <p>Empowering Communication & Technology</p>
            </div>
            <div class="footer-bottom">
                <p class="mb-0">&copy; 2025 QALB TECH. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Scroll Animation Observer
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all animated elements
        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Back to Top Button
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });

        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Add hover sound effect simulation (visual feedback)
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transition = 'all 0.4s cubic-bezier(0.4, 0, 0.2, 1)';
            });
        });

        // Smooth scroll for all links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add active state on card click
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function(e) {
                if (!e.target.closest('.learn-more')) {
                    const link = this.querySelector('.learn-more');
                    if (link) {
                        window.location.href = link.href;
                    }
                }
            });
        });
    </script>

</body>
</html>