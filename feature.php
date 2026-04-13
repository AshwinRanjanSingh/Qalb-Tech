<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>QALB TECH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
</head>

<body>
<?php
include('header.php');
?>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn" style="margin-top: 99px;">Features</h1>
                    <a href="" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Features</a>
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


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">Committed to Driving Your Business Forward</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Best In Industry</h4>
                            <p class="mb-0">We pride ourselves on delivering top-quality IT solutions that set new benchmarks in the industry. </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Professional Staff</h4>
                            <p class="mb-0">We are proud to have a highly skilled, certified, and experienced staff dedicated to delivering exceptional IT solutions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/whychoose.webp" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Award Winning</h4>
                            <p class="mb-0">Our commitment to quality and innovation has earned us recognition in the industry. </p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>24/7 Support</h4>
                            <p class="mb-0">Our dedicated support team is available around the clock to resolve issues, answer questions, and keep your operations running smoothly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


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


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


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