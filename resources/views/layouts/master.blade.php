<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link 
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
            rel="stylesheet" 
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
        <link 
            rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" 
            integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" 
            crossorigin="anonymous" 
        />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <title>Pemilik</title>
    </head>
    <body>
        <div>
        <nav class="navbar navbar-light bg-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand " href="/menu"><h5>Office Planner</h5></a>
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-person-fill"></i></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#scrollspyHeading3">Akun</a></li>
                        <li><a class="dropdown-item" href="/login">Keluar</a></li>
                    </ul>
                    </li>
                </ul>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Selamat Datang<br>(Pemilik Perusahaan)</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="/jadwal"><i class="bi bi-calendar3"></i>  Jadwal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="/tugasLaporan"><i class="bi bi-journal-text"></i>  Tugas dan Laporan</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="/presensi"><i class="bi bi-clock-fill"></i>  Presensi</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="/surat"><i class="bi bi-envelope-fill"></i>  Surat-surat</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="keuangan.php"><i class="bi bi-graph-up-arrow"></i>  Keuangan</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link active" aria-current="page" href="menu.php"><i class="bi bi-gear-fill"></i>  Upgrade Fitur</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </div>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
    @yield('content')
</body>
</html>
