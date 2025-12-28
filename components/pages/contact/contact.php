<!DOCTYPE html>
<html lang="en">

<head>
<?php
    $base_path = $_SERVER["DOCUMENT_ROOT"] . "/deividsans-2/";
    include $base_path . "components/global/head/head.php";
    ?>
    <title>Dēivid Sans - Contact</title>
</head>

<body>

    <div class="page-wrapper">
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="assets/images/preloader.png" alt="">
                </div>
            </div>
        </div>

       <?php
       $base_path = $_SERVER["DOCUMENT_ROOT"] . "/deividsans-2/";
       include $base_path . "components/global/header/header.php";
       ?>

        <section class="min-h-[350px] sm:min-h-[250px] relative flex justify-center flex-col z-40 bg-[url('../images/page-title2.jpg')] bg-no-repeat bg-center bg-cover">
            <div class="wraper">
                <div class="grid grid-rows-1 grid-cols-1 gap-4">
                    <div class="text-center">
                        <h2 class="text-[60px] text-white leading-[60px] mt-[-10px] mb-[20px] font-black sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">Contact</h2>
                    </div>
                </div>
            </div>
        </section>
        <section class="relative bg-[#191919] pt-[120px] pb-0 z-20">
            <div class="wraper">
                <div class="grid grid-cols-2">
                    <div class="col-span-1"></div>
                    <div class="col-span-10 md:col-span-12">
                        <div class="pb-[100px] sm:pb-[60px]">
                            <div class="grid grid-cols-2 gap-3">
                                <div class="col-span-4 md:col-span-6 sm:col-span-12 md:mb-7">
                                    <div class="text-center p-[40px] bg-[#222121] shadow-[0_8px_17px_0_rgba(0,0,0,20%),0_6px_20px_0_rgba(0,0,0,29%)]">
                                        <div class="w-[85px] h-[85px] bg-[#2e2e2e] leading-[85px] text-center mx-auto rounded-[50%]">
                                            <div class="icon">
                                                <a href="https://wa.me/+528441394193">
                                                    <i class="text-[35px] text-[#FFE600] fi flaticon-smartphone"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="text-[30px] text-white font-medium my-[20px]">Whatsapp</h2>
                                        <p class="text-[#D8D8D8] text-[16px] leading-[22px]">+528441394193</p>
                                    </div>
                                </div>
                                <div class="col-span-4 md:col-span-6 sm:col-span-12 md:mb-7">
                                    <div class="text-center p-[40px] bg-[#222121] shadow-[0_8px_17px_0_rgba(0,0,0,20%),0_6px_20px_0_rgba(0,0,0,29%)]">
                                        <div class="w-[85px] h-[85px] bg-[#2e2e2e] leading-[85px] text-center mx-auto rounded-[50%]">
                                            <div class="icon">
                                                <a href="mailto:deividsans@icloud.com">
                                                    <i class="text-[35px] text-[#FFE600] fi flaticon-mail"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <h2 class="text-[30px] text-white font-medium my-[20px]">Email me</h2>
                                        <p class="text-[#D8D8D8] text-[16px] leading-[22px]">deividsans@icloud.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>
                    <div class="col-span-1"></div>

                </div>
            </div>
            <div class="absolute left-0 top-0 -z-20">
                <svg class=" fill-[#59C378]" width="1038" height="938" viewBox="0 0 1038 938" fill="none">
                    <g opacity="0.5" filter="url(#filter0_f_39_4392)">
                        <circle cx="290.5" cy="282.5" r="247.5"></circle>
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4392" x="-457" y="-465" width="1495" height="1495" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"></feBlend>
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4392"></feGaussianBlur>
                        </filter>
                    </defs>
                </svg>
            </div>
        </section>
       <?php include $base_path . "components/global/partners/partners.php"; ?>


        <?php include $base_path . "components/global/footer/footer.php"; ?>


    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <script src="assets/js/moving-animation.js"></script>
    <script src="assets/js/tw-elements.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
