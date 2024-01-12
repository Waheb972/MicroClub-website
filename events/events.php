<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="../test/tes.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="event.css" />
  </head>
  <body>
    <main>
      <nav class="navbar">
      <a href="../home/main.html">  <img
        class="logo"
        src="../events/images/Logo-MC-Blue-nobackground_2.png"
        alt=""
      /></a>
        <ul class="menu-list">
          <li class="option"><a href="../home/main.html">Home</a></li>
          <li class="option"><a href="../about/about.html">About</a></li>
          <li class="option active">
            <a href="../events/pepsi.html">Events</a>
          </li>
          <li class="option">
            <a href="../inscription/inscppage.php">demande</a>
          </li>
          <li class="option"><a href="../contact/contact.php">Contact</a></li>
        </ul>
      </nav>

      <div class="main-container">
        <div class="text">
          <h1>Ready For an <strong> Adventure?</strong></h1>
          <p>
            Join us on some exciting
            <strong class="event-text"> events</strong> throught the year with
            amazing opportunities and top notch training from the best of the
            best with our hosts and genius students !
          </p>
          <button class="explore">Explore Our Events</button>
        </div>
        <div class="mainImage">
          <img src="../webp/main.9dda5794.svg" alt="" />
        </div>
      </div>
    </main>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      <?php
               $host = 'localhost';
               $dbUsername = 'root';
        $dbPassword = 'Stophacking22_';
        $dbName = 'projetweb';

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName,'3306');
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          
          $sql = "SELECT * FROM events";
          $result = $conn->query($sql);
          
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              ?>
              <div class="swiper-slide">
              <div class="card" id='i<?=$row["id"]?>'>
                <div class="circle"></div>
                <div class="content">
                  <h2><?=$row["title"]?></h2>
                  <p>
                  <?=$row["content"]?>
                  </p>
                </div>
                <img src="./images/<?=$row["image"]?>" alt="" />
              </div>
            </div>
            <?php
            
            
          }
        } else {
          echo "0 results";
        }
        $conn->close();?>
    
          <!--

          -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

    <footer class="foot">
      <div class="griding">
        <div class="gridcomp grid1">
          <ul class="flexi_1">
            <li class="faq"><a href="#">FAQs</a></li>
            <li class="contact"><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="gridcomp grid2">
          <ul class="flexi_2">
            <li class="policy"><a href="#">Privacy Policy</a></li>
            <li class="kit"><a href="#">Press Kit</a></li>
          </ul>
        </div>

        <div class="gridcomp grid3">
          <ul class="flexi_3">
            <li class="facebook">
              <a href="https://www.facebook.com/Micro.Club.USTHB/" target="_blank">
                <svg
                  class="social social1"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path
                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"
                  />
                </svg>
              </a>
            </li>
            <li class="disco">
              <a href="https://discord.gg/d55mFTYy" target="_blank">
                <svg 
                  class=""
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 640 512"
                >
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path
                    d="M524.531,69.836a1.5,1.5,0,0,0-.764-.7A485.065,485.065,0,0,0,404.081,32.03a1.816,1.816,0,0,0-1.923.91,337.461,337.461,0,0,0-14.9,30.6,447.848,447.848,0,0,0-134.426,0,309.541,309.541,0,0,0-15.135-30.6,1.89,1.89,0,0,0-1.924-.91A483.689,483.689,0,0,0,116.085,69.137a1.712,1.712,0,0,0-.788.676C39.068,183.651,18.186,294.69,28.43,404.354a2.016,2.016,0,0,0,.765,1.375A487.666,487.666,0,0,0,176.02,479.918a1.9,1.9,0,0,0,2.063-.676A348.2,348.2,0,0,0,208.12,430.4a1.86,1.86,0,0,0-1.019-2.588,321.173,321.173,0,0,1-45.868-21.853,1.885,1.885,0,0,1-.185-3.126c3.082-2.309,6.166-4.711,9.109-7.137a1.819,1.819,0,0,1,1.9-.256c96.229,43.917,200.41,43.917,295.5,0a1.812,1.812,0,0,1,1.924.233c2.944,2.426,6.027,4.851,9.132,7.16a1.884,1.884,0,0,1-.162,3.126,301.407,301.407,0,0,1-45.89,21.83,1.875,1.875,0,0,0-1,2.611,391.055,391.055,0,0,0,30.014,48.815,1.864,1.864,0,0,0,2.063.7A486.048,486.048,0,0,0,610.7,405.729a1.882,1.882,0,0,0,.765-1.352C623.729,277.594,590.933,167.465,524.531,69.836ZM222.491,337.58c-28.972,0-52.844-26.587-52.844-59.239S193.056,219.1,222.491,219.1c29.665,0,53.306,26.82,52.843,59.239C275.334,310.993,251.924,337.58,222.491,337.58Zm195.38,0c-28.971,0-52.843-26.587-52.843-59.239S388.437,219.1,417.871,219.1c29.667,0,53.307,26.82,52.844,59.239C470.715,310.993,447.538,337.58,417.871,337.58Z"
                  />
                </svg>
              </a>
            </li>
            <li class="insta">
              <a href="https://www.instagram.com/microclub_usthb/" target="_blank">
                <svg
                  class="social social4"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                  <path
                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="events.js"></script>

    <!-- Initialize Swiper -->

    <script>
      var swiper = new Swiper(".mySwiper", {
        autoplay: {
          delay: 10000,
          disableOnInteraction: false,
        },

        spaceBetween: 40,
        freeMode: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          0: { slidesPerView: 1 },

          600: {
            slidesPerView: 2,
          },
          1200: {
            slidesPerView: 3,
          },
        },
      });
    </script>
  </body>
</html>