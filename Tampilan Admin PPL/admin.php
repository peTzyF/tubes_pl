<?php
echo"
<header class='navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow'>
      <a class='navbar-brand col-md-3 col-lg-2 me-0 px-3' href='#'>WISABA</a>
      <button class='navbar-toggler position-absolute d-md-none collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#sidebarMenu' aria-controls='sidebarMenu' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='navbar-nav'>
        <div class='nav-item text-nowrap'>
          <a class='nav-link px-3' href='index login.php'>Logout</a>
        </div>
      </div>
    </header>

    <div class='container-fluid'>
      <div class='row'>
        <nav id='sidebarMenu' class='col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse'>
          <div class='position-sticky pt-3'>
            <ul class='nav flex-column'>
              <li class='nav-item'>
                <a class='nav-link' href='index wisata.php'>
                  <i class='bi bi-card-image p-2'></i>
                  Data Wisata
                </a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='index admin.php'>
                  <i class='bi bi-person-circle p-2'></i>
                  Data Admin
                </a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='index form.php'>
                  <i class='bi bi-chat-right-text p-2'></i>
                  Data Form
                </a>
              </li>
            </ul>
            </ul>
          </div>
        </nav>

        <main class='col-md-9 ms-sm-auto col-lg-10 px-md-4'>
            <h1 class='mt-3 mb-4'>Data Admin</h1>
            <button class='btn btn-success mb-3' data-bs-toggle='modal' data-bs-target='#exampleModal'>Tambah Admin</button>
            <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
                <div class='table-responsive w-100'>
                  <table class='table table-striped table-bordered'>
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>1</td>
                          <td>Admin</td>
                          <td>admin@gmail.com</td>
                          <td>12345</td>
                          <td>
                              <button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
                              <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal3'>Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Admin2</td>
                          <td>admin2@gmail.com</td>
                          <td>67890</td>
                          <td>
                              <button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
                              <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal3'>Hapus</button>
                          </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </main>
      </div>
    </div>

    <!-- Modal Tambah -->
    <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel'>Tambah Admin</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Nama</label>
              <input type='text' class='form-control' id='formGroupExampleInput2'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Email</label>
              <input type='text' class='form-control' id='formGroupExampleInput3'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Password</label>
              <input type='text' class='form-control' id='formGroupExampleInput4'>
            </div>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>
            <button type='button' class='btn btn-primary'>Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit -->
    <div class='modal fade' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog modal-dialog-centered modal-dialog-scrollable'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='exampleModalLabel2'>Edit Admin</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Nama</label>
              <input type='text' class='form-control' id='formGroupExampleInput2'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Email</label>
              <input type='text' class='form-control' id='formGroupExampleInput3'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Password</label>
              <input type='text' class='form-control' id='formGroupExampleInput4'>
            </div>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tutup</button>
            <button type='button' class='btn btn-primary'>Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Hapus -->
    <div class='modal fade' id='exampleModal3' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <h3>Apakah yakin menghapus data ?</h3>
          </div>
          <div class='modal-footer'>
            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Tidak</button>
            <button type='button' class='btn btn-primary'>Ya</button>
          </div>
        </div>
      </div>
    </div>";
?>