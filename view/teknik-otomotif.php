<?php 
require_once "../component/connect.php";

$view = $_GET["view"];

$jurusan = "teknik_otomotif";
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
        <h1>Raih Masa Depan Cerah dengan Bergabung di Jurusan Otomotif</h1>
        <p><strong>Penulis:</strong> Estu | <strong>Waktu Post:</strong> 15 Mei 2024 | <strong>Jumlah Dilihat:</strong> <?php echo $view ?></p>
    </header>

    <article class="article mb-5">
        <p>SMK Negeri 1 Kawunganten terus membuktikan diri sebagai salah satu lembaga pendidikan vokasional terbaik di Kabupaten Cilacap. Dengan berbagai prestasi yang telah diraih dan kerjasama dengan perusahaan-perusahaan terkemuka, jurusan Teknik Otomotif di SMK N 1 Kawunganten menjadi pilihan ideal bagi siswa yang ingin mengembangkan keterampilan di bidang otomotif. Jurusan ini menawarkan dua konsentrasi keahlian, yaitu Teknik Kendaraan Ringan dan Teknik Sepeda Motor.
        <br><br>

        Jurusan Teknik Otomotif di SMK N 1 Kawunganten telah menunjukkan prestasi luar biasa dengan meraih juara 2 pada Lomba Kompetensi Siswa (LKS) tingkat kabupaten untuk dua kategori, yaitu auto mobile dan perawatan serta servis kendaraan bermotor. Prestasi ini tidak hanya membuktikan kualitas pendidikan yang diberikan, tetapi juga dedikasi siswa dan guru dalam mengejar keunggulan di bidang otomotif.
        <br><br>

        Fasilitas yang tersedia di jurusan Teknik Otomotif SMK N 1 Kawunganten sangat mendukung proses pembelajaran. Sekolah ini memiliki bengkel praktik yang luas dan dilengkapi dengan alat-alat yang sesuai dengan standar industri. Hal ini memungkinkan siswa untuk belajar dan berlatih dengan peralatan yang sama seperti yang digunakan di dunia kerja nyata. Selain itu, fasilitas ini juga memastikan bahwa siswa dapat mengaplikasikan teori yang dipelajari ke dalam praktik dengan efektif.
        <br><br>

        Salah satu keunggulan dari jurusan Teknik Otomotif di SMK N 1 Kawunganten adalah kerjasama erat dengan perusahaan-perusahaan besar seperti Mitsubishi, Nasmoko, dan Astra Honda Motor. Kerjasama ini mencakup berbagai aspek penting, mulai dari sinkronisasi kurikulum, program kerja lapangan (PKL), workshop, hingga penyaluran tenaga kerja. Dengan adanya kerjasama ini, siswa tidak hanya mendapatkan pengetahuan teoritis tetapi juga pengalaman praktik yang berharga melalui program magang dan pelatihan yang disediakan oleh perusahaan mitra.
        <br><br>

        Salah satu contoh sukses dari alumni jurusan Teknik Otomotif adalah Rangga, yang berhasil meraih juara 1 LKS kategori auto mobile dan kini mendapatkan beasiswa untuk melanjutkan pendidikan di Akademi Toyota Indonesia. Kisah sukses Rangga menjadi inspirasi bagi siswa-siswa lainnya untuk terus berprestasi dan mengejar impian mereka.
        <br><br>

        Siswa di jurusan Teknik Otomotif SMK N 1 Kawunganten mendapatkan banyak ilmu dan pengalaman langsung melalui proses pembelajaran yang terstruktur dan berfokus pada praktik. Mereka belajar bagaimana melakukan servis mobil secara langsung dengan klien yang nyata, yang memberikan mereka gambaran yang jelas tentang bagaimana pekerjaan di industri otomotif berlangsung. Hal ini tidak hanya meningkatkan keterampilan teknis mereka tetapi juga mengasah kemampuan berinteraksi dengan pelanggan.
        <br><br>

        Jurusan Teknik Otomotif juga menyediakan program magang dan pelatihan khusus yang diselenggarakan oleh perusahaan mitra. Program ini memberikan kesempatan bagi siswa untuk bekerja langsung di lingkungan industri, belajar dari para profesional, dan memahami standar kerja yang diterapkan di perusahaan besar. Pengalaman ini sangat berharga bagi siswa karena membantu mereka mempersiapkan diri untuk memasuki dunia kerja setelah lulus.
        <br><br>

        Jurusan Teknik Otomotif di SMK N 1 Kawunganten menawarkan peluang luar biasa bagi siswa yang ingin mengembangkan keterampilan di bidang otomotif dan meraih masa depan yang cerah. Dengan dukungan fasilitas yang memadai, kerjasama dengan perusahaan-perusahaan ternama, dan fokus pada pengalaman belajar yang kaya dan praktis, jurusan ini tidak hanya membekali siswa dengan pengetahuan teknis tetapi juga pengalaman industri yang sangat dibutuhkan. Prestasi yang telah diraih, seperti juara di LKS tingkat kabupaten, serta kisah sukses alumni seperti Rangga, menunjukkan bahwa jurusan ini mampu mencetak lulusan yang kompeten dan siap bersaing di dunia kerja.
        <br><br>
        Bagi siswa yang bercita-cita untuk mengembangkan karir di industri otomotif, bergabung dengan jurusan Teknik Otomotif di SMK N 1 Kawunganten adalah langkah yang tepat. Di sini, mereka tidak hanya akan belajar tentang mesin dan teknologi kendaraan, tetapi juga mendapatkan kesempatan untuk berinteraksi dengan perusahaan besar, belajar dari para profesional, dan mempersiapkan diri untuk menjadi tenaga ahli yang handal di bidang otomotif.</p>
    </article>

    <div class="row text-center">
        <div class="col"></div>
        <div class="col">
        <h2>Video Jurusan</h2>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/V6LZ7GcUWEY?si=OYVtGPkyjkGDI_8D&amp;start=99" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="col"></div>
    </div>
    
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tkr.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tkr2.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tkr1.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tkr3.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/nasmoco1.png" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/toyota.jpg" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/ahm.png" class="img-fluid" alt="Drone">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 mb-4">
                <div class="image">
                    <img src="../asset/img/tsm.jpg" class="img-fluid" alt="Drone">
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
            <form action="../component/handler-command.php?jurusan=teknik-otomotif&view=<?php echo $view?>" method="POST">
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input name="name_comment" type="text" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="comment">Komentar:</label>
                    <textarea name="comment" id="comment" rows="4" class="form-control" required></textarea>
                </div>
                <input name="jurusan" type="hidden" value="teknik_otomotif">
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