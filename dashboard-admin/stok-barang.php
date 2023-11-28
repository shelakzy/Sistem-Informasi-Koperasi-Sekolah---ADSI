<?php
  include '../koneksi.php';
  $query = "SELECT * FROM barang ORDER BY id ASC";
  $result = mysqli_query($conn, $query);

  if(!$result) {
      die("Query Error : " . mysqli_error($conn)." - " .mysqli_error_string($conn));
  }
  $no = 1;
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
          href="index.html"
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
          <a class="nav-link" href="stok-barang.html">
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
                    >Admin Koperasi
                  </span
                  >

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
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div
                class="card-header py-3 d-flex justify-content-between align-items-center"
              >
                <h6 class="m-0 font-weight-bold text-primary">
                  Data Stok Barang
                </h6>
                <a href="tambah-barang.php">
                  <button class="btn btn-success">+ Add</button>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    class="table table-bordered"
                    id="dataTable"
                    width="100%"
                    cellspacing="0"
                  >
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Banyak Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Kadaluarsa</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['kode_barang']; ?></td>
                        <td><?php echo $row['nama_barang']; ?></td>
                        <td><?php echo $row['banyak_barang']; ?></td>
                        <td><?php echo $row['tanggal_masuk']; ?></td>
                        <td><?php echo $row['tanggal_kadaluwarsa']; ?></td>
                        <td>
                          <a href="edit-barang.php?id=<?php echo $row['id'];?>">
                            <button class="btn btn-warning">EDIT</button>
                          </a>
                          <a
                            href="../hapus-barang-proses.php?id=<?php echo $row['id'];?>"
                          >
                            <button class="btn btn-danger">DELETE</button>
                          </a>
                        </td>
                      </tr>
                      <?php
                          $no++;
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
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
