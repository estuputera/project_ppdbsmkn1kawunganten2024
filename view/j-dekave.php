<?php 
require_once "../component/connect.php";

$view = $_GET["view"];

$jurusan = "desain_komunikasi_visual";
$query = "SELECT * FROM `komentar` WHERE jurusan = '$jurusan'";
$sql = mysqli_query($conn,$query);



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

<main style="margin-top: 100px;">
<div class="container my-5 mt-5">
    <header class="text-center mb-5">
        <h1>Membuka Pintu Kreativitas dengan Jurusan Desain Komunikasi Visual di SMK N 1 Kawunganten</h1>
        <p><strong>Penulis:</strong> Estu | <strong>Waktu Post:</strong> 15 Mei 2024 | <strong>Jumlah Dilihat:</strong> <?php echo $view ?></p>
    </header>

    <article class="article mb-5">
        <p>Jurusan Desain Komunikasi Visual (DKV) di SMK N 1 Kawunganten telah menjadi salah satu pilihan terbaik bagi siswa yang berbakat dalam seni dan desain. Dengan fasilitas yang memadai dan pendekatan pembelajaran yang praktis, jurusan ini telah berhasil melahirkan sejumlah talenta muda di bidang desain grafis, fotografi, dan videografi.
            <br><br>

            Prestasi yang telah diraih oleh siswa jurusan DKV di SMK N 1 Kawunganten menunjukkan kualitas pendidikan yang diberikan. Angga, salah satu siswa, berhasil meraih juara 1 dalam Lomba Kompetensi Siswa (LKS) desain grafis tingkat kabupaten. Sedangkan Jimmy, meraih juara 2 dalam kategori web technology. Prestasi ini tidak hanya menunjukkan bakat siswa dalam bidang desain dan teknologi web, tetapi juga dedikasi guru dalam membimbing mereka.
            <br><br>

            Fasilitas untuk jurusan DKV di SMK N 1 Kawunganten sangat lengkap dan berstandar industri. Lab komputer dilengkapi dengan perangkat lunak terkini yang digunakan dalam industri kreatif. Selain itu, studio fotografi dan videografi dilengkapi dengan peralatan yang memadai untuk menghasilkan karya-karya berkualitas tinggi. Hal ini memungkinkan siswa untuk belajar dan berlatih dalam lingkungan yang mendukung dan inspiratif.
            <br><br>

           Prestasi siswa jurusan DKV telah menarik perhatian beberapa agensi dan perusahaan desain. Angga, misalnya, juara 1 LKS desain grafis, kini bekerja sebagai freelancer dan melakukan pekerjaan remote untuk sebuah agensi desain. Prestasi ini menjadi inspirasi bagi siswa lainnya untuk mengejar karir di bidang desain komunikasi visual.
            <br><br>


            Pendekatan pembelajaran di jurusan DKV SMK N 1 Kawunganten sangat praktis dan kreatif. Siswa tidak hanya belajar teori, tetapi juga langsung mengaplikasikan pengetahuan mereka dalam pembuatan karya-karya desain grafis, motion grafis, video, dan foto. Praktik langsung ini memungkinkan siswa untuk mengembangkan kreativitas mereka dan memahami secara lebih mendalam tentang proses produksi karya desain.
            <br><br>

            Untuk mempersiapkan siswa menghadapi dunia kerja di industri desain, program magang diselenggarakan. Melalui program ini, siswa memiliki kesempatan untuk belajar dari para profesional di industri, memahami proses kerja, dan mengikuti perkembangan terbaru dalam bidang desain komunikasi visual. Pengalaman ini sangat berharga bagi siswa karena membantu mereka memperluas jaringan profesional dan mendapatkan wawasan tentang dunia kerja yang sebenarnya.
            <br><br>

            Jurusan Desain Komunikasi Visual di SMK N 1 Kawunganten tidak hanya memberikan pendidikan berkualitas dalam bidang desain grafis, fotografi, dan videografi, tetapi juga mempersiapkan siswa untuk menjadi profesional yang siap bersaing di pasar kerja yang kompetitif. Dengan fasilitas yang memadai, pendekatan pembelajaran praktis, dan dukungan dari guru dan alumni sukses, siswa memiliki semua yang mereka butuhkan untuk mengembangkan bakat dan meraih kesuksesan dalam karir di bidang desain komunikasi visual.
            <br><br>
            Bagi siswa yang memiliki minat dan bakat dalam seni dan desain, bergabung dengan jurusan DKV di SMK N 1 Kawunganten adalah langkah yang tepat untuk memulai perjalanan menuju dunia kreativitas dan inovasi.</p>
    </article>

    <div class="row text-center">
        <div class="col"></div>
        <div class="col">
        <h2>Video Jurusan</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/V6LZ7GcUWEY?si=8tWTupVF88bMuFtN&amp;start=113" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="col"></div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv-.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv5.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv2.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv-3.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv4.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv5.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv-1.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/dkv6.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
        </div>
    </div>

    <section class="comments">
        <h2>Komentar</h2>
        <?php if ($sql->num_rows > 0) {
                    while ($result = mysqli_fetch_assoc($sql)) { ?>
                        <div class="comment mb-3">
                            <p><strong><?php echo $result["nama_komentar"]; ?>:</strong><?php echo $result["komentar"]; ?></p>
                        </div>
                <?php }
            }?>

        <div class="comment-form mt-4">
            <h3>Tinggalkan Komentar</h3>
            <form action="../component/handler-command.php?jurusan=desain-komunikasi-visual&view=<?php echo $view?>" method="POST">
            <div class="form-group">
                <label for="name">Nama:</label>
                <input name="name_comment" type="text" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="comment">Komentar:</label>
                <textarea name="comment" id="comment" rows="4" class="form-control" required></textarea>
            </div>
            <input name="jurusan" type="hidden" value="desain_komunikasi_visual">
            <input name="view" type="hidden" value="<?php echo $view; ?>">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
        </div>
    </section>
</div>
</main>

<?php include "../component/footer.php";?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>