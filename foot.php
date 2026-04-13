<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  .dropdown-submenu > .dropdown-menu.show {
    display: block;
  }
  .dropdown-submenu > .dropdown-toggle::after {
    float: right;
    transform: rotate(90deg);
    margin-top: 6px;
  }
}

</style>
</head>

<body>
  <div class="nav-item dropdown">
    <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a> -->
    <a href="#" class="nav-item nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
    <div class="dropdown-menu">
      <div class="dropdown-submenu">
        <a href="crm.php" class="dropdown-item dropdown-toggle">CRM Solutions</a>
        <div class=" dropdown-menu">
          <a href="crm.php#financial" class=" dropdown-item" onclick="navigateToIndustry('crm', '#financial')">Financial
            Services &
            Banking</a>
          <a href="crm.php#healthcare" class=" dropdown-item"
            onclick="navigateToIndustry('crm', 'healthcare')">Healthcare & Hospitals</a>
          <a href="crm.php#retail" class=" dropdown-item " onclick="navigateToIndustry('crm', 'retail')">Retail &
            E-commerce</a>
          <a href="crm.php#it" class=" dropdown-item" onclick="navigateToIndustry('crm', 'it')">IT & Software
            Companies</a>
          <a href="crm.php#realestate" class=" dropdown-item" onclick="navigateToIndustry('crm', 'realestate')">Real
            Estate</a>
        </div>
      </div>
      <div class=" dropdown-submenu">
        <a href="web.php" class="dropdown-item dropdown-toggle">Web Development</a>
        <div class=" dropdown-menu">
          <a href="web.php#ecommerce" class="dropdown-item" onclick="navigateToIndustry('web', 'ecommerce')">E-commerce
            & Retail</a>
          <a href="web.php#tech" class="dropdown-item" onclick="navigateToIndustry('web', 'tech')">Tech Startups &
            SaaS</a>
          <a href="web.php#healthcare" class="dropdown-item"
            onclick="navigateToIndustry('web', 'healthcare')">Healthcare</a>
          <a href="web.php#media" class="dropdown-item" onclick="navigateToIndustry('web', 'media')">Media &
            Entertainment</a>
          <a href="web.php#education" class="dropdown-item" onclick="navigateToIndustry('web', 'education')">Education &
            E-learning</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="system.php" class="dropdown-item dropdown-toggle">System Administration</a>
        <div class="dropdown-menu">
          <a href="system.php#it" class="dropdown-item" onclick="navigateToIndustry('sysadmin', 'it')">IT & Software
            Companies</a>
          <a href="system.php#healthcare" class="dropdown-item"
            onclick="navigateToIndustry('sysadmin', 'healthcare')">Healthcare & Pharma</a>
          <a href="system.php#financial" class="dropdown-item"
            onclick="navigateToIndustry('sysadmin', 'financial')">Financial Institutions</a>
          <a href="system.php#ecommerce" class="dropdown-item"
            onclick="navigateToIndustry('sysadmin', 'ecommerce')">E-commerce & Logistics</a>
          <a href="system.php#goverment" class="dropdown-item"
            onclick="navigateToIndustry('sysadmin', 'government')">Government & Defense</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="digital.php" class="dropdown-item dropdown-toggle">Digital Marketing</a>
        <div class="dropdown-menu">
          <a href="digital.php#ecommerce" class="dropdown-item"
            onclick="navigateToIndustry('digital', 'ecommerce')">E-commerce & Retail</a>
          <a href="digital.php#tech" class="dropdown-item" onclick="navigateToIndustry('digital', 'tech')">Consumer Tech
            & SaaS</a>
          <a href="digital.php#healthcare" class="dropdown-item"
            onclick="navigateToIndustry('digital', 'healthcare')">Healthcare & Wellness</a>
          <a href="digital.php#travel" class="dropdown-item" onclick="navigateToIndustry('digital', 'travel')">Travel &
            Hospitality</a>
          <a href="digital.php#education" class="dropdown-item"
            onclick="navigateToIndustry('digital', 'education')">Education & Online
            Learning</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="voip.php" class="dropdown-item dropdown-toggle">VoIP Solutions</a>
        <div class="dropdown-menu">
          <a href="voip.php#call" class="dropdown-item" onclick="navigateToIndustry('voip', 'call')">Call Centers &
            BPO</a>
          <a href="voip.php#tech" class="dropdown-item" onclick="navigateToIndustry('voip', 'tech')">Tech Startups &
            IT</a>
          <a href="voip.php#hospital" class="dropdown-item" onclick="navigateToIndustry('voip', 'hospital')">Hospitality
            & Travel </a>
          <a href="voip.php#health" class="dropdown-item" onclick="navigateToIndustry('voip', 'health')">Healthcare</a>
          <a href="voip.php#finance" class="dropdown-item" onclick="navigateToIndustry('voip', 'finance')">Finance &
            Banking</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="toll-free.php" class="dropdown-item dropdown-toggle">Toll-Free Numbers</a>
        <div class="dropdown-menu">
          <a href="toll-free.php#Bank" class="dropdown-item" onclick="navigateToIndustry('toll-free', 'Bank')">Banking &
            Financial Services</a>
          <a href="toll-free.php#retail" class="dropdown-item"
            onclick="navigateToIndustry('toll-free', 'retail')">Retail & E-commerce</a>
          <a href="toll-free.php#health" class="dropdown-item"
            onclick="navigateToIndustry('toll-free', 'health')">Healthcare</a>
          <a href="toll-free.php#telecom" class="dropdown-item"
            onclick="navigateToIndustry('toll-free', 'telecom')">Utilities & Telecom</a>
          <a href="toll-free.php#travel" class="dropdown-item"
            onclick="navigateToIndustry('toll-free', 'travel')">Travel & Logistics</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="ivr.php" class="dropdown-item dropdown-toggle">IVR Solutions</a>
        <div class="dropdown-menu">
          <a href="ivr.php#bank" class="dropdown-item" onclick="navigateToIndustry('ivr', 'bank')">Banking & Financial
            Institutions</a>
          <a href="ivr.php#cable" class="dropdown-item" onclick="navigateToIndustry('ivr', 'cable')">Telecom & Cable</a>
          <a href="ivr.php#health" class="dropdown-item" onclick="navigateToIndustry('ivr', 'health')">Healthcare</a>
          <a href="ivr.php#logistic" class="dropdown-item" onclick="navigateToIndustry('ivr', 'logistic')">E-commerce &
            Logistics</a>
          <a href="ivr.php#insuranc" class="dropdown-item" onclick="navigateToIndustry('ivr', 'insuranc')">Insurance</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="contactcenter.php" class="dropdown-item dropdown-toggle">Contact Centers</a>
        <div class="dropdown-menu">
          <a href="contactcenter.php#banking" class="dropdown-item"
            onclick="navigateToIndustry('contactcenter', 'banking')">Banking & Insurance</a>
          <a href="contactcenter.php#e-commerce" class="dropdown-item"
            onclick="navigateToIndustry('contactcenter', 'e-commerce')">E-commerce & Retail</a>
          <a href="contactcenter.php#ISP" class="dropdown-item"
            onclick="navigateToIndustry('contactcenter', 'ISP')">Telecom & ISP</a>
          <a href="contactcenter.php#hospital" class="dropdown-item"
            onclick="navigateToIndustry('contactcenter', 'hospital')">Healthcare & Hospitals</a>
          <a href="contactcenter.php#travel" class="dropdown-item"
            onclick="navigateToIndustry('contactcenter', 'travel')">Travel & Hospitality</a>
        </div>
      </div>
      <div class="dropdown-submenu">
        <a href="outsourcing.php" class="dropdown-item dropdown-toggle">BPO & Outsourcing</a>
        <div class="subdropdown">
          <a href="outsourcing.php#finance" class="dropdown-item"
            onclick="navigateToIndustry('outsourcing', 'finance')">Banking & Finance</a>
          <a href="outsourcing.php#insurance" class="dropdown-item"
            onclick="navigateToIndustry('outsourcing', 'insurance')">Healthcare & Insurance</a>
          <a href="outsourcing.php#retail" class="dropdown-item"
            onclick="navigateToIndustry('outsourcing', 'retail')">Retail & E-commerce</a>
          <a href="outsourcing.php#telecom" class="dropdown-item"
            onclick="navigateToIndustry('outsourcing', 'it')">Telecom & Utilities</a>
          <a href="outsourcing.php#it" class="dropdown-item" onclick="navigateToIndustry('outsourcing', 'it')">IT &
            SaaS</a>
        </div>
      </div>
    </div>
  </div>
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

</body>

</html>