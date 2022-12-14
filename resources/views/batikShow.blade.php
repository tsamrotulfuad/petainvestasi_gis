<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info | {{ $batikshow->nama_usaha }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/favicon.png') }}">
    <style>
        /* Show it is fixed to the top */
        body {
        min-height: 50rem;
        padding-top: 5.5rem;
        }

        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 2rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md fixed-top bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="mt-0" src="{{ asset('logo/kotapasuruan_dpmptsp.png') }}" alt="" height="45">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarsExample01">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Peta Potensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/petastatis">Peta Investasi</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
        <!-- /navbar -->
    <!-- content -->
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" src="{{ Storage::url('public/produks/').$batikshow->gambar_produk }}" style="width: 100%; height: 100%;">
                    <div class="container">
                    <div class="carousel-caption">
                        <h2>{{ $batikshow->nama_usaha }}</h2>
                        <h1>Harga Mulai dari Rp. {{ $batikshow->harga }}</h1>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" src="{{ Storage::url('public/produks/').$batikshow->gambar_produk2 }}" style="width: 100%; height: 100%;">
                    <div class="container">
                    <div class="carousel-caption">
                        <h2>{{ $batikshow->nama_usaha }}</h2>
                        <h1>Harga Mulai dari Rp. {{ $batikshow->harga }}</h1>
                    </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Informasi</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nama_usaha" class="form-label">Nama Usaha</label>
                            <h5 class="card-title">{{ $batikshow->nama_usaha }}</h5>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_usaha" class="form-label">Alamat Usaha</label>
                            <h5 class="card-title">{{ $batikshow->alamat_usaha }}</h5>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_usaha" class="form-label">Produk Usaha</label>
                            <h5 class="card-title">{{ $batikshow->produk }}</h5>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_usaha" class="form-label">Harga Mulai Produk</label>
                            <h5 class="card-title">Rp. {{ $batikshow->harga }}</h5>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_usaha" class="form-label">Kontak</label>
                            <h5 class="card-title">{{ $batikshow->kontak }}</h5>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_usaha" class="form-label">Website</label>
                            <h5 class="card-title">{{ $batikshow->website }}</h5>
                        </div>
                        <div class="mb-3">
                            <label for="alamat_usaha" class="form-label">Deskripsi</label>
                            <h5 class="card-title">{{ $batikshow->deskripsi_produk }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /content -->
    <!-- footer -->
    <div class="container">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <p class="col-md-4 mb-0 text-muted">&copy; 2022 Peta SiOni</p>

                <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                </a>

            </footer>
    </div>
    <!-- /footer -->
    <!-- JS Add Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>
