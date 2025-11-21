<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="wpOceans" />
    <link
      rel="shortcut icon"
      type="image/png"
      href="assets/images/favicon.png"
    />
    <title>Dēivid Sans - Portfolio</title>
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <link href="assets/css/owl.transitions.css" rel="stylesheet" />
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet" />
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet" />
    <link href="assets/css/global.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
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

      <?php include 'header.php'; ?>

      <!-- start elito-page-titlen -->
      <section
        class="min-h-[350px] sm:min-h-[250px] relative flex justify-center flex-col z-30 bg-[url('../images/page-title2.jpg')] bg-no-repeat bg-center bg-cover"
      >
        <div class="wraper">
          <div class="grid grid-rows-1 grid-cols-1 gap-4">
            <div class="text-center">
              <h2
                class="text-[60px] text-white leading-[60px] mt-[-10px] mb-[20px] font-black sm:text-[30px] sm:leading-[35px] sm:mb-[10px]"
              >
                Portfolio
              </h2>
              <!-- <ol class="pl-0 mb-0 text-center">
                <li
                  class="inline-block py-0 px-[5px] text-white relative text-[20px] font-base-font md:text-[18px] after:content-['/'] after:relative after:left-[7px]"
                >
                  <a
                    class="text-white text-[20px] transition-all hover:text-[#59C378]"
                    href="index.html"
                    >Home</a
                  >
                </li>
                <li
                  class="inline-block text-white text-[20px] font-base-font md:text-[18px]"
                >
                  Portfolio
                </li>
              </ol> -->
            </div>
          </div>
        </div>
      </section>
      <!-- end elito-page-titlen -->

      <!-- start elito-protfolio-area  -->
      <section class="bg-[#222121] py-[120px] md:py-[90px] sm:py-[80px]">
        <div class="wraper">
          <div class="sortable-gallery overflow-hidden">
            <div class="gallery-filters text-center mb-[60px]">
              <ul class="inline-block overflow-hidden text-center">
                <li class="inline-block col:mb-[5px]">
                  <a
                    data-filter="*"
                    href="#"
                    class="current unactive-color font-semibold block capitalize"
                    >All Projects</a
                  >
                </li>
                <li class="inline-block ml-7 col:mb-[5px] col:ml-[10px]">
                  <a
                    data-filter=".BranDing"
                    href="#"
                    class="unactive-color font-semibold block capitalize"
                    >Web Development
                  </a>
                </li>
                <li class="inline-block ml-7 col:mb-[5px] col:ml-[10px]">
                  <a
                    data-filter=".IllustAtor"
                    href="#"
                    class="unactive-color font-semibold block capitalize"
                    >Video editing</a
                  >
                </li>

                <li class="inline-block ml-7 col:mb-[5px] col:ml-[10px]">
                  <a
                    data-filter=".Marketing"
                    href="#"
                    class="unactive-color font-semibold block capitalize"
                    >Motion Design</a
                  >
                </li>
              </ul>
            </div>
            <div
              class="gallery-container gallery-fancybox masonry-gallery grid grid-cols-12 gap-4"
            >
              <div
                class="col-span-6 md:col-span-6 col:col-span-12 p-[5px] custom-grid IllustAtor 3d Marketing wow zoomIn"
                data-wow-duration="2000ms"
              >
                <div class="relative overflow-hidden z-40 group">
                  <div
                    class="relative before:absolute before:left-0 before:top-0 before:z-50 before:content-[''] before:bg-[#00000066] before:w-full before:h-0 before:opacity-0 before:invisible before:transition-all group-hover:before:opacity-100 group-hover:before:visible group-hover:before:h-full"
                  >
                    <img
                      class="w-full"
                      src="assets/images/project-single/webProjectAround/projectAround_Screenshot_optimized.png"
                      alt=""
                    />
                  </div>
                  <div
                    class="absolute left-0 z-50 bottom-[-200px] p-[40px] transition-all invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:bottom-0"
                  >
                    <h2
                      class="text-[40px] text-white font-semibold font-base-font"
                    >
                      Web Project - Around The World
                    </h2>
                    <span
                      class="text-[18px] text-white block font-light font-base-font mb-[20px]"
                      >Frontend, OOP-based Programming</span
                    >
                    <a
                      href="portfolio-webProjectAround.html"
                      class="inline-block text-[18px] text-white py-[10px] px-[50px] relative rounded-[40px] bg-[#ffffff59] group before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-0 before:z-0 before:content-[''] before:transition-all before:rounded-[40px] hover:before:left-0 hover:before:opacity-[0.3] after:absolute after:left-[-5px] after:bottom-[-5px] after:w-[105%] after:h-[120%] after:content-[''] after:rounded-[40px] after:border after:border-white after:z-50"
                      >View Work</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-span-6 md:col-span-6 col:col-span-12 p-[5px] custom-grid BranDing IllustAtor 3d wow zoomIn"
                data-wow-duration="2000ms"
              >
                <div class="relative overflow-hidden z-40 group">
                  <div
                    class="relative before:absolute before:left-0 before:top-0 before:z-50 before:content-[''] before:bg-[#00000066] before:w-full before:h-0 before:opacity-0 before:invisible before:transition-all group-hover:before:opacity-100 group-hover:before:visible group-hover:before:h-full"
                  >
                    <img
                      class="w-full"
                      src="assets/images/project-single/homeland/homeland_optimised.png"
                      alt=""
                    />
                  </div>
                  <div
                    class="absolute left-0 z-50 bottom-[-200px] p-[40px] transition-all invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:bottom-0"
                  >
                    <h2
                      class="text-[40px] text-white font-semibold font-base-font"
                    >
                      Web Project - Homeland
                    </h2>
                    <span
                      class="text-[18px] text-white block font-light font-base-font mb-[20px]"
                      >Frontend, multiple-device optimisation</span
                    >
                    <a
                      href="portfolio-homeland.html"
                      class="inline-block text-[18px] text-white py-[10px] px-[50px] relative rounded-[40px] bg-[#ffffff59] group before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-0 before:z-0 before:content-[''] before:transition-all before:rounded-[40px] hover:before:left-0 hover:before:opacity-[0.3] after:absolute after:left-[-5px] after:bottom-[-5px] after:w-[105%] after:h-[120%] after:content-[''] after:rounded-[40px] after:border after:border-white after:z-50"
                      >View Work</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-span-6 md:col-span-6 col:col-span-12 p-[5px] custom-grid IllustAtor Marketing wow zoomIn"
                data-wow-duration="2000ms"
              >
                <div class="relative overflow-hidden z-40 group">
                  <div
                    class="relative before:absolute before:left-0 before:top-0 before:z-50 before:content-[''] before:bg-[#00000066] before:w-full before:h-0 before:opacity-0 before:invisible before:transition-all group-hover:before:opacity-100 group-hover:before:visible group-hover:before:h-full"
                  >
                    <img
                      class="w-full"
                      src="assets/images/protfolio/img-7.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="absolute left-0 z-50 bottom-[-200px] p-[40px] transition-all invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:bottom-0"
                  >
                    <h2
                      class="text-[40px] text-white font-semibold font-base-font"
                    >
                      3D Project
                    </h2>
                    <span
                      class="text-[18px] text-white block font-light font-base-font mb-[20px]"
                      >Illustration . Art Direction</span
                    >
                    <a
                      href="portfolio-single.html "
                      class="inline-block text-[18px] text-white py-[10px] px-[50px] relative rounded-[40px] bg-[#ffffff59] group before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-0 before:z-0 before:content-[''] before:transition-all before:rounded-[40px] hover:before:left-0 hover:before:opacity-[0.3] after:absolute after:left-[-5px] after:bottom-[-5px] after:w-[105%] after:h-[120%] after:content-[''] after:rounded-[40px] after:border after:border-white after:z-50"
                      >View Work</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-span-6 md:col-span-6 col:col-span-12 p-[5px] custom-grid BranDing 3d wow zoomIn"
                data-wow-duration="2000ms"
              >
                <div class="relative overflow-hidden z-40 group">
                  <div
                    class="relative before:absolute before:left-0 before:top-0 before:z-50 before:content-[''] before:bg-[#00000066] before:w-full before:h-0 before:opacity-0 before:invisible before:transition-all group-hover:before:opacity-100 group-hover:before:visible group-hover:before:h-full"
                  >
                    <img
                      class="w-full"
                      src="assets/images/protfolio/img-8.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="absolute left-0 z-50 bottom-[-200px] p-[40px] transition-all invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:bottom-0"
                  >
                    <h2
                      class="text-[40px] text-white font-semibold font-base-font"
                    >
                      Modern BG
                    </h2>
                    <span
                      class="text-[18px] text-white block font-light font-base-font mb-[20px]"
                      >Illustration . Art Direction</span
                    >
                    <a
                      href="portfolio-single.html "
                      class="inline-block text-[18px] text-white py-[10px] px-[50px] relative rounded-[40px] bg-[#ffffff59] group before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-0 before:z-0 before:content-[''] before:transition-all before:rounded-[40px] hover:before:left-0 hover:before:opacity-[0.3] after:absolute after:left-[-5px] after:bottom-[-5px] after:w-[105%] after:h-[120%] after:content-[''] after:rounded-[40px] after:border after:border-white after:z-50"
                      >View Work</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-span-6 md:col-span-6 col:col-span-12 p-[5px] custom-grid IllustAtor Marketing wow zoomIn"
                data-wow-duration="2000ms"
              >
                <div class="relative overflow-hidden z-40 group">
                  <div
                    class="relative before:absolute before:left-0 before:top-0 before:z-50 before:content-[''] before:bg-[#00000066] before:w-full before:h-0 before:opacity-0 before:invisible before:transition-all group-hover:before:opacity-100 group-hover:before:visible group-hover:before:h-full"
                  >
                    <img
                      class="w-full"
                      src="assets/images/protfolio/img-5.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="absolute left-0 z-50 bottom-[-200px] p-[40px] transition-all invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:bottom-0"
                  >
                    <h2
                      class="text-[40px] text-white font-semibold font-base-font"
                    >
                      Product Design
                    </h2>
                    <span
                      class="text-[18px] text-white block font-light font-base-font mb-[20px]"
                      >Illustration . Art Direction</span
                    >
                    <a
                      href="portfolio-single.html "
                      class="inline-block text-[18px] text-white py-[10px] px-[50px] relative rounded-[40px] bg-[#ffffff59] group before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-0 before:z-0 before:content-[''] before:transition-all before:rounded-[40px] hover:before:left-0 hover:before:opacity-[0.3] after:absolute after:left-[-5px] after:bottom-[-5px] after:w-[105%] after:h-[120%] after:content-[''] after:rounded-[40px] after:border after:border-white after:z-50"
                      >View Work</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="col-span-6 md:col-span-6 col:col-span-12 p-[5px] custom-grid IllustAtor Marketing wow zoomIn"
                data-wow-duration="2000ms"
              >
                <div class="relative overflow-hidden z-40 group">
                  <div
                    class="relative before:absolute before:left-0 before:top-0 before:z-50 before:content-[''] before:bg-[#00000066] before:w-full before:h-0 before:opacity-0 before:invisible before:transition-all group-hover:before:opacity-100 group-hover:before:visible group-hover:before:h-full"
                  >
                    <img
                      class="w-full"
                      src="assets/images/protfolio/img-4.jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="absolute left-0 z-50 bottom-[-200px] p-[40px] transition-all invisible opacity-0 group-hover:opacity-100 group-hover:visible group-hover:bottom-0"
                  >
                    <h2
                      class="text-[40px] text-white font-semibold font-base-font"
                    >
                      Web Design
                    </h2>
                    <span
                      class="text-[18px] text-white block font-light font-base-font mb-[20px]"
                      >Illustration . Art Direction</span
                    >
                    <a
                      href="portfolio-single.html "
                      class="inline-block text-[18px] text-white py-[10px] px-[50px] relative rounded-[40px] bg-[#ffffff59] group before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-white before:opacity-0 before:z-0 before:content-[''] before:transition-all before:rounded-[40px] hover:before:left-0 hover:before:opacity-[0.3] after:absolute after:left-[-5px] after:bottom-[-5px] after:w-[105%] after:h-[120%] after:content-[''] after:rounded-[40px] after:border after:border-white after:z-50"
                      >View Work</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end elito-protfolio-area  -->

      <!-- start elito-partners-area -->
      <section class="bg-[#131313] py-[85px]">
        <h2 class="hidden">partner</h2>
        <div class="wraper">
          <div class="partners-slider owl-carousel">
            <div class="item">
              <img
                class="mx-auto grayscale"
                src="assets/images/partners/1.png"
                alt=""
              />
            </div>
            <div class="item">
              <img
                class="mx-auto grayscale"
                src="assets/images/partners/2.png"
                alt=""
              />
            </div>
            <div class="item">
              <img
                class="mx-auto grayscale"
                src="assets/images/partners/3.png"
                alt=""
              />
            </div>
            <div class="item">
              <img
                class="mx-auto grayscale"
                src="assets/images/partners/4.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>
      <!-- end elito-partners-area -->

      <?php include 'footer.php'; ?>
