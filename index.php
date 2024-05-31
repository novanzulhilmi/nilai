<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Aplikasi Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="gambar/Lzy-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body class="bg-light">
  <nav class="navbar bg-dark navbar-expand-lg bg-info-subtle" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href=".">
        <img src="gambar/WhatsApp Image 2024-05-28 at 10.22.16_f117c34e.jpg"alt="Bootstrap" width="74px" height="auto"> <b class="ms-2">WebPro</b>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fs-5" aria-current="page" href=".">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="?m=kelas">Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="?m=siswa">Siswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="?m=mapel">Mata Pelajaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-5" href="?m=guru">Guru</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fs-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nilai
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="?m=grmp">Guru - Mapel</a>
              <a class="dropdown-item" href="?m=grkl">Guru - Kelas</a>
              <a class="dropdown-item" href="?m=nilai">Nilai</a>
            </div>
        </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="container mt-5 mb-6">
    <?php include_once('webpro.php'); ?>      
  </div>

  <div class="fixed-bottom">
      <div class="card">
          <div class="card-body">
              &copy 2024-<?= date("Y")?> - Web Programming
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>