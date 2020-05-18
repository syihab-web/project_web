<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{!! asset('assets/css/home.css')!!}">
</head>
<body>
  
    <div class="portofolio">
        <header>
          <nav>
            <h3 class="logo">The Covid Project</h3>
            <svg
              class="menu"
              width="43"
              height="23"
              viewBox="0 0 43 23"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <line y1="1.5" x2="43" y2="1.5" stroke="white" stroke-width="3" />
              <line y1="11.5" x2="28" y2="11.5" stroke="white" stroke-width="3" />
              <line y1="21.5" x2="16" y2="21.5" stroke="white" stroke-width="3" />
            </svg>
            <div class="nav-open">
              <div class="contact">
                <h3>Our Team</h3>
                <p>Fajar Sidiq Arrizal <br>
                  Hanif Abyan Ayyasyi <br>
                  Muhammad Syihabudin Al-Khatami</p>
              </div>
              <div class="social">
                <h3>Social</h3>
                <div class="social-links">
                  <img src="./img/Facebook.svg" alt="facebook" />
                  <img src="./img/Twitter.svg" alt="facebook" />
                  <img src="./img/Instagram.svg" alt="facebook" />
                </div>
              </div>
            </div>
          </nav>
          <main>
            <section class="page">
              <div class="details">
                <h1>Pandemic</h1>
                <h2>The History</h2>
                <p>14 Century <br> 21 Century</p>
              </div>
              <div class="hero">
                <a href="{{ url('/pandemic') }}">
                  <img
                    class="model-left"
                    src="./img/pandemic-left.png"
                    alt="model"
                  />
                  <img
                    class="model-right"
                    src="./img/pandemic-right.png"
                    alt="model"
                  />
                </a>
              </div>
            </section>
            <section class="page infect">
              <div class="details">
                <h1>Infected</h1>
                <h2>People who <br> infected</h2>
                <p>2020 - 20??</p>
              </div>
              <div class="hero">
                <a href="{{ url('/infected') }}">
                  <img class="model-left" src="./img/total_confirmed-left.png" alt="model" />
                  <img
                    class="model-right"
                    src="./img/total_confirmed-right.png"
                    alt="model"
                  />
                </a>
              </div>
            </section>
            <section class="page defend">
              <div class="details">
                <h1>Defend</h1>
                <h2>Avoid the Virus</h2>
                <p></p>
              </div>
              <div class="hero">
                <a href="{{ url('/defend') }}">
                  <img class="model-left" src="./img/corona-protect-left.png" alt="model" />
                  <img
                    class="model-right"
                    src="./img/corona-protect-right.png"
                    alt="model"
                  />
                </a>
              </div>
            </section>
            <div class="pages">
              <div class="page-1">
                <h3>Pandemic</h3>
                <svg
                  class="slide active"
                  width="12"
                  height="12"
                  viewBox="0 0 12 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="6" cy="6" r="6" fill="white" />
                </svg>
              </div>
              <div class="page-2">
                <h3>Infected</h3>
                <svg
                  class="slide "
                  width="12"
                  height="12"
                  viewBox="0 0 12 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="6" cy="6" r="6" fill="white" />
                </svg>
              </div>
              <div class="page-3">
                <h3>Defend</h3>
                <svg
                  class="slide"
                  width="12"
                  height="12"
                  viewBox="0 0 12 12"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle cx="6" cy="6" r="6" fill="white" />
                </svg>
              </div>
            </div>
          </main>
        </header>
      </div>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
        integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U="
        crossorigin="anonymous"
      ></script>
      <script
        src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
        integrity="sha256-fIkQKQryItPqpaWZbtwG25Jp2p5ujqo/NwJrfqAB+Qk="
        crossorigin="anonymous"
      ></script>
      <script src="{!! asset('assets/js/index.js') !!}"></script>
</body>
</html>


