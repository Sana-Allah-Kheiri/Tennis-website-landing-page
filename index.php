<?php

$translations = [

    'fa' => [
        'title' => 'آکادمی تنیس درنا',
		'hero_title' => 'آکادمی تنیس درنا',
        'hero_slogan' => 'جایی که تنیس با تکنولوژی ملاقات می‌کند',
        'hero_subtitle' => 'اولین پلتفرم هوش تجاری تنیس در خاورمیانه',
        'waitlist_placeholder' => 'شماره تماس یا ایمیل خود را وارد کنید',
        'notify_me' => 'به من خبر بده',
        'join_us' => 'فرصت شغلی',
        'blogs' => 'وبلاگ‌ها',
        'services' => 'خدمات',
        'products' => 'محصولات',
        'contact_us' => 'تماس با ما',
        'about_us' => 'درباره ما',
        'my_account' => 'حساب من',
		'footer_contact' => 'تماس با ما',
        'footer_social' => 'شبکه‌های اجتماعی',
        'footer_legal' => 'قوانین',
        'footer_certificates' => 'مجوزها',
    ],

    'en' => [
        'title' => 'Dorna Tennis Academy',
		'hero_title' => 'Dorna Tennis Academy',
        'hero_slogan' => 'Where Tennis Meets Tech',
        'hero_subtitle' => 'The First Tennis BI Platform In Middle East',
        'waitlist_placeholder' => 'Enter Phone Number or Email',
        'notify_me' => 'Notify Me',
        'join_us' => 'Join Us',
        'blogs' => 'Blogs',
        'services' => 'Services',
        'products' => 'Products',
        'contact_us' => 'Contact Us',
        'about_us' => 'About Us',
        'my_account' => 'My Account',
		'footer_contact' => 'Contacts',
        'footer_social' => 'Follow us on',
        'footer_legal' => 'Legals',
        'footer_certificates' => 'Certificates',
    ]

];

$lang = $_GET['lang'] ?? 'en';

if (!array_key_exists($lang, $translations)) {
    $lang = 'en';
}

$t = $translations[$lang];

$dir = ($lang === 'fa') ? 'rtl' : 'ltr';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['title']; ?></title>
    <link rel="icon" href="https://s9.uupload.ir/files/sasanace/dornatennis.ir/dornatennis_transparent_logo.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="light-theme">

    <!-- Sticky Header -->
    <header class="main-header">
        <nav class="nav-container">
            <!-- nav content stays similar but cleaner -->
            <div class="nav-left">
                <button id="theme-toggle" class="icon-btn"><i class="fas fa-moon"></i></button>
                
                   
					<button id="mobile-menu-btn" class="mobile-menu-btn"> <!-- adding hamburger menu -->
						<i class="fas fa-bars"></i>
					</button>
                    
                        <!-- <a href="?lang=fa">فارسی</a>
                        <a href="?lang=en">English</a> -->
						<!-- To make language button toggle line 75 to 81 -->
						<?php
						$nextLang = ($lang === 'fa') ? 'en' : 'fa';
						$nextLabel = ($lang === 'fa') ? 'English' : 'فارسی';
						?>
					<a href="?lang=<?php echo $nextLang; ?>" class="lang-toggle-btn">
						<i class="fas fa-globe"></i>
						<?php echo $nextLabel; ?>
					</a>
                    
                
            </div>
			
			<div class="header-social">

             <a href="https://www.instagram.com/dorna_tennis.co/">
              <img src="https://s41.uupload.ir/files/sasanace/dornatennis.ir/IG_icon.png">
            </a>

             <a href="http://ble.ir/dornatennis">
              <img src="https://s41.uupload.ir/files/sasanace/dornatennis.ir/bale_icon.png">
            </a>

            <a href="#">
             <img src="https://s41.uupload.ir/files/sasanace/dornatennis.ir/aparat_icon.png">
            </a>

            </div>

             <div class="logo-center">
                <img width = '100' hei = '100' src="https://s9.uupload.ir/files/sasanace/dornatennis.ir/dornatennis_transparent_logo.png" alt="Dorna" class="nav-logo">
            </div> 

<ul class="nav-menu">

    <li>
        <a href="#"><?php echo $t['blogs']; ?></a>
    </li>

    <li class="dropdown">
        <a href="#"><?php echo $t['services']; ?></a>

        <div class="dropdown-content">
            <a href="#">Court Rental</a>
            <a href="#">Coaching</a>
            <a href="#">Tournaments</a>
        </div>
    </li>

    <li class="dropdown">
        <a href="#"><?php echo $t['products']; ?></a>

        <div class="dropdown-content">
            <a href="#">Rackets</a>
            <a href="#">Balls</a>
            <a href="#">Wearables</a>
        </div>
    </li>

    <li>
        <a href="#"><?php echo $t['contact_us']; ?></a>
    </li>

    <li>
        <a href="#"><?php echo $t['about_us']; ?></a>
    </li>

    <li>
        <a href="#"><?php echo $t['my_account']; ?></a>
    </li>

</ul>

            <div class="nav-right">
                <a href="https://dornatennis.ir/hiring" class="btn">
    <?php echo $t['join_us']; ?>
</a>
            </div>
        </nav>
    </header>

    <main class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <img src="https://s9.uupload.ir/files/sasanace/dornatennis.ir/dornatennis_transparent_logo.png" alt="Dorna Logo" class="hero-logo">
            
          <!-- Fixing localization unTranslable issue  <h1 class="hero_title"><strong>Dorna Tennis Academy</strong></h1>
            <p class="hero_slogan">The first Tennis BI platform in middle east</p>
            <p class="hero_subtitle"> <em>where tennis meets tech</em> </p> -->
			<!--fix the localization to make hero-content , hero_slogan and hero_subtitle translable as we defined in $translations array -->
           
<h1 class="hero_title">
    <?php echo $t['hero_title']; ?>
</h1>

<p class="hero_slogan">
    <?php echo $t['hero_slogan']; ?>
</p>

<p class="hero_subtitle">
    <?php echo $t['hero_subtitle']; ?>
</p>
            <div id="countdown" class="countdown"></div>

            <form id="waitlist-form" class="waitlist-form">
                <input type="text" name="contact_info" placeholder="<?php echo $t['waitlist_placeholder']; ?>" required>
                <button type="submit"><?php echo $t['notify_me']; ?></button>
            </form>
        </div>
    </main>

    <footer class="site-footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h4><?php echo $t['footer_contact']; ?></h4>
                <p>📧<a href = "mailto:info@dornatennis.ir"> info@dornatennis.ir</a> </p>
                <p>📲<a href="https://wa.link/an3yfa"> WhatsApp Chat </a> </p>
				<p>📞<a href="tel:+989144478522"> Direct Call </a> </p>
            </div>
            <div class="footer-col">
                <h4><?php echo $t['footer_social']; ?></h4>
                <div class="social-icons footer-social">

    <a href="https://www.instagram.com/dorna_tennis.co/">
        <img src="https://s41.uupload.ir/files/sasanace/dornatennis.ir/IG_icon.png">
		Instagram
    </a>

    <a href="http://ble.ir/dornatennis">
        <img src="https://s41.uupload.ir/files/sasanace/dornatennis.ir/bale_icon.png">
		Bale
    </a>

    <a href="#">
        <img src="https://s41.uupload.ir/files/sasanace/dornatennis.ir/aparat_icon.png">
		Aparat
    </a>

</div>
            </div>
            <div class="footer-col">
                <h4><?php echo $t['footer_legal']; ?></h4>
                <a href="#">Privacy Policy</a><br>
                <a href="#">Terms of Service</a>
            </div>
            <div class="footer-col">
                <h4><?php echo $t['footer_certificates']; ?></h4>
                <img src="https://s17.uupload.ir/files/sasanace/dornatennis.ir/website_certificates.png" alt="Certificates" class="cert-img">
            </div>
        </div>
        <div class="footer-bottom">
            <p>2026 Dorna Tennis Academy ©</p> <p>Powered by <a href="https://paratopic.com">Paratopic Technologies</a></p>
        </div>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>