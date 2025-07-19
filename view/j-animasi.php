<?php 
require_once "../component/connect.php";

$view = $_GET["view"];

$jurusan = "animasi";
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
        <h1>Membentuk Kreativitas Masa Depan dengan Jurusan Animasi di SMK N 1 Kawunganten</h1>
        <p><strong>Penulis:</strong> Estu | <strong>Waktu Post:</strong> 15 Mei 2024 | <strong>Jumlah Dilihat:</strong> <?php echo $view ?></p>
    </header>

    <article class="article mb-5">
    <p>Dalam era digital yang semakin berkembang pesat, industri animasi menjadi salah satu sektor yang mengalami pertumbuhan signifikan. Animasi tidak hanya digunakan dalam hiburan seperti film dan permainan video, tetapi juga dalam berbagai sektor lain seperti pendidikan, periklanan, dan media sosial. Menyadari potensi besar ini, SMK Negeri 1 Kawunganten menawarkan jurusan Animasi yang dirancang untuk membekali siswa dengan keterampilan dan pengetahuan yang dibutuhkan untuk sukses di dunia animasi.
        <br><br>

        Salah satu keunggulan utama dari jurusan Animasi di SMK N 1 Kawunganten adalah fasilitas yang lengkap dan modern. Sekolah ini memiliki laboratorium animasi yang dilengkapi dengan peralatan dan perangkat lunak terkini yang digunakan dalam industri animasi profesional. Ruang animasi yang luas dan nyaman memungkinkan siswa untuk bekerja secara optimal dalam menciptakan karya-karya animasi mereka. Fasilitas ini memberikan siswa kesempatan untuk belajar dan berlatih menggunakan teknologi yang sama seperti yang digunakan oleh para profesional di industri.
        <br><br>

        Pembelajaran di jurusan Animasi SMK N 1 Kawunganten tidak hanya fokus pada teori, tetapi juga menekankan pada praktik langsung. Siswa diajarkan untuk memahami konsep-konsep dasar animasi dan kemudian menerapkannya dalam proyek-proyek nyata. Salah satu proyek yang telah dihasilkan oleh siswa adalah video animasi untuk toko gerai di daerah Kawunganten. Melalui proyek ini, siswa tidak hanya belajar tentang teknik animasi, tetapi juga tentang bagaimana mengelola proyek dari awal hingga selesai, termasuk berinteraksi dengan klien dan memenuhi kebutuhan mereka.
        <br><br>

        Sebagai bagian dari kurikulum, siswa jurusan Animasi di SMK N 1 Kawunganten akan mengikuti Program Kerja Lapangan (PKL). Program ini memberikan kesempatan bagi siswa untuk mendapatkan pengalaman langsung di industri animasi. Selama PKL, siswa akan bekerja di perusahaan atau studio animasi, di mana mereka dapat belajar dari para profesional dan memahami dinamika kerja di dunia nyata. Pengalaman ini sangat berharga karena membantu siswa mempersiapkan diri untuk memasuki dunia kerja setelah lulus.
        <br><br>

        Meskipun jurusan Animasi di SMK N 1 Kawunganten saat ini belum memiliki prestasi yang menonjol, sekolah ini bertekad untuk terus meningkatkan kualitas pendidikan dan mendorong siswa untuk berprestasi di berbagai kompetisi. Rencana untuk menjalin kerjasama dengan industri animasi juga sedang diusahakan. Kerjasama ini diharapkan dapat membuka lebih banyak peluang bagi siswa untuk belajar dari para ahli, mendapatkan akses ke teknologi terbaru, dan memperluas jaringan profesional mereka.
        <br><br>

        Siswa di jurusan Animasi SMK N 1 Kawunganten merasakan manfaat besar dari pendekatan pembelajaran yang praktis dan berbasis proyek. Salah satu siswa, dalam wawancara, mengungkapkan bahwa "Praktik langsung membuat kami lebih memahami materi yang diajarkan. Kami bisa melihat hasil dari apa yang kami pelajari dalam bentuk proyek nyata seperti video animasi untuk toko lokal. Ini sangat memotivasi kami untuk terus belajar dan berkreasi."
        <br><br>

        SMK N 1 Kawunganten berkomitmen untuk terus meningkatkan kualitas pendidikan di jurusan Animasi. Dengan dukungan dari para guru yang berpengalaman dan berdedikasi, serta fasilitas yang memadai, sekolah ini berupaya untuk menciptakan lingkungan belajar yang kondusif bagi siswa untuk mengembangkan kreativitas dan keterampilan mereka. Sekolah juga berencana untuk memperluas kurikulum dan menambahkan lebih banyak modul tentang teknologi animasi terbaru dan tren industri.

        <br><br>
        Jurusan Animasi di SMK N 1 Kawunganten menawarkan peluang yang menjanjikan bagi siswa yang ingin mengembangkan keterampilan di bidang animasi dan meraih masa depan yang cerah. Dengan fasilitas yang lengkap, pendekatan pembelajaran yang praktis, dan program PKL yang memberikan pengalaman industri, siswa mendapatkan bekal yang kuat untuk sukses di dunia animasi. Meskipun saat ini prestasi dan kerjasama industri masih dalam tahap pengembangan, komitmen sekolah untuk terus berinovasi dan meningkatkan kualitas pendidikan memberikan harapan besar bagi masa depan siswa jurusan Animasi di SMK N 1 Kawunganten.</p>
    </article>

    <div class="row text-center">
        <div class="col"></div>
        <div class="col">
            <h2>Video Jurusan</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/V6LZ7GcUWEY?si=bko_nQBYTarvKyvi&amp;start=121" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="col"></div>
    </div>

    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/animasi.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an-4.jpeg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an-2.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an-3.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an1.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an-5.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an-6.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/an-7.jpeg" class="img-fluid" alt="Drone">
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
            <form action="../component/handler-command.php?jurusan=animasi&view=<?php echo $view?>" method="POST">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input name="name_comment" type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="comment">Komentar:</label>
                    <textarea name="comment" id="comment" rows="4" class="form-control" required></textarea>
                </div>
                <input name="jurusan" type="hidden" value="animasi">
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