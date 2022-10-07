<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Batik | Si Oni </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/favicon.png') }}">
    <style>
        /* Show it is fixed to the top */
        body {
        min-height: 50rem;
        padding-top: 4.5rem;
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

    </style>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
          <div class="container">
          <a class="navbar-brand" href="#">
              <img class="mt-0" src="{{ asset('logo/kotapasuruan_dpmptsp.png') }}" alt="" height="35">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarsExample07">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/">Peta Potensi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/batiklist">Info Potensi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/petastatis">Peta Investasi</a>
                  </li>
              </ul>
          </div>
          </div>
    </nav>
    <!-- /navbar -->
    <div class="container">
      <header>
        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
          <h1 class="display-5 fw-normal">Daftar Peta Potensi Investasi</h1>
          <p class="fs-5 text-muted">Kota Pasuruan</p>
        </div>
      </header>
    </div>

    <main>
      <div class="container">
      <img src="{{ asset('gambar/gambar1.png') }}" class="img-fluid" alt="...">
      <br>
      <img src="{{ asset('gambar/gambar2.png') }}" class="img-fluid" alt="...">
      <br>
      <img src="{{ asset('gambar/gambar3.png') }}" class="img-fluid" alt="...">
      <br>
      <img src="{{ asset('gambar/gambar4.png') }}" class="img-fluid" alt="...">
      <br>
      <img src="{{ asset('gambar/gambar5.png') }}" class="img-fluid" alt="...">
      </div>
    </main>
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Petasioni, DPMPTSP Kota Pasuruan</span>
      </div>
      </footer>
</body>
</html>
