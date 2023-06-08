<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIKSER</title>
    <link rel="shortcut icon" href="Assets/logo-tikser.svg" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script>
  </head>
  <body id="page-top">

    <!-- Load Screen -->
    <div class="spinner-wrapper">
      <img src="Assets/logo-tikser.svg" alt="logo">
      <div class="spinner-border text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <!-- Navbar -->
  <section class="SecNavbar">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="homepage.php">
          <img src="Assets/logo-tikser.svg" class="img-fluid" width="150px" height="60.15px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto p-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">MY TICKET</a>
            </li>
            <li class="nav-item">
              <form class="d-flex" role="search" href="#">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit" >Search</button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
          <ul class="navbar-nav me-4">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                  <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
                  <path d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                </svg>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">LOGIN</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">HOME</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">MY TICKET</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">NEWS</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">CONTACT</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

    <!-- Home -->

    <!-- Carousel -->
  <section class="SecCarousel">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Assets/coldplay.png" class="d-block w-100" alt="coldplay">
          <div class="carousel-caption d-none d-md-block ">
          <button type="button" class="btn btn-warning btn-outline-dark">BUY TICKET</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Assets/radwimps.png" class="d-block w-100" alt="radwimps">
          <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn btn-warning btn-outline-dark">BUY TICKET</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Assets/the-weekend.png" class="d-block w-100" alt="weekend">
          <div class="carousel-caption d-none d-md-block">
          <button type="button" class="btn btn-warning btn-outline-dark">BUY TICKET</button>
          </div>
        </div>
        <div class="event">
          <h1>POPULAR EVENT</h1>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>


    <!-- List Konser -->
  <section class="SecKonser">
    <div class="judulKonser">
      <h1>LIST EVENT</h1>
    </div>
    <!-- caraousel -->
      <div id="carouselExample" class="carousel carousel-dark slide d-none d-sm-block">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="cards-wrapper">
              <!-- Kartu Pertama -->
              <div class="card">
                <div class="img-wrapper">  
                  <img src="Assets/babymetal.png" alt="...">
                </div>
                <div class="card-body">
                  <h5>BABYMETAL</h5>
                  <p class="card-text">26 May 2023</p>
                  <a href="#" class="btn btn-warning">BUY TICKET</a>
                </div>
              </div>
              <!-- Kartu Kedua -->
              <div class="card">
                <div class="img-wrapper">  
                  <img src="Assets/the-weekend.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">THE WEEKND</h5>
                  <p class="card-text">17 December 2023</p>
                  <a href="#" class="btn btn-warning">BUY TICKET</a>
                </div>
              </div>
              <!-- Kartu Ketiga -->
              <div class="card">
                <div class="img-wrapper">  
                  <img src="Assets/radwimps.png" alt="...">
                </div>
                  <div class="card-body">
                    <h5 class="card-title">RADWIMPS</h5>
                    <p class="card-text">30 July 2023</p>
                    <a href="#" class="btn btn-warning">BUY TICKET</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="cards-wrapper">
              <!-- Kartu Keempat -->
              <div class="card">
                <div class="img-wrapper">  
                  <img src="Assets/coldplay.png" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">COLDPLAY</h5>
                  <p class="card-text">15 November 2023</p>
                  <a href="#" class="btn btn-warning">BUY TICKET</a>
                </div>
              </div>
              <!-- Kartu Kelima -->
              <div class="card">
                <div class="img-wrapper">  
                  <img src="Assets/Dewa19.png"  alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title">DEWA 19</h5>
                  <p class="card-text">27 May 2023</p>
                  <a href="#" class="btn btn-warning">BUY TICKET</a>
                </div>
              </div>
              <!-- Kartu Keenam -->
              <div class="card">
                <div class="img-wrapper">  
                  <img src="Assets/WTF.png" alt="...">
                </div>
                  <div class="card-body">
                    <h5 class="card-title">WE THE FEST</h5>
                    <p class="card-text">21-23 July 2023</p>
                    <a href="#" class="btn btn-warning">BUY TICKET</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- caraousel -->
  </section>

    <!-- News -->
  <section class="SecNews">
    <div class="headlineNews">
      <h1>LATEST NEWS</h1>
    </div>
    <div id="carouselExampleCaptionsNews" class="carousel slide">
      <!-- <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div> -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Assets/news1.png" alt="...">
          <div class="carousel-caption">
            <h5>Dicky Ardian, May 27 2023</h5>
            <h1>Chris Martin Buka Suara Soal Desakan Batalkan Konser Coldplay</h1>
            <p>Jakarta - The fans felt joy after it was confirmed that Coldplay would be holding their concert in Jakarta. 
              However, there were also those who urged that the concert be.......</p>
            <a href="#">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Assets/news2.png" alt="...">
          <div class="carousel-caption">
            <h5>Dicky Ardian, May 27 2023</h5>
            <h1>Konser di Indonesia, BABYMETAL Sukses Membuat Venue Jadi Lautan Hitam Oleh Para Penonton</h1>
            <p>Konser BABYMETAL di Jakarta sukses membuat ICE BSD menjadi lautan hitam.......</p>
            <a href="#">Baca Selengkapnya</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Assets/news3.png" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Dicky Ardian, May 27 2023</h5>
            <h1>The Strokes, The 1975, hingga The Kid Laroi akan Tampil di We The Fest 2023</h1>
            <p>We The Fest (WTF) 2023 Announces Exciting Lineup: The Strokes, The 1975, Lewis Capaldi, and More to Headline! Get Ready for the Hottest Music Festival in Jakarta this Summer.......</p>
            <a href="#">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

    <!-- Information -->
  <section class="SecInformation">
    <div class="rectangle">
      <h1>Don’t Miss Updates From Tikser</h1>
      <h3>We will send you our updates, news, announcement, and more to your email address by fill the form below</h3>
      <div class="email">
        <input id="emailInput" type="text" placeholder="Enter your mail">
        <button>SEND</button>
      </div>
    </div>
  </section>

    <!-- Footer -->
    <section class="SecFooter">
      <footer class="Footer">
        <div class="Container1">
          <div class="Satu">
            <ul>
              <li>
                <img src="Assets/logo-tikser.svg" class="img-fluid" width="150px" height="60.15px" alt="logo">
              </li>
              <li class="WA">
                <p>WhatsApp</p>
                <p>0821 1234 5678<p>
              </li>
              <li class="Email">
                <p>Email<p>
                <p>tikser@gmail.com<p>
              </li>
            </ul>
          </div>
          <div class="Dua">
            <ul>
             <li>
              <h3>Company</h3>
             </li>
             <li>
              <a href="#">Partner</a> 
             </li> 
            </ul>
          </div>
          <div class="Tiga">
            <ul>
             <li>
              <h3>Support</h3>
             </li>
             <li>
              <a href="#">Help Center</a>
             </li>
             <li>
              <a href="#">About Us</a>
             </li> 
             <li>
              <a href="#">Terms & Condition</a> 
             </li>
             <li>
              <a href="#">Privacy Policy</a>
             </li>
            </ul>
          </div>
          <div class="Empat">
            <ul>
             <li>
             <h3>Get TIKSER app</h3>  
             </li>
             <li>
             <img src="Assets/GooglePlay.svg" class="img-fluid" width="150px" height="60.15px" alt="logo">
             </li>
             <li>
             <img src="Assets/AppStore.svg" class="img-fluid" width="150px" height="60.15px" alt="logo">
             </li> 
            </ul>
          </div>
        </div>
        <div class="Container2">
          <div class="Partner">
            
            <h3>Partner</h3>
            <div class="sponsor">
              <img src="Assets/BCA-TESLA.svg" width="350px" height="60.15px" alt="">
              <img src="Assets/Wekidi-Modify.svg" width="150px" height="60.15px" alt="">
            </div>
            
          </div>
          <div class="FollowUS">
            <h3>Follow US</h3>
            <div class="sosmed">
              <a href="#"><img src="Assets/facebook.png"  alt=""></a>
              <a href="#"><img src="Assets/twitter.png"  alt=""></a>
              <a href="#"><img src="Assets/instagram.png"  alt=""></a>
              <a href="#"><img src="Assets/youtube.png"  alt=""></a>
            </div>
          </div>
        </div>
        <div class="copyright">
          <img src="Assets/logo-tikser.svg" width="150px" height="60.15px" alt="">
          <h3>© 2011-2023 All Rights Reserved.</h3>
        </div>
      </footer>
    </section>
</body>
</html>