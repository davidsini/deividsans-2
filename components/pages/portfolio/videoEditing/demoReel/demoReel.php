<!DOCTYPE html>
<html lang="en">

<head>
<?php
    $base_path = $_SERVER["DOCUMENT_ROOT"] . "/deividsans-2/";
    include $base_path . "components/global/head/head.php";
    ?>
    <title>Dēivid Sans - Demo Reel</title>
</head>

<body>

    <!-- start page-wrapper -->
   <div class="page-wrapper">
        <!-- start preloader -->
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

 <?php include $base_path . "components/global/header/header.php"; ?>

        <!-- start elito-page-titlen -->
        <section class="min-h-[350px] sm:min-h-[150px] flex justify-center relative flex-col z-30  bg-[url('../images/page-title2.jpg')] bg-no-repeat bg-center bg-cover">
           <div class="wraper">
                <div class="grid grid-rows-1 grid-cols-1 gap-4">
                    <div class="text-center">
                        <h2 class="text-[60px] text-white leading-[60px] font-black sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">Video Editing Demo Reel</h2>
                    </div>
                </div>
           </div>
        </section>
        <!-- end elito-page-titlen -->

        <!--start elito-blod-single-area  -->
        <section class="bg-[#222121] py-[120px] md:py-[90px] sm:py-[80px]">
          <div class="wraper">
             <div class="grid grid-cols-12 gap-3">
                <div class="col-span-1 md:col-span-12"></div>
                <div class="col-span-10 md:col-span-12 ">
                    <div class="">
                        <div class="mb-[70px]">
                            <iframe class="w-full" width="1022" height="575" src="https://www.youtube.com/embed/7s3gFn0VMe8" title="Dēivid Sans  -  Demo Reel" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            <div class="overflow-hidden my-[35px]">
                                <ul>
                                    <li class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#D8D8D8]"><i class="relative top-0 mr-[3px] text-[15px] text-[#D8D8D8]  fi flaticon-user"></i> By <a class="text-[#D8D8D8] transition-all hover:text-[#59C378]" href="#">Dēivid Sans</a> </li>
                                    <li class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#D8D8D8] ml-[20px] pl-[20px] relative before:absolute before:left-0 before:top-[50%] before:w-[7px] before:h-[7px] before:rounded-[50%] before:content-[''] before:translate before:-translate-y-1/2 before:bg-[#59C378] z-10 before:-z-10"><i class="relative top-0 mr-[3px] text-[15px] text-[#D8D8D8]  fi flaticon-comment-white-oval-bubble"></i> Comments: 1 </li>
                                    <li class="text-[14px] font-medium uppercase float-left col:float-none col:block col:ml-[0px] col:mb-[5px] text-[#D8D8D8] ml-[20px] pl-[20px] relative before:absolute before:left-0 before:top-[50%] before:w-[7px] before:h-[7px] before:rounded-[50%] before:content-[''] before:translate before:-translate-y-1/2 before:bg-[#59C378] z-10 before:-z-10"><i class="relative top-0 mr-[3px] text-[15px] text-[#D8D8D8]  fi flaticon-calendar-1"></i>02/25/2025</li>
                                </ul>
                            </div>

                    </div>
                </div>
                <div class="col-span-1 md:col-span-12"></div>
             </div>
          </div>
        </section>
        <!--end elito-blog-single-area  -->

    <?php include $base_path . "components/global/footer/footer.php"; ?>


    </div>
    <!-- end of page-wrapper -->

  <!-- All JavaScript files
    ================================================== -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Plugins for this template -->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/js/jquery-plugin-collection.js"></script>

    <script src="assets/js/moving-animation.js"></script>
    <script src="assets/js/tw-elements.min.js"></script>
    <!-- Custom script for this template -->
    <script src="assets/js/script.js"></script>
</body>

</html>
