 <?php   $page = basename($_SERVER['SCRIPT_FILENAME']);?>
 <header class="page-head">
    <div class="rd-navbar-wrap">
      <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-stick-up-clone="false" data-body-class="rd-navbar-static-smooth" data-md-stick-up-offset="60px" data-lg-stick-up-offset="60px" data-md-stick-up="true" data-lg-stick-up="true" class="rd-navbar rd-navbar-default">
        <div class="rd-navbar-inner">
          <div class="rd-navbar-panel">
            <button data-custom-toggle=".rd-navbar-nav-wrap" data-custom-toggle-disable-on-blur="true" class="rd-navbar-toggle"><span></span></button><a href="index.php" class="rd-navbar-brand brand"><img src="images/BuyIsotope_logo_1.jpg" width="208" height="68" style="max-width:auto !important;" alt="Buyisotope.com Isotope Supplier | Stable Isotopes"/></a>
          </div>		  
          <div class="rd-navbar-group rd-navbar-search-wrap">
            <div class="rd-navbar-nav-wrap">
              <div class="rd-navbar-nav-inner">
                <ul class="rd-navbar-nav" id='menu1'>
                  <li <?php if($page == 'index.php'){?>class="active"<?php } ?>><a href="index.php">Home</a></li>
                  <li <?php if($page == 'stable_isotopes.php'){?>class="active"<?php } ?>><a href="stable_isotopes.php">Isotopes</a></li>
                  <li <?php if($page == 'product_development.php'){?>class="active"<?php } ?> ><a href="product_development.php">Product Development</a></li>
                  <li <?php if($page == 'request_quote_stable_isotope.php'){?>class="active"<?php } ?> ><a href="request_quote_stable_isotope.php">Request a Quote</a></li>
                  <li <?php if($page == 'partners_stable_isotope.php'){?>class="active"<?php } ?> ><a href="partners_stable_isotope.php">Partners</a></li>
                  <li <?php if($page == 'contact_stable_isotope.php'){?>class="active"<?php } ?> ><a href="contact_stable_isotope.php">Contact Us</a></li>					 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header> 