<?php
require_once "../component/connect.php";



$query = "SELECT * FROM `table_jurusan` WHERE id = '1'";
$sql = mysqli_query($conn,$query);

$query1 = "SELECT * FROM `table_jurusan` WHERE id = '2'";
$sql1 = mysqli_query($conn,$query1);

$query2 = "SELECT * FROM `table_jurusan` WHERE id = '3'";
$sql2 = mysqli_query($conn,$query2);


// verifikator

$terverifikasi = "terverifikasi";
$tidak_terverifikasi = "tidak_terverifikasi";

$query3 = "SELECT * FROM `verif` AS id_verifikator";
$query4 = "SELECT * FROM `verif` WHERE detail = '$terverifikasi'";
$query5 = "SELECT * FROM `verif` WHERE detail = '$tidak_terverifikasi'";

$sql3 = mysqli_query($conn,$query3);    
$sql4 = mysqli_query($conn,$query4);
$sql5 = mysqli_query($conn,$query5);

$datajumlah = mysqli_num_rows($sql3);
$dataterverif = mysqli_num_rows($sql4);
$datatidakterverif = mysqli_num_rows($sql5);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../asset/bootstrap/css/bootstrap.min.css">
    <script src="../asset/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- Style -->
    <link rel="stylesheet" href="../component/style.css">
    <!-- Animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- js -->
    <script src="../asset/counter.js"></script>

    <title>Document</title>
</head>
<body>

<?php include "../component/navbar.php"; ?>

<main class="text-white">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="../asset/img/halaman.jpeg" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center ">
                    <h1 class="featurette-heading animate__animated animate__slideInDown animate__fadeOutDown" >SMK N 1 KAWUNGANTEN</h1>
                    <p class="lead animate__animated animate__zoomIn animate__delay-1s ">Sekolah dengan fasilitas penunjang yang unggul, <br> menyiapkan Lulusan yang Ahli Praktisi yang handal <br> dan Suport system yang Terbaik</p>
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-warning text-white animate__animated animate__heartBeat animate__delay-3s">Learn more</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../asset/img/backround.jpg" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <h1 class="featurette-heading animate__animated animate__slideInDown">Jurusan Di SMKSAKA</h1>
                    <p class="lead animate__animated animate__zoomIn animate__delay-1s">Sekolah dengan fasilitas penunjang yang unggul, <br> menyiapkan Lulusan yang Ahli Praktisi yang handal <br> dan Suport system yang Terbaik</p>
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-warning text-white animate__animated animate__heartBeat animate__delay-3s">Learn more</a>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../asset/img/drone.jpeg" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <h1 class="featurette-heading animate__animated animate__slideInDown">Informasi PPDB</h1>
                    <p class="lead animate__animated animate__zoomIn animate__delay-1s">Sekolah dengan fasilitas penunjang yang unggul, <br> menyiapkan Lulusan yang Ahli Praktisi yang handal <br> dan Suport system yang Terbaik</p>
                    <p class="lead">
                        <a href="#" class="btn btn-lg btn-light fw-bold border-white bg-warning text-white animate__animated animate__heartBeat animate__delay-3s">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
</main>

<main id="jurusan">
    <div class="container jurusan mt-5 text-center">
        <h2>INFO JURUSAN</h2>
        <div class="row justify-content-center mt-5">
            <a href="../component/handler-jurusan.php?id=1" class="col-md-3 mb-4 card animate__animated animate__slideInUp animate__delay-0.5s bg-body-secondary">
                <div class="img-container">
                    <img src="../asset/img/tsm.jpg" alt="">
                    
                    <span class="badge">
                        <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                        <?php while ($result = mysqli_fetch_assoc($sql)) {
                            echo $result["view_jurusan"];
                        } ?>
                    </span>    
                </div>
                <div class="card-body">
                    <h3 class="card-title">Teknik Otomotif</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, iusto?.</p>
                </div>
            </a>
            <a href="../component/handler-jurusan.php?id=2" class="col-md-3 mb-4 card animate__animated animate__slideInUp animate__delay-0.5s bg-body-secondary">
                <div class="img-container">
                    <img src="../asset/img/dkv-.jpg" alt="">
                    <span class="badge">
                        <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                        <?php while ($result = mysqli_fetch_assoc($sql1)) {
                            echo $result["view_jurusan"];
                        } ?>
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Desain Komunikasi Visual</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, iusto?.</p>
                </div>
            </a>
            <a href="../component/handler-jurusan.php?id=3" class="col-md-3 mb-4 card animate__animated animate__slideInUp animate__delay-0.5s bg-body-secondary">
                <div class="img-container">
                    <img src="../asset/img/animasi.jpg" alt="">
                    <span class="badge">
                        <svg style="width: 20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                        <?php while ($result = mysqli_fetch_assoc($sql2)) {
                            echo $result["view_jurusan"];
                        } ?>
                    </span>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Animasi</h3>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, iusto?.</p>
                </div>
            </a>
        </div>
    </div> 
</main>





<main id="informasi" class="container text-center">
   <div class="alur  bg-body-secondary  mt-5">
    <br>
        <div class="alurgambar">
            <h2>ALUR PENDAFTARAN</h2>
                <img src="../asset/img/alur.jpg" alt="">
            </div>
        <br><br>
   </div>

   <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="video-container text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/vWVs8w-xA-M?si=qDR-9qqJ7u6Qpijt&amp;start=121" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>


</main>


<main class="bg-dark mt-5 text-white text-center">
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col jumlah">
                <h1 class="counter" id="counter" data-end="<?php echo $datajumlah; ?>">0</h1>
                <p>Jumlah Pendaftar</p>
            </div>
            <div class="col jumlah">
                <h1 class="counter1" id="counter1" data-end="<?php echo $dataterverif; ?>">0</h1>
                <p>Terverifikasi</p>
            </div>
            <div class="col jumlah">
                <h1 class="counter2" id="counter2" data-end="<?php echo $datatidakterverif; ?>">0</h1>
                <p>Tidak Terverifikasi</p>
            </div>
        </div>
        <br><br>
    </div>
</main>

<main class="bg-body-secondary">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/ujian.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/upacara1.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv2.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/upacara.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/halalbihalal.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tkr.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tsm.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv4.jpg" class="img-fluid" alt="Drone">
                    <div class="middle">
                        <div class="text">GALERI SAKA</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "../component/footer.php";?>

</body>
</html>
