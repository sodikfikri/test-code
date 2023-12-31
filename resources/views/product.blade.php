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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <a class="nav-link " href="{{ route('main') }}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Produk</span>
        </a>
      </li><!-- End Tables Nav -->
      <li class="nav-item">
        <a class="nav-link " href="{{ route('order') }}">
          <i class="bi bi-layout-text-window-reverse"></i><span>Pesanan</span>
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
                    <button class="btn btn-primary" id="show-product">
                        Show Data
                    </button>
                </div>
                {{-- </div> --}}
            </div>

              <!-- Table with stripped rows -->
              <table class="table table-striped" id="table-product">
                <thead>
                  <tr>
                    <th scope="col">Imange</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col" class="text-center">Action</th>
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
      
        <div class="modal fade" id="modalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  {{-- <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div> --}}
                  <div class="modal-body">
                      <div class="row">
                        <div class="col-6">
                            <p style="font-size: 20px; font-weight: bold" id="title">Iphone X</p>
                        </div>
                        <div class="col-6">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="float: right"></button>
                        </div>
                        <div class="col-6">
                            <img src="" id="thumbnail" alt="" style="width: 100%; max-height: 350px">
                            <div class="row mt-3">
                                <div class="col-3">
                                    <img src="" id="img-1" alt="" style="width: 100%; max-height: 80px">
                                </div>
                                <div class="col-3">
                                    <img src="" id="img-2" alt="" style="width: 100%; max-height: 80px">
                                </div>
                                <div class="col-3">
                                    <img src="" id="img-3" alt="" style="width: 100%; max-height: 80px">
                                </div>
                                <div class="col-3">
                                    <img src="" id="img-4" alt="" style="width: 100%; max-height: 80px">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-6" style="font-size: 21px">
                                    Price: $<span id="price"></span>
                                </div>
                                <div class="col-6" id="rating">
                                    <span><i class="fa-solid fa-star fa-xl"></i></span>
                                    <span><i class="fa-solid fa-star-half-stroke fa-xl"></i></span>
                                    <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                                    <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                                    <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                                </div>
                                <div class="col-3" style="font-size: 14px">
                                    Category:
                                </div>
                                <div class="col-9" id="category" style="font-size: 14px">
                                    Smartphone dummy
                                </div>
                                <div class="col-3" style="font-size: 14px">
                                    Stock:
                                </div>
                                <div class="col-9" id="stock" style="font-size: 14px">
                                    999 dummy
                                </div>
                                <div class="col-3" style="font-size: 14px">
                                    Description:
                                </div>
                                <div class="col-9" style="font-size: 14px" id="description">
                                    SIM-Free, Model A19211 6.5-inch Super Retina HD display with OLED technology A12 Bionic chip with dummy
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  {{-- <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" id="btn-update">Save changes</button>
                  </div> --}}
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
        $('#table-product').DataTable()
        let list_data = () => {
            $('#table-product tbody').empty()
            $.ajax({
                url: 'https://dummyjson.com/products',
                method: 'GET',
                success: function(resp) {
                    if (resp.products.length != 0) {
                        $.each(resp.products, function(key, val) {
                            $('#table-product').append(
                                `<tr>
                                    <td>
                                        <img src="${val.thumbnail}" style="height: 80px;">
                                    </td>
                                    <td>${val.title}</td>
                                    <td>${val.category}</td>
                                    <td>${val.brand}</td>
                                    <td>${val.stock}</td>
                                    <td>${val.price}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-primary btn-sm waves-effect" id="btn-edit" data-id="${val.id}">View</button>
                                    </td>
                                </tr>`
                            )
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Data Not Found',
                            // footer: '<a href="">Why do I have this issue?</a>'
                        })   
                    }
                },
                complete: function() {
                    $('#table-product').DataTable()
                }
            })
        }

        $('#show-product').on('click', function() {
            $('#table-product').dataTable().fnDestroy()
            list_data()
        })

        $('#table-product tbody').on('click', '#btn-edit', function() {
            let idx = $(this).data('id')
            $.ajax({
                url: `https://dummyjson.com/products/${idx}`,
                method: 'GET',
                success: function(resp) {
                    console.log(resp);
                    $('#title').html(resp.title)
                    $('#thumbnail').attr('src', resp.thumbnail)
                    $('#price').html(resp.price)
                    $('#category').html(resp.category)
                    $('#stock').html(resp.stock)
                    $('#description').html(resp.description)
                    $('#img-1').attr('src', resp.images[0])
                    $('#img-2').attr('src', resp.images[1])
                    $('#img-3').attr('src', resp.images[2])
                    $('#img-4').attr('src', resp.images[3])

                    $('#rating').empty()
                    if (resp.rating < 1) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star-half-stroke fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    } 
                    else if (resp.rating == 1) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    } 
                    else if (resp.rating > 1 && resp.rating < 2) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    } 
                    else if (resp.rating == 2) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    }
                    else if (resp.rating > 2 && resp.rating < 3) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    }
                    else if (resp.rating == 3) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    }
                    else if (resp.rating > 3 && resp.rating < 4) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    }
                    else if (resp.rating == 4) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-sharp fa-regular fa-star fa-xl"></i></span>`
                        )
                    }
                    else if (resp.rating > 4 && resp.rating < 5) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke fa-xl"></i></span>`
                        )
                    }
                    else if (resp.rating == 5) {
                        $('#rating').append(
                            `<span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>
                            <span><i class="fa-solid fa-star fa-xl"></i></span>`
                        )
                    }

                    $('#modalView').modal('show')
                }
            })
        })
        
    })
  </script>

</body>

</html>