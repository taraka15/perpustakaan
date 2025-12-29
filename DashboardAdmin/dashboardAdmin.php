<?php
session_start();

if (!isset($_SESSION["signIn"])) {
  header("Location: ../sign/admin/sign_in.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
  <title>Admin Dashboard</title>

  <style>
    /* --- CARD STYLE BARU --- */
    .cardImg {
      width: 260px;
      height: 150px;
      border-radius: 18px;
      overflow: hidden;
      background: #ffffff;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      transition: 0.25s ease;
    }

    .cardImg:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 28px rgba(0, 0, 0, 0.28);
    }

    .cardImg img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 18px;
      transition: .3s;
    }

    .cardImg:hover img {
      transform: scale(1.05);
    }

    /* wrapper 3 atas + 2 bawah */
    .menu-wrapper {
      max-width: 900px;
      margin: auto;
    }

    .row-custom {
      display: flex;
      justify-content: center;
      gap: 16px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar fixed-top bg-body-tertiary shadow-sm">
    <div class="container-fluid p-3">
      <a class="navbar-brand" href="#">
        <img src="../assets/logoNav2.png" alt="logo" width="120px">
      </a>

      <div class="dropdown">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
          <img src="../assets/adminLogo.png" alt="adminLogo" width="40px">
        </button>
        <ul style="margin-left: -7rem;" class="dropdown-menu position-absolute mt-2 p-2">
          <li class="text-center">
            <img src="../assets/adminLogo.png" alt="adminLogo" width="30px">
          </li>
          <li class="text-center text-secondary text-capitalize">
            <?php echo $_SESSION['admin']['nama_admin']; ?>
          </li>
          <hr>
          <li class="text-center mb-2">
            Akun Terverifikasi <span class="text-primary"><i class="fa-solid fa-circle-check"></i></span>
          </li>
          <li>
            <a class="dropdown-item text-center p-2 bg-danger text-light rounded" href="signOut.php">
              Sign Out <i class="fa-solid fa-right-to-bracket"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CONTENT -->
  <div class="mt-5 p-4">

    <?php
    $day = date('l');
    $dayOfMonth = date('d');
    $month = date('F');
    $year = date('Y');
    ?>

    <h1 class="mt-5 fw-bold">
      Dashboard -
      <span class="fs-4 text-secondary">
        <?php echo $day . " " . $dayOfMonth . " " . $month . " " . $year; ?>
      </span>
    </h1>

    <div class="alert alert-success" role="alert">
      Selamat datang admin -
      <span class="fw-bold text-capitalize"><?php echo $_SESSION['admin']['nama_admin']; ?></span>
      di Dashboard Perpustakaan
    </div>

    <!-- MENU GRID 3 ATAS + 2 BAWAH -->
    <div class="menu-wrapper">

      <!-- ROW 1 (3 card) -->
      <div class="row-custom">
        <div class="cardImg">
          <a href="member/member.php">
            <img src="../assets/dashboardCardMember/member1.png" alt="Member">
          </a>
        </div>

        <div class="cardImg">
          <a href="buku/daftarBuku.php">
            <img src="../assets/dashboardCardMember/bukuAdmin1.png" alt="Buku">
          </a>
        </div>

        <div class="cardImg">
          <a href="peminjaman/peminjamanBuku.php">
            <img src="../assets/dashboardCardMember/peminjaman1.png" alt="Peminjaman">
          </a>
        </div>
      </div>

      <!-- ROW 2 (2 card) -->
      <div class="row-custom">
        <div class="cardImg">
          <a href="pengembalian/pengembalianBuku.php">
            <img src="../assets/dashboardCardMember/pengembalian1.png" alt="Pengembalian">
          </a>
        </div>

        <div class="cardImg">
          <a href="denda/daftarDenda.php">
            <img src="../assets/dashboardCardMember/denda1.png" alt="Denda">
          </a>
        </div>
      </div>

    </div>
  </div>

  <!-- FOOTER -->
  <footer class="shadow-lg bg-subtle p-3">
    <div class="container-fluid d-flex justify-content-between">
      <p class="mt-2">Created by <span class="text-primary">Taraka Bhanu W</span> © 2025</p>
      <p class="mt-2">Versi 1.0</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
