<?php

  // view logic

  $array = [
    [
      "title" => "CHILDHOOD & FAMILY LIFE",
      "question" => ["Describe the home you grew up in",
        "What were you like as a child",
        "Do you have memories of what your parents said you were like as a baby",
        "What was a typical day like in your family when you were little",
        "What would you say makes your family unique from other families",
        "What did you do when you were bored as a child",
        "If you had to create a family motto, what would it be",
        "How did you feel about school, and what type of student were you",
        "Did you have a best friend, and if so, how did that relationship play out over the course of your life",
        "What do you want to be when yougrow up",
        "What were you like as a teenager",
      ],
    ],
    [
      "title" => "FUN & GAMES",
      "question" => ["What songs have held special meaning to you over the years",
        "Who was the trickster in your family",
        "Do you have any funny stories from your past",
        "What's your favorite family story to recount around the dinner table",
        "Did you play sports growing up, and if so, what were those experiences like",
        "What was the main form of entertainment in your family when you were a kid",
        "Describe what family vacations were like, and if there were any destinations that you traveled to often",
        "Tell me about a time you were incredibly embarrassed",
      ],
    ],
    [
      "title" => "TRADITIONS",
      "question" => ["What holiday did you most look forward to while you were growing up",
        "What were some of the traditions your family observed related to that holiday",
        "Do you have any family traditions that have been passed down for generations in your family",
        "Does religion hold a strong place in your family",
        "What is the most memorable gift you have ever received, or given",
        "Are there any specific family heirlooms you inherited",
        "How are/were birthdays celebrated throughout your life",
        "In what ways have you/your family kept your culture alive",
      ],
    ],
    [
      "title" => "DECISIONS & LESSONS",
      "question" => ["What is the best decision you ever made",
        "What is a memorable time you have failed, and how did you recover from that experience",
        "What lessons(s) do you most recall learning from your parents or grandparents",
        "Did you have a favorite teacher or another role model who had a major impact on your life",
        "Can you share about any hardships",
        "Tell me about a significant time you said no",
        "Do you have any regrets",
      ],
    ],
    [
      "title" => "LIFE TRANSITION & MILESTONES",
      "question" => ["Tell me about your experience, deciding where to go to college, pursuing your career, getting married, getting drafted into the war, serving in the military, becoming a mother/father/grandparent, falling in love for the first time",
        "Tell me about your first job",
        "Did anyone ever throw you a surprise party",
        "How did you feel on your wedding day. What memories of that day stand out for you",
        "What can you tell me about the first time you experienced loss. Who died. Did you go to the funeral. How old were you. How did it effect your outlook on life",
      ],
    ],
    [
      "title" => "FOOD MEMORIES",
      "question" => ["What meals would be in your family's cookbook—the foods that make you feel nostalgic for your childhood or for home",
        "What are your oldest recipes and where did they come from",
        "What smells transport you to this day right back to your childhood",
        "Who are/were the best cooks in the family",
        "What family dishes would you miss the most if you never tasted them again",
      ],
    ],
    [
      "title" => "BIG-PICTURE",
      "question" => ["What values would you like to pass down to the younger generations of your family",
        "How did you learn resilience",
        "What would you tell your 20-year-old self",
        "Are there any questions you wish you had asked your own parents",
      ],
    ],
  ];

?>

<!DOCTYPE html>
<html lang="en" data-overlayscrollbars-initialize>
<head>
  <script src="./js/preload.js"></script>
  <meta charset="utf-8" />
  <meta name="description" content="My Life Story On Film" />
  <meta name="keywords" content="Share your memories, Get together, Video, Film, Family, Life Story, Exchange stories, Reminisce" />
  <meta name="author" content="D.C" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Life Story On Film - Q&A Information</title>
  <link href="./css/app.min.css" rel="stylesheet" type="text/css" />
  <link rel="manifest" href="manifest.json" />
  <link rel="apple-touch-icon" href="images/pwa-logo-small.webp" />
</head>

<body>

  <a accesskey="s" href="#skip"><span class="hidden">Skip Navigation</span></a>

  <div class="overflow-hidden">

    <div id="navbar-collapse" class="navbar-collapse has-collapsed small-nav">

      <div class="d-flex justify-content-end">

        <button aria-controls="navbar-collapse" class="slider_nav-navbar-toggler navbar-toggler navbar-toggler-navbar-collapse p-5">

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

              <ul class="list-unstyled bravo-border-top ps-2">

                <li class="mt-3">

                  <a href="./">Home</a>

                </li>

                <li class="mb-1">

                  <a class="active" href="./information.php">Q<span class="small">&</span>A Information</a>

                </li>

                <li>

                  <a href="./schedule.php">Schedule Consultation</a>

                </li>

              </ul>

            </li>

            <li class="mt-3">

              <ul class="list-unstyled bravo-border-top ps-2">

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

            <li class="color-alpha-2 ms-2 ms-sm-4">

              Socials

            </li>

            <li class="mt-2">

              <ul class="list-unstyled bravo-border-top d-flex flex-sm-column">

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

  <header class="container-fluid small-header bg-alpha-1">

    <div class="d-flex flex-wrap justify-content-between align-items-start">

      <button data-aos="fade-right" aria-controls="navbar-collapse" class="slider_nav-navbar-toggler navbar-toggler navbar-toggler-small p-5">

        <span class="hidden">Open menu</span>

        <div>

            <div class="slider_nav-bar slider_nav-bar-1"></div>
            <div class="slider_nav-bar slider_nav-bar-2"></div>
            <div class="slider_nav-bar slider_nav-bar-3"></div>

        </div>

      </button>

      <h1 class="hidden">

        Q&A Information

      </h1>

      <a href="./">

        <h2 id="skip" class="text-end px-8 py-5 m-0">

          <span>

            My Life Story

          </span>

          <span>

            On Film

          </span>

        </h2>

      </a>

    </div>

    <div class="row justify-content-end">

      <div class="col-41 col-lg-31 col-xxl-36 small-header-bg order-2 order-lg-1 px-8 pb-9 pt-3 py-lg-5 text-end text-lg-start">

        <p class="m-0 p-left">

          SHARE YOUR MEMORIES

        </p>

      </div>

      <div class="col-41 col-lg-17 col-xxl-12 bg-echo small-header-radius order-1 order-lg-2 px-8 pt-8 py-lg-5">

        <p class="m-0 text-end text-lg-center p-right">

          Exchange stories

        </p>

      </div>

    </div>

    <div class="shapes-1"></div>

  </header>

  <main class="py-11 py-md-13">

    <?php

      if (count($array) > 0) {

        ?>

          <div class="row q-a justify-content-center mb-8 mb-md-11">

            <div class="col-39 col-sm-41 col-xxl-36">

              <div class="row color-bravo justify-content-center justify-content-sm-start">

                <div class="col-48 col-sm-43 col-md-39 col-xxl-35">

                  <h2 class="mb-0 ms-1">

                    <span class="heading-inner bg-alpha-1 me-1 mb-1"></span>

                    Case Questions

                  </h2>

                  <p class=" mb-6 mt-7 my-sm-9 px-3 sub-heading">

                    As part of our process, we ask thoughtful, guided questions to provide depth and context to your film.
                    These questions are designed to help you share your memories, reflect on meaningful moments, and exchange stories that bring your life story to life.

                  <p>

                </div>

                <?php

                  foreach ($array as $index=>$row) {

                    $even = "ps-sm-7 ps-lg-9";

                    if ($index % 2 === 0) {

                      $even = "pe-sm-7 pe-lg-9";
                    }

                    ?>

                      <div class="col-48 col-sm-24 <?php echo $even; ?>">

                        <div class="row justify-content-center justify-content-sm-start mb-8 mb-sm-10">

                          <div class="col-48 col-xl-32">

                            <hr class="mb-7 alpha-border-top">

                          </div>

                          <div class="col-48 mb-3">

                            <h2 class="mb-2 ms-1">

                              <span class="heading-inner bg-alpha-1 me-1 mb-1"></span>

                              <?php echo $row["title"];  ?>

                            </h2>

                          </div>

                          <?php

                            foreach ($row["question"] as $row) {

                              ?>

                                <div class="col-43 col-sm-48">

                                  <div class="d-flex mt-3">

                                    <div>

                                      <i class="fa-solid fa-circle-question color-echo me-5 ms-2"></i>

                                    </div>

                                    <div class="flex-fill">

                                      <p class="m-0">

                                        <?php echo $row; ?>

                                      </p>

                                    </div>

                                  </div>

                                </div>

                              <?php

                            }

                          ?>

                        </div>

                      </div>

                    <?php

                  }

                ?>

              </div>

            </div>

          </div>

        <?php

      }

    ?>

    <div data-aos="fade-up" class="container-sm cta">

      <a href="./schedule.php">

        <div class="row justify-content-center">

          <div class="col-39 col-sm-48 bg-echo">

            <div class="cta-main bg-alpha-1 pb-9 pt-8 py-md-11 pt-lg-12">

              <div class="row justify-content-center">

                  <div class="col-39">

                    <p class="m-0">

                      Scheduling a consultation is the first step toward creating a meaningful keepsake where you can share your memories, exchange stories, and reminisce with loved ones.
                      Through film, this is your chance to bring your family together and preserve your life story in a heartfelt, lasting way.

                    </p>

                  </div>

              </div>

            </div>

          </div>

          <div class="col-39 col-sm-48">

            <div class="row bg-alpha-1">

                <div class="col-39 col-lg-19 bg-echo cta-button-container d-flex align-items-center justify-content-md-center py-9 px-6 ps-md-0 pe-md-9 py-lg-7">

                  <h2>

                    Schedule Consultation

                  </h2>

                </div>

            </div>

          </div>

        </div>

      </a>

    </div>

  </main>

  <footer class="container-fluid pb-9 pt-11">

    <div class="container-sm">

      <div class="row justify-content-around justify-content-sm-between">

        <div class="col-auto mt-7 ms-sm-2">

          <a href="./">

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

                  My -- Life -- Story --

                </textPath>

              </text>

            </svg>

          </a>

        </div>

        <div class="col-21 mt-7">

          <hr class="mb-3">

          <div class="row justify-content-between">

            <div class="col-48">

              <ul class="list-unstyled text-sm-end text-lg-start mb-0 me-sm-2 ms-lg-2 me-lg-0 mb-9">

                <li>

                  <a href="./">Home</a>

                </li>

                <li class="mb-1">

                  <a class="active" href="./information.php">Q<span class="small">&</span>A Information</a>

                </li>

                <li>

                  <a href="./schedule.php">Schedule Consultation</a>

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

  </footer>

  <script src="./js/app.min.js" defer></script>

</body>

</html>
