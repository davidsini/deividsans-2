<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
$base_path = $_SERVER["DOCUMENT_ROOT"] . "/deividsans-2/";
include $base_path . "components/global/head/head.php";
?>
    <title>Dēivid Sans - Video Editing</title>
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
        <section class="title">
           <div class="wraper">
                <div class="grid grid-rows-1 grid-cols-1 gap-4">
                    <div class="text-center">
                        <h2 class="text-[60px] text-white leading-[60px] font-black sm:text-[30px] sm:leading-[35px] sm:mb-[10px]">Video Editing Portfolio</h2>
                    </div>
                </div>
           </div>
        </section>
        <!-- end elito-page-titlen -->

<!--start content -->
<style>
  .portfolio-section-fixed {
    background-color: #0f0f0f !important;
    padding: 60px 0;
    width: 100%;
    min-height: 100vh;
  }

  .video-flex-container {
    display: flex;
    flex-wrap: wrap;      /* Permite que los videos bajen a la siguiente fila */
    justify-content: center; /* ESTO CENTRA LOS VIDEOS SUELTOS */
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    list-style: none;
  }

  .video-item {
    background: #1a1a1a;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,0.5);
    /* Definimos el ancho base para que entren 3 en PC */
    flex: 0 1 350px;
    width: 100%;
  }

  /* Caso especial: Video Horizontal que ocupa todo el ancho */
  .video-item.full-width {
    flex: 0 1 100%;
    max-width: 1110px; /* Alineado con el ancho de 3 videos + gaps */
  }

  .video-responsive {
    position: relative;
    height: 0;
    overflow: hidden;
  }

  .vertical-aspect { padding-bottom: 177.77%; }
  .horizontal-aspect { padding-bottom: 56.25%; }

  .video-responsive iframe {
    position: absolute;
    top: 0; left: 0;
    width: 100% !important;
    height: 100% !important;
    border: 0;
  }
</style>

<section class="portfolio-section-fixed">
  <ul class="video-flex-container">

   <li class="video-item" id="AI Impact Clients - December 2025">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/3NIKSFQPPJ4" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/uLuIJsgPnBs" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/Hcmg1GvwoZ0" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item full-width" id="CAINTRA">
      <div class="video-responsive horizontal-aspect">
        <iframe src="https://www.youtube.com/embed/hzmz2hHHBfw" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/Gzbmmqce-SY" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/7dpA9eyrHKs" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/zIBLPiM129U" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item full-width">
      <div class="video-responsive horizontal-aspect">
        <iframe src="https://www.youtube.com/embed/aqoBRR1g-f8" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/EYeWaNh66wQ" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item">
      <div class="video-responsive vertical-aspect">
        <iframe src="https://www.youtube.com/embed/8bq_Ru8du-Y" allowfullscreen></iframe>
      </div>
    </li>

    <li class="video-item full-width">
      <div class="video-responsive horizontal-aspect">
        <iframe src="https://www.youtube.com/embed/HgvesDlEOqQ" allowfullscreen></iframe>
      </div>
    </li>
    
  </ul>
</section>


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
