<!DOCTYPE html>
<html lang="en" data-overlayscrollbars-initialize>
<head>
  <script src="./js/preload.js"></script>
  <meta charset="utf-8" />
  <meta name="description" content="My Life Story On Film" />
  <meta name="keywords" content="Share your memories, Get together, Video, Film, Family, Life Story" />
  <meta name="author" content="D.C" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Life Story On Film</title>
  <link href="./css/app.min.css" rel="stylesheet" type="text/css" />
  <link rel="manifest" href="manifest.json" />
  <link rel="apple-touch-icon" href="images/pwa-logo-small.webp" />
</head>

<body>

  <a accesskey="s" href="#skip"><span class="hidden">Skip Navigation</span></a>

  <div class="overflow-hidden">

    <div id="navbar-collapse" class="navbar-collapse has-collapsed small-nav">

      <div class="d-flex justify-content-end">

        <button aria-controls="navbar-collapse" class="slider_nav-navbar-toggler navbar-toggler navbar-toggler-navbar-collapse px-6">

          <span class="hidden">Close menu</span>

          <div>

            <div class="slider_nav-bar slider_nav-bar-1"></div>
            <div class="slider_nav-bar slider_nav-bar-2"></div>
            <div class="slider_nav-bar slider_nav-bar-3"></div>

          </div>

        </button>

      </div>

      <div class="h-100 d-flex justify-content-center align-items-center">

        <nav class="row w-100 justify-content-center justify-content-sm-around justify-content-xxl-evenly px-xl-10 pb-xl-9">

          <ul class="col-42 col-sm-20 col-lg-16 col-xxl-11 list-unstyled m-0 p-4">

            <li class="ms-2 ms-sm-4">

              <i class="fa-solid fa-paperclip"></i>

            </li>

            <li class="mt-2 pb-2">

              <ul class="list-unstyled secondary-border-top ps-2">

                <li class="mt-3">

                  <a href="./">Home</a>

                </li>

                <li>

                  <a href="./information.php">Q<span class="small">&</span>A Information</a>

                </li>

                <li>

                  <a class="active" href="./schedule.php">Schedule Consultation</a>

                </li>

              </ul>

            </li>

            <li class="mt-3">

              <ul class="list-unstyled secondary-border-top ps-2">

                <li class="mt-3">

                  <a href="tel:0456965365">

                    0456 965 365

                  </a>

                </li>

                <li>

                  <a href="mailto:eg@example.com">

                   eg@example.com

                  </a>

                </li>

              </ul>

            </li>

          </ul>

          <ul class="col-42 col-sm-16 col-xl-10 col-xxl-8 list-unstyled mb-0 mt-2 p-4">

            <li class="color-primary-2 ms-2 ms-sm-4">

              Socials

            </li>

            <li class="mt-2">

              <ul class="list-unstyled secondary-border-top d-flex flex-sm-column">

                <li class="mt-2">

                  <a class="d-block" href="#">

                    <span class="hidden">Facebook</span>

                    <i class="fa-brands fa-square-facebook p-3"></i>

                  </a>

                </li>

                <li class="mt-2 mt-md-0">

                  <a class="d-block" href="#">

                    <span class="hidden">Linkedin</span>

                    <i class="fa-brands fa-linkedin p-3"></i>

                  </a>

                </li>

              </ul>

            </li>

          </ul>

        </nav>

      </div>

    </div>

  </div>

  <header class="container-fluid small-header d-flex justify-content-between align-items-center">

    <button data-aos="fade-right" aria-controls="navbar-collapse" class="slider_nav-navbar-toggler navbar-toggler navbar-toggler-small px-6">

      <span class="hidden">Open menu</span>

      <div>

          <div class="slider_nav-bar slider_nav-bar-1"></div>
          <div class="slider_nav-bar slider_nav-bar-2"></div>
          <div class="slider_nav-bar slider_nav-bar-3"></div>

      </div>

    </button>

    <a href="./">

      <h1 class="text-end px-6 py-4 m-0">

        <span>

          My Life Story

        </span>

        <span>

          On Film

        </span>

      </h1>

    </a>

    <div class="shapes-1"></div>

  </header>

  <main>

    <div data-aos="fade-up" class="row form justify-content-center align-items-stretch mt-12 mt-md-13">

      <div class="col-39 col-xxl-32">

        <div class="row justify-content-center">

          <div class="col-48 col-xl-18 form-side position-relative overflow-hidden">

            <div class="d-flex flex-wrap justify-content-between align-items-start">

              <h2 class="p-5">

                <span class="d-block">

                  Schedule

                </span>

                <span class="d-block">

                  Consultation

                </span>

              </h2>

              <svg class="me-3 mt-4" aria-label="My Life Story On Film" viewBox="0 0 100 100" width="70" height="70">

                <defs>

                    <path

                      id="circle"
                      d="M 50, 50
                      m -37, 0
                      a 37,37 0 1,1 74,0
                      a 37,37 0 1,1 -74,0"

                    />

                </defs>

                <text class="font">

                  <textPath href="#circle">

                    Share - Your - Memories -

                  </textPath>

                </text>

              </svg>

              <p class="pb-14 ps-5 pe-9 pt-9 m-0">
              
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

              </p>

            </div>

            <div class="shapes-1"></div>

          </div>

          <div class="col-48 col-xl-30">

            <form novalidate class="row h-100">

              <label class="col-48 col-md-24 px-7 pt-5 py-md-7">

                * Name

                <span class="form-tooltip">Enter your name</span>

                <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="text" name="name" required autocomplete="on" />

              </label>

              <label class="col-48 col-md-24 px-7 pt-5 py-md-7">

                * Phone 

                <span class="form-tooltip">+###############</span>

                <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="tel" name="tel" required autocomplete="on" />

              </label>

              <label class="col-48 col-md-24 px-7 pt-5 pt-md-0 pb-md-7">

                * Email 

                <span class="form-tooltip">eg@exmaple.com</span>

                <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="email" name="email" required autocomplete="on" />

              </label>

              <label class="col-48 col-md-24 px-7 pt-5 pt-md-0 pb-md-7">

                Age

                <span class="form-tooltip">Enter your age</span>

                <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="text" name="age" />

              </label>

              <div class="row w-100">

                <div class="col-48 col-md-24 px-7 pt-5 pt-md-0 pb-md-7">

                  <label class="d-block w-100 h-100 d-flex flex-column">

                    Gender

                    <span class="form-tooltip">Choose your gender</span>

                    <div class="input-tooltip gender-tooltip h-100 d-flex align-items-center">

                      <label class="d-flex align-items-center">

                        Male

                        <input class="form-check-input ms-2 mt-0 me-0 mb-0" type="checkbox" name="male" value="male">

                      </label>

                      <label class="ms-3 d-flex align-items-center">

                        Female

                        <input class="form-check-input ms-2 mt-0 me-0 mb-0" type="checkbox" name="female" value="female">

                      </label>

                    </div>

                  </label>

                </div>

              </div>
                
              <div class="col-48 col-md-24">

                <label class="d-block w-100 px-7 pt-5 pt-md-0 pb-md-7">

                  Suburb

                  <span class="form-tooltip">Enter your suburb</span>

                  <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="text" name="suburb" />

                </label>

                <label class="d-block w-100 px-7 pt-5 pt-md-0 pb-md-7">

                  Post Code

                  <span class="form-tooltip">Enter your post code</span>

                  <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="text" name="code" />

                </label>

              </div>

              <label class="col-48 px-7 pt-5 pt-md-0 pb-7">

                Street

                <span class="form-tooltip">Enter your street</span>

                <input class="input-tooltip d-block w-100 px-3 py-1 mt-1" type="text" name="street" />

              </label>

              <p class="col-48 col-md-32 p-5 m-0 form-reply">
                
                Required Fields marked with *  

              </p>

              <div class="col-48 col-md-16 button-container d-flex justify-content-center align-items-center">

                <input class="w-100 h-100 py-7 y-md-0" type="submit" value="Send" />

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </main>

<footer class="container-fluid pb-9 pt-11 mt-12 mt-md-13">

  <div class="container-sm">

    <div class="row justify-content-around justify-content-sm-between">

      <div class="col-auto mt-7 ms-sm-2">

        <svg aria-label="My Life Story On Film" viewBox="0 0 100 100" width="70" height="70">

          <defs>

              <path

                id="circle"
                d="M 50, 50
                m -37, 0
                a 37,37 0 1,1 74,0
                a 37,37 0 1,1 -74,0"

              />

          </defs>

          <text class="font">

            <textPath href="#circle">

              My -- Life -- Story ---

            </textPath>

          </text>

        </svg>

      </div>

      <div class="col-21 mt-7">

        <hr class="mb-3">

        <div class="row justify-content-between">

          <div class="col-48">

            <ul class="list-unstyled text-sm-end text-lg-start mb-0 me-sm-2 ms-lg-2 me-lg-0 mb-9">

              <li class="mb-1">

                <a href="./">Home</a>

              </li>

              <li>

                <a href="./information.php">Q<span class="small">&</span>A Information</a>

              </li>

              <li>

                <a class="active" href="./schedule.php">Schedule Consultation</a>

              </li>

            </ul>

          </div>

        </div>

      </div>

    </div>

    <div class="row justify-content-center justify-content-sm-between">

      <div class="col-39 col-sm-17 mb-6 mb-sm-0">

        <i class="fa-solid fa-location-dot"></i>

        <hr class="my-3">

        <address>

          <span> 1 More Av Warwich </span> <span> 6088 </span> <span> WA PERTH </span>

        </address>

      </div>

      <div class="col-39 col-sm-21">

        <div class="row justify-content-center justify-content-sm-between">

          <div class="col-48 col-lg-23">

            <hr class="my-3">

            <ul class="list-unstyled text-sm-end text-lg-start mb-0 mb-6 mb-sm-0 me-sm-2 ms-lg-2 me-lg-0">

              <li>

                <a class="d-block" href="tel:0456965365">

                  0456 965 365

                </a>

              </li>

              <li>

                <a class="d-block" href="mailto:eg@example.com">

                  eg@example.com

                </a>

              </li>

            </ul>

          </div>

          <div class="col-48 col-lg-13">

            <hr class="mt-3 mb-1">

            <ul class="list-unstyled d-flex justify-content-sm-end justify-content-lg-start mb-0 me-sm-2 ms-lg-2 me-lg-0">

              <li>

                <a href="#">

                  <span class="hidden">Facebook</span>

                  <i class="fa-brands fa-square-facebook p-3"></i>

                </a>

              </li>

              <li>

                <a  href="#">

                  <span class="hidden">Linkedin</span>

                  <i class="fa-brands fa-linkedin p-3"></i>

                </a>

              </li>

            </ul>

          </div>

        </div>

      </div>

      <div class="col-39 col-sm-48 d-flex justify-content-center align-items-center mt-6 mt-sm-10">

        <p><i class="fa-regular fa-copyright" ></i>&nbsp;<?php echo date("Y"); ?></p>

      </div>

    </div>

  </div>

<footer>

<script src="./js/app.min.js" defer></script>

</body>

</html>
