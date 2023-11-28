<?php include '../koneksi.php'; 

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM barang WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Query Error:".mysqli_errno($conn). " - ".mysqli_error($conn));
    }
    $data = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>KOSESI</title>

    <!-- Custom fonts for this template -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="css/style.css" />

    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />

    <!-- Custom styles for this page -->
    <link
      href="vendor/datatables/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="index.php"
        >
          <div class="sidebar-brand-icon">
            <img src="../img/logo-kosesi.png" />
          </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fas bx bxs-dashboard"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Nav Item - Transaksi -->
        <li class="nav-item active">
          <a class="nav-link" href="stok-barang.php">
            <i class="fas fa-regular fa-box"></i>
            <span>Stok Barang</span>
          </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <form class="form-inline">
              <button
                id="sidebarToggleTop"
                class="btn btn-link d-md-none rounded-circle mr-3"
              >
                <i class="fa fa-bars"></i>
              </button>
            </form>

            <h5 class="mb-0" style="font-weight: 600">Stok Barang</h5>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Admin <br />
                  </span>

                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="heading d-flex justify-content-between">
              <h1 class="h3 mb-4 text-gray-800">Tambah Barang</h1>
              <a href="stok-barang.php">
                <button class="btn btn-danger">Batal</button>
              </a>
            </div>

            <div class="form-box">
              <form
                action="../edit-barang-proses.php"
                method="POST"
                enctype="multipart/form-data"
              >
                <div class="row">
                  <div class="col-6">
                    <div class="input-box">
                      <label>Kode Barang</label><br />
                      <input type="text" name="kode_barang" value="<?php echo $data['kode_barang'];?>" required/>
                      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">                    
                    </div>
                    <div class="input-box">
                      <label>Nama Barang</label><br />
                      <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'];?>" required/>
                    </div>
                    <div class="input-box">
                      <label>Banyak Barang</label><br />
                      <input type="number" name="stok" value="<?php echo $data['banyak_barang'];?>" required/>
                    </div>
                    <div class="input-box">
                      <label>Tanggal Masuk</label><br />
                      <input type="date" name="tanggal" value="<?php echo $data['tanggal_masuk'];?>" required/>
                    </div>
                    <div class="input-box">
                      <label>Tanggal Kadaluwarsa</label><br />
                      <input type="date" name="kadaluwarsa" value="<?php echo $data['tanggal_kadaluwarsa'];?>"/>
                    </div>
                  </div>
                  <div class="col-6"></div>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
  </body>
</html>
