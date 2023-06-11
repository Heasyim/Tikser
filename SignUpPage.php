<?php
require 'config.php';

function registrasi($data)
{
    global $conn;

    $id = (int)((rand() * rand()) / rand());

    $firstName = stripslashes($data["firstName"]);
    $lastName = stripslashes($data["lastName"]);

    $fullName = $firstName . " " . $lastName;

    $email = strtolower($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek email apakah sudah ada atau belum
    $cekEmail = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (mysqli_fetch_assoc($cekEmail)) {
        echo "<script>
                alert('Email Sudah Terdaftar!')
                </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
   
    //tambahkan user ke database registrasi
    mysqli_query($conn, "INSERT INTO user VALUES('$id', '$fullName', '$email', '$password') ");

    return mysqli_affected_rows($conn);
}

// Sign Up Berhasil
if (isset($_POST["signup"])) {
    if (registrasi($_POST) > 0) {
        echo "script>
            alert('Sign Up Berhasil!');
        </script>";
        header("Location: loginPage.php");
    } else {
        echo mysqli_error($conn);
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/signUpPage.css">
    <script defer src="script.js"></script>
  </head>
<body>
     <!-- Navbar -->
  <section class="SecNavbar">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="homepage.php">
          <img src="Assets/logo-tikser.svg" class="img-fluid" width="150px" height="60.15px" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span >
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
                <li><a class="dropdown-item" href="loginPage.php">LOGIN</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="homepage.php">HOME</a></li>
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
    
  <section class="content">
        <div class="form-box">
        <img src="Assets/logo-tikser.svg" class="img-fluid" width="150px" height="60.15px" alt="Tikser" />
            <div class="form-value">
                <form action="", method="post">
                    <h2>Sign up to TIKSER</h2>
                    <div class="register">
                        <p>Already a member? <a href="loginPage.php">Log in</a></p>
                    </div>

                    <div class="name">
                        <div class="firstName">
                            <p>First Name</p>
                            <input type="firstName" name="firstName" id="firstName" required>
                        </div>
                        <div class="lastName">
                            <p>Last Name</p>
                            <input type="lastName" name="lastName" id="lastName" required>
                        </div>
                    </div>

                    <div class="inputbox">
                        <p>Email</p>
                        <!-- <ion-icon name="mail-outline"></ion-icon> -->
                        <input type="email" name="email" id="email" required>
                        <!-- <label for="">Email</label> -->
                    </div>
                    
                    <div class="inputbox">
                        <p>Password</p>
                        <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
                        <input type="password" name="password" id="password" required>
                        <!-- <label for="">Password</label> -->
                    </div>
                    
                    <button type="submit" , name="signup"><b>Sign Up</b></button>
                    <div class="or">
                        <ul>
                            <li><hr class="kiri"></li>
                            
                        </ul>
                    </div>

                    
                    
                    
                </form>
                <div class="terms">
                        <p>By creating an account 
                            
                            you agree to our <b>Terms of 
                            Service</b> and <b>Privacy Policy</b></p>
                    </div>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</body>
</html>