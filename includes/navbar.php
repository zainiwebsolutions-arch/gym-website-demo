<nav class="navbar">
    <div class="container navbar-wrapper">
        <a href="index.php" class="logo">IRON <span>EDGE</span></a>
        
        <div class="nav-container">
            <div class="nav-links">
                <a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Home</a>
                <a href="services.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Services</a>
                <a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">About</a>
                <a href="membership.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'membership.php' ? 'active' : ''; ?>">Membership</a>
                <a href="gallery.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">Gallery</a>
                <a href="trainers.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'trainers.php' ? 'active' : ''; ?>">Trainers</a>
                <a href="faq.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'active' : ''; ?>">FAQ</a>
                <a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
            </div>
            <a href="membership.php" class="btn btn-primary nav-cta">Join Now</a>
        </div>

        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </div>
</nav>
