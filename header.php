<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="img/favicon.ico" type="image/x-ico">
    <!-- Bootstrap CSS (needed) -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <style>
        .dropdown-menu {
            transition: none !important;
        }

        /* Base submenu */
        .dropdown-submenu {
            position: relative;
        }

        /* Desktop: submenu opens to the right */
        @media (min-width: 992px) {
            .dropdown-submenu>.dropdown-menu {
                top: 0;
                left: 100%;
                margin-top: -1px;
                display: none;
                position: absolute;
            }

            /* Show on hover (desktop only) */
            .dropdown-submenu:hover>.dropdown-menu {
                display: block;
            }
        }

        /* Mobile: submenu appears below parent */
        @media (max-width: 991px) {
            .dropdown-submenu>.dropdown-menu {
                position: relative;
                left: 0;
                top: 0;
                margin: 0.5rem 0 0 0;
            }
        }
    </style>

    <!-- All before service style -->
    <style>
        /* ==== Desktop Style (Default) ==== */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            min-width: 200px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 0.25rem;
        }

        .dropdown:hover>.dropdown-menu,
        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-left: 0.1rem;
        }

        /* ==== Mobile Responsive (For Phones) ==== */
        @media (max-width: 991px) {

            /* Make dropdowns work vertically */
            .dropdown-menu,
            .dropdown-submenu>.dropdown-menu {
                position: static;
                float: none;
                display: none;
                width: 100%;
                border: none;
                box-shadow: none;
                background: #f8f9fa;
            }

            /* Show dropdown when active or clicked */
            .dropdown.show>.dropdown-menu,
            .dropdown-submenu.show>.dropdown-menu {
                display: block;
            }

            /* Better spacing for nested items */
            .dropdown-menu .dropdown-item {
                padding-left: 20px;
            }

            .dropdown-submenu .dropdown-item {
                padding-left: 30px;
            }

            /* Make it scrollable if too tall */
            .dropdown-menu {
                max-height: 300px;
                overflow-y: auto;
            }

            /* Optional: clearer distinction for submenus */
            .dropdown-submenu>.dropdown-toggle::after {
                float: right;
                transform: rotate(90deg);
                margin-top: 6px;
            }
        }
    </style>
    <style>
        @media (max-width: 991px) {
            .dropdown-menu {
                display: none;
                position: static;
                background: #f8f9fa;
                border: none;
                box-shadow: none;
            }

            .dropdown-submenu>.dropdown-menu.show {
                display: block;
            }

            .dropdown-submenu>.dropdown-toggle::after {
                float: right;
                transform: rotate(90deg);
                margin-top: 6px;
            }
        }
        /* @media and (max-width:576px) {
            #logo2 a img{
                position: relative !important;
                right:10px !important;
            }
            #logo3 {
                display: flex;
                justify-content: space-around;
                gap:50px;
            }
        } */
         /* .logo {
        display: block;
        margin: 0;
        padding: 0;
        line-height: 0;
        vertical-align: middle;

        }
        .navbar-brand img { */
  /* height: 40px;         adjust this value as per your logo size */
   /* margin-top: 2px;
  margin-bottom: 2px;
  padding: 0;
  display: block;
}

.navbar {
  padding-top: 0;
  padding-bottom: 0;
  line-height: 0; */
 /* } */
            /* @media and (max-width:576px) {
                .navbar-brand{
                    padding-left:3px;
                    padding-right:3px;
                }
            } */
    @media (max-width: 991px) {
    .navbar-nav .nav-link {
        position:relative;
        top:20px;
        margin: 4px 0;                /* items ke beech gap */
    }
    .btn{
        position: relative;
        top:8px;
        margin-bottom: 8px;
    }
    /* Dropdown items spacing */
    /* .dropdown-menu .dropdown-item {
        padding: 12px 20px !important;
        margin: 2px 0;
    } */
}

    </style>

    <!-- <link rel="stylesheet" href="css/nav.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <!-- <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small> -->
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@qalbtech.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://x.com/qalbtech06"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=61583856401862"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.linkedin.com/company/qalbtech/"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/qalbtech06/"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <!-- <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="#"><i
                            class="fab fa-youtube fw-normal"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0" style="padding-top:0px;" id="logo3">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-lg-0">
            <div id="logo2" style="position:relative; top:22px;">
                <a href="index.php" class="navbar-brand">
                    <img src="img/img.png" alt="" width="200px" height="50px"
                         class="logo" style="box-sizing:border-box;">
                         <P style="font-size:12px; margin-top:2px; width: 70px; color:#00AEEF;">Simplifying Tech Applyfying Success</P>
                    <!-- <h1 style="font-size:10px; width: 200px; position: absolute; top:110px;">Simplifying Tech, Amplifying Success</h1> -->
                </a>
            </div>
            <button class="navbar-toggler" type="button" id="menuBtn">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a> -->
                        <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu">
                            <a href="voip.php" class="dropdown-item">VoIP Solutions</a>
                            <a href="ivr.php" class="dropdown-item">IVR Solutions</a>
                            <a href="toll-free.php" class="dropdown-item">Toll-Free Numbers</a>
                            <a href="sip.php" class="dropdown-item">SIP Trunking</a>
                            <a href="outsourcing.php" class="dropdown-item">BPO & Outsourcing</a>
                            <a href="did.php" class="dropdown-item">DID</a>
                            <a href="crm.php" class="dropdown-item">CRM Solutions</a>
                            <a href="web.php" class="dropdown-item">Web Development</a>
                            <a href="system.php" class="dropdown-item">System Administration</a>
                            <a href="digital.php" class="dropdown-item">Digital Marketing</a>
                            <a href="contactcenter.php" class="dropdown-item">Contact Centers</a>
                        </div>
                    </div>
                    <a href="feature.php" class="nav-item nav-link">Our features</a>
                    <a href="quote.php" class="nav-item nav-link">Free Quote</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                    <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal"
                        data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
                </div>
                <div class="nav-item dropdown d-none">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <div class="nav-item dropdown d-none">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <a href="price.html" class="dropdown-item d-none">Pricing Plan</a>
                        <a href="feature.html" class="dropdown-item">Our features</a>
                        <a href="team.html" class="dropdown-item d-none">Team Members</a>
                        <a href="testimonial.html" class="dropdown-item d-none">Testimonial</a>
                        <a href="quote.html" class="dropdown-item">Free Quote</a>
                    </div>
                </div>
                <!-- <a href="contact.php" class="nav-item nav-link">Contact</a> -->
            </div>
            <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                    class="fa fa-search"></i></butaton> -->
            <!-- <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a> -->
    </div>
    </nav>

    <script>
        document.querySelectorAll('.dropdown-submenu').forEach(function (element) {
            element.addEventListener('mouseenter', function (e) {
                let submenu = this.querySelector('.dropdown-menu');
                if (submenu) {
                    submenu.classList.add('show');
                }
            });
            element.addEventListener('mouseleave', function (e) {
                let submenu = this.querySelector('.dropdown-menu');
                if (submenu) {
                    submenu.classList.remove('show');
                }
            });
        });
    </script>

    <script>
        // Mobile: toggle submenu on click
        document.querySelectorAll('.dropdown-submenu > .dropdown-toggle').forEach(function (el) {
            el.addEventListener('click', function (e) {
                if (window.innerWidth < 992) { // mobile only
                    e.preventDefault();
                    e.stopPropagation();
                    const submenu = this.nextElementSibling;
                    submenu.classList.toggle('show');
                }
            });
        });

        // Close all submenus when main dropdown closes
        document.querySelectorAll('.dropdown').forEach(function (dd) {
            dd.addEventListener('hide.bs.dropdown', function () {
                this.querySelectorAll('.dropdown-menu.show').forEach(function (sub) {
                    sub.classList.remove('show');
                });
            });
        });
    </script>
    <script>
        document.querySelectorAll('.dropdown-submenu > a').forEach(link => {
            let lastTap = 0;

            link.addEventListener('click', function (e) {
                if (window.innerWidth <= 991) { // only for mobile
                    const now = Date.now();
                    const timeDiff = now - lastTap;

                    const submenu = this.nextElementSibling;

                    if (submenu && submenu.classList.contains('dropdown-menu')) {
                        if (timeDiff < 400) {
                            // double tap → redirect
                            window.location.href = this.getAttribute('href');
                        } else {
                            // single tap → open submenu
                            e.preventDefault();
                            submenu.classList.toggle('show');
                        }
                    }

                    lastTap = now;
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const btn = document.getElementById("menuBtn");
    const menu = document.getElementById("navbarCollapse");

    btn.addEventListener("click", function () {
        menu.classList.toggle("show");
    });
</script>

</body>

</html>