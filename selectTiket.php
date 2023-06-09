<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TIKSER</title>
    <link rel="shortcut icon" href="Assets/logo-tikser.svg" type="image/svg+xml">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <script defer src="script.js"></script>
  </head>
  <body id="page-top">

    <!-- Load Screen -->
    <!-- <div class="spinner-wrapper">
      <img src="Assets/logo-tikser.svg" alt="logo">
      <div class="spinner-border text-warning" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div> -->

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

    <!-- Select Ticket -->
    <section class="SecTiket">
    <div class="NamaKonser">
        <div class="gambar">
        <img src="Assets/coldplay-tiket.svg" alt="">
        </div>
        <div class="keterangan">
        <h2>Coldplay</h2>
        <h3>Gelora Bung Karno Stadium, Jakarta, Indonesia</h3>
        <h4>Kamis, 15 November 2023</h4>
        <h5><i>Tanggal & waktu akan dikonfirmasi</i>
        </div>
    </div>
    <div class="Information">
        <div class="Venue">
            <img src="Assets/Venue.svg" alt="">
        </div>

        <div class="kategori">
          <div class="radiant mb-3">
              <img src="Assets/cat/1.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Radiant</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>21 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 11.000.000</b></p>
                <button>Pilih</button>
              </div>

            </div>
          <div class="immortal mb-3">
          <img src="Assets/cat/2.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Immortal</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>24 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 10.500.000</b></p>
                <button>Pilih</button>
              </div>

          </div>

          <div class="ascendant mb-3">
          <img src="Assets/cat/3.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Ascendant</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>11 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 10.000.000</b></p>
                <button>Pilih</button>
              </div>
          </div>

          <div class="diamond mb-3">
          <img src="Assets/cat/4.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Diamond</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>8 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 9.000.000</b></p>
                <button>Pilih</button>
              </div>
            
          </div>

          <div class="platinum mb-3">
          <img src="Assets/cat/5.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Platinum</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>5 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 8.000.000</b></p>
                <button>Pilih</button>
              </div>
          </div>

          <div class="gold mb-3">
          <img src="Assets/cat/6.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Gold</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>6 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 7.000.000</b></p>
                <button>Pilih</button>
              </div>
          </div>

          <div class="silver mb-3">
          <img src="Assets/cat/7.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Silver</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>4 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 5.000.000</b></p>
                <button>Pilih</button>
              </div>
          </div>
          <div class="bronze mb-3">
          <img src="Assets/cat/8.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Bronze</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>3 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 3.000.000</b></p>
                <button>Pilih</button>
              </div>
          </div>
          

          <div class="iron mb-3">
          <img src="Assets/cat/9.png" alt="">
              
              <div class="keteranganTiket">
                  <p style="font-size: 30px"><b>Category: Iron</b></p>
                  <p style="margin-top: -25px; font-size: 20px"><b>1 Tiket Tersedia</b></p>
              </div>

              <div class="hargaTiket">
                <p style="justify-content: center; font-size: 15px; text-align: center;"><b>Rp. 1.000.000</b></p>
                <button>Pilih</button>
              </div>
          </div>
          
          

        </div>

    </div>
    </section>

    <section class="pembelian" >
      <div class="catatan">
        <img src="Assets/catatan.png" alt="">
      </div>

      <div class="tiket">
        <p style="color:white; font-size: 50px"  ><b>Jumlah Tiket</b></p>
        <p style="color:white; font-size: 40px"  ><b>Category: Radiant</b></p>
      
      
      </div>

      <div class="jumlah">
      <ion-icon size="large" name="plus"></ion-icon>
          <p>Jumlah Tiket: 1</p>
          <button><b>Lanjutkan</b></button>

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

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  </body>
</html>