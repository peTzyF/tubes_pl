<?
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
          <h1 class='mt-3 mb-4'>Data Wisata</h1>
          <button class='btn btn-success mb-3' data-bs-toggle='modal' data-bs-target='#exampleModal'>Tambah Wisata</button>
          <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
            <div class='table-responsive'>
              <table class='table table-striped table-bordered table-sm'>
                <thead>
                  <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Letak</th>
                      <th>Harga Tiket</th>
                      <th>Jam Operasional</th>
                      <th>Gambar</th>
                      <th>Gambar 360</th>
                      <th>QR Code</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td>1</td>
                      <td>Hutan Pinus</td>
                      <td>Desa Limpakuwus</td>
                      <td>Rp. 15.000</td>
                      <td>08:00 - 16:00</td>
                      <td>Gambar wisata</td>
                      <td>Gambar 360</td>
                      <td>QR Code</td>
                      <td>Hutan pinus merupakan</td>
                      <td>
                          <button class='btn btn-warning mb-2' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
                          <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal3'>Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Curug Bayan</td>
                      <td>Desa Ketenger</td>
                      <td>Rp. 5.000</td>
                      <td>08:00 - 17:00</td>
                      <td>Gambar wisata</td>
                      <td>Gambar 360</td>
                      <td>QR Code</td>
                      <td>Curug bayan merupakan</td>
                      <td>
                          <button class='btn btn-warning mb-2' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
                          <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal3'>Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>3</td>
                      <td>Galerry Water Karangmangu</td>
                      <td>Desa Karangmangu</td>
                      <td>
                        Weekday : Rp. 10.000
                        Weekend : Rp. 15.000
                      </td>
                      <td>08:00 - 18:00</td>
                      <td>Gambar 360</td>
                      <td>Gambar wisata</td>
                      <td>QR Code</td>
                      <td>GWK merupakan</td>
                      <td>
                          <button class='btn btn-warning mb-2' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
                          <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal3'>Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>4</td>
                      <td>Telaga Sunyi</td>
                      <td>Desa Limpakuwus</td>
                      <td>Rp. 15.000</td>
                      <td>07:00 - 17:30</td>
                      <td>Gambar 360</td>
                      <td>Gambar wisata</td>
                      <td>QR Code</td>
                      <td>Telaga sunyi merupakan</td>
                      <td>
                          <button class='btn btn-warning mb-2' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
                          <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal3'>Hapus</button>
                      </td>
                  </tr>
                  <tr>
                      <td>5</td>
                      <td>Wana Wisata</td>
                      <td>Desa Karangmangu</td>
                      <td>
                        Weekday : Rp. 20.000
                        Weekend : Rp. 25.000
                      </td>
                      <td>08:00 - 16:30</td>
                      <td>Gambar 360</td>
                      <td>Gambar wisata</td>
                      <td>QR Code</td>
                      <td>Wana wisata merupakan</td>
                      <td>
                          <button class='btn btn-warning mb-2' data-bs-toggle='modal' data-bs-target='#exampleModal2'>Edit</button>
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
            <h5 class='modal-title' id='exampleModalLabel'>Tambah Wisata</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <div class='mb-3'>
              <label for='formGroupExampleInput' class='form-label'>Nama</label>
              <input type='text' class='form-control' id='formGroupExampleInput'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Letak</label>
              <input type='text' class='form-control' id='formGroupExampleInput2'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Harga Tiket</label>
              <input type='text' class='form-control' id='formGroupExampleInput3'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Jam Operasional</label>
              <input type='text' class='form-control' id='formGroupExampleInput4'>
            </div>
            <div class='mb-3'>
              <label for='formFile' class='form-label'>Gambar</label>
              <input class='form-control' type='file' id='formFile'>
            </div>
            <div class='mb-3'>
              <label for='formFile' class='form-label'>Gambar 360</label>
              <input class='form-control' type='file' id='formFile2'>
            </div>
            <div class='mb-3'>
              <label for='formFile' class='form-label'>QR Code</label>
              <input class='form-control' type='file' id='formFile3'>
            </div>
            <div class='mb-3'>
              <label for='exampleFormControlTextarea1' class='form-label'>Deskripsi</label>
              <textarea class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>
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
            <h5 class='modal-title' id='exampleModalLabel2'>Edit Wisata</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            <div class='mb-3'>
              <label for='formGroupExampleInput' class='form-label'>Nama</label>
              <input type='text' class='form-control' id='formGroupExampleInput'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Letak</label>
              <input type='text' class='form-control' id='formGroupExampleInput2'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Harga Tiket</label>
              <input type='text' class='form-control' id='formGroupExampleInput3'>
            </div>
            <div class='mb-3'>
              <label for='formGroupExampleInput2' class='form-label'>Jam Operasional</label>
              <input type='text' class='form-control' id='formGroupExampleInput4'>
            </div>
            <div class='mb-3'>
              <label for='formFile' class='form-label'>Gambar</label>
              <input class='form-control' type='file' id='formFile'>
            </div>
            <div class='mb-3'>
              <label for='formFile' class='form-label'>Gambar 360</label>
              <input class='form-control' type='file' id='formFile2'>
            </div>
            <div class='mb-3'>
              <label for='formFile' class='form-label'>QR Code</label>
              <input class='form-control' type='file' id='formFile3'>
            </div>
            <div class='mb-3'>
              <label for='exampleFormControlTextarea1' class='form-label'>Deskripsi</label>
              <textarea class='form-control' id='exampleFormControlTextarea1' rows='3'></textarea>
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