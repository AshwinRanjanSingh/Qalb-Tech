<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced CRM Solutions Page</title>
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
        scroll-margin-top: 250px; /* Aapke navbar ki height ke barabar value daalein */
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
</head>

<body>
    <?php
    include('header.php');
    ?>
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn" style="margin-top: 90px;">Digital Marketing</h1>
            <a href="" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Digital Marketing</a>
        </div>
    </div>
</div>

<div id="digital-marketing" class="main-content active full-width-layout">
    <div class="overview-section content-container section-flex">
        <div class="" data-delay="100">
            <h2 class="section-title">Overview: Grow Visibility, Drive Conversions</h2>
            <p class="overview-text">Our digital marketing services help businesses grow visibility, drive engagement, and increase conversions. By combining creativity with data-driven insights, we create campaigns that resonate with your audience and maximize ROI.</p>
            <p class="overview-text">From SEO to social media campaigns, we craft strategies that generate measurable impact across all digital channels.</p>
        </div>
        <div class="overview-image scroll-animate" data-delay="300" data-animation="slide-left">
        </div>
    </div>

    <div class="services-included-section content-container">
        <h2 class="section-title">Our Integrated Services Include</h2>
        <div class="service-grid">

            <div class="service-card scroll-animate" data-delay="100">
                <div class="icon-placeholder">🔍</div>
                <div class="card-text">
                    <h3>Search Engine Optimization (SEO)</h3>
                    <p>Improve rankings with keyword and content optimization.</p>
                </div>
            </div>

            <div class="service-card scroll-animate" data-delay="200">
                <div class="icon-placeholder">🎯</div>
                <div class="card-text">
                    <h3>Pay-Per-Click (PPC) Advertising</h3>
                    <p>Targeted ads that deliver instant traffic.</p>
                </div>
            </div>

            <div class="service-card scroll-animate" data-delay="300">
                <div class="icon-placeholder">📱</div>
                <div class="card-text">
                    <h3>Social Media Marketing</h3>
                    <p>Campaigns to grow brand presence across platforms.</p>
                </div>
            </div>

            <div class="service-card scroll-animate" data-delay="400">
                <div class="icon-placeholder">✍</div>
                <div class="card-text">
                    <h3>Content Marketing</h3>
                    <p>Blogs, videos, and infographics to engage your audience.</p>
                </div>
            </div>

            <div class="service-card scroll-animate" data-delay="500">
                <div class="icon-placeholder">📧</div>
                <div class="card-text">
                    <h3>Email Marketing</h3>
                    <p>Personalized campaigns to nurture leads.</p>
                </div>
            </div>

             <div class="service-card scroll-animate" data-delay="600">
                <div class="icon-placeholder">📊</div>
                <div class="card-text">
                    <h3>Analytics & Reporting</h3>
                    <p>Advanced tracking for measurable campaign performance.</p>
                </div>
            </div>

        </div>
    </div>

    <div class="deliver-section content-container">
        <h2 class="section-title">The Value We Bring: What We Deliver</h2>
        <div class="deliver-grid">
            <div class="deliver-card scroll-animate" data-delay="100">
                <div class="icon-placeholder">📈</div>
                <div class="card-text">
                    <h3>Higher Website Traffic</h3>
                    <p>Increased reach with organic and paid campaigns.</p>
                </div>
            </div>

            <div class="deliver-card scroll-animate" data-delay="200">
                <div class="icon-placeholder">📣</div>
                <div class="card-text">
                    <h3>Brand Engagement</h3>
                    <p>Stronger digital presence with engaging content.</p>
                </div>
            </div>

            <div class="deliver-card scroll-animate" data-delay="300">
                <div class="icon-placeholder">💰</div>
                <div class="card-text">
                    <h3>ROI-driven Campaigns</h3>
                    <p>Measurable results with advanced analytics.</p>
                </div>
            </div>

            <div class="deliver-card scroll-animate" data-delay="400">
                <div class="icon-placeholder">🤝</div>
                <div class="card-text">
                    <h3>Lead Generation</h3>
                    <p>Strategies focused on customer acquisition.</p>
                </div>
            </div>

            <div class="deliver-card scroll-animate" data-delay="500">
                <div class="icon-placeholder">🔄</div>
                <div class="card-text">
                    <h3>Market Adaptability</h3>
                    <p>Campaigns tailored to your industry.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="design-points full-width-process">
        <div class="content-container">
            <h2 class="section-title white-text scroll-animate" data-delay="100">Our Project Methodology: How We Deliver</h2>
        </div>
        <div class="points-container content-container">
            <div class="point-card scroll-animate" data-delay="200">
                <span class="point-number">01</span>
                <h3>Market Research</h3>
                <p>Deep analysis of competitors and trends.</p>
            </div>
            <div class="point-card scroll-animate" data-delay="400">
                <span class="point-number">02</span>
                <h3>Strategy Planning</h3>
                <p>Custom campaigns aligned with business objectives.</p>
            </div>
            <div class="point-card scroll-animate" data-delay="600">
                <span class="point-number">03</span>
                <h3>Execution</h3>
                <p>Hands-on implementation across digital platforms.</p>
            </div>
            <div class="point-card scroll-animate" data-delay="800">
                <span class="point-number">04</span>
                <h3>Analytics Tracking</h3>
                <p>Monitoring KPIs and performance.</p>
            </div>
            <div class="point-card scroll-animate" data-delay="1000">
                <span class="point-number">05</span>
                <h3>Optimization</h3>
                <p>Refining campaigns for better outcomes.</p>
            </div>
        </div>
    </div>

    <div class="sub-types-section content-container">
        <h2 class="section-title">Explore Digital Marketing Sub-Types</h2>
        <div class="deliver-grid sub-types-grid">
            <div class="deliver-card sub-type-card scroll-animate" data-delay="100">
                <div class="icon-placeholder">🔎</div>
                <div class="card-text">
                    <h3>SEO Marketing</h3>
                    <p>Organic growth with technical SEO and content strategy.</p>
                </div>
            </div>

            <div class="deliver-card sub-type-card scroll-animate" data-delay="200">
                <div class="icon-placeholder">📢</div>
                <div class="card-text">
                    <h3>Paid Media</h3>
                    <p>High-impact campaigns across search, display, and social networks.</p>
                </div>
            </div>

            <div class="deliver-card sub-type-card scroll-animate" data-delay="300">
                <div class="icon-placeholder">🤖</div>
                <div class="card-text">
                    <h3>Marketing Automation</h3>
                    <p>Streamlining lead management and personalization.</p>
                </div>
            </div>

            <div class="deliver-card sub-type-card scroll-animate" data-delay="400">
                <div class="icon-placeholder">🗺</div>
                <div class="card-text">
                    <h3>Digital Strategy Consulting</h3>
                    <p>Roadmap planning and technology stack advisory.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="industry-background">
        <div class="content-container">
            <h2 class="section-title scroll-animate" data-delay="100">Digital Marketing by Industry Focus</h2>
        </div>

        <div id="ecommerce" class="industry-section-card content-container scroll-animate" data-delay="200">
            <h3>E-commerce & Retail 🛍</h3>
            <div class="card-content-flex">
                <div>
                    <h4>Use Cases</h4>
                    <ul>
                        <li>Product launches, seasonal campaigns, customer retention.</li>
                        <li>Abandoned cart recovery, advanced targeting, loyalty program marketing.</li>
                    </ul>
                </div>
                <!-- <div>
                    <h4>Providers & Focus</h4>
                    <ul>
                        <li>WebFX, HubSpot partners, Google Ads Partners.</li>
                        <li>Focus on conversion & personalization.</li>
                    </ul>
                </div> -->
            </div>
        </div>

        <div id="tech" class="industry-section-card content-container scroll-animate" data-delay="400">
            <h3>SaaS & Tech ☁</h3>
            <div class="card-content-flex">
                <div>
                    <h4>Use Cases</h4>
                    <ul>
                        <li>Lead gen campaigns for SaaS, SEO & content marketing.</li>
                        <li>Paid ads for software trials, user onboarding funnels.</li>
                        <li>Customer lifecycle nurturing, retention campaigns.</li>
                    </ul>
                </div>
                <!-- <div>
                    <h4>Providers & Focus</h4>
                    <ul>
                        <li>Disruptive Advertising, HubSpot, Marketo, Pardot.</li>
                        <li>Focus on lead nurturing.</li>
                    </ul>
                </div> -->
            </div>
        </div>

        <div id="healthcare" class="industry-section-card content-container scroll-animate" data-delay="600">
            <h3>Healthcare & Wellness ⚕</h3>
            <div class="card-content-flex">
                <div>
                    <h4>Use Cases</h4>
                    <ul>
                        <li>Patient acquisition ads, wellness awareness campaigns.</li>
                        <li>Local SEO for clinics, doctor reputation management.</li>
                        <li>Online health webinar promotion, app store optimization for health apps.</li>
                    </ul>
                </div>
                <!-- <div>
                    <h4>Providers & Focus</h4>
                    <ul>
                        <li>Healthgrades, WebFX, Zocdoc Ads, Medical Marketing Agencies.</li>
                        <li>Focus on trust & local reach.</li>
                    </ul>
                </div> -->
            </div>
        </div>

        <div id="travel" class="industry-section-card content-container scroll-animate" data-delay="800">
            <h3>Travel & Hospitality ✈</h3>
            <div class="card-content-flex">
                <div>
                    <h4>Use Cases</h4>
                    <ul>
                        <li>Destination promotions, booking campaign optimization.</li>
                        <li>Customer loyalty program marketing, social media advertising.</li>
                        <li>Location-based marketing, dynamic pricing ads.</li>
                    </ul>
                </div>
                <!-- <div>
                    <h4>Providers & Focus</h4>
                    <ul>
                        <li>Ignite Visibility, Expedia Marketing, TripAdvisor Ads, TravelClick.</li>
                        <li>Focus on customer journey.</li>
                    </ul>
                </div> -->
            </div>
        </div>

        <div id="education" class="industry-section-card content-container scroll-animate" data-delay="1000">
            <h3>Education & e-Learning 🎓</h3>
            <div class="card-content-flex">
                <div>
                    <h4>Use Cases</h4>
                    <ul>
                        <li>University digital campaigns, online course promotions.</li>
                        <li>SEO for EdTech platforms, brand awareness & student engagement.</li>
                        <li>Email automation for student funnel, scholarship campaign marketing.</li>
                    </ul>
                </div>
                <!-- <div>
                    <h4>Providers & Focus</h4>
                    <ul>
                        <li>Pearson Digital Marketing, Edu-agencies, Google for Education.</li>
                        <li>Focus on student engagement & enrollment (Inferred from content).</li>
                    </ul>
                </div> -->
            </div>
        </div>
    </div>
</div>
    <?php
    include('footer.php');
    ?>
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
                        if (entry.target.classList.contains('points-container')) {
                            entry.target.classList.add('is-visible');
                        }

                        // Stop observing the element once it's animated
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Target all elements with the scroll-animate class
            document.querySelectorAll('.scroll-animate, .points-container').forEach(element => {
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