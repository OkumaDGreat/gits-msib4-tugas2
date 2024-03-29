<?php
  include 'koneksi.php';
?>


<?php
// jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
$query = "SELECT * FROM tb_tentangsaya ORDER BY id_tentangSaya ASC";
$result = mysqli_query($koneksi, $query);

$row = mysqli_fetch_assoc($result);

?>

<?php
  // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
  $queryP = "SELECT * FROM tb_projek ORDER BY id ASC";
  $resultP = mysqli_query($koneksi, $queryP);
  
?>

<?php
  // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
  $queryPr = "SELECT * FROM tb_prestasi ORDER BY id ASC";
  $resultPr = mysqli_query($koneksi, $queryPr);
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Rahmadany Fahreza Taufiqurrahman</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom fonts for this template -->
    <link
      href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i"
      rel="stylesheet"
    />
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/resume.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"
      id="sideNav"
    >
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none">Rahmadany Fahreza Taufiqurrahman</span>
        <span class="d-none d-lg-block">
          <img
            class="img-fluid img-profile rounded-circle mx-auto mb-2"
            src="img/<?php echo $row['foto']; ?>"
            alt=""
          />
        </span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link js-scroll-trigger" href="#experience"
              >My Project</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        <div class="my-auto">
          <h1 class="mb-0">
            <span class="text-dark"><?= $row['nama']; ?></span>
          </h1>
          <div class="subheading mb-5">
          <?= $row['alamat']; ?> <?= $row['no_telepon']; ?> ·
            <a  class="text-dark" href="mailto:name@email.com"><?= $row['email']; ?></a>
          </div>
          <p class="lead mb-5">
          <?= $row['ket']; ?>
          </p>
          <div class="social-icons">
            <a href="https://www.linkedin.com/in/rahmadany-fahreza-taufiqurrahman-718596245">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/OkumaDGreat">
              <i class="fab fa-github"></i>
            </a>
            <a href="https://www.instagram.com/rahmadanyft/">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/rahmadany.fahreza.1">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
      </section>

      <hr class="m-0" />

      <section
        class="resume-section p-3 p-lg-5 d-flex flex-column"
        id="experience"
      >
        <div class="my-auto">
          <h2 class="mb-5 text-dark">My Project</h2>

       
          <?php while($rowP = mysqli_fetch_assoc($resultP)) { ?> 
            <div class="resume-item d-flex flex-column flex-md-row mb-5">
            
            <div class="resume-content mr-auto">
              <h3 class="mb-0"><?php echo ($rowP['judul']); ?></h3>
              <p class="lead mb-3"><?php echo ($rowP['ket']); ?></p>
              <a class="lead mb-2" href="https://github.com/radisyah">
              <i class="fab fa-google"> <?php echo ($rowP['link']); ?></i>
              </a>
            </div>
          </div>
          <?php } ?>
          
        </div>
      </section>

      <hr class="m-0" />

      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div class="my-auto">
          <h2 class="text-dark mb-5">Skills</h2>

          <div class="subheading mb-3">Programming Language</div>
          <ul class="list-inline dev-icons">
            <li class="list-inline-item">
              <i class="fab fa-html5"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-css3-alt"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-js-square"></i>
            </li>
            <li class="list-inline-item">
              <i class="fab fa-php"></i>
            </li>
          </ul>

          <div class="subheading mb-3">Database</div>
          <ul class="list-inline dev-icons">
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/mysql.png"
            alt=""
            />           
           </li>
          </ul>

          <div class="subheading mb-3">Framework</div>
          <ul class="list-inline dev-icons">
            </li>
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/codeigniter.png"
            alt=""
            />    
            </li>
            <li  class="list-inline-item">
            <img
            style="width: 50px;"
            src="img/laravel.png"
            alt=""
            />    
            </li>
          </ul>

      </section>

      <hr class="m-0" />

          

          
          </ul>
        </div>
      </section>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/resume.min.js"></script>
  </body>
</html>
