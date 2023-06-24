<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tables / Data - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">


      <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Produk</span>
        </a>
      </li><!-- End Tables Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Produk</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Produk</li>
          {{-- <li class="breadcrumb-item active">Data</li> --}}
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title">Data Produk</h5>
                </div>
                {{-- <div class="col-6"> --}}
                <div class="col-6 mt-3" style="text-align: right">
                    {{-- <button class="btn btn-primary" id="btn-add" data-toggle="modal" data-target="#modalAdd">Add Data</button> --}}
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add data
                    </button>
                </div>
                {{-- </div> --}}
            </div>

              <!-- Table with stripped rows -->
              <table class="table" id="table-product">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col" style="width: 200px">Nama Produk</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>

      <!-- Modal -->
      
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="" class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" id="nama_produk">
                                <small id="validate-nama-produk" style="color: red; font-size: 10px; display: none">Nama produk tidak boleh kosong</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori">
                                <small id="validate-kategori" style="color: red; font-size: 10px; display: none">Kategori tidak boleh kosong</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Harga</label>
                                <input type="number" class="form-control" id="harga" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                                <small id="validate-harga" style="color: red; font-size: 10px; display: none">Harga tidak boleh kosong</small>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <select name="" id="status" class="form-control">
                                    <option value="bisa dijual">bisa dijual</option>
                                    <option value="tidak bisa dijual">tidak bisa dijual</option>
                                </select>
                                <small id="validate-status" style="color: red; font-size: 10px; display: none">Status tidak boleh kosong</small>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="btn-add">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form action="">
                        <input type="hidden" id="id-hide" value="">
                          <div class="mb-3">
                              <label for="" class="form-label">Nama Produk</label>
                              <input type="text" class="form-control" id="u_nama_produk">
                              <small id="u-validate-nama-produk" style="color: red; font-size: 10px; display: none">Nama produk tidak boleh kosong</small>
                          </div>
                          <div class="mb-3">
                              <label for="" class="form-label">Kategori</label>
                              <input type="text" class="form-control" id="u_kategori">
                              <small id="u-validate-kategori" style="color: red; font-size: 10px; display: none">Kategori tidak boleh kosong</small>
                          </div>
                          <div class="mb-3">
                              <label for="" class="form-label">Harga</label>
                              <input type="number" class="form-control" id="u_harga" pattern="[0-9]*" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                              <small id="u-validate-harga" style="color: red; font-size: 10px; display: none">Harga tidak boleh kosong</small>
                          </div>
                          <div class="mb-3">
                              <label for="" class="form-label">Status</label>
                              <select name="" id="u_status" class="form-control">
                                <option value="bisa dijual">bisa dijual</option>
                                <option value="tidak bisa dijual">tidak bisa dijual</option>
                              </select>
                              <small id="u-validate-status" style="color: red; font-size: 10px; display: none">Status tidak boleh kosong</small>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="btn-update">Save changes</button>
                  </div>
              </div>
          </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
  {{-- <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script> --}}
  <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    jQuery(function($) {
      // $("#harga").spinner();
        const list_data = () => {
            $('#table-product').DataTable({
                destroy: true,
                ajax: {
                    url: '/api/list',
                    method: 'GET',
                    data: function(data) {
                        return data = JSON.stringify(data)
                    }
                },
                columns: [
                    { render: (data, type, row, meta) => meta.row + 1, },
                    {
                        data: 'nama_produk'
                    },
                    {
                        data: 'kategori'
                    },
                    {
                        data: 'harga'
                    },
                    {
                        render: function(data, type, row, meta){
                            return `<span class="badge bg-success">${row.status}</span>`
                        },
                        className: 'text-center'
                    },
                    {
                        render: function(data, type, row, meta){
                            return `<button type="button" class="btn btn-warning btn-sm waves-effect" style="margin-right: 10px" id="btn-edit" data-id="${row.id_produk}"><i class="bi bi-pencil-fill"></i></button><button type="button" class="btn btn-danger btn-sm waves-effect" style="margin-right: 10px" id="btn-delete" data-id="${row.id_produk}"><i class="bi bi-trash"></i></button>`
                        },
                        className: 'text-center'
                    }
                ]
            })
        }

        list_data()

        $('#btn-add').on('click', function() {

          if($.trim($('#nama_produk').val()) == '') {
            $('#validate-nama-produk').css('display', '')
            return; 
          } else {
            $('#validate-nama-produk').css('display', 'none')
          }
          if($.trim($('#kategori').val()) == '') {
            $('#validate-kategori').css('display', '')
            return; 
          } else {
            $('#validate-kategori').css('display', 'none')
          }
          if($.trim($('#harga').val()) == '') {
            $('#validate-harga').css('display', '')
            return; 
          } else {
            $('#validate-harga').css('display', 'none')
          }
          if($.trim($('#status').val()) == '') {
            $('#validate-status').css('display', '')
            return; 
          } else {
            $('#validate-status').css('display', 'none')
          }
        
          let data = {
              nama_produk: $('#nama_produk').val(),
              kategori: $('#kategori').val(),
              harga: $('#harga').val(),
              status: $('#status').val(),
          }
          
          create_data(data)
          
        })

        let create_data = (params) => {
          $.ajax({
            url: '/api/create',
            method: 'POST',
            data: params,
            success: function(resp) {
              if (resp.meta.code == '200') {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: resp.meta.message,
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
              } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: resp.meta.message,
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
              }
              $('#exampleModal').modal('hide')
              list_data()
            },
            complete: function() {
              $('#nama_produk').val('')
              $('#kategori').val('')
              $('#harga').val('')
              $('#status').val('')
            }
          })
        }

        $('#table-product tbody').on('click', '#btn-edit', function() {
          let idx = $(this).data('id')
          $.ajax({
            url: '/api/detail',
            method: 'GET',
            data: {
              id: idx
            },
            success: function(resp) {
              if (resp.meta.code == '200') {
                $('#id-hide').val(resp.data.id_produk)
                $('#u_nama_produk').val(resp.data.nama_produk)
                $('#u_kategori').val(resp.data.kategori)
                $('#u_harga').val(resp.data.harga)
                $('#u_status').val(resp.data.status).change()
                
                $('#modalUpdate').modal('show')
              }
            }
          })
        })

        $('#btn-update').on('click', function(){
          if($.trim($('#u_nama_produk').val()) == '') {
            $('#u-validate-nama-produk').css('display', '')
            return; 
          } else {
            $('#u-validate-nama-produk').css('display', 'none')
          }
          if($.trim($('#u_kategori').val()) == '') {
            $('#u-validate-kategori').css('display', '')
            return; 
          } else {
            $('#u-validate-kategori').css('display', 'none')
          }
          if($.trim($('#u_harga').val()) == '') {
            $('#u-validate-harga').css('display', '')
            return; 
          } else {
            $('#u-validate-harga').css('display', 'none')
          }
          if($.trim($('#u_status').val()) == '') {
            $('#u-validate-status').css('display', '')
            return; 
          } else {
            $('#u-validate-status').css('display', 'none')
          }

          let data = {
            id: $('#id-hide').val(),
            nama_produk: $('#u_nama_produk').val(),
            kategori: $('#u_kategori').val(),
            harga: $('#u_harga').val(),
            status: $('#u_status').val(),
          }

          update_data(data)
        })

        let update_data = (params) => {
          $.ajax({
            url: '/api/update',
            method: 'PUT',
            data: params,
            success: function(resp) {
              if (resp.meta.code == '200') {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: resp.meta.message,
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
              } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: resp.meta.message,
                    // footer: '<a href="">Why do I have this issue?</a>'
                })
              }
              $('#modalUpdate').modal('hide')
              list_data()
            },
          })
        }

        $('#table-product tbody').on('click', '#btn-delete', function(){
          let idx = $(this).data('id')
          Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            if (result.isConfirmed) {

              $.ajax({
                url: '/api/delete',
                method: 'DELETE',
                data: {
                  id: idx
                },
                success: function(resp) {
                  if (resp.meta.code == '200') {
                    Swal.fire(
                      'Deleted!',
                      'Your file has been deleted.',
                      'success'
                    )
                    list_data()
                  }
                }
              })

            }
          })
        })

    })
  </script>

</body>

</html>