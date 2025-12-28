<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $base_path = $_SERVER["DOCUMENT_ROOT"] . "/deividsans-2/";
    include $base_path . "components/global/head/head.php";
    ?>
  </head>

<body>
<section class="bg-[#131313] md:py-[20px] relative z-50">
    <h1 class="hidden">Main Navigations</h1>
    <div class="wraper">
        <div class="flex items-center justify-between">

            <div id="dl-menu" class="dl-menuwrapper">
                <button class="dl-trigger">Open Menu</button>
                <ul class="dl-menu">
                    <li><a href="index.php">Home</a></li>
                    <li>
                        <a href="#">Portfolio</a>
                        <ul class="dl-submenu">
                            <li>
                                <a href="components/pages/portfolio/webDevelopment/portfolio-webDevelopment.php">Web Development</a>
                                <ul class="dl-submenu">
                                    <li><a href="portfolio-webProjectAround.php">Around The World</a></li>
                                    <li><a href="portfolio-homeland.php">Homeland</a></li>
                                </ul>
                            </li>
                            <li><a href="components/pages/portfolio/videoEditing/videoEditing.php">Video Editing</a></li>
                        </ul>
                    </li>
                    <li><a href="components/pages/contact/contact.php">Contact</a></li>
                </ul>
            </div>

            <div class="w-[195px] md:w-[280px] sm:w-[200px] col:w-[50px]">
                <a class="flex items-center" href="index.php">
                    <img style="max-height:60px" src="assets/images/logo_white_50.png" alt="logo" />
                </a>
            </div>

            <ul class="md:hidden">
                <li class="relative inline-block group">
                    <a href="index.php" class="relative text-[16px] py-[35px] px-[20px] text-white block capitalize font-medium before:absolute before:left-0 before:bottom-0 before:w-full before:h-[4px] before:bg-[#59C378] before:content before:opacity-0 before:transition-all">Home</a>
                </li>

                <li class="relative inline-block group">
                    <a href="#" class="relative text-[16px] py-[35px] px-[20px] text-white block capitalize font-medium hover:before:opacity-100">Portfolio</a>
                    <ul class="absolute w-[240px] left-0 top-[110%] p-[20px] z-[111] bg-[#fff] shadow-lg transition-all opacity-0 invisible group-hover:opacity-100 group-hover:top-full group-hover:visible">
                        <li>
                            <a href="components/pages/portfolio/webDevelopment/portfolio-webDevelopment.php" class="text-[14px] py-[5px] block text-[#002642] font-bold hover:text-[#59C378]">Web Development</a>
                        </li>
                        <li>
                            <a href="components/pages/portfolio/videoEditing/videoEditing.php" class="text-[14px] py-[5px] block text-[#002642] font-bold hover:text-[#59C378]">Video Editing</a>
                        </li>
                    </ul>
                </li>

                <li class="relative inline-block">
                    <a href="components/pages/portfolio/videoEditing/demoReel/demoReel.php" class="relative text-[16px] py-[35px] px-[20px] text-white block capitalize font-medium hover:before:opacity-100">Demo Reel</a>
                </li>

                <li class="relative inline-block">
                    <a href="components/pages/contact/contact.php" class="relative text-[16px] py-[35px] px-[20px] text-white block capitalize font-medium hover:before:opacity-100">Contact</a>
                </li>
            </ul>

            <a class="theme-btn" download href="assets/images/Dēivid_Sans_Resume.jpg">
                Resume
            </a>
        </div>
    </div>
</section>
</body>
</html>
