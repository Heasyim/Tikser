<?php
session_start();

require "config.php";

date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['komentar'])) {
    $komentar = $_POST['komentar'];
    $tanggal = date('Y-m-d H:i:s'); // Get the current date and time
    $nama = $_SESSION['nama'];

    // Prepare the SQL statement to insert a new comment
    $sql = "INSERT INTO komentar (nama, komentar, tanggal) VALUES ('$nama', '$komentar', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
      echo "Komentar berhasil disimpan pada tanggal " . $tanggal . ".";
    } else {
      echo "Terjadi kesalahan: " . $conn->error;
    }
  } elseif (isset($_POST['hapus'])) {
    $nama = $_SESSION['nama'];

    // Prepare the SQL statement to delete the user's comment
    $sql = "DELETE FROM komentar WHERE nama = '$nama'";

    if ($conn->query($sql) === TRUE) {
      echo "Komentar berhasil dihapus.";
    } else {
      echo "Terjadi kesalahan: " . $conn->error;
    }
  }
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
  <link rel="stylesheet" href="css/newsPage.css">
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto p-2">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="homepage.php">HOME</a>
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
              <a class="nav-link active" href="newsPage.php">NEWS</a>
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
  <section class="news">
    <div class="headline">
      <h2><b>Chris Martin Buka Suara Soal Desakan Batalkan Konser Coldplay</b> </h2>
    </div>

    <div class="gambar">
      <img src="Assets/newsColdplay.png" alt="news">
    </div>

    <div class="berita">
      <p>Jakarta - The fans felt joy after it was confirmed that Coldplay would be holding their concert in Jakarta.
        However, there were also those who urged that the concert be cancelled. The opposition came from the 212 Alumni
        Brotherhood (PA). There were even threats to surround the airport if Coldplay continued to hold their concerts.
      </p>
      <br>
      <p>In Malaysia, the Malaysian Islamic Party (PAS) also conveyed the same pressure. They hope that the Coldplay
        concert in Kuala Lumpur will be cancelled. Chris Martin seems to know this issue. In an interview with the
        Malaysian radio station, HITZ, the vocalist expressed his views on the rejection.
        "Every time I meet Malaysians, I feel love and warmth. Everyone is welcome to come to our concerts. We love all
        kinds of people, all religions," said Chris Martin.
      </p>
    </div>

    <div class="komentar">
      <?php
      if (isset($_SESSION['login'])) {
        ?>
        <div class="input_komentar">
          <form method="post" action="newsPage.php?name='komentar'">
            <label for="komentar">Komentar:</label>
            <br>
            <textarea name="komentar" id="komentar" rows="5" cols="40"
              placeholder="Komentar sebagai <?php echo $_SESSION['nama']; ?>" required></textarea><br><br>
            <script>
              const textarea = document.querySelector('textarea');
              textarea.addEventListener("keyup", e => {
                textarea.style.height = "63px";
                let scHeight = e.target.scrollHeight;
                textarea.style.height = `${scHeight}px`;
              });
            </script>
            <input type="submit" value="Submit">
            <h2>Komentar Terbaru</h2>
          </form>
          <?php
      } else {
        ?>
          <div class="input_komentar">
            <form method="#">
              <label for="komentar">Komentar:</label>
              <br>
              <textarea name="komentar" id="komentar" rows="5" cols="40"
                placeholder="anda harus login"></textarea><br><br>
              <input type="submit" value="Submit">
              <h2>Komentar Terbaru</h2>
            </form>
            <?php
      }
      ?>
          <?php
          // Ambil data komentar terbaru dari database
          $sql = "SELECT nama, komentar, tanggal FROM komentar ORDER BY tanggal";
          $result = mysqli_query($conn, $sql);

          // Fungsi untuk mengubah format tanggal menjadi bahasa Indonesia
          function formatTanggal($tanggal)
          {
            $bulan = array(
              'Januari',
              'Februari',
              'Maret',
              'April',
              'Mei',
              'Juni',
              'Juli',
              'Agustus',
              'September',
              'Oktober',
              'November',
              'Desember'
            );

            $tgl = date('d', strtotime($tanggal));
            $bln = $bulan[date('n', strtotime($tanggal)) - 1];
            $thn = date('Y', strtotime($tanggal));

            return $tgl . ' ' . $bln . ' ' . $thn;
          }

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $nama = $row['nama'];
              $komentar = $row['komentar'];
              $tanggal = formatTanggal($row['tanggal']);
              ?>
              <hr>
              <div class="sejajar">
                <p class="namaKomentar">
                  <?php echo "<strong>$nama</strong>"; ?>
                </p>
                <p class="tanggalKomentar">
                  <?php echo "$tanggal"; ?>
                </p>
              </div>
              <p>
                <?php echo "$komentar<br>"; ?>
              </p>

              <?php
            }
          } else {
            ?>

            <p>
              <?php echo "Belum ada komentar"; ?>
            </p>

            <?php
          }

          // Tutup koneksi database
          $conn->close();
          ?>
        </div>
      </div>
      <?php
      if (isset($_SESSION['login'])) {
        ?>
        <div class="hapusKomentar" id="hapusContainer"
          style="display: <?php echo isset($_POST['hapus']) ? 'none' : 'block'; ?>">
          <form action="" method="post">
            <input type="hidden" name="hapus" value="<?php echo $_SESSION['nama']; ?>">
            <button type="submit" name="hapus">Hapus</button>
          </form>
        </div>
        <?php
      }
      ?>

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
    // Hide the "Hapus" button after 10 seconds
    setTimeout(function () {
      document.getElementById('hapusContainer').style.display = 'none';
    }, 10000);
  </script>
</body>

</html>