<?php
session_start();
require "config.php";
$queryKategori = mysqli_query($conn, "SELECT * FROM `jenistiket` ORDER BY `jenistiket`.`hargaTiket` DESC");
$tampilKategori = mysqli_fetch_array($queryKategori);


$artistName = $_GET['name'];
if (isset($artistName)) {
  $queryArtis = mysqli_query($conn, "SELECT * FROM artis WHERE nama = '$artistName' ");
  $tampilArtis = mysqli_fetch_array($queryArtis);
  if ($artistName == 'Coldplay') {
    $noArtis = 21134;
    $queryKonser = mysqli_query($conn, "SELECT * FROM konser WHERE noartis = $noArtis");
    $tampilKonser = mysqli_fetch_array($queryKonser);
  } elseif ($artistName == 'Radwimps') {
    $noArtis = 21135;
    $queryKonser = mysqli_query($conn, "SELECT * FROM konser WHERE noartis = $noArtis");
    $tampilKonser = mysqli_fetch_array($queryKonser);
  } elseif ($artistName == 'The Weeknd') {
    $noArtis = 21136;
    $queryKonser = mysqli_query($conn, "SELECT * FROM konser WHERE noartis = $noArtis");
    $tampilKonser = mysqli_fetch_array($queryKonser);
  }
}


if (isset($_POST['konfirmasi'])) {
  $category = $_POST['kategori'];
  $jumlah_tiket = $_POST['jumlah_tiket'];
  $query = "INSERT INTO select_tiket (category, jumlahTiket) VALUES ('$category', '$jumlah_tiket')";
  mysqli_query($conn, $query);
  header("Location: myTiket.php?name=$artistName");
}

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TIKSER</title>
  <link rel="shortcut icon" href="Assets/logo-tikser.svg" type="image/svg+xml">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto p-2">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="homepage.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="myTiket.php">MY TICKET</a>
            </li>
            <li class="nav-item">
              <form class="d-flex" role="search" href="#">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning" type="submit">Search</button>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newsPage.php">NEWS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CONTACT</a>
            </li>
          </ul>
          <ul class="navbar-nav me-4">
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-menu-button-wide" viewBox="0 0 16 16">
                  <path
                    d="M0 1.5A1.5 1.5 0 0 1 1.5 0h13A1.5 1.5 0 0 1 16 1.5v2A1.5 1.5 0 0 1 14.5 5h-13A1.5 1.5 0 0 1 0 3.5v-2zM1.5 1a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5h-13z" />
                  <path
                    d="M2 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm10.823.323-.396-.396A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z" />
                </svg>
              </a>
              <ul class="dropdown-menu">
                <?php
                if (isset($_SESSION['login'])) {
                  ?>
                  <li class="dropdown-item">Selamat Datang
                    <?php echo ucwords($_SESSION['nama']); ?>!
                  </li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="homePage.php">HOME</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="myTiket.php">MY TICKET</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="newsPage.php">NEWS</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">CONTACT</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
                  <?php
                } else {
                  ?>
                  <li><a class="dropdown-item" href="loginPage.php">LOGIN</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="homepage.php">HOME</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="myTiket.php">MY TICKET</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="newsPage.php">NEWS</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">CONTACT</a></li>
                  <?php
                }
                ?>
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
        <img src="<?php echo $tampilKonser['image']; ?>" alt="">
      </div>
      <div class="keterangan">
        <h2>
          <?php echo $tampilArtis['nama']; ?>
        </h2>
        <h3>
          <?php echo $tampilKonser['lokasi']; ?>
        </h3>
        <h4>
          <?php echo $tampilKonser['tanggal']; ?>
        </h4>
        <h5><i>Tanggal & waktu akan dikonfirmasi</i>
      </div>
    </div>
    <div class="Information">
      <div class="Venue">
        <img src="Assets/Venue.svg" alt="">
      </div>
      <div class="kategori">
        <?php
        $queryKategori = mysqli_query($conn, "SELECT * FROM `jenistiket` ORDER BY `jenistiket`.`hargaTiket` DESC");
        while ($tampilKategori = mysqli_fetch_array($queryKategori)) {
          ?>
          <div class="radiant mb-3">
            <img src="<?php echo $tampilKategori['background']; ?>" alt=""
              style="width: 531px; height: 147px; border-radius: 25px;">
            <div class="content">
              <img src="<?php echo $tampilKategori['denahLokasi']; ?>" alt="" style="margin-left: 30px;">
              <div class="keteranganTiket" style="margin-left: 190px; margin-top: 15px;">
                <p style="font-size: 30px">
                  <b>
                    <?php echo $tampilKategori['category']; ?>
                  </b>
                </p>
                <p style="margin-top: -25px; font-size: 20px"><b>
                    <?php echo $tampilKategori['tiketTersedia']; ?>
                  </b></p>
              </div>
              <div class="hargaTiket" style="margin-left: 320px; margin-top: -50px;">
                <p style="justify-content: center; font-size: 25px; text-align: center; font-weight: lighter;">RP.
                  <?php echo $tampilKategori['hargaTiket']; ?>
                </p>
                <button name="Radiant" value="<?php echo $tampilKategori['category']; ?>"
                  onclick="changeCategory(this)">Pilih</button>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </section>
  <form action="" , method="post">
    <section class="pembelian">
      <div class="catatan">
        <img src="Assets/catatan.png" alt="">
      </div>

      <div class="tiket">
        <b style="color: white; font-size:40px;">Category: </b>
        <p id="categoryText" style="color:white; font-size: 40px"></p>
        <input type="hidden" name="kategori" id="kategoriInput">
      </div>

      <div class=" jumlah">
        <p id="ticketCount">Jumlah Tiket: </p>
        <input type="hidden" name="jumlah_tiket" id="jumlahTiketInput">
        <button class="minus-button" onclick="decrementTicket()"></button>
        <button class="konfirmasi" name="konfirmasi" onclick="submitForm()"><b>Lanjutkan</b></button>
      </div>
  </form>
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
              <p>0821 1234 5678
              <p>
            </li>
            <li class="Email">
              <p>Email
              <p>
              <p>tikser@gmail.com
              <p>
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
            <a href="#"><img src="Assets/facebook.png" alt=""></a>
            <a href="#"><img src="Assets/twitter.png" alt=""></a>
            <a href="#"><img src="Assets/instagram.png" alt=""></a>
            <a href="#"><img src="Assets/youtube.png" alt=""></a>
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
  <script>
    var ticketCount = 0;
    var previousValue = '';

    function changeCategory(button) {
      var value = button.value;
      var categoryText = document.getElementById("categoryText");
      categoryText.innerHTML = value;

      if (value !== previousValue) {
        ticketCount = 0;
        previousValue = value;
      }

      ticketCount++;
      updateTicketCount();
    }

    function decrementTicket() {
      if (ticketCount > 0) {
        ticketCount--;
        updateTicketCount();
      }
    }

    function updateTicketCount() {
      document.getElementById("ticketCount").innerHTML = "Jumlah Tiket: " + ticketCount;
      document.getElementById("jumlahTiketInput").value = ticketCount;
    }

    function submitForm() {
      var kategori = document.getElementById("categoryText").textContent;
      document.getElementById("kategoriInput").value = kategori;
      document.forms[0].submit();
    }
  </script>
</body>

</html>