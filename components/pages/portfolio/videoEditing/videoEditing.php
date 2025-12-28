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
            <img src="assets/images/preloader.png" alt="" />
          </div>
        </div>
      </div>

<?php include $base_path . "components/global/header/header.php"; ?>
 <!-- start elito-page-titlen -->
      <section
        class="min-h-[350px] sm:min-h-[250px] relative flex justify-center flex-col z-30 bg-[url('/images/page-title2.jpg')] bg-no-repeat bg-center bg-cover"
      >
        <div class="wraper">
          <div class="grid grid-rows-1 grid-cols-1 gap-4">
            <div class="text-center">
              <h2
                class="text-[60px] text-white leading-[60px] mt-[-10px] mb-[20px] font-black sm:text-[30px] sm:leading-[35px] sm:mb-[10px]"
              >
                Video Editing
              </h2>
            </div>
          </div>
        </div>
      </section>
      <!-- end elito-page-titlen -->

<?php include $base_path . "recentWork_WebDevelopment.php"; ?>
<?php include $base_path . "components/global/partners/partners.php"; ?>

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
