<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Our Services | QALB TECH</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="" type="image">

    <!-- Template Stylesheet -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style>
        /* --- Color Palette --- */
        :root {
            --primary-sky-blue: #007bff;
            /* Main Sky Blue: Azure */
            --light-sky-blue: #f0f8ff;
            /* Very Light Blue (almost white) */
            --medium-sky-blue: #e0f7ff;
            /* Light Blue for subtle contrast */
            --dark-blue: #0056b3;
            /* Darker Blue for hover/accent */
            --accent-white: #ffffff;
            --text-dark: #333333;
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-medium: rgba(0, 123, 255, 0.3);
        }

        /* --- Global & Full Width Layout --- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-sky-blue);
            color: var(--text-dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Prevent horizontal scroll from animations */
        }

        /* Container to center content */
        .content-container {
            padding: 0 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Section Padding */
        .main-content>div {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        /* Title Styling */
        .section-title {
            text-align: center;
            font-size: 2.8em;
            color: var(--dark-blue);
            margin-bottom: 50px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary-sky-blue);
            margin: 15px auto 0;
            border-radius: 2px;
            transition: width 0.8s ease;
        }

        .white-text {
            color: var(--accent-white);
        }

        .white-text::after {
            background: var(--accent-white);
        }

        /* Primary CTA Button Style */
        .cta-button {
            display: inline-block;
            padding: 14px 35px;
            background: var(--dark-blue);
            color: var(--accent-white);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);
            border: none;
        }

        .cta-button:hover {
            background-color: var(--primary-sky-blue);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.7);
        }

        /* --- Scroll Animations Base Styles (Crucial for the effect) --- */

        /* Base state for all scroll-animated elements (initially hidden/offset) */
        .scroll-animate {
            opacity: 0;
            transform: translateY(40px);
            /* Slide-up effect */
            transition: opacity 0.8s cubic-bezier(0.23, 1, 0.32, 1), transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* Slide-left variant */
        .scroll-animate[data-animation="slide-left"] {
            transform: translateX(40px);
        }

        /* Final state when the element is visible (JS adds 'is-visible' class) */
        .scroll-animate.is-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        /* Setting Staggered Delays via CSS variables (automatically picked up by JS) */
        .scroll-animate[data-delay="100"] {
            transition-delay: 0.1s;
        }

        .scroll-animate[data-delay="200"] {
            transition-delay: 0.2s;
        }

        .scroll-animate[data-delay="300"] {
            transition-delay: 0.3s;
        }

        .scroll-animate[data-delay="400"] {
            transition-delay: 0.4s;
        }

        .scroll-animate[data-delay="500"] {
            transition-delay: 0.5s;
        }

        .scroll-animate[data-delay="600"] {
            transition-delay: 0.6s;
        }

        .scroll-animate[data-delay="700"] {
            transition-delay: 0.7s;
        }

        .scroll-animate[data-delay="800"] {
            transition-delay: 0.8s;
        }

        .scroll-animate[data-delay="1000"] {
            transition-delay: 1.0s;
        }


        /* --- Header Banner (Full Width Parallax) --- */
        .header-banner {
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.9), rgba(0, 123, 255, 0.7)), url('https://picsum.photos/1600/600?random=1') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
            /* Parallax effect */
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--accent-white);
        }

        .header-banner h1 {
            font-size: 5em;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }


        /* --- Overview Section (Flex Layout) --- */
        .overview-section {
            background: var(--accent-white);
        }

        .section-flex {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .overview-content {
            flex: 2;
        }

        .overview-image {
            flex: 1;
            min-height: 350px;
            border-radius: 20px;
            background: url('https://picsum.photos/800/800?random=2') center center no-repeat;
            background-size: cover;
            box-shadow: 0 10px 30px var(--shadow-medium);
        }

        /* --- Card Grid Styles (Service, Deliver, Sub-Types) --- */
        .service-grid,
        .deliver-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .service-card,
        .deliver-card {
            background: var(--accent-white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 6px 20px var(--shadow-light);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
            text-align: center;
            border-top: 5px solid transparent;
        }

        .service-card:hover,
        .deliver-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px var(--shadow-medium);
            border-top-color: var(--primary-sky-blue);
        }

        .icon-placeholder {
            font-size: 3.5em;
            margin-bottom: 15px;
            color: var(--primary-sky-blue);
            transition: transform 0.5s ease, color 0.3s ease;
        }

        .service-card:hover .icon-placeholder,
        .deliver-card:hover .icon-placeholder {
            color: var(--dark-blue);
            transform: scale(1.1) rotateY(360deg);
            /* 3D Spin effect on hover */
        }


        /* --- How We Deliver Section (Full Width Process Banner) --- */
        .design-points {
            background-color: var(--primary-sky-blue);
            padding: 80px 0;
            /* Full width padding adjustment */
            position: relative;
            background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.1) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.1) 50%, rgba(255, 255, 255, 0.1) 75%, transparent 75%, transparent);
            background-size: 40px 40px;
        }

        .points-container {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin-top: 50px;
        }

        /* Flow Line Animation */
        .points-container::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 3px;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1;
            transform: translateY(-50%) scaleX(0);
            transform-origin: left;
            transition: transform 1.5s cubic-bezier(0.23, 1, 0.32, 1);
        }

        /* JS toggles this class when the container is visible */
        .points-container.is-visible::before {
            transform: translateY(-50%) scaleX(1);
        }

        .point-card {
            flex: 1 1 18%;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            background: var(--accent-white);
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            z-index: 2;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .point-card:hover {
            transform: translateY(-5px);
            background-color: var(--medium-sky-blue);
        }

        .point-number {
            font-size: 3em;
            font-weight: 700;
            color: var(--primary-sky-blue);
            display: block;
            margin-bottom: 10px;
            position: relative;
        }

        .point-number::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60px;
            height: 60px;
            border: 3px solid var(--primary-sky-blue);
            border-radius: 50%;
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.4s ease, opacity 0.4s ease;
        }

        .point-card:hover .point-number::after {
            transform: translate(-50%, -50%) scale(1.2);
            opacity: 0;
            /* Fade out effect for the ring */
        }


        /* --- Extra Info Section (US Market) --- */
        .extra-info-section {
            background: var(--medium-sky-blue);
        }

        .info-columns {
            display: flex;
            gap: 30px;
        }

        .info-col {
            flex: 1 1 50%;
            background: var(--accent-white);
            padding: 25px;
            border-radius: 8px;
            border-left: 5px solid var(--primary-sky-blue);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .info-col:hover {
            transform: translateY(-3px);
        }

        .info-col h3 {
            color: var(--dark-blue);
            margin-top: 0;
            border-bottom: 2px dashed #007bff30;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .info-col ul {
            list-style: none;
            padding: 0;
        }

        .info-col li {
            padding: 5px 0;
            border-bottom: 1px dotted #ccc;
            font-size: 0.95em;
        }


        /* --- CTA Banner (Full Width Parallax) --- */
        .cta-banner {
            background: linear-gradient(rgba(0, 86, 179, 0.9), rgba(0, 86, 179, 0.9)), url('https://picsum.photos/1600/500?random=3') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
            /* Parallax effect */
            color: var(--accent-white);
            padding: 100px 5%;
            text-align: center;
        }

        .secondary-cta-button {
            background: var(--accent-white);
            color: var(--primary-sky-blue);
            font-weight: 700;
        }

        .secondary-cta-button:hover {
            background: var(--light-sky-blue);
            color: var(--dark-blue);
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.8);
        }


        /* --- Responsive Adjustments --- */
        @media (max-width: 992px) {
            .header-banner h1 {
                font-size: 3em;
            }

            .section-flex {
                flex-direction: column;
            }

            .reverse-on-mobile {
                flex-direction: column-reverse;
                /* For image-text alternation */
            }

            .overview-image {
                min-height: 300px;
                width: 100%;
                margin-top: 20px;
            }

            .points-container {
                flex-direction: column;
                gap: 30px;
            }

            .point-card {
                flex: 1 1 100%;
                width: 100%;
            }

            /* Vertical line for mobile flow */
            .points-container::before {
                width: 3px;
                height: 100%;
                top: 0;
                left: 50%;
                right: auto;
                transform: translateX(-50%) scaleY(0);
                transform-origin: top;
            }

            .points-container.is-visible::before {
                transform: translateX(-50%) scaleY(1);
            }
        }

        .industry-section-card {
            /* ▼▼▼ YEH LINE JODEN ▼▼▼ */
            scroll-margin-top: 250px;
            /* Aapke navbar ki height ke barabar value daalein */
        }
    </style>
    <style>
        /* --- 1. General Dropdown Menu Styling and Hiding --- */

        /* Initially hide both the main dropdown and all submenus */
        .dropdown-menu,
        .subdropdown {
            display: none;
            position: absolute;
            /* Basic styling to make the menu visible */
            background-color: #ffffff;
            /* Use your desired background color */
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            /* Ensure it appears above other content */
            min-width: 250px;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        /* Make sure the main dropdown is positioned under the Services link */
        .nav-item.dropdown {
            position: relative;
            /* Crucial for positioning the dropdown-menu */
        }

        /* Position the main dropdown menu */
        .nav-item.dropdown .dropdown-menu {
            top: 100%;
            /* Place it right below the main Services link */
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
            left: 100%;
            /* Pushes the submenu to the right of its parent item */
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
            color: var(--primary);
            /* Use your primary theme color */
            background-color: #f8f9fa;
        }


        /* --- 3. Hover Logic (Showing the Menus) --- */

        /* A. Show the main dropdown menu when hovering over 'Services' */
        .nav-item.dropdown:hover>.dropdown-menu {
            display: block;
        }

        /* B. Show the submenu when hovering over the parent item (e.g., 'CRM Solutions') */
        .has-subdropdown:hover>.subdropdown {
            display: block;
        }
    </style>
    <style>
        /* --- Color Palette --- */
        :root {
            --primary-sky-blue: #007bff;
            /* Main Sky Blue: Azure */
            --light-sky-blue: #f0f8ff;
            /* Very Light Blue (almost white) */
            --medium-sky-blue: #e0f7ff;
            /* Light Blue for subtle contrast */
            --dark-blue: #0056b3;
            /* Darker Blue for hover/accent */
            --accent-white: #ffffff;
            --text-dark: #333333;
            --shadow-light: rgba(0, 0, 0, 0.08);
            --shadow-medium: rgba(0, 123, 255, 0.3);
            --dark-background: #004d99;
            /* Darker blue for industry cards background */
            --text-light: #ffffff;
        }

        /* --- Global & Full Width Layout --- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-sky-blue);
            color: var(--text-dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Prevent horizontal scroll from animations */
        }

        /* Container to center content */
        .content-container {
            padding: 0 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Section Padding */
        .main-content>div {
            padding-top: 80px;
            padding-bottom: 80px;
        }

        /* Title Styling */
        .section-title {
            text-align: center;
            font-size: 2.8em;
            color: var(--dark-blue);
            margin-bottom: 50px;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary-sky-blue);
            margin: 15px auto 0;
            border-radius: 2px;
            transition: width 0.8s ease;
        }

        .white-text {
            color: var(--accent-white);
        }

        .white-text::after {
            background: var(--accent-white);
        }

        /* Primary CTA Button Style */
        .cta-button {
            display: inline-block;
            padding: 14px 35px;
            background: var(--dark-blue);
            color: var(--accent-white);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.5);
            border: none;
        }

        .cta-button:hover {
            background-color: var(--primary-sky-blue);
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.7);
        }

        /* --- Scroll Animations Base Styles --- */

        .scroll-animate {
            opacity: 0;
            transform: translateY(40px);
            /* Slide-up effect */
            transition: opacity 0.8s cubic-bezier(0.23, 1, 0.32, 1), transform 0.8s cubic-bezier(0.23, 1, 0.32, 1);
        }

        .scroll-animate[data-animation="slide-left"] {
            transform: translateX(40px);
        }

        .scroll-animate.is-visible {
            opacity: 1;
            transform: translate(0, 0);
        }

        /* Setting Staggered Delays */
        .scroll-animate[data-delay="100"] {
            transition-delay: 0.1s;
        }

        .scroll-animate[data-delay="200"] {
            transition-delay: 0.2s;
        }

        .scroll-animate[data-delay="300"] {
            transition-delay: 0.3s;
        }

        .scroll-animate[data-delay="400"] {
            transition-delay: 0.4s;
        }

        .scroll-animate[data-delay="500"] {
            transition-delay: 0.5s;
        }

        .scroll-animate[data-delay="600"] {
            transition-delay: 0.6s;
        }

        .scroll-animate[data-delay="700"] {
            transition-delay: 0.7s;
        }

        .scroll-animate[data-delay="800"] {
            transition-delay: 0.8s;
        }

        .scroll-animate[data-delay="1000"] {
            transition-delay: 1.0s;
        }


        /* --- Header Banner (Full Width Parallax) --- */
        .header-banner {
            background: linear-gradient(135deg, rgba(0, 123, 255, 0.9), rgba(0, 123, 255, 0.7)), url('https://picsum.photos/1600/600?random=1') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
            /* Parallax effect */
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--accent-white);
        }

        .header-banner h1 {
            font-size: 5em;
            text-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }

        /* --- Overview Section (Flex Layout) --- */
        .overview-section {
            background: var(--accent-white);
        }

        .section-flex {
            display: flex;
            gap: 50px;
            align-items: center;
        }

        .overview-content {
            flex: 2;
        }

        .overview-image {
            flex: 1;
            min-height: 350px;
            border-radius: 20px;
            background: url('https://picsum.photos/800/800?random=2') center center no-repeat;
            background-size: cover;
            box-shadow: 0 10px 30px var(--shadow-medium);
        }

        /* --- Card Grid Styles (Service, Deliver, Sub-Types) --- */
        .service-grid,
        .deliver-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .service-card,
        .deliver-card {
            background: var(--accent-white);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 6px 20px var(--shadow-light);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275), box-shadow 0.4s ease;
            text-align: center;
            border-top: 5px solid transparent;
        }

        .service-card:hover,
        .deliver-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 40px var(--shadow-medium);
            border-top-color: var(--primary-sky-blue);
        }

        .icon-placeholder {
            font-size: 3.5em;
            margin-bottom: 15px;
            color: var(--primary-sky-blue);
            transition: transform 0.5s ease, color 0.3s ease;
        }

        .service-card:hover .icon-placeholder,
        .deliver-card:hover .icon-placeholder {
            color: var(--dark-blue);
            transform: scale(1.1) rotateY(360deg);
            /* 3D Spin effect on hover */
        }

        /* --- New Industry Section Styles (Seperate Cards) --- */

        .industry-background {
            background-color: var(--medium-sky-blue);
            padding: 1px 0;
            /* Add padding to make the background visible */
        }

        .industry-section-card {
            background: var(--accent-white);
            border-radius: 15px;
            padding: 50px;
            margin: 40px auto;
            /* Separate cards vertically */
            max-width: 1000px;
            box-shadow: 0 10px 40px var(--shadow-medium);
            border-left: 8px solid var(--primary-sky-blue);
            transition: box-shadow 0.5s ease, transform 0.5s ease;
        }

        .industry-section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.2);
        }

        .industry-section-card h3 {
            font-size: 2.2em;
            color: var(--dark-blue);
            margin-top: 0;
            border-bottom: 2px solid var(--medium-sky-blue);
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        .card-content-flex {
            display: flex;
            gap: 40px;
            justify-content: space-between;
        }

        .card-content-flex>div {
            flex: 1;
            min-width: 45%;
        }

        .card-content-flex h4 {
            color: var(--primary-sky-blue);
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 1.3em;
            font-weight: 700;
        }

        .card-content-flex ul {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }

        .card-content-flex li {
            font-size: 1em;
            padding-left: 25px;
            position: relative;
            margin-bottom: 10px;
        }

        .card-content-flex li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--dark-blue);
            font-weight: bold;
            font-size: 1.2em;
        }


        /* --- CTA Banner (Full Width Parallax) --- */
        .cta-banner {
            background: linear-gradient(rgba(0, 86, 179, 0.9), rgba(0, 86, 179, 0.9)), url('https://picsum.photos/1600/500?random=3') center center no-repeat;
            background-size: cover;
            background-attachment: fixed;
            /* Parallax effect */
            color: var(--accent-white);
            padding: 100px 5%;
            text-align: center;
        }

        .secondary-cta-button {
            background: var(--accent-white);
            color: var(--primary-sky-blue);
            font-weight: 700;
        }

        .secondary-cta-button:hover {
            background: var(--light-sky-blue);
            color: var(--dark-blue);
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(255, 255, 255, 0.8);
        }


        /* --- Responsive Adjustments --- */
        @media (max-width: 992px) {
            .header-banner h1 {
                font-size: 3em;
            }

            .section-flex {
                flex-direction: column;
            }

            .overview-image {
                min-height: 300px;
                width: 100%;
                margin-top: 20px;
            }

            .points-container {
                flex-direction: column;
                gap: 30px;
            }

            .points-container::before {
                width: 3px;
                height: 100%;
                top: 0;
                left: 50%;
                right: auto;
                transform: translateX(-50%) scaleY(0);
                transform-origin: top;
            }

            .points-container.is-visible::before {
                transform: translateX(-50%) scaleY(1);
            }

            .card-content-flex {
                flex-direction: column;
                /* Stack columns on mobile for industry cards */
            }

            .industry-section-card {
                padding: 30px;
            }

            .industry-section-card h3 {
                font-size: 1.8em;
            }
        }
    </style>
    <style>
        /********** Template CSS **********/
        :root {
            --primary: #06A3DA;
            --secondary: #34AD54;
            --light: #EEF9FF;
            --dark: #091E3E;
        }


        /*** Spinner ***/
        .spinner {
            width: 40px;
            height: 40px;
            background: var(--primary);
            margin: 100px auto;
            -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
            animation: sk-rotateplane 1.2s infinite ease-in-out;
        }

        @-webkit-keyframes sk-rotateplane {
            0% {
                -webkit-transform: perspective(120px)
            }

            50% {
                -webkit-transform: perspective(120px) rotateY(180deg)
            }

            100% {
                -webkit-transform: perspective(120px) rotateY(180deg) rotateX(180deg)
            }
        }

        @keyframes sk-rotateplane {
            0% {
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
            }

            50% {
                transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
            }

            100% {
                transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
            }
        }

        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }

        #spinner.show {
            transition: opacity .5s ease-out, visibility 0s linear 0s;
            visibility: visible;
            opacity: 1;
        }


        /*** Heading ***/
        h1,
        h2,
        .fw-bold {
            font-weight: 800 !important;
        }

        h3,
        h4,
        .fw-semi-bold {
            font-weight: 700 !important;
        }

        h5,
        h6,
        .fw-medium {
            font-weight: 600 !important;
        }


        /*** Button ***/
        .btn {
            font-family: 'Nunito', sans-serif;
            font-weight: 600;
            transition: .5s;
        }

        .btn-primary,
        .btn-secondary {
            color: #FFFFFF;
            box-shadow: inset 0 0 0 50px transparent;
        }

        .btn-primary:hover {
            box-shadow: inset 0 0 0 0 var(--primary);
        }

        .btn-secondary:hover {
            box-shadow: inset 0 0 0 0 var(--secondary);
        }

        .btn-square {
            width: 36px;
            height: 36px;
        }

        .btn-sm-square {
            width: 30px;
            height: 30px;
        }

        .btn-lg-square {
            width: 48px;
            height: 48px;
        }

        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding-left: 0;
            padding-right: 0;
            text-align: center;
        }


        /*** Navbar ***/
        .navbar-dark .navbar-nav .nav-link {
            font-family: 'Nunito', sans-serif;
            position: relative;
            margin-left: 25px;
            padding: 35px 0;
            color: #FFFFFF;
            font-size: 18px;
            font-weight: 600;
            outline: none;
            transition: .5s;
        }

        .sticky-top.navbar-dark .navbar-nav .nav-link {
            padding: 20px 0;
            color: var(--dark);
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: var(--primary);
        }

        .navbar-dark .navbar-brand h1 {
            color: #FFFFFF;
        }

        .navbar-dark .navbar-toggler {
            color: var(--primary) !important;
            border-color: var(--primary) !important;
        }

        @media (max-width: 991.98px) {
            .sticky-top.navbar-dark {
                position: relative;
                background: #FFFFFF;
            }

            .navbar-dark .navbar-nav .nav-link,
            .navbar-dark .navbar-nav .nav-link.show,
            .sticky-top.navbar-dark .navbar-nav .nav-link {
                padding: 10px 0;
                color: var(--dark);
            }

            .navbar-dark .navbar-brand h1 {
                color: var(--primary);
            }
        }

        @media (min-width: 992px) {
            .navbar-dark {
                position: absolute;
                width: 100%;
                top: 0;
                left: 0;
                border-bottom: 1px solid rgba(256, 256, 256, .1);
                z-index: 999;
            }

            .sticky-top.navbar-dark {
                position: fixed;
                background: #FFFFFF;
            }

            .navbar-dark .navbar-nav .nav-link::before {
                position: absolute;
                content: "";
                width: 0;
                height: 2px;
                bottom: -1px;
                left: 50%;
                background: var(--primary);
                transition: .5s;
            }

            .navbar-dark .navbar-nav .nav-link:hover::before,
            .navbar-dark .navbar-nav .nav-link.active::before {
                width: 100%;
                left: 0;
            }

            .navbar-dark .navbar-nav .nav-link.nav-contact::before {
                display: none;
            }

            .sticky-top.navbar-dark .navbar-brand h1 {
                color: var(--primary);
            }
        }

        /*** Carousel ***/
        .carousel-caption {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.50);
            z-index: 1;
        }

        @media (max-width: 576px) {
            .carousel-caption h5 {
                font-size: 14px;
                font-weight: 500 !important;
            }

            .carousel-caption h1 {
                font-size: 30px;
                font-weight: 600 !important;
            }
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 10%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 3rem;
            height: 3rem;
        }

        /*** Service ***/
        .service-item {
            position: relative;
            height: 300px;
            padding: 0 30px;
            transition: .5s;
        }

        .service-item .service-icon {
            margin-bottom: 30px;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary);
            border-radius: 2px;
            transform: rotate(-45deg);
        }

        .service-item .service-icon i {
            transform: rotate(45deg);
        }

        .service-item a.btn {
            position: absolute;
            width: 60px;
            bottom: -48px;
            left: 50%;
            margin-left: -30px;
            opacity: 0;
        }

        .service-item:hover a.btn {
            bottom: -24px;
            opacity: 1;
        }


        /*** Testimonial ***/
        .testimonial-carousel .owl-dots {
            margin-top: 15px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
        }

        .testimonial-carousel .owl-dot {
            position: relative;
            display: inline-block;
            margin: 0 5px;
            width: 15px;
            height: 15px;
            background: #DDDDDD;
            border-radius: 2px;
            transition: .5s;
        }

        .testimonial-carousel .owl-dot.active {
            width: 30px;
            background: var(--primary);
        }

        .testimonial-carousel .owl-item.center {
            position: relative;
            z-index: 1;
        }

        .testimonial-carousel .owl-item .testimonial-item {
            transition: .5s;
        }

        .testimonial-carousel .owl-item.center .testimonial-item {
            background: #FFFFFF !important;
            box-shadow: 0 0 30px #DDDDDD;
        }


        /*** Team ***/
        .team-item {
            transition: .5s;
        }

        .team-social {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: .5s;
        }

        .team-social a.btn {
            position: relative;
            margin: 0 3px;
            margin-top: 100px;
            opacity: 0;
        }

        .team-item:hover {
            box-shadow: 0 0 30px #DDDDDD;
        }

        .team-item:hover .team-social {
            background: rgba(9, 30, 62, .7);
        }

        .team-item:hover .team-social a.btn:first-child {
            opacity: 1;
            margin-top: 0;
            transition: .3s 0s;
        }

        .team-item:hover .team-social a.btn:nth-child(2) {
            opacity: 1;
            margin-top: 0;
            transition: .3s .05s;
        }

        .team-item:hover .team-social a.btn:nth-child(3) {
            opacity: 1;
            margin-top: 0;
            transition: .3s .1s;
        }

        .team-item:hover .team-social a.btn:nth-child(4) {
            opacity: 1;
            margin-top: 0;
            transition: .3s .15s;
        }

        .team-item .team-img img,
        .blog-item .blog-img img {
            transition: .5s;
        }

        .team-item:hover .team-img img,
        .blog-item:hover .blog-img img {
            transform: scale(1.15);
        }


        /*** Miscellaneous ***/
        @media (min-width: 991.98px) {
            .facts {
                position: relative;
                margin-top: -75px;
                z-index: 1;
            }
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 45px;
            bottom: 45px;
            z-index: 99;
        }

        .bg-header {
            background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(./img/aboutt.webp) center center no-repeat;
            background-size: cover;
            height: 500px;
        }

        .bg-header1 {
            background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/services.webp) center center no-repeat;
            background-size: cover;
            height: 500px;
        }

        .bg-header2 {
            background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/contact.webp) center center no-repeat;
            background-size: cover;
            height: 500px;

            /* background: rgba(0,0,0,0.50); */

        }

        .bg-header3 {
            background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/privacy.webp) center center no-repeat;
            background-size: cover;
            height: 500px;
        }

        .bg-header4 {
            background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .7)), url(../img/terms.webp) center center no-repeat;
            background-size: cover;
            height: 500px;
        }

        .link-animated a {
            transition: .5s;
        }

        .link-animated a:hover {
            padding-left: 10px;
        }

        @media (min-width: 767.98px) {
            .footer-about {
                margin-bottom: -75px;
            }
        }
    </style>
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
            background: radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%);
            animation: pulse 8s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0.5;
            }

            50% {
                opacity: 1;
            }
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
            color: rgba(255, 255, 255, 0.95);
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
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
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
            background: linear-gradient(90deg, transparent, rgba(0, 123, 255, 0.05), transparent);
            transition: left 0.6s ease;
        }

        .service-card:hover::before {
            left: 100%;
        }

        .service-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 15px 40px rgba(0, 123, 255, 0.25);
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
            box-shadow: 0 10px 30px rgba(0, 123, 255, 0.3);
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
        .animate-on-scroll:nth-child(1) {
            transition-delay: 0.1s;
        }

        .animate-on-scroll:nth-child(2) {
            transition-delay: 0.2s;
        }

        .animate-on-scroll:nth-child(3) {
            transition-delay: 0.3s;
        }

        .animate-on-scroll:nth-child(4) {
            transition-delay: 0.4s;
        }

        .animate-on-scroll:nth-child(5) {
            transition-delay: 0.5s;
        }

        .animate-on-scroll:nth-child(6) {
            transition-delay: 0.6s;
        }

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
            border-top: 1px solid rgba(255, 255, 255, 0.2);
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
            0% {
                background-position: -1000px 0;
            }

            100% {
                background-position: 1000px 0;
            }
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
            box-shadow: 0 5px 20px rgba(0, 123, 255, 0.4);
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
    <style>
        :root {
            --primary: #0d6efd;
            --bg: #f5f9fc;
            --card-bg: #ffffff;
            --muted: #6c757d;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: Inter, system-ui, Arial;
            background: var(--bg);
            color: #111;
        }

        .wrap {
            max-width: 1200px;
            margin-bottom:120px;
            margin-left:70px;
            padding: 20px;
        }

        /* Border container like your image */
        .coverage-container {
            display: flex;
            gap: 18px;
            background: linear-gradient(180deg, #ffffff, #fcfdff);
            border-radius: 12px;
            border: 1px solid #e3f0f8;
            box-shadow: 0 18px 40px rgba(9, 30, 62, 0.06);
            overflow: hidden;
        }

        /* Left: big map area (65%) */
        .map-area {
            width: 65%;
            min-width: 520px;
            /* ensures horizontal scroll on smaller screens */
            height: 560px;
            position: relative;
        }

        /* Right: country panel (35%) */
        .info-panel {
            width: 35%;
            min-width: 340px;
            height: 560px;
            padding: 18px;
            box-sizing: border-box;
            background: var(--card-bg);
            overflow: auto;
        }

        /* Top controls overlay on map */
        .map-controls {
            position: absolute;
            top: 12px;
            right: 12px;
            z-index: 99;
            display: flex;
            gap: 8px;
        }

        .map-controls button {
            background: #fff;
            border: 1px solid #e6eef8;
            padding: 8px 10px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(13, 110, 253, 0.06);
        }

        /* map container fills */
        #globalMap {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* Info panel styles */
        .info-header {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 10px;
        }

        .flag {
            font-size: 28px;
        }

        .country-name {
            font-size: 20px;
            font-weight: 700;
            color: var(--primary);
        }

        .service-title {
            font-size: 15px;
            margin-top: 8px;
            color: #222;
            font-weight: 600;
        }

        .summary {
            color: var(--muted);
            margin-top: 10px;
            line-height: 1.45;
        }

        .small-map {
            width: 100%;
            height: 160px;
            border-radius: 8px;
            margin: 12px 0;
            border: 1px solid #eef5fb;
            overflow: hidden;
        }

        .locations-list {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .loc-item {
            background: #fff;
            padding: 8px 10px;
            border-radius: 18px;
            border: 1px solid #f0f4fa;
            font-size: 13px;
            color: #333;
            box-shadow: 0 6px 14px rgba(13, 110, 253, 0.04);
        }

        .status-badge {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 14px;
            background: #e8faf8;
            border: 1px solid #dff3ee;
            color: #0b7a66;
            margin-top: 10px;
            font-weight: 600;
        }

        /* Responsive: allow horizontal scroll on container when space insufficient */
        .wrap {
            overflow-x: auto;
            padding-bottom: 10px;
        }

        @media (max-width:980px) {
            .coverage-container {
                flex-direction: column;
            }

            .map-area,
            .info-panel {
                width: 100%;
                min-width: unset;
                height: 420px;
            }

            .map-area {
                min-height: 420px;
            }

            .info-panel {
                height: auto;
                max-height: 420px;
            }
        }

        /* small helper */
        .muted {
            color: var(--muted);
            font-size: 13px;
            margin-top: 6px;
        }
    </style>
      <style>
    * { box-sizing: border-box; }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
      transition: background 0.4s, color 0.4s;
    }

    body.light {
      background: radial-gradient(circle at center, #e8f3ff, #cfd8dc);
      color: #000;
    }
    body.dark {
      background: radial-gradient(circle at center, #000814, #000);
      color: #fff;
    }

    .containe {
      display: flex;
      width: 90vw;
      height: 100vh;
      overflow: hidden;
      margin:auto;
    }

    /* MAP SECTION */
    #globeSection {
      flex: 2;
      min-width: 300px;
      position: relative;
      background: #000;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #googleMap {
      width: 100%;
      height: 100%;
    }

    /* RIGHT PANEL */
    #infoPanel {
      flex: 0 0 380px;
      max-width: 380px;
      width: 100%;
      padding: 18px;
      background: rgb(255, 255, 255);
      overflow-y: auto;
      transition: 0.4s;

    }

    body.dark #infoPanel {
      background: rgba(2,8,20,0.85);
      border-left: 1px solid rgba(255,255,255,0.1);
    }

    h2 { margin: 8px 0; color: #0077ff; font-size: 1.2rem; }
    label { font-weight: 600; font-size: 0.95rem; }

    #searchInput {
      width: 100%;
      padding: 10px 12px;
      border-radius: 8px;
      border: none;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .continent, .branch-item {
      padding: 10px;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.2s;
      background: rgba(255,255,255,0.85);
      margin-bottom: 6px;
    }

    body.dark .continent, body.dark .branch-item {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.06);
    }

    .continent:hover, .branch-item:hover {
      background: rgba(77,163,255,0.15);
      transform: translateY(-2px);
    }

    #themeToggle {
      width: 100%;
      padding: 10px;
      margin-bottom: 12px;
      background: #0077ff;
      color: white;
      font-weight: bold;
      border-radius: 8px;
      border: none;
    }

    /* TABLETS */
    @media (max-width: 1024px) {
      #infoPanel {
        flex: 0 0 320px;
        max-width: 320px;
      }
    }

    /* MOBILE LANDSCAPE */
    @media (max-width: 850px) {
      .containe {
        flex-direction: column;
        height: 180vh;
      }

      #infoPanel {
        width: 100%;
        max-width: 100%;
        height: 45vh;
      }

      #globeSection {
        height: 55vh;
        min-height: 260px;
      }
    }

    /* MOBILE PORTRAIT (VIVO / SAMSUNG / iPHONE) */
    @media (max-width: 600px) {

      .containe {
        flex-direction: column;
        height: 100dvh; /* modern phones */
      }

      #globeSection {
        height: 50dvh;
        min-height: 300px;
      }

      #infoPanel {
        height: 50dvh;
        padding: 14px;
      }

      h2 { font-size: 1.1rem; }
      #searchInput { font-size: 13px; }
    }

    /* SMALL PHONES */
    @media (max-width: 400px) {
      #globeSection { height: 45dvh; }
      #infoPanel { height: 55dvh; }
      .continent, .branch-item { font-size: 14px; }
    }
  </style>
</head>

<body>
    <?php
    include('header.php');
    ?>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn" style="margin-top: 90px;">Service</h1>
                <a href="" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Service</a>
            </div>
        </div>
    </div>


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Services Section -->
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Reliable IT Support and Solutions Tailored to You</h1>
        </div>
        <div class="row g-4">

            <!-- VoIP Solutions -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card service-card">
                    <div class="service-card-inner">
                        <div class="service-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <h5>VoIP Solutions</h5>
                        <p>High-quality internet calling with SIP Trunking, DID numbers, and seamless PBX integration
                            for crystal-clear business communications.</p>
                        <a href="voip.php" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- IVR Systems -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card service-card">
                    <div class="service-card-inner">
                        <div class="service-icon">
                            <i class="bi bi-soundwave"></i>
                        </div>
                        <h5>IVR Solutions</h5>
                        <p>Smart interactive voice response systems for enhanced customer engagement, automated support,
                            and intelligent call routing.</p>
                        <a href="ivr.php" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>
            <!-- Toll Free Numbers -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card service-card">
                    <div class="service-card-inner">
                        <div class="service-icon">
                            <i class="bi bi-telephone-forward-fill"></i>
                        </div>
                        <h5>Toll Free Numbers</h5>
                        <p>Boost customer trust with 1800 toll-free numbers. Enable nationwide calling without charges
                            for your customers, perfect for support and sales.</p>
                        <a href="toll-free.php" class="learn-more">Learn More</a>
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
                        <p>Direct Inward Dialing numbers for professional business presence. Get local numbers in any
                            city to establish regional presence globally.</p>
                        <a href="did.php" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- BPO Services -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card service-card">
                    <div class="service-card-inner">
                        <div class="service-icon">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h5>BPO Services</h5>
                        <p>24/7 professional customer support, lead management, and comprehensive back-office
                            outsourcing solutions to scale your business.</p>
                        <a href="outsourcing.php" class="learn-more">Learn More</a>
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
                        <p>Replace traditional phone lines with internet-based calling. Reduce costs by up to 60% while
                            scaling your communication infrastructure seamlessly.</p>
                        <a href="sip.php" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- CRM Integration -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card service-card">
                    <div class="service-card-inner">
                        <div class="service-icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h5>CRM Integration</h5>
                        <p>Automate workflows and unify communication across your sales and support teams with powerful
                            CRM integration solutions.</p>
                        <a href="crm.php" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>

            <!-- Web Development -->
            <div class="col-lg-4 col-md-6 animate-on-scroll">
                <div class="card service-card">
                    <div class="service-card-inner">
                        <div class="service-icon">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5>Web Development</h5>
                        <p>Responsive, SEO-friendly, and scalable websites designed to convert visitors into customers
                            and grow your online presence.</p>
                        <a href="web.php" class="learn-more">Learn More</a>
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
                        <p>Expert IT infrastructure management, server maintenance, network administration, and 24/7
                            system monitoring for optimal performance.</p>
                        <a href="system.php" class="learn-more">Learn More</a>
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
                        <p>Drive growth with SEO, social media marketing, PPC campaigns, content marketing, and
                            data-driven strategies to boost your online presence.</p>
                        <a href="digital.php" class="learn-more">Learn More</a>
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
                        <p>Omnichannel customer engagement platform integrating voice, chat, email, and social media for
                            seamless customer experience.</p>
                        <a href="contactcenter.php" class="learn-more">Learn More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </section>

    <div class="containe">
      
      <div id="globeSection">
        <div id="googleMap"></div>
      </div>
  
      <div id="infoPanel">
        <button id="themeToggle">🌞 Light Mode</button>
  
        <h2>Global Continents & Branches</h2>
        <label>Search continents / branches</label>
        <input id="searchInput" placeholder="🔍 Type continent or country name..." />
  
        <div id="continentList"></div>
  
        <h2 style="margin-top:12px">Branches</h2>
        <div id="branchList"></div>
      </div>
  
    </div>

    <?php
    include('footer.php');
    ?>

    <!-- Back to Top -->
    <a href="#" class="back-to-top" id="backToTop">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Load Google Maps JS - REPLACE the placeholder text with your key -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script> -->
    <!-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE&callback=initMap&libraries=places"></script> -->

    <!-- <script>
        /* ---------- Data: countries & sub-locations --------- */
        const countries = [
            {
                id: 'india', name: 'India', flag: '🇮🇳', lat: 20.5937, lng: 78.9629,
                service: 'VoIP & IVR Solutions', summary: 'High-quality VoIP, IVR systems and local DID numbers for enterprise customers.',
                areas: ['New Delhi', 'Mumbai', 'Bengaluru', 'Chennai']
            },
            {
                id: 'usa', name: 'United States', flag: '🇺🇸', lat: 37.0902, lng: -95.7129,
                service: 'SIP Trunking & BPO Services', summary: 'Scalable SIP trunking, DID provisioning and BPO operations across multiple states.',
                areas: ['New York', 'Los Angeles', 'Dallas', 'Chicago']
            },
            {
                id: 'germany', name: 'Germany', flag: '🇩🇪', lat: 51.1657, lng: 10.4515,
                service: 'IoT Fleet Management', summary: 'Real-time IoT fleet solutions, telematics and predictive maintenance services.',
                areas: ['Berlin', 'Munich', 'Frankfurt', 'Hamburg']
            },
            {
                id: 'uae', name: 'United Arab Emirates', flag: '🇦🇪', lat: 23.4241, lng: 53.8478,
                service: 'Toll-Free & CRM Integration', summary: 'Toll-free services and enterprise CRM integration across the MENA region.',
                areas: ['Dubai', 'Abu Dhabi', 'Sharjah']
            },
            {
                id: 'singapore', name: 'Singapore', flag: '🇸🇬', lat: 1.3521, lng: 103.8198,
                service: 'Unified Contact Center', summary: 'Cloud contact center, omnichannel routing and workforce management.',
                areas: ['Singapore']
            }
        ];

        /* ---------- Globals ---------- */
        let map, localMap;
        let markers = [];
        let currentMapType = 'roadmap';
        let selectedCountryIndex = null;

        /* ---------- Initialize global map ---------- */
        function initMap() {
            const center = { lat: 20, lng: 0 };
            map = new google.maps.Map(document.getElementById('globalMap'), {
                center,
                zoom: 2,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                streetViewControl: false,
                fullscreenControl: false,
                gestureHandling: 'greedy',
                styles: [] // keep default realistic tiles; you can add style for contrast
            });

            // Add markers with labels (labels always visible)
            countries.forEach((c, idx) => {
                const marker = new google.maps.Marker({
                    position: { lat: c.lat, lng: c.lng },
                    map,
                    title: c.name,
                    label: {
                        text: c.name,
                        color: '#ffffff',
                        fontWeight: '600',
                        fontSize: '12px',
                        className: 'map-label'
                    },
                    icon: {
                        path: google.maps.SymbolPath.CIRCLE,
                        scale: 8,
                        fillColor: '#ff4b4b',
                        fillOpacity: 1,
                        strokeWeight: 2,
                        strokeColor: '#ffffff'
                    },
                    optimized: false,
                    zIndex: 999 + idx
                });

                marker._countryIndex = idx; // attach index for lookup

                // click opens info panel & pans map smoothly
                marker.addListener('click', () => {
                    selectCountry(marker._countryIndex, true);
                });

                markers.push(marker);
            });

            // Make labels more readable: we will create a small label overlay using InfoWindow pinned (no close btn)
            markers.forEach(mk => {
                const labelDiv = document.createElement('div');
                labelDiv.style.padding = '6px 8px';
                labelDiv.style.background = 'rgba(0,0,0,0.65)';
                labelDiv.style.color = '#fff';
                labelDiv.style.fontWeight = '600';
                labelDiv.style.borderRadius = '14px';
                labelDiv.style.fontSize = '12px';
                labelDiv.style.whiteSpace = 'nowrap';
                labelDiv.style.transform = 'translateY(-36px)';
                labelDiv.innerText = mk.getTitle();
                // InfoWindow with no close box
                const iw = new google.maps.InfoWindow({
                    content: labelDiv,
                    disableAutoPan: true,
                    pixelOffset: new google.maps.Size(0, -10)
                });
                // open permanently
                iw.open(map, mk);
            });

            // initial selection (optional: focus first country)
            // selectCountry(0,false);
        }

        /* ---------- Select country: update right panel and small map ---------- */
        function selectCountry(index, shouldPan = true) {
            if (index === null || index === undefined) return;
            selectedCountryIndex = index;
            const data = countries[index];

            // update panel text
            document.getElementById('countryFlag').textContent = data.flag;
            document.getElementById('countryName').textContent = data.name;
            document.getElementById('countryShort').textContent = data.service;
            document.getElementById('serviceTitle').textContent = data.service;
            document.getElementById('serviceSummary').textContent = data.summary;
            document.getElementById('statusBadge').textContent = 'Active — ' + data.name;

            // local areas chips
            const areasWrap = document.getElementById('serviceAreas');
            areasWrap.innerHTML = '';
            data.areas.forEach(a => {
                const d = document.createElement('div');
                d.className = 'loc-item';
                d.innerText = a;
                areasWrap.appendChild(d);
            });

            // pan map to country with smooth animation
            if (shouldPan) {
                map.panTo({ lat: data.lat, lng: data.lng });
                map.setZoom(5);
            }

            // create small local map inside right panel (if exists re-init)
            createLocalMap(data);
        }

        /* ---------- create small local map (uses same Google Maps API) ---------- */
        function createLocalMap(data) {
            const containe = document.getElementById('localMapPlaceholder');
            containe.innerHTML = ''; // clear
            const mapDiv = document.createElement('div');
            mapDiv.style.width = '100%';
            mapDiv.style.height = '100%';
            containe.appendChild(mapDiv);

            // center slightly off to show multiple cities
            localMap = new google.maps.Map(mapDiv, {
                center: { lat: data.lat, lng: data.lng },
                zoom: 5,
                disableDefaultUI: true,
                gestureHandling: 'none'
            });

            // add small markers for each area (use geocoding fallback: approximate offset if no precise coords)
            // For demo, we create offset positions around the center — replace with real lat/lng if available.
            const baseLat = data.lat, baseLng = data.lng;
            const offsets = [
                [0.6, 0.8], [-0.7, -0.6], [0.9, -0.9], [-0.9, 0.6]
            ];

            data.areas.forEach((area, i) => {
                const off = offsets[i % offsets.length];
                const m = new google.maps.Marker({
                    position: { lat: baseLat + (off[0] * 0.7), lng: baseLng + (off[1] * 0.7) },
                    icon: {
                        path: google.maps.SymbolPath.CIRCLE,
                        scale: 6,
                        fillColor: '#ff4b4b',
                        fillOpacity: 1,
                        strokeColor: '#fff',
                        strokeWeight: 1.5
                    },
                    map: localMap,
                    title: area
                });
                // label next to marker via InfoWindow
                const lbl = new google.maps.InfoWindow({
                    content: '<div style="font-weight:600;font-size:12px;">' + area + '</div>',
                    disableAutoPan: true,
                    pixelOffset: new google.maps.Size(10, 0)
                });
                lbl.open(localMap, m);
            });
        }

        /* ---------- UI Controls ---------- */
        document.addEventListener('DOMContentLoaded', () => {
            // load map after DOM ready
            if (typeof google === 'object' && typeof google.maps === 'object') {
                initMap();
            } else {
                console.error('Google Maps not loaded. Make sure you replaced the API key.');
            }

            document.getElementById('toggleMapType').addEventListener('click', () => {
                if (!map) return;
                currentMapType = (currentMapType === 'roadmap') ? 'satellite' : 'roadmap';
                map.setMapTypeId(currentMapType === 'satellite' ? google.maps.MapTypeId.SATELLITE : google.maps.MapTypeId.ROADMAP);
                document.getElementById('toggleMapType').innerText = currentMapType === 'satellite' ? 'Roadmap' : 'Satellite';
            });

            // pan to next country in array (simple carousel pan)
            document.getElementById('panToNext').addEventListener('click', () => {
                let idx = selectedCountryIndex === null ? 0 : (selectedCountryIndex + 1) % countries.length;
                selectCountry(idx, true);
            });

            // fullscreen the coverage box
            document.getElementById('fullscreenBtn').addEventListener('click', async () => {
                const el = document.getElementById('coverageBox');
                if (!document.fullscreenElement) {
                    await el.requestFullscreen();
                    // when fullscreen, resize map to fit
                    setTimeout(() => { google.maps.event.trigger(map, 'resize'); }, 500);
                } else {
                    await document.exitFullscreen();
                    setTimeout(() => { google.maps.event.trigger(map, 'resize'); }, 500);
                }
            });

            // OPTIONAL: initially select Germany (like your example)
            setTimeout(() => selectCountry(2, true), 700);
        });

        /* ---------- Helpful: addAbility to add country programmatically ---------- */
        /* Example:
        countries.push({id:'brazil', name:'Brazil', flag:'🇧🇷', lat:-14.2350, lng:-51.9253, service:'SIP', summary:'..', areas:['Sao Paulo','Rio']});
        then create marker: createMarkers() ... For brevity, code uses initial dataset only.
        */

    </script> -->
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
            card.addEventListener('mouseenter', function () {
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
            card.addEventListener('click', function (e) {
                if (!e.target.closest('.learn-more')) {
                    const link = this.querySelector('.learn-more');
                    if (link) {
                        window.location.href = link.href;
                    }
                }
            });
        });
    </script>
        <!-- MAP SCRIPT -->
    <script>
      let map;
    
      const branches = [
        { name: "New York Branch", lat: 40.7128, lon: -74.006, country: "USA", continent: "North America" },
        { name: "Toronto Branch", lat: 43.65107, lon: -79.347015, country: "Canada", continent: "North America" },
        { name: "London Branch", lat: 51.5074, lon: -0.1278, country: "UK", continent: "Europe" },
        { name: "Paris Branch", lat: 48.8566, lon: 2.3522, country: "France", continent: "Europe" },
        { name: "Berlin Branch", lat: 52.52, lon: 13.405, country: "Germany", continent: "Europe" },
        { name: "Tokyo Branch", lat: 35.6895, lon: 139.6917, country: "Japan", continent: "Asia" },
        { name: "Mumbai Branch", lat: 19.076, lon: 72.8777, country: "India", continent: "Asia" },
        { name: "Singapore Branch", lat: 1.3521, lon: 103.8198, country: "Singapore", continent: "Asia" },
        { name: "Sydney Branch", lat: -33.8688, lon: 151.2093, country: "Australia", continent: "Australia" },
        { name: "Cape Town Branch", lat: -33.9249, lon: 18.4241, country: "South Africa", continent: "Africa" },
        { name: "São Paulo Branch", lat: -23.5505, lon: -46.6333, country: "Brazil", continent: "South America" }
      ];
    
      const continents = [
        { id: 'Asia', name: 'Asia' },
        { id: 'Europe', name: 'Europe' },
        { id: 'North America', name: 'North America' },
        { id: 'South America', name: 'South America' },
        { id: 'Africa', name: 'Africa' },
        { id: 'Australia', name: 'Australia' }
      ];
    
      function initMap() {
        map = new google.maps.Map(document.getElementById("googleMap"), {
          center: { lat: 20, lng: 10 },
          zoom: 2,
        });
    
        branches.forEach(b => {
          new google.maps.Marker({
            position: { lat: b.lat, lng: b.lon },
            map,
            title: b.name
          });
        });
      }
    
      const continentListEl = document.getElementById("continentList");
      const branchListEl = document.getElementById("branchList");
      const searchInput = document.getElementById("searchInput");
    
      function renderContinents(filter = "") {
        continentListEl.innerHTML = "";
        continents
          .filter(c => c.name.toLowerCase().includes(filter))
          .forEach(c => {
            const div = document.createElement("div");
            div.className = "continent";
            div.innerHTML = `<strong>${c.name}</strong>`;
            div.onclick = () => {
              const target = branches.find(b => b.continent === c.id);
              if (target) {
                map.setCenter({ lat: target.lat, lng: target.lon });
                map.setZoom(4);
              }
              renderBranches(c.id);
            };
            continentListEl.appendChild(div);
          });
      }
    
      function renderBranches(filter = "", search = "") {
        branchListEl.innerHTML = "";
        branches
          .filter(b =>
            (filter === "" || b.continent === filter) &&
            (b.name.toLowerCase().includes(search) || b.country.toLowerCase().includes(search))
          )
          .forEach(b => {
            const div = document.createElement("div");
            div.className = "branch-item";
            div.innerHTML = `<strong>${b.name}</strong><br>${b.country} • ${b.continent}`;
            div.onclick = () => {
              map.setCenter({ lat: b.lat, lng: b.lon });
              map.setZoom(6);
            };
            branchListEl.appendChild(div);
          });
      }
    
      renderContinents();
      renderBranches();
    
      searchInput.addEventListener("input", e => {
        const q = e.target.value.toLowerCase();
        renderContinents(q);
        renderBranches("", q);
      });
    
      const themeToggle = document.getElementById("themeToggle");
      const body = document.body;
    
      themeToggle.addEventListener("click", () => {
        body.classList.toggle("dark");
        body.classList.toggle("light");
        themeToggle.textContent =
          body.classList.contains("dark") ? "🌙 Dark Mode" : "🌞 Light Mode";
      });
    </script>
    
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdBFjMI1bMfHwuw3YV0NsnVerB4AyyNVI&callback=initMap"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null, // viewport as the root
                rootMargin: '0px',
                threshold: 0.1 // 10% of the element must be visible
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    // If the element is intersecting (visible)
                    if (entry.isIntersecting) {
                        // Add the class to trigger the CSS animation
                        entry.target.classList.add('is-visible');

                        // Special case for the Process Flow line animation
                        if (entry.target.classList.contains('points-containe')) {
                            entry.target.classList.add('is-visible');
                        }

                        // Stop observing the element once it's animated
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Target all elements with the scroll-animate class
            document.querySelectorAll('.scroll-animate, .points-containe').forEach(element => {
                observer.observe(element);
            });
        });
    </script>
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


</body>

</html>